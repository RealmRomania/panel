<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="../../../html/ltr/vertical-menu-template-dark/index.html"><span class="brand-logo">
<img src="https://cdn.realm.ro/logodoarcaalb.png"></img>
            </span>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
            </ul>
        </div> 
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <?php if($user["Admin"] == 1 ): ?> 
            <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Administrativ</span>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="./clienti.php"><i class="far fa-user-circle"></i><span class="menu-title text-truncate" data-i18n="Clients">Clienți</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="./anunt.php"><i class="fas fa-bullhorn"></i><span class="menu-title text-truncate" data-i18n="Annoucements">Anunțuri</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="./anunt.php"><img src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/120/apple/285/crown_1f451.png" width="20" height= "20"></img><span class="menu-title text-truncate" data-i18n="Admin Zone">‎‏‏‎ ‎‏‏‎ ‎Admin</span></a>
                </li>
       <?php elseif($user["Admin"] == 0): echo '';?>
            <?php endif; ?>
                <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Zonă Administrativă</span>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="./main.php"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Home">Acasă</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="./servere.php"><i class="fas fa-server"></i><span class="menu-title text-truncate" data-i18n="Chat">Servere</span><span class="badge badge-light-success badge-pill ml-auto mr-1">Actualizare</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="https://phpmyadmin.realm.ro/"><i class="fas fa-handshake"></i><span class="menu-title text-truncate" data-i18n="Todo">PHPMyAdmin</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="./tichete.php"><i data-feather="mail"></i><span class="menu-title text-truncate" data-i18n="Email">Tichete</span><span class="badge badge-light-warning badge-pill ml-auto mr-1">2</span></a></a>
                </li>
                <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Util</span> </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/documentation"><i data-feather="folder"></i><span class="menu-title text-truncate" data-i18n="Documentation">Documentație</span></a>
                </li>
            </ul>
        </div>
    </div>