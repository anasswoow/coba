<?php
/* @var $this TblUserAdminController */
/* @var $model TblUserAdmin */

$this->breadcrumbs=array(
	'Tbl User Admins'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List TblUserAdmin', 'url'=>array('index')),
	array('label'=>'Create TblUserAdmin', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tbl-user-admin-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Tbl User Admins</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tbl-user-admin-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_user',
		'username',
		'password',
		'enkrip',
		'email',
		'inisial',
		/*
		'deskripsi',
		'id_level',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
