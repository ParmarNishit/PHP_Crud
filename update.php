<?php
include 'connect.php';
$id = $_GET['id'];
$sql = "select * from `users` where id = $id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$password = $row['password'];
$mobile = $row['mobile'];

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $mobile = $_POST['mobile'];

    $sql = "update `users` set id = $id, name='$name', email='$email', mobile='$mobile', password='$password' where id = $id";
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
                <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off" value="<?php echo $name; ?>">
            </div>
            <div class="mb-4">
                <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off" value="<?php echo $email; ?>">
            </div>
            <div class="mb-4">
                <input type="text" class="form-control" placeholder="Enter your mobile" name="mobile" autocomplete="off" value="<?php echo $mobile; ?>">
            </div>
            <div class="mb-4">
                <input type="password" class="form-control" placeholder="Enter your password" name="password" value="<?php echo $password; ?>">
            </div>
            <div class="text-center">
                <button type="submit" name="submit" class="btn btn-primary w-25">Update</button>
            </div>
        </form>
    </div>
</body>

</html>