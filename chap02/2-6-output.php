<?php
if (strcasecmp($_POST['e-mail'], 'president@whitehouse.gov') === 0) {
    print "Welcome back, US President.";
} else {
    print "Login failed. Please Login again.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login result</title>
</head>
<body>
    <form method="post" action="2-6-post.php">
        <button type="submit">logout</button>
    </form>
</body>
</html>