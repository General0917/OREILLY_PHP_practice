<?php
    if (strlen(trim($_POST['zipcode'])) != 5) {
        print "Please enter a ZIP code that is 5 characters long. <br />";
    } else {
        print "送信が完了しました。<br />";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>エラー画面</title>
</head>
<body>
    <form method="post" action="2-4-post.php">
        <button type="submit">戻る</button>
    </form>
</body>
</html>