<?php
$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Create User', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('user-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Users</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<!--这里输出了一个按钮，定义了按钮的css类，是search-butto,显示的文本是高级查找，然后在脚本中，使用jquery，让这个-->
<!--这里定义了search form 的外框，并且设置了显示是不显示。然后被按钮控制去显示。-->

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'user-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(

		'username',
        array(
            'header' => 'First Name',
            'value' => '$data->person->fname',//这个data是每行的数据，perrson是user的relation的key
            //竟然是可以直接访问的！！！！！！
        ),
        array(
            'name' => 'person.lname',
            'header' =>'Last Name',
//            'value' => '$data->person->lname',
        ),


		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
