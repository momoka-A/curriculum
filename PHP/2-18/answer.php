<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$name = $_POST['name'];
$port = $_POST['port'];
$port_correct = $_POST['ports_hidden'];
$web = $_POST['web'];
$web_correct = $_POST['webs_hidden'];
$mysql = $_POST['mysql'];
$mysql_correct = $_POST['mysqls_hidden'];


//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
function checkTheAnswer($answer,$correct){
    if($answer == $correct){
        print "正解！";
    } else {
        print "残念・・・";
    }
}
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <p><?php echo $name; ?>さんの結果は・・？</p>
    <p>①の答え</p>
    <!--作成した関数を呼び出して結果を表示-->
        <?php echo checkTheAnswer($port,$port_correct); ?>
    <p>②の答え</p>
    <!--作成した関数を呼び出して結果を表示-->
        <?php echo checkTheAnswer($web,$web_correct); ?>
    <p>③の答え</p>
    <!--作成した関数を呼び出して結果を表示-->
        <?php echo checkTheAnswer($mysql,$mysql_correct); ?>
</body>