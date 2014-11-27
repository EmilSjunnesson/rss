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
    
    /**
     * Test
     *
     * @return void
     *
     */
    public function testset_stupidly_fast()
    {
        $simplePie = new \SimplePie();

        $res = $simplePie->set_stupidly_fast(true);
    }
    
     /**
     * Test
     *
     * @return void
     *
     */
    public function teststrip_htmltags()
    {
        $simplePie = new \SimplePie();

        $res = $simplePie->strip_htmltags('<b>');
    }
    
     /**
     * Test
     *
     * @return void
     *
     */
    public function testget_language()
    {
        $simplePie = new \SimplePie();

        $res = $simplePie->get_language();
    }
    
     /**
     * Test
     *
     * @return void
     *
     */
    public function testget_item()
    {
        $simplePie = new \SimplePie();

        $res = $simplePie->get_item();
    }
}
