<?php
$conn = mysqli_connect("localhost", "root", "", "user_log");
         
         // Check connection
         if($conn === false){
             die("ERROR: Could not connect. "
                 . mysqli_connect_error());
         }
         echo"<br/>";
         ?>