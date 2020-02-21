<?php
echo "1"; // 1 - номер задания
echo "<br/>";
echo "Hello world!";
echo "<br/>";

echo "2";
echo "<br/>";
//Урок #3 - Hello world!
echo "Hello world!"; //выводит на экран надпись Hello world!
echo "<br/>"; //отступ строки




//Урок #4 - Комментарии в PHP
/*
 asd
 dsa
 */ //Многострочный комментарий
echo "<br/>";



//Урок #5 - Переменные и их типы
$number = 5; //числовой тип переменной
$string = "asd"; //строковый тип переменной
$bool = true; //булевский тип переменной
$arr = [1,2]; //массив
$float = 3.22; //с плавающей точкой
echo $arr,"<br/>",$number,"<br/>",$bool,"<br/>",$string,"<br/>",$float;
echo "<br/>";



//Урок #6 - Константы
define("PI", 3.14); //объявление константы PI = 3,14
echo PI;
echo "<br/>";
echo defined("PI"); //есть ли константа PI? Возвращает true(1);
echo "<br/>";
echo defined("PIZ"); //есть ли константа PIZ? Возвращает false(null);
echo "<br/>";



//Урок #7 - Арифметические операции
$x = 32;
$y = 22.13;
$sum = $x + $y; //сумма
$dif = $x - $y; //разность
$mult = $x * $y; //умножение
$del = $x / $y; //деление
echo "$sum";
echo "<br/>";
echo "$dif";
echo "<br/>";
echo "$mult";
echo "<br/>";
echo "$del";
echo "<br/>";
$z = 12;
$ostatok = $x % $z;
echo "$ostatok"; //остаток при делении
echo "<br/>";
$q = 400;
$q += 10; // 400+10
$q++; //$q + 1
echo $q;
echo "<br/>";


//Урок #8 - Строковые операции
$str_1 = "<b>pervaya</b>";
$str_2 = "<i>vtoraya</i>";
echo $str_1 . " " . $str_2; // $str_1 + " " + $str_2
echo "<br/>";



//Урок #9 - Логические операции
$x = 12;
$y = 34;
$z = 4.25;
$bool_1 = $x != $z; //не равно
$bool_2 = $x > $z; //больше
$bool_3 = !($x == $y); //переворачивает 0 в 1
$bool_4 = $x == $y || $z < $y; //это или это
$bool_5 = $x < $y && $x > $z; //это и это
$bool_6 = $z != $x ^ $y < $z; // возвращает true при true &&
$bool = ($x != $y && $z < $x) || $x == $y;
echo $bool_1 . " " . $bool_2 . " " . $bool_3. " " . $bool_4. " " . $bool_5. " " . $bool_6. " " . $bool;
echo "<br/>";



//Урок #10 - Оператор эквивалентности
$string = "example";
$num = 0;
$bool_1 = $string == true;
$bool_2 = $string === true; //=== проверяет не только значение но и тип данных переменной
echo "$bool_1 = $string == true;";
echo "<br/>";
echo "$bool_2 = $string == false;";
echo "<br/>";



//Урок #11 - Условные операторы
$x = 10;
$y = 5;
if ($x == $y && $x != 12 && ($x + 5) == 15) //если
    echo "all is work";
else if ($x == 15 || $y != 7) { //иначе если
    $num = 5;
    echo "Число" . " " . $num;
}
else { //иначе
    echo "Nooo";
}
echo "<br/>";
$x == $y ? $string ="Да" : $string="Нет"; //если ?(true), иначе :(false)
echo $string;
echo "<br/>";



//Урок #12 - Оператор Switch () case
$x = 12;
switch ($x) {
    case "hello" : echo "Это строковая переменная"; //проверка $x == "hello" ?
    break; //конец данного кейса
    case 12 : echo "Это строковая переменная"; //проверка $x == 12 ?
    break; //конец данного кейса
    default : echo "Эта переменная нам неизвестна"; // Задать дефолтное значение (break не нужен)
}
echo "<br/>";



//Урок #13 - Циклы For, While и Do While
for ($i = 0; $i < 10; $i++) { //повторять цикл пока $i < 10
    if ($i % 2 == 0) continue; //пропускаем если $i делится на 2
    if ($i % 9 == 0) break; //завершаем цикл если $i делится на 9
    echo "Цикл под номером $i<br>";
}
echo "<br/>";
$x = 0;
while ($x < 10) { //пока выполняется условие, выполняем цикл
    echo "Итерация под номером $x<br>";
    $x+=3;
}
echo "<br/>";
$z = 10;
do { //выполнять до тех пор
    echo "Операция выполнилась только один раз";
    $z++;
} while ($z < 5);
echo "<br/>";

echo "3-1";
echo "<br/>";
$a = 3;
$b = 5;
$c = 5;
$d = 11;
$perimetr = $a + $b + $c + $d;
echo $perimetr;
echo "<br/>";
echo "<img src='https://sun1-99.userapi.com/M1cjqdW3SU7XOSqu3RPCXTFsxJ2Q8NRKpZ6aIQ/s5yUQSicifM.jpg'>";
echo "<br/>";
echo "3-2";
echo "<br/>";
$x = 0.5;
$a = 7*$x;
$b = 21*$x;
$s = ($a + $b)*($a + $b);
echo $s;
echo "<br/>";
echo "<img src='https://sun1-14.userapi.com/i8RTzdQT4WwrnyFaXykqXHWgy4-A1XmztgrPZg/nofC5ai0h5k.jpg'>";
echo "<br/>";

echo "4-1";
echo "<br/>";
/* $ab = 13;
$bc = 21;
$cd = 14;
$da = 36;
$ck = 13;
$kd = 15;
$s_cdk = sqrt($bc*($bc - $ck)*($bc - $cd)*($bc - $kd)); //площадь треугольника внутри трапеции
$h = $s_cdk / ($kd*0.5); //высота трапеции
$s_abcd = 0.5*($bc + $da)*$h; //площадь трапеции
echo $s_abcd; */
$Why = false;
$ab = 25;
$bc = 5;
$cd = 26;
$da = 23;
$h = 24;
$s_abcd = 0.5*($bc + $da)*$h;
$p_abcd = $ab + $bc + $cd + $da;
if ($Why == 1) {
    echo "Площадь трапеции равна"." ".$s_abcd;
}
else if ($Why == 0) {
    echo "Периметр трапеции равен"." ".$p_abcd;
}
else {
    //break; почему то не работает :(
    echo "Расчёт не выполнен";
}
echo "<br/>";
echo "4-2?";
echo "<br/>";

echo "5-1";
echo "<br/>";

$computer = rand(0,1);
for ($i=1; $i<=100; $i++) {
    echo $computer;
}
if ($computer == 1) {
    echo " komputer optimist";
}
else echo " komputer pesimist";
echo "<br/>";

echo "5-2";
echo "<br/>";

$password = 302390;
for ($i=100000; $i<=999999; $i++) {
    if ($i == $password) echo $i . " - пароль";
}
echo "<br/>";

echo "5-3 ?";
echo "<br/>";
/*$pass1 = 476;
$pass2 = null;*/
echo "5-4 ?";
echo "<br/>";

echo "6-1";
echo "<br/>";

define("семь",7);
define("четыре",4);
$a = семь;
$b = четыре;
echo семь + четыре;
echo "<br/>";
echo $a + $b;
echo "<br/>";

echo "6-2";
echo "<br/>";

$a = 13550;
$b = $a % 100;
$c = substr($a, 0, 3) . "," . $b; // не знал как по-другому решить
echo $c;
echo "<br/>";

echo "6-3 ?";
echo "<br/>";

?>
