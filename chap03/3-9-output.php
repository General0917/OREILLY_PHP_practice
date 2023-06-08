<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>3-9-output.php</title>
</head>
<body>
    <?php
    if (abs($_POST['price_1'] - $_POST['price_2']) < 0.00001) {
        print '$price_1 and $price_2 are equal.';
    } else {
        print '$price_1 and $price_2 are not equal';
    }
    ?>
    <form method="post" action="3-9-post.php">
        <button type="submit">戻る</button>
    </form>
</body>
</html>