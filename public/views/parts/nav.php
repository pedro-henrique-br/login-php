<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <nav class="nav d-flex m-3 gap-5 w-100 align-items-center justify-content-end border-bottom">
    <ul class="nav nav-tabs pb-3 me-5 d-flex border-0" id="navId">
      <li class="nav-item">
        <a href="dashboard.php" class="nav-link">Dashboard</a>
      </li>
      <li id="tab2Id" class="nav-item">
        <a href="user.php" class="nav-link">User</a>
      </li>
      <li class="nav-item">
        <?php require 'utils/logout.php';
          echo "
          <form method='post'>
            <button type='submit' class='btn btn-danger'>Logout</button>
          </form>"; ?>  
      </li>
    </ul>
  </nav>

 
</body>
</html>