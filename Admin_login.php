<!DOCTYPE HTML>
<html>
    <head>
        <title>Administrator Login Page</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="cssStyling/styleSheet.css"> 
        <link rel="stylesheet" type="text/css" href="cssStyling/logoStyleSheet.css">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    </head>
    <body style="background:url(images/doctors.jpg)no-repeat; background-size:100%;">
        <center>
           <h1 style="background-color:hsl(9, 200%, 64%);"><b><li style="margin-left: 0em"><a href="index.php">Back</a></li></h1>
    </center>
        <form method="post"> 
           <table align="center">
               <th colspan="5"><h2 align="center"><b>Administrator User Login</h2></b></th> 
                 <tr>
                     <td><font size="4"><b>Username:</b><br /></font></td>
                   <td><input type="text" name="user" placeholder="Enter admin user name" required/><br></td>
                </tr>
                <tr>
                    <td><font size="4"><b>Password:</b><br /></font></td>
                   <td><input type="password" name="pass" required/><br /></td>
                </tr>
                <tr>
                    <td align="right" colspan="2"><input type="submit" name="login" value="login" required/></td>
                    <td>
                <?php
                     session_start();
                        try
                        {
                            //Connect to Life Health Database
                            require_once 'Connect_DB.php';

                            //Query the database for user
                            if(isset($_POST['login'])){
                                $user = $_POST['user'];
                                $pass = $_POST['pass'];

                                $query = "SELECT * FROM `admin_login` WHERE username = '$user' and password = '$pass'";
                                $statement = $PDOdb->prepare($query);
                                $statement->execute();
                                $login = $statement->fetch(PDO::FETCH_ASSOC);
                                
                                //Authenticate Admin Login
                                if($login !=null){
                                    session_start();
                                    $_SESSION['auth']= 'true';
                                    header('location:healthPractitioner.php');
                                } else {
                                      echo '<script type="text/javascript">';
                                      echo ' alert("Invalid Administrator Password")';
                                      echo '</script>';
                                }
                        } }catch (Exception $ex) {
                                $ex->getMessage(); }
                    ?>
                    </td>
                </tr>
           </table>
       </form>
    </body>
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
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