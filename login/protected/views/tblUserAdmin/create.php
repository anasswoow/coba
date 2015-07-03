<?php
/* @var $this TblUserAdminController */
/* @var $model TblUserAdmin */

$this->breadcrumbs=array(
	'Tbl User Admins'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TblUserAdmin', 'url'=>array('index')),
	array('label'=>'Manage TblUserAdmin', 'url'=>array('admin')),
);
?>

<h1>Create TblUserAdmin</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>