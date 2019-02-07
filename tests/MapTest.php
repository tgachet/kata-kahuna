<?php

namespace App\Tests;

use App\Entity\Isle;
use PHPUnit\Framework\TestCase;

class MapTest extends TestCase
{
    public function testHasIslands()
    {
        $map = new Map();

        $map->addIsland(new Isle('aloa'));
        $map->addIsland(new Isle('duda'));
        $map->addIsland(new Isle('iffi'));
        $map->addIsland(new Isle('huna'));
        
    }
}