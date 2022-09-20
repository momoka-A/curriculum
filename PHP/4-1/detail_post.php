<?php
    require_once('db_connect.php');
    require_once("function.php");

    // ログインしていなかったらlogin.phpにリダイレクト
    check_user_logged_in();

    $id = $_GET['id'];
    redirect_main_unless_parameter($id);

    $row = find_post_by_id($id);
    $id = $row['id'];
    $title = $row['title'];
    $content = $row['content'];   
    
    $pdo_comments = db_connect();
    try {
        $sql_comments = "SELECT * FROM comments WHERE post_id = :post_id";
        $stmt_comments = $pdo_comments->prepare($sql_comments);
        $stmt_comments->bindParam(':post_id',$id);
        $stmt_comments->execute();
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
        die();
    }

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>記事詳細</title>
</head>
<body>
    <h1>記事詳細</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>タイトル</th>
                <th>本文</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $id; ?></td>
                <td><?php echo $title; ?></td>
                <td><?php echo $content; ?></td>
            </tr>
        </tbody>
    </table>
    <a href="create_comment.php?post_id=<?php echo $id ?>">この記事にコメントする</a>
    <br>
    <a href="main.php">メインページに戻る</a>
    <div>
        <?php
        while ($row = $stmt_comments->fetch(PDO::FETCH_ASSOC)) {
            echo '<hr>';
            echo $row['name'];
            echo '<br>';
            echo $row['content'];
        }
        ?>
    </div>
</body>
</html>