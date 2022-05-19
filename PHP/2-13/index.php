<?php
    $x = 8.32;

    // 切り上げ
    echo ceil($x)."<br>";
    // 切り捨て
    echo floor($x)."<br>";
    // 四捨五入
    echo round($x)."<br>";

    // 円周率
    echo pi();
    echo '<br>';
    function cicleArea($r){
        $cicle_area = $r * $r * pi();
        echo $cicle_area;
    }
    cicleArea(4);
    echo '<br>';

    // 乱数
    echo mt_rand(101,200);
    echo '<br>';

    // 文字列の長さ
    $str = "abcdefghijk";
    echo strlen($str)."<br>";

    // 検索
    $str = "programming";
    echo strpos($str, "g")."<br>";

    // 文字列の切り取り
    $str = "programming";
    echo substr($str, -5, 3)."<br>";

    // 置換
    $str = "programming";
    echo str_replace("gram", "GRAM", $str)."<br>";

    // printf
    $fruits = "いちご";
    $number = 5;
    printf("%sが机の上に%d個ある", $fruits, $number);

    echo "<br>";

    // sprintf
    $hour = 7;
    $minute = 30;
    $time = sprintf("只今%02d時%02d分です", $hour, $minute);
    echo $time;

    echo "<br>";
    echo "<br>";
    echo "<br>";

    // IT用語
    echo "PostgreSQL・Oracle SQL" . "<br>";
    echo "関係データベース管理システム";
    echo '<br>';
    echo '<br>';
    echo "TortoiseGit・TortoiseSVN" . "<br>";
    echo "・Gitをより扱いやすくするために開発されたWindows用ソフトウェア（コマンドを打ち込む必要なし）<br>・Subversionのクライアントフロントエンド";
    echo '<br>';
    echo '<br>';
    echo "外部設計・内部設計" . "<br>";
    echo "・システムの仕様を決定する段階、機能要件や非機能要件、制約条件、外部とのやりとりなどを具体的に仕様にする<br>・外部設計の結果を実際にプログラミングができるようにシステム内部に特化した詳細設計";

?>