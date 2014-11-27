<?php

namespace Emsf14\library;

/**
 * A testclass
 * 
 */
class CRSSTest extends \PHPUnit_Framework_TestCase
{
    
    /**
     * Test
     *
     * @return void
     *
     */
    public function testprintFeed()
    {
        $rss = new \Emsf14\library\CRSS([]);

        $res = $rss->printFeed();
        $this->assertEquals($res, $exp, "The name does not match.");
        $this->assertInternalType('string', $res, "Return type in not a string");
    }
}