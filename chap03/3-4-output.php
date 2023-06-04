<?php
if ($_POST['logged_in'] === 'General0917') {
    // $logged_inがGeneral0917の時に実行
    print "Welcome aboard, trusted user.";
} elseif (isset($_POST['new_messages'])) {
    // $logged_inがfalseだが$new_messagesがtrueのときに実行する
    print "Dear stranger, there are new messages.";
    print isset($_POST['new_messages']);
} elseif (isset($_POST['emergency'])) {
    // $logged_inと$new_messagessがfalseだが、$emergencyがtrueのときに実行する
    print "Stranger, there are no new messages, but there is an emergency.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>3-4-output.php</title>
</head>
<body>
    <form method="post" action="3-4-post.php">
        <button type="submit">戻る</button>
    </form>
</body>
</html>