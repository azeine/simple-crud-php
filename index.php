<?php
  require_once('./functions/sql.php');
  $init = mysqli_query($sql, 'SELECT * FROM users ORDER BY id ASC');

  $rowStyle = 'border-y odd:bg-gray-100';
  $cellStyle = 'px-5 py-4 whitespace-nowrap';
  $editIcon = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>';

  $delIcon = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 6h18"></path><path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path><path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>';
  $btnStyle = 'bg-black text-white p-2 rounded-md mr-2';
  $editLayout = $cellStyle . ' flex';
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
  <div class="flex flex-row items-center justify-between">
    <h1 class="font-bold text-6xl py-6 -tracking-wider">Data View!</h1>
    <a class="bg-black text-white p-2 rounded-md" href="./functions/insert.php">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
    </a>
  </div>
  <p class="leading-relaxed">Here's all the data that displayed from the database, you can add, edit, and delete, Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim, alias perspiciatis. Debitis, voluptatem numquam. Eaque itaque fuga suscipit sit, libero, nulla commodi architecto quae est dignissimos nobis laboriosam vero nihil!</p>
  <div class="py-4 overflow-x-auto">
    <table class="text-left w-full">
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
          echo "<tr class='$rowStyle'>";
          echo "<td class='$cellStyle'>" . $data['id'] . '</td>';
          echo "<td class='$cellStyle'>" . $data['name'] . '</td>';
          echo "<td class='$cellStyle'>" . $data['phone'] . '</td>';
          echo "<td class='$cellStyle'>" . $data['email'] . '</td>';
          echo "<td class='$editLayout'><a class='$btnStyle' href='functions/edit.php?id=$data[id]'>$editIcon</a><a class='$btnStyle' href='functions/delete.php?id=$data[id]'>$delIcon</a></td></tr>";
          echo '</tr>';
        } ?>
      </tbody>
    </table>
  </div>
  </div>
</body>

</html>