<?php
/* @var $this TblUserAdminController */
/* @var $model TblUserAdmin */

$this->breadcrumbs=array(
	'Tbl User Admins'=>array('index'),
	$model->id_user,
);

$this->menu=array(
	array('label'=>'List TblUserAdmin', 'url'=>array('index')),
	array('label'=>'Create TblUserAdmin', 'url'=>array('create')),
	array('label'=>'Update TblUserAdmin', 'url'=>array('update', 'id'=>$model->id_user)),
	array('label'=>'Delete TblUserAdmin', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_user),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TblUserAdmin', 'url'=>array('admin')),
);
?>

<h1>View TblUserAdmin #<?php echo $model->id_user; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_user',
		'username',
		'password',
		'enkrip',
		'email',
		'inisial',
		'deskripsi',
		'id_level',
	),
)); ?>
