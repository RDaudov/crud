<?php
namespace app\controllers;

use app\models\Category;
use yii\web\Response;
use Yii;
use app\models\TestModel;

class PostController extends AppController
{
    public $layout = 'base';

    public function beforeAction($action)
    {
        $this->enableCsrfValidation = false;
        return parent::beforeAction($action);
    }

    public function actionIndex()
    {
        if (Yii::$app->request->isAjax) {
            return 213;
        };

        $model = new TestModel();
//        $model->name = 'Автор';
//        $model->email = 'mail@email.com';
//        $model->text = 'Текс сообщения';
//        $model->save();
        if ( $model->load( Yii::$app->request->post() )  ) {
                if ( $model->save() ) {
                    Yii::$app->session->setFlash('success', 'успех');
                    return $this->refresh();
                }else{
                    Yii::$app->session->setFlash('error', 'очифка');
                }
        }

        return $this->render('index', compact( 'model'));
    }

    public function actionShow() {

        $categories = Category::find()->with('products')->all();
        return $this->render('show', compact('categories'));
    }

    public function actionSendReq() {
        Yii::$app->response->format = Response::FORMAT_JSON;
        return [
            'data' => '$this->action'
        ];
    }

}