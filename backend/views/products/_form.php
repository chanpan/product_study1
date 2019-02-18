<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Products */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pro_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pro_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pro_detail')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'pro_price')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'created_date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
