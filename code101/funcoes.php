<?php
  echo "PHP Language Basics";
  echo "<br>";
  echo "<br>";

  //. Calcular a área de um triângulo
  function areaTriangle ($base, $altura)
  {
    $areaTriangle = ($base * $altura) /2;

    return $areaTriangle;
  }
  $result = areaTriangle(3, 3);
  echo $result;
  echo "<br>";


  //Calcular a área de um círculo
  $pi = 3.14;
  function areaCircle ($pi, $raio)
  {
    $areaCircle = ($pi * $raio * $raio);

    return $areaCircle;
  }
  $result = areaCircle ($pi, 3);
  echo $result; 
  echo "<br>";




  //Converter Fahrenheit para graus Celcius 
  function fahrenheitForCelcius($fahrenheit) 
  {
    $celcius = ($fahrenheit - 32) * (5/9);

    return $celcius;
  }
  
  $result = fahrenheitForCelcius(10);
  echo round($result, 2);
  echo "<br>";


  //Calcular o preço final de um produto com um desconto
  function calcularDesconto ($valor, $porcentagem)
  {
    $desconto  = ($valor * $porcentagem);
    $valorFinal = ($valor - $desconto);

    return [$desconto, $valorFinal];
    
  }
  $result = calcularDesconto(100, 0.10);
  echo "o desconto é {$result[0]} o valor é {$result[1]}";
  echo "<br>";  


  //A partir de um determinado número de segundos calcula o número de
  // horas, minutos e segundos correspondentes.
  //Função propria 
  echo gmdate("H:i:s", 8053);
  echo "<br>";
  //ou
  $total = 8053;
  $horas = floor($total / 3600);
  $minutos = floor(($total - ($horas * 3600)) / 60);
  $segundos = floor($total % 60);
  echo $horas . ":" . $minutos . ":" . $segundos;

  echo "<br>";
  echo "<br>";
  echo "Decisions and Loops";
  echo "<br>";
  echo "<br>";

  //Pretende-se saber a idade de um nadador e depois classificá-lo num dos
  // seguintes escalões

  $Nadador = 17;

  if ($Nadador <= 6) {
  echo "golfinho";
  } elseif ( $Nadador <=10) {
  echo "infantil";
  } elseif ( $Nadador <= 13 ) {
  echo "juvenil";
  } elseif ( $Nadador <= 17) {
  echo "tubarão";
  } elseif ($Nadador >= 18) {
  echo "Cota";
  }

  


    
