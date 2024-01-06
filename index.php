<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Vehicle registration System</title>
</head>

<body class="admin-body2">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="login.php">Admin Panel</a>
        <div class="ml-auto">
            <a class="navbar-text" href="login.php">Login</a>
        </div>
    </nav>

    <div class="container mt-3 text-white">
  <div class="row justify-content-center d-flex">
    <div class="col-md-6">
      <h2 class="text-center">Vehicle registration</h2>
      <form action="search.php" method="get" class="mt-3">
        <div class="form-group text-center">
          <label for="searchModel">Enter your license plate number and check if it is valid</label>
          <input type="text" name="searchModel" id="searchModel" class="form-control form-control-lg " required>
        </div>

        <div class="btn-container text-center">
          <button type="submit" class="btn btn-primary">Search</button>
        </div>
      </form>
    </div>
  </div>
</div>

   
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
