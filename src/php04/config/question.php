<?php
class Question {
    private $question_text;     /* 問題文 */
    private $choices;           /* 選択肢(配列) */
    private $answer;            /* 正解のステータスコード */

    public function __construct($status_codes, $volume) {
        // ランダムに選択肢をチョイス
        $rundom_num = array_rand($status_codes, $volume);
        foreach($rundom_num as $num) {
            $this->choices[] = $status_codes[$num]["code"];
        }

        // ランダムに一つ選択して正解と問題文にセット
        $num = $rundom_num[mt_rand(0, $volume-1)];
        $this->answer = $status_codes[$num]["code"];
        $this->question_text = $status_codes[$num]["description"];
    }

    public function getQuestionText() {
        return $this->question_text;
    }

    public function getChoices() {
        return $this->choices;
    }

    public function getAnswer() {
        return $this->answer;
    }

}

?>