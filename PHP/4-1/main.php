<?php
    require_once('db_connect.php');
    require_once("function.php");

    // ログインしていなかったらlogin.phpにリダイレクト
    check_user_logged_in();

    $pdo = db_connect();
    try{
        $sql = "
                SELECT *
                FROM posts
                ORDER BY id DESC
            ";
        $data = $pdo->query($sql);

    } catch(PDOException $e){
        echo 'Error: ' . $e->getMessage();
            die();
    }

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>メイン</title>
</head>
<body>
    <h1>メインページ</h1>
    <p>ようこそ<?php echo $_SESSION['user_name']; ?>さん</p>
    <a href="logout.php">ログアウト</a><br>
    <a href="create_post.php">記事投稿！</a><br>
    <table>
        <thead>
            <tr>
                <th>記事ID</th>
                <th>タイトル</th>
                <th>本文</th>
                <th>投稿日</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data as $row) { ?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['title'] ?></td>
                <td><?php echo $row['content'] ?></td>
                <td><?php echo $row['time'] ?></td>
                <td><a href="detail_post.php?id=<?php echo $row['id']; ?>">詳細</a>
                <td><a href="edit_post.php?id=<?php echo $row['id']; ?>">編集</a>
                <td><a href="delete_post.php?id=<?php echo $row['id']; ?>">削除</a>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>