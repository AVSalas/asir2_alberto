<html>
  <head>
    <meta charset="utf-8">
    <title>Parametros</title>
  </head>
  <body>
    <p>Parametros</p>
    <?php
    function sum($a,$b) {
      $producto=($a+$b);
        return $producto;
    }
    function res($a,$b) {
      $producto=($a-$b);
        return $producto;
    }
    function mul($a,$b) {
      $producto=($a*$b);
        return $producto;
    }
    function div($a,$b) {
      $producto=($a/$b);
        return $producto;
    }
    echo "Suma A + B = ".sum(100,100);
      echo '</br>';
      echo '</br>';
    echo "Resta A - B = ".res(100,100);
      echo '</br>';
      echo '</br>';
    echo "Multiplica A x B = ".mul(100,100);
      echo '</br>';
      echo '</br>';
    echo "Divide A / B = ".div(100,100);
    ?>
  </body>
</html>
