<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DcmdUserGroup */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Dcmd User Groups', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dcmd-user-group-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary', (Yii::$app->user->getIdentity()->admin == 1) ? "" : "style"=>"display:none"])]) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            (Yii::$app->user->getIdentity()->admin == 1) ? "" : "style"=>"display:none"])
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'uid',
            'gid',
            'comment',
            'utime',
            'ctime',
            'opr_uid',
        ],
    ]) ?>

</div>
