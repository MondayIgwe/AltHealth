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
    </head>
    <body>
         <center><h1>Generate Patient Invoice</h1></center>
         <form action="invoicePage.php" method="post">
       <center>
        <div class="header">
        <img src="images/logo.png" />
           <nav>
           <ul>
               <li><a href="healthPractitioner.php">Back To health Practitioner</a></li>
            </ul>
        </nav>
       </div>
      </center>         
     <form>
    <header class="clearfix">
      <center>
      <div id="company">
      </div>
      </div>
    </header>
    <center> 
    <main>
      <div id="details" class="clearfix">
        <div id="client">
        </div>
      </div>       
            <!-- SELECT A CLIENT INVOICE AND PRINTOUT-->
            <center>
              <select name="Client_id">
                <option>Select Invoice:</option>
                  <?php
                  foreach($rows as $row){?>
                    <option><?php echo $row['Client_id'];?></option>
                        <?php $row['Client_id'];?> 
                        <?php }?> 
                <input type="submit" name="submit" value="Generate Invoice">
             </select>
           </center> 
       </form 
    </main>
</html>

