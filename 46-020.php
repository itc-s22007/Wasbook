<?php
  session_start();
  $name = @$_SESSION['name'];
  $mail = @$_SESSION['mail'];
?><html>
<head><title>個人情報の入力</title></head>
<body>
<form action="46-021.php" method="POST">
指名:<input name="name" value="<?php echo htmlspecialchars($name, ENT_COMPAT, 'UTF-8'); ?>"><br>
メール:<input name="email" value="<?php echo htmlspecialchars($mail, ENT_COMPAT, 'UTF-8'); ?>"><br>
<input type="submit" value="確認">
</form>
</body>
</html>

