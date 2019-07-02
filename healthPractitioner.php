<?php
//Connect to Database server and select the database 
            $dbhost = 'mysql:host=localhost; dbname=lifehealthcare';
            $username = 'root';
            $password = '';
             $PDOdb = new PDO($dbhost, $username, $password);
                echo '<br>';
                echo '<br>'; 
       
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
               <li style="margin-left: 2em"><a href="HP_BookAppointments.php">Book Appointments for a Patient</a></li>
               <li style="margin-left: 2em"> <a href="HP_ViewAppointments.php">View Appointments</a></li>
            </ul>
        </nav>
        </div>
    </center>
    </body>
</html>
