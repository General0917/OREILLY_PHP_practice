<?php
print "This is always printed";
print "<br />";

if ($_POST['logged_in'] === 'General0917') {
    print "Welcome aboard, trusted user.";
    print "<br />";
    print 'This is only printed if $logged_in is true';
    print "<br />";
}

print "This is also always printed";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>3-2-output.php</title>
</head>
<body>
    <form method="post" action="3-2-post.php">
        <button type="sutmit">戻る</button>
    </form>
</body>
</html>