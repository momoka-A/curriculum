<?php
// 配列
$fruits = ['りんご', 'みかん', 'もも'];

foreach($fruits as $value) {
    echo $value;
}

echo '<br>';

// 連想配列
$fruits = ['apple' => 'りんご', 'orange' => 'みかん', 'peach' => 'もも'];

foreach($fruits as $key => $value){
    echo $key;
    echo $value;
}

echo '<br>';
echo '<br>';
echo '<br>';

// 課題
$fruits = ['apple' => 'りんご', 'orange' => 'みかん', 'peach' => 'もも'];

foreach($fruits as $key => $value){
    echo $key. 'といったら' . $value. '<br>';
}


echo '<br>';
echo '<br>';
echo '<br>';

// IT用語
echo "トランザクション" . "<br>";
echo "ここからここまでワンセットな処理単位";
echo '<br>';
echo '<br>';
echo "排他ロック" . "<br>";
echo "データやファイルに対して複数のアクセスが見込まれる場合に同時アクセスにより不整合が発生することを防ぐため、あるトランザクションがデータやファイルにアクセスしている時は他トランザクションからはアクセスできないようにして直列に処理されるように制御すること";
echo '<br>';
echo '<br>';
echo "チューニング" . "<br>";
echo "いい感じになるように調整する作業";
