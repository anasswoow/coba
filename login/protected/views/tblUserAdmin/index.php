<?php
/* @var $this TblUserAdminController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tbl User Admins',
);

$this->menu=array(
	array('label'=>'Create TblUserAdmin', 'url'=>array('create')),
	array('label'=>'Manage TblUserAdmin', 'url'=>array('admin')),
);
?>

<h1>Tbl User Admins</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
