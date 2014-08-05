<?php
/**
 * Created by PhpStorm.
 * User: jyb
 * Date: 14-7-15
 * Time: 下午3:08
 */

class TTController extends Controller
{

    public function actiona1()
    {
      var_dump( CHtml::listData (Type::model()->findAll(),'id','name'));
    }


} 