<!DOCTYPE HTML>
<html>
    <head>
        <title>Client Edit Information</title>
        <link rel="stylesheet" type="text/css" href="cssStyling/registrationStyleSheet.css"> 
        <link rel="stylesheet" type="text/css" href="cssStyling/logoStyleSheet.css">  
    </head>
   <body style="background:url(images/doctors.jpg)no-repeat; background-size:100%;">
    <center>
        <h1 style="background-color:hsl(9, 200%, 64%);"><b><li style="margin-left: 0em"><a href="Client_ViewAppointments.php">Back</a></li></h1>
        <form  method="post">
          <table align="center" width="100">  
                <tr>
                    <th colspan="2"><h2 align="center" style="background-color:white;"><font size="6">Edit Client Information</font></h2></th>
                </tr>
                <tr><!--Capture User Details-->
                    <td><font size="4"><b>Enter SA ID:</b><br /></font></td>
                    <td><input type="text" name="Client_id" placeholder="SA Identification Numbers"  required /><br></td>
                </tr>
                <tr>
                    <td><font size="4"><b>Enter Name:</b><br /></font></td>
                    <td><input type="text" name="C_name" placeholder="patient name" required /><br></td>
                </tr>
                 <tr>
                     <td><font size="4"><b>Enter Surname:</b><br /></font></td>
                    <td><input type="text" name="C_surname" placeholder="patient surname" required /><br></td>
                </tr>
                   <tr>
                       <td><font size="4"><b>Enter Address:</b><br /></font></td>
                    <td><input type="text" name="Address" placeholder="address"/><br></td>
                </tr>
                    <tr>
                        <td><font size="4"><b>Enter Suburb Code:</b><br /></font></td>
                    <td><input type="text" name="Code" placeholder="code"/><br></td>
                </tr>
                 </tr>
                    <tr>
                        <td><font size="4"><b>Enter Cell No:</b><br /></font></td>
                    <td><input type="text" name="C_Tel_Cell" placeholder="valid phone numbers" required/><br></td>
                </tr>
                </tr>
                    <tr>
                        <td><font size="4"><b>Enter Email:</b><br /></font></td>
                    <td><input type="text" name="C_Email" placeholder="enter email" required/><br></td>
                </tr>
                </tr>
                 <tr>
                     <td><font size="4"><b>Enter Reference:</b><br /></font></td>
                    <td><textarea name="C_Reference" cols="20" rows="5" placeholder="word of mouth or Website" aria-invalid="false"/></textarea><br></td>
                </tr>
                <td align="right" colspan="2"><input type="submit" name="Client_login" value="Submit" /></td>
                <td><?php
                    try {
                        require_once 'Connect_DB.php';
                        
                        //Query the database for user Login
                        if (isset($_POST['Client_login'])) {
                            $ID = $_POST['Client_id'];
                            $name = $_POST['C_name'];
                            $surname = $_POST['C_surname'];
                            $address = $_POST['Address'];
                            $code = $_POST['Code'];
                            $phone = $_POST['C_Tel_Cell'];
                            $email = $_POST['C_Email'];
                            $reference = $_POST['C_Reference'];
                            
                           
                            //INSERT INTO THE TABLE
                             $PDOquery = "INSERT INTO `clientdata`(`Client_id`, `C_name`, `C_surname`,`Address`,`Code`,`C_Tel_Cell`,`C_Email`,`C_Reference`)
                                          VALUES (:Client_id,:C_name,:C_surname,:Address,:Code,:C_Tel_Cell,:C_Email,:C_Reference)";
                            $PDOresult = $PDOdb->prepare($PDOquery);
                            $PDOExec = $PDOresult->execute(array(":Client_id"=>$ID,":C_name"=>$name,":C_surname"=>$surname,":Address"=>$address,":Code"=>$code,":C_Tel_Cell"=>$phone,":C_Email"=>$email,":C_Reference"=>$reference));
                                                          
                            // Client Registration
                            if ($PDOExec)
                                       
                            {
                                 echo '<script type="text/javascript">';
                                 echo ' alert("Client ID'.'  '.'  '.$ID.' '.'Client Information has Successsfully updated")';
                                 echo '</script>';
                                //header('location:Client_ViewAppointments.php');
                           } else {
                               echo '<script type="text/javascript">';
                                echo ' alert("Client ID Number Already Exist, Please log in as an Existing User")';
                                 echo '</script>';
                           }
                           
                            }} catch (PDOException $ex) {
                        $ex->getMessage();
                    }
                    ?></td>
                </tr>
            </table>
        </form>
         </center>
    </body>
    <center>
<div>
   <b><p style="text-align:bottom;">Copyright &#169; 2019 Life Health Care. All rights reserved.</p></b>
 </div>
</center>
</html>