<?php
 
 require "./00_connect.php";

 $sql = "INSERT INTO `phptrip` (`name`, `city`) VALUES ('Dhairya', 'Navsari');";

 $result =  mysqli_query($conn , $sql);

 if($result){
    echo "<br>Row inserted successfully";
}
else{
    echo ("<br>Database not Created Sussfully because this error ==> ". mysqli_error($conn));
 }

?>