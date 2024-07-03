<?php

namespace app\models;

use yii\db\ActiveRecord;

class Todo extends ActiveRecord
{
    public static function tableName()
    {
        return 'todos'; // Замените на имя своей таблицы в базе данных
    }

    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['title'], 'required'],
            [['title'], 'string', 'max' => 255],
        ];
    }
}
