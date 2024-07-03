<?php
namespace app\controllers;

use yii\filters\Cors;
use yii\rest\ActiveController;

class TodoController extends ActiveController
{
    public $modelClass = 'app\models\Todo';

    // Если вам нужно добавить аутентификацию или дополнительные настройки
    public function behaviors()
    {
        $behaviors = parent::behaviors();

        // Настройка CORS
        $behaviors['corsFilter'] = [
            'class' => Cors::className(),
            'cors' => [
                // Правила CORS здесь
                'Origin' => ['*'],
                'Access-Control-Request-Method' => ['GET', 'POST', 'PUT', 'PATCH', 'DELETE', 'HEAD', 'OPTIONS'],
                'Access-Control-Request-Headers' => ['*'],
            ],
        ];

        // Остальные настройки behaviors...

        return $behaviors;
    }
}
