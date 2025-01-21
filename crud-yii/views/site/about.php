<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Bem-vindo à página Sobre. Você pode modificar o seguinte arquivo para personalizar seu conteúdo:
    </p>

    <code><?= __FILE__ ?></code>
</div>