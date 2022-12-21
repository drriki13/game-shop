<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Login';
?>
<div class="card card-authentication1 mx-auto my-5">
    <div class="card-body">
        <div class="card-content p-2">
            <div class="text-center">
                <img src="../admin_assets/images/logo-icon.png" alt="logo icon">
            </div>
            <div class="card-title text-uppercase text-center py-3">Sign In</div>
            <?php $form = ActiveForm::begin([
                'id' => 'login-form',
                'layout' => 'horizontal',
                'fieldConfig' => [
                    'template' => "{label}\n{input}\n{error}",
                    'labelOptions' => ['class' => 'col-lg-1 col-form-label mr-lg-3'],
                    'inputOptions' => ['class' => 'col-lg-3 form-control'],
                    'errorOptions' => ['class' => 'col-lg-7 invalid-feedback'],
                ],
            ]) ?>
                <div class="form-group">
                    <label for="exampleInputUsername" class="sr-only">Username</label>
                    <div class="position-relative has-icon-right mx-2">
                        <?= $form->field($model, 'username')->textInput([
                            'autofocus' => true,
                            'id' => 'exampleInputUsername',
                            'placeholder' => 'Enter Username',
                            'class' => 'form-control input-shadow'
                        ])->label(false) ?>
                        <div class="form-control-position">
                            <i class="icon-user"></i>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword" class="sr-only">Password</label>
                    <div class="position-relative has-icon-right mx-2">
                        <?= $form->field($model, 'password')->passwordInput([
                            'id' => 'exampleInputPassword',
                            'class' => 'form-control input-shadow',
                            'placeholder' => 'Enter Password'
                        ])->label(false) ?>
                        <div class="form-control-position">
                            <i class="icon-lock"></i>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-6 mx-2">
                        <?= $form->field($model, 'rememberMe')->checkbox([
                            'template' => "<div class=\"icheck-material-white\">
                                <input type=\"checkbox\" id=\"user-checkbox\" checked=\"\"> 
                                <label for=\"user-checkbox\">Remember me</label> 
                                </div>\n<div class=\"col-lg-8\">{error}</div>",
                        ]) ?>
<!--                        <div class="icheck-material-white">-->
<!--                            <input type="checkbox" id="user-checkbox" checked="">-->
<!--                            <label for="user-checkbox">Remember me</label>-->
<!--                        </div>-->
                    </div>
                    <div class="form-group col-6 text-right">
                        <a href="#">Reset Password</a>
                    </div>
                </div>
                <?= Html::submitButton('Login', ['class' => 'btn btn-light btn-block', 'name' => 'Sign In']) ?>
                <div class="text-center mt-3">Sign In With</div>

                <div class="form-row mt-4">
                    <div class="form-group mb-0 col-6">
                        <button type="button" class="btn btn-light btn-block"><i class="fa fa-facebook-square"></i>
                            Facebook
                        </button>
                    </div>
                    <div class="form-group mb-0 col-6 text-right">
                        <button type="button" class="btn btn-light btn-block"><i class="fa fa-twitter-square"></i>
                            Twitter
                        </button>
                    </div>
                </div>

            <?php ActiveForm::end() ?>
        </div>
    </div>
    <div class="card-footer text-center py-3">
        <p class="text-warning mb-0">Do not have an account? <a href="#"> Sign Up here</a></p>
    </div>
</div>
