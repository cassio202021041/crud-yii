<?php
namespace app\controllers;

use yii\web\Controller;

class HelloController extends Controller
{
    public function actionIndex()
    {
        return 'Hello World';
    }

    public function actionOi($nome, $sobrenome)
    {
        return 'oi ' . $nome . ' ' .$sobrenome;
    }
}