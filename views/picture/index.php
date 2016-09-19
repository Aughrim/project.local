<?php

use yii\helpers\Html;
use yii\grid\GridView;
use  yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PictureSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Фотогаллерея';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="picture-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить изображение', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'author',
            'date_create',
            'date_add',
            'comment',
            'link',
            'gallery',
            //'link:image',
            [
                'label' => 'Картинка',
                'format' => 'raw',
                'value' => function($data){
                    return Html::img(($data->link),[
                        'alt'=>'yii2 - картинка в gridview',
                        'style' => 'width:100px;'
                    ]);
                },
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
