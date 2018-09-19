<?php

if (isset($_POST['name'])) {
  $name = $_POST['name'];
}
if (isset($_POST['contact'])) {
  $contact = $_POST['contact'];
}


if (isset($_POST['submit'])) {
  $to = "info@cyberrafting.com";

  $body = "Name : ".$name."\nContact : ".$contact." ";
  if (mail($to,$subject,$body)) {
    echo "<script>alert('Thank You $name! We will contact you soon.');
    window.location.href = 'index.php'</script>";
  }
  else {
    echo "<script>alert('Query not processed, please try again after some time.');
    window.location.href = 'index.php'</script>";
  }
}

 ?>
