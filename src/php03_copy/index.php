<?php
    require_once("./config/cities.php");
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Clock</title>
    <link rel="stylesheet" href="./css/sanitize.css">
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <header>
        <div class="header-inner">
            <a class="header-logo" href="./index.php">World Clock</a>
        </div>
    </header>
    <main>
        <div class="container">
            <h1 class="title">世界の時間を比較</h1>
            <p class="desc">比較したい都市を選択して下さい</p>
            <form class="search" action="./result.php" method="get" target="blank">
                <?php foreach($cities as $city): ?>
                <label class="checkbox-item">
                    <input type="checkbox" name="check_cities[]" value="<?php echo $city->getName() ?>">  <?php echo $city->getName() ?>
                </label>
                <?php endforeach ?>
                <button class="search__submit-btn" type="submit">比較する</button>
            </form>
        </div>
    </main>
</body>
</html>