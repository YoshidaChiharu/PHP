<?php
    $name = htmlspecialchars($_POST["user-name"], ENT_QUOTES);
    $item = htmlspecialchars($_POST["item"], ENT_QUOTES);
    $value = htmlspecialchars($_POST["value"], ENT_QUOTES);
?>

<p>お名前： <?php echo $name ?></p>
<p>希望商品： <?php echo $item ?></p>
<p>注文数： <?php echo $value ?></p>

<p>
    <a href="./index.html">戻る</a>
</p>