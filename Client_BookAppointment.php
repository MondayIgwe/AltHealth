<!DOCTYPE html>
<html>
    <head>
        <title>Appointment Bookings</title>
        <link rel="icon" type="image/png" href="images/logo.png" >
        <link rel="stylesheet" type="text/css" href="cssStyling/logoStyling.css"> 
        <link rel="stylesheet" type="text/css" href="cssStyling/appointmentsStyleSheet.css"> 
    </head>
    <body style="background:url(images/appointments.png)no-repeat; background-size:100%;">
        <form action="Client_BookAppointment.php" method="post">
    <center>
        <div class="header">
        <img src="images/logo.png" />
           <nav>
           <ul>
               <li style="margin-left: 2em"><a target="_blank" title="follow me on Twitter" href="https://www.twitter.com/lifehealthcare"><img alt="follow me on Twitter" src="https://c866088.ssl.cf3.rackcdn.com/assets/twitter30x30.png" border></a></li>
               <li style="margin-left: 2em"><a target="_blank" title="follow me on facebook" href="https://www.facebook.com/lifehealthcare"><img alt="follow me on facebook" src="https://c866088.ssl.cf3.rackcdn.com/assets/facebook30x30.png" border=0></a></li> 
               <li style="margin-left: 2em"><a target="_blank" title="follow me on youtube" href="https://www.youtube.com/lifehealthcare"><img alt="follow me on youtube" src="https://c866088.ssl.cf3.rackcdn.com/assets/youtube30x30.png" border=0></a></li>
               <li style="margin-left: 2em"><a target="_blank" title="follow me on instagram" href="https://www.instagram.com/lifehealthcare"><img alt="follow me on instagram" src="https://c866088.ssl.cf3.rackcdn.com/assets/instagram30x30.png" border=0></a></li>
               <li><a href="Client_ViewAppointments.php">Back</a></li>
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
                   <td><input type="text" name="Client_id" required placeholder="Identification Numbers" min="10" max="13"/></td><br>
                </tr>
               <tr>
                   <td><b>Appointment Date:</b></td>
                   <td><select name="Appointment_Date">
                <option>Select Appointment Date</option>
                <?php
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
                    $dbhost = 'mysql:host=localhost; dbname=lifehealthcare';
                    $username = 'root';
                    $password = '';
            
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
            $dbhost = 'mysql:host=localhost; dbname=lifehealthcare';
            $username = 'root';
            $password = '';
            
            $PDOdb = new PDO($dbhost, $username, $password);
                echo '<br>';
                echo '<br>'; 
                
               } catch (Exception $ex) {
                   echo ($ex ->getMessage());
               }
     
            //GET THE DATA FROM THE FORM
            $clientID = $_POST['Client_id'];
            $appDate = $_POST['Appointment_Date'];
            $appTime = $_POST['Time'];

            //INSERT Appointments INTO THE TABLE
            $PDOquery = "INSERT INTO `bookinginfo`(`Appointment_Date`, `Client_id`, `Time`) 
                            VALUES (:Appointment_Date,:Client_id,:Time)";

            $PDOresult= $PDOdb->prepare($PDOquery);

            $PDOExec = $PDOresult->execute(array(":Client_id"=>$clientID,":Appointment_Date"=>$appDate,":Time"=>$appTime));
            if($PDOExec)
            {
              echo 'Booking Appointment for'.' '.$clientID.' '.'  '.'has been received!'.'&nbsp;&nbsp;';
              echo '<br>';
              echo '<br>';
            } else {
                echo 'Client ID Booking Appointment Already Exist, Please book appointment for the next client';
            }
         }
?></td>
           </table>  
       </form>
    </body>
</html>