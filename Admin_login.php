<!DOCTYPE HTML>
<html>
    <head>
        <title>Administrator Login Page</title>
        <link rel="stylesheet" type="text/css" href="cssStyling/styleSheet.css"> 
        <link rel="stylesheet" type="text/css" href="cssStyling/logoStyleSheet.css">  
    </head>
    <body style="background:url(images/doctors.jpg)no-repeat; background-size:100%;">
        <form action="Admin_homePage.php" method="post">
           <table align="center">
               <tr>
                   <th colspan="2"><h2 align="center">Administrator User Login</h2></th>
                      
               </tr>
               <tr>
                   <td><b>Username:</b><br /></td>
                   <td><input type="text" name="username" placeholder="Enter user name" /><br></td>
               </tr>
               <tr>
                   <td><b>Password:</b><br /></td>
                   <td><input type="password" name="password" /><br /></td>
                </tr>
                <tr>
                    <td align="right" colspan="2"><input type="submit" name="login "value="login" /></td>
                </tr>
           </table>
       </form>
    </body>
</html>