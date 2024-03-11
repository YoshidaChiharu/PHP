<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Clock</title>
    <link rel="stylesheet" href="./css/sanitize.css">
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/index.css">
</head>
<body>
    <header>
        <div class="header-inner">
            <a class="header-logo" href="./index.php">World Clock</a>
        </div>
    </header>
    <main>
        <div class="container">
            <h1 class="title">日本と世界の時間を比較</h1>
            <form class="search" action="./result.php" method="get" target="blank">
                <select class="search__select-box" name="city" id="select">
                    <option value="シドニー">シドニー</option>
                    <option value="上海">上海</option>
                    <option value="モスクワ">モスクワ</option>
                    <option value="ロンドン">ロンドン</option>
                    <option value="ヨハネスブルグ">ヨハネスブルグ</option>
                    <option value="ニューヨーク">ニューヨーク</option>
                </select>
                <button class="search__submit-btn" type="submit">検索</button>
            </form>
        </div>
    </main>
</body>
</html>