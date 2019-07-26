<?php
$database = 'lifehealthcare';
$user = 'root';
$pass = '';
$host = 'localhost';
$dir = 'C:/xampp/htdocs/lifeHealthCare/googleDrive_Backup/Uploading-files-to-Google-Drive-with-PHP-master/Uploading-files-to-Google-Drive-with-PHP-master/files/AltHealth.sql';
echo "<h3>Backing up database to `<code>{$dir}</code>`</h3>";
exec("mysqldump --user={$user} --password={$pass} --host={$host} {$database} --result-file={$dir}", $output);
var_dump($output);
?>
   
     
   
