<?php  

$server = 'localhost';
$user= 'root';
$password= '';
$db = 'health';

$con = mysqli_connect($server,$user,$password,$db);

if ($con->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

if(!$con)
{
    die("Error" . mysqli_connect_error());
}

if($con){
    ?>
    <script>
       alert("DB Connection Successful");
    </script>
    <?php
}

?>