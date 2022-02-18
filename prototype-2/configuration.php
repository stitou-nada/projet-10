<?php
   $connect = mysqli_connect('localhost', 'test', 'test123', 'demo');

   // check connection
 if(!$connect){
      echo 'Connection error: ' . mysqli_connect_error(); 
  }
?>