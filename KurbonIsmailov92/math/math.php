<!DOCTYPE html>
<html>
<head>
    <title>Заголовок страницы</title>
</head>
<body>
<h1>Решала</h1>

<p>Квадратное уравнение</p>
<form method="GET" action="math.php">
    <input type="number" name="a" placeholder="Введите A">
    <input type="number" name="b" placeholder="Введите B">
    <input type="number" name="c" placeholder="Введите C">
    <button type="submit">Отправить</button>
</form>

<?php error_reporting(0);
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $a = $_GET['a'];
    $b = $_GET['b'];
    $c = $_GET['c'];
    function Discr($a, $b, $c)
    {

        $d = pow($b, 2) - 4 * $a * $c;
        echo 'Дискриминант = ' . $d . ' <br>';
        if ($d < 0) {
            echo 'Нет корней';
        } else if ($d == 0) {
            $x = (-$b) / (2 * $a);
            echo 'Корень = ' . $x . '<br>';
        } else {
            $x1 = ((-$b) + sqrt($d)) / (2 * $a);
            $x2 = ((-$b) - sqrt($d)) / (2 * $a);
            echo 'Корень 1 = ' . $x1 . '<br>' .
                'Корень 2 = ' . $x2 . '<br>';
        }

    }


    Discr($a, $b, $c);
}
?>

</body>
</html>

