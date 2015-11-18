<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8">
    <title>Data Buku</title>
    <style type="text/css">
      table{
        border-collapse: collapse;
        width: 90%;
      }
      th{
        height: 30px;
      }
      td{
        height: 30px;
      }
    </style>
  </head>
  <body>
    <?php
    include "koneksi-tokobuku.php";
    $query = "select * from buku";
    $execute = mysql_query($query);
    ?>
    <table border="1px">
      <tr>
        <th>ISBN</th>
        <th>JUDUL BUKU</th>
        <th>TANGGAL TERBIT</th>
        <th>HARGA BUKU</th>
      </tr>
      <tr>
        <?php
        while ($row = mysql_fetch_array($execute)) {
        ?>
        <td><?php echo $row['buku_isbn']; ?></td>
        <td><?php echo $row['buku_judul']; ?></td>
        <td><?php echo $row['buku_tglterbit']; ?></td>
        <td><?php echo $row['buku_harga']; ?></td>
      </tr>
      <?php
      }
      ?>
    </table>
  </body>
  <?php
  mysql_free_result($execute);
  mysql_close($connection);
  ?>
</html>
