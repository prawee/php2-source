<?php
use yii\grid\GridView;
use yii\data\ArrayDataProvider;

$provider = new ArrayDataProvider([
    'allModels' => $data,
    'pagination' => [
        'pageSize' => 2,
    ],
    'sort' => [
        'attributes' => ['name'],
    ],
]);

echo GridView::widget([
    'dataProvider' => $provider,
    'columns' => ['name']
]);
?>