<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- 
        Page Wrapper
        ส่วน warpper ของ page
    -->
    <div id="wrapper">
        <?php include('./templates/sidebar.php') ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <?php include('./templates/navbar.php') ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- 
                        Page Heading 
                        ส่วนหัวที่ระบุว่า page นี้มี headding อะไร
                    -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800 ml-4">TopBand</h1>
                    </div>

                    <!-- ใส่ content ส่วนนี้ -->
                    <div>
                        <?php include('./topbanner.php') ?>
                    </div>
                    <div>
                        <?php include('./chanel.php') ?>
                    </div>
                    <div>
                        <?php include('./banproduct.php') ?>
                    </div>
                    <div>
                        <?php include('./bannercenter.php') ?>
                    </div>
                    <div>
                        <?php include('./popular.php') ?>
                    </div>
                    <div>
                        <?php include('./sponser.php') ?>
                    </div>
                    <div>
                        <?php include('./ourupdate.php') ?>
                    </div>
                    <!-- / ใส่ content ส่วนนี้ -->
                    <br>
                    <br>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <?php include('./footer.php') ?>
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <?php include('./templates/logout_medal.php') ?>
    <?php include('./templates/script.php') ?>

</body>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Sarabun:ital,wght@0,300;1,300&display=swap');
    *{
        font-family: 'Sarabun', sans-serif;
    }
    .container-fluid{
        padding: 2px;
    }
    </style>

</html>