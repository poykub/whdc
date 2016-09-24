<?php
use app\themes\material\MaterialAsset;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use yii\helpers\Url;

MaterialAsset::register($this);

//$asset_path = Yii::$app->assetManager->getPublishedUrl('@app/themes/material/assets');

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="initial-scale=1.0, width=device-width" name="viewport">
    <link rel="shortcut icon" href="<?php echo \Yii::$app->request->BaseUrl ?>/img/fav.ico" type="image/x-icon"/>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="navbar-fixed">
    <nav class="light-blue lighten-1" role="navigation">
        <div class="nav-wrapper container">
            <a id="logo-container" href="<?= Yii::$app->homeUrl; ?>" class="brand-logo kanit">WPH Datacenter</a>
            <ul class="right hide-on-med-and-down kanit">
                <li><a href="<?= Yii::$app->homeUrl; ?>">หน้าหลัก</a></li>
                <?php if (Yii::$app->user->isGuest) { ?>
                    <li><a href="index.php?r=user/security/login">เข้าสู่ระบบ</a></li>
                    <li><a href="index.php?r=user/registration/register">สมัครสมาชิก</a></li>
                <?php } ?>
                <?php if (!Yii::$app->user->isGuest) { ?>
                    <li>
                        <a class="dropdown-button" href="#!" data-activates="menu1">เมนู<i
                                class="material-icons right">arrow_drop_down</i>
                        </a>
                    </li>
                    <?php if(Yii::$app->user->can('admin')){ ?>
                    <li>
                        <a class="dropdown-button" href="#!" data-activates="system">จัดการระบบ<i
                                class="material-icons right">arrow_drop_down</i>
                        </a>
                    </li>
                    <?php } ?>
                    <li>
                        <a class="dropdown-button" href="#!" data-activates="user">ผู้ใช้งาน<i
                                class="material-icons right">arrow_drop_down</i>
                        </a>
                    </li>
                <?php } ?>
                <li><a href="index.php?r=site/about">เกี่ยวกับเรา</a></li>
            </ul>
            <!-- Dropdown Trigger -->
            <?php if (Yii::$app->user->isGuest) { ?>
                <ul id="dropdown1" class="dropdown-content">
                    <li><a href="#!">เข้าสู่ระบบ</a></li>
                    <li class="divider"></li>
                    <li><a href="#!">ลงทะเบียนใหม่</a></li>
                </ul>
            <?php } else { ?>
                <ul id="menu1" class="dropdown-content">
                    <li><a href="<?= Url::to(['/user/security/logout']) ?>">เมนู 1</a></li>
                    <li><a href="<?= Url::to(['/user/security/logout']) ?>">เมนู 2</a></li>
                    <li><a href="<?= Url::to(['/user/security/logout']) ?>">เมนู 3</a></li>
                    <li class="divider"></li>
                    <li><a href="<?= Url::to(['/user/security/logout']) ?>">เมนู 4</a></li>
                    <li><a href="<?= Url::to(['/user/security/logout']) ?>">เมนู 5</a></li>
                </ul>
                <ul id="user" class="dropdown-content">
                    <li><a href="<?= Url::to(['/user/security/logout']) ?>" data-method="post">ออกจากระบบ
                            (<?php echo Yii::$app->user->identity->username ?>)</a>
                    </li>
                    <li><a href="<?= Url::to(['/user/settings/profile']) ?>">โปรไฟล์</a></li>
                    <li><a href="<?= Url::to(['/user/settings/account']) ?>">ข้อมูลส่วนตัว</a></li>
                    <?php if(Yii::$app->user->can('admin')){ ?>
                    <li class="divider"></li>
                    <li><a href="<?= Url::to(['/site/index']) ?>">จัดการระบบ</a></li>
                    <?php } ?>
                </ul>
                <ul id="system" class="dropdown-content">
                    <li><a href="<?= Url::to(['/user/admin/index']) ?>">ผู้ใช้งาน</a></li>
                    <li><a href="<?= Url::to(['/rbac']) ?>">กำหนดสิทธิ</a></li>
                    <li><a href="<?= Url::to(['/user/security/logout']) ?>">เมนู 3</a></li>
                    <li class="divider"></li>
                    <li><a href="<?= Url::to(['/user/security/logout']) ?>">เมนู 4</a></li>
                    <li><a href="<?= Url::to(['/user/security/logout']) ?>">เมนู 5</a></li>
                </ul>
            <?php } ?>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        </div>
    </nav>
</div>

<div class="container">
    <?= $content ?>
</div>

<footer class="page-footer orange">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">About</h5>
                <p class="grey-text text-lighten-4">WPH Datacenter เป็นระบบแสดงข้อมูลผู้มารับบริการ โดยการเชื่อมโยงผ่านโปรแกรม EMR ซึ่งเชื่อมข้อมูลระหว่าง โรงพยาบาลกับโรงพยาบาลส่งเสริมสุขภาพ ภายในเขตอำเภอวังสะพุง.</p>


            </div>
            <div class="col l3 s12">
                <h5 class="white-text">How to</h5>
                <ul>
                    <li><a class="white-text" href="#!">วิธีสมัครเข้าใช้งาน</a></li>
                    <li><a class="white-text" href="#!">การดูข้อมูล</a></li>
                    <li><a class="white-text" href="#!">เข้าสู่ระบบไม่ได้?</a></li>
                </ul>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Connect</h5>
                <ul>
                    <li><a class="white-text" href="#!">Facebook</a></li>
                    <li><a class="white-text" href="#!">Email</a></li>
                    <li><a class="white-text" href="http://www.wanghospital.com:8088/dhdc" target="_blank">WPH DHDC</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright kanit">
        <div class="container">
            &copy;<?= date('Y') ?>  Wangsaphung Hospital All rights reserved.
            <a class="grey-text text-lighten-4 right" href="http://www.yiiframework.com">Power by Yii Framework 2 | Theme by Materialize</a>

        </div>
    </div>
</footer>

<?php
$this->registerJsFile('https://code.jquery.com/jquery-2.1.1.min.js');
$this->registerCssFile("http://fonts.googleapis.com/icon?family=Material+Icons");
$this->registerCssFile("https://fonts.googleapis.com/css?family=Kanit");
?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
