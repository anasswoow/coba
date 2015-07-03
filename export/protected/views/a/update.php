<?php
/* @var $this AController */
/* @var $model A */

$this->breadcrumbs=array(
	'As'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List A', 'url'=>array('index')),
	array('label'=>'Create A', 'url'=>array('create')),
	array('label'=>'View A', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage A', 'url'=>array('admin')),
);
?>

<h1>Update A <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>