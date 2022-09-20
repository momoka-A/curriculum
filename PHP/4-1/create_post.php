<?php
    require_once('db_connect.php');
    require_once("function.php");

    // ログインしていなかったらlogin.phpにリダイレクト
    check_user_logged_in();

    if(!empty($_POST['submit'])) {
        if(empty($_POST['title'])){
            echo 'タイトルが未入力です。';
        } 
        if(empty($_POST['content'])){
            echo 'コンテンツが未入力です。';
        }

        if(!empty($_POST['title']) && !empty($_POST['content'])){
            $title = htmlentities($_POST['title'], ENT_QUOTES);
            $content = htmlentities($_POST['content'], ENT_QUOTES);

            $pdo = db_connect();

            try {
                $sql = "
                        INSERT INTO posts(title,content,time)
                        VALUES(:title, :content, NOW()) 
                    ";
                $stmt = $pdo->prepare($sql);

                $stmt->bindValue(':title', $title);
                $stmt->bindValue(':content', $content);

                $stmt->execute();

                header("Location: main.php");
                
            } catch(PDOException $e){
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
    <title>記事登録</title>
</head>
<body>
    <h1>記事登録</h1>
    <form method="POST" action="">
        title:<br>
        <input type="text" name="title" style="width:200px; height:50px;">
        <br>
        content:<br>
        <input type="text" name="content" style="width:200px; height:100px;">
        <br>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>