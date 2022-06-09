<?php
//POST送信で送られてきた名前を受け取って変数を作成
$name = $_POST['name'];

//①画像を参考に問題文の選択肢の配列を作成してください。
$ports = ['80','22','20','21'];
$webs = ['PHP','Python','JAVA','HTML'];
$mysqls = ['join','select','insert','update'];
 
//② ①で作成した、配列から正解の選択肢の変数を作成してください
$ports_hidden = '80';
$webs_hidden = 'HTML';
$mysqls_hidden = 'select';

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<form action='answer.php' method='post'>
    <p>お疲れ様です<?php echo $name; ?>さん</p>
    <!--フォームの作成 通信はPOST通信で-->
    <h2>①ネットワークのポート番号は何番？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php foreach($ports as $port){ ?>
        <input type='radio' name='port' value ='<?php echo $port; ?>'><?php echo $port; ?>
        <?php } ?> 

    <h2>②Webページを作成するための言語は？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php foreach($webs as $web){ ?>
        <input type='radio' name='web' value ='<?php echo $web; ?>'><?php echo $web; ?>
        <?php } ?> 
    <h2>③MySQLで情報を取得するためのコマンドは？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php foreach($mysqls as $mysql){ ?>
        <input type='radio' name='mysql' value ='<?php echo $mysql; ?>'><?php echo $mysql; ?>
        <?php } ?> 
    <!--問題の正解の変数と名前の変数を[answer.php]に送る-->
        <input type='hidden' name='name' value='<?php echo $name; ?>' />
        <input type='hidden' name='ports_hidden' value='<?php echo $ports_hidden; ?>' />
        <input type='hidden' name='webs_hidden' value='<?php echo $webs_hidden; ?>' />
        <input type='hidden' name='mysqls_hidden' value='<?php echo $mysqls_hidden; ?>' />
    <div><input type='submit' value='回答する' /></div>
    </form>
</body>