<?php

echo "<h3>Операцыя присвоения</h3>";
$a = 15 + ($b = 10);
echo "Выход 25: $a <br>";

$a = 15;
$b = "10";
$c = $a + $b;
echo "Выход 25: $c <br>";


echo "<h3>Префиксный инкремент</h3>";
$a = 10;
echo "Выход 11: " . ++$a . "<br>";
echo "Выход 11: $a <br>";

echo '<h3>Постфиксный инкремент</h3>';
$a = 10;
echo "Выход 10: " . $a++ . "<br>";
echo "Выход 11: $a <br>";

echo "<h3>Префиксный декремент</h3>";
$a = 10;
echo "Выход 9: " . --$a . "<br>";
echo "Выход 9: $a <br>";

echo "<h3>Постфиксный декремент</h3>";
$a = 10;
echo "Выход 10: " . $a-- . "<br>";
echo "Выход 9: $a <br>";


echo "<h3>Комбинированные операторы</h3>";
$a = 10;
echo 'значение а до операции += 5 (добавление до самого себя заданого числа): ' . $a . '<br>';
$a += 15;
echo 'значение а после операции += 5 (добавление до самого себя заданого числа): ' . $a . '<br>';
$b = "Hello ";
echo 'значение b до операции .= "World!" (соединение строчных значений в одну строку, записаную в b): ' . $b . '<br>';
$b .= "World!"; // устанавливает $b строкой "Hello World!"
echo 'значение b после операции .= "World!" (соединение строчных значений в одну строку, записаную в b): ' . $b . '<br>';


echo "<h3>Строчные операции</h3>";
$a = "My ";
echo 'a = "My " <br>';
$b = $a . "car."; // Конкатенация строк
echo 'Результат операции $b = $a . "car.": ' . $b;


echo "<h3>Операторы еквивалентности</h3>";
echo 'сравнение a=10 и b="10" через ==: <br>';
$a=10;
$b="10";
if($a==$b) // Сравнивает только содержимое, но не тип
    echo "a и b равны";
echo "<br><br>";

echo 'сравнение a=0 и b="" через ==: <br>';
$a=0; // ноль
$b=""; // пустая строка
if($a==$b)
    echo "a и b равны"; // Выводит "a и b равны", ибо b приводится к 0
echo "<br><br>";

echo 'сравнение a=1 и b="1" через ===: <br>';
$a=1; // ноль
$b="1"; // пустая строка
if($a===$b) //Сравнивает не только значение но и тип, сдесдственно мы получим "Error"
    echo "a и b равны <br>";
else
    echo "Error <br>";



echo "<h3>Циклы for & foreach</h3>";
$i = 'X';
for($n=0; $n<10; $n++)
   echo $i++ . " ";
echo '<br>';

$my_arr = array(1, 2, 3, 4, 5);
foreach ($my_arr as $value)
    echo $value, " ";


echo "<h3>Приведение к целочисленному типу</h3>";
echo (int)5.7, "<br>";          // 5
echo (int)TRUE, "<br>";         // 0
echo (int)FALSE, "<br>";        // 1
echo (int)NULL;                 // 0

echo "<h3>Преобразование строки в число</h3>";
echo (int)"irvhj10", "<br>";    // 0
echo (int)"10vkdmv", "<br>";    // 10
echo (int)"10.125", "<br>";     // 10
echo (int)"-10.1", "<br>";      // -10
echo (int)"";       // 0


echo "<h3>Приведение к числу с плавающей точкой</h3>";
echo (float)"irvhj10", "<br>";   // 0
echo (float)"10vkdmv", "<br>";   // 10
echo (float)"10.125", "<br>";    // 10.125
echo (float)"-10", "<br>";       // -10
echo (float)".125", "<br>";      // 0.125
echo (float)"5.12e6", "<br>";    // 5120000
echo (float)"5.e6";              // 5000000

echo "<h3>Приведение к  строке</h3>";
echo (string)TRUE;
echo (string)FALSE . "<br>: пустая строка";


echo "<h3>Implode</h3>";
$array = array('World', 'Wide', 'Web');
$comma_separated = implode(".", $array);
echo 'Запись в строку елементов с массива:' . $comma_separated; // surname,name,patronymic


echo "<h3>Explode</h3>";
$fruit  = "Груша яблоко банан клубника дыня";
echo 'Строка с названиями фруктов: ' . $fruit . '<br>';
$array_fruit = explode(" ", $fruit);
echo $array_fruit[0] . '<br>';
echo $array_fruit[1] . '<br>';
echo $array_fruit[4];



echo "<h3>Массивы</h3>";

$languages[] = "Spanish";
$languages[] = "France";
$languages[] = "English";
$languages[] = "Japanese";
$languages[] = "Indian";
$counter = count($languages);

for($i=0; $i<$counter; $i++)
    echo "$languages[$i] <br>";

echo "<br>";
$languages = array("s"=>"Spanish",
    "f"=>"France",
    "e" => "English",
    "j" => "Japanese",
    "i" => "Indian");
foreach($languages as $key=>$value) // выводим через foreach ключи и значения елементов
    echo "$key => $value <br>";


//Многомерные массивы
echo "<br>";
$languages = array(
    "a-e" => array('English', 'Bengali', ' 	Algerian Arabic') ,
    "f-k" => array('France', 'Igbo',  'Greek'),
    "l-q" => array('Portuguese', 'Maithili', 'Odia'),
    "r-z" => array('Turkish', 'Russian', 'Ukrainian'));
foreach ($languages as $key => $language) {
    echo "<h3>$key</h3>";
    echo "<ol>";
    foreach ($language as $value) {
        echo "<li>$value</li>";
    }
    echo "</ol>";
}



echo "<h3>Демонстрацыя ООП</h3>";
echo "<h4>Гетеры и сетеры</h4>";
class Car {
    // поле класу
    var $model;
    
    // методы:
     function get_car() {
        echo $this->model;
     }
    
     function set_car($model) {
        $this->model = $model;
     }
    
}
    
// Создаем объект класса Car:
$object = new Car;

// Теперь для изменения имени вызываем сетер:
$object->set_car("Porshe 911 GTR");

//Для получения данных вызываем гетер:
$object->get_car();

// Сценарий выводит 'Porshe 911 GTR'
echo "<br>";




echo "<h4>Демонстрация работы конструктора и деструктора</h4>";
class Destructable
{
    function __construct() {
        echo "Конструктор <br>";
    }

    function __destruct() {
        echo 'Объект класса ' . __CLASS__ . ' уничтожается <br>';
    }
}

$obj = new Destructable();
unset($obj);




echo "<h4>Робота конструктора</h4>";
class Porshe_911 {
    var $max_speed;
    var $aerodynamic_coefficient;
    function Porshe_911($speed, $coef) {
        $this->max_speed = $speed;
        $this->aerodynamic_coefficient = $coef;
    }
}
        
// Вызваем конструктор класса Porshe_911
$instance = new Porshe_911(185, 20);
echo $instance->max_speed . ' miles/hour & ' . $instance->aerodynamic_coefficient;
echo "<br>";




echo "<h4>Наследование</h4>";
class A {
    function example() {
        echo "Первоначальная функция(метод класа родителя).<br>";
    }
}
       
class B extends A {
    function example() {
        echo "Переопределенная функция(метод дочернего класса).<br>";
        A::example();
    }
}

A::example();
echo '<br>';
B::example();
echo '<br>';

$obj_b = new B;
$obj_b->example();

?>