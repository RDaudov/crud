<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'hello';
$this->params['breadcrumbs'][] = $this->title;


 $js = <<< JS
    $('#btn').on("click", function() {
        $.ajax({
           url: "index.php?r=site/hello",
              data: {
                test: '123'
              },
              type: 'POST',
              success: function( result ) {
                console.log(result)  
              },
              error: function(e) {
                console.log(e)
              }
        });
    });
JS;

$this->registerJs($js, \yii\web\View::POS_END);

?>
<div>
    <button id="btn">123</button>
</div>


