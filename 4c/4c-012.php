<?php
define('UPLOADPATH', '/var/upload');

function get_upload_file_name($tofile) {
  $info = pathinfo($tofile);
  $ext = strtolower($info['extension']);
  if ($ext != 'pdf'){
    die('拡張子はpdfを指定ください');
  }
$imgurl = '4c-013.php?file=' . basename($tofile);
?>
