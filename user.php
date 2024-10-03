<?php
include 'connect.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $mobile = $_POST['mobile'];

    $sql = "insert into `users` (name,email,password,mobile) values ('$name','$email','$password','$mobile')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location:/crud');
    } else {
        die(mysqli_error($con));
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <form method="post" class="w-50">
            <div class="mb-4 my-3">
                <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off">
            </div>
            <div class="mb-4">
                <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off">
            </div>
            <div class="mb-4">
                <input type="text" class="form-control" placeholder="Enter your mobile" name="mobile" autocomplete="off">
            </div>
            <div class="mb-4">
                <input type="password" class="form-control" placeholder="Enter your password" name="password">
            </div>
            <div class="text-center">
                <button type="submit" name="submit" class="btn btn-primary w-25">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>