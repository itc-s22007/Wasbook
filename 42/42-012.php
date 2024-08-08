<?php
  mb_regex_encoding('UTF-8');
  $p = filter_input(INPUT_GET, 'p');
  if (mb_ereg('\A[a-zA-Z0-9]{1, 5}\z', $p) === false){
    die('１文字以上５文字以下の英数技を入力してください');
  }
?>
