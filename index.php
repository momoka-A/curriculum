<?php
$countries = ['America', 'Japan', 'China', 'Korea'];

var_dump($countries);

// 連想配列
$fruits = ['apple' => 'りんご', 'orange' => 'みかん', 'grape' => 'ぶどう'];

echo $fruits['apple'];
echo $fruits['orange'];
echo $fruits['grape'];

var_dump($fruits);

$fruits = ['りんご', 'みかん', 'ぶどう'];
$fruits[] = 'もも';
var_dump($fruits);

echo '<br>';
echo '<br>';
echo '<br>';





// 課題
$color = ["red" => "赤", "blue" => "青", "green" => "緑"];
var_dump($color);
echo '<br>';
$color["yellow"] = "黄" ;
var_dump($color);
echo '<br>';
echo '<br>';

// ITエンジニアになって困らないための基本用語

echo "プルリクエスト（マージリクエスト）" . "<br>";
echo "開発者のローカルリポジトリでの変更を開発者に通知する機能";
echo '<br>';
echo '<br>';
echo "Git Flow" . "<br>";
echo "masterやdevelopなど複数のブランチを用意し、効率的にチームで開発していく手法";
echo '<br>';
echo '<br>';
echo "CRON" . "<br>";
echo "プログラムを定期的に自動実行させる仕組み";