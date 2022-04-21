<?php
// 1)
$base1 = 10;
$height1 = 5;
$area1 = $base1 * $height1 / 2;

// 2)
$base2 = 15;
$height2 = 8;
$area2 = $base2 * $height2 / 2;

// 3)
$base3 = 8;
$height3 = 6;
$area3 = $base3 * $height3 / 2;

// 上記を関数を使用して書く
function getTriangleArea($base,$height){
    $area = $base * $height / 2;
    print "三角形の面積は" .$area. "だよ。"."<br>";
}

// 1)
getTriangleArea(10,5);
// 2)
getTriangleArea(15,8);
// 3)
getTriangleArea(8,6);

echo '<br>';
echo '<br>';
echo '<br>';

// 課題
function getRectangularArea($vertical,$beside,$height){
    $area = $vertical * $beside * $height;
    print "直方体の面積は" .$area. "だよ。"."<br>";
}

getRectangularArea(5,10,8);

echo '<br>';
echo '<br>';
echo '<br>';

// IT用語
echo "ハッシュ化" . "<br>";
echo "ある特定の文字列や数字の羅列をハッシュ関数に基づいた計算手順によってハッシュ値に置換させること";
echo '<br>';
echo '<br>';
echo "総合テスト" . "<br>";
echo "ソフトウェアシステム開発の終盤で行われるテスト。結合テストを行った後に行う。システムテストとも呼ぶ";
echo '<br>';
echo '<br>';
echo "デバッグ" . "<br>";
echo "プログラムの誤り（バグ）を見つけ、直すこと";