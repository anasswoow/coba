<?php
/* @var $this BookCopyController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Book Copies',
);

$this->menu=array(
	array('label'=>'Create BookCopy', 'url'=>array('create')),
	array('label'=>'Manage BookCopy', 'url'=>array('admin')),
);
?>

<h1>Book Copies</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
