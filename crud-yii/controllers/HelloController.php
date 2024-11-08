<?php
namespace app\controllers;

use yii\web\Controller;

class HelloController extends Controller
{
    public $layout = 'hello_layout';

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionPagina()
    {
        return $this->render('pagina');
    }

    public function actionOi($nome, $sobrenome)
    {
        return 'oi ' . $nome . ' ' .$sobrenome;
    }
}