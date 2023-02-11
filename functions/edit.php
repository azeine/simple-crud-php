<?php
  require_once('./sql.php');

  if (isset($_POST['submit'])) {
    $pId = $_POST['id'];
    $pName = $_POST['name'];
    $pPhone = $_POST['phone'];
    $pEmail = $_POST['email'];
  
    $payload = mysqli_query($sql, "UPDATE users SET name='$pName',email='$pEmail',phone='$pPhone' WHERE id='$pId'");
    header("location: ../index.php");
  }

  $gId = $_GET['id'];
  $init = mysqli_query($sql, "SELECT * FROM users WHERE id = $gId");
  while ($data = mysqli_fetch_array($init)) {
    $gName = $data['name'];
    $gPhone = $data['phone'];
    $gEmail = $data['email'];
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
  <title>Edit Data</title>
</head>

<body class="px-8 md:px-24 lg:px-32 xl:px-64">
  <h1 class="font-bold text-6xl py-6 -tracking-wider">Edit the Data!</h1>
  <p class="leading-relaxed">You can edit user data here and the changes will be reflected in the main view Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit commodi tenetur, similique, quibusdam eaque minima ipsum asperiores ipsa voluptatibus quaerat recusandae deleniti ratione fugit. Iste nulla voluptatem eveniet? Dignissimos, eum.</p>
  <div class="flex my-6 flex-row justify-between items-center">
    <form action="edit.php" method="post">
      <input type="hidden" name="id" value=<?php echo $gId; ?>>
      <p class="font-bold">Nama</p>
      <input class="bg-gray-300 my-2 p-2 rounded-md" type="text" name="name" value=<?php echo $gName ?>>
      <p class="font-bold">Telepon</p>
      <input class="bg-gray-300 my-2 p-2 rounded-md" type="text" name="phone" value=<?php echo $gPhone ?>>
      <p class="font-bold">Email</p>
      <input class="bg-gray-300 my-2 p-2 rounded-md" type="text" name="email" value=<?php echo $gEmail ?>>
      <br>
      <button class="bg-black text-white p-2 px-6 my-4 rounded-md" type="submit" name="submit">Edit Data</button>
    </form>
    <img class="hidden w-1/2 max-h-96 sm:block" src="../images/edit.svg"></img>
  </div>
</body>

</html>