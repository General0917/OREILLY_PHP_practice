<?php
if ($_POST['logged_in'] === 'General0917') {
    // $logged_inがGeneral0917の時に実行
    print "Welcome aboard, trusted user.";
} elseif (isset($_POST['new_messages'])) {
    // $logged_inがfalseだが$new_messagesがtrueのときに実行する
    print "Dear stranger, there are new messages.";
} elseif (isset($_POST['emergency'])) {
    // $logged_inと$new_messagessがfalseだが、$emergencyがtrueのときに実行する
    print "Stranger, there are no new messages, but there is an emergency.";
} else {
    // $logged_in、$new_messagess、$emergencyがすべてfalseの時に実行
    print "I don't know you, you have no messages, and there's no emergency";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>3-5-output.php</title>
</head>
<body>
    <form method="post" action="3-5-post.php">
        <button type="submit">戻る</button>
    </form>
</body>
</html>