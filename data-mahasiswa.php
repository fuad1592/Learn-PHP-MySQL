<!DOCTYPE html>
<!-- Menampilkan Data MAHASISWA dalam bentuk Tabel -->
<html lang="en-US">
  <head>
    <meta charset="utf-8">
    <title>Halaman Data Mahasiswa</title>
    <style type="text/css">
      table{
        border-collapse: collapse;
      }
      th{
        height: 32px;
      }
      td{
        height: 32px;
      }
    </style>
  </head>
  <body>
    <?php
    include "test-koneksi.php";
    $query = "SELECT * FROM MAHASISWA";
    $execute = mysql_query($query);
    ?>
    <table border="1px" width="680">
      <tr>
        <th>Nomor Mahasiswa</th>
        <th>Nama Mahasiswa</th>
        <th>Kode Jurusan</th>
        <th>Alamat</th>
      </tr>
      <tr>
        <?php
        while ($row = mysql_fetch_array($execute)) {
        ?>
        <td><?php echo "$row[no_mhs]"; ?></td>
        <td><?php echo "$row[nama]"; ?></td>
        <td><?php echo "$row[kd_jur]"; ?></td>
        <td><?php echo "$row[alamat]"; ?></td>
      </tr>
      <?php
      }
      ?>
    </table>
  </body>
</html>
