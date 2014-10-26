<?php
/**
 * Created by JetBrains PhpStorm.
 * User: paul
 * Date: 20.09.14
 * Time: 14:01
 * To change this template use File | Settings | File Templates.
 */

?>

    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'login-form',
        'method'=>"post",
        'enableClientValidation'=>true,
        'clientOptions'=>array(
            'validateOnSubmit'=>true,
        ),
        'htmlOptions'=>array(
            'class'=>"form-signin",
        )
    )); ?>

    <h2 class="form-signin-heading">Вход</h2>
    <div class="row">
        <?php echo $form->textField($model,'username', array(
            'class'=>"form-control",
            'placeholder'=>"Почта",
            'required'=>"",
            'autofocus'=>"",
        )); ?>
    </div>

    <div class="row">
        <?php echo $form->passwordField($model,'password', array(
            'class'=>"form-control",
            'placeholder'=>"Пароль",
            'required'=>"",
            'autofocus'=>"",
        )); ?>
    </div>

    <div class="row rememberMe">
    <label class="checkbox text-center">
        <?php echo $form->checkBox($model,'rememberMe', array(
            'value'=>"remember-me",
        )); ?>
        Запомнить меня
    </label>
    </div>
<?php echo $form->error($model,'username'); ?>
<?php echo $form->error($model,'password'); ?>
<?php echo $form->error($model,'rememberMe'); ?>


    <div class="row buttons">
        <?php echo CHtml::submitButton('Войти', array(
            'class'=>"btn btn-lg btn-primary btn-block"
        )); ?>
    </div>

    <?php $this->endWidget(); ?>
