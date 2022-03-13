<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Панель Администратора';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавление категорий', ['/category'], ['class' => 'btn btn-success']) ?>
    </p>

    
    <p>
        <?= Html::a('Управление статусом заказов', ['/problem'], ['class' => 'btn btn-success']) ?>
    </p>

    <p>
        <?= Html::a('Добавление стран', ['/type'], ['class' => 'btn btn-success']) ?>
    </p>


</div>


