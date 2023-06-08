<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>3-15-output.php</title>
</head>
<body>
    <?php
    if (! strcasecmp($_POST['first_name'], $_POST['last_name'])) {
        print '$first_name and $last_name are equal';
    } else {
        print '$first_name and $last_name are not equal';
    }
    ?>
    <form method="post" action="3-15-post.php">
        <button type="submit">戻る</button>
    </form>
</body>
</html>