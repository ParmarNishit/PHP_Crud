<?php
include 'connect.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add User</a></button>
        <table class="table table-light table-striped">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "select * from `users`";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $password = $row['password'];
                        $mobile = $row['mobile'];
                        echo '<tr>
                        <td>' . $name . '</td>
                        <td>' . $email . '</td>
                        <td>' . $password . '</td>
                        <td>' . $mobile . '</td>
                        <td>
                        <button class="btn btn-primary"><a href="update.php?id='.$id.'" class="text-light">Update</a></button>
                        <button class="btn btn-danger"><a href="delete.php?id='.$id.'" class="text-light">Delete</a></button>
                        </td>
                        </tr>';
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>