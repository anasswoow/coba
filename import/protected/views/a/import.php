<?php
/* @var $this TDosenController */
/* @var $model TDosen */
/* @var $form CActiveForm */
?>
<?php
/*$this->breadcrumbs = array(
    'Tdosens' => array('index'),
    'Import',
);

$this->menu = array(
   // array('label' => 'List TDosen', 'url' => array('index')),
    array('label' => 'coba', 'url' => array('admin')),
);*/
?>
<div class="form">
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'excel-form',
        'enableAjaxValidation' => false,
        'htmlOptions' => array('enctype' => 'multipart/form-data'),
    ));
    ?>
    <?php echo $data->dump(true,true);?>
    
    <h1>Import data Excel</h1>
    <?php
    foreach (Yii::app()->user->getFlashes() as $key => $message) {
        echo '<div class="flash-error">' . $message . '</div>';
    }
    ?>
    <br>
    <div class="row">
        <?php // echo $data->dump(true,true);?>
        <?php echo $form->fileField($model, 'filee', array('size' => 60, 'maxlength' => 200)); ?>
        <?php echo CHtml::submitButton('Import'); ?>
    </div>

    <?php $this->endWidget(); ?>
</div>
<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'tdosen-grid',
    'dataProvider' => $model->search(),
    //'dataProvider'=> $dataProvider,
    'filter' => $model,
    'columns' => array(
        'id',
        'nama',
        /*
          'image',
         */
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));
?>
<?php echo $c;?>