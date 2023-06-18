<h1>Страница с постами</h1>

<?php if (empty($posts)): ?>

<p>На данный момент постов нет</p>

<?php endif; ?>

<?php foreach ($posts as $post): ?>
	<div>
		<p><?= $post->title ?></p>
		<p><?= $post->anonce ?></p>
		<p>Опубликован <?= date('d.m.Y', $post->created_at) ?></p>
		<p>
			<a href="<?= \yii\helpers\Url::toRoute(['post/delete', 'id' => $post->id]) ?>">Удалить пост</a>
		</p>
	</div>
<?php endforeach; ?>
