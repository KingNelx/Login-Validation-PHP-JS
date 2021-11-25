<?php
    require_once 'connect.php';
    
    $userID = $_GET['id'];
    if(isset($_REQUEST['id'])){
        $sql = "DELETE FROM users WHERE userID = $userID";
        $result = mysqli_query($connect, $sql);

        if(!$result){
            die(mysqli_error($connect));
        }else{
            header('location: showAllUsers.php');
        }
    }

    mysqli_close($connect);
?>
