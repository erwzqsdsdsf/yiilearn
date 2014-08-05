<?php $this->beginContent('//layouts/main'); ?>
<div class="span-19">
	<div id="content">
		<?php echo $content; ?>
	</div><!-- content -->
</div>
<div class="span-5 last">
	<div id="sidebar">
	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Operations',
		));
		$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->menu,
			'htmlOptions'=>array('class'=>'operations'),
		));
		$this->endWidget();
    $this->beginWidget('zii.widgets.CPortlet', array(
        'title'=>'Operations2',
    ));
//    echo 'jyb';
    $this->widget('application.extensions.menu.SMenu',
        array(
            "stylesheet"=>"menu_blue.css",
            "menuID"=>"myMenu",
            "delay"=>3,
            "menu"=>array(
                        array(
                        "url"=>array("route"=>"/jyb/ss"),
                        "label"=>"Sspiner",
                            array(
                                "url"=>array("route"=>"/product/create"),
                                "label"=>"second menu",
                                array(
                                    'url'=>array('route'=>'/a/zz'),
                                    'label'=>'third men',
                                     array(
                                         'url'=>array('route'=>'/a/zz'),
                                         'label'=>'foure men'
                                     )
                                ),),

                        ),
                        array(
                            'url'=>array('route'=>'/jjj/zz1'),
                            'label'=>'jyb'),

            ),
           )
        );
    $this->endWidget();
	?>
	</div><!-- sidebar -->
</div>
<?php $this->endContent(); ?>