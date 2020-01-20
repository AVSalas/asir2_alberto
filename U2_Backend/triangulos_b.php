<?php
function triangulos_b($a,$b,$c) {
  if($a+$b+$c>180) {
    echo "Triangulo no valido";
  } else {
  if ($a==90 or $b==90 or $c==90) {
				$resultado='rectangulo';
			} elseif($a>90 or $b>90 or $c>90) {
				$resultado='obtusangulo';
			} else
				$resultado='acutangulo';
        return $resultado;
      }
  }
      echo triangulos_b(90,90,0)."<br/>";
      echo triangulos_b(100,60,20)."<br/>";
      echo triangulos_b(30,50,70)."<br/>";

?>
