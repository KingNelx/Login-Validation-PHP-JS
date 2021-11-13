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
    <title>Log In System</title>
</head>
<body>
    <div class = "container my-5">
        <h1>Create Account</h1>
        <form method="POST">
            <div class="mb-3">
              <label class="form-label">Email address</label>
              <input type="email" class="form-control" required placeholder = "Email" name="email">
              <div class="form-text">We'll never share your email with anyone else.</div>
            </div>
        
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" required placeholder = "Password" name="password">
                <div class="form-text">We'll never share your Password with anyone else.</div>
              </div>

              <div class = "mb-3">
                <a href="createAccount.php" class="link-primary">Create Account</a>
                <div class="form-text">Create Account to Sign up.</div>
              </div>

            <button type="submit" class="btn btn-primary" name="submit">Create Account</button>
          </form>

          </div>
</body>
</html>


<?php
    if(isset($_POST['submit'])){
        $email = mysqli_real_escape_string($connect, $_REQUEST['email']);
        $password = mysqli_real_escape_String($connect, $_REQUEST['password']);

        $sql = "INSERT INTO user (email, password) VALUES ('$email', '$password')";
        $result = mysqli_query($connect, $sql);

        if(!$result){
            die(mysqli_error($connect));
        }else{
            header('location: index.php');
        }
    }

    mysqli_close($connect);
?>  
