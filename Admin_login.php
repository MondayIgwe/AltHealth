<!DOCTYPE HTML>
<html>
    <head>
        <title>Administrator Login Page</title>
        <link rel="stylesheet" type="text/css" href="cssStyling/styleSheet.css"> 
        <link rel="stylesheet" type="text/css" href="cssStyling/logoStyleSheet.css">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    </head>
    <body style="background:url(images/doctors.jpg)no-repeat; background-size:100%;">
        <form method="post">
           <table align="center">
               <tr>
                   <th colspan="5"><h2 align="center">(HCP/GA)Administrator User Login</h2></th>           
               </tr>
               <tr>
                   <td><b>Username:</b><br /></td>
                   <td><input type="text" name="user" placeholder="Enter user name" required/><br></td>
               </tr>
               <tr>
                   <td><b>Password:</b><br /></td>
                   <td><input type="password" name="pass" required/><br /></td>
                </tr>
                <tr>
                    <td align="right" colspan="2"><input type="submit" name="login" value="login" required/></td>
                    <td>
        <?php
                        try
                        {
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
                                    echo 'Password Invalid';
                                }
                        } }catch (Exception $ex) {
                                $ex->getMessage(); }
        ?>
                    </td>
                </tr>
           </table>
       </form>
    </body>
</html>