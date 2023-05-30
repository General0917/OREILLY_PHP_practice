<!DOCTYPE html>
<html>
<head>
    <title>Menu List</title>
</head>
<body>
    <form method="post" action="">
        <label for="meal">Select a meal:</label>
        <select name="meal" id="meal">
            <option value="breakfast">Breakfast</option>
            <option value="lunch">Lunch</option>
            <option value="dinner">Dinner</option>
            <option value="snack">Snack</option>
        </select>
        <button type="submit">Submit</button>
    </form>

    <?php
    // このコードは実行する前にMySQLに該当のDBとテーブル、テストデータを用意する必要がある。
    // DBについては、「menu.sql」ファイルがあるので、そのSQLファイルをMySQLをローカルに接続して、実行する。
    // 以下の変数はDB接続先と、ユーザー名とパスワードを定義している。
    $dsn = 'mysql:dbname=Menu;host=localhost';
    $user = 'root';
    $password = '';

    try {
        // MySQL接続用の変数
        $db = new PDO($dsn, $user, $password);

        // 条件の食事を定義
        $meals = array('breakfast', 'lunch', 'dinner');

        // サブミットされたフォームパラメータの「meal」が「breakfast」,「lunch」,「dinner」のいずれかであるかを確認する
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['meal'])) {
            if (in_array($_POST['meal'], $meals)) {
                // その場合、指定された食事のすべての料理を取得する
                $stmt = $db->prepare('SELECT dish, price FROM meals WHERE meal LIKE ?');
                $stmt->execute(array($_POST['meal']));
                $rows = $stmt->fetchAll();
                // データベース内に全く料理が見つからなければ、その旨を報告（出力）する。
                if (count($rows) == 0) {
                    print "No dishes available";
                } else {
                    // HTMLテーブルと各料理と値段を行として出力する。
                    print '<table><tr><th>Dish</th><th>Price</th></tr>';
                    foreach($rows as $row) {
                        print "<tr><td>{$row['dish']}</td><td>{$row['price']}円</td></tr>";
                    }
                    print "</table>";
                }
            } else {
                // このメッセージはサブミットされたパラメータの「meal」が「breakfast」,「lunch」,「dinner」のいずれでもない場合に出力する
                print "Unknown meal.";
            }
        } elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && !isset($_POST['meal'])) {
            // 「meal」が存在しない場合の処理
            print "No meal selected.";
        }

    } catch (PDOException $e) {
        print('Error:'.$e->getMessage());
        die();
    }
    
    $dbh = null;
    
    ?>
</body>
</html>