<?php

namespace app\models;

use yii\db\ActiveRecord;

class TestModel extends ActiveRecord
{

    public static function tableName()
    {
        return 'posts';
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'email' => 'E-mail',
            'text' => 'Текст',
        ];
    }

    public function rules()
    {
        return [
            [['name', 'text'], 'required'],
            ['email', 'safe']
        ];
    }

}