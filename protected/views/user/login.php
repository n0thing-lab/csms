<?php
/**
 * Created by JetBrains PhpStorm.
 * User: paul
 * Date: 20.09.14
 * Time: 14:01
 * To change this template use File | Settings | File Templates.
 */

?>

<form class="form-signin" method="post" role="form">

    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'login-form',
        'enableClientValidation'=>true,
        'clientOptions'=>array(
            'validateOnSubmit'=>true,
        ),
    )); ?>

    <h2 class="form-signin-heading">Вход</h2>
    <div class="row">
        <?php echo $form->textField($model,'username', array(
            'type'=>"email",
            'class'=>"form-control",
            'placeholder'=>"Почта",
            'required'=>"",
            'autofocus'=>"",
        )); ?>
        <?php echo $form->error($model,'username', array(
            'type'=>"email",
            'class'=>"form-control",
            'placeholder'=>"Почта",
            'required'=>"",
            'autofocus'=>"",
        )); ?>
    </div>

    <div class="row">
        <?php echo $form->passwordField($model,'password', array(
            'type'=>"password",
            'class'=>"form-control",
            'placeholder'=>"Пароль",
            'required'=>"",
            'autofocus'=>"",
        )); ?>
        <?php echo $form->error($model,'password', array(
            'type'=>"password",
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
        <?php echo $form->label($model,'rememberMe', array(
            'value'=>"remember-me",
        )); ?>
        <?php echo $form->error($model,'rememberMe', array(
            'value'=>"remember-me",
        )); ?>
    </label>
    </div>



    <div class="row buttons">
        <?php echo CHtml::submitButton('Войти', array(
            'class'=>"btn btn-lg btn-primary btn-block"
        )); ?>
    </div>

    <?php $this->endWidget(); ?>

</form>