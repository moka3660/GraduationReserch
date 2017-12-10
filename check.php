<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="content-type" content="text/html">
  <title>トップページ</title>
</head>
<body>

<?php
  $nickname=$_POST['nickname'];
  $naiyou=$_POST['naiyou'];
  $hitokoto=$_POST['hitokoto'];
  $nickname = htmlspecialchars($nickname);
  $naiyou = htmlspecialchars($naiyou);
  $hitokoto = htmlspecialchars($hitokoto);

  if($nickname=='' || $naiyou=='' || $hitokoto=='')
  {
    print '未入力の項目があります。</br>';
  }
  else
  {
    print 'OK!';
    print $nickname;
    print '様<br>';
    print $naiyou;
    print '<br>';
    print $hitokoto;
  }

  if($nickname=='' || $naiyou=='' || $hitokoto=='')
  {
    print '<form>';
    print '<input type="button" onclick="history.back()" value="戻る">';
    print '</form>';
  }
  else
  {
    print '<form method="post" action="thanks.php">';
    print '<input name="nickname" type="hidden" value="'.$nickname.'">';
    print '<input name="naiyou" type="hidden" value="'.$naiyou.'">';
    print '<input name="hitokoto" type="hidden" value="'.$hitokoto.'">';
    print '<input type="button" onclick="history.back()" value="戻る">';
    print '<input type="submit" value="OK">';
    print '</form>';
  }

 ?>

</body>
</html>
