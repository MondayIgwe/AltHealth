<!DOCTYPE HTML>
<html>
    <head>
        <title>Client Login Page</title>
        <link rel="stylesheet" type="text/css" href="cssStyling/registrationStyleSheet.css"> 
        <link rel="stylesheet" type="text/css" href="cssStyling/logoStyleSheet.css">  
    </head>
    <body style="background:url(images/doctors.jpg)no-repeat; background-size:100%;">
        <form  method="post">
            <table align="center">
                <tr>
                    <th colspan="2"><h2 align="center">Client Login</h2></th>
                </tr>
                <tr><!--Capture User Details-->
                    <td><b>Enter SA ID:</b><br /></td>
                    <td><input type="text" name="Client_id" placeholder="SA Identification Numbers"  required /><br></td>
                </tr>
                <tr>
                    <td><b>Enter Name:</b><br /></td>
                    <td><input type="text" name="C_name" placeholder="patient name" required /><br></td>
                </tr>
                 <tr>
                    <td><b>Enter Surname:</b><br /></td>
                    <td><input type="text" name="C_surname" placeholder="patient surname" required /><br></td>
                </tr>
                   <tr>
                    <td><b>Enter Address:</b><br /></td>
                    <td><input type="text" name="Address" placeholder="address"/><br></td>
                </tr>
                    <tr>
                    <td><b>Enter Suburb Code:</b><br /></td>
                    <td><input type="text" name="Code" placeholder="code"/><br></td>
                </tr>
                 </tr>
                    <tr>
                    <td><b>Enter Cell No:</b><br /></td>
                    <td><input type="text" name="C_Tel_Cell" placeholder="valid phone numbers" required/><br></td>
                </tr>
                </tr>
                    <tr>
                    <td><b>Enter Email:</b><br /></td>
                    <td><input type="text" name="C_Email" placeholder="enter email" required/><br></td>
                </tr>
                </tr>
                 <tr>
                    <td><b>Enter Reference:</b><br /></td>
                    <td><textarea name="C_Reference" cols="20" rows="5" placeholder="word of mouth or Website" aria-invalid="false"/></textarea><br></td>
                </tr>
                <td align="right" colspan="2"><input type="submit" name="Client_login" value="login" /></td>
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
                                       //echo 'Client ID'.'  '.'  '.$ID.' '.'Successsfully registrered';
                            {
                                header('location:Client_ViewAppointments.php');
                           }}} catch (PDOException $ex) {
                        $ex->getMessage();
                    }
                    ?></td>
                </tr>
            </table>
        </form>
    </body>
</html>