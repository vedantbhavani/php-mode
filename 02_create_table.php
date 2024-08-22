<?php
    echo "Ready to connect the server";
   
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "vsdata";
   
    $conn = mysqli_connect($servername , $username , $password , $database);
    if(!$conn){
       die("<br>Sorry we are connecting to fail: ". mysqli_connect_error());
    }
    echo "<br>connection is succssful";

    $tbdata = "CREATE TABLE `phptrip` (`no` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(11) NOT NULL , `city` VARCHAR(11) NOT NULL , PRIMARY KEY (`no`)) ENGINE = InnoDB;";
   
    $result = mysqli_query($conn , $tbdata);
    
    if($result){
        echo "<br> Table is created successfully";
    }
    else{
        echo "<br> Table creating mistake ==>". mysqli_error($conn);
    }
?>