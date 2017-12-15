<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="content-type" content="text/html">
  <title>トップページ</title>
</head>
<body>
  thanks
<?php
  $dsn = 'mysql:dbname=phpkiso;host=localhost';
  $user = 'root';
  $password = '';
  $dbh = new PDO($dsn,$user,$password);
  $dbh->query('SET NAMES utf8');

  $nickname=$_POST['nickname'];
  $naiyou=$_POST['naiyou'];
  $hitokoto=$_POST['hitokoto'];
  $nickname = htmlspecialchars($nickname);
  $naiyou = htmlspecialchars($naiyou);
  $hitokoto = htmlspecialchars($hitokoto);

  print $nickname;
  print '<br>';
  print $naiyou;
  print '<br>';
  print $hitokoto;

  $sql = 'INSERT INTO anketo (nickname,naiyou,hitokoto)VALUES("'.$nickname.'","'.$naiyou.'","'.$hitokoto.'")';
  $stmt = $dbh->prepare($sql);
  $stmt->execute();

  $dbh = null;
 ?>
</body>
</html>
