/*こちらのSQLは一件ずつ実行する。*/

/*MySQLでMenu DBを作成する。*/
CREATE DATABASE Menu;

/*dinner DB作成後、以下のクエリを実行して、mealsテーブルを作成する。*/
CREATE TABLE meals (dish VARCHAR(255) NOT NULL , price INT(255) NOT NULL , meal VARCHAR(255) NOT NULL );

/*mealsテーブル作成後、以下のクエリを実行して、テストデータを追加する。*/
INSERT INTO meals (dish, price, meal) VALUES ('トースト', '500', 'breakfast'), ('スパゲッティ', '1200', 'lunch'), ('ステーキ', '2000', 'dinner');