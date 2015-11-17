<?php
error_reporting(0);
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'kemahasiswaan';

$koneksi = mysql_connect($dbhost, $dbuser, $dbpass);
if (!$koneksi) {
  echo "<script type='text/javascript'>alert('Gagal terhubung dengan database')</script>";
}
else {
  //echo "<script type='text/javascript'>alert('Berhasil terhubung dengan Database')</script>";
}

$dbselect = mysql_select_db($dbname);
if (!$dbselect) {
  echo "<script type='text/javascript'>alert('Database tidak ada')</script>";
}
else {
  //echo "<script type='text/javascript'>alert('Database ada')</script>";
}
?>
