<?php
namespace Ds\Tests\Pair;

use Ds\Pair;

trait __construct
{
    public function testConstruct()
    {
        $pair = new Pair('a', 1);
        $this->assertEquals('a', $pair->key);
        $this->assertEquals( 1,  $pair->value);
    }
}
