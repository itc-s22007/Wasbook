<?php
$tmpfile = $_FILES["imgfile"]["tmp_name"];
$tofile = $_FILES["imgfile"]["name"];

if (! is_uploaded_file($tmpfile)) {
  die('ファイルがアップロードされていません');
} else if (! move_uploaded_file($tmpfile, 'img/' . $tofile)) {
  die('ファイルをアップロードできません')
}
$imgurl = 'img/' . urlencode($tofile);
?>
<body>

