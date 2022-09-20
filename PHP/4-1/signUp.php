<?php
    // db_connect.phpの読み込み
    include_once("db_connect.php");

    $signUpMessage = '';
    $errorMessage = '';
    
    // submitボタン押下されたとき
    if(isset($_POST['signUp'])){
        if(!empty($_POST['name']) && !empty($_POST['password'])){


            $pdo = db_connect();
            try {
                $stmt = $pdo->prepare("INSERT INTO users(name,password,time)VALUES(:name, :password, NOW())");
                
                $stmt->bindValue(':name', $_POST['name'], PDO::PARAM_STR);
                $password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $stmt->bindValue(':password', $password_hash);
                $stmt->execute();
                $signUpMessage = '登録が完了しました。';

            } catch(PDOException $e) {
                $errorMessage = 'データベースエラー';
                $e->getMessage(); 
                echo $e->getMessage();
            }
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <div><?php echo htmlspecialchars($errorMessage, ENT_QUOTES); ?></div>
        <div><?php echo htmlspecialchars($signUpMessage, ENT_QUOTES); ?></div>
        <h1>新規登録</h1>
        <form method="POST" action="">
            user:<br>
            <input type="text" id="name" name="name">
            <br>
            password:<br>
            <input type="text" id="password" name="password">
            <br>
            <input type="submit" value="submit" id="signUp" name="signUp">
        </form>
    </body>
</html>