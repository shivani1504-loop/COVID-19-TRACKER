<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewprot" content="width=device-width, initial-scale=1.0">
    <title></title>
    <?php include 'link/links.php' ?>
    <?php include 'css/style.php' ?>
    <?php include 'shared/HomeNavBar.php' ?>    
</head>
<script src="js/app.js"></script>
<body onload = "fetch()">
<!-- ********** CORONA LATEST UPDATES **********-->
<section class= "corona_update mt-7 container-fluid  p-5">
    <div class= "mb-5">
        <h3 class= "text-uppercase text-center">worldwide covid count - Total vs new</h3> 
    </div>
    <div class = "table_responsive">    
         <table  class = " table table-bordered  table-striped text-center" id = "tbval">
             <tr>
                 <th style="font-weight: bold;">Country</th>                 
                 <th style="font-weight: bold;">Total Confirmed</th>
                 <th style="font-weight: bold;">New Confirmed</th>
                 <th style="font-weight: bold;">Total Recovered</th>            
                 <th style="font-weight: bold;">New Recovered</th>
                 <th style="font-weight: bold;">Total Deaths</th>
                 <th style="font-weight: bold;">New Deaths</th>   
             </tr>
        </table>
    </div>   
</section>

<!-- ////////////     top cursor    ////////////  -->
<div class = "container scrolltop float-right  pr-5 ">
    <i class = "fa fa-arrow-up" onclick = "topFunction()" id = "myBtn"> </i>
</div>

<!-- footer  -->
<footer  class = "mt-5">
    <div class = "footer_style text-white text-center container-fluid">
         <p class="bg-primary text-white"> This Project made by Shivani Shrivastava</p>
    </div>
</footer>


<script type = "text/javascript">



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

function fetch(){
    $.get("https://api.covid19api.com/summary",
    
    function (data){
        //console.log(data['Countries'].length);
        var tbval = document.getElementById('tbval');

        for(var i=1; i<(data['Countries'].length); i++){
            var x = tbval.insertRow();
            x.insertCell(0);

            tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
            tbval.rows[i].cells[0].style.bckground = '#191970';
            tbval.rows[i].cells[0].style.color = 'CD5C5C';
             
            x.insertCell(1);

            tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
            tbval.rows[i].cells[1].style.bckground = '#008080';

            x.insertCell(2);

            tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['NewConfirmed'];
            tbval.rows[i].cells[2].style.bckground = '#7FFFD4';

            x.insertCell(3);

            tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalRecovered'];
            tbval.rows[i].cells[3].style.bckground = '#DC143C';

            x.insertCell(4);

            tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewRecovered'];
            tbval.rows[i].cells[4].style.bckground = '#FFF8DC';

            x.insertCell(5);

            tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['TotalDeaths'];
            tbval.rows[i].cells[5].style.bckground = '#20B2AA';

            x.insertCell(6);

            tbval.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewDeaths'];
            tbval.rows[i].cells[6].style.bckground = '#AFEEEE';
        }
    }
    )
}
</script>
</body>
</html>