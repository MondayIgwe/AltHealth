<!DOCTYPE HTML>
<html>
    <head>
        <title>Client Login Page</title>
        <link rel="stylesheet" type="text/css" href="cssStyling/registrationStyleSheet.css"> 
        <link rel="stylesheet" type="text/css" href="cssStyling/logoStyleSheet.css">  
    </head>
    <body style="background:url(images/doctors.jpg)no-repeat; background-size:100%;">
        <form action="client.php" method="post">
           <table align="center">
               <tr>
                   <th colspan="2"><h2 align="center">Client User Login</h2></th>
                      </tr>
               <tr>
                   <td><b>Username:</b><br /></td>
                   <td><input type="text" name="user_ID" placeholder="Identification Numbers" /><br></td>
               </tr>
               <tr>
                   <td><b>Password:</b><br /></td>
                   <td><input type="password" name="password" /><br /></td>
                </tr>
                <tr>
                    <td align="right" colspan="2"><input type="submit" name="login "value="login" /></td>
                    <td><?php
//Connect to Database server and select the database 
            $dbhost = 'mysql:host=localhost; dbname=lifehealthcare';
            $username = 'root';
            $password = '';
             $PDOdb = new PDO($dbhost, $username, $password);
                echo '<br>';
                echo '<br>'; 
       
//Query the database for user
          if(isset($_POST["login"]))
         {
           $user = $_POST['user_ID'];
           $pass = $_POST['password'];
      
         }
   
        ?></td>
                    <th colspan="2"><p align="center">Please register, if not registered</p></th>
                    <br>
                    <br>
                    <td><a href="user_registration.php">Register</a></li></td>
            </tr>
           </table>
       </form>
    </body>
</html>