<!DOCTYPE html>
<html>
    <head>
        <title>Reports</title>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="icon" type="image/png" href="images/logo.png" >
        <link rel="stylesheet" type="text/css" href="cssStyling/logoStyling.css"> 
        <link rel="stylesheet" type="text/css" href="cssStyling/ReportCSSS.css"> 
        <link rel="icon" type="image/png" href="images/logo.png" >
        <link rel="stylesheet" type="text/css" href="cssStyling/healthPractitionerStyleSheet.css">  
    </head>
    <body style="background:url(images/clinic.jpg)no-repeat; background-size:100%;">
        <form action="Day_To_Day_Reporting.php" method="post">
        <center>
        <div class="header">
        <img src="images/logo.png" />
           <nav>
           <ul>
               <li style="margin-left: 2em"><a href="Contact.php">Contact Us</a></li> 
               <li style="margin-left: 2em"><a href="HP_ViewAppointments.php">Back to:    HCP_ViewAppointments</a></li>
               <li style="margin-left: 2em"><a href="healthPractitioner.php">Back to: Health Practitioner</a></li>
               <li style="margin-left: 7em"><a target="_blank" title="follow me on Twitter" href="https://www.twitter.com/lifehealthcare"><img alt="follow me on Twitter" src="https://c866088.ssl.cf3.rackcdn.com/assets/twitter30x30.png" border></a></li>
               <li style="margin-left: 2em"><a target="_blank" title="follow me on facebook" href="https://www.facebook.com/lifehealthcare"><img alt="follow me on facebook" src="https://c866088.ssl.cf3.rackcdn.com/assets/facebook30x30.png" border=0></a></li> 
               <li style="margin-right: -5em"><a target="_blank" title="follow me on youtube" href="https://www.youtube.com/lifehealthcare"><img alt="follow me on youtube" src="https://c866088.ssl.cf3.rackcdn.com/assets/youtube30x30.png" border=0></a></li>
               <li style="margin-right: -15em"><a target="_blank" title="follow me on instagram" href="https://www.instagram.com/lifehealthcare"><img alt="follow me on instagram" src="https://c866088.ssl.cf3.rackcdn.com/assets/instagram30x30.png" border=0></a></li> 
           </ul>
        </nav>
       </div>
    <table align="center"> 
            <h1 align="center">Day to Day Report</h1><br> 
            
                <button><input type="submit" name="report" value="Client Report informations"/></button>
                <button><input type="submit" name="searchSupplements" value="Product information and stock levels"/></button> 
         
                         
           <?php
            //Connect to Database server and select the database 
                $dbhost = 'mysql:host=localhost; dbname=lifehealthcare';
                $username = 'root';
                $password = '';
                 $PDOdb = new PDO($dbhost, $username, $password);
                    echo '<br>';
                    echo '<br>'; 
         
                if(isset($_POST["report"]))
                {
                        
                    $query = 'SELECT DISTINCT clientdata.Client_id,clientdata.C_name,
                                clientdata.C_surname,clientdata.Address,
                                clientdata.code
                                FROM clientdata
                                INNER JOIN bookinginfo
                                ON bookinginfo.Client_booking_id=clientdata.Client_id';
                    
                    $statement = $PDOdb->prepare($query);
                    $statement->execute();
                    $appointment = $statement->fetchAll();
                    $statement->closeCursor();
                   
                    foreach ($appointment as $appointments)
                        {
                        echo '<tr><th>ID</th>'.''.
                              '<th>Name</th>'.''.
                              '<th>Surname</th>'.''.
                               '<th>Address</th>'.''.
                               '<th>Code</th></tr> ';
                        
                       echo "<tr><td>".$appointments ['Client_id']."</td><td>".
                               $appointments ['C_name']."</td><td>".
                               $appointments['C_surname']."</td><td>".
                               $appointments['Address']."</td><td>".
                               $appointments['code']."</td></tr>";
                      
                        
                }}
                
    ?>
   
   <?php
         //Connect to Database server and select the database 
            $dbhost = 'mysql:host=localhost; dbname=lifehealthcare';
            $username = 'root';
            $password = '';
            $PDOdb = new PDO($dbhost, $username, $password);
                echo '<br>';
                echo '<br>'; 
                
                //Select Supplements
                if(isset($_POST["searchSupplements"]))
                {
                    $query = 'SELECT DISTINCT * FROM supplements
                              WHERE  Min_levels BETWEEN 0 AND 10 = Stock_levels';
                    $statement = $PDOdb->prepare($query);
                    $statement->execute();
                    $searchReport = $statement->fetchAll();
                    $statement->closeCursor();
                   
                    foreach ( $searchReport as $filterReport)
                        {
                          echo '<tr><th>Supplement ID</th>'.''.
                              '<th>Description</th>'.''.
                              '<th>Supplier ID</th>'.''.
                               '<th>Minimum Level</th>'.''.
                               '<th>Stock Level</th></tr> ';
                          
                        echo "<tr><td>".$filterReport['Suppl_id'].' '."</td><td>"
                              .' '.$filterReport['Description']."</td><td>"
                              .' '.$filterReport['Supplier_id']."</td><td>"
                              .' '.$filterReport['Min_levels']."</td><td>"
                              .' '.$filterReport['Stock_levels']."</td></tr>";
                        }
                }
?>
      </center>
      </table>
      </form>  

    </body>
  
</html>

