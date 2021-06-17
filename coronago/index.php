<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
        

    <?php include 'link/links.php' ?>
    <?php include 'css/style.php' ?>
    <?php include 'shared/HomeNavBar.php' ?>

    <link rel="stylesheet" href="jquery-jvectormap-2.0.5.css" />   
    <script src="jquery-jvectormap-2.0.5.min.js"></script>
    
    <script src="world.js"></script>
</head>

<body class = "loading" onload = "fetch()"> 
<!-- ////////////////   COVID - 19 Countries Wise Graph /////////////   -->
    <!--main container-->
        <div class="content">
            <div class="container">
                <!--country select-->
                <div class="row">
                    <div class="col-3 col-md-6 col-sm-12">
                        <div class="box">
                            <div class="country-select" id="country-select">
                                <div class="country-select-toggle" id="country-select-toggle">
                                    <span>
                                        Global
                                    </span>
                                    <i class="bx bx-chevron-down"></i>
                                </div>
                                <div class="country-select-list" id="country-select-list">
                                    <input type="text" placeholder="SEELCT COUNTRY NAME">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--tracking information-->
                <div class="row">
                  <!--left country--->
                    <div class = "col-8 col-md-12 col-sm-12" >
                       <div class="row">
                            <!--country-->
                            <div class = "col-4 col-md-4 col-sm-12">
                                <div class = "box box-hover">
                                    <div class="count count-confirmed">
                                        <div class ="count-icon">
                                            <i class ="bx bxs-virus"></i> 
                                        </div>
                                            <div class="count-info">
                                            <h5 id ="confirmed-total">--</h5>
                                            <span>confirmed</span>
                                            </div>
                                    </div>
                                </div>
                                
                            </div>
                            
                            <div class = "col-4 col-md-4 col-sm-12">
                                    <div class = "box box-hover">
                                        <div class="count count-recovered">
                                            <div class ="count-icon">
                                                <i class ="bx bxs-smile"></i> 
                                            </div>
                                                <div class="count-info">
                                                <h5 id ="recovered-total">--</h5>
                                                <span>recovered</span>
                                                </div>
                                        </div>
                                    </div>                             
                            </div>
                            
                            <div class = "col-4 col-md-4 col-sm-12">
                                    <div class = "box box-hover">
                                        <div class="count count-deaths">
                                            <div class ="count-icon">
                                                <i class ="bx bxs-sad"></i> 
                                            </div>
                                            <div class="count-info">
                                                <h5 id ="deaths-total">--</h5>
                                                <span>deaths</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <!--end country--->
                        <!--All time chart--->
                        <div class="col-12"  style="display:none;">
                            <div class="box">
                                <div class="box-header">
                                    all times
                                </div>
                                <div class="box-body">
                                    <div id ="all-time-chart"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                        
                            <div style= "float:right; padding-right: 380px; padding-bottom: 10px;">
                            <h5>Statistics: </h5>
                            Total cases, cured and deaths <br/><br/>
                                <div id="mapcontainer" style="width: 600px; height: 400px"></div>
                            </div>
                        </div>
                        <!--end all time chart--->

                            <!--embed video--->
                            <div class="col-6 col-md-6 col-sm-12">
                                <div class="box">
                                    <div class="box-header">
                                        What is covid-19?
                                    </div>
                                    <div class="box-body">
                                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/OZcRD9fV7jo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            <!--end embed video--->

                             <!--embed video--->
                             <div class="col-6 col-md-6 col-sm-12">
                               <div class="box">
                                   <div class="box-header">
                                     How to Protect Your Self
                                   </div>
                                   <div class="box-body">
                                   <iframe width="100%" height="315" src="https://www.youtube.com/embed/PNliVJuJkCw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                   </div>
                               </div>
                             </div>
                             <!--end embed video--->
                       </div>
                      
                    </div>
                    <!--end  left country--->

                    <!--rigth country--->
                    <div class="col-4 col-md-12 col-md-12" style="display:none;">
                        <!--30 days chart--->
                        <div class="box">
                            <div class="box-header">
                                last 30 days
                            </div>
                            <div class="box-chart">
                                <div id="days-chart"></div>
                            </div>
                        </div>
                        <!--end 30 days chart--->

                        <!--recovery rate chart--->
                        <div class="box">
                            <div class="box-header">
                                Recovery rate
                                </div>
                                <div class="box-body">
                                <div id="recover-rate-chart"></div>
                            </div>
                        </div>
                        <!--end recovery rate chart--->

                        <!--top country affected--->
                        <div class="box">
                        <div class="box-header">
                        top countries affected
                        </div>
                        <div class="box-body">
                        <table class="table-countries" id="table-countries">
                            <thead>
                                <tr>
                                    <th>Country</th>
                                    <th>Confirmed</th>
                                    <th>Recovered</th>
                                    <th>Deaths</th>
                                
                                
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>test</td>
                                    <td>test</td>
                                    <td>test</td>
                                    <td>test</td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                        </div>
                        <!--end top country affected--->
                    </div>
                    <!--end rigth country--->
                    
                </div>

                <!--tracking information-->
                
            </div>
        </div>
    <!--end of main container-->




      <!--apexchart-->
      <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
      <!--JS-->
      <script src="js/fetchApi.js"></script>
      <script src="js/covidApi.js"></script>
      <script src="js/app.js"></script>
      <script src="css/grid.css"></script>
 
