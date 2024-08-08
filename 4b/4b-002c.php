<?php
  $email = filter_input(INPUT_POST, 'mail');
  $h = popen('/usr/sbin/sendmail -t -i', 'w');
  if ($h === FALSE){
    die('ただ今混み合っております。しばらく立ってから..');
  }
  fwrite($h, <<<EndOfMail
To: $mail
From: webmaster@example.com
Subject: =?UTF-8?B?5Y+X44GR5LuY44GR44G+44GX44Gf?=
Content-Type: text/plain; charset="UTF-8"
Content-Trajsfer-Encoding: 8bit

お問い合わせを受け付けました
EndOfMail
);
  pclose($h);
?>
<body>
お問い合わせを受け付けました
</body>
