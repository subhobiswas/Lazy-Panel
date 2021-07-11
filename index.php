<?php
include 'includes.php';
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(login($username,$password))
    {
        header('location:main.php');
    }
    else{
        $error='<div class="alert alert-danger m-2">Wrong username or password</div>';
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lazy | Login</title>
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        .card {
            margin: 0 auto;
            /* Added */
            float: none;
            /* Added */
            margin-bottom: 10px;
            /* Added */
            margin-top: 200px;
        }

        body {
            background-color: #4e73df !important;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card" style="width: 300px;">
        <?php echo (isset($error)) ? $error : ''; ?>
            <div class="card-title">
                <h1 class="text-center" style="font-weight:bold;size:35px">Lazy</h1>
            </div>
            <?php echo (isset($error)) ? $error : ''; ?>
            <hr class="sidebar-divider my-0">
            <div class="card-body">
                <form method="POST" action="">
                    <div class="form-group">
                        <label for="">Username :</label>
                        <input type="text" name="username" id="username" class="form-control" placeholder="username">
                    </div>
                    <div class="form-group">
                        <label for="">Password :</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="password">
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary w-100">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>
</body>

</html>