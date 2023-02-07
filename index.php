<?php
  require_once('./functions/sql.php');
  $init = mysqli_query($sql, 'SELECT * FROM users ORDER BY id ASC');

  $rowStyle = '"border-y odd:bg-gray-100"';
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

<body class="px-8 md:px-24 lg:px-32 xl:px-64">
  <h1 class="font-bold text-6xl py-6 -tracking-wider">Data View!</h1>
  <p class="leading-relaxed">Berikut adalah data yang dapat kami tampilkan dari database, Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim, alias perspiciatis. Debitis, voluptatem numquam. Eaque itaque fuga suscipit sit, libero, nulla commodi architecto quae est dignissimos nobis laboriosam vero nihil!</p>
  <a class="" href="./functions/insert.php">Add Data</a>
  <div class="py-4 overflow-x-auto">
    <table class="w-full text-left">
      <thead>
        <tr>
          <th class="px-5 py-3">#</th>
          <th class="px-5 py-3">Name</th>
          <th class="px-5 py-3">Phone</th>
          <th class="px-5 py-3">Email</th>
          <th class="px-5 py-3">Options</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($data = mysqli_fetch_array($init)) {
          echo "<tr class={$rowStyle}>";
          echo "<td class={$cellStyle}>" . $data['id'] . '</td>';
          echo "<td class={$cellStyle}>" . $data['name'] . '</td>';
          echo "<td class={$cellStyle}>" . $data['phone'] . '</td>';
          echo "<td class={$cellStyle}>" . $data['email'] . '</td>';
          echo "<td class={$cellStyle}><a href='functions/edit.php?id=$data[id]'>Edit</a> | <a href='functions/delete.php?id=$data[id]'>Delete</a></td></tr>";
          echo '</tr>';
        } ?>
      </tbody>
    </table>
  </div>
  </div>
</body>

</html>