<!DOCTYPE html>
<html>
    <head>
        <title>Appointment Bookings</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="cssStyling/css_sticky_social_bar.css">
        <link rel="stylesheet" type="text/css" href="cssStyling/logoStyling.css"> 
        <link rel="stylesheet" type="text/css" href="cssStyling/appointmentsStyleSheet.css"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body style="background:url(images/appointments.png)no-repeat; background-size:100%;">
        <form action="Client_BookAppointment.php" method="post">
    <center>
        <div class="header">
          <img src="images/logo.png" class="img-circle" alt="Cinque Terre" width="100" height="100">
           <nav>
              <ul>
               <div class="icon-bar">
                 <object width="200" height="200" align="center" data="helloworld.swf"><li style="margin-left: 2em"><a target="_blank" title="follow me on Twitter" href="https://www.twitter.com/lifehealthcare"><img alt="follow me on Twitter" src="https://c866088.ssl.cf3.rackcdn.com/assets/twitter30x30.png" border></a></li></a></object>
                 <object width="200" height="200" align="center" data="helloworld.swf"><li style="margin-left: 2em"><a target="_blank" title="follow me on facebook" href="https://www.facebook.com/lifehealthcare"><img alt="follow me on facebook" src="https://c866088.ssl.cf3.rackcdn.com/assets/facebook30x30.png" border=0></a></li></object> 
                 <object width="200" height="200" align="center" data="helloworld.swf"><li style="margin-left: 2em"><a target="_blank" title="follow me on youtube" href="https://www.youtube.com/lifehealthcare"><img alt="follow me on youtube" src="https://c866088.ssl.cf3.rackcdn.com/assets/youtube30x30.png" border=0></a></li></object>
                 <object width="200" height="200" align="center" data="helloworld.swf"><li style="margin-left: 2em"><a target="_blank" title="follow me on instagram" href="https://www.instagram.com/lifehealthcare"><img alt="follow me on instagram" src="https://c866088.ssl.cf3.rackcdn.com/assets/instagram30x30.png" border=0></a></li></object>
               </div>
                  <object width="200" height="200" align="center" data="helloworld.swf"><li><b><a href="Client_ViewAppointments.php">Back</a></b></li></object>
                  <object width="200" height="200" align="center" data="helloworld.swf"><b><li style="margin-left: 2em"><a href="index.php">Log out</a></b></li></object>             
            </ul>
        </nav>
       </div>
      </center>
             <table align="center">
                <tr>
                   <th colspan="2"><h2 align="center">Book Appointment</h2></th>
                </tr>
                <tr>
                    <td><b>Client ID:</b></th>
                    <td><input type="text" name="Client_id" required placeholder="Identification Numbers" maxlength="13"/></td><br>
                </tr>
               <tr>
                   <td><b>Appointment Date:</b></td>
                   <td><select name="Appointment_Date">
                <option>Select Appointment Date</option>
              <?php
                session_start();
               //Connect to Database server and select the database 
                    $dbhost = 'mysql:host=localhost; dbname=lifehealthcare';
                    $username = 'root';
                    $password = '';
            
                    $PDOdb = new PDO($dbhost, $username, $password);
                    $query = $PDOdb->prepare("SELECT * FROM bookinginfo;");
                    $query->execute();
                    $rows = $query->fetchAll();
                    foreach($rows as $row){?>
                    <option><?php echo $row['Appointment_Date'];?></option>
              <?php }?></td>
                </select></td>
               </tr>
               <tr>
                   <td><b>Appointment Time:</b></th>
                   <td><select name="Time">
                <option>Select Appointment Time</option>
             <?php
               
               //Connect to Database server and select the database 
                    require_once 'Connect_DB.php';
            
                    $PDOdb = new PDO($dbhost, $username, $password);
                    $query = $PDOdb->prepare("SELECT * FROM bookinginfo;");
                    $query->execute();
                    $rows = $query->fetchAll();
                    foreach($rows as $row){?>
                    <option><?php echo $row['Time'];?></option>
                     <?php }?></td>
                </select></td>
               </tr>
               </br>
               <!--SUBMIT BUTTON-->
               <td><button><input type="submit" name="submit" value="Book Appointment"></button></td>
<td><?php

//INSERT INTO THE TABLE
    if(isset($_POST["submit"]))
    {
try 
     {

        //Connect to Database server and select the database 
          require_once 'Connect_DB.php';
     
            //GET THE DATA FROM THE FORM
            $clientID = $_POST['Client_id'];
            $appDate = $_POST['Appointment_Date'];
            $appTime = $_POST['Time'];

            //INSERT Appointments INTO THE TABLE
            $PDOquery = "INSERT INTO `bookinginfo`(`Appointment_Date`, `Client_booking_id`, `Time`) 
                         VALUES (:Appointment_Date,:Client_booking_id,:Time)";

            $PDOresult= $PDOdb->prepare($PDOquery);
            $PDOExec = $PDOresult->execute(array(":Client_booking_id"=>$clientID,":Appointment_Date"=>$appDate,":Time"=>$appTime));
            if($PDOExec)
            {
              
                  echo '<script type="text/javascript">';
                  echo ' alert("Booking Appointment for'.' '.$clientID.' '.'  '.'has been received!")';
                  echo '</script>';
              echo '<br>';
              echo '<br>';
            } else {
                 echo '<script type="text/javascript">';
                 echo ' alert("Client ID Booking Appointment Already Exist, Please book appointment for the another client")';
                 echo '</script>';
            }} catch (Exception $ex) {
                   echo ($ex ->getMessage());
               }
    }
?></td>
           </table>  
       </form>
    </body>
    <center>
<div>
   <b><p style="text-align:bottom;">Copyright &#169; 2019 Life Health Care. All rights reserved.</p></b>
 </div>
</center>
</html>