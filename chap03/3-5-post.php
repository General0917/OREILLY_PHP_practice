<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>3-5-post.php</title>
</head>
<body>
    <form method="post" action="3-5-output.php">
        <label>ログインIDを入力してください:</label>
        <input type="text" name="logged_in">
        <button type="submit">ログイン</button>
        <br />
        <label>new_messages用のフラグ:</label>
        <input type="checkbox" name="new_messages">
        <br />
        <label>emergency用のフラグ:</label>
        <input type="checkbox" name="emergency">
    </form>
</body>
</html>