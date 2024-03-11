<?php
    $check_item = htmlspecialchars($_POST["check_item"], ENT_QUOTES);
    $answer_code = htmlspecialchars($_POST["answer_code"], ENT_QUOTES);
    $answer_text = htmlspecialchars($_POST["answer_text"], ENT_QUOTES);

    if(!$check_item) {
        header("Location: ./index.php");
    }
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Code Quiz</title>
    <link rel="stylesheet" href="./css/sanitize.css">
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/result.css">
</head>
<body>
    <header>
        <div class="header-inner">
            <a class="header-logo" href="./index.php">Status Code Quiz</a>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="result">
                <?php if($check_item === $answer_code): ?>
                    <h2 class="result__txt--correct">正解</h2>
                <?php else: ?>
                    <h2 class="result__txt--incorrect">不正解</h2>
                <?php endif ?>
            </div>
            <p class="heading">正解は…</p>
            <table class="status-code-table">
                <tr>
                    <th>ステータスコード</th>
                    <td><?php echo $answer_code ?></td>
                </tr>
                <tr>
                    <th>説明</th>
                    <td><?php echo $answer_text ?></td>
                </tr>
            </table>
        </div>
    </main>
    <footer></footer>
</body>
</html>