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
 ?>
</body>
</html>
