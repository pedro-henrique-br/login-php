<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>users</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<?php require "parts/nav.php" ?>
  <main class="w-100 h-100 justify-content-center align-items-center d-flex">
    <p class="fs-1 me-2 text-secondary-emphasis">Welcome back
      <p class="fs-1 fw-bolder text-primary-emphasis">
      <?php echo $printUsername() ?>
      </p>
    </p>
  </main>
</body>
</html>