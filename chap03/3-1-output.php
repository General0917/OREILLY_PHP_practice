<?php
    if ($_POST['logged_in'] === 'General0917') {
        print "Welcome aboard, trusted user.";
    } else {
        print "unknown user. Please login correct user.";
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>3-1-output.php</title>
</head>
<body>
    <form method="post" action="3-1-post.php">
        <button type="sutmit">戻る</button>
    </form>
</body>
</html>