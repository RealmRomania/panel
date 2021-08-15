<!--
ai încercat-o..
mai bagi o fisă? aa, scuze.. stai să mă caut în buzunar și îți dau eu una
ne vedem mai pe seară :)
- andreiusq
-->

<?php
//include auth_session.php file on all user panel pages
include_once('db.php');
$stmt = $conn->prepare( 

    "SELECT * FROM users"); 

$stmt->execute(); 

$users = $stmt->fetchAll(); 

foreach($users as $user)  
//$result = mysqli_query($conn,"SELECT * FROM servere");
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->
<head>
<?php include 'imp/teamhead.php' ?>
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->
<body class="vertical-layout vertical-menu-modern dark-layout   footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="" data-layout="dark-layout">

<!-- BEGIN: HEADER -->

<!-- END: HEADER -->
    <!-- BEGIN: Main Menu-->


    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <center> <img src="https://cdn.realm.ro/logodoarcaalb.png"> </img>
            <h1> Vino în echipa noastră! </h1> <img src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/120/apple/285/purple-heart_1f49c.png" width="50"> </img> </center> <br> <hr> <br> <br>
           
        <center><p> Noi ne propunem să oferim o experiență încântătoare atât pentru cei care folosesc serviciile Realm, cât și pentru noi. Vrem ca locul nostru de muncă să aibă oameni la fel de diverși ca și comunitatea de utilizatori. Aici, munca depusă contează cu adevărat. Mergem mereu înainte, știind că vom găsi pe parcurs soluțiile potrivite. Și, înainte de toate, știm că nu putem munci decât cu empatie, bunătate și compasiune.

Toate valorile noastre ne ajută să creăm un produs mai bun, să luăm decizii mai bune și să încurajăm un mediu de lucru mai bun. Pe măsură ce continuăm să creștem, rămânem dedicați obiectivului de a construi o companie care să reprezinte lumea în care trăim și în care ne jucăm. Chiar ți-am aprecia ajutorul. </p></center>
</center>           <br> <br>
           
               
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card">
                                <div class="card-header flex-column align-items-start pb-0">
                                    <div class="avatar bg-light-primary p-50 m-0">
                                        <div class="avatar-content">
                                            <i data-feather="users" class="font-medium-5"></i>
                                        </div>
                                    </div>
                                    <h2 class="font-weight-bolder mt-1">Marketing Manager</h2>
                                    <p class="card-text">Remote</p> <br>
                                </div>
                                <button type="button" class="btn btn-primary" href="marketingapply">Aplică</button>
                            </div>
                        </div>
                                       
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card">
                                <div class="card-header flex-column align-items-start pb-0">
                                    <div class="avatar bg-light-primary p-50 m-0">
                                        <div class="avatar-content">
                                            <i data-feather="test" class="font-medium-5"></i>
                                        </div>
                                    </div>
                                    <h2 class="font-weight-bolder mt-1">Developer</h2>
                                    <p class="card-text">Remote</p> <br>
                                </div>
                                <button type="button" class="btn btn-primary" href="marketingapply">Aplică</button>
                            </div>
                        </div>
</div>
</div>
</div>
<br>
<br>
<br>
<br>

    <!-- END: Content-->


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