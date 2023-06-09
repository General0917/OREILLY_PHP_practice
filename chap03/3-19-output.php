<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>3-19-output.php</title>
</head>
<body>
    <form method="post" action="3-19-post.php">
        <label for="doughnuts">指定された数値の範囲は、</label>
        <?php
        print $_POST['doughnuts'];
        ?>
        <br />
        <button type="submit">戻る</button>
    </form>
</body>
</html>