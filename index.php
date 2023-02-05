<?php
require_once('sql.php');
$init = mysqli_query($sql, 'SELECT * FROM users ORDER BY id ASC');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP</title>
</head>

<body>
  <h1><?php
  echo 'Hello World';
  ?></h1>
  <table border="1">
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>No Telepon</th>
      <th>Email</th>
    </tr>
    <?php
    while($data = mysqli_fetch_array($init)) {
      echo '<tr>';
      echo '<td>'.$data['id'].'</td>';
      echo '<td>'.$data['name'].'</td>';
      echo '<td>'.$data['phone'].'</td>';
      echo '<td>'.$data['email'].'</td>';
      echo '</tr>';
    }
    ?>
  </table>
</body>

</html>