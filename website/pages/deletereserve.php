<?php

if (isset($_POST["record"]) && !empty($_POST["record"])) {
  $record = intval($_POST["record"]);
  $conn = mysqli_connect("localhost", "levizit_user", "FrcbXw7ku-w%", "levizit_missspelt") or die("Couldn't connect to db server");
  $sql = "DELETE FROM reservations WHERE id=$record";
  if (!$result = $conn->query($sql)) {
    $err_msg = $err_msg.'There was an error running query[' . $conn->error . ']<br>';
  } else {
    header("Location: reservations.html");
    exit();
  }
}
?>
