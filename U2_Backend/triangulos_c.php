<?php
function triangulos_a($a,$b,$c) {
  if ($a==$b and $a==$c) {
    $producto='Triangulo equilatero';
  } elseif ($a==$b or $a==$c or $b==$c) {
    $producto='Triangulo isosceles';
  } else {
    $producto='Triangulo escaleno';
  }
  return $producto;
}
function triangulos_b($a,$b,$c) {
  if ($a==90 or $b==90 or $c==90) {
				$resultado='rectangulo';
			} elseif($a>90 or $b>90 or $c>90) {
				$resultado='obtusangulo';
			} else
				$resultado='acutangulo';
        return $resultado;
}
function triangulos_c ($a,$b,$c,$d,$e,$f) {
	return triangulos_a($a,$b,$c).' y '.triangulos_b($d,$e,$f);
}
echo triangulos_c(100,100,100,100,100,100).'<br/>';
echo triangulos_c(100,150,100,200,300,250).'<br/>';
echo triangulos_c(250,170,210,150,100,80).'<br/>';
echo triangulos_c(1,1,1,90,45,45).'<br/>';
echo triangulos_c(1,1,1,60,60,60).'<br/>';
echo triangulos_c(250,170,210,150,100,80).'<br/>';
?>
