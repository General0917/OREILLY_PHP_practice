<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>3-17-post.php</title>
</head>
<body>
    <form method="post" action="3-17-output.php">
        <?php
        $i = 1;
        print '<label for="people">人数を指定してください:</label>';
        print '<select name="people">';
        while ($i <= 10) {
            print "<option>$i</option>";
            $i++;
        }
        print '</select>';
        print '<br />';
        // print '<button type="submit">送信</button>';
        ?>
        <button type="submit">送信</button>
    </form>
</body>
</html>