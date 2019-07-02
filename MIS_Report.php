<!DOCTYPE HTML>
<html>
    <head>
        <title>MIS_Reports</title>
         <link rel="icon" type="image/png" href="images/logo.png" >
        <link rel="stylesheet" type="text/css" href="cssStyling/logoStyling.css"> 
        <link rel="stylesheet" type="text/css" href="cssStyling/ReportCSSS.css">
        <link rel="stylesheet" type="text/css" href="cssStyling/healthPractitionerStyleSheet.css">     
    </head>
    <body style="background:url(images/clinic.jpg)no-repeat; background-size:100%;">
        <form action="MIS_Report.php" method="post">
        <center>
        <div class="header">
        <img src="images/logo.png" />
           <nav>
           <ul>
               <li><a href="HP_ViewAppointments.php">Back to: HCP_ViewAppointments</a></li>
            </ul>
        </nav>
       </div>
    </center><td>
         <h1 align="center">Management Information System Report</h1><br> 
          <table align="center">
              <button><input type="submit" name="Invoices" value="Client Invoices Report"/></button>
              <button><input type="submit" name="Bookings" value="Booking Appointments Reports"/></button>
               <button><input type="submit" name="searchPatients" value="Patients for the Month"/></button> 
         <?php
         //Connect to Database server and select the database 
            $dbhost = 'mysql:host=localhost; dbname=lifehealthcare';
            $username = 'root';
            $password = '';
            $PDOdb = new PDO($dbhost, $username, $password);
                echo '<br>';
                echo '<br>'; 

                
                //Select Client Invoices
                if(isset($_POST["Invoices"]))
                {
                    $query = 'SELECT DISTINCT * FROM clientdata, invoice_info
                              WHERE clientdata.Client_id = invoice_info.Client_id';
                    $statement = $PDOdb->prepare($query);
                    $statement->execute();
                    $searchReport = $statement->fetchAll();
                    $statement->closeCursor();
                   
                    foreach ( $searchReport as $filterReport)
                        {
                        echo '<tr><th>Client ID</th>'.''.
                              '<th>Invoice Number</th>'.''.
                              '<th>Total Excluding Consultation</th>'.''.
                              '<th>Total Including Consultation</th></tr>';
                             
                        
                        echo "<tr><td>".$filterReport['Client_id'].''.
                             "</td><td>".$filterReport['INVNUM'].''.
                             "</td><td>".$filterReport['Total(Suppl)'].''.
                             "</td><td>".$filterReport['Total(Suppl+Consultation)'].''."</td></tr>";
                     
                            }
                }?>
              
              <?php
         //Connect to Database server and select the database 
            $dbhost = 'mysql:host=localhost; dbname=lifehealthcare';
            $username = 'root';
            $password = '';
            $PDOdb = new PDO($dbhost, $username, $password);
                echo '<br>';
                echo '<br>'; 
  
                
                //Select Booking Appointments
                if(isset($_POST["Bookings"]))
                {
                    $query = 'SELECT DISTINCT * FROM bookinginfo, clientdata
                              WHERE clientdata.Client_id = bookinginfo.Client_id';
                    $statement = $PDOdb->prepare($query);
                    $statement->execute();
                    $searchReport = $statement->fetchAll();
                    $statement->closeCursor();
                   
                    foreach ( $searchReport as $filterReport)
                        {
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
            $dbhost = 'mysql:host=localhost; dbname=lifehealthcare';
            $username = 'root';
            $password = '';
            $PDOdb = new PDO($dbhost, $username, $password);
                echo '<br>';
                echo '<br>'; 
                
                //Select Client Invoices
                if(isset($_POST["searchPatients"]))
                {
                    $query = 'SELECT DISTINCT Appointment_Date, Client_id 
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
                              .' '.$filterReport['Client_id']."</td></tr>";
                        }
                }
?>
          </table>
       </form>
    </body>
</html>