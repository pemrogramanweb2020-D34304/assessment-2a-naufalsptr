<?php
$conn = mysqli_connect("localhost", "root", "", "ass1");
$makanan = query("SELECT * FROM makanan");
function query($query)
{
  global $conn;
  $result = mysqli_query($conn, "SELECT * FROM  makanan");
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function queryPesan($query)
{

  global $conn;
  $result = mysqli_query($conn, "SELECT * FROM  pesanan");
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
} mysqli_query($conn, $query);
return mysqli_affected_rows($conn);


?>

<!DOCTYPE html>
<html>
<head>
	<title>ass2</title>
</head>
<body>
    <h1>Pemesanan Makanan</h1>
    <table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>ID</th>
        <th>Nama Makanan</th>
        <th>Harga Makanan</th>
        <th>Stok Makanan</th>
    </tr>

    <?php $i = 1;  ?>
    <?php foreach ($makanan as $row) : ?>
      <tr>
        <td><?= $i++; ?></td>

        <td><?= $row["id"]; ?></td>
        <td><?= $row["nama_makanan"]; ?></td>
        <td><?= $row["harga"]; ?></td>
        <td><?= $row["stok"]; ?></td>
      </tr>

    <?php endforeach; ?>
    </table>
    <form action="" method="POST">
    <ul>
      <li>
        <label for="nama_makanan">
          Nama Makanan
          <input type="text" name="nama_makanan" id="nama_makanan" required>
        </label>
      </li>
      <li><button type="submit" name="submit">Submit</button></li>
    </ul>
  </form>
</body>
</html>