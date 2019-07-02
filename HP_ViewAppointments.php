<!DOCTYPE html>
<html>
    <head>
      <title>Life Health Care</title>
            <link rel="stylesheet" type="text/css" href="cssStyling/logoStyling.css"> 
            <link rel="icon" type="image/png" href="images/logo.png" >
            <link rel="stylesheet" type="text/css" href="cssStyling/healthPractitionerStyleSheet.css"> 
            <link rel="stylesheet" type="text/css" href="cssStyling/ReportCSSS.css">
    </head>
    <body style="background:url(images/clinic.jpg)no-repeat; background-size:100%;">
        <form action="HP_ViewAppointments.php" method="post">
          <table align="center">
              <center><h1>View Appointment Bookings</h1></center>
         <center>
         <div class="header">
            <img src="images/logo.png" />
            <nav>
                <ul>
                    <li style="margin-left: 2em"><a href="healthPractitioner.php">Back to:  Health Practitioner</a></li>
                    <li style="margin-left: 2em"><a href="Day_To_Day_Reporting.php">Go to: Generate Day To Day Reporting</a></li>
                    <li style="margin-left: 2em"><a href="MIS_Report.php">Go to: Generate MIS Reporting</a></li>
                </ul>
        </nav>
        </div>
    </center>
            <td><?php 
        //Connect to Database server and select the database 
            $dbhost = 'mysql:host=localhost; dbname=lifehealthcare';
            $username = 'root';
            $password = '';
             $PDOdb = new PDO($dbhost, $username, $password);
                echo '<br>';
                echo '<br>'; 
         
                if(isset($_POST["submit"]))
                {
                    //FETCH ALL APPOINTMENTS
                    $query = 'SELECT * FROM bookinginfo';
                    $statement = $PDOdb->prepare($query);
                    $statement->execute();
                    $appointment = $statement->fetchAll();
                    $statement->closeCursor();
                   
                    foreach ($appointment as $appointments)
                        {
                        echo '<tr><th>Client ID</th>'.''.
                              '<th>Appointment_Date</th>'.''.
                              '<th>Time</th></tr>';
                        
                        
                        echo "<tr><td>".$appointments['Client_id'].''.
                             "</td><td>".$appointments['Appointment_Date'].''.
                             "</td><td>".$appointments['Time']."</td></tr>";
                        }
                }
                ?></td>
              <br>
                 <br>
                 <br>
             <!--VIEW ALL SUBMIT BUTTON-->
             <center><input type="submit" name="submit" value="View All Appointments"><br>
                 <br>
                 <br>
                 <br>    
        </form>
       </table>
    </body>
</html>