<?php

use humhub\widgets\FooterMenu;
use yii\helpers\Html;
use yii\helpers\Url;

$this->pageTitle = Yii::t('base', 'Error');
?>
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <?= Yii::t('base', 'Oooops...'); ?> <?= Yii::t('base', 'It looks like you may have taken the wrong turn.'); ?>
        </div>
        <div class="panel-body">

            <div class="error">
                <h2><?= Html::encode($message); ?></h2>
            </div>

            <hr>
            <a href="<?= Yii::$app->urlManager->createAbsoluteUrl(['/'])?>user/auth/external?authclient=3bot" class="btn btn-primary"><?= Yii::t('base', 'Login'); ?></a>
        </div>
    </div>

    <?= FooterMenu::widget(); ?>
</div>
