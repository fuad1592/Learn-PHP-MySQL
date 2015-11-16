<?php
error_reporting(0);
$dbhost = 'localhost';
$dbuser = 'fuadn';
$dbpass = 'nasrudin';
$koneksi = mysql_connect($dbhost, $dbuser, $dbpass);
if (!$koneksi) {
  echo "<script type='text/javascript'>alert('Gagal terhubung dengan database')</script>";
}
else {
  echo "<script type='text/javascript'>alert('Berhasil terhubung dengan Database')</script>";
}
?>
