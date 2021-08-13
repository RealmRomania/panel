<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
include_once('db.php');
$stmt = $conn->prepare( 

    "SELECT * FROM users"); 

$stmt->execute(); 

$users = $stmt->fetchAll(); 

foreach($users as $user)  


$stmtt = $conn->prepare( 

    "SELECT * FROM servere"); 

$stmtt->execute(); 

$server = $stmtt->fetchAll(); 

foreach($server as $server)  

//$result = mysqli_query($conn,"SELECT * FROM servere");
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
<?php include 'imp/head.php' ?>
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->
<body class="vertical-layout vertical-menu-modern dark-layout  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="" data-layout="dark-layout">

<!-- BEGIN: HEADER -->
<div><?php include 'imp/header2.php'; ?></div>
<!-- END: HEADER -->
    <!-- BEGIN: Main Menu-->
    <div><?php include 'imp/mainmenu2.php'; ?></div>

    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card">
                                <div class="card-header flex-column align-items-start pb-0">
                                    <div class="avatar bg-light-primary p-50 m-0">
                                        <div class="avatar-content">
                                            <i data-feather="server" class="font-medium-5"></i> 
                                        </div>
                                    </div>
                                    <h2 class="font-weight-bolder mt-1"><?php echo $row["ip"];?></h2>
                                    <p class="card-text"><i class="fas fa-memory"></i> ‎‏‏‎ ‎‏‏‎<?php echo $row["RAM"]?> ‎‏‏‎GB RAM <br>
                                    <i class="fas fa-hdd"></i> ‎‏‏‎ ‎‏‏‎<?php echo $row["Spatiu"] ?> ‎‏‏‎ ‎‏‏‎SSD <br>
                                    <i class="fas fa-users"></i> ‎‏‏‎ ‎‏‏‎<?php echo $row["Players"] ?> ‎‏‏Online players</p>
                                </div>
                            </div>
                        </div>      



</div>
</div>
</div>
</div>
</div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <div><?php include 'imp/footer.php' ?></div>
    <!-- END: Footer-->
    <?php include 'imp/jsuri.php' ?>

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
</body>
<!-- END: Body-->

</html>