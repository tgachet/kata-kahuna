<?php

namespace App\Tests;

use App\Entity\Connection;
use App\Entity\Isle;
use App\Entity\Player;
use App\ValueObject\Bridge;
use PHPUnit\Framework\TestCase;

class IsleTest extends TestCase
{
    public function testIsleHasAName()
    {
        $isle = new Isle('aloa');
        $this->assertEquals('aloa' ,$isle->getName());
    }

    public function testIsNotPossessed()
    {
        $isle = new Isle('aloa');
        $this->assertFalse($isle->isPossessed());
    }

    public function testIsleHasConnections()
    {
        $isle1 = new Isle('aloa');
        $isle2 = new Isle('iffi');
        $isle1->addConnection($isle2);

        $this->assertCount(1, $isle1->getConnections());
    }

    public function testIsleIsPossessedByAPlayer()
    {
        $isle1 = new Isle('aloa');
        $isle1->isPossessedBy(new Player());

        $this->assertEquals(new Player(), $isle1->getIsPossessedBy());
        $this->assertTrue($isle1->isPossessed());
    }

    public function testHasBridge()
    {
        $isle1 = new Isle('aloa');
        $isle1->addBridge(new Bridge());

        $this->assertCount(1, $isle1->getBridges());
    }
}