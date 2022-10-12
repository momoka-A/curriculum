<?php
    require_once('db_connect.php');

    session_start();

    if(isset($_POST['login'])){
        if(empty($_POST['name'])){
            echo 'ユーザ名が入力されていません。';
        }
        if(empty($_POST['password'])){
            echo 'パスワードが入力されていません。';
        }

        if(!empty($_POST['name']) && !empty($_POST['password'])){
            $name = htmlentities($_POST['name'], ENT_QUOTES);
            $pass = htmlentities($_POST['password'], ENT_QUOTES);

            $pdo = db_connect();
            try{
                $sql = "
                    SELECT 
                        *
                    FROM
                        users
                    WHERE
                        name = :name
                ";
                $stmt = $pdo->prepare($sql);
                $stmt->bindValue(':name', $name);
                $stmt->execute();

            } catch (PDOException $e) {
                echo 'Error: ' . $e->getMessage();
                die();
            }

            if($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                if(password_verify($pass, $row['password'])) {
                    $_SESSION['user_id'] = $row['id'];
                    $_SESSION['user_name'] = $row['name'];

                    header('Location: main.php');
                    exit;
                } else {
                    echo "パスワードに誤りがあります。";
                }
            } else {
                echo "ユーザー名かパスワードに誤りがあります。";
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
    <title>ログイン</title>
</head>
<body>
    <div>
        <h1>ログイン画面</h1>
        <input type="button" onclick="location.href='signUp.php'" value="新規ユーザー登録">
    </div>
    <form method="POST" action="">
        <input type="text" name="name" placeholder="ユーザー名">
        <br>
        <input type="password" name="password" placeholder="パスワード">
        <br>
        <input type="submit" name="login" value="ログイン"> 
    </form>
</body>
</html>