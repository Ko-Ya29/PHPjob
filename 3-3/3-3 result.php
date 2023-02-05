<?php

$number = $_POST['number'];
$key = str_split($number);

?>

<p><?php echo date("Y/m/d", time()); ?>の運勢は</p>
<p>選ばれた数字は<?php echo $number[$key]; ?></p>
<p><?php
    if ($number[$key] = 0) {
        echo "凶";
    } elseif ($number[$key] <= 3) {
        echo "小吉";
    } elseif ($number[$key] <= 6) {
        echo "中吉";
    } elseif ($number[$key] <= 8) {
        echo "吉";
    } else {
        echo "大吉";    
    }
    ?>
</p>
