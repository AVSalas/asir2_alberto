
<html>
  <head>
    <meta charset="utf-8">
    <title>asir2.php</title>
  </head>
  <body>
    Alberto del Valle.
    <br/>
      <a href="http://192.168.0.201/asir2_alvaro/asir2.php">Alvaro</a>
    <br/>
      <a href="http://192.168.0.206/asir2.php">DaniH</a>
  </body>
</html>

<?php
//****** Script de David ******//
$f=fopen('visitas.txt','a');
fwrite($f,$_SERVER['REMOTE_ADDR']."\r\n");
fclose($f)
?>
