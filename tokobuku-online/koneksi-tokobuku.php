<?php
$dbhost = "localhost";
$dbuser = "tokobuku";
$dbpass = "toko";
$dbname = "bukudb";

$connection = mysql_connect($dbhost, $dbuser, $dbpass);
if (!$connection) {
  echo "<script type='text/javascript'>alert('Gagal terhubung dengan Host');</script>";
}
else {
  // echo "<script type='text/javascript'>alert('Berhasil terhubung dengan Host');</script>";
}

$select_db = mysql_select_db($dbname);
if (!$select_db) {
  echo "<script type='text/javascript'>alert('Gagal tersambung dengan Database');</script>";
}
else {
  // echo "<script type='text/javascript'>alert('Berhasil terhubung dengan Database');</script>";
}
?>
