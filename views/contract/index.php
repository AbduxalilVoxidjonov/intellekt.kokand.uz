<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\ContractForm $model */

$this->title = 'Shartnoma tuzish';
?>

<div class="contract-form">

<!--    <h1>--><?php //= Html::encode($this->title) ?><!--</h1>-->
<!---->
<!--    --><?php //$form = ActiveForm::begin(); ?>
<!---->
<!--    --><?php //= $form->field($model, 'client_name')->textInput(['maxlength' => true])->label('F.I.SH') ?>
<!---->
<!--    --><?php //= $form->field($model, 'passport_id')->textInput(['maxlength' => true])->label('Passport ID') ?>
<!---->
<!--    --><?php //= $form->field($model, 'jshshr')->textInput(['maxlength' => true])->label('JSHSHR') ?>
<!---->
<!--    --><?php //= $form->field($model, 'phone')->textInput(['maxlength' => true])->label('Telefon raqam') ?>
<!---->
<!--    --><?php //= $form->field($model, 'course')->textInput(['maxlength' => true])->label('Kurs nomi') ?>
<!---->
<!--    --><?php //= $form->field($model, 'price')->textInput(['type' => 'number'])->label('Narxi (so‘m)') ?>
<!---->
<!--    --><?php //= $form->field($model, 'register_date')->input('date')->label('Ro‘yxatga olingan sana') ?>
<!---->
<!--    <div class="form-group">-->
<!--        --><?php //= Html::submitButton('Shartnoma yaratish', ['class' => 'btn btn-success']) ?>
<!--    </div>-->

    <?php ActiveForm::end(); ?>

</div>
