<!DOCTYPE html>
<html>
    <head>
      <title>Life Health Care</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="cssStyling/css_sticky_social_bar.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="cssStyling/logoStyling.css"> 
        <link rel="stylesheet" type="text/css" href="cssStyling/ReportCSSS.css">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body style="background:url(images/clinic.jpg)no-repeat; background-size:100%;">
    <center><h1><b>Appointment Bookings</h1></b></center>
         <center>
         <div class="header">
           <img src="images/logo.png" class="img-circle" alt="Cinque Terre" width="100" height="100">
            <nav>
                <ul>  
                <div class="icon-bar">
                   <object width="200" height="200" align="center" data="helloworld.swf"><li style="margin-left: 2em"><a target="_blank" title="follow me on Twitter" href="https://www.twitter.com/lifehealthcare"><img alt="follow me on Twitter" src="https://c866088.ssl.cf3.rackcdn.com/assets/twitter30x30.png" border></a></li></a></object>
                   <object width="200" height="200" align="center" data="helloworld.swf"><li style="margin-left: 2em"><a target="_blank" title="follow me on facebook" href="https://www.facebook.com/lifehealthcare"><img alt="follow me on facebook" src="https://c866088.ssl.cf3.rackcdn.com/assets/facebook30x30.png" border=0></a></li></object> 
                   <object width="200" height="200" align="center" data="helloworld.swf"><li style="margin-left: 2em"><a target="_blank" title="follow me on youtube" href="https://www.youtube.com/lifehealthcare"><img alt="follow me on youtube" src="https://c866088.ssl.cf3.rackcdn.com/assets/youtube30x30.png" border=0></a></li></object>
                   <object width="200" height="200" align="center" data="helloworld.swf"><li style="margin-left: 2em"><a target="_blank" title="follow me on instagram" href="https://www.instagram.com/lifehealthcare"><img alt="follow me on instagram" src="https://c866088.ssl.cf3.rackcdn.com/assets/instagram30x30.png" border=0></a></li></object>
                  </div>
                    <object width="200" height="200" align="center" data="helloworld.swf"><b><li style="margin-left: -5em"><a href="healthPractitioner.php">Back</a></b></li></object>
                    <object width="200" height="200" align="center" data="helloworld.swf"><b><li style="margin-left: 1em"><a href="index.php">Log out</a></b></li></object>
                   
              </ul>
           </nav>
        </div>
    </center>   

  <!--VIEW ALL APPOINTMENTS-->
    <form action="HP_ViewAppointments_1.php" method="post">
        <center>
        <header id="header" class="clearfix">	
        <div><p style="text-align:center;">
        <table border="1">     
                </div></header></center>   
                <br>
                 <br>
                 <br>
             <!--VIEW ALL SUBMIT BUTTON-->
             <center><font size="5"><b>View All Appointments</b><br><input type="submit" name="submitView" value="Submit" width="100" height="20"></center>
            <br>
   </form> 

 <!--DELETE CLIENT APPOINTMENT-->
   <form action="HP_ViewAppointments.php" method="post">
        <table align="center"> 
        <font size="4"><b>Enter ID To Cancel a Client Appointment:<br><input type="text" name="Client_booking_id" maxlength="13" required></b><br>
        <input type="submit" name="delete" value="Submit"> 
        <td><?php
            //DELETE A CLIENT APPOINTMENT
              //Connect to Database server 
              require_once 'Connect_DB.php';
              
                //View Client Details
                if(isset($_POST["delete"]))
                {
                   $ID=$_POST['Client_booking_id'];    
                   
                    //DELETE APPOINTMENTS
                    $query = "DELETE FROM bookinginfo WHERE Client_booking_id='$ID'";
                    $stat = $PDOdb->prepare($query);
                    $stat->execute();
                    if(isset($stat) && !empty($stat)){
                          echo '<script type="text/javascript">';
                                 echo ' alert("Client ID'.'  '.$ID.' '.'Client Appointment Bookings Successsfully CANCELED")';
                                 echo '</script>';
                           } else {
                               echo '<script type="text/javascript">';
                                echo ' alert("Client ID NOT CANCELED")';
                                 echo '</script>';
                           }
                }
                ?></td>
            </form>
            <br>
             <br>
         
 <form action="HP_ViewAppointments_1.php" method="post">  
          <!--VIEW CLIENT DETAILS SUBMIT BUTTON-->
          <center><b>Existing Client Information with Our Hospital</b><br><input type="text" name="Client_id"  placeholder="Enter Identification Number" maxlength="13" size="25"</center>
          <center><input type="submit" name="client_Details" value="Submit"></font></center>   
             </table>
         </form>
            <br>
            <br>
            <br>
            <br>
            <br>   
            
            
    </body>
           <br />
           <br />
           <br />
           <br />
    <center>
<div>
   <b><p style="text-align:bottom;">Copyright &#169; 2019 Life Health Care. All rights reserved.</p></b>
 </div>
</center>
</html>
