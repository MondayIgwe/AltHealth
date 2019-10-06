<!DOCTYPE html>
<html>
    <head>
      <title>Life Health Care</title>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
            <link rel="stylesheet" type="text/css" href="cssStyling/logoStyling.css"> 
            <link rel="icon" type="image/png" href="images/logo.png" >
           
            <link rel="stylesheet" type="text/css" href="cssStyling/ReportCSSS.css">
            <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body style="background:url(images/clinic.jpg)no-repeat; background-size:100%;">
              <center><h1>View Appointment Bookings</h1></center>
         <center>
         <div class="header">
            <img src="images/logo.png" />
            <nav>
                <ul>   
                    <li style="margin-left: 2em"><a href="healthPractitioner.php">Back</a></li>
                    <li style="margin-left: 2em"><a href="Day_To_Day_Reporting.php">Go to: Generate Day To Day Reporting</a></li>
                    <li style="margin-left: 2em"><a href="MIS_Report.php">Go to: Generate MIS Reporting</a></li>
                    <li style="margin-left: 2em"><a target="_blank" title="follow me on Twitter" href="https://www.twitter.com/lifehealthcare"><img alt="follow me on Twitter" src="https://c866088.ssl.cf3.rackcdn.com/assets/twitter30x30.png" border></a></li>
                    <li style="margin-left: 2em"><a target="_blank" title="follow me on facebook" href="https://www.facebook.com/lifehealthcare"><img alt="follow me on facebook" src="https://c866088.ssl.cf3.rackcdn.com/assets/facebook30x30.png" border=0></a></li> 
                    <li style="margin-left: 2em"><a target="_blank" title="follow me on youtube" href="https://www.youtube.com/lifehealthcare"><img alt="follow me on youtube" src="https://c866088.ssl.cf3.rackcdn.com/assets/youtube30x30.png" border=0></a></li>
                    <li style="margin-left: 2em"><a target="_blank" title="follow me on instagram" href="https://www.instagram.com/lifehealthcare"><img alt="follow me on instagram" src="https://c866088.ssl.cf3.rackcdn.com/assets/instagram30x30.png" border=0></a></li>
                </ul>
           </nav>
        </div>
    </center>   
   <form action="HP_ViewAppointments.php" method="post">
    <center>
        <header id="header" class="clearfix">	
        <div><p style="text-align:center;">
        <table border="1">     
      
         <?php 
        //Connect to Database server and select the database 
            require_once 'Connect_DB.php';
         
                if(isset($_POST["submit"]))
                {
                    //FETCH ALL BOOKING APPOINTMENTS
                    $query = 'SELECT * FROM bookinginfo';
                    $statement = $PDOdb->prepare($query);
                    $statement->execute();
                    $appointment = $statement->fetchAll();
                    $statement->closeCursor();
                   
                    foreach ($appointment as $appointments)
                     {
                        echo '<center><tr><th>Client ID</th>'.''.
                              '<th>Appointment_Date</th>'.''.
                              '<th>Time</th></tr>'.'';
                        
                        
                        echo "<tr><td>".$appointments['Client_booking_id'].''.
                             "</td><td>".$appointments['Appointment_Date'].''.
                             "</td><td>".$appointments['Time']."</td></tr></center>";
                        }
                }
                ?></p>
                </div></header></center>   
                <br>
                 <br>
                 <br>
             <!--VIEW ALL SUBMIT BUTTON-->
             <center><input type="submit" name="submit" value="View All Appointments" width="100" height="20"></center>
            <br>
            <br>
            <br>
         
            
   
          <!--VIEW CLIENT DETAILS SUBMIT BUTTON-->
             <center><input type="text" name="Client_id"  placeholder="Enter Identification Number" size="25"</center>
             <center><input type="submit" name="client_Details" value="View Client Details"></center>   
             <?php
              //Connect to Database server 
              require_once 'Connect_DB.php';
              
                //View Client Details
                if(isset($_POST["client_Details"]))
                {
                   $ID=$_POST['Client_id'];                    
                    //FETCH ALL APPOINTMENTS
                    $query = "SELECT * FROM clientdata WHERE Client_id='$ID'";
                    $stat = $PDOdb->prepare($query);
                    $stat->execute();
                    $details = $stat->fetch(PDO::FETCH_ASSOC);
                    if($details){
                          echo 'Client ID:'.'  '.$details['Client_id'].' <br>  '.'Client Name and Surname:'.'  '.$details['C_name'].' '.$details['C_surname'].'<br>'
                                  .'Address:'.'  '.$details['Address'].'<br>'.'Code:'.'  '.$details['Code'].'<br>'.'Telephone:'.'  '.$details['C_Tel_H'].'<br>'
                                  .'Work Cellphone:'.'  '.$details['C_Tel_W'].'<br>'
                                  .'Mobile Cellphone:'.'  '.$details['C_Tel_Cell'].'<br>'.'Email:'.'  '.$details['C_Email'].'<br>'
                                  .'Reference:'.'  '.$details['C_Reference'];
                }else {
                    echo 'Client Details NOT available!';   
                }}
                ?></table>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>            
	<div>
             <p style="text-align:bottom;">Copyright &#169; 2019 AltHealth Healthcare. All rights reserved.</p>
        </div>
        </footer>
    </body>
</html>
