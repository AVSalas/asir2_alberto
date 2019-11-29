<?php
function triangulosc ($a,$b,$c,$d,$e,$f) {

  if ($a==$b and $a==$c) {
    $producto='Triangulo equilatero';
  } elseif ($a==$b or $a==$c or $b==$c) {
    $producto='Triangulo isosceles';
  } else {
    $producto='Triangulo escaleno';
  }

  if ($a==90 or $b==90 or $c==90) {
				$resultado='rectangulo';
			} elseif($a>90 or $b>90 or $c>90) {
				$resultado='obtusangulo';
			} else
				$resultado='acutangulo';
        return $producto.' y '.$resultado.'. ';
}
    echo triangulosc(100,100,100,100,100,100);
    echo triangulosc(100,150,100,200,300,250);
    echo triangulosc(250,170,210,150,100,80);
?>
