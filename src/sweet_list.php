<?php
const SERVER = 'mysql220.phy.lolipop.lan';
const DBNAME = 'LAA1517440-final';
const USER ='LAA1517440';
const PASS = '2201021';
$connect = 'mysql:host='. SERVER . ';dbname='.DBNAME. ';charset=utf8';
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>スイーツ一覧</title>
</head>
<body>
    <h2>スイーツ一覧</h2>

    <table border="1">
        <tr>
            <th>id</th><th>スイーツ名</th><th>値段</th>
</tr>
<?php
         $pdo=new PDO($connect,USER,PASS);
         foreach($pdo->query('select * from sweets') as $row){
            echo '<tr>';
            echo '<td>',$row['sweets_id'],'</td>';
            echo '<td>',$row['sweets_mei'],'</td>';
            echo '<td>',$row['sweets_price'],'</td>';
            echo '</tr>';
            echo "\n";
         }
         ?>
         </table>

         <a href="menu.php">メニューに戻る</a>
</body>
</html>