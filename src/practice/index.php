<?php
    // テキストファイルを読み込み
    $fp1 = fopen("./data/test.txt", "r");
    while ($line[] = fgets($fp1)) {
    }
    // テスト表示
    echo "<pre>";
    print_r($line);
    echo "</pre>";

    fclose($fp1);

    // csvファイルを読み込み
    $fp2 = fopen("./data/test.csv", "r");
    // 一行目だけ見出しとして読む
    if( !($heading = fgetcsv($fp2)) ) {
        echo "csvファイル読み込みエラー";
    }
    // ２行目以降を読み込みつつ２次元配列として保存
    while ($line = fgetcsv($fp2)) {
        for ($j=0; $j < count($heading); $j++) {
            $temp["$heading[$j]"] = $line[$j];
        }
        $data[] = $temp;
    }
    // テスト表示
    echo "<pre>";
    print_r($data);
    echo "</pre>";

    fclose($fp2);

    // csvファイルをfile_get_contentsで一括読み込みしたらどうなるかテスト
    $contents = file_get_contents("./data/test.csv");
    echo "<pre>";
    echo $contents;
    echo "</pre>";
?>

<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ファイル読み込みテスト</title>
</head>
<body>
    <header></header>
    <main></main>
    <footer></footer>
</body>
</html>