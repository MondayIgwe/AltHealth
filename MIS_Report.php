<!DOCTYPE HTML>
<html>
    <head>
        <title>MIS_Reports</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="cssStyling/css_sticky_social_bar.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">          
        <link rel="stylesheet" type="text/css" href="cssStyling/logoStyling.css"> 
        <link rel="stylesheet" type="text/css" href="cssStyling/ReportCSSS.css">
        <link rel="stylesheet" type="text/css" href="cssStyling/healthPractitionerStyleSheet.css">     
    </head>
    <body style="background:url(images/clinic.jpg)no-repeat; background-size:100%;">
        <form action="MIS_Report.php" method="post">
            <h1 align="center"><b>Management Information System Report</h1></b><br> 
        <center>
        <div class="header">
         <img src="images/logo.png" class="img-circle" alt="Cinque Terre" width="100" height="100">
          <nav>
           <ul>
               <object width="200" height="200" align="center" data="helloworld.swf"><li><b><a href="Generate_reports.php">Back</a></b></li></object>
            <div class="icon-bar">
                 <object width="200" height="200" align="center" data="helloworld.swf"><li style="margin-left: 2em"><a target="_blank" title="follow me on Twitter" href="https://www.twitter.com/lifehealthcare"><img alt="follow me on Twitter" src="https://c866088.ssl.cf3.rackcdn.com/assets/twitter30x30.png" border></a></li></a></object>
                 <object width="200" height="200" align="center" data="helloworld.swf"><li style="margin-left: 2em"><a target="_blank" title="follow me on facebook" href="https://www.facebook.com/lifehealthcare"><img alt="follow me on facebook" src="https://c866088.ssl.cf3.rackcdn.com/assets/facebook30x30.png" border=0></a></li></object> 
                 <object width="200" height="200" align="center" data="helloworld.swf"><li style="margin-left: 2em"><a target="_blank" title="follow me on youtube" href="https://www.youtube.com/lifehealthcare"><img alt="follow me on youtube" src="https://c866088.ssl.cf3.rackcdn.com/assets/youtube30x30.png" border=0></a></li></object>
                 <object width="200" height="200" align="center" data="helloworld.swf"><li style="margin-left: 2em"><a target="_blank" title="follow me on instagram" href="https://www.instagram.com/lifehealthcare"><img alt="follow me on instagram" src="https://c866088.ssl.cf3.rackcdn.com/assets/instagram30x30.png" border=0></a></li></object>
            </div>
               <object width="200" height="200" align="center" data="helloworld.swf"><li style="margin-left: 2em"><b><a href="index.php">Log out</a></b></li></object>
                 
           </ul>
        </nav>
       </div>
        <td>
          <table align="center">
              <button><input type="submit" name="Invoices" value="Client Invoices Report"/></button>
              <button><input type="submit" name="Bookings" value="Booking Appointments Report"/></button>
              <button><input type="submit" name="searchPatients" value="Patients for the Month  Report"/></button> 
    <?php
      session_start();
         //Connect to Database server and select the database 
           require 'Connect_DB.php';          
                //Select Client Invoices
                if(isset($_POST["Invoices"]))
                {
                    $query = 'SELECT DISTINCT * FROM clientdata, invoice_info
                              WHERE clientdata.Client_id = invoice_info.Client_id';
                    $statement = $PDOdb->prepare($query);
                    $statement->execute();
                    $searchReport = $statement->fetchAll();
                    $statement->closeCursor();
                   
                    foreach ( $searchReport as $filterReport){
                        echo '<tr><th>Client ID</th>'.''.
                              '<th>Invoice Number</th>'.''.
                              '<th>Total Excluding Consultation</th>'.''.
                              '<th>Total Including Consultation</th></tr>';
                             
                        echo "<tr><td>".$filterReport['Client_id'].''.
                             "</td><td>".$filterReport['INVNUM'].''.
                             "</td><td>".$filterReport['Total(Suppl)'].''.
                             "</td><td>".$filterReport['Total'].''."</td></tr>";   
                  }
         }?>     
        <?php
         //Connect to Database server and select the database 
             require 'Connect_DB.php';            
                //Select Booking Appointments
                if(isset($_POST["Bookings"]))
                {
                    $query = 'SELECT DISTINCT * FROM bookinginfo, clientdata
                              WHERE clientdata.Client_id = bookinginfo.Client_booking_id';
                    $statement = $PDOdb->prepare($query);
                    $statement->execute();
                    $searchReport = $statement->fetchAll();
                    $statement->closeCursor();
                   
                    foreach ( $searchReport as $filterReport){
                        echo '<tr><th>Appointment Date</th>'.''.
                              '<th>Client Id</th>'.''.
                              '<th>Time</th>'.''.
                               '<th>Client Name</th>'.''.
                               '<th>Surname</th></tr> ';
                        
                        echo "<tr><td>".$filterReport['Appointment_Date'].''.
                             "</td><td>".$filterReport['Client_id'].''.
                             "</td><td>".$filterReport['Time'].''.
                             "</td><td>".$filterReport['C_name'].''.
                             "</td><td>".$filterReport['C_surname']."</td></tr>";
                        }
    }?>
    <!--FILTER A summary of the number of patients that were seen for the month / year-->
   <?php
         //Connect to Database server and select the database 
             require 'Connect_DB.php';
                
                //Select Client Invoices
                if(isset($_POST["searchPatients"]))
                {
                    $query = 'SELECT DISTINCT Appointment_Date, Client_booking_id 
                        FROM bookinginfo 
                        WHERE Appointment_Date <= CURRENT_DATE
                        ORDER BY Appointment_Date DESC';
                    
                    $statement = $PDOdb->prepare($query);
                    $statement->execute();
                    $searchReport = $statement->fetchAll();
                    $statement->closeCursor();
                   
                    foreach ( $searchReport as $filterReport)
                        {
                         echo '<tr><th>Appointment Date</th>'.''.
                              '<th>Client Id</th></tr> ';   
                        echo "<tr><td>".$filterReport['Appointment_Date'].' '."</td><td>"
                              .' '.$filterReport['Client_booking_id']."</td></tr>";
                }
            }
?>
        </table>
       </form>
      </center>
    </body>
    <center>
<div>
   <b><p style="text-align:bottom;">Copyright &#169; 2019 Life Health Care. All rights reserved.</p></b>
 </div>
</center>
</html>
