<?php

class ArticleController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}


	public function actionAdmin()
	{
		if (Yii::app()->user->name == 'admin' || Yii::app()->user->name == 'superadmin') {
			$dataProvider = new CActiveDataProvider('Article', array(
				'criteria'=>array(
        			'order'=>'date DESC',
    				),
				));
			$articles = $dataProvider->getData();
			$this->render('admin',array('articles' => $articles));
		} else {
			// throw new CHttpException(403, 'У Вас нет прав для просмотра этой страницы.');
			$this->redirect(array('site/login'));
		}
	}


	public function actionCreate() {
			// if ($_POST) {
			// 	echo '<pre>';
			// 		print_r($_POST);
			// 		var_dump(strtotime('2016-06-24'));
			// 		var_dump(str_replace('.', '-', $_POST['date']));
			// 		var_dump(date('Y.m.d H:i', 1466715600));
			// 	echo '</pre>';
			// }
			// $this->render('create');
		if (Yii::app()->user->name == 'admin' || Yii::app()->user->name == 'superadmin') {

			if ($_POST) {

				$item = new Article;
				$item->title = $_POST['title'];
				$item->content = $_POST['wysiwyg'];
				$item->preview = $_POST['preview'];
				$item->date = strtotime(str_replace('.', '-', $_POST['date']));
				$item->publish = ($_POST['publish'])? 1 : 0;
				$item->save();

				if ($_POST['category']) {
					foreach ($_POST['category'] as $value) {
						$rel = new ArticleCategory;
						$rel->article_id = $item->id;
						$rel->category_id = $value;
						$rel->save();
					}
				}

				if ($item->save()) {
					Yii::app()->user->setFlash('changedata', 'Данные успешно сохранены!');
					$this->redirect(array('article/admin/'));
				}
			}
			$this->render('create');
		} else {
			throw new CHttpException(403, 'У Вас нет прав для просмотра этой страницы.');
		}
	}


	public function actionEdit($id)
	{
		if (Yii::app()->user->name == 'admin' || Yii::app()->user->name == 'superadmin') {
			$item = Article::model()->findByPk($id);
			if ($_POST) {
				$item->title = $_POST['title'];
				$item->content = $_POST['wysiwyg'];
				$item->preview = $_POST['preview'];
				$item->date = strtotime(str_replace('.', '-', $_POST['date']));
				$item->publish = ($_POST['publish'])? 1 : 0;
				$item->save();

				ArticleCategory::model()->deleteAllByAttributes(array('article_id' => $item->id));
				if ($_POST['category']) {
					foreach ($_POST['category'] as $value) {
						$rel = new ArticleCategory;
						$rel->article_id = $item->id;
						$rel->category_id = $value;
						$rel->save();
					}
				}

				if ($item->save()) {
					Yii::app()->user->setFlash('changedata', 'Данные успешно сохранены!');
					$this->redirect(array('article/admin/'));
				}
			}

			// $bg_style = $this->bgStyle($item->bg_style);
			// $block_message = $this->blockMessage($item->alias);
			$this->render('edit', array('item' => $item));
		} else {
			throw new CHttpException(403, 'У Вас нет прав для просмотра этой страницы.');
		}
	}


	public function actionItemDelete()
	{
		if (Yii::app()->user->name == 'admin' || Yii::app()->user->name == 'superadmin') {
			if ($_POST) {
				$item = $_POST['classname']::model()->findByPk($_POST['item']);
				// $item->delete();
				$item->title = 'del';
				$item->save();
			}
		} else {
			throw new CHttpException(403, 'У Вас нет прав для просмотра этой страницы.');
		}
	}


}