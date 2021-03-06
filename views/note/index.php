<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\NoteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Notes');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="note-index">

    <p>
        <?= Html::a(Yii::t('app', 'Create Note'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemOptions' => ['class' => 'item'],
        'itemView' => function ($model) {
            return $this->render('note_template', [
                'model' => $model,
            ]);
        },
    ]) ?>

</div>
