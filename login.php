<?php
include 'connect.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  
        <button class="btn btn-info"><a href="index.php" class="text-light text-decoration-none">HOME</a></button>
   
    <div class="container my-5">
        <form class="dropdown-menu p-4">
            <div class="mb-3">
                <label for="exampleDropdownFormEmail2" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleDropdownFormEmail2" placeholder="email@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleDropdownFormPassword2" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="Password">
            </div>
            <div class="mb-3">
                <div class="form-check">
                <input type="checkbox" class="form-check-input" id="dropdownCheck2">
                <label class="form-check-label" for="dropdownCheck2">
                    Remember me
                </label>
                </div>
            </div>
                <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
    </div>
</body>
</html>