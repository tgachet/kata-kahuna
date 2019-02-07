<?php

namespace App\Entity;

class Connection
{

    /**
     * Connection constructor.
     * @param Isle $isle1
     * @param Isle $isle2
     */
    public function __construct(Isle $isle1, Isle $isle2)
    {
        $isle1->addConnection($isle2);
        $isle2->addConnection($isle1);
    }
}