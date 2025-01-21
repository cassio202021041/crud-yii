<?php
namespace app\controllers;

use app\models\CadastroForm;
use yii\web\Controller;

class FormController extends Controller
{
    public function actionCadastro()
    {
        $model = new CadastroForm;

        if ($model->load(\Yii::$app->request->post()) && $model->validate()) {
            // Adicione aqui a lógica para salvar os dados ou realizar outras ações
        }

        return $this->render('cadastro', [
            'model' => $model
        ]);
    }
}