<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProblemSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Заказы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="problem-index">

    <h1><?= Html::encode($this->title) ?></h1>

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
        'template'=>'{deny} | {close}',
    'buttons'=>[
        'deny'=> function ($url, $model){
            if($model->status=='Новый'){
                return Html::a('Отклонить',['/problem/deny', 'id'=>$model->id]);
            }
        },
        'close'=> function ($url, $model){
            if($model->status=='Новый'){
                return Html::a('Закрыть',['/problem/close', 'id'=>$model->id]);
            }
        },
    ]],
        ],
    ]); ?>


</div>
