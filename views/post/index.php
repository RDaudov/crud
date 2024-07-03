<h1>post</h1>

<?php
/** @var yii\web\View $this */
/** @var app\models\TestModel $model */
/** @var yii\bootstrap5\ActiveForm $form */

use yii\bootstrap5\ActiveForm;
use yii\helpers\Html;



$js = <<< JS
    $('#btn').on("click", function() {
        $.ajax({
           url: "index.php?r=post/index",
              data: {
                test: '123'
              },
              type: 'GET',
              success: function( result ) {
                $('#con').html(result)
              },
              error: function(e) {
                'err'
              }
        });
    });

    $('.close').on("click", function () {
        $(this).parent().remove()
    })
JS;

$this->registerJs($js, \yii\web\View::POS_END);
?>

<?php if ( Yii::$app->session->hasFlash('success') ): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo Yii::$app->session->getFlash('success'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>



<?php if ( Yii::$app->session->hasFlash('error') ): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?php echo Yii::$app->session->getFlash('error'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>

<!---->
<?php $form = ActiveForm::begin();?>
<?= $form->field($model, 'name')?>
<?= $form->field($model, 'email')?>
<?= $form->field($model, 'text')?>
<?= Html::submitButton('Submit', ['class' => 'submit']) ?>
<?php ActiveForm::end() ?>


<div>
    <button id="btn">123</button>
    <div id="con"></div>
</div>


