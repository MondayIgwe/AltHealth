<html>
    <head>    
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="cssStyling/css_sticky_social_bar.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="cssStyling/logoStyling.css">  
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="cssStyling/logoStyling.css"> 
        
    </head>
        <body style="background:url(images/appointments.png)no-repeat; background-size:100%;">  
               <center>
             <h1 style="background-color:hsl(9, 200%, 64%);"><b><li style="margin-left: 0em"><a href="index.php">Back Up & Recovery</a></li></h1>
    </center>
       <form method="post"> 
        <table align="center">
       
<td><?php
    session_start();
    $url_array = explode('?', 'http://'.$_SERVER ['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    $url = $url_array[0];

    require_once 'google-api-php-client/src/Google_Client.php';
    require_once 'google-api-php-client/src/contrib/Google_DriveService.php';
    $client = new Google_Client();
    $client->setClientId('440247590299-4a8etpq7uth52dfmafm12t335j7mrhol.apps.googleusercontent.com');
    $client->setClientSecret('mfUGzr3NDfIZypq_JeYbzVW4');
    $client->setRedirectUri($url);
    $client->setScopes(array('https://www.googleapis.com/auth/drive'));
    if (isset($_GET['code'])) {
        $_SESSION['accessToken'] = $client->authenticate($_GET['code']);
        header('location:'.$url);exit;
    } elseif (!isset($_SESSION['accessToken'])) {
        $client->authenticate();
    }
    $files= array();
    $dir = dir('files');
    while ($file = $dir->read()) {
        if ($file != '.' && $file != '..') {
            $files[] = $file;
        }
    }
    $dir->close();
    if (!empty($_POST)) {
        $client->setAccessToken($_SESSION['accessToken']);
        $service = new Google_DriveService($client);
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $file = new Google_DriveFile();
        foreach ($files as $file_name) {
            $file_path = 'files/'.$file_name;
            $mime_type = finfo_file($finfo, $file_path);
            $file->setTitle($file_name);
            $file->setDescription('This is a '.$mime_type.' document');
            $file->setMimeType($mime_type);
            $service->files->insert(
                $file,
                array(
                    'data' => file_get_contents($file_path),
                    'mimeType' => $mime_type
                )
            );
        }
        finfo_close($finfo);
        header('location:'.$url);exit;
    }
    include 'index.phtml';
    ?></td>
    </table>
    </form>
    </body>
</html>