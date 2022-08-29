<?php
    require_once("getData.php");

    $getData = new getData();
    $user = $getData->getUserData();
    $posts = $getData->getPostData();
    
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="reset.css">
        <title>第3章チェックテスト</title>
    </head>
    <body>
       <header>
            <div class="logo_area">
                <a href="#">
                    <img src="./logo.png">
                </a>
            </div>
            <div>
                <div class="login" style="background-color: #87ceeb;">ようこそ <?php echo $user['last_name']; echo $user['first_name']; ?> さん</div>
                <div class="login" style="background-color: #00ffff;">最終ログイン日：<?php echo date("Y-m-d H:i:s"); ?></div>
            </div>
       </header>
       <main>
            <table>
                <thead>
                    <tr>
                        <th>記事ID</th>
                        <th>タイトル</th>
                        <th>カテゴリ</th>
                        <th>本文</th>
                        <th>投稿日</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($posts as $post) { ?>
                        <tr>
                            <td><?php echo $post['id']; ?></td>
                            <td><?php echo $post['title']; ?></td>
                            <td>
                                <?php
                                    if($post['category_no'] == 1){
                                        echo '食事';
                                    } else if($post['category_no'] == 2){
                                        echo '旅行';
                                    } else {
                                        echo 'その他';
                                    }
                                ?>
                            </td>
                            <td><?php echo $post['comment']; ?></td>
                            <td><?php echo $post['created']; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
       </main>
       <footer>
            Y&I group.inc
       </footer>
    </body>
</html>