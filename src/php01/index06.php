<?php
    function scoring($score1, $score2, $score3) {
        $sum_score = $score1 + $score2 + $score3;
        if ($sum_score >= 210) {
            echo "合計点は{$sum_score}なので合格です";
        } else {
            echo "合計点は{$sum_score}なので不合格です";
        }
    }

    scoring(70,80,60);
    echo "<br>";
    scoring(50,40,60);
    echo "<br>";

    function area_triangle($bottom, $height) {
        return $area = ($bottom * $height) / 2;
    }

    function area_square($width, $height) {
        return $width * $height;
    }

    function area_trapezoid($upper_bottom, $bottom_bottom, $height) {
        return (($upper_bottom + $bottom_bottom) * $height) / 2;
    }

    $bottom = 10;
    $width = 8;
    $height = 10;
    $upper_bottom = 8;
    $bottom_bottom = 12;
    echo "底辺＝{$bottom}、高さ＝{$height}<br>";
    echo "この三角形の面積は？<br>";
    echo area_triangle($bottom, $height);
    echo "<br>";
    echo "幅＝{$width}、高さ＝{$height}<br>";
    echo "この四角形の面積は？<br>";
    echo area_square($width, $height);
    echo "<br>";
    echo "上底＝{$upper_bottom}、下底＝{$bottom_bottom}、高さ＝{$height}<br>";
    echo "この台形の面積は？<br>";
    echo area_trapezoid($upper_bottom, $bottom_bottom, $height);
?>