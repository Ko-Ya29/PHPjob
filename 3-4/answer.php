<link rel="stylesheet" href="css/3-4.css">
<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$user_name = $_POST['user_name'];

$user_answer1 = $_POST['user_answer1'];
$user_answer2 = $_POST['user_answer2'];
$user_answer3 = $_POST['user_answer3'];

$correct_answer1 = $_POST['correct_answer1'];
$correct_answer2 = $_POST['correct_answer2'];
$correct_answer3 = $_POST['correct_answer3'];

//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
function checkAnswer($user_answer, $correct_answer) {
    if ($user_answer == $correct_answer) {
        echo "正解！";
    }  else {
        echo "残念・・・";
    }
}
?>
<div class="wrapper">
    <p class="top"><?php echo $user_name; ?>さんの結果は・・・？</p>
    <p>①の答え</p>
    <!--作成した関数を呼び出して結果を表示-->
    <p><?php echo checkAnswer($user_answer1,$correct_answer1); ?></p>
    <p>②の答え</p>
    <!--作成した関数を呼び出して結果を表示-->
    <p><?php echo checkAnswer($user_answer2,$correct_answer2); ?></p>
    <p>③の答え</p>
    <!--作成した関数を呼び出して結果を表示-->
    <p><?php echo checkAnswer($user_answer3,$correct_answer3); ?></p>
</div>

