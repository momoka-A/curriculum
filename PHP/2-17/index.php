<?php
// すごろく
$count = 0;
$move = 0;

while($move < 40){
    $count++;

    $dice = rand(1,6);
    $move += $dice;
    echo $count."回目=".$dice.'<br>';
    if($move >= 40){
        echo "合計".$count."回でゴールしました";
    }
}

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

// 時間
date_default_timezone_set('Asia/Tokyo');
$time = date("H", time());


if(5 < $time && $time < 11 ){
    echo '今'.$time.'時台です。<br>おはようございます';
} else if(11 < $time && $time < 18){
    echo '今'.$time.'時台です。<br>こんにちは';
} else {
    echo '今'.$time.'時台です。<br>こんばんは';
}


