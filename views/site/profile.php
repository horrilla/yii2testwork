<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Edit Profile';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-edit-profile">
	<h1><?= Html::encode($this->title) ?></h1>
	<div class="row">
		<div class="col-lg-5">

			<?php $form = ActiveForm::begin(['id' => 'form-edit']); ?>
			<?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
			<?= $form->field($model, 'email')->textInput() ?>
			<div class="form-group">
				<?= Html::submitButton('Edit', ['class' => 'btn btn-primary', 'name' => 'edit-button']) ?>
			</div>
			<?php ActiveForm::end(); ?>

		</div>
	</div>
</div>