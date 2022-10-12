<?php
    require_once('db_connect.php');
    require_once("function.php");

    // ログインしていなかったらlogin.phpにリダイレクト
    check_user_logged_in();

    $id = $_GET['id'];
    redirect_main_unless_parameter($id);

    $pdo = db_connect();
    try{
        $sql = "
            DELETE posts,comments
            FROM posts
            LEFT JOIN comments
            ON posts.id = comments.post_id
            WHERE posts.id = :id
            ";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        header("Location: main.php");
        exit();
    } catch(PDOException $e) {
        echo 'Error: ' . $e->getMessage();
        die();
    }