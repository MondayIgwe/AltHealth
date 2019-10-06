<?php
try
{    
     //Connect to Database server and select the database 
            $dbhost = 'mysql:host=localhost; dbname=lifehealthcare';
            $username = 'root';
            $password = '';
            $PDOdb = new PDO($dbhost, $username, $password);
     
  } catch (Exception $ex){
   echo ($ex ->getMessage());
  }
  ?>
