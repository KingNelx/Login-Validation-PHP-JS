<?php
    require_once 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>List of Registered Users</title>
</head>
<body>
    <div class="container my-5">
    <table class="table">
  <thead>
    <tr>
    <h1> List of Registered Users </h1>
      <th scope="col">User Id</th>
      <th scope="col">User Email</th>
      <th scope="col">User Password</th>
    </tr>
  </thead>
  <tbody>
      
    <?php
      $sql = "SELECT * FROM users";
      $result = mysqli_query($connect, $sql);
      if(!$result){
        echo "NO QUERY WERE FOUND OR NO DATABASE IS MATCH";
      }else{
        while($row = mysqli_fetch_assoc($result)){
            $email = $row['email'];
            $password =$row['password'];
            echo '<tr>
            <th scope="row">'.$row['userID'].'</th>
            <td>'.$email.'</td>
            <td>'.$password.'</td>';
        }
      }
      mysqli_close($connect);
    ?>
</table>

        <button class="btn btn-success"><a href="index.php" class="text-light">Go Back</a></button>
    </div>
</body>
</html>
