<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="zadanie">
        <h1>Задание 1</h1>
        Создайте переменные $a=17 и $b=10. Отнимите от $a переменную $b и 
результат присвойте переменной $c. Затем создайте переменную $d, 
присвойте ей значение 7. Сложите переменные $c и $d, а результат запишите 
в переменную $result. Выведите на экран значение переменной $result. 
    </div>

    <div class="otvet">
        <?php 
        $a=17;
        $b=10;
        $d=7;
        $c=$a-$b;
        $result=$c+$d;
         echo "Сложение переменной с и d равна $result"
        ?>
    </div>
        <h2>Ответ: 14 </h2>
    </div>
</body>
     <div class="zadanie">
         <h1>Задание 2</h1>
         Создайте переменные $c=15 и $d=2. Просуммируйте их, а результат 
присвойте переменной $result. Выведите на экран значение 
переменной $result.
     <div class="otvet">
         <?php 
         $c=15;
         $d=2;
         $result=$c+$d;
          echo "Сложение переменной с и d равна $result"         
         ?>

     </div>
     <h2>Ответ: 17</h2>
     </div>
</body>
    <div class="zadanie">
        <h1>Задание 3</h1>
        Создайте переменные $text1='Привет, ' и $text2='Мир!'. С помощью этих 
переменных и операции сложения строк выведите на экран фразу 'Привет, 
Мир!'.
    <div class="otvet">
        <?php 
        $text1="Привет, ";
        $text2= "Мир! ";
        $result=$text1+$text2;
         echo" $result"
        ?>
    </div>
    </div>
</html>