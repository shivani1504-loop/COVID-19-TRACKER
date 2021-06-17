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
<body onload = "fetch()">

<!-- ********** INDIA CORONA UPDATE WITH GRAPH **********-->
<div class ="container-fluid p-5 bg-light text-center">   
   <h3 class= "text-uppercase text-center">India covid-19 live updates - Statewise Breakdown</h3> 
</div>

<div class = "container">

    <div class = "row text-center">
        <div class = "col-3  text-warning">
        <h5>Confirmed</h5>
        <p id ="confirmed"></p>
        </div>

        <div class = "col-3  text-info">
        <h5>Active</h5>
        <p id ="active"></p>
        </div>

        <div class = "col-3  text-success">
        <h5>Recovered</h5>
        <p id ="recovered"></p>
        </div>

        <div class = "col-3  text-danger">
        <h5>Deaths</h5>
        <p id ="deaths"></p>
        </div>
    
    </div>

    <canvas id = "myChart"></canvas>

</div>


<!-- ********** CORONA LATEST UPDATES **********-->
<section class= "corona_update mt-7 container-fluid ">
     <h3 class= "text-uppercase text-center">India Statewise Breakdown - Latest Updates</h3> 

    <div class = "table_responsive">
    
         <table  class = " table table-bordered  table-striped text-center" >
             <tr >                 
                 <th style="font-weight: bold;" class = "text-capitalize">state - statecode</th>      
                 <th style="font-weight: bold;" class = "text-capitalize">confirmed</th>
                 <th style="font-weight: bold;" class = "text-capitalize">active</th>
                 <th style="font-weight: bold;" class = "text-capitalize">recovered</th>
                 <th style="font-weight: bold;" class = "text-capitalize">deaths</th>
                 <th style="font-weight: bold;" class = "text-capitalize">last updated time</th>
                 
             </tr>


<?php
$data = file_get_contents('https://api.covid19india.org/data.json');
$coronalive = json_decode($data, true);
 
//echo "<pre>";

//print_r($coronalive);

//echo "</pre>";

$statescount = count($coronalive['statewise']);

$i=1;
while($i < $statescount) {
?>
<tr>
 
  <td><?php echo $coronalive['statewise'][$i]['state'] , ' - ', $coronalive['statewise'][$i]['statecode'] ?></td>
  <td><?php echo $coronalive['statewise'][$i]['confirmed']  ?></td>
  <td><?php echo $coronalive['statewise'][$i]['active']  ?></td>
  <td><?php echo $coronalive['statewise'][$i]['recovered']  ?></td>
  <td><?php echo $coronalive['statewise'][$i]['deaths']  ?></td>
  <td><?php echo $coronalive['statewise'][$i]['lastupdatedtime']  ?></td>
</tr>
 <!-- echo $coronalive['statewise'][$i]['lastupdatedtime'] . "<br>" ;
  echo $coronalive['statewise'][$i]['state'] . "<br>" ;
  echo $coronalive['statewise'][$i]['statecode'] . "<br>" ;
  echo $coronalive['statewise'][$i]['confirmed'] . "<br>" ;
  echo $coronalive['statewise'][$i]['active'] . "<br>" ;
  echo $coronalive['statewise'][$i]['recovered'] . "<br>" ;
  echo $coronalive['statewise'][$i]['deaths'] . "<br>" ; -->
<?php
  $i++;
}





?>

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
function topFunction(){
    document.body.scrollTop = 0;//for safari
    document.documentElement.scrollTop = 0; //for chrom,Firefox,IE and Opera
}



</script>


</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.3.2/chart.min.js" integrity="sha512-VCHVc5miKoln972iJPvkQrUYYq7XpxXzvqNfiul1H4aZDwGBGC0lq373KNleaB2LpnC2a/iNfE5zoRYmB4TRDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src ="jQuery.js"></script>
</html>
