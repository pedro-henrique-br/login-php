<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Register</title>
</head>

<body class="bg-light">
  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-md-4 w-50">
        <h3 class="text-center">Register</h3>
        <?php if (isset($error) && $error === "user not found") {
          echo "<div class='alert alert-danger'>$error</div>";
        } ?>
        <?php if (isset($error) && $error === "username is already in use") {
          echo "<div class='alert alert-danger'>$error</div>";
        } ?>
        <?php if (isset($sucess) && $error === "") {
          echo "<div class='alert alert-danger'>$sucess</div>";
        } ?>
        <form method="POST">
          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" required>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">confirm your password</label>
            <input type="password" class="form-control" id="confirm-password" name="confirm-password" required>
            <?php if (isset($error) && $error === "passwords don't match") {
              echo "<div class='alert alert-danger'>$error</div>";
            } ?>
          </div>
          <button type="submit" class="btn btn-primary w-100">Register</button>
        </form>
        <div class="mt-3 text-center">
          <p>Already have an account? <a href="login.php">Login</a></p>
        </div>
      </div>
    </div>
  </div>
</body>

</html>