<?php
    require_once('db_connect.php');
    require_once("function.php");

    // ログインしていなかったらlogin.phpにリダイレクト
    check_user_logged_in();

    $id = $_POST['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];

    $pdo = db_connect();

    try{
        $sql = "
            UPDATE posts
            SET title = :title,
                content = :content
            WHERE id = :id
            ";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':content', $content);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

    } catch(PDOException $e) {
        exit('データベース接続失敗。' . $e->getMessage());
    }
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>編集完了</title>
</head>
<body>
    <h1>編集完了</h1>
    <p>ID: <?php echo $id; ?>を編集しました。</p>
    <td><a href="main.php">ホームへ戻る</a>
</body>
</html>