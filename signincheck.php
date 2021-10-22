<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $gmail = $_POST['gmail'];
  $password = $_POST['password'];
  $fileopen = fopen("data.txt", "a+");
  while (!feof($fileopen)) {
    $file = fgets($fileopen);
    $arraygap = explode(" ",$file);
    if ($gmail == $arraygap[2] && $password == $arraygap[3]) {
      header("location:./home.php");
    }
  }
  fclose($file);
}
?>