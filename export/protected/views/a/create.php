<?php
/* @var $this AController */
/* @var $model A */

$this->breadcrumbs=array(
	'As'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List A', 'url'=>array('index')),
	array('label'=>'Manage A', 'url'=>array('admin')),
);
?>

<h1>Create A</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>