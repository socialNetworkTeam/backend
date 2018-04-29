<?php

/* @var $this yii\web\View */
/* @var $isAuth \app\controllers\AuthController::$isAuth */
/* @var $isAdmin \app\controllers\AuthController::$isAdmin */

$this->title = 'Welcome to BindFinder';
?>
<div class="site-index">

    <div class="jumbotron">
        <?php if (!$isAuth) { ?>
        <h1>Hi there!</h1>

        <p class="lead">Wanna create your own band or find one to join to?</p>

        <p><a class="btn btn-lg btn-success" href="/user/login">Get started with BandFinder!</a></p>
        <?php }
        else { ?>
            <h1>You are logged in!</h1>
         <?php } ?>
    </div>

</div>
