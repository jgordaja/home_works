<?php

//1) Написать функцию pluck(), которая принимает массив
//ассоциативных массивов первым параметром, а вторым
//найменование ключа. На выходе мы должны получить массив
//значений данного ключа из каждого подмассива.

function pluck($array, $kayname) {

    foreach ($array as $arrarr) {
        if (is_array($arrarr)) {
            foreach ($arrarr as $kay => $item) {
                if ($kay === $kayname) {
                    $kayarray[] = $item;
                }
            }
        }
    }

    return $kayarray;

}

$users = [
    [
        'id' => 1,
        'name' => 'name1'
    ],
    [
        'id' => 2,
        'name' => 'name2'
    ],
    [
        'id' => 3,
        'NOname' => 'name'
    ],
    [
        'id' => 4,
        'name' => 'name3'
    ],
    'name' => 'name',
    [
        'id' => 4,
        'name' => 'name4'
    ],
];

var_dump(pluck($users,'name'));
echo "<br><br>";


//2) Дан массив с элементами 26, 17, 136, 12, 79, 15. С помощью цикла
//foreach найдите сумму квадратов элементов этого массива.

$arr = [26, 17, 136, 12, 79, 15,];
$sumSquares = 0;

foreach ($arr as $value) {
    $sumSquares += pow($value,2);
}

echo "Дан массив [26, 17, 136, 12, 79, 15,]. С помощью цикла foreach найдите сумму квадратов элементов этого массива.<br>";
echo "Ответ = ",$sumSquares,"<br><br>";

//вариант с использованием функции array_sum():

foreach ($arr as $value) {
    $arr2[] = $value**2;
}
$sumSquares = array_sum($arr2);

unset($arr);



//3) Создать массив и наполнить его через цикл следующим рядом чисел 1+4+7+10+...+112

for ($i=1; $i<=112; $i+=3) {
    $arr[] = $i;
}
var_dump($arr);
echo "<br><br>";

unset($arr);

//А можно было не мучиться и сделать просто...
//$arr = range(1, 112, 3);


//4) Напишите функцию get_order($string), которая отсортирует все
//слова в заданном предложении $string в алфавитном порядке.
//Например get_order("ноты аккустика гитара"), функция должна
//вернуть "аккустика гитара ноты"

function getOrder($string) {
    $arr = explode(' ',$string);
    sort($arr);
    $string = implode(' ', $arr);
    return $string;
}

$string = 'ноты аккустика гитара';
echo "Исходная строка: '{$string}'<br>";
$sortString = getOrder($string);
echo "Отсортированная строка: '{$sortString}'<br><br>";

unset($arr);


//5) Напишите функцию, которая определяет есть ли в заданном массиве
//повторяющие элементы, функция должна вернуть true или false

$arr = ["green", "red", "green", "blue", "red"];

function isrepeat ($array) {
    $resarray = array_unique($array);
    if (array_count_values($resarray) < array_count_values($array)) {
        return true;
    } else {
        return false;
    }
}

var_dump(isrepeat ($arr));
echo "<br><br>";

unset($arr);

//6) С помощью цикла for необходимо создать массив чисел от 5 до 1000
//(должен получиться массив на 995 элементов). Полученный массив
//необходимо обработать таким образом, чтоб каждый элемент
//данного массива увеличился в 2 раза. Из второго массива вывести с
//помощью echo 5 рандомных значений.

for ($i=5; $i<=1000; $i++) {
    $array[] = $i;
}

function arrPow2 ($n) {
    return 2*$n;
}

$arr2 = array_map('arrPow2', $array);

$rand_keys = array_rand($arr2, 5);
for ($i=0; $i<=4; $i++) {
    echo $arr2[$rand_keys[$i]].', ';
}

?>