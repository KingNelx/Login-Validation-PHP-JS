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
        <h1>Log In</h1>
        <form name = "f1" action="authentication.php" onsubmit="return validation()" method="POST">
            <div class="mb-3">
              <label class="form-label">Email address</label>
              <input type="email" class="form-control"  placeholder = "Email" name="email">
              <div class="form-text">We'll never share your email with anyone else.</div>
            </div>
        
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control"  placeholder = "Password" name="password">
                <div class="form-text">We'll never share your Password with anyone else.</div>
              </div>

              <div class = "mb-3">
                <a href="createAccount.php" class="link-primary">Create Account</a>
                <div class="form-text">Create Account to Sign up.</div>
              </div>

            <button type="submit" class="btn btn-primary" name="submit">Sign up</button>
          </form>

          <script src="validation.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </div>
</body>
</html>
