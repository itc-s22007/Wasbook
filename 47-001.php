<?php
  $url = filter_input(INPUT_GET, 'url');
  if (empty($url)){
    $url = 'http://example.com/47/47-003.php';
  }
?><html>
<head><title>ログインしてください</title></head>
<body>
<form action="47-002.php" method="POST">
ユーザー名<input type="text" name="id"><br>
パスワード<input type="password" name="pwd"><br>
<input type="hidden" name="url"
value="<?php echo htmlspacialchars($url, ENT_COMPAT, 'UTF-8') ?>">
<input type="submit" value="ログイン">
</form>
</body>
</html>
