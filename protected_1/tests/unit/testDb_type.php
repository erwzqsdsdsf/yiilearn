<?php
/**
 * Created by PhpStorm.
 * User: jyb
 * Date: 14-7-15
 * Time: 下午4:57
 */

class testDb_type extends CDbTestCase {

    public $fixtures=array(
        'Type'=>'Type',

    );

    public function test_db_type()
    {
        $typelist=Type::model()->findAll();
        $this->assertEquals(2,count($typelist));
    }
}
 