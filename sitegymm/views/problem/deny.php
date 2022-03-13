<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $model app\models\Problem */

$this->title = 'Отклонить заказ';
$this->params['breadcrumbs'][] = ['label' => 'Заказы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="problem-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="problem-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    
    <?= $form->field($model, 'mark')->textarea(['rows' => 6]) ?>

    <div class="form=group">
        <?= Html::submitButton('Отклонить', ['class'=>'btn btn-success']) ?>
    </div>

    <?php $form = ActiveForm::end(); ?>

</div>

</div>
