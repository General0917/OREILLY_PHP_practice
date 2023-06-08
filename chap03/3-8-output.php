<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>3-8-output.php</title>
</head>
<body>
    <?php
    if ($_POST['age'] > 17) {
        print "You are old enough to download the movie.<br />";
    }
    if ($_POST['age'] >= 65) {
        print "You are old enough for a discount.<br />";
    }
    if ($_POST['celsius_temp'] <= 0) {
        print "Uh-oh, your pipes may freeze.<br />";
    }
    if ($_POST['kelvin_temp'] < 20.3) {
        print "Your hydrogen is a liquid or a solid now.";
    }
    ?>
    <form method="post" action="3-8-post.php">
        <button type="submit">戻る</button>
    </form>
</body>
</html>