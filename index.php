<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learning PHP</title>
</head>
<body>
<?php
//Variable scope
/*$x = 5; // Global variable
echo $x;
echo '<br>';
function foo()
{
    // we can make x global by using global keyword
    $x = 12; // Local variable to this function
    echo $x;
}

foo();*/

// Anonymous function
/*$your_age = function ($age) {
    return $age;
}; // Must have ; in the end of the brackets.
echo $your_age(26); // call variable name with function ();*/
// Callable
/*$arr = [1, 2, 3, 4];
$arr2 = array_map(function ($element) {
    return $element * 2;
}, $arr);

print_r($arr);
print_r($arr2);*/

//Arrow function
/*$array = [1, 3, 4, 5];
$array2 = array_map(fn($number) => $number * 2, $array);
print_r($array2)*/

require 'helper.php';

//$items = [1, 2, 4, 34, 34, 51];
//$items2 = [4, 5, 6, 6, 7, 8];
//$chanked_array = array_chunk($items, 3, true);
////pp($chanked_array[1]);
////pp(array_combine($items, $items2));
//
//$even = array_filter($items, fn($number) => $number % 2 === 0);
//pp($even);

//$dir = scandir(__DIR__);
//pp($dir);
//var_dump($dir);
//mkdir('assets/css', 0777, true)
/*if (file_exists('content.php')) {
    echo filesize('content.php');
    file_put_contents('content.php', 'My name is Masud');
    echo filesize('content.php');
} else {
    echo 'File Not Found';
}
$content = file_get_contents('content.php');
echo $content;*/
?>
</body>
</html>