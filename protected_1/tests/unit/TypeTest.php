<?php
/**
 * Created by PhpStorm.
 * User: jyb
 * Date: 14-7-15
 * Time: 下午4:18
 */

class TypeTest extends CTestCase  {
    public function testgettypeoptins()
    {
        $type=new Type();
        $options = $type->getTypeOptions();
        $this->assertTrue(is_array($options));
        $this->assertEquals(2, count($options));
    }
   
    
}