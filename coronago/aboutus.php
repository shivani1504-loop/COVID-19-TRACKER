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

<!--///////////    about us section /////////////  -->

<div class= "container-fluid  pt-5 pb-5 mt-9" id ="aboutid">
    <div class = "row pt-5">
        <div class = "col-lg-5 col-md-6 col-12 ml-5">
            <img src = "image/aboutcorona.png" class= "img-fluid">
        </div>

        <div class = "col-lg-6 col-md-6 col-12">
           <h2>What is COVID-19(Corona Virus) </h2>
           <p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.
           This new virus & disease were unkown before the breakout began in Wuhan,china in Decembe 2019.</p>
           <p>Coronaviruses are a large family of viruses which may cause illness to cause respiratory
           infection ranging from the common cold to more severe disease such as Middle East respiratory
           Sundrome(MERS) and Severe Acute Respiratory Syndrome(SARS). The most recently discovered coronavirus
           causes coronavirus disease COVID-19.</p>
        </div>
    </div>
</div>


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
</script>
</body>
</html>