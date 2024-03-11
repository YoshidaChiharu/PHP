<?php
    // echo $_POST["company-name"] . "<br>";
    // $company = htmlspecialchars($_POST["company-name"], ENT_QUOTES);
    echo $_GET["company-name"] . "<br>";
    $company = htmlspecialchars($_GET["company-name"], ENT_QUOTES);
    echo "会社名は[{$company}]です";
?>

<p>
    <a href="./course.html">戻る</a>
</p>