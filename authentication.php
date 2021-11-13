<?php
    require_once 'connect.php';

    $email = mysqli_real_escape_string($connect, $_REQUEST['email']);
    $password = mysqli_real_escape_string($connect, $_REQUEST['password']);

    $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($result);
    $count = mysqli_num_rows($result);

    if($count == 1){
        echo "<h1><center> Log In Succesfull </center></h1> ";
    }else{
        echo "<h1> INVALID LOG IN FAILED </h1>";
    }

    mysqli_close($connect);
?>
