<?php

namespace App\Entity;

class Map
{
    private $connections = [
        'aloa' => [
            'duda'
        ],
        'duda' => [
            'aloa'
        ]
    ];

    public function islandsAreConnected($island1, $island2)
    {
        return in_array($island2, $this->connections[$island1])
            && in_array($island1, $this->connections[$island2]);
    }
}
