<?php
namespace app\controllers;

use app\models\CadastroForm;
use yii\base\Controller;

class FormController extends \yii\web\Controller
{
    public function actionCadastro()
    {
        $model = new CadastroForm;
        return $this->render('cadastro', [
            'model' => $model
        ]);
    }
}