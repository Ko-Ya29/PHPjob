<?php

$number = $_POST['number'];
$arr = str_split($number);
$key = array_rand($arr, 1);

?>

<p><?php echo date("Y/m/d", time()); ?>の運勢は</p>
<p>選ばれた数字は<?php echo $arr[$key]; ?></p>
<p><?php
    if ($arr[$key] == 0) {
        echo "凶";
    } elseif ($arr[$key] <= 3) {
        echo "小吉";
    } elseif ($arr[$key] <= 6) {
        echo "中吉";
    } elseif ($arr[$key] <= 8) {
        echo "吉";
    } else {
        echo "大吉";    
    }
    ?>
</p>
