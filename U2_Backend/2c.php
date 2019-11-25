<html>
  <head>
    <meta charset="utf-8">
    <title>Parametros</title>
  </head>
  <body>
    <p>Parametros</p>
    <?php
    function calculasum($a,$b) {
      $producto=($a+$b);
        return $producto;
    }
    function calculares($a,$b) {
      $producto=($a-$b);
        return $producto;
    }
    function calculamul($a,$b) {
      $producto=($a*$b);
        return $producto;
    }
    function calculadiv($a,$b) {
      $producto=($a/$b);
        return $producto;
    }
    echo "Suma A + B = ".calculasum(100,100);
      echo '</br>';
      echo '</br>';
    echo "Resta A - B = ".calculares(100,100);
      echo '</br>';
      echo '</br>';
    echo "Multiplica A x B = ".calculamul(100,100);
      echo '</br>';
      echo '</br>';
    echo "Divide A / B = ".calculadiv(100,100);
    ?>
  </body>
</html>
