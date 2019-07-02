<?php
//Connect to Database server and select the database 
            $dbhost = 'mysql:host=localhost; dbname=lifehealthcare';
            $username = 'root';
            $password = '';
            
            $PDOdb = new PDO($dbhost, $username, $password);
                echo '<br>';
                echo '<br>';
               try
               {
                   $query = $PDOdb->prepare("SELECT * FROM invoice_info;");
                   $query->execute();
                   $rows = $query->fetchAll();
                    
                    
               } catch (Exception $ex) {
                   echo ($ex ->getMessage());
               }
               
                
                if(isset($_GET['Generate']))
                    {
                      
                       $query = $PDOdb->prepare("SELECT * FROM invoice_info WHERE Consultation AND Client_id");
                        $statement = $PDOdb->prepare($query);
                        $statement->execute();
                        $invoices = $statement->fetch(PDO::FETCH_ASSOC);
                         echo '<br>'.$invoices['Consultation'].$invoices['Client_id']; 
                }
                 
                    

             ?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Invoice System generator</title>
     
        <link rel="stylesheet" type="text/css" href="cssStyling/logoStyling.css"> 
        <link rel="stylesheet" type="text/css" href="cssStyling/appointmentsStyleSheet.css"> 
    </head>
    <body style="background:url(images/doctors.jpg)no-repeat; background-size:100%;">
         
        <form action="invoicePage.php" method="get">
       <center>
        <div class="header">
        <img src="images/logo.png" />
           <nav>
           <ul>
               <li><a href="healthPractitioner.php">Back to: Health Practitioner</a></li>
            </ul>
        </nav>
       </div>
      </center>
            <center><select name="Client_id">
                <option>Select Invoice:</option>
               <?php
                  foreach($rows as $row){?>
                <option><?php echo $row['Client_id'];?></option>
                  <?php }?>
          
                <input type="submit" value="Generate">
                    </select>
            </center> 
       </form 
    </body>
</html>
