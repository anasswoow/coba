<?php
/* @var $this AController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'As',
);

$this->menu=array(
	array('label'=>'Create A', 'url'=>array('create')),
	array('label'=>'Manage A', 'url'=>array('admin')),
);
?>

<h1>As</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
