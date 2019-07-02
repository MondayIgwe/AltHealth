              

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Invoice</title>
    <link rel="stylesheet" href="cssStyling/invoiceStyling.css" media="all" />
    <link rel="icon" type="image/png" href="images/logo.png" >
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="images/logo.png">
      </div>
      <div id="company">
        <h2 class="name">Life Health Care</h2>
        <div>20 William Nicole Drive, ZA</div>
        <div>(+27) 519-0450</div>
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
          <div class="date">Date: 01/06/2019</div>
       
        </div>
      </div>  
      <table border="0" cellspacing="0" cellpadding="0">
        <thead>
          <tr>
            <th class="no">ID_Numbers</th>
            <th class="unit">CONSULTATION FEE</th>
            <th class="desc">SUPPLEMENT NAME</th>
            <th class="unit">PRICE</th>
            <th class="qty">QUANTITY</th>
            <th class="total">TOTAL</th>
          </tr>
        </thead>
        <tbody>
          <tr>
              <td class="no"><h3>Client_id</h3><?php
            try{
                
          
        //Connect to Database server and select the database 
            $dbhost = 'mysql:host=localhost; dbname=lifehealthcare';
            $username = 'root';
            $password = '';
            
            $PDOdb = new PDO($dbhost, $username, $password);
                echo '<br>';
                echo '<br>';

              //Get ID number from Invoice                   
                    $query = "SELECT * FROM invoice_info WHERE Client_id";
                    $statement = $PDOdb->prepare($query);
                    $statement->execute();
                    $invoices = $statement->fetch(PDO::FETCH_ASSOC);
                     echo '<br>'.$invoices['Client_id']; 
                   } catch (Exception $ex) {
                         $ex->getMessage();
            }
               
?></h3></td>
            <td class="desc"><h3><?php
            try
            {
            //Connect to Database server and select the database 
                $dbhost = 'mysql:host=localhost; dbname=lifehealthcare';
                $username = 'root';
                $password = '';

                $PDOdb = new PDO($dbhost, $username, $password);
                echo '<br>';
                echo '<br>';
                //Generate Invoice                   
                    $query = "SELECT * FROM invoice_info WHERE Consultation";
                    $statement = $PDOdb->prepare($query);
                    $statement->execute();
                    $invoices = $statement->fetch(PDO::FETCH_ASSOC);
                     echo '<br>'.$invoices['Consultation']; 
                   } catch (Exception $ex) {
                         $ex->getMessage();
            }
               
?></h3></td>
            <td class="unit">N/A</td>
            <td class="unit"><h3><?php
            try{
                
          
        //Connect to Database server and select the database 
            $dbhost = 'mysql:host=localhost; dbname=lifehealthcare';
            $username = 'root';
            $password = '';
            
            $PDOdb = new PDO($dbhost, $username, $password);
                echo '<br>';
                echo '<br>';

              //Generate Invoice                   
                    $query = "SELECT * FROM invoice_info WHERE Consultation";
                    $statement = $PDOdb->prepare($query);
                    $statement->execute();
                    $invoices = $statement->fetch(PDO::FETCH_ASSOC);
                     echo '<br>'.$invoices['Consultation']; 
                   } catch (Exception $ex) {
                         $ex->getMessage();
            }
               
?></h3></td>
            <td class="qty">1</td>
            <td class="total">300.00</td>

                    
          </tr>
        </tbody>
      </table>
      <div id="thanks">Thank you!</div>
      <div id="notices">
        <div>NOTICE:</div>
        <div class="notice"> Invoice was created on a computer and is valid without the signature and seal. 
    </main>
  </body>
</html>