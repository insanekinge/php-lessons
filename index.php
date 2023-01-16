<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP lessons</title>
</head>
<body>
<?php 

  //работа с числами
  $x = 10;
  $y = 20;

  echo $x + $y. '<br>';
  echo $x - $y. '<br>';
  echo $x * $y. '<br>';
  echo $x / $y. '<br>';
  echo $x % $y. '<br>';

  $x += 10; // $x = $x + 10;
  $y *= 10; // $y = $y - 10;
  echo $x. '<br>';
  echo $y. '<br>';

  $x++; // $x +=1;
  $y--; // $y -=1;

  echo M_PI. '<br>';
  echo M_E. '<br>';

  echo abs(-22). '<br>';
  echo round(3.55566734, 2). '<br>';
  $rand = mt_rand(1, 20);
  $rand++;
  cho $rand. '<br>';

  echo max(2, 5, 1, 8, 43, 6, 13). '<br>';

  //строки
  $str = "Hello";
  echo "VAR: $str" . '!';
  echo "<input type=\"text\"><br>";

  $length = strlen($str);
  echo strtoupper(trim("  some  "));
  echo $length;

  echo md5("qwerty");

  //условные конструкции
  $a = 5;
  $str == "Hello"
  $isWeatherGood = false;
  
  // if($a == 5) {
  //   echo '$a = 5';
  // } 

    if($str == "Hello" || $isWeatherGood == false) {
      echo 'first';
    } else if($a == 5) {
      $res = "second";
      eco $res;
      if($str == "Hello") {
        echo "<br> yes";
      }
    }
    else if ('$a >50'){
    echo '$a > 50';
    } 
    else if ('$a < 45'){
      echo '$a <45'
    }
    
    else {                //ELSE - дополнительная конструкция условного оператора
      echo 'else';
    }



    // Оператор Switch-case
    $x = 4;

    switch($x) {
      case 5:
        echo "Var: 5";
        break;

        case 7:
          echo "Var: 7";
          break;
        case 9:
          echo "Var: 9";
          break;  
        case 9:
          echo "Var: 3";
          break;
        default:                //ключевое слово типо else/ выполняется в том случае, если предыдущие условия не сработали.
          echo "Default work!";    
    }
?>
</body>
</html>