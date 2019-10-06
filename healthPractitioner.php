<?php
    session_start();
    if(!$_SESSION['auth']){
        header('location:Admin_login');
    }

      //Connect to Life health Care Database  
      require_once 'Connect_DB.php';
      
     //Query the database for user
    $query = $PDOdb->prepare("SELECT * FROM login;");
    $query->execute();
    
    //Fetch the username and password for login
    $rows = $query->fetchAll(PDO::FETCH_ASSOC);
    
       foreach($rows as $row){
        echo $row['username']." "."Login Succesful!";
        }
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="cssStyling/logoStyling.css">  

        <title>Welcome to Life health Care</title>
        <link rel="icon" type="image/png" href="images/logo.png">
    </head>
    <body style="background:url(images/clinic.jpg)no-repeat; background-size:100%;"> 
    <center><h1>Welcome! Health Practitioner</h1></center>
    <center>
         <div class="header">
        <img src="images/logo.png" />
        <nav>
           <ul>
               <li style="margin-left: 2em"><a target="_blank" title="follow me on Twitter" href="https://www.twitter.com/lifehealthcare"><img alt="follow me on Twitter" src="https://c866088.ssl.cf3.rackcdn.com/assets/twitter30x30.png" border></a></li>
               <li style="margin-left: 2em"><a target="_blank" title="follow me on facebook" href="https://www.facebook.com/lifehealthcare"><img alt="follow me on facebook" src="https://c866088.ssl.cf3.rackcdn.com/assets/facebook30x30.png" border=0></a></li> 
               <li style="margin-left: 2em"><a target="_blank" title="follow me on youtube" href="https://www.youtube.com/lifehealthcare"><img alt="follow me on youtube" src="https://c866088.ssl.cf3.rackcdn.com/assets/youtube30x30.png" border=0></a></li>
               <li style="margin-left: 2em"><a href="HP_BookAppointments.php">Book Appointments for a Patient</a></li>
               <li style="margin-left: 2em"><a href="HP_ViewAppointments.php">View Appointments</a></li>
               <li style="margin-left: 2em"><a href="Admin_add_new_patitent.php">Add a New Patient</a></li>
               <li style="margin-left: 2em"> <a href="invoice.php">Generate Invoice</a></li>
             
            </ul>
        </nav>
        </div>
    </center>
    </body>
</html>
