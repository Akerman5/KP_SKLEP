<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Адмін панель</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">З поверненням!</h1>
                                    </div>
                                    <form class="user" action="Main.php" method="post">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="email" name="email" aria-describedby="emailHelp"
                                                placeholder="Введіть пошту...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="password" name="password" placeholder="Пароль">
                                        </div>
                                        
                                        <input type="submit"  id="login-btn" name="login-btn" class="btn btn-primary btn-user btn-block" value="Увійти">
                                           
                                        </input>
                                        
                                        
                                    </form>
                                    <hr>
                                    <?php
          if(isset($_SESSION["enterCheck"]))if($_SESSION["enterCheck"]=="false")
                            {
                                echo
							              "<div class='alert alert-warning' role='alert'>
                                Неправильний логін або пароль.
                            </div>
                            ";
                            $_SESSION["enterCheck"]="true";
                            }
                            if(isset($_SESSION["successLogin"]))if($_SESSION["successLogin"]=="false")
                            {
                                echo
							              "
                            <div class='alert alert-warning' role='alert'>
                               Щоб продовжити вам потрібно авторизуватися.
                            </div>";
                            $_SESSION["successLogin"]="true";
                            }
                            ?>
                                    <div class="text-center">
                                        <a class="small" href="register.php">Немає акаунта? Створіть!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>