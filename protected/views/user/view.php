<?php
$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'Update User', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete User', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),

);
?>

<h1>View User #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(

		'username',
        array(
//            'name' => 'person_fname',
            'label' => 'First Name',
            'value' => $model->person->fname,
        ),
//        这里只要制定属性和 属性如何显示，就可以自动render了！不需要具体写了！
//    这是php代码的魔力。那个girdview是写在column中。
        array(
//            'name' => 'person_lname',
            'label' => 'Last Name',
            'value' => $model->person->lname,
        ),

	),
)); ?>
