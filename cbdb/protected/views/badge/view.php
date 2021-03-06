<?php
/* @var $this BadgeController */
/* @var $model Badge */

$this->breadcrumbs=array(
	'Badges'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Badge', 'url'=>array('index')),
	array('label'=>'Create Badge', 'url'=>array('create')),
	array('label'=>'Update Badge', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Badge', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Badge', 'url'=>array('admin')),
);
?>

<h1>View Badge #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'type',
		'name',
		'remark',
		'updated_at',
	),
)); ?>
