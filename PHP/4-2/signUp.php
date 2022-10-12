<?php
    // db_connect.phpの取り込み
    include_once("db_connect.php");

    $pdo = db_connect();

    if(isset($_POST['signUp'])){
        if(!empty($_POST['name']) && !empty($_POST['password'])){
            try {
                $stmt = $pdo->prepare("INSERT INTO users(name,password)VALUES(:name, :password)");
                
                $stmt->bindValue(':name', $_POST['name'], PDO::PARAM_STR);
                $password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $stmt->bindValue(':password', $password_hash);
                $stmt->execute();

                header("Location: login.php");
            } catch(PDOException $e) {
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
    <title>ユーザー登録</title>
</head>
<body>
    <h1>ユーザー登録画面</h1>
    <form method="POST" action="">
        <input type="text" name="name" placeholder="ユーザー名">
        <br>
        <input type="password" name="password" placeholder="パスワード">
        <br>
        <input type="submit" name="signUp" value="新規登録">
    </form>
</body>
</html>