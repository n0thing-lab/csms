<?php

class CategoryController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

    public function actionView($id)
    {
        $model = Category::model()->findByPk($id);
        if (!isset($model))
            throw new CHttpException(404, "Not found");

        $categories = Category::model()->findAllByAttributes(array('parent'=>$model->id));

	    $documents = Document::model()->findAllByAttributes(array('category_id'=>$model->id));
        $this->render('view',array("model"=>$model, "categories"=>$categories, "documents"=>$documents));
    }

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/

}