<?php

namespace App\Tests;

use App\Entity\Isle;
use App\Entity\Map;
use PHPUnit\Framework\TestCase;

class MapTest extends TestCase
{
    public function testTwoIslandsAreConnected()
    {
        // Un pont ne peut être posé que si
        // une liaison existe entre deux iles
        $map = new Map();

        $this->assertTrue($map->islandsAreConnected('aloa', 'duda'));
    }
}