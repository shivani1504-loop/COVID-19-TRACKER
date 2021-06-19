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

<!-- ////////////////   Survey /////////////   -->
<div class = "container-fluid  pt-5 pb-5" id ="urveyid">
    <div class = " section_header text-center">
        <h1> Survey </h1>
    </div>

    <div class = " container">
        <div class = "row">
            <div class = "col-lg-8  offset-lg-2 col-12">
               <form action= "" method ="POST">
                    
               <div class = "form-group">
                    <label >Full Name</label>
                    <input type = "text" class = "form-control" name = "username" placeholder = "Full Name" autocomplete = "off" required>
                    </div>

                    <div class = "form-group">
                    <label >Email </label>
                    <input type = "email" class = "form-control" name = "email" placeholder = "Email@example.com" autocomplete = "off" required>
                    </div>

                 <div class = "form-group">
                    <label >Mobile</label>
                    <input type = "tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="Format: 123-456-7890" maxlength=10 class = "form-control" name = "mobile" placeholder = "Mobile" autocomplete = "off" required>
                 </div>

                    <div class ="form-group">
                        <label> Select Symptoms</label> <br></br>

                        <div class =" custom-control custom-checkbox custom-control-inline text-capitalize">
                        <!-- <input type="checkbox" id="Cold" name="Cold" value="Cold"> -->
                        <input type ="checkbox" id ="customcheckbox1" name = "coronasym[]" value ="cold">
                        <label class ="custom-control-lable" for ="Cold"> Cold </label>
                        </div>

                        <div class =" custom-control custom-checkbox custom-control-inline text-capitalize">
                        <input type ="checkbox" id ="customcheckbox2" name = "coronasym[]" value ="fever">
                        <label class ="custom-control-lable" for ="customcheckbox2">fever</label>
                        </div>

                        <div class =" custom-control custom-checkbox custom-control-inline text-capitalize">
                        <input type ="checkbox" id ="customcheckbox3" name = "coronasym[]" value ="breath">
                        <label class ="custom-control-lable" for ="customcheckbox3">Difficulty in  breath </label>
                        </div>

                        <div class =" custom-control custom-checkbox custom-control-inline text-capitalize">
                        <input type ="checkbox" id ="customcheckbox4" name = "coronasym[]" value ="tired">
                        <label class ="custom-control-lable" for ="customcheckbox4">Feeling weak </label>
                        </div>
                    </div>
                    
                  <div class = "form-group">
                    <label for = "exampleFormControlTextarea1">Comments: </label>
                    <textarea  class = "form-control" id = "exampleFormControlTextarea1"  row = "3" name = "msg">
                    </textarea>
                 </div>
                
                <button type ="submit" class =" btn btn-primary" name = "submit"> Submit</button>
                </form>

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

<style>
    .custom-control-inline { 
            display: -webkit-inline-box; 
        }
</style>
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


<?php

include 'dbcon.php';
 
if(isset($_POST['submit']))
{

    $username = $_POST['username'];
    $email = $_POST['email'];
    $mobile= $_POST['mobile'];
    $symp = $_POST['coronasym'];
    $msg = $_POST['msg'];


    $chk = "";

    foreach($symp as $chk1){
        $chk .= $chk1.","; 
    }
    // // print Concatenate String
    // echo "<script>alert('$chk');</script>";
      
    $insertquery = "insert into coronacase(username, email, mobile, symp, message )
    	values('$username','$email','$mobile','$chk','$msg')";

    $query = mysqli_query($con,$insertquery);

    if($con){
        ?>
        <script>
           alert("inserted successful");
        </script>
        <?php
    }else{
        ?>
        <script>
           alert("No inserted ");
        </script>
        <?php
    }
    


}
?>