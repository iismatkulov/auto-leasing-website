<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
?>
<div class="col-lg-6 align-self-auto" style="padding: 100px">
    <div class="row team-2 mb-50" style="padding: 30px">



    <?php $form = ActiveForm::begin([
        'id'=>'changepassword-form',
    ]);

 ?>
        <div class="col-md-12">
    <?= $form->field($model,'oldpass',['inputOptions'=>[
        'placeholder'=>'Old password'
    ]])->passwordInput() ?>
        </div>
        <div class="col-md-12">
    <?= $form->field($model,'newpass',['inputOptions'=>[
        'placeholder'=>'New password'
    ]])->passwordInput() ?>
        </div>
        <div class="col-md-12">
    <?= $form->field($model,'repeatnewpass',['inputOptions'=>[
        'placeholder'=>'Repeat new password'
    ]])->passwordInput() ?>
        </div>
    <div class="form-group">
        <div class="col-lg-offset-6 col-lg-4">
            <?= Html::submitButton('Change Password',[
                'class'=>'btn btn-primary'
            ]) ?>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>
</div>