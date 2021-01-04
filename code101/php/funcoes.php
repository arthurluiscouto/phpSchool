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
  echo"<br>";

  //Calcular a média ponderada
  $nota1 = 4;
  $nota2 = 5;
  $nota3 = 7;
  
  $mediaPonderada = ($nota1*3 + $nota2*4 + $nota3*5)/3;

  if($mediaPonderada <= 7.5) {
    echo "Reprovado";
  } elseif ($mediaPonderada <=9.5) {
    echo "Admitido";
  } elseif ($mediaPonderada >=9.5) {
    echo "Dispensado";
  }
  echo "<br>";

  //Maior de três números
  echo max(10, 13, 9);
  echo "<br>";

  //Números pares ou ímpar
  $num = 12;
  $resto = $num % 2; 
  if ($resto == 0) {
    echo "$num é par";
  } else {
    echo "$num é ímpar";
  }
  echo "<br>";

  //Determinar ano bissexto 
  $ano = 2021 ;
  
  if ( ($ano%4==0 && $ano%100!=0) || $ano%400 == 0)
   echo "$ano é bissexto";
  else
   echo "$ano não é bissexto";
   echo "<br>";
   
  //Dia da semanar
  $dia = 5;

  switch ($dia) {
    case 1 :{
        echo "Domingo!";
        break;
    }
    case 2 :{
        echo "Segunda!";
        break;
    }
    case 3 :{
        echo "Terça!";
        break;
    }
    case 4 :{
        echo "Quarta!";
        break;
    }
    case 5 :{
        echo "Quinta!";
        break;
    }
    case 6 :{
        echo "Sexta!";
        break;
    }
    case 7 :{
        echo "Sábado!";
        break;
    }
    default:
        echo "Não existe dia da semana com esse número!";
  }
  
  echo "<br>";
  echo "<br>";
  echo "Functions";
  echo "<br>";
  echo "<br>";