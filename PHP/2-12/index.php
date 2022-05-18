<!-- 課題 -->
<form action="result.php" method="post">
    名前:<input type="text" name="name" />
    <br>
    ご希望商品:
        <input type="radio" name="item" value="A賞" />A賞
        <input type="radio" name="item" value="B賞" />B賞
        <input type="radio" name="item" value="C賞" />C賞
    <br>
    個数:
        <select name="num">
            <?php for ($i=1;$i<=10;$i++){ ?>
                <option value="<?php echo $i; ?>">
                <?php echo $i; ?>
                </option>
            <?php } ?>
        </select>
    <br>
    <input type="submit" value="申込" />
</form>

<?php
    // IT用語
    echo "モジュール" . "<br>";
    echo "ハードウェアやソフトウェアにおけるひとまとまりの機能・要素のこと";
    echo '<br>';
    echo '<br>';
    echo "バージョン管理システム" . "<br>";
    echo "コンピュータ上でファイルの変更履歴を管理するシステム";
    echo '<br>';
    echo '<br>';
    echo "サブクエリ" . "<br>";
    echo "データベースなどの問い合わせ（クエリ）分の内部に含まれる、別の問い合わせ文のこと";

?>
