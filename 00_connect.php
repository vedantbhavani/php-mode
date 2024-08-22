<?php
 echo "Ready to connect the server";

 $servername = "localhost";
 $username = "root";
 $password = "";
 $database = "vsdata";

 $conn = mysqli_connect($servername , $username , $password , $database);
 if(!$conn){
    die("<br>Sorry we are connecting to fail: ". mysqli_connect_error($conn));
 }
 echo "<br>connection is succssful";
 
?>