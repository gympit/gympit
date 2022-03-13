<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>

<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'GymPit' . Html::img('@web/logo/logo1.png', ['class'=>'forumlogo', 'alt'=>'logo']) ,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-inverse navbar-expand-md navbar-dark bg-dark navbar-fixed-top',
        ],
    ]); 
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Главная', 'url' => ['/site/index']],
            ['label' => 'Каталог', 'url' => ['site/catalog']],
            ['label' => 'О Нас', 'url' => ['/site/about']],
            ['label' => 'Панель Администратора', 'url' => ['/problem'], 'visible' => Yii::$app->user->identity->admin==1],
            ['label' => 'Создать заказ', 'url' => ['/cabinet'], 'visible'=>!(Yii::$app->user->isGuest)&&Yii::$app->user->identity->admin==0],
            ['label' => 'Регистрация', 'url' => ['/user/create'],  'visible'=>Yii::$app->user->isGuest],
            Yii::$app->user->isGuest ? (
                ['label' => 'Вход', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Выйти (' . Yii::$app->user->identity->login . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>

    

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
      

    	<div class="container">
    		<div class="row menu_footer_and_contact">
	    		<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">

	    			<div class="footer_menu">
		    			<h3>Информация</h3>
		    			<ul>
		    				<li><a href="/site/about">О Нас</a></li>
		    				<li><a href="/site/catalog">Каталог</a></li>
		    			</ul>
	    			</div>
	    			<div class="footer_menu">
		    			<h3>Учетная запись</h3>
		    			<ul>
		    				<li><a href="/cabinet">Мои заказы</a></li>
		    			</ul>
	    			</div>
	    		</div>
	    		<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 contacts">
	    			<h3>Контакты</h3>
	    			<p><i class="glyphicon glyphicon-map-marker"></i>Адрес: ул. Чкалова, г. Феодосия</p>
	    			<p><i class="glyphicon glyphicon-phone-alt"></i>Служба поддержки: 7 (978) 000-00-00</p>
	    			<p><i class="glyphicon glyphicon-envelope"></i>E-mail: gympit@shop.ru</p>
	    		</div>
	    	</div>
	    
    	</div>
    </div>
    <div class="container-fluid footer">
    <div class="container">
        <p class="pull-left">&copy; Магазин спортивного питания "GymPit" <?= date('Y') ?></p>

      
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
