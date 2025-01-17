<?php 
use yii\bootstrap5\ActiveForm;
use yii\helpers\Html;

$this->title = 'Cadastro';
$this->params['breadcrumbs'][] = $this->title;
?>
<h1>Cadastro de Usuário</h1>
<p>Cadastre-se no site</p>
<div class="row">
    <div class="col-lg-5">
    <?php $form = ActiveForm::begin(); ?>
<?= $form->field($model, 'nome'); ?>
<?= $form->field($model, 'email'); ?>
<?= $form->field($model, 'telefone'); ?>
<?= Html::submitButton('Cadastrar', ['class' => 'btn btn-primary']); ?>
<?php ActiveForm::end(); ?>



    </div>

</div>