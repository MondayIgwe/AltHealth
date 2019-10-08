<!DOCTYPE html>
<html lang="en">
  <head>
        <title>Invoice</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="cssStyling/invoiceStyling.css" media="all" />
        <link rel="icon" type="image/png" href="images/logo.png" >
  </head>
   <body style="background:url(images/images.jpg)no-repeat; background-size:100%;"> 
    <center><h1>Generated Invoice</h1></center>
    <form action="generate_pdf.php" method="post">
    <header class="clearfix">
      <div id="logo">
        <img src="images/logo.png" class="img-circle" alt="Cinque Terre" width="100" height="100">
      </div>
        <center>
        <nav>
           <ul>
               <li style="margin-left: 2em"><a href="Invoice.php">Back</a></li>
            </ul>
        </nav>
        </div>
      <div id="company">
        <h2 class="name">Life Health Care</h2>
        <div>20 William Nicole Drive, ZA</div>
        <div>(+27) 519-0450)</div>
        <div><a href="mailto:company@example.com">lifehealthcare@life.co.za</a></div>
      </div>
      </div>
    </header>
    <main>
      <div id="details" class="clearfix">
        <div id="client">
          <div class="to">INVOICE TO:</div>
          <div class="address">20 William Nicole Drive</div>
        </div>  
        <div id="invoice">
          <h1>INVOICE </h1>
             <div class="date">Invoice Number:</div>
          <div class="date">Date: 01/11/2019</div>
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
        <!--DOWNLOAD INVOICE TO PDF BUTTON-->
        <div style="margin-left: 49em"><input type="submit" name="submit" value="download invoice"></div>
         <div id="thanks">Thank you!</div>  
      <div id="notices">
        <div>NOTICE:</div>
        <div class="notice"> Invoice was created on a computer and is valid without the signature and seal. 
    </main>
  </body>
</html>