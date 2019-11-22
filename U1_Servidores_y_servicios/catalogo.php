<html>
  <head>
    <title>Catalogo de Alber</title>
  </head>
    <body>
      <form>
       Añade tu repo de GitHub:
	     <input name="enlacegithub" placeholder="Repo GitHub" autofocus/>
	     </br>
       Y tu nombre aquí:
	     <input name="nombre" placeholder="Nombre"/>
	     </br>
	       <button>Añadir repo</button>
	     </br>
      </form>
        <?php
          if(isset($_GET['enlacegithub'], $_GET['nombre'])){
		            echo 'Buenas, ';
		              print_r($_GET['nombre']);
		              $f=fopen('enlacesrepos.html','a');
		              fwrite($f,'<a href="'.$_GET['enlacegithub'].'">'.$_GET['nombre'].'</a></br>'."\r\n");
		              fclose($f);
	               }
        ?>
  </body>
</html>
