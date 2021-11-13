<?php

    $connect = new mysqli ('localhost:3309', 'root', '', 'login');

    if(!$connect){
        die(mysqli_error($connect));
    }
?>
