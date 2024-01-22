<?php

    session_start();

    $email = $_SESSION['email'];
    if(isset($email)){
        echo "Welcome " . $email;
    }
    else{
        header("location:login.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <a href="php/logout.php?user=<?Php echo $email ?>">Logout</a>
</body>
</html>