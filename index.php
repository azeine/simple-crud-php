<?php
require_once('sql.php');
$init = mysqli_query($sql, 'SELECT * FROM users ORDER BY id ASC');

$rowStyle = '"border-y"';
$cellStyle = '"px-5 py-4 whitespace-nowrap"'
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href="./style/style.css">
  <title>PHP</title>
</head>

<body class="px-8 lg:px-32 xl:px-64">
  <div class="overflow-x-auto">
    <table class="w-full text-left">
      <thead>
        <tr>
          <th class="px-5 py-3">No.</th>
          <th class="px-5 py-3">Nama</th>
          <th class="px-5 py-3">No. Telepon</th>
          <th class="px-5 py-3">Email</th>
        </tr>
      </thead>
      <tbody>
        <?php while($data = mysqli_fetch_array($init)) {
          echo "<tr class={$rowStyle}>";
          echo "<td class={$cellStyle}>".$data['id'].'</td>';
          echo "<td class={$cellStyle}>".$data['name'].'</td>';
          echo "<td class={$cellStyle}>".$data['phone'].'</td>';
          echo "<td class={$cellStyle}>".$data['email'].'</td>';
          echo '</tr>';
        } ?>
      </tbody>
    </table>
  </div>
</div>
</body>

</html>