<?php
if ($_POST['e-mail'] === 'president@whitehouse.gov') {
    print "Welcome, Mr. President.";
} else {
    print "Login failed. Please Login again.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>login result</title>
</head>
<body>
    <form method="post" action="2-5-post.php">
        <button type="submit">logout</button>
    </form>
</body>
</html>