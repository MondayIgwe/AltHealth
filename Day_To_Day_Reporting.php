<!DOCTYPE html>
<html>
    <head>
        <title>Reports</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="cssStyling/css_sticky_social_bar.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="cssStyling/logoStyling.css"> 
        <link rel="stylesheet" type="text/css" href="cssStyling/ReportCSSS.css">    
        <link rel="stylesheet" type="text/css" href="cssStyling/healthPractitionerStyleSheet.css">  
    </head>
         <h1 align="center">Day to Day Reports</h1><br> 
    <body style="background:url(images/clinic.jpg)no-repeat; background-size:100%;">
        <form action="Day_To_Day_Reporting.php" method="post">
        <center>
        <div class="header">
         <img src="images/logo.png" class="img-circle" alt="Cinque Terre" width="100" height="100">
           <nav>
           <ul>
               <object width="200" height="200" align="center" data="helloworld.swf"><li style="margin-left: 2em"><b><a href="Generate_reports.php">Back</a></b></li></object>
            <div class="icon-bar">
                 <object width="200" height="200" align="center" data="helloworld.swf"><li style="margin-left: 2em"><a target="_blank" title="follow me on Twitter" href="https://www.twitter.com/lifehealthcare"><img alt="follow me on Twitter" src="https://c866088.ssl.cf3.rackcdn.com/assets/twitter30x30.png" border></a></li></a></object>
                 <object width="200" height="200" align="center" data="helloworld.swf"><li style="margin-left: 2em"><a target="_blank" title="follow me on facebook" href="https://www.facebook.com/lifehealthcare"><img alt="follow me on facebook" src="https://c866088.ssl.cf3.rackcdn.com/assets/facebook30x30.png" border=0></a></li></object> 
                 <object width="200" height="200" align="center" data="helloworld.swf"><li style="margin-left: 2em"><a target="_blank" title="follow me on youtube" href="https://www.youtube.com/lifehealthcare"><img alt="follow me on youtube" src="https://c866088.ssl.cf3.rackcdn.com/assets/youtube30x30.png" border=0></a></li></object>
                 <object width="200" height="200" align="center" data="helloworld.swf"><li style="margin-left: 2em"><a target="_blank" title="follow me on instagram" href="https://www.instagram.com/lifehealthcare"><img alt="follow me on instagram" src="https://c866088.ssl.cf3.rackcdn.com/assets/instagram30x30.png" border=0></a></li></object>
            </div> 
               <object width="200" height="200" align="center" data="helloworld.swf"><li style="margin-left: 2em"><b><a href="index.php">Log out</a></b></li></object>
                 
           </ul>
        </nav>
       </div>     
    <table align="center"> 
           <button><input type="submit" name="report" value="Client Report information"/></button>
            <button><input type="submit" name="searchSupplements" value="Product information and stock levels"/></button></font>              
            <?php
             session_start();
            //Connect to Database server and select the database 
            require 'Connect_DB.php'; 
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
             require 'Connect_DB.php';    
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
       <br />
    <br />
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

