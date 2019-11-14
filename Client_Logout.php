<?php
 session_start();
    try{
     require_once 'Connect_DB.php';   
                            
       //User Log out
      if(isset($_POST['logout'])){                              
         session_destroy();
         header('location:index.php');
       }}catch (Exception $ex) {
       $ex->getMessage(); 
       }                    
?>
   