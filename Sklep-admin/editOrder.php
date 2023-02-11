<!DOCTYPE html>
<html lang="en">
<?php
require_once("Main.php");

if (isset($_SESSION["adminemail"]))
    ;
else {
    header('Location:login.php');
    $_SESSION["successLogin"] = "false";
    exit();
}
?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Blank</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Адмін панель</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Статистика</span></a>
                    
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="admins.php">
                    <i class="fa fa-users"></i>
                    <span>Адміністратори</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
<!-- Heading -->
<div class="sidebar-heading">
                Сайт
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Товар</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Дії з товарами :</h6>
                        <a class="collapse-item" href="addNewProduct.php">Додавання нового</a>
                        <a class="collapse-item" href="Product.php">Перегляд всіх</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsecategory"
                    aria-expanded="true" aria-controls="collapsecategory">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Категорії</span>
                </a>
                <div id="collapsecategory" class="collapse" aria-labelledby="headingcategory" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Дії з категоріями :</h6>
                        <a class="collapse-item" href="addNewCategory.php">Додавання нової</a>
                        <a class="collapse-item" href="allCategory.php">Перегляд всіх</a>
                    </div>
                </div>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
            Замовлення
            </div>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseorder"
                    aria-expanded="true" aria-controls="collapseorder">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Замовлення</span>
                </a>
                <div id="collapseorder" class="collapse" aria-labelledby="headingorder" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Дії з замовленнями :</h6>
                        <a class="collapse-item" href="searchOrder.php">Пошук замовлення</a>
                        <a class="collapse-item" href="allOrder.php">Перегляд всіх</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            

           

           

         

           

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Петро Моставчук</span>
                                <img class="img-profile rounded-circle" src="img/petro.jpg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Профіль(in dev)
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Налаштування(in dev)
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Логи(in dev)
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Вийти
                                </a>
                            </div>
                        </li>
                        
                     

                        

                        

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Редагування замовлення</h1>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Інформація про замовлення</h6>
                        </div>
                        <div class="card-body">
                            <form action="Main.php" method="post">
                            <input type="hidden" class="form-control form-control-user" id="id" name="id"
                                        value="<?php echo $_POST["id"]; ?>">
                                        <div class="form-group">
                                    <label>Адрес доставки</label>
                                    <input type="text" class="form-control form-control-user" id="address" name="address"
                                        placeholder="Введіть адрес доставки" required="true" value="<?php echo $_POST["address"]; ?>">
                                </div>
                                <hr>
                                <div class="form-group">
                                <label>Повідомлення від користувача</label>
                                    <input type="text" class="form-control form-control-user" id="messeg" name="messeg"
                                        placeholder="Введіть повідомлення" required="true" value="<?php echo $_POST["messeg"]; ?>">
                                </div>
                                <hr>
                                <div class="form-group">
                                <label>ПІБ користувача</label>
                                    <input type="text" class="form-control form-control-user" id="pib" name="pib"
                                        placeholder="Введіть ПІБ" required="true" value="<?php echo $_POST["pib"]; ?>">
                                </div>
                                <hr>
                                <div class="form-group">
                                <label>Статус замовлення</label>
                                    <input type="text" class="form-control form-control-user" id="status" name="status"
                                        placeholder="Введіть статус замовлення" required="true" value="<?php echo $_POST["status"]; ?>">
                                </div>
                                <hr>
                                <div class="form-group">
                                <label>Сума замовлення</label>
                                    <input type="text" class="form-control form-control-user" id="suma" name="suma"
                                        placeholder="Введіть статус замовлення" required="true" value="<?php echo $_POST["suma"]; ?>">
                                </div>
                                <hr>
                                <div class="form-group">
                                <label>Замовлення</label>
                                    <input type="text" class="form-control form-control-user" id="textOrder" name="textOrder"
                                        placeholder="Введіть статус замовлення" required="true" value="<?php echo $_POST["textOrder"]; ?>">
                                </div>
                                <hr>
                                <div class="form-group">
                                <label>Пошта</label>
                                    <input type="text" class="form-control form-control-user" id="email" name="email"
                                        placeholder="Введіть статус замовлення" required="true" value="<?php echo $_POST["email"]; ?>">
                                </div>

                              
                                <hr>
                                
                            
                                <div class="form-group">
                                <input type="submit"  id="save-edit-category-btn" name="save-edit-category-btn" class="btn btn-primary btn-user btn-block" value="Зберегти зміни">
                                    
                                    </input>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Dev by &copy; SKR SKR</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Готові вийти з адмін панелі?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Якщо ви готові завершити сесія вибиріть "Вийти" .</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Відмінити</button>
                    <a class="btn btn-primary" href="logout.php">Вийти</a>
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