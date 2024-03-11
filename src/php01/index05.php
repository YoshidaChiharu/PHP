<?php
    for ($a = 1; $a <= 5; $a++) {
        echo $a * 2 . "<br>";
    }
    echo "<br>";

    $count = 0;
    while ($count < 20) {
        $count++;
        echo $count . "<br>";
    }
    echo "<br>";

    $count = 0;
    while ($count <= 100) {
        $count++;
        if ($count === 20) {
            break;
        }
        if ($count % 3 === 0) {
            continue;
        }
        echo $count . "<br>";
    }
    echo "<br>";

    $num = 0;
    do {
        echo $num . "<br>";
        $num++;
    } while ($num <= 2);
    echo "<br>";

    for ($num = 1; $num <= 50; $num++) {
        if ($num % 3 === 0 && $num % 5 === 0) {
            echo "FizzBuzz" . "<br>";
        } elseif ($num % 3 === 0) {
            echo "Fizz" . "<br>";
        } elseif ($num % 5 === 0) {
            echo "Buzz" . "<br>";
        } else {
            echo $num . "<br>";
        }
    }
    echo "<br>";

    for ($a = 0; $a < 5; $a++) {
        for ($b = 0; $b < 5; $b++) {
            echo "●";
        }
        echo "<br>";
    }
?>