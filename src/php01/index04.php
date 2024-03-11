<?php
    $a = 10;

    if ($a === 5) {
        echo "\$aは5です";
    } elseif ($a === 7) {
        echo "\$aは7です";
    } else {
        echo "\$aは5、7以外です";
    }
    echo "<br>";

    $people = "Jiro";

    switch ($people) {
        case 'Taro':
            echo "太郎です";
            break;
        case 'Jiro':
            echo "次郎です";
            break;
        case "Saburo":
            echo "三郎です";
            break;
        default:
            echo "太郎、次郎、三郎、何れでもありません";
            break;
    }
    echo "<br>";

    $a = 7;
    $result = ($a === 7) ? "TRUE" : "FALSE" ;
    echo $result;
?>