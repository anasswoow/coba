<?php
/* @var $this BookCopyController */
/* @var $model BookCopy */

$this->breadcrumbs=array(
	'Book Copies'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BookCopy', 'url'=>array('index')),
	array('label'=>'Create BookCopy', 'url'=>array('create')),
	array('label'=>'View BookCopy', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage BookCopy', 'url'=>array('admin')),
);
?>

<h1>Update BookCopy <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>