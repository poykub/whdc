<?php
use app\themes\materialui\MaterialAsset;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use yii\helpers\Url;
use yii\bootstrap\Alert;

MaterialAsset::register($this);

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
    <!-- ie --> <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="page-brand">
<?php $this->beginBody() ?>

<?= $this->render(
    'header.php'
) ?>
<?= $this->render(
    'nav.php'
) ?>

<main class="content">
    <div class="content-header ui-content-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-push-3 col-sm-10 col-sm-push-1">
                    <h1 class="content-heading kanit"><?= Html::encode($this->title) ?></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-lg-push-3 col-sm-10 col-sm-push-1">
                <?= $content ?>
            </div>
        </div>
    </div>
</main>

<?= $this->render(
    'footer.php'
) ?>

<!-- js -->
<?php
//$this->registerJsFile('https://code.jquery.com/jquery-2.1.1.min.js');
$this->registerJsFile('https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js');
$this->registerCssFile("http://fonts.googleapis.com/icon?family=Material+Icons");
$this->registerCssFile("https://fonts.googleapis.com/css?family=Kanit");
?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
