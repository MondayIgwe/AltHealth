<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="cssStyling/logoStyling.css">  
    </head>
    <body style="background:url(images/clinic.jpg)no-repeat; background-size:100%;"> 
    <center><h1>Welcome To Client Side</h1></center>
    <center>
        <div class="header">
        <img src="images/logo.png" />
           <nav>
           <ul>
                  <li><a href="Client_BookAppointment.php">Book  New Appointment</a></li>
            </ul>
        </nav>
       </div>
      </center>
    <form action="Client_ViewAppointments.php" method="post">
          <table align="center">
            <td><?php 
        //Connect to Database server and select the database 
            $dbhost = 'mysql:host=localhost; dbname=lifehealthcare';
            $username = 'root';
            $password = '';
            $PDOdb = new PDO($dbhost, $username, $password);
                echo '<br>';
                echo '<br>'; 
         //View appointments
                if(isset($_POST["submit"]))
                {
                    $ID=$_POST['Client_id'];                    
                    //FETCH ALL APPOINTMENTS
                    $query = "SELECT * FROM bookinginfo WHERE Client_id='$ID'";
                    $statement = $PDOdb->prepare($query);
                    $statement->execute();
                    $appointment = $statement->fetch(PDO::FETCH_ASSOC);
                    
                    if($appointment){
                          echo 'Client ID is:'.'  '.$appointment['Client_id'].' <br>  '.'Your appointment is scheduled on'.'  '.' '.$appointment['Appointment_Date'].' <br>   '.'Between  '.' '.$appointment['Time'];
                        
                } else {
                    echo 'Client ID Appointment NOT FOUND!'.'<br> '.' Please book an appointment.'.''.'<br>'.'Thank You!';
                }
                }
                ?></td>
             <!--CHECK APPOINTMENTS SUBMIT BUTTON-->
             <center><input type="text" name="Client_id" required placeholder="Enter Identification Number" size="25"</center>
             <center><input type="submit" name="submit" value="Check Appointments"></center>
    </form><br />
    <br />
    <br />
    <br />
    <br />
    
        <form action="Client_ViewAppointments.php" method="post">
           
          <!--VIEW CLIENT DETAILS SUBMIT BUTTON-->
             <center><input type="text" name="Client_id" required placeholder="Enter Identification Number" size="25"</center>
             <center><input type="submit" name="client_Details" value="View Client Details"></center>
        <?php
        //Connect to Database server and select the database 
                $dbhost = 'mysql:host=localhost; dbname=lifehealthcare';
                $username = 'root';
                $password = '';
                $PDOdb = new PDO($dbhost, $username, $password);
                    echo '<br>';
                    echo '<br>'; 
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
                          echo 'Client ID:'.'  '.$details['Client_id'].' <br>  '.'Client Name and Surname:'.'  '.$details['C_name'].$details['C_surname'].'<br>'
                                  .'Address:'.'  '.$details['Address'].'<br>'.'Code:'.'  '.$details['Code'].'<br>'.'Telephone:'.'  '.$details['C_Tel_H'].'<br>'
                                  .'Work Cellphone:'.'  '.$details['C_Tel_W'].'<br>'
                                  .'Mobile Cellphone:'.'  '.$details['C_Tel_Cell'].'<br>'.'Email:'.'  '.$details['C_Email'].'<br>'
                                  .'Reference:'.'  '.$details['C_Reference'];
                }else {
                    echo 'Client Details NOT available!';
                
                }}
                ?>
          
    </form>
   </table>
    </body>
</html>

