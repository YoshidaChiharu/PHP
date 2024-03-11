<?php
    class City {
        private $name;
        private $time_zone;
        private $img;
        private $time;

        public function __construct($name, $time_zone, $img) {
            $this->name = $name;
            $this->time_zone = $time_zone;
            $this->img = $img;
        }

        public function getName() {
            return $this->name;
        }

        public function getImg() {
            return $this->img;
        }

        public function getTime() {
            return $this->time;
        }

        // 現在時刻を取得してtimeへセット
        public function setTime() {
            $date_time = new DateTime ("", new DateTimeZone($this->time_zone) );
            $this->time = $date_time->format("H:i");
        }

        // cities配列の中からその都市のインスタンスを探す
        public static function findByName($cities, $name) {
            foreach ($cities as $city) {
                if ($city->name === $name) {
                    return $city;
                }
            }
        }
    }

    // 動作テスト
    // $test = new City("シドニー", "Australia/Sydney", "australia.jpg");
    // echo $test->name . "<br>";
    // echo $test->time_zone . "<br>";
    // echo $test->img . "<br>";
    // $test->setTime();
    // echo $test->time . "<br>";

?>