<?php
echo \yii\widgets\ListView::widget([
    'options' => [
        'class' => 'list-view',
        'id' => 'search_result'
    ],
    'itemView' => '_product', // отдельный файл представления
    'dataProvider' => $records
]);