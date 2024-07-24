<?php
  session_start();
  $name = $_SESSION['name'] = filter_input(INPUT_POST, 'name');
  $mail = $_SESSION['mail'] = filter_input(INPUT_POST, 'mail');
?><head><title>個人情報の入力</title></head>
<body>
<form action="46-022.php" method="POST">
氏名:<input name="name" value="<?php echo htmlspecialchars($name, ENT_COMPAT, 'UTF-8'); ?>"><br>
メール:<input name="email" value="<?php echo htmlspecialchars($mail, ENT_COMPAT, 'UTF-8'); ?>"><br>
<input type="submit" value="登録"><br>
<a href="46-020.php">戻る</a>
</form>
</body>
</html>

