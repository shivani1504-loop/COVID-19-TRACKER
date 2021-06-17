$(document).ready(function() {
    var url = "https://api.covid19india.org/data.json"

    $.getJSON(url,function(data) {
        console.log(data)

        var total_active,total_confirmed,total_recovered,total_deaths
         
        var state = []

        var confirmed = []
        var recovered = []
        var deaths = []
        var active =[]

        $.each(data.statewise,function(id,obj){
            state.push(obj.state)
            confirmed.push(obj.confirmed)
            recovered.push(obj.recovered)
            deaths.push(obj.deaths)
            active.push(obj.active)

        })
        

        state.shift()
        confirmed.shift()
        recovered.shift()
        deaths.shift()
        active.shift()

        console.log(state)
        
        total_active = data.statewise[0].active
        total_confirmed = data.statewise[0].confirmed
        total_recovered = data.statewise[0].recovered
        total_deaths = data.statewise[0].deaths

        
        $("#active").append(total_active)
        $("#confirmed").append(total_confirmed)
        $("#recovered").append(total_recovered)
        $("#deaths").append(total_deaths)

        var myChart = document.getElementById("myChart") .getContext('2d')

        var chart = new Chart(myChart,{
            type:'bar',
            data:{
                labels:state,
                datasets:[
                    {
                        label: "Confimed Cases",
                        data: confirmed,
                        backgroundColor: "#f1c40f",
                        minBarLength: 3
                    },

                    {
                        label: "Active Cases",
                        data: active,
                        backgroundColor: "#5DADE2"
                    },

                    {
                        label: "Recovered Cases",
                        data: recovered,
                        backgroundColor: "#82E0AA"
                    },

                    {
                        label: "Deaths Cases",
                        data: deaths,
                        backgroundColor: "#E74C3C"
                    },
                ]
            },
            options:{}
        })


    })
})