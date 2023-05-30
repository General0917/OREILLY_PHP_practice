<?php
// $_POST['comments']の最初の30文字を切り出す
print substr($_POST['comments'], 0, 30);

// 省略記号を追加する
print '...';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>substr()を使った文字列の切り取り_output</title>
</head>
<body>
    <form method="post" action="2-12-post.php">
        <?php
        /*
        // $_POST['comments']の最初の30文字を切り出す
        print substr($_POST['comments'], 0, 30);

        // 省略記号を追加する
        print '...';
        */
        ?>
        <button type="submit">入力ページに戻る</button>
    </form>
</body>
</html>