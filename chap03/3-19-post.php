<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>3-19-post.php</title>
</head>
<body>
    <form method="post" action="3-19-output.php">
        <label for="doughnuts">数値の範囲を指定してください:</label>
        <?php
        print '<select name="doughnuts">';
        for ($min = 1, $max = 10; $min < 50; $min += 10, $max += 10) {
            print "<option>$min - $max</option>\n";
        }
        print '</select>';
        ?>
        <button type="submit">送信</button>
    </form>
</body>
</html>