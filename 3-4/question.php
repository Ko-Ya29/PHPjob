<link rel="stylesheet" href="css/3-4.css">
<?php
    //POST送信で送られてきた名前を受け取って変数を作成
    $my_name = $_POST['my_name'];
    //①画像を参考に問題文の選択肢の配列を作成してください。
    $answer1 = ['80','22','20','21'];
    $answer2 = ['PHP','Python','JAVA','HTML'];
    $answer3 = ['join','select','insert','update'];
    //② ①で作成した、配列から正解の選択肢の変数を作成してください
    $a1 = $answer1[0];
    $a2 = $answer2[3];
    $a3 = $answer3[1];
?>
<wrapper>
    <p>お疲れ様です<?php echo $my_name; ?>さん</p>
        <!--フォームの作成 通信はPOST通信で-->
    <form action="answer.php" method="post">
        <h2>①ネットワークのポート番号は何番？</h2>
        <!--③ 問題のradioボタンを「foreach」を使って作成する-->
        <?php foreach ($answer1 as $value1) { ?>
            <input type="radio" name="user_answer1">
            <?php echo $value1;
        } ?>
        <h2>②Webページを作成するための言語は？</h2>
        <!--③ 問題のradioボタンを「foreach」を使って作成する-->
        <?php foreach ($answer2 as $value2) { ?>
            <input type="radio" name="user_answer2">
            <?php echo $value2;
        } ?>
        <h2>③MySQLで情報を取得するためのコマンドは？</h2>
        <!--③ 問題のradioボタンを「foreach」を使って作成する-->
        <?php foreach ($answer3 as $value3) { ?>
            <input type="radio" name="user_answer3">
            <?php echo $value3;
        } ?>
        <br>
        <input type="submit" value="回答する" />
        <!--問題の正解の変数と名前の変数を[answer.php]に送る-->
        <input type="hidden" name="user_name" value="$my_name" />
        <input type="hidden" name="correct_answer1" value="$a1" />
        <input type="hidden" name="correct_answer2" value="$a2" />
        <input type="hidden" name="correct_answer3" value="$a3" />
    </form>
</wrapper>