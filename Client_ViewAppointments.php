<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="cssStyling/logoStyling.css">  
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body style="background:url(images/clinic.jpg)no-repeat; background-size:100%;"> 
    <center><h1>Welcome To Client Side</h1></center>
    <center>
        <div class="header">
        <img src="images/logo.png" />
           <nav>
             <ul>
               <li style="margin-left: 2em"><a target="_blank" title="follow me on Twitter" href="https://www.twitter.com/lifehealthcare"><img alt="follow me on Twitter" src="https://c866088.ssl.cf3.rackcdn.com/assets/twitter30x30.png" border></a></li>
               <li style="margin-left: 2em"><a target="_blank" title="follow me on facebook" href="https://www.facebook.com/lifehealthcare"><img alt="follow me on facebook" src="https://c866088.ssl.cf3.rackcdn.com/assets/facebook30x30.png" border=0></a></li> 
               <li style="margin-left: 2em"><a target="_blank" title="follow me on youtube" href="https://www.youtube.com/lifehealthcare"><img alt="follow me on youtube" src="https://c866088.ssl.cf3.rackcdn.com/assets/youtube30x30.png" border=0></a></li>
               <li style="margin-left: 2em"><a target="_blank" title="follow me on instagram" href="https://www.instagram.com/lifehealthcare"><img alt="follow me on instagram" src="https://c866088.ssl.cf3.rackcdn.com/assets/instagram30x30.png" border=0></a></li>
               <li style="margin-left: 2em"><a href="Client_BookAppointment.php">Book  New Appointment</a></li>
                <li style="margin-left: 2em"><a href="About.php">About Us</a></li>
               <li style="margin-left: 2em"><a href="Contact.php">Contact Us</a></li>
             </ul>
        </nav>
       </div>
      </center>
    <form action="Client_ViewAppointments.php" method="post">
          <table align="center">
            <td>
         <?php 
              //Connect to Database server and select the database 
             require_once 'Connect_DB.php';
                //View appointments
                if(isset($_POST["submit"]))
                {
                    $ID=$_POST['Client_id']; 
                    $registerID=$_POST['Client_id'];
                    
                    //FETCH CLIENT APPOINTMENTS
                    $query = "SELECT * FROM bookinginfo WHERE Client_booking_id='$ID'";

                    $statement = $PDOdb->prepare($query);
                    $statement->execute();
                    $appointment = $statement->fetch(PDO::FETCH_ASSOC);
                    
                    if($appointment){
                        echo 'Client ID is:'.'  '.$appointment['Client_booking_id'].'<br>'
                         .''.'Your appointment is scheduled on'.'  '.' '
                         .$appointment['Appointment_Date'].' <br>   '.'Between  '.' '
                         .$appointment['Time'];
                         
                        
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
        ?>      
    </form>
    </table>   
    </body> 
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
	<div>
            <b><p style="text-align:bottom;">Copyright &#169; 2019 AltHealth Healthcare. All rights reserved.</p></b>
        </div>
      
</html>

