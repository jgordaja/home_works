<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Работа cо строками. Домашнее задание</title>
</head>
<body>

    <?php

    /*
    1) Написать функцию, которая будет формировать аббревиатуру
    заданного выражения. Например Донбасская государственная
    машиностроительная академия – ДГМА
    */

    function strToAbbreviation ($str) {

        $arr = explode(' ', $str);

        foreach ($arr as $k => $value) {
            $arr[$k] = trim(mb_strtoupper(mb_substr($value,0,1)));
        }

        $arr = join('', $arr);
        return $arr;
    }

    $str = "  Донбасская государственная машиностроительная академия  ";
    echo $str, "<br>";
    $abbreviation = strToAbbreviation($str);
    echo $abbreviation,"<br><br>";


    /*
    2) Напишите функцию truncate_string($str, $maxsymbol), которая
    проверяет длину строки $str, и если она превосходит $maxsymbol –
    заменяет конец $str на "...", так чтобы ее длина стала равна $maxsymbol
    */

    function truncateString($input, $maxsymbol) {

        if (mb_strlen($input) > $maxsymbol) {
            $output = mb_substr($input, 0, $maxsymbol - 1).'…';
            return $output;
        } else {
            return $input;
        }

    }

    $myStr = "Эта строка будет урезана до указанной длинны, а ее конец будет заменен на '…' <br>";
    echo $myStr;
    $newStr = truncateString($myStr, 35);
    echo $newStr,"<br><br>";


    /*
    3) Необходимо написать функцию, которая считает в заданной строке
    количество заданного символа. Например,
    getCountSymbol('телефон', 'е');//результат выполнения – 2
    */

    function getCountSymbol ($str, $symbol) {
        return mb_substr_count($str, $symbol);
    }

    $symbol = 'с';
    echo $myStr = "Сейчас мы будем искать, сколько символов '{$symbol}' в данной строке <br>";
    $count = getCountSymbol ($myStr, $symbol);
    echo "Количество символов '{$symbol}' = ",$count,"<br><br>";


    /*
    4) Необходимо написать функцию, которая будет обрабатывать строку
    из формы, а именно функция должна выполнять следующее:
    -удалить концевые пробелы;
    -удалить все html теги
    -спец символы преобразовать в html сущности
    Функция должна вернуть обработанную строку.
    */

    function formString ($input) {
        return $output = htmlentities(trim(strip_tags($input)), ENT_QUOTES | ENT_HTML401, 'UTF-8');
    }

    $text = "   Здесь <b>должны</b> быть &#39;кавычки&#39;  а здесь 'такие' и я уже ничего не понимаю...  ";
    echo $text,"<br>";
    echo formString($text),"<br>";

    $text = "              <p>Параграф.</p><!-- Комментарий --><a href='#fragment'>Ещё текст</a>  ";
    echo $text,"<br><br>";
    echo formString($text),"<br><br>";

    //почему-то не срабатывает с кавычками, даже с взятого примера
/*    $new = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
    echo $new,"<br><br>";  // &lt;a href=&#039;test&#039;&gt;Test&lt;/a&gt;*/
    //выводит <a href='test'>Test</a>

    /*
    5) Необходимо написать функцию, которая сокращает полное ФИО в
    краткое, например getShortFio ('Иванов Иван Ивановчи')//результат Иванов И.И.
    Для выполнения данной задачи можно задействовать функцию explode
    */

    function getShortFio ($input) {

        $arr = explode(' ', $input);
        $output = $arr[0].' ';

        foreach ($arr as $key => $val) {
            if ($key !== 0) {
                $output .= mb_strtoupper(mb_substr($val, 0,1)).'.';
            }
        }

        return $output;
    }

    echo $text = 'Иванов Иван иванович',"<br>";
    echo getShortFio ($text),"<br><br>";

    /*
    6) Необходимо в заданном имени файла выделить расширение файла (без точки)
    */

    $filename = 'file.1.txt';
    echo $filename,"<br>";
    $ext = ltrim(strrchr($filename,'.'),'.');
    echo "Расширение файла: ", $ext;

    ?>

</body>
</html>