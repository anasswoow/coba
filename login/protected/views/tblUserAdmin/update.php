<?php
/* @var $this TblUserAdminController */
/* @var $model TblUserAdmin */

$this->breadcrumbs=array(
	'Tbl User Admins'=>array('index'),
	$model->id_user=>array('view','id'=>$model->id_user),
	'Update',
);

$this->menu=array(
	array('label'=>'List TblUserAdmin', 'url'=>array('index')),
	array('label'=>'Create TblUserAdmin', 'url'=>array('create')),
	array('label'=>'View TblUserAdmin', 'url'=>array('view', 'id'=>$model->id_user)),
	array('label'=>'Manage TblUserAdmin', 'url'=>array('admin')),
);
?>

<h1>Update TblUserAdmin <?php echo $model->id_user; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>