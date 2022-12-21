<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AdminAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AdminAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="bg-theme bg-theme1">
<?php $this->beginBody() ?>

<div id="wrapper" role="main">

    <div id="sidebar-wrapper" data-simplebar="init" data-simplebar-auto-hide="true" class="active"><div class="simplebar-track vertical" style="visibility: hidden;"><div class="simplebar-scrollbar"></div></div><div class="simplebar-track horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar"></div></div><div class="simplebar-scroll-content" style="padding-right: 17px; margin-bottom: -34px;"><div class="simplebar-content" style="padding-bottom: 17px; margin-right: -17px;">
                <div class="brand-logo">
                    <a href="index.html">
                        <img src="../admin_assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
                        <h5 class="logo-text">Dashtreme Admin</h5>
                    </a>
                </div>
                <ul class="sidebar-menu do-nicescrol in">
                    <li class="sidebar-header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="index.html" class="active">
                            <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <a href="icons.html">
                            <i class="zmdi zmdi-invert-colors"></i> <span>UI Icons</span>
                        </a>
                    </li>

                    <li>
                        <a href="forms.html">
                            <i class="zmdi zmdi-format-list-bulleted"></i> <span>Forms</span>
                        </a>
                    </li>

                    <li>
                        <a href="tables.html">
                            <i class="zmdi zmdi-grid"></i> <span>Tables</span>
                        </a>
                    </li>

                    <li>
                        <a href="calendar.html">
                            <i class="zmdi zmdi-calendar-check"></i> <span>Calendar</span>
                            <small class="badge float-right badge-light">New</small>
                        </a>
                    </li>

                    <li>
                        <a href="profile.html">
                            <i class="zmdi zmdi-face"></i> <span>Profile</span>
                        </a>
                    </li>

                    <li>
                        <a href="login.html" target="_blank">
                            <i class="zmdi zmdi-lock"></i> <span>Login</span>
                        </a>
                    </li>

                    <li>
                        <a href="register.html" target="_blank">
                            <i class="zmdi zmdi-account-circle"></i> <span>Registration</span>
                        </a>
                    </li>

                    <li class="sidebar-header">LABELS</li>
                    <li><a href="javaScript:void();"><i class="zmdi zmdi-coffee text-danger"></i> <span>Important</span></a></li>
                    <li><a href="javaScript:void();"><i class="zmdi zmdi-chart-donut text-success"></i> <span>Warning</span></a></li>
                    <li><a href="javaScript:void();"><i class="zmdi zmdi-share text-info"></i> <span>Information</span></a></li>

                </ul>

            </div></div></div>

    <header class="topbar-nav">
        <nav class="navbar navbar-expand fixed-top">
            <ul class="navbar-nav mr-auto align-items-center">
                <li class="nav-item">
                    <a class="nav-link toggle-menu" href="javascript:void();">
                        <i class="icon-menu menu-icon"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <form class="search-bar">
                        <input type="text" class="form-control" placeholder="Enter keywords">
                        <a href="javascript:void();"><i class="icon-magnifier"></i></a>
                    </form>
                </li>
            </ul>

            <ul class="navbar-nav align-items-center right-nav-link">
                <li class="nav-item dropdown-lg">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
                        <i class="fa fa-envelope-open-o"></i></a>
                </li>
                <li class="nav-item dropdown-lg">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
                        <i class="fa fa-bell-o"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
                        <span class="user-profile"><img src="https://via.placeholder.com/110x110" class="img-circle" alt="user avatar"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li class="dropdown-item user-details">
                            <a href="javaScript:void();">
                                <div class="media">
                                    <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
                                    <div class="media-body">
                                        <h6 class="mt-2 user-title"><?= Yii::$app->user->identity->fullName ?></h6>
                                        <p class="user-subtitle"><?= Yii::$app->user->identity->email ?></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <a href="#" class="dropdown-item"><i class="icon-envelope mr-2"></i> Почта</a>
                        <li class="dropdown-divider"></li>
                        <a href="#" class="dropdown-item"><i class="icon-wallet mr-2"></i> Профиль</a>
                        <li class="dropdown-divider"></li>
                        <a href="#" class="dropdown-item"><i class="icon-settings mr-2"></i> Настройки</a>
                        <li class="dropdown-divider"></li>
                        <a href="/site/logout" class="dropdown-item"><i class="icon-power mr-2"></i> Выйти</a>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>

    <div class="clearfix"></div>

    <div class="content-wrapper">
        <div class="container-fluid">
            <?php if (!empty($this->params['breadcrumbs'])): ?>
                <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
            <?php endif ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </div>


    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>

    <footer class="footer">
        <div class="container">
            <div class="text-center">
                Copyright © 2018 Dashtreme Admin
            </div>
        </div>
    </footer>

</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
