<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>3-18-post.php</title>
</head>
<body>
    <form method="post" action="3-18-output.php">
        <?php
        print '<label for="people">人数を指定してください:</label>';
        print '<select name="people">';
        for ($i = 1; $i <= 10; $i++) {
            print "<option>$i</option>";
        }
        print '</select>';
        print '<br />';
        print '<button type="submit">送信</button>';
        ?>
        <!-- <button type="submit">送信</button> -->
    </form>
</body>
</html>