<?php
    echo "Welcome to the world of cookie";

    setcookie("category" , "Books" ,time() + 172800 , "/");
    echo "<br>Cookie is set successfully";
?>