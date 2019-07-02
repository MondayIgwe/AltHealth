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
                    $query = 'SELECT Appointment_Date, Client_id 
                        FROM bookinginfo 
                        WHERE Appointment_Date <= CURRENT_DATE
                        ORDER BY Appointment_Date DESC';
                    
                    $statement = $PDOdb->prepare($query);
                    $statement->execute();
                    $searchReport = $statement->fetchAll();
                    $statement->closeCursor();
                   
                    foreach ( $searchReport as $filterReport)
                        {
                        echo "<tr><td>".$filterReport['Appointment_Date'].' '."</td><td>"
                              .' '.$filterReport['Client_id']."</td></tr>";
                        }
                }
?>