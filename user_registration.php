 
<!DOCTYPE HTML>
<html>
    <head>
        <title>Registration Page</title>
        <link rel="icon" type="image/png" href="images/logo.png"
              <link rel="stylesheet" type="text/css" href="cssStyling/logoStyling.css">  
        <link rel="stylesheet" type="text/css" href="cssStyling/registrationStyleSheet.css">   
    </head>
    <body style="background:url(images/doctors.jpg)no-repeat; background-size:100%;">
        <form action="user_registration.php" method="post">
            <table align="center"  bgcolor="lightyellow">
               <tr>
                   <th colspan="2"><h2 align="center">Create an Account</h2></th>   
               </tr>
               <tr>
                   <td><b>Client ID:</b><br /></td>
                   <td><input type="text" name="userID" placeholder="Identification Numbers" /><br></td>
               <tr>
                   <td><b>Password:<br /></b></td>
                   <td><input type="password" placeholder="Password" name="password" autocomplete="new-password" required /><br /></td>
          
               </tr>
                <tr>
                    <td align="right" colspan="2"><input type="submit" name="register"value="Register" /></td>
                    <td><?php 
            //Connect to Database server and select the database 
            $dbhost = 'mysql:host=localhost; dbname=lifehealthcare';
            $username = 'root';
            $password = '';
             $PDOdb = new PDO($dbhost, $username, $password);
                echo '<br>';
                echo '<br>'; 

        if(isset($_POST['register']))
        {
            $user = $_POST['userID'];
            $password = $_POST['password'];
            
       //INSERT INTO THE TABLE
            $PDOquery = "INSERT INTO `client_registration`(`userID`, `password`)
                          VALUES (:userID,:password)";
                           
            $PDOresult = $PDOdb->prepare($PDOquery);
      
            $PDOExec = $PDOresult->execute(array(":userID"=>$user,":password"=>$password));
    
            if($PDOExec)
              echo 'Client ID'.'  '.'  '.$user.' '.'Successsfully registrered';
              echo '<br>'; 
              echo '<br>';
          }
    
            ?></td>   
                    <th colspan="2"><p align="center">Login if you already registered</p></th>
                    <br>
                    <br>
                    <td><a href="user_login.php">Login</a></li></td>
               </tr>
           </table>
       </form>
    </body>
</html>