<?php
   session_start();
   
   //destroy session & check if session is destroyed
   if(session_destroy()) {

      //redirect to login page
      header("Location: login.php");
   }
?>