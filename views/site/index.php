<?php

/** @var yii\web\View $this */

$this->title = 'Yii Test Work';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4">Congratulations!</h1>

        <p class="lead">You have successfully register your account!</p>
		<p>
			<a class="btn btn-primary" href="<?= \yii\helpers\Url::to(['site/profile']) ?>">View Profile</a>
		</p>

    </div>

    <div class="body-content">


    </div>
</div>
