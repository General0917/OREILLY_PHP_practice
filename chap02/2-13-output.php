<?php
print 'Card: XX';
print substr($_POST['card_number'], -4, 4);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>substr()での文字列の末尾の抽出_output</title>
</head>
<body>
    <form method="post" action="2-13-post.php">
        <button type="submit">戻る</button>
    </form>
</body>
</html>