<?php
if ($_POST['logged_in'] === 'General0917') {
    print "Welcome aboard, trusted user.";
} else {
    print "Howdy, stranger.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>3-3-output.php</title>
</head>
<body>
    <form method="post" action="3-3-post.php">
        <button type="submit">戻る</button>
    </form>
</body>
</html>