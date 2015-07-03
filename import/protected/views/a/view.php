<?php
/* @var $this AController */
/* @var $model A */

$this->breadcrumbs=array(
	'As'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List A', 'url'=>array('index')),
	array('label'=>'Create A', 'url'=>array('create')),
	array('label'=>'Update A', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete A', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage A', 'url'=>array('admin')),
);
?>

<h1>View A #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nama',
	),
)); ?>
