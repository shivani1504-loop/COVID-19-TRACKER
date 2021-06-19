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

<!-- ////////////////   coronavirus symptons /////////////   -->
<div class = "container-fluid sub_section pt-5" id ="sympid">
    <div class = " section_header text-center mb-5">
        <h1>Coronavirus Symptoms</h1>
    </div>
    <div class = "container">
    
        <div class = "col-lg-12 col-md-12 col-12" style="align-items: center; display: flex;">
            <div class = "row" style="margin-left: 100px;">
                <div class = "col-lg-4 col-md-4 col-4">
                    <figure class = "text-center">
                    <img src ="image/cough.jpg"  width = "120" heigth ="120">
                    </figure>
                    <p align="center">Cough</p>
                </div>     
                <div class = "col-lg-4 col-md-4 col-4">
                    <figure class = "text-center">
                    <img src ="image/runny nose.jpg"  width = "120" heigth ="120">
                    </figure>
                    <p align="center">Runny Nose</p>
                </div>    
                <div class = "col-lg-4 col-md-4 col-4">
                    <figure class = "text-center">
                    <img src ="image/cold.jpg"  width = "120" heigth ="120">
                    </figure>
                    <p align="center">Cold</p>
                </div>    

                <div class = "col-lg-4 col-md-4 col-4">
                    <figure class = "text-center">
                    <img src ="image/fever.jpg"  width = "120" heigth ="120">
                    </figure>
                    <p align="center">Fever</p>
                </div>  

                <div class = "col-lg-4 col-md-4 col-4">
                    <figure class = "text-center">
                    <img src ="image/tiredness.jpg"  width = "120" heigth ="120">
                    </figure>
                    <p align="center">Tiredness</p>
                </div>  

                <div class = "col-lg-4 col-md-4 col-4">
                    <figure class = "text-center">
                    <img src ="image/difficulty.png"  width = "120" heigth ="120">
                    </figure>
                    <p align="center">Difficulty Breathing(severe cases)</p>
                </div>  

            </div> 
        </div>
    </div>
</div> 
<!-- footer  -->
<footer>
    <div class = "footer_style text-white text-center container-fluid">
         <p class="bg-primary text-white"> This Project made by Shivani Shrivastava</p>
    </div>
</footer> 
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
</body>
</html>