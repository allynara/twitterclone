{"filter":false,"title":"booklist.php","tooltip":"/booklist.php","undoManager":{"mark":27,"position":27,"stack":[[{"start":{"row":0,"column":0},"end":{"row":20,"column":7},"action":"insert","lines":["<!DOCTYPE html>","<html lang=\"ja\">","    <head>","        <meta charset=\"utf-8\">","        <title>Booklist</title>","    </head>","    <body>","        <a href=\"booklist.php\"><h1>Booklist</h1></a>","        <h2>書籍の登録フォーム</h2>","        <form action=\"booklist.php\" method=\"POST\">","            <input type=\"text\" name=\"book_title\" placeholder=\"書籍タイトルを入力\" required>","            <input type=\"submit\" name=\"submit_add_book\" value=\"登録\">","        </form>","        <h2>登録された書籍一覧</h2>","        <ul>","            <li>はじめてのWebアプリケーション</li>","            <li>かんたん！PHPプログラミング</li>","            <li>PHP+MySQLで作るWebアプリケーション</li>","        </ul>","    </body>","</html>"],"id":1}],[{"start":{"row":20,"column":7},"end":{"row":21,"column":0},"action":"insert","lines":["",""],"id":2}],[{"start":{"row":21,"column":0},"end":{"row":41,"column":7},"action":"insert","lines":["<!DOCTYPE html>","<html lang=\"ja\">","    <head>","        <meta charset=\"utf-8\">","        <title>Booklist</title>","    </head>","    <body>","        <a href=\"booklist.php\"><h1>Booklist</h1></a>","        <h2>書籍の登録フォーム</h2>","        <form action=\"booklist.php\" method=\"POST\">","            <input type=\"text\" name=\"book_title\" placeholder=\"書籍タイトルを入力\" required>","            <input type=\"submit\" name=\"submit_add_book\" value=\"登録\">","        </form>","        <h2>登録された書籍一覧</h2>","        <ul>","            <li>はじめてのWebアプリケーション</li>","            <li>かんたん！PHPプログラミング</li>","            <li>PHP+MySQLで作るWebアプリケーション</li>","        </ul>","    </body>","</html>"],"id":3}],[{"start":{"row":20,"column":7},"end":{"row":41,"column":7},"action":"remove","lines":["","<!DOCTYPE html>","<html lang=\"ja\">","    <head>","        <meta charset=\"utf-8\">","        <title>Booklist</title>","    </head>","    <body>","        <a href=\"booklist.php\"><h1>Booklist</h1></a>","        <h2>書籍の登録フォーム</h2>","        <form action=\"booklist.php\" method=\"POST\">","            <input type=\"text\" name=\"book_title\" placeholder=\"書籍タイトルを入力\" required>","            <input type=\"submit\" name=\"submit_add_book\" value=\"登録\">","        </form>","        <h2>登録された書籍一覧</h2>","        <ul>","            <li>はじめてのWebアプリケーション</li>","            <li>かんたん！PHPプログラ��ング</li>","            <li>PHP+MySQLで作るWebアプリケーション</li>","        </ul>","    </body>","</html>"],"id":5}],[{"start":{"row":20,"column":7},"end":{"row":21,"column":0},"action":"insert","lines":["",""],"id":6},{"start":{"row":21,"column":0},"end":{"row":22,"column":0},"action":"insert","lines":["",""]},{"start":{"row":22,"column":0},"end":{"row":23,"column":0},"action":"insert","lines":["",""]},{"start":{"row":23,"column":0},"end":{"row":24,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":0,"column":0},"end":{"row":24,"column":0},"action":"remove","lines":["<!DOCTYPE html>","<html lang=\"ja\">","    <head>","        <meta charset=\"utf-8\">","        <title>Booklist</title>","    </head>","    <body>","        <a href=\"booklist.php\"><h1>Booklist</h1></a>","        <h2>書籍の登録フォーム</h2>","        <form action=\"booklist.php\" method=\"POST\">","            <input type=\"text\" name=\"book_title\" placeholder=\"書籍タイトルを入力\" required>","            <input type=\"submit\" name=\"submit_add_book\" value=\"登録\">","        </form>","        <h2>登録された書籍一覧</h2>","        <ul>","            <li>はじめてのWebアプリケーション</li>","            <li>かんたん！PHPプログラミング</li>","            <li>PHP+MySQLで作るWebアプリケーション</li>","        </ul>","    </body>","</html>","","","",""],"id":7}],[{"start":{"row":0,"column":0},"end":{"row":20,"column":7},"action":"insert","lines":["<!DOCTYPE html>","<html lang=\"ja\">","    <head>","        <meta charset=\"utf-8\">","        <title>Booklist</title>","    </head>","    <body>","        <a href=\"booklist.php\"><h1>Booklist</h1></a>","        <h2>書籍の登録フォーム</h2>","        <form action=\"booklist.php\" method=\"POST\">","            <input type=\"text\" name=\"book_title\" placeholder=\"書籍タイトルを入力\" required>","            <input type=\"submit\" name=\"submit_add_book\" value=\"登録\">","        </form>","        <h2>登録された書籍一覧</h2>","        <ul>","            <?php // 登録された書籍タイトルの数だけループ 開始 ?>","                <li><?php // print 書籍タイトル; ?></li>","            <?php // ループ 終了 ?>","        </ul>","    </body>","</html>"],"id":8}],[{"start":{"row":6,"column":10},"end":{"row":7,"column":8},"action":"insert","lines":["","        "],"id":9}],[{"start":{"row":7,"column":4},"end":{"row":7,"column":8},"action":"remove","lines":["    "],"id":10}],[{"start":{"row":7,"column":4},"end":{"row":13,"column":2},"action":"insert","lines":["<?php","    // フォームデータ送受信確認用コード（本番では削除）","    print '<div style=\"background-color: skyblue;\">';","    print '<p>動作確認用:</p>';","    print_r($_POST);","    print '</div>';","?>"],"id":11}],[{"start":{"row":0,"column":0},"end":{"row":1,"column":0},"action":"insert","lines":["",""],"id":14},{"start":{"row":1,"column":0},"end":{"row":2,"column":0},"action":"insert","lines":["",""]},{"start":{"row":2,"column":0},"end":{"row":3,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":0,"column":0},"end":{"row":12,"column":2},"action":"insert","lines":["<?php","    // MySQLサーバ接続に必要な値を変数に代入","    $username = 'root';","    $password = '';","","    // PDO のインスタンスを生成して、MySQLサーバに接続","    $database = new PDO('mysql:host=localhost;dbname=booklist;charset=UTF8;', $username, $password);","","    // ここにMySQLを使ったなんらかの処理を書く","","    // MySQLを使った処理が終わると、接続は不要なので切断する","    $database = null;","?>"],"id":15}],[{"start":{"row":13,"column":0},"end":{"row":14,"column":0},"action":"remove","lines":["",""],"id":16},{"start":{"row":12,"column":2},"end":{"row":13,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":7,"column":0},"end":{"row":10,"column":36},"action":"remove","lines":["","    // ここにMySQLを使ったなんらかの処理を書く","","    // MySQLを使った処理が終わると、接続は不要なので切断する"],"id":17}],[{"start":{"row":4,"column":0},"end":{"row":5,"column":35},"action":"remove","lines":["","    // PDO のインスタンスを生成して、MySQLサーバに接続"],"id":18},{"start":{"row":3,"column":19},"end":{"row":4,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":1,"column":3},"end":{"row":1,"column":28},"action":"remove","lines":[" // MySQLサーバ接続に必要な値を変数に代入"],"id":19},{"start":{"row":1,"column":2},"end":{"row":1,"column":3},"action":"remove","lines":[" "]},{"start":{"row":1,"column":1},"end":{"row":1,"column":2},"action":"remove","lines":[" "]},{"start":{"row":1,"column":0},"end":{"row":1,"column":1},"action":"remove","lines":[" "]},{"start":{"row":0,"column":5},"end":{"row":1,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":3,"column":100},"end":{"row":4,"column":0},"action":"remove","lines":["",""],"id":22}],[{"start":{"row":4,"column":4},"end":{"row":5,"column":0},"action":"insert","lines":["",""],"id":23},{"start":{"row":5,"column":0},"end":{"row":5,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":4,"column":4},"end":{"row":11,"column":22},"action":"insert","lines":[" $sql = 'SELECT * FROM books ORDER BY created_at DESC'; ","    // SQLを実行する","    $statement = $database->query($sql);","    // 結果レコード（ステートメントオブジェクト）を配列に変換する","    $records = $statement->fetchAll();","","    // ステートメントを���棄��る","    $statement = null;"],"id":24}],[{"start":{"row":5,"column":14},"end":{"row":5,"column":15},"action":"remove","lines":["る"],"id":25},{"start":{"row":5,"column":13},"end":{"row":5,"column":14},"action":"remove","lines":["す"]},{"start":{"row":5,"column":12},"end":{"row":5,"column":13},"action":"remove","lines":["行"]},{"start":{"row":5,"column":11},"end":{"row":5,"column":12},"action":"remove","lines":["実"]},{"start":{"row":5,"column":10},"end":{"row":5,"column":11},"action":"remove","lines":["を"]},{"start":{"row":5,"column":9},"end":{"row":5,"column":10},"action":"remove","lines":["L"]},{"start":{"row":5,"column":8},"end":{"row":5,"column":9},"action":"remove","lines":["Q"]},{"start":{"row":5,"column":7},"end":{"row":5,"column":8},"action":"remove","lines":["S"]},{"start":{"row":5,"column":6},"end":{"row":5,"column":7},"action":"remove","lines":[" "]},{"start":{"row":5,"column":5},"end":{"row":5,"column":6},"action":"remove","lines":["/"]},{"start":{"row":5,"column":4},"end":{"row":5,"column":5},"action":"remove","lines":["/"]}],[{"start":{"row":4,"column":4},"end":{"row":4,"column":5},"action":"remove","lines":[" "],"id":26}],[{"start":{"row":10,"column":0},"end":{"row":10,"column":19},"action":"remove","lines":["    // ステートメントを破棄する"],"id":29},{"start":{"row":9,"column":0},"end":{"row":10,"column":0},"action":"remove","lines":["",""]},{"start":{"row":8,"column":38},"end":{"row":9,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":7,"column":3},"end":{"row":7,"column":35},"action":"remove","lines":[" // 結果レコード（ステートメントオブジェクト）を配列に変換す"],"id":31},{"start":{"row":7,"column":2},"end":{"row":7,"column":3},"action":"remove","lines":[" "]},{"start":{"row":7,"column":1},"end":{"row":7,"column":2},"action":"remove","lines":[" "]},{"start":{"row":7,"column":0},"end":{"row":7,"column":1},"action":"remove","lines":[" "]}],[{"start":{"row":7,"column":0},"end":{"row":7,"column":1},"action":"remove","lines":["る"],"id":32},{"start":{"row":6,"column":40},"end":{"row":7,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":33,"column":7},"end":{"row":38,"column":7},"action":"remove","lines":["     <?php // 登録された書籍タイトルの数だけループ 開始 ?>","                <li><?php // print 書籍タイトル; ?></li>","            <?php // ループ 終了 ?>","        </ul>","    </body>","</html>"],"id":33},{"start":{"row":33,"column":7},"end":{"row":45,"column":7},"action":"insert","lines":["<?php","            if ($records) {","                foreach ($records as $record) {","                    $book_title = $record['book_title'];","?>","                    <li><?php print $book_title; ?></li>","<?php","                }","            }","?>","        </ul>","    </body>","</html>"]}],[{"start":{"row":0,"column":0},"end":{"row":45,"column":7},"action":"remove","lines":["<?php","    $username = 'root';","    $password = '';","    $database = new PDO('mysql:host=localhost;dbname=booklist;charset=UTF8;', $username, $password);","    $sql = 'SELECT * FROM books ORDER BY created_at DESC'; ","    ","    $statement = $database->query($sql);","    $records = $statement->fetchAll();","    $statement = null;","    $database = null;","?>","<!DOCTYPE html>","<html lang=\"ja\">","    <head>","        <meta charset=\"utf-8\">","        <title>Booklist</title>","    </head>","    <body>","    <?php","    // フォームデータ送受信確認用コード（本番では削除）","    print '<div style=\"background-color: skyblue;\">';","    print '<p>動作確認用:</p>';","    print_r($_POST);","    print '</div>';","?>","        <a href=\"booklist.php\"><h1>Booklist</h1></a>","        <h2>書籍の登録フォーム</h2>","        <form action=\"booklist.php\" method=\"POST\">","            <input type=\"text\" name=\"book_title\" placeholder=\"書籍タイトルを入力\" required>","            <input type=\"submit\" name=\"submit_add_book\" value=\"登録\">","        </form>","        <h2>登録された書籍一覧</h2>","        <ul>","       <?php","            if ($records) {","                foreach ($records as $record) {","                    $book_title = $record['book_title'];","?>","                    <li><?php print $book_title; ?></li>","<?php","                }","            }","?>","        </ul>","    </body>","</html>"],"id":34}],[{"start":{"row":0,"column":0},"end":{"row":68,"column":7},"action":"insert","lines":["<?php","    // MySQLサーバ接続に必要な値を変数に代入","    $username = 'root';","    $password = '';","","    // PDO のインスタンスを生成して、MySQLサーバに接続","    $database = new PDO('mysql:host=localhost;dbname=booklist;charset=UTF8;', $username, $password);","","    // フォームから書籍タイトルが送信されていればデータベースに保存する","    if ($_POST['book_title']) {","        // 実行するSQLを作成","        $sql = 'INSERT INTO books (book_title) VALUES(:book_title)';","        // ユーザ入力に依存するSQLを実行するので、セキュリティ対策をする","        $statement = $database->prepare($sql);","        // ユーザ入力データ($_POST['book_title'])をVALUES(?)の?の部分に代入する","        $statement->bindParam(':book_title', $_POST['book_title']);","        // SQL文を実行する","        $statement->execute();","        // ステートメントを破棄する","        $statement = null;","    }","","    // 実行するSQLを作成","    $sql = 'SELECT * FROM books ORDER BY created_at DESC';","    // SQL を実行する直����のステー��メントを取得する","    $statement = $database->query($sql);","    // ステートメントから SQL を実行し、レコードを取得する","    $records = $statement->fetchAll();","","    // ステートメントを破棄する","    $statement = null;","    // MySQLを使った処理が終わると、接続は不要なので切断する","    $database = null;","?>","<!DOCTYPE html>","<html lang=\"ja\">","    <head>","        <meta charset=\"utf-8\">","        <title>Booklist</title>","    </head>","    <body>","<?php","    // フォームデータ送受信確認用コード","    print '<div style=\"background-color: skyblue;\">';","    print '<p>動作確認用:</p>';","    print_r($_POST);","    print '</div>';","?>","        <h1><a href=\"booklist.php\">Booklist</a></h1>","        <h2>書籍の登録フォーム</h2>","        <form action=\"booklist.php\" method=\"post\">","            <input type=\"text\" name=\"book_title\" placeholder=\"書籍タイトルを入力\" required>","            <input type=\"submit\" name=\"submit_add_book\" value=\"登録\">","        </form>","        <h2>登録された書籍一覧</h2>","        <ul>","<?php","            if ($records) {","                foreach ($records as $record) {","                    $book_title = $record['book_title'];","?>","                    <li><?php print htmlspecialchars($book_title, ENT_QUOTES, 'UTF-8'); ?></li>","<?php","                }","            }","?>","        </ul>","    </body>","</html>"],"id":35}],[{"start":{"row":68,"column":7},"end":{"row":69,"column":0},"action":"insert","lines":["",""],"id":36}]]},"ace":{"folds":[],"scrolltop":483.7265625,"scrollleft":0,"selection":{"start":{"row":55,"column":12},"end":{"row":55,"column":12},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1526968003860,"hash":"d0344bd1b92faf1efb699214d91d3163a9ab84b6"}