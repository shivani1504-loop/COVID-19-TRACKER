const COLORS = {
    confirmed: '#ff0000',
    recovered: '#008000',
    deaths: '#373c43',
}

const CASE_STATUS = {
    confirmed: 'confirmed',
    recovered: 'recovered',
    deaths: 'deaths',
}

let body = document.querySelector('body')

let cpuntries_list

let all_time_chart, days_chart, recovery_rate_chart

window.onload = async () => {
    console.log('ready...')

    //only init chart on page loaded first time

    initTheme ()

    initContryFilter()

    await initAllTimesChart()

    await initDaysChart()

    await initRecoveryRate()

    await loadData('Global')

    await loadCountrySelectList()

    document.querySelector('#country-select-toggle').onclick = () => {
        document.querySelector('#country-select-list').classList.toggle('active')
    }
}

loadData = async (country) => {
    startLoading()

    await loadSummary(country)

    await loadAllTimeChart(country)
   
    await loadDaysChart(country)

    endLoading()
}

startLoading = () => {
    body.classList.add('loading')
}

endLoading = () => {
    body.classList.remove('loading')
}

isGlobal =  (country) => {
    return country === 'Global'
}


numberWithCommas = (x) => {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
}

showConfirmedTotal = (total) => {
    document.querySelector('#confirmed-total').textContent = numberWithCommas(total)
}

showRecoveredTotal = (total) => {
    document.querySelector('#recovered-total').textContent = numberWithCommas(total)
}

showDeathsTotal = (total) => {
    document.querySelector('#deaths-total').textContent = numberWithCommas(total)
}

loadSummary = async (country) => {

      //country = slug

    let summaryData = await covidApi.getSummary()

    let summary = summaryData.Global

    if (!isGlobal(country)) {
        summary = summaryData.Countries.filter(e => e.Slug === country)[0]
    }
    //console.log(summaryData)
    showConfirmedTotal(summary.TotalConfirmed)
    showRecoveredTotal(summary.TotalRecovered)
    showDeathsTotal(summary.TotalDeaths)

    //load recovery rate

      await loadRecoveryRate(Math.floor(summary.TotalRecovered / summary.TotalConfirmed * 100))
    //load countries table

    let casesByCountries = summaryData.Countries.sort((a,b) => b.TotalConfirmed - a.TotalConfirmed)

    let table_countries_body = document.querySelector('#table-countries tbody')
    table_countries_body.innerHTML = ''

    for (let i = 0; i < 10; i++) {
        let row = `
        <tr>
           <td>${numberWithCommas(casesByCountries[i].Country)}</td>
           <td>${numberWithCommas(casesByCountries[i].TotalConfirmed)}</td>
           <td>${numberWithCommas(casesByCountries[i].TotalRecovered)}</td>
           <td>${numberWithCommas(casesByCountries[i].TotalDeaths)}</td>
        </tr>
        `
        table_countries_body.innerHTML += row
        
    }

}

initAllTimesChart = async () => {
    let Options = {
        chart: {
            type: 'area'
        },
        colors: [COLORS.confirmed, COLORS.recovered, COLORS.deaths],
        series: [],
        xaxis: {
            categories: [],
            labels: {
                show: true
            }
        },
        grid: {
            show: false
        },
        stroke: {
            curve: 'smooth'
        }
    }
    all_time_chart = new ApexCharts(document.querySelector('#all-time-chart'), Options)

    all_time_chart.render()
}
renderData = (country_data) => {
    let res = []
    country_data.forEach(e => {
        res.push(e.cases)
    })
    return res
}

renderWorldData = (world_data, status) => {
    let res = []
    world_data.forEach(e => {
        switch (status) {
            case CASE_STATUS.confirmed:
                res.push(e.TotalConfirmed)
                break
            case CASE_STATUS.recovered:
                res.push(e.TotalRecovered) 
                break
            case CASE_STATUS.deaths:
                res.push(e.TotalDeaths)
                break
        }
    })
    return res
}

loadAllTimeChart = async (country) => {
    let labels = []

    let confirm_data, recovered_data, deaths_data

    if (isGlobal(country)) {
        let world_data = await covidApi.getWorldAllTimeCases()

        world_data.sort((a,b) => new Date(a.Date) - new Date(b.Date))

        world_data.forEach(e => {
            let d = new Date(e.Date)
            labels.push(`${d.getFullYear()}-${d.getMonth() + 1}-${d.getDate()}`)
        })

        confirm_data = renderWorldData(world_data, CASE_STATUS.confirmed)
        recovered_data = renderWorldData(world_data, CASE_STATUS.recovered)
        deaths_data = renderWorldData(world_data, CASE_STATUS.deaths)
        //console.log(world_data)
    }else{
        let confirmed = await covidApi.getCountryAllTimeCases(country, CASE_STATUS.confirmed)
        let recovered = await covidApi.getCountryAllTimeCases(country, CASE_STATUS.recovered)
        let deaths = await covidApi.getCountryAllTimeCases(country, CASE_STATUS.deaths)

        confirm_data = renderData(confirmed)
        recovered_data = renderData(recovered)
        deaths_data = renderData(deaths)

        confirmed.forEach(e => {
            let d = new Date(e.Date)
            labels.push(`${d.getFullYear()}-${d.getMonth() + 1}-${d.getDate()}`)
        })
    }

    let series = [{
        name: 'confirmed',
        data: confirm_data
    }, {
        name: 'recovered',
        data: recovered_data
    }, {
        name: 'deaths',
        data: deaths_data
    }]

    all_time_chart.updateOptions({
        series: series,
        xaxis: {
            categories: labels
        }
    })
}

initDaysChart =async () => {
    let Options = {
        chart: {
            type: 'line'
        },
        colors: [COLORS.confirmed, COLORS.recovered, COLORS.deaths],
        series: [],
        xaxis: {
            categories: [],
            labels: {
                show: false
            }
        },
        grid: {
            show: false
        },
        stroke: {
            curve: 'smooth'
        }
    }
    days_chart = new ApexCharts(document.querySelector('#days-chart'), Options)

    days_chart.render()
}

loadDaysChart = async (country) => {
    let labels = []

    let confirm_data, recovered_data, deaths_data

    if (isGlobal(country)) {
        let world_data = await covidApi.getWorldDaysCases()

        world_data.sort((a,b) => new Date(a.Date) - new Date(b.Date))

        world_data.forEach(e => {
            let d = new Date(e.Date)
            labels.push(`${d.getFullYear()}-${d.getMonth() + 1}-${d.getDate()}`)
        })

        confirm_data = renderWorldData(world_data, CASE_STATUS.confirmed)
        recovered_data = renderWorldData(world_data, CASE_STATUS.recovered)
        deaths_data = renderWorldData(world_data, CASE_STATUS.deaths)
        //console.log(world_data)
    }else{
        let confirmed = await covidApi.getCountryDaysCases(country, CASE_STATUS.confirmed)
        let recovered = await covidApi.getCountryDaysCases(country, CASE_STATUS.recovered)
        let deaths = await covidApi.getCountryDaysCases(country, CASE_STATUS.deaths)

        confirm_data = renderData(confirmed)
        recovered_data = renderData(recovered)
        deaths_data = renderData(deaths)

        confirmed.forEach(e => {
            let d = new Date(e.Date)
            labels.push(`${d.getFullYear()}-${d.getMonth() + 1}-${d.getDate()}`)
        })
    }

    let series = [{
        name: 'confirmed',
        data: confirm_data
    }, {
        name: 'recovered',
        data: recovered_data
    }, {
        name: 'deaths',
        data: deaths_data
    }]

    days_chart.updateOptions({
        series: series,
        xaxis: {
            categories: labels
        }
    })
}

initRecoveryRate = async () => {
    let Options = {
        chart: {
            type: 'radialBar',
            height: '350'
        },
        series: [],
        labels:['Recovery Rate'],
        colors: [COLORS.recovered]
         
    }
    recover_rate_chart = new ApexCharts(document.querySelector('#recover-rate-chart'), Options)

    recover_rate_chart.render()
}

loadRecoveryRate = async (rate) => {
    // use update series
    recover_rate_chart.updateOptions([rate])
}

//dark mode switch

initTheme = () => {
    let dark_mode_switch = document.querySelector('#darkmode-switch')

    dark_mode_switch.onclick = () => {
        dark_mode_switch.classList.toggle('dark')
        body.classList.toggle('dark')

        setDarkChart(body.classList.contains('dark'))
    }
}

//set dark mode for chart
setDarkChart = (dark) => {
    let theme ={
        theme:{
            mode: dark ? 'dark' : 'light'
        }
    }
    all_time_chart.updateOptions(theme)
    adays_chart.updateOptions(theme)
    arecover_rate_chart.updateOptions(theme)
}

//country select
renderCountrySelectList = (list) => {
    let country_select_list = document.querySelector('#country-select-list')
    country_select_list.querySelectorAll('div').forEach(e => e.remove())
    list.forEach(e => {
        let item = document.createElement('div')
        item.classList.add('country-item')
        item.textContent = e.Country

        item.onclick = async () => {
            document.querySelector('#country-select span').textContent = e.Country
            country_select_list.classList.toggle('active')
            await loadData(e.Slug)
        }
        country_select_list.appendChild(item)
    })
}

loadCountrySelectList = async () => {
    let summaryData = await covidApi.getSummary()

    Countries_list = summaryData.Countries

    let country_select_list = document.querySelector('#country-select-list')

    let item = document.createElement('div')
    item.classList.add('country-item')
    item.textContent = 'Global'
    item.onclick = async () => {
        document.querySelector('#country-select span').textContent = 'Global'
        country_select_list.classList.toggle('active')
        await loadData('Global')
    }
    country_select_list.appendChild(item)

    renderCountrySelectList(Countries_list)
}

initContryFilter = () => {
    let input = document.querySelector('#country-select-list input')
    input.onkeyup = () => {
        let filtered = Countries_list.filter(e => e.country.toLowerCase().includes(input.value))
        renderCountrySelectList(filtered)
    }
}