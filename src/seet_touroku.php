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
    <title>Document</title>
</head>
<body>
<?php
         $pdo=new PDO($connect,USER,PASS);

         $sql = "INSERT INTO sweets (sweets_mei,sweets_price) VALUE ($_POST['name'],$_POST['price']);"
?>

<p>商品が登録されました</p>

<a href="menu.php">メニューに戻る</a>


</body>
</html>