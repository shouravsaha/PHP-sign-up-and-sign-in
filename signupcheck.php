<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $gmail = $_POST['gmail'];
        $password = $_POST['password'];
        $password2 = $_POST['password2'];

        $data = $fname." ".$lname." ".$gmail." ".$password." ".$password2;
        
        $fileopen = fopen("data.txt","a");
        fwrite($fileopen,$data);
        fwrite($fileopen,PHP_EOL);
        fclose($fileopen);
        header("location:./sign-in.php"); 
    }
?>