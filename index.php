<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $mailFrom = $_POST['email'];
  $message = $_POST['comments'];

$mailTo = "adamleewebdev@yahoo.com"; //cant sent to gmail
$headers = "From: $mailFrom";
$txt = "You have received an email from $name.\n\n $message";

  mail($mailTo, $txt, $headers);
  header("Location: index.php?mailsend");
  echo "Thank You!";
};
?>
