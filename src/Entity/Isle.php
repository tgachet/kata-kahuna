<?php

namespace App\Entity;

use App\ValueObject\Bridge;

class Isle
{
    private $name;
    private $connections;
    private $player;
    private $bridge;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function isPossessed()
    {
        return $this->player !== null;
    }

    public function addConnection(Isle $isle)
    {
        $this->connections[] = $isle;
    }

    public function getConnections()
    {
        return $this->connections;
    }

    public function isPossessedBy(Player $player)
    {
        $this->player = $player;
    }

    public function getIsPossessedBy()
    {
        return $this->player;
    }

    public function addBridge(Bridge $bridge)
    {
        $this->bridge[] = $bridge;
    }

    public function getBridges()
    {
        return $this->bridge;
    }
}