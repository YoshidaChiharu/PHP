<?php
    require_once(dirname(__FILE__)."/../functions/city.php");

    $cities[] = new City("シドニー", "Australia/Sydney", "australia.jpg");
    $cities[] = new City("東京", "Asia/Tokyo", "japan.jpg");
    $cities[] = new City("上海", "Asia/Shanghai", "china.jpg");
    $cities[] = new City("モスクワ", "Europe/Moscow", "russia.jpg");
    $cities[] = new City("ロンドン", "Europe/London", "british.jpg");
    $cities[] = new City("ヨハネスブルグ", "Africa/Johannesburg", "south-africa.jpg");
    $cities[] = new City("ニューヨーク", "America/New_York", "america.jpg");

    // テスト表示
    // echo "<pre>";
    // print_r($cities);
    // echo "</pre>";

?>