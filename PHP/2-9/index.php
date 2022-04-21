<?php
for($i=1; $i<=100; $i++){
    if($i % 3 == 0 && $i % 5 == 0){
        echo 'FizzBuzz!!'.'<br>';
    } else if($i % 3 == 0){
        echo 'Fizz!'.'<br>';
    } else if($i % 5 == 0){
        echo 'Buzz!'.'<br>';
    } else {
        echo $i.'<br>';
    }
}

echo '<br>';
echo '<br>';
echo '<br>';

// IT用語
echo "パフォーマンス" . "<br>";
echo "処理性能、実行速度";
echo '<br>';
echo '<br>';
echo "スロークエリ" . "<br>";
echo "データベース管理システムに対する問合せ(クエリ)のうち、一定の基準に照らして遅い、時間がかかっているもの";
echo '<br>';
echo '<br>';
echo "クエリログ" . "<br>";
echo "クライアントからのDBへの接続・接続解除の情報、およびクライアントから実行された全てのSQLクエリを出力してくれるログ";