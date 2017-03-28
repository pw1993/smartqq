<?php
namespace Slince\SmartQQ\Tests\Entity;


use PHPUnit\Framework\TestCase;
use Slince\SmartQQ\Entity\Discuss;

class DiscussTest extends TestCase
{
    public function testSet()
    {
        $discuss = new Discuss();
        $this->assertNull($discuss->getId());
        $this->assertNull($discuss->getName());
        $discuss->setName('foo');
        $discuss->setId(1);
        $this->assertEquals('bar', $discuss->getName());
        $this->assertEquals(1, $discuss->getId());
    }
}