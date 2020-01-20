<?php
function triangulos_b($a,$b,$c) {
  if ($a==90 or $b==90 or $c==90) {
				$resultado='rectangulo';
			} elseif($a>90 or $b>90 or $c>90) {
				$resultado='obtusangulo';
			} else
				$resultado='acutangulo';
        return $resultado;
      }
      echo triangulos_b(30,45,68);
?>
