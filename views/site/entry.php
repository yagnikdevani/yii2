<?php
//use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<?php //$form = ActiveForm::begin(); ?>

    <?= Html::input('text', 'name', $name, ['class' => $name]) ?>
    
    <?= Html::input('text', 'email', $email, ['class' => $email]) ?>
    

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>

<?php //ActiveForm::end(); ?>