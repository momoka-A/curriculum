<?php
    require_once('db_connect.php');
    require_once('function.php');

    check_user_name();

    $pdo = db_connect();
    try {
        $sql = "
            SELECT *
            FROM books
            ORDER BY date
        ";
        $data = $pdo->query($sql);

    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
        die();
    }
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="common.css">
    <title>在庫一覧</title>
</head>
<body>
    <div>
        <h1>在庫一覧画面</h1>
        <input type="button" onclick="location.href='create_post.php'" value="新規登録">
        <input type="button" onclick="location.href='logout.php'" value="ログアウト">
    </div>
    <br>
    <table>
        <thead>
            <tr>
                <th>タイトル</th>
                <th>発売日</th>
                <th>在庫数</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($data as $row) { ?>
            <tr>
                <td class="center"><?php echo $row['title'] ?></td>
                <td class="center"><?php echo $row['date'] ?></td>
                <td class="right"><?php echo $row['stock'] ?></td>
                <td><a href="delete_post.php?id=<?php echo $row['id']; ?>">削除</a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</body>
</html>