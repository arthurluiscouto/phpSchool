<?php
  function areaTriangle ($base, $altura)
  {
    $areaTriangle = ($base * $altura) /2;

    return $areaTriangle;
  }
  $result = areaTriangle(3, 3);
  echo $result;
  echo "<br>";
?> 

<?php
  $pi = 3.14;

  function areaCircle ($pi, $raio)
  {
    $areaCircle = ($pi * $raio * $raio);

    return $areaCircle;
  }
  $result = areaCircle ($pi, 3);
  echo $result; 
  echo "<br>";

?>

<?php
  function fahrenheitForCelcius($fahrenheit) 
  {
    $celcius = ($fahrenheit - 32) * (5/9);

    return $celcius;
  }
  
  $result = fahrenheitForCelcius(10);
  echo round($result, 2);
  echo "<br>";
?>

<?php   
  function calcularDesconto ($valor, $porcentagem)
  {
    $desconto  = ($valor * $porcentagem);
    $valorFinal = ($valor - $desconto);

    return [$desconto, $valorFinal];
    
  }
  $result = calcularDesconto(100, 0.10);
  echo "o desconto é {$result[0]} o valor é {$result[1]}";
  echo "<br>";  
?>