<?php
    $person1 = array(
        "name" => "Taro",
        "age" => 25,
        "gender" => "men"
    );

    $person2 = array(
        "name" => "Jiro",
        "age" => 20,
        "gender" => "men"
    );

    $person3 = array(
        "name" => "Saburo",
        "age" => 16,
        "gender" => "women"
    );

    $people = array($person1, $person2, $person3);

    foreach ($people as $person) {
        // foreach ($person as $key => $value) {
        //     echo $value;
        // }
        echo "{$person["name"]}（{$person["age"]}歳{$person["gender"]}）";
        echo "<br>";
    }
    print_r($people);
    echo "<br>";
    var_dump($people);
    echo "<br>";

    $maker = ["富士通", "NEC", "Sony", "Sharp"];
    $type = ["Note", "Desktop"];
    $pc = [$maker, $type];

    foreach ($pc as $variable) {
        foreach ($variable as $value) {
            echo $value . "/";
        }
        echo "<br>";
    }

?>