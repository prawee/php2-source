<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Category;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\News */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_time')->textInput() ?>

    <?= $form->field($model, 'place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'detail')->textarea(['rows' => 6]) ?>

    <?php
    $categories = Category::find()->where(['is_active'=>1])->asArray()->all();
    $categoryList = ArrayHelper::map($categories, 'id', 'name');
    // print_r($categoryList);
    ?>
    <?= $form->field($model, 'category_id')->dropDownList($categoryList, ['prompt' => 'Select Category']) ?>

    <?= $form->field($model, 'photo')->fileInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'video')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
