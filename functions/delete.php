<?php
  require_once('./sql.php');
  $id = $_GET['id'];
  $result = mysqli_query($sql, "DELETE FROM users WHERE id = $id");
  header('location: ../index.php');
?>