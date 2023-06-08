<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>3-16-output.php</title>
</head>
<body>
    <?php
    if (($_POST['age'] >= 13) && ($_POST['age'] <= 65)) {
        print "You are too old for a kid's discount and too young for the senior's discount.";
    }
    
    if (($_POST['meal'] == 'breakfast') || ($_POST['dessert'] == 'souffle')) {
        print "Time to eat some eggs.";
    }
    ?>
    <form method="post" action="3-16-post.php">
        <button type="submit">戻る</button>
    </form>
</body>
</html>