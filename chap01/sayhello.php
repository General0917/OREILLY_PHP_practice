<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Output Name</title>
</head>
<body>
    <?php
    print "Hello, ";
    // 「user」というフォームパラメータでサブミットされたものを出力する
    print $_POST['user'];
    print "!";
    ?>
</body>
</html>