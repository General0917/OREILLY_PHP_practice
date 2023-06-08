<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>3-8-post.php</title>
</head>
<body>
    <form method="post" action="3-8-output.php">
        <label for="age">年齢を入力してください:</label>
        <input type="number" name="age">
        <br />
        <label for="celsius_temp">摂氏を入力してください:</label>
        <input type="number" name="celsius_temp">
        <br />
        <label for="kelvin_temp">華氏を入力してください:</label>
        <input type="number" name="kelvin_temp">
        <br />
        <button type="submit">送信</button>
    </form>
</body>
</html>