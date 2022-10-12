<?php
    require_once('db_connect.php');
    require_once('function.php');

    check_user_name();

if(!empty($_POST['register'])) {
    if(empty($_POST['title'])){
        echo 'タイトルが未入力です。';
    } 
    if(empty($_POST['date'])){
        echo '発売日が未入力です。';
    }
    if($_POST['stock'] == 0) {
        echo '在庫数が未選択です。';
    }

    if(!empty($_POST['title']) && !empty($_POST['date']) && $_POST['stock'] != 0 ){
        $title = htmlentities($_POST['title'], ENT_QUOTES);
        $date = $_POST['date'];
        $stock = $_POST['stock'];

        $pdo = db_connect();
        try{
            $sql = "INSERT INTO books(title,date,stock)
                        VALUES(:title, :date, :stock) 
                    ";
            $stmt = $pdo->prepare($sql);

            $stmt->bindValue(':title', $title);
            $stmt->bindValue(':date', $date);
            $stmt->bindValue(':stock', $stock);

            $stmt->execute();

            echo '登録しました。';

        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
            die();
        }
    }
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="common.css">
    <title>本 登録</title>
</head>
<body>
    <h1>本 登録画面</h1>
    <form method="POST" action="">
        <input type="text" name="title" placeholder="タイトル">
        <br>
        <input type="date" name="date" placeholder="発売日">
        <br>
        <span>在庫数</span>
        <br>
        <select name="stock">
            <option value='0'>選択してください</option>
            <?php for($i=1; $i<=10; $i++){?>
                <option value="<?php echo $i ?>"><?php echo $i ?></option>
            <?php } ?>
        </select>
        <br>
        <input type="submit" name="register" value="登録">
    </form>
    <br>
    <input type="button" onclick="location.href='main.php'" value="一覧画面に戻る">
</body>
</html>