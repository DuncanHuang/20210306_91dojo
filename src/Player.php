<?php

namespace Mouson\Template;

class Player
{
    private $category;
    private $winnerPoint;
    private $name;

    /**
     * Player constructor.
     *
     * @param mixed|string $name
     * @param false|string[] $diceSet
     */
    public function __construct(string $name, $diceSet)
    {
        $diceTimes         = array_unique($diceSet);
        $diceCount         = count($diceTimes);
        $this->name        = $name;
        $this->category    = 'no points';
        $this->winnerPoint = 0;

        if ($diceCount == 1) {
            $this->category    = 'all the same kind';
            $this->winnerPoint = $diceSet[0];
        }
    }

    /**
     * @return string
     */
    public function getCategory(): string
    {
        return $this->category;
    }

    /**
     * @return mixed|string
     */
    public function getWinnerPoint(): string
    {
        return $this->winnerPoint;
    }

    /**
     * @return mixed|string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
