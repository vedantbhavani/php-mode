<?php
 echo "Ready to connect the server";

 $servername = "localhost";
 $username = "root";
 $password = "";

 $conn = mysqli_connect($servername , $username , $password);
 if(!$conn){
    die("<br>Sorry we are connecting to fail: ". mysqli_connect_error($conn));
 }
 echo "<br>connection is succssful";

 $sql = "CREATE DATABASE vsdata";

 $result =  mysqli_query($conn , $sql);
 if($result){
    echo "<br>Database Created Sussfully";
}
else{
    echo ("Database not Created Sussfully because this error ==> ". mysqli_error($conn));
 }

?>