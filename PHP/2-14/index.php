<?php
    $members = ["ando", "koyama", "okamoto", "hashimoto"];
    echo count($members);
    echo '<br>';

    sort($members);
    var_dump($members);
    echo '<br>';

    $numbers = [26, 1, 19, 24, 86];
    sort($numbers);
    var_dump($numbers);
    echo '<br>';

    //配列の中にある要素が存在しているか
    var_dump(in_array("tanaka",$members));
    echo '<br>';

    if (in_array("tanaka", $members)) {
    echo "田中さんがいるよ！";
    } else {
    echo "田中さんはいないよ！";
    }
    echo '<br>';

    $atstr = implode("*", $members);
    var_dump($atstr);

    echo '<br>';

    $re_members = explode("*", $atstr);
    var_dump($re_members);


    echo '<br>';
    echo '<br>';
    echo '<br>';

    // IT用語
    echo "要件定義（要求仕様書）" . "<br>";
    echo "本格的な開発工程の前段階で、開発者の視点から要求をまとめ、具体的な進め方を決めること（要求仕様書はエンドユーザーの要望に沿って、対応や費用、開発期間、データ連携有無や注意点があるか等を記載するドキュメント）";
    echo '<br>';
    echo '<br>';
    echo "単体テスト・結合テスト" . "<br>";
    echo "アプリケーション全体の中から１つの部分だけを完全に取り出して実行するテスト<br>・アプリケーションの各部分が全体としてどのように連携するかをテスト";
    echo '<br>';
    echo '<br>';
    echo "テスト仕様書" . "<br>";
    echo "システムやソフトウェアがクライアントのヒアリングをもとに作り上げた要件定義書の通りに機能するかbどうか、テストするポイントをまとめたドキュメント";
?>