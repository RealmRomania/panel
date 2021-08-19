<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
include_once('db.php');
include("imp/foreaches.php");


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
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Forum</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Acasă</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Forum</a>
                                    </li>
                                    <li class="breadcrumb-item active"><a href="#">Listă<a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrumb-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="app-todo.html"><i class="mr-1" data-feather="check-square"></i><span class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><i class="mr-1" data-feather="message-square"></i><span class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><i class="mr-1" data-feather="mail"></i><span class="align-middle">Email</span></a><a class="dropdown-item" href="app-calendar.html"><i class="mr-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-detached content-left">
                <div class="content-body">
                    <!-- Blog List -->
                    <div class="blog-list-wrapper">
                        <!-- Blog List Items -->
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="card">
                                    </div>
                                </div>
                               </div>
                               
                               <section id="display-headings" class="card">
                    <div class="card-header">
                        <h4 class="card-title">Administrativ</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-mx-0 table-borderless mb-0">
                            <tbody>
                                <tr>
                                    <td>
                                    <div class="col-lg-60 col-md-60 col-12">
                                            <div class="card shadow-none border cursor-pointer">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between">
                                                    </div>
                                                    <div class="my-1">
                                                        <h5><?php 
                                                        echo $row['categoryName']; ?></h5>
                                                    </div>
                                                  <right>
                                                    <div class="avatar-wrapper">
                                                   <p><bold><span class="avatar"> <img class="round" src="https://cdn.discordapp.com/attachments/803357448139702292/875093594812342292/kylie-jenner-bikini-3.png" width="30" height="30"> </img></span> Instalare VPS </p></bold>
                                               
                                                </div>
                                                <div class="d-flex justify-content-between align-items-left">
                                            <a href="page-blog-detail.html#blogComment">
                                                <div class="d-flex align-items-left">
                                                    <i data-feather="message-square" class="font-medium-1 text-body mr-50"></i>
                                                    <span class="text-body font-weight-bold">subiecte</span>
                                                </div>
                                            </a> </right>
                                            <a href="page-blog-detail.html" class="font-weight-bold"></a>
                                        </div>
                                    </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <div class="col-lg-60 col-md-60 col-12">
                                            <div class="card shadow-none border cursor-pointer">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between">
                                                    </div>
                                                    <div class="my-1">
                                                        <h5><?php echo $forum['categoryName']; ?></h5>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-left">
                                            <a href="page-blog-detail.html#blogComment">
                                                <div class="d-flex align-items-left">
                                                    <i data-feather="message-square" class="font-medium-1 text-body mr-50"></i>
                                                    <span class="text-body font-weight-bold"><?php echo $forum['categoryPosts'] ?> <?php if($forum['categoryPosts'] < 10): echo 'subiecte'; elseif($forum['categoryPosts'] < 99): echo '(de) subiecte'; ?></span>
                                                </div>
                                                <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr> 
                                    <td>
                                    <div class="col-lg-60 col-md-60 col-12">
                                            <div class="card shadow-none border cursor-pointer">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between">
                                                    </div>
                                                    <div class="my-1">
                                                        <h5><?php echo $forum['categoryName']; ?></h5>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-left">
                                            <a href="page-blog-detail.html#blogComment">
                                                <div class="d-flex align-items-left">
                                                    <i data-feather="message-square" class="font-medium-1 text-body mr-50"></i>
                                                    <span class="text-body font-weight-bold"><?php echo $forum['categoryPosts'] ?> <?php if($forum['categoryPosts'] < 10): echo 'subiecte'; elseif($forum['categoryPosts'] < 99): echo '(de) subiecte'; ?></span>
                                                </div>
                                                <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <div class="col-lg-60 col-md-60 col-12">
                                            <div class="card shadow-none border cursor-pointer">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between">
                                                    </div>
                                                    <div class="my-1">
                                                        <h5>Test 4</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
                        <!--/ Blog List Items -->

                    </div>
                    <!--/ Blog List -->

                </div>
            </div>
            <div class="sidebar-detached sidebar-right">
                <div class="sidebar">
                    <div class="blog-sidebar my-2 my-lg-0">
                    <div class="card text-center">
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $user['username']; ?> <br> <?php if($user['Admin'] == 1): echo '<img src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/120/apple/285/crown_1f451.png" width="40" height= "40"></img>'; elseif($user['Admin'] == 0): echo ''; endif; ?></h4>
                                <p class="card-text">
                                <img class="2" src="https://cdn.discordapp.com/attachments/803357448139702292/875093594812342292/kylie-jenner-bikini-3.png" width="150" height="350"> </img>
                                <br> <br>
                                <i class="fas fa-user-plus"></i> Reputație: <?php echo $user['rep'] ?>
                                <br> 
                                <i class="fas fa-comment-dots"></i> Răspunsuri: <?php echo $user['posts'] ?>
                                <br>
                                <i class="fas fa-folder-plus"></i> Subiecte create: <?php echo $user['topics'] ?>
                                <br>
                                Despre: <?php echo $user['About'] ?>
                                </p>
                                <p class="card-text">
                                    <small class="content-header-title float-center"><a href="">Vizitează profilul tău</a></small>
                                </p>
                            </div>
                        </div>
</div>
</div>
</div>
                        <!--/ Categories -->
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <?php include 'imp/footer.php' ?>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="app-assets/vendors/js/ui/jquery.sticky.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->

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