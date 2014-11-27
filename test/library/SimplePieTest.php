<?php

/**
 * A testclass
 * 
 */
class SimplePieTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Test
     *
     * @expectedException Exception
     *
     * @return void
     *
     */
    public function test__constructor()
    {
        $simplePie = new \SimplePie('fail');
    }

    
    /**
     * Test
     *
     * @return void
     *
     */
    public function test__toString()
    {
        $simplePie = new \SimplePie();

        $res = $simplePie->__toString();
        $this->assertInternalType('string', $res, "Return type in not a string");
    }
    
    /**
     * Test
     *
     * @return void
     *
     */
    public function testforce_feed()
    {
        $simplePie = new \SimplePie();

        $res = $simplePie->force_feed(true);
    }
    
    /**
     * Test
     *
     * @return void
     *
     */
    public function testget_image_tags()
    {
        $simplePie = new \SimplePie();

        $res = $simplePie->get_image_tags('invalid','invalid');
    }
    
}
