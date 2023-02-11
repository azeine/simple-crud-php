<?php
  require_once('./sql.php');

  if (isset($_POST['submit-click'])) {
    $pName = $_POST['i-name'];
    $pPhone = $_POST['i-phone'];
    $pEmail = $_POST['i-email'];

    $payload = mysqli_query($sql, "INSERT INTO users(name, phone, email) VALUES('$pName', '$pPhone', '$pEmail')");
    header('location: ../index.php');
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style/style.css">
  <link rel="preconnect" href="https://rsms.me/">
  <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
  <title>Add Data</title>
</head>

<body class="px-8 md:px-24 lg:px-32 xl:px-64">
  <h1 class="font-bold text-6xl py-6 -tracking-wider">Add Data!</h1>
  <p class="leading-relaxed">You can add user data here and the changes will be reflected in the main view Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit commodi tenetur, similique, quibusdam eaque minima ipsum asperiores ipsa voluptatibus quaerat recusandae deleniti ratione fugit. Iste nulla voluptatem eveniet? Dignissimos, eum.</p>
  <div class="flex my-6 flex-row justify-between items-center">
    <form action="insert.php" method="post" autocomplete="off">
      <p class="font-bold">Nama</p>
      <input class="bg-gray-300 my-2 p-2 rounded-md" type="text" name="i-name" required>
      <p class="font-bold">Telepon</p>
      <input class="bg-gray-300 my-2 p-2 rounded-md" type="text" name="i-phone" required>
      <p class="font-bold">Email</p>
      <input class="bg-gray-300 my-2 p-2 rounded-md" type="text" name="i-email" required>
      <br>
      <button class="bg-black text-white p-2 px-6 my-4 rounded-md" type="submit" name="submit-click">Add to Table</button>
    </form>
    <img class="hidden w-1/2 max-h-96 sm:block" src="../images/db.svg"></img>
  </div>
</body>

</html>