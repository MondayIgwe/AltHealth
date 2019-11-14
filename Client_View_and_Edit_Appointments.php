<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="cssStyling/css_sticky_social_bar.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="cssStyling/logoStyling.css">  
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
      </head>
    <body style="background:url(images/clinic.jpg)no-repeat; background-size:100%;">     
    <center>
        <p><h1><b>Client Information</b></h1></p> 
            <div class="header">
             <img src="images/logo.png" class="img-circle" alt="Cinque Terre" width="100" height="100">   
             <center><button><b><font size="5"><a href="Client_ViewAppointments.php">Back</a></b></font></button>&nbsp;&nbsp;&nbsp;
              <button><b><font size="5"><a href="Client_EditInfo.php">Edit</a></b></font></button></center>
      </center>
        <form>
          <table align="center">
            <td><font size="6"><?php
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
                          echo 'Client ID:'.''.$details['Client_id'].' <br>  '.'Client Name and Surname:'.'  '.$details['C_name'].' '.$details['C_surname'].'<br>'
                                  .'Address:'.'  '.$details['Address'].'<br>'.'Code:'.'  '.$details['Code'].'<br>'.'Telephone:'.'  '.$details['C_Tel_H'].'<br>'
                                  .'Work Cellphone:'.'  '.$details['C_Tel_W'].'<br>'
                                  .'Mobile Cellphone:'.'  '.$details['C_Tel_Cell'].'<br>'.'Email:'.'  '.$details['C_Email'].'<br>'
                                  .'Reference:'.'  '.$details['C_Reference'];
                }else {
                    echo 'Client Details NOT available!';   
                }}
                ?></font></td>
            
            
        </form>
        <form>
          <table align="center">
          <td><font size="6">
          <?php 
            session_start();
             //FETCH CLIENT APPOINTMENTS
              //Connect to Database server and select the database 
             require_once 'Connect_DB.php';
                //View appointments
                if(isset($_POST["submitApointment"]))
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
                ?></font></td>
      
 
    </form><br />
        </table>  
         </form>
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
	<center>
<div>
   <b><p style="text-align:bottom;">Copyright &#169; 2019 Life Health Care. All rights reserved.</p></b>
 </div>
</center>
      
</html>

