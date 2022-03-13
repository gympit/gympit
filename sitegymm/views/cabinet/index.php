<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProblemSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Мои Заказы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="problem-index">

     <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Заказать питание', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

       
            'name',
            'timestamp',
        
            'text',
            'phone',
            'status',
            'mark',

            ['class' => 'yii\grid\ActionColumn',
            'template'=>'{view} {delete}'],
        ],
    ]); ?>


</div>
