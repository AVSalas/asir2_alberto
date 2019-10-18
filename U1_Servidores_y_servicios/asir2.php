Alberto del Valle.

<br/>
<a href="http://192.168.0.201/asir2_alvaro/asir2.php">Alvaro</a>
<br/>

<?php
phpinfo();
//****** Script de David ******//
$f=fopen('visitas.txt','a');
fwrite($f,$_SERVER['REMOTE_ADDR']."\r\n");
fclose($f)
?>
