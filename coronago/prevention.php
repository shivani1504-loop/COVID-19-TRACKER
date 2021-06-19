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

<!-- ////////////////   prevention against coronavirus /////////////   -->
<div class = "container-fluid sub_section pt-5" id ="preventid">
    <div class = " section_header text-center mb-5">
        <h1> 6 Steps Prevention Against Coronavirus</h1>
    </div>
    <div class = "container">
        <div class = "col-lg-12 col-md-12 col-12 ">
            <div class = "row">
                <div class = "col-lg-4 col-md-4 col-12">
                    <figure class = "text-center">
                    <img src ="image/distance.jpg" class = "img-fluid" width = "90" heigth ="90">
                    </figure>
                </div>
                <div class = "col-lg-8 col-md-8 col-12">
                    <br/>
                    <p>Avoid close contact (1 meter or 3 feet ) people who are unwell</p>
                </div>

                <div class = "col-lg-4 col-md-4 col-12">
                    <figure class = "text-center">
                    <img src ="image/handwash.jpg" class = "img-fluid" width = "90" heigth ="90">
                    </figure>
                </div>
                <div class = "col-lg-8 col-md-8 col-12">
                    <br/><br/>
                    <p>Wash your hand regularly for 20seconds, with soap and water or alcoholbased hand rub</p>
                </div>    
                          
                <div class = "col-lg-4 col-md-4 col-12">
                    <figure class = "text-center">
                    <img src ="image/mask.jpg" class = "img-fluid" width = "90" heigth ="90">
                    </figure>
                </div>
                <div class = "col-lg-8 col-md-8 col-12">
                    <br/><br/>
                    <p>Cover your  nose or mouth with a disposable tissue or flexed elbow when you cough or sneeze</p>
                </div>    

                

                <div class = "col-lg-4 col-md-4 col-12">
                    <figure class = "text-center">
                    <img src ="image/home.jpg" class = "img-fluid" width = "90" heigth ="90">
                    </figure>
                </div>
                <div class = "col-lg-8 col-md-8 col-12">
                    <br/><br/>
                    <p>Stay home & self isolate from others in the household if you fell unwell</p>
                </div>   

                <div class = "col-lg-4 col-md-4 col-12">
                    <figure class = "text-center">
                    <img src ="image/news.jpg" class = "img-fluid" width = "90" heigth ="90">
                    </figure>
                </div>
                <div class = "col-lg-8 col-md-8 col-12">
                    <br/><br/>
                    <p>stay informed by watching news & follow the recommended practices</p>
                </div>  


                <div class = "col-lg-4 col-md-4 col-12">
                    <figure class = "text-center">
                    <img src ="image/illness.jpg" class = "img-fluid" width = "90" heigth ="90">
                    </figure>
                </div>
                <div class = "col-lg-8 col-md-8 col-12">
                    <br/>
                    <p>If you have fever,cough and difficulty breathing ,seek medical care early</p>
                </div>  

            </div>                
        </div>
    </div>
</div>




<!-- ////////////     top cursor    ////////////  -->
<div class = "container scrolltop float-right  pr-5 ">
    <i class = "fa fa-arrow-up" onclick = "topFunction()" id = "myBtn"> </i>
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