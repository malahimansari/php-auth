<?php 

include 'php/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    if (empty($fullname) || empty($email) || empty($password)) {
        echo 'All fields are required.';
    }
    else{
        $sql = "INSERT INTO users (full_name, email, password) VALUES ('$fullname', '$email', '$password')";
        $result = mysqli_query($conn, $sql);
        if($result){
            echo "Registration Successfull";
        }
        else{
            echo 'Registration failed. Please try again.';
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <form class="container" method="post" action="php/register.php">
        <h2>Register</h2>
        <div class="mb-3">
          <label for="exampleInputName" class="form-label">Full Name</label>
          <input type="text" class="form-control" id="exampleInputName" name="fullname" required>
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail" name="email" aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
        </div>
        <button type="submit" class="btn btn-dark">Register</button>
      </form>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>