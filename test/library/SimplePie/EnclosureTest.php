<?php

class SimplePie_EnclosureTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test
     *
     * @return void
     *
     */
    public function testprintFeed()
    {
        $enclosure = new \SimplePie_Enclosure();

        $res = $encloseure->native_embed(['widescreen => true']);
        $this->assertInternalType('string', $res, "Return type in not a string");
    }
}
