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
    <style>
        body {background-color: lightyellow;}
    </style>
    </head>
    <body>
    <center><h1><b>View Appointment Bookings</h1></b></center>
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
                    <object width="200" height="200" align="center" data="helloworld.swf"><b><li style="margin-left: -3em"><a href="HP_ViewAppointments.php">Back</a></b></li></object>
                </ul>
           </nav>
        </div>
    </center>   
   <form>
    <center>
        <header id="header" class="clearfix">	
        <div><p style="text-align:center;">
        <table border="1">     
        <font size="4">  
         <?php 
          //FETCH ALL BOOKING APPOINTMENTS
        //Connect to Database server and select the database 
            require_once 'Connect_DB.php';
         
                if(isset($_POST["submitView"]))
                {
                    //FETCH ALL BOOKING APPOINTMENTS
                    $query = 'SELECT * FROM bookinginfo';
                    $statement = $PDOdb->prepare($query);
                    $statement->execute();
                    $appointment = $statement->fetchAll();
                    $statement->closeCursor();
                   
                    foreach ($appointment as $appointments)
                     {
                        echo '<center><tr><th>Client ID</th>'.''.
                              '<th>Appointment_Date</th>'.''.
                              '<th>Time</th></tr>'.'';
                        
                        
                        echo "<tr><td>".$appointments['Client_booking_id'].''.
                             "</td><td>".$appointments['Appointment_Date'].''.
                             "</td><td>".$appointments['Time']."</td></tr></center>";
                        }
                }
                ?></p>
                </div>
        </header></center>  
   </form>
    <!--View Client Details-->
    <form>  
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
                ?></font>
</form>     
    </form>
    </body>
</html>
