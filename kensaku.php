<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="content-type" content="text/html">
  <title>トップページ</title>
</head>
<body>
  検索結果 <br>
<?php
  $code=$_POST['code'];

  $dsn = 'mysql:dbname=phpkiso;host=localhost';
  $user = 'root';
  $password = '';
  $dbh = new PDO($dsn,$user,$password);
  $dbh->query('SET NAMES utf8');

  $sql = 'SELECT*FROM anketo WHERE code=?';
  $stmt = $dbh->prepare($sql);
  $data[]=$code;
  $stmt->execute($data);

  while(1)
  {
    $rec = $stmt->fetch(PDO::FETCH_ASSOC);
    if($rec==false)
    {
      break;
    }
    print $rec['code'];
    print $rec['nickname'];
    print $rec['naiyou'];
    print $rec['hitokoto'];
    print '<br/>';
  }

  $dbh = null;
 ?>
 <br>
 <a href="menu.html">メニューに戻る</a>
</body>
</html>
