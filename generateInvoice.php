<!DOCTYPE html>
<html lang="en">
  <head>
        <title>Invoice</title>
        <meta charset="utf-8">
        <meta name="viewport"content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="cssStyling/invoiceStyling.css" media="all" />
        <link rel="icon" type="image/png" href="images/logo.png" >
        <style>
           body {background-color: lightyellow;}
       </style>
  </head>
   <body> 
    <center><h1>Generated Invoice</h1></center>
    

   <form action="Email_Client.php" method="post" target="_blank">
    <header class="clearfix">
      <div id="logo">
        <img src="images/logo.png" class="img-circle" alt="Cinque Terre" width="100" height="100">
      </div>
        <center>
        <nav>
           <ul>
               <object width="200" height="200" align="center" data="helloworld.swf"><h2 style="background-color:white;"><li style="margin-left: 2em"><a href="Invoice.php">Back</a></li></h2></object>
            </ul>
        </nav>
        </div>
      <div id="company">
          <h2 class="name"><b><font size="5">Life Health Care</font></b></h2>
          <div><b><font size="4">20 William Nicole Drive, ZA</font></font></div>
          <div><b><font size="3">(+27) 519-0450)</font></font></div>
          <div><b><font size="3"><a href="mailto:company@example.com">lifehealthcare@gmail.com</a></font></b></div>
      </div>
      </div>
    </header>
    <main>
      <div id="details" class="clearfix">
        <div id="client">
            <div class="to"><b><font size="4">INVOICE TO:<?php require 'Connect_DB.php';
                        echo $client_ID=$_POST['Client_id'];
                        $queryInvoice = $PDOdb->prepare("SELECT * FROM invoice_info WHERE client_id = $client_ID;");
                        $queryInvoice->execute();?></font></b></div>
        </div>  
        <div id="invoice">
            <h1><b>INVOICE</b></h1>
          <div class="date"><b><font size="4"><?php require 'Connect_DB.php';
                if (isset($_POST['submit'])){
                       
                        $invoice_DATE=$_POST['Client_id'];
                        $queryInvoice = $PDOdb->prepare("SELECT * FROM invoice_info WHERE client_id = $invoice_DATE;");
                        $queryInvoice->execute();
                        while($invoices = $queryInvoice->fetch()){
                              echo '<p style="text-align:left;">'.'&emsp;'.'&emsp;'.'&emsp;'.'&emsp;'.'&emsp;'.'&emsp;'.'&emsp;'.'Invoice Number:'.'&emsp;'.$invoices['INVNUM'].'<br>'. '</p>';
                          break;
                        }
                        }   ?>
          <div class="date"><b><font size="4"><?php echo date("l jS \of F Y h:i:s A");?></font></b></div>
        </div>
      </div>   
        <!--Invoice Table Columns-->
      <table class="table table-bordered">
        <thead>
          <tr>
            <th class="no">Invoice Details</th>
          </tr>
        </thead>
        <!--Invoice Client ID-->
        <tbody>
          <tr>
              <td class="no"><h3>Client_id</h3>
       <?php 
          session_start();
        try{
            //Connect to Database server and select the database 
            require 'Connect_DB.php';
                if (isset($_POST['submit'])){
                       
                        $table_fields=$_POST['Client_id'];
                        $queryInvoice = $PDOdb->prepare("SELECT * FROM invoice_info WHERE client_id = $table_fields;");
                        $queryInvoice->execute();
                        while($invoices = $queryInvoice->fetch()){
                             echo '<p style="text-align:left;">'.'Invoice Number:'.'&emsp;'.'&emsp;'.'&emsp;'.'&emsp;'.'&emsp;'.$invoices['INVNUM'].'<br>'.
                            '<p style="text-align:left;">'.'ID Numbers:'.'&emsp;'.'&emsp;'.'&emsp;'.'&emsp;'.'&emsp;'.'&emsp;'.$invoices['Client_id'].'<br>'.
                            '<p style="text-align:left;">'.'Consultation:'.'&emsp;'.'&emsp;'.'&emsp;'.'&emsp;'.'&emsp;'.'&emsp;'.$invoices['Consultation'].'<br>'.
                            '<p style="text-align:left;">'.'Total fee:'.'&emsp;'.'&emsp;'.'&emsp;'.'&emsp;'.'&emsp;'.'&emsp;'.'&emsp;'.$invoices['Total'].'</p>';
                             break;
                        }    
                }     
          }catch(Exception $ex) {
            $ex->getMessage();
          }          
       ?>
     </tr>
      </tbody>
      </table>
        <table>
              <!--EMAIL INVOICE TO PDF BUTTON-->
              <td><div style="margin-left: 28em"><b><input type="submit" name="submit" value="Email invoice"></b></div></form></td>
             
              <!--DOWNLOAD INVOICE-->
              <form action="generate_pdf.php" method="post" target="_blank">
                  <td><div style="margin-left:0em"><input type="submit" name="submit" value="Download Invoice"></form></div></td>
                </table>
        <!-- BANKING DETAILS FOR INVOICE PAYMENTS-->
        <div><h1><font color="blue">Banking Details:</h1>
             <p>ACCOUNT NAME: LIFE HEALTH CARE</p>
             <p>ACCOUNT NUMBER: 56564783738309</p>
             <p>BRANCH CODE: 260987</p>
             <p>FIRST NATIONAL BANK</p></font>
         </div><br>
         
         <div id="thanks">Thank you!</div> 
      <div id="notices">
        <div>NOTICE:</div>
        <div class="notice"> Invoice was created on a computer and is valid without the signature and seal. 
    </main>
      
    
  </body>
  <center>
<div>
   <b><p style="text-align:bottom;">Copyright &#169; 2019 Life Health Care. All rights reserved.</p></b>
 </div>
</center>
</html>