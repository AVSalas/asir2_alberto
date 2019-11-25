<html>
  <head>
    <meta charset="utf-8">
    <title>Funciones</title>
  </head>
  <body>
    <p>Funciones</p>
    <?php
    function sumresmuldiv() {
      $a=100;
      $b=100;
        echo 'Numero A = '.$a.' y Numero B = '.$b;
          echo '</br>';
          echo '</br>';
        echo 'Suma A + B: '.$a.' + '.$b.' = '.($a+$b);
          echo '</br>';
          echo '</br>';
        echo 'Resta A - B: '.$a.' - '.$b.' = '.($a-$b);
          echo '</br>';
          echo '</br>';
        echo 'Multiplica A x B: '.$a.' x '.$b.' = '.($a*$b);
          echo '</br>';
          echo '</br>';
        echo 'Divide A / B: '.$a.' / '.$b.' = '.($a/$b);
      }
      sumresmuldiv();
      ?>
  </body>
</html>