<!-- ////////////     top cursor    ////////////  -->
<!--
<div class = "container scrolltop float-right  pr-5 ">
    <i class = "fa fa-arrow-up" onclick = "topFunction()" id = "myBtn"> </i>
</div> -->

</body>


<!-- footer  -->
<footer  class = "mt-5">
    <div class = "footer_style text-white text-center container-fluid">
         <p class="bg-primary text-white"> This Project made by Shivani Shrivastava</p>
    </div>
</footer>
</html>


<script>
        function loadmap() {

            $.ajax({

                // url : "https://corona.lmao.ninja/V2/countries",
                url : "https://api.covid19api.com/summary",
                

                success: function(data){
                    console.log(data);

                    var infectedData = {};
                    var countryWiseDeaths = {};
                    var countryWiseCured = {};

                    var worldCases = 0;
                    var worldCured = 0;
                    var worldDeaths = 0;

                    // for (var i =0; i< data.length; i++) {
                        
                    //     var elem = data[i];
                    //     var cases = elem.cases;
                    //     var country = elem.countryInfo.iso2;

                    //     infectedData[country] = cases;
                    //     countryWiseDeaths[country] = elem.deaths;
                    //     countryWiseCured[country] = elem.recovered;

                    //     worldCases += cases;
                    //     worldCured += elem.recovered;
                    //     worldDeaths += elem.deaths;
                    // }

                    for (var i =0; i< data.Countries.length; i++) {
                        
                        var elem = data.Countries[i];
                        var cases = elem.TotalConfirmed;
                        var country = elem.CountryCode;

                        infectedData[country] = cases;
                        countryWiseDeaths[country] = elem.TotalDeaths;
                        countryWiseCured[country] = elem.TotalRecovered;

                        worldCases += cases;
                        worldCured += elem.recovered;
                        worldDeaths += elem.deaths;
                    }

                    var CuredPercentage = parseFloat((worldCured)/(worldCases)*100).toFixed(2); 
                    var DeathsPercentage = parseFloat((worldDeaths)/(worldCases)*100).toFixed(2);

                    $("#totalCases").html("Total Cases : <br />" + worldCases);
                    $("#totalCured").html("Total Cured : <br />" + worldCured +"(" + CuredPercentage + "%)");
                    $("#totalDeaths").html("Total Deaths : <br />" + worldDeaths +"(" + DeathsPercentage + "%)");

                    $('#mapcontainer').vectorMap({
                        map: 'world_merc',
                        series: {
                        regions: [{
                        values: infectedData,
                        scale: ['#FFFFFF', '#FF0000'],
                        normalizeFunction: 'polynomial'
                         }]
                      },
                     onRegionTipShow: function(e, el, code){

                        var html = "";
                        html += "<br /> Total Cases : " + infectedData[code];
                        var deathsPercentage = parseFloat((countryWiseDeaths[code])/(infectedData[code])*100).toFixed(2);
                        
                        html += "<br />Cured : " + countryWiseCured[code];
                        html += "<br /> Deaths : " + countryWiseDeaths[code];                         
                         html += "<br />Deaths Percentage  : " + deathsPercentage + "%";
                        el.html(el.html()+ html);
                    }
                });

                    //console.log(infectedData);
                }
            })

           // $('#mapcontainer').vectorMap({map: 'world_merc'});
        }

        loadmap();
    </script>


<script type = "text/javascript">
/*$(' .count').counterUp({
    delay:10,
    time:3000
})
*/


mybutton = document.getElementById("myBtn");
//when the  usre scroll down 100px from the top of document, show the button
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop>100)
    {
        mybutton.style.display ="block";
    }
    else
    {
        mybutton.style.display = "none";
    }
}
//when the user clicks on the buttton, scroll to the top of the document
function topFunction(){
    document.body.scrollTop = 0;//for safari
    document.documentElement.scrollTop = 0; //for chrom,Firefox,IE and Opera
}

</script>


