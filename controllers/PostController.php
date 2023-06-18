<?php


namespace app\controllers;


use app\models\Post;
use yii\helpers\Url;
use yii\web\Controller;

class PostController extends Controller
{

	public function actionDelete($id)
	{
		$post = Post::find()->where('id = :id', [':id' => $id]);

		if (!empty($post)) {
			$deletePost = Post::deleteAll('id = :id', [':id' => $id]);
		} else {
			\Yii::$app->session->setFlash('error', 'Пост с таким id не найден');
			return \Yii::$app->response->redirect(Url::toRoute(['post/list']));
		}


		if ($deletePost > 0 ) {
			\Yii::$app->session->setFlash('success', 'Пост удален');
			return \Yii::$app->response->redirect(Url::toRoute(['post/list']));
		} else {
			\Yii::$app->session->setFlash('error', 'Пост не удален');
			return \Yii::$app->response->redirect(Url::toRoute(['post/list']));
		}
	}

	public function actionList()
	{
		$posts = Post::find()->all();

		return $this->render('list', [
			'posts' => $posts
		]);

	}

}