<?php
    require_once("./functions/search_city_time.php");
    $tokyo = searchCityTime("東京");
    $city = htmlspecialchars($_GET["city"], ENT_QUOTES);
    $comparison = searchCityTime($city);
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
                <div class="result-card">
                    <div class="result-card__img-wrapper">
                        <img class="result-card__img" src="./img/japan.jpg" alt="国旗">
                    </div>
                    <div class="result-card__body">
                        <p class="result-card__city"><?php echo $tokyo["name"]; ?></p>
                        <p class="result-card__time"><?php echo $tokyo["time"]; ?></p>
                    </div>
                </div>
                <div class="result-card">
                    <div class="result-card__img-wrapper">
                        <img class="result-card__img" src="./img/<?php echo $comparison["img"] ?>" alt="国旗">
                    </div>
                    <div class="result-card__body">
                        <p class="result-card__city"><?php echo $comparison["name"]; ?></p>
                        <p class="result-card__time"><?php echo $comparison["time"]; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>