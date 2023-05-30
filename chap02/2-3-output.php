<?php
    // $_POST['zipcode']は、サブミットされたパラメータ
    // 「'zipcode'」の値を保持する
    $zipcode = trim($_POST['zipcode']);
    
    // これで$zipcodeには前後のスペースを取り除いた値が含まれる
    $zip_length = strlen($zipcode);
    
    // 郵便番号が5文字でなければエラーを出力する
    if ($zip_length != 5) {
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
    <form method="post" action="2-3-post.php">
        <button type="submit">戻る</button>
    </form>
</body>
</html>