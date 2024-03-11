<?php
    require_once("./config/cities.php");
    $check_cities = $_GET["check_cities"];

    foreach($check_cities as $check_name) {
        $city = City::findByName($cities, $check_name);
        $city->setTime();
        $check_result[] = $city;
    }

    // テスト表示
    // echo "<pre>";
    // print_r($check_result);
    // echo "</pre>";

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Clock</title>
    <link rel="stylesheet" href="./css/sanitize.css">
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/result.css">
</head>
<body>
    <header>
        <div class="header-inner">
            <a class="header-logo" href="./index.php">World Clock</a>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="result-cards">
                <?php foreach ($check_result as $city) : ?>
                <div class="result-card">
                    <div class="result-card__img-wrapper">
                        <img class="result-card__img" src="./img/<?php echo $city->getImg() ?>" alt="国旗">
                    </div>
                    <div class="result-card__body">
                        <p class="result-card__city"><?php echo $city->getName() ?></p>
                        <p class="result-card__time"><?php echo $city->getTime() ?></p>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>
    </main>
</body>
</html>