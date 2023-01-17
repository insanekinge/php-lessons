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

  echo M_PI. '<br>'; //число пи
  echo M_E. '<br>'; //экспанента

  echo abs(-22). '<br>';
  echo round(3.55566734, 2). '<br>';
  $rand = mt_rand(1, 20);       // выводит рандомное число из промежутка данных
  $rand++;
  echo $rand . '<br>';

  echo max(2, 5, 1, 8, 43, 6, 13). '<br>';

  //строки
  $str = "Hello";
  echo "VAR: $str" . '!';
  echo "<input type=\"text\"><br>";

  $length = strlen($str);
  echo strtoupper(trim("  some  "));  // убирает пробелы
  echo $length;

  echo md5("qwerty"); 

  //условные конструкции
  $a = 5;
  $str == "Hello";
  $isWeatherGood = false; //задали переменнную и добавляем её в условие
  
  // if($a == 5) {
  //   echo '$a = 5';
  // } 

    if($str == "Hello" || $isWeatherGood == false) {

      echo 'first';

    } else if($a == 5) {

      $res = "second";
      echo $res;

      if($str == "Hello") {
        echo "<br> yes";
      }
      
    }

    else if ('$a >50'){
    echo '$a > 50';

    } 

    else if ('$a < 45'){
      echo '$a <45';

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
         //Тип данных - Массивы

    $categories = [
      'Видеоигры', "Животные", "Спорт", "Файлы", "Приколы"
    ];

    $may_friends = [];// Пустой массив
    
    // простые массивы : элементы сохраняются с числовым индексом

    $cats = ["Игры", "Приколы", "Розыгрыши", "Фейлы"];
    
    $my_friends = "Winnie Pooh"; // добавление элементов в массив. [] - ставим после переменной
    
    array_push($my_friends, "Winnie Pooh") //есть вариант с исп стандартной функции array_push

    print($cats[0];)  // чтение массива. выодим первое значение массива
    
    $cats[0] = "Офис"; // заменяем первый элемент массива

    var_dump($cats);   //узнать всё содержимое массива
    array(3) {
      [0] => string(10) "Игры"
      [1] => string(14) "Приколы"
      [2] => string(10) "Фейлы"
    }

    print ($cats[0]);         //  | Получить первый элемент массива
    print(array_shift($cats));//  | array_shift возвращает первый элемент массива и уменьшает массив на этот элемент

    print ($cats[count($cats) - 1]); //  | Получить последний элемент массива
    print(array_shift($cats));       //  | array_pop возвращает последний элемент массива и уменьшает массив на этот элемент

    // ассоциативные массивы : мисп вместо индексов ключи. (ключами могут быть строки числом и тд )

    $gif = [
      'gif' => '/img/cat.gif',
      'title' => 'Типичный юзер',
      'author' => 'frexin',
      'likes_count' => 1
    ];
 

    $cat = [
      'gender' => 'male',
      'name' => 'keks',
      'color' => 'yellow',
      'age' => 1.5
    ];

    $cat['weight'] = 2; // добваление\замена занчений 

    print($cat['name']); // получение элемента по ключу

    // Функции для работы с массивами

    $cats = ["Видеоигры", "Люди", "Наука", "Приколы", "Спорт", "Видеоигры"];

    count($cats) => 6 //считает элементы массива и возвращает число
    
    isset($cats[2]) => true // проверяет существование в массиве элемента по его ключу (индексу)
    
    in_array($cats, 'Люди') => true // Проверяет существование в массиве элемента по его значению

    sort($cats) => ["Видеоигры", "Люди", "Наука", "Приколы", "Спорт", "Видеоигры"]; // сортирует  массив: числовые значения - по возрастанию , строковые - по алфавиту


    //простые массивы

    $categories = [];
    $categories = ["Животные", "Люди", "Наука"];
    $categories = explode(",", "Животные, Люди, Наука"); // массив строка с помощью explode 

    print_r($categories);
    
    Array(                // результат print_r
      [0] => "Животные"
      [1] => "Люди"
      [2] => "Наука"
    )

    var_dump($categories); 

    array(3) {                    // результат var_dump
      [0] => string(16) "Животные"
      [1] => string(8) "Люди"
      [2] => string(10) "Наука"
    }


    $cat_str = implode(",", $categories); // результат: Животые,Люди,Наука
    print($cat_str)
    $categories = ["Животные, Люди, Наука"];


    $first = $categories[0];
    print("Первое значение:" . $first); // результат: Первое значение: Животные

    $num = count($categories); // количество значений в массиве 
    $last_index = $num - 1; // индекс последнего значения
    $print("Последнее значение: " . $categories[$last_index]);
    $categories = ["Животные, Люди, Наука"]; // результат: Последнее значение: Наука

    //удалить второй элемент массива
    unset($categories[1]); 
    $categories = ["Животные, Люди, Наука"];

    // проверяем существует ли элемент с индексом 2
    $result = isset($categories[2]);

    var_dump($result);
    $categories = ["Животные, Люди, Наука"];

    // проверяем существование значение 'Наука'
    $result = in_array("Наука", $categories);
    
    var_dump($result);
    $categories = ["Животные, Люди, Наука"];

    //получить первый элемент и удалить его из массива
    $first = array_shift($categories);
    print("Последнее значение:" . $last);
    $categories = ["Животные, Люди, Наука"];

    $new_cats = ["Видеоигры", "Люди", "Наука"];

    //объединяем два массива в один
    $categories = array_merge($categories, $new_cats);


    //АССОЦИАТИВНЫЕ МАССИВЫ

    $gif = [
      'gif' => '/uploads/preview_gif34324.gif',
      'title' => 'Енотик',
      'likes_count' => 0
    ];

    //Добавляем новое значение с ключом
    $gif['author'] = "frexin";

    print($gif[title]); // name gif

    $gif['likes_count'] = $gif['likes_count'] + 1;
    $gif['title'] = ' Бегущий енот' 
     
    // получить ключи из массива

    $keys = array_keys($gif);

    $last_key = array_pop($keys);
    
    $last_val = $gif[$last_key];

    //ДВУМЕРНЫЕ МАССИВЫ

   

    $gif_list = [$gif, $gif, $gif]
    print($gif_list[0]['title']);  //обратиться к первой гифке

    // получить случайный элемент

    $index = array_rand($gifs);
    $random_gifs = $gifs[$index];

    //----------------------------- Как соединить два массива?
    $first_gif = [
      'gif' => '/uploads/preview_gif34324.gif',
      'title' => 'Енотик',
      'likes_count' => 0
    ];

    $second_gif = [
      'gif' => '/uploads/preview_gif345524.gif',
      'title' => 'Крутой кот',
      'likes_count' => 0
    ];

    // Создаём двумерный массив

    $gif_list = [$first_gif, $second_gif];

    print_r($gif_list);




    // ЦИКЛЫ

    while(<условие цикла>){
      <тело цикла>
    }

    //цикл выводит все натуральные числа от 1 до 10

    $last_num = 1;

    while ($last_num <10) {
      print($last_num);
      $last_num = $last_num + 1; 
    }

    // foreach - цикл для итерации массивов. $key - ключ. $value - значение
    foreach (<массив> as $key => $value) {
      <тело цикла>
    }

    //список
    $categories = ["Видеоигры", "Люди", "Наука", "Приколы", "Спорт", "Видеоигры"];

    $index = 0;
    $num_count = count($categories);

    while ($index < num_count) {
      print($categories[$index]);
      print("<br>");

      $index = $index + 1;

    }


    $gif = [
      'gif' => '/uploads/preview_gif34324.gif',
      'title' => 'Енотик',
      'likes_count' => 0
    ];

    foreach ($gif as $key => $value) {
      print("Ключ:" . $key);
      print("Значение:" . $value);

    }


    // ФУНКЦИИ


    //функция складывающая два числа
     function <имя функции> ( <аргумент 1>, ...) {
      <тело функции> 
      return <результат работы>
     }


     function calculate_amount($first, $second) {
      $amount = $first + $second;

      return $amount;
     }

     result = calculate_amount(10; 5);
     print($result);


     //Функция, обрезающая текст до нужного числа символов
     $long_text = "Поэт инстиктивно чувствовал преимущества реального устного исполнения"

     function cut_text($text, $num_letters) {
      $num = mb_strlen($text);

      if ($num > $num_letters) {
        $test = mb_substr($text, 0, $num_letters);
        $text .= "...";
      }
      return $text;

     }
     $short_text = cut_text($long_text, 25);

     print($short_text)
    }
?>
</body>
</html>
