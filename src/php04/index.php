<?php
    require_once("./config/status_codes.php");
    require_once("./config/question.php");

    $question = new Question($status_codes, 4);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Code Quiz</title>
    <link rel="stylesheet" href="./css/sanitize.css">
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/index.css">
</head>
<body>
    <header>
        <div class="header-inner">
            <a class="header-logo" href="./index.php">Status Code Quiz</a>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="question">
                <p class="question__title">
                    Q. 以下の内容に当てはまるステータスコードを選んでください
                </p>
                <p class="question__desc">
                    <?php echo $question->getQuestionText() ?>
                </p>
            </div>
            <div class="answer">
                <form class="answer__form" action="./result.php" method="post">
                    <?php foreach ($question->getChoices() as $value) :?>
                    <input type="radio" name="check_item" class="check-item" id="<?php echo $value ?>"  value="<?php echo $value ?>">
                    <label class="check-label" for="<?php echo $value ?>">
                        <?php echo $value ?>
                    </label>
                    <?php endforeach ?>
                    <input type="hidden" name="answer_code" value="<?php echo $question->getAnswer() ?>">
                    <input type="hidden" name="answer_text" value="<?php echo $question->getQuestionText() ?>">
                    <button class="answer__submit-button" type="submit">回答</button>
                </form>
            </div>
        </div>
    </main>
    <footer></footer>
</body>
</html>