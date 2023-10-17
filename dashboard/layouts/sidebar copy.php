<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index.php" class="logo logo-dark">
            <span class="logo-sm">
                <img src="assets/images/logos/coat-of-arms.png" alt="" height="75">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logos/coat-of-arms.png" alt="" height="200">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index.php" class="logo logo-light">
            <span class="logo-sm">
                <img src="assets/images/logos/coat-of-arms.png" alt="" height="75">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logos/coat-of-arms.png" alt="" height="200">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span><?= $lang['t-menu'] ?></span></li>
               
                <li class="nav-item">
                    <a class="nav-link menu-link" href="index.php" data-bs-toggle="" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                        <i data-feather="grid" class="icon-dual"></i> <span><?= $lang['t-dashboards'] ?></span>
                    </a>

                </li> <!-- end Dashboard Menu -->

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarLayouts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                        <i class="mdi mdi-view-carousel-outline"></i> <span><?= $lang['t-applications'] ?></span><span class="badge badge-pill bg-danger" data-key="t-new"><?= $lang['t-new'] ?></span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarLayouts">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="delegates.php" class="nav-link"><?= $lang['t-delegates'] ?></a>
                            </li>
                            <li class="nav-item">
                                <a href="local-staff.php" class="nav-link"><?= $lang['t-local-application'] ?></a>
                            </li>

                        </ul>
                    </div>
                </li> <!-- end Dashboard Menu -->

     
                <li class="nav-item">
                    <a class="nav-link menu-link" href="security-checks.php" data-bs-toggle="" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                        <i data-feather="shield" class="icon-dual"></i> <span><?= $lang['t-security'] ?></span>
                    </a>

                </li> <!-- end Dashboard Menu -->










                </li> <!-- end Dashboard Menu -->

                <li class="menu-title"><i class="ri-more-fill"></i> <span><?= $lang['t-pages'] ?></span></li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarAuth" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAuth">
                        <i data-feather="users" class="icon-dual"></i> <span><?= $lang['t-authentication'] ?></span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarAuth">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#sidebarSignIn" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSignIn"><?= $lang['t-signin'] ?>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarSignIn">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="auth-signin-basic.php" class="nav-link"><?= $lang['t-basic'] ?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-signin-cover.php" class="nav-link"><?= $lang['t-cover'] ?></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarSignUp" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSignUp"><?= $lang['t-signup'] ?>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarSignUp">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="auth-signup-basic.php" class="nav-link"><?= $lang['t-basic'] ?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-signup-cover.php" class="nav-link"><?= $lang['t-cover'] ?></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a href="#sidebarResetPass" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarResetPass"><?= $lang['t-password-reset'] ?>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarResetPass">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="auth-pass-reset-basic.php" class="nav-link"><?= $lang['t-basic'] ?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-pass-reset-cover.php" class="nav-link"><?= $lang['t-cover'] ?></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a href="#sidebarchangePass" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarchangePass" data-key="t-password-create">
                                    Password-create
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarchangePass">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="auth-pass-change-basic.php" class="nav-link" data-key="t-basic">
                                                <?= $lang['t-basic'] ?> </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-pass-change-cover.php" class="nav-link" data-key="t-cover">
                                                <?= $lang['t-cover'] ?> </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a href="#sidebarLockScreen" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLockScreen"><?= $lang['t-lock-screen'] ?>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarLockScreen">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="auth-lockscreen-basic.php" class="nav-link"><?= $lang['t-basic'] ?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-lockscreen-cover.php" class="nav-link"><?= $lang['t-cover'] ?></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a href="#sidebarLogout" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLogout"><?= $lang['t-logout'] ?>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarLogout">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="auth-logout-basic.php" class="nav-link"><?= $lang['t-basic'] ?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-logout-cover.php" class="nav-link"><?= $lang['t-cover'] ?></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarSuccessMsg" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSuccessMsg"><?= $lang['t-success-message'] ?>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarSuccessMsg">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="auth-success-msg-basic.php" class="nav-link"><?= $lang['t-basic'] ?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-success-msg-cover.php" class="nav-link"><?= $lang['t-cover'] ?></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarTwoStep" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTwoStep"><?= $lang['t-two-step-verification'] ?>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarTwoStep">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="auth-twostep-basic.php" class="nav-link"><?= $lang['t-basic'] ?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-twostep-cover.php" class="nav-link"><?= $lang['t-cover'] ?></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarErrors" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarErrors"><?= $lang['t-errors'] ?>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarErrors">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="auth-404-basic.php" class="nav-link"><?= $lang['t-404-basic'] ?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-404-cover.php" class="nav-link"><?= $lang['t-404-cover'] ?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-404-alt.php" class="nav-link"><?= $lang['t-404-alt'] ?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-500.php" class="nav-link"><?= $lang['t-500'] ?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-offline.php" class="nav-link" data-key="t-offline-page">
                                                Offline-page </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>


            </ul>
        </div>
        <!-- Sidebar -->
    </div>
    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>