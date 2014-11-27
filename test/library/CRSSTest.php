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
        $rss = new \Emsf14\library\CRSS(['http://feeds.bbci.co.uk/news/rss.xml']);

        $res = $rss->printFeed();
        $this->assertInternalType('string', $res, "Return type in not a string");
    }
}