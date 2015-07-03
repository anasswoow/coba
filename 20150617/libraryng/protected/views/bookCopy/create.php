<?php
/* @var $this BookCopyController */
/* @var $model BookCopy */

$this->breadcrumbs=array(
	'Book Copies'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BookCopy', 'url'=>array('index')),
	array('label'=>'Manage BookCopy', 'url'=>array('admin')),
);
?>

<h1>Create BookCopy</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>