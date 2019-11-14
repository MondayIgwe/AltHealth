<?php
        //Connect to Database server and select the database 
        require 'Connect_DB.php';
               try
                {
                   //SELECT ID FROM A DROP DOWN TO GENERATE AN INVOICE
                   $query = $PDOdb->prepare("SELECT * FROM invoice_info;");
                   $query->execute();
                   $rows = $query->fetchAll();
               }catch (Exception $ex) {
                echo ($ex ->getMessage());
               }
                    
                 try 
                    {
                      //SELECTED ID WILL PRINTED ON INVOICE
                     if (isset($_POST['submit'])){
                        $queryInvoice = $PDOdb->prepare("SELECT * FROM invoice_info WHERE client_id = 'Client_id';");
                        $queryInvoice->execute();
                        while($invoices = $queryInvoice->fetch()){
                             echo $invoices['INVNUM'];
                             echo $invoices['Client_id'];
                             echo $invoices['Consultation'];
                             echo $invoices['Total'];
                             break;
                        }    
                    }        
                 }catch (Exception $ex) {
                 echo ($ex ->getMessage());
                 }                           
 ?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Invoice System generator</title>
        <link rel="stylesheet" type="text/css" href="cssStyling/logoStyling.css"> 
        <link rel="stylesheet" type="text/css" href="cssStyling/appointmentsStyleSheet.css"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <style>
            body {background-color: lightyellow;}
        </style>
    </head>
    <body>
    <center><h1><b>Generate Patient Invoice</h1></b></center>
       <form action="generateInvoice.php" method="post">
       <center>
        <div class="header">
           <img src="images/logo.png" class="img-circle" alt="Cinque Terre" width="100" height="100">
           <nav>
               <ul> 
                   <object width="200" height="200" align="center" data="helloworld.swf"><b><li><a href="healthPractitioner.php">Back</a></b></li></object>
                   <object width="200" height="200" align="center" data="helloworld.swf"><b><li style="margin-left: 2em"><a href="index.php">Log out</a></b></li></object>
             
             <div class="icon-bar">
                 <object width="200" height="200" align="center" data="helloworld.swf"><li style="margin-left: 2em"><a target="_blank" title="follow me on Twitter" href="https://www.twitter.com/lifehealthcare"><img alt="follow me on Twitter" src="https://c866088.ssl.cf3.rackcdn.com/assets/twitter30x30.png" border></a></li></a></object>
                 <object width="200" height="200" align="center" data="helloworld.swf"><li style="margin-left: 2em"><a target="_blank" title="follow me on facebook" href="https://www.facebook.com/lifehealthcare"><img alt="follow me on facebook" src="https://c866088.ssl.cf3.rackcdn.com/assets/facebook30x30.png" border=0></a></li></object> 
                 <object width="200" height="200" align="center" data="helloworld.swf"><li style="margin-left: 2em"><a target="_blank" title="follow me on youtube" href="https://www.youtube.com/lifehealthcare"><img alt="follow me on youtube" src="https://c866088.ssl.cf3.rackcdn.com/assets/youtube30x30.png" border=0></a></li></object>
                 <object width="200" height="200" align="center" data="helloworld.swf"><li style="margin-left: 2em"><a target="_blank" title="follow me on instagram" href="https://www.instagram.com/lifehealthcare"><img alt="follow me on instagram" src="https://c866088.ssl.cf3.rackcdn.com/assets/instagram30x30.png" border=0></a></li></object>
             </div>       
            </ul>
        </nav>
       </div>
      </center>    
     <form>  
    <header class="clearfix">
      <center>
      <div id="company">     
    </header>
    <center> 
    <main>
      <div id="details" class="clearfix">
        <div id="client">
        </div>
      </div> 
              <font size="5"><b>Please Select Client ID to generate An Invoice:</b>
            <!-- SELECT A CLIENT INVOICE AND PRINTOUT-->
            <center>
              <select name="Client_id">
                <option>Select Invoice:</option>
                  <?php
                  foreach($rows as $row){?>
                    <option><?php echo $row['Client_id'];?></option>
                        <?php $row['Client_id'];?> 
                        <?php }?> 
                   <input type="submit" name="submit" value="Generate Invoice"></font>
             </select>
                   
           </center>
            </form>
      
    </main>
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

