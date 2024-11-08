<?php
namespace app\models;

class CadastroForm extends \yii\base\Model
{
    public $nome;
    public $telefone;
    public $email;

    public function rules()
    {
        return[
            [['nome','telefone', 'email'], 'required'],
            ['email', 'email'],
            ['telefone', 'number']
        ];
    }

    public function attributeLabels()
    {
        return[
            'nome' => 'Seu Nome:'
        ];
    }
}