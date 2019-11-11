<html>
  <head>
    <meta charset="utf-8">
    <title>asir2.php</title>
  </head>
  <body>
    Formulario de Alberto del Valle.
    <br/>
    <?php
    if(isset($_GET['email'])) {
    	if (filter_var($_GET['email'], FILTER_VALIDATE_EMAIL)) {
    		echo 'Bienvenido ';
    		print_r($_GET['email']);
    		$f=fopen('suscriptores.txt','a');
    		fwrite($f,$_GET['email']."\r\n");
    		fclose($f);
    	}
    }
    ?>
    <form>
    	<input name="email"/>
    	<button>Suscríbete, es una orden</button>
    </form>
  </body>
</html>
