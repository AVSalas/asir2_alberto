<html>
  <head>
    <title>Catalogo de Alber</title>
  </head>
    <body>
      <form>
       Añade tu repo de GitHub:
	     <input name="enlacegithub"/>
	     </br>
       Y tu nombre aquí:
	     <input name="nombre"/>
	     </br>
	       <button>Añadir repo</button>
	     </br>
      </form>
        <?php
          if(isset($_GET['enlacegithub'], $_GET['nombre'])){
	           if (filter_var($_GET['enlacegithub'], FILTER_VALIDATE_URL)) {
		            echo 'Buenas, ';
		              print_r($_GET['nombre']);
		              $f=fopen('enlacesrepos.html','a');
		              fwrite($f,'<a href="'.$_GET['enlacegithub'].'">-'.$_GET['nombre'].'-</a></br>'."\r\n");
		              fclose($f);
	               }
}
        ?>
      </br>
      Lista de repos de ASIR

       <?php
       include 'enlacesrepos.html';
       ?>
  </body>
</html>
