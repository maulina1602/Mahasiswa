<?php

if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $pass     = $_POST['password'];

    include 'connection.php';

    $result = mysqli_query($con, "SELECT * FROM user WHERE username = '$username'");
    $cek    = mysqli_num_rows($result);
    if($cek > 0) {
        session_start();
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        if(password_verify($pass, $row["password"])) {
            header('Location:admin/index.php');
            exit;
        }else if($pass == $row['password']){
            header('Location:admin/index.php');
            exit;
        }
    }
    $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
            
            <?php if(isset($error)) : ?>

            <div class="alert alert-danger alert-dismissiblr fade show" role="alert">
                <strong>Login gagal </strong>Periksa kembali Username dan Password
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>   
                </button>
            </div>
            <?php endif; ?>

            <div class="card">
            <div class="card-header bg-transparent mb-0">
                <h5 class="text-center">Login <span class="font-weight-bold text-primary">User</span>
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="form-group">
                        <input type="text" name="username" class="form-control" placeholder="Username">
                    </div>
                    <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>

                    <input type="submit" name="login" value="Login" class="btn btn-success btn-block">
                </form>
            </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>