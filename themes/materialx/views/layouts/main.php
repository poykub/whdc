<?php
use app\themes\materialx\MaterialAsset;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use yii\bootstrap\Alert;
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
<div class="wrap">
    <?= $this->render(
        'header.php'
    ) ?>

    <div class="container" style="padding-top: 80px;">
        <?=
        Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ])
        ?>
        <?= $content ?>
    </div>

    <!--Footer-->
    <footer class="page-footer center-on-small-only primary-color-dark">

        <!--Footer Links-->
        <div class="container-fluid">
            <div class="row kanit">

                <!--First column-->
                <div class="col-md-6 col-md-offset-1">
                    <h5 class="title">About</h5>
                    <p>Wangsaphung Health Datacenter เป็นระบบแสดงข้อมูลผู้มารับบริการ โดยการเชื่อมโยงผ่านโปรแกรม EMR โดยเป็นการเชื่อมโยงมูลระหว่าง โรงพยาบาลกับโรงพยาบาลส่งเสริมสุขภาพ ภายในเขตอำเภอวังสะพุง.</p>
                </div>
                <!--/.First column-->

                <!--Second column-->
                <div class="col-md-2 col-md-offset-1">
                    <h5 class="title">How to</h5>
                    <ul>
                        <li><a href="#!">วิธีสมัครเข้าใช้งาน</a></li>
                        <li><a href="#!">การดูข้อมูล</a></li>
                        <li><a href="#!">เข้าสู่ระบบไม่ได้?</a></li>
                    </ul>
                </div>
                <!--/.Second column-->

                <!--Third column-->
                <div class="col-md-2">
                    <h5 class="title">Connect</h5>
                    <ul>
                        <li><a href="#!">Facebook</a></li>
                        <li><a href="#!">Email</a></li>
                        <li><a class="white-text" href="http://www.wanghospital.com" target="_blank">Wangsaphung Hospital</a></li>
                    </ul>
                </div>
                <!--/.Third column-->
            </div>
        </div>
        <!--/.Footer Links-->

        <!--Copyright-->
        <div class="footer-copyright kanit">
            <div class="container">
                &copy;<?= date('Y') ?>  Wangsaphung Hospital All rights reserved. Theme by <a href="http://fezvrasta.github.io/bootstrap-material-design" class="right" target="_blank">FEDERICO ZIVOLO</a>
            </div>
        </div>
        <!--/.Copyright-->

    </footer>
    <!--/.Footer-->

    <?php
    $this->registerJsFile('//code.jquery.com/jquery-1.10.2.min.js');
    $this->registerJsFile('//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js');
    $this->registerCssFile("http://fonts.googleapis.com/icon?family=Material+Icons");
    $this->registerCssFile("https://fonts.googleapis.com/css?family=Kanit");
    $this->registerCssFile("//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css");
    ?>
    <script>
        /*$(function () {
            $.material.init();
        });*/
    </script>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
