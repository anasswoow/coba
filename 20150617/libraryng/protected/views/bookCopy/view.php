<?php
/* @var $this BookCopyController */
/* @var $model BookCopy */

$this->breadcrumbs=array(
	'Book Copies'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List BookCopy', 'url'=>array('index')),
	array('label'=>'Create BookCopy', 'url'=>array('create')),
	array('label'=>'Update BookCopy', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete BookCopy', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BookCopy', 'url'=>array('admin')),
);
?>

<h1>View BookCopy #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'book_id',
		'call_number',
		'year',
		'availability',
		'loanable',
	),
)); ?>
