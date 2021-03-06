<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DcmdUser */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dcmd-user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => 128, "$disabled"=>"true"])->label("用户名") ?>

    <?= $form->field($model, 'admin')->label('sa')->dropDownList([0=>"否", 1=>"是"]) ?>

    <?= $form->field($model, 'sa')->label('admin')->dropDownList([0=>"否",1=>"是"]) ?>

    <?= $form->field($model, 'depart_id')->dropDownList($depart)->label("部门") ?>

    <?= $form->field($model, 'tel')->textInput(['maxlength' => 128])->label("Tel") ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => 64])->label("Email") ?>

    <?= $form->field($model, 'comment')->textarea(['maxlength' => 512])->label("说明") ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '添加' : '修改', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
