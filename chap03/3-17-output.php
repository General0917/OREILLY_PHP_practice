<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>3-17-output.php</title>
</head>
<body>
    <form method="post" action="3-17-post.php">
        <?php
        print '<label for="people">指定された人数は、</label>';
        print $_POST['people'] . '人です。';
        print '<br />';
        ?>
        <button type="submit">戻る</button>
    </form>
</body>
</html>