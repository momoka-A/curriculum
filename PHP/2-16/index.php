<?php
    // 書き込み
    $testFile = "test.txt";
    $contents = "こんにちは!";

    if(is_writable($testFile)){

        $fp = fopen($testFile, "w");
        fwrite($fp, $contents);
        fclose($fp);

        echo "finish witeing!!";
    }else{
        echo "not writable!";
        exit;
    }

    // 読み込み
    $test_file ="test2.txt";

    if(is_readable($test_file)){
        $fp = fopen($test_file, "r");
        while($line = fgets($fp)) {
            echo $line.'<br>';
        }
        fclose($fp);
    } else {
        echo "not readable!";
        exit;
    }


    
    echo '<br>';
    echo '<br>';
    echo '<br>';
    
    // IT用語
    echo "CakePHPの2系・3系の違い" . "<br>";
    echo "デバッグを使用するかしないかのbool値を取る、AppControllerを継承したクラスに設定されているプロパティとマージされる、requestオブジェクトを介してセッションにアクセス、beforeFilterを使う際にControllerに定義が必要、処理が完了してからメソッドを抜ける時にリダイレクト";
    echo '<br>';
    echo '<br>';
    echo "LAMP" . "<br>";
    echo "Linux,Apache,MySQL,Perl・PHP・Python。オープンソフトウェア";
    echo '<br>';
    echo '<br>';
    echo "AWS" . "<br>";
    echo "Amazonが提供している100以上のクラウドコンピューティング（インターネットを介してサーバー・ストレージ・DB・ソフトウェアといったコンピューターを使ったさまざまなサービスを利用すること）を使ったサービス";