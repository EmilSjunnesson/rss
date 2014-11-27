<?php

class SimplePie_EnclosureTest extends \PHPUnit_Framework_TestCase
{
        
    require('../../../src/library/SimplePie/Enclosure.php');
        
    /**
     * Test
     *
     * @return void
     *
     */
    public function testnative_embed()
    {
        $enclosure = new \SimplePie_Enclosure();

        $res = $encloseure->native_embed(['widescreen => true']);
        $this->assertInternalType('string', $res, "Return type in not a string");
    }
}
