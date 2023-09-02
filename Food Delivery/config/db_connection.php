<?php

    $servername='localhost';
    $username='root';
    $password='';
    $dbname = "store_db";

    $conn=mysqli_connect($servername,$username,$password,"$dbname");
    
      if(!$conn){
          header("Location:index.php");
          die('Could not Connect MySql Server:' );
         
          }
      
?>