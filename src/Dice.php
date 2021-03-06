<?php

namespace Mouson\Template;

class Dice
{
    /**
     * @var string
     */
    private $category;

    private $winnerPoint;

    /**
     * @return string
     */
    public function getCategory(): string
    {
        return $this->category;
    }
    /**
     * @return int
     */
    public function getWinnerPoint(): int
    {
        return $this->winnerPoint;
    }

    /**
     * Dice constructor.
     *
     * @param false|string[] $diceSet
     */
    public function __construct($diceSet)
    {
        $diceTimes         = array_unique($diceSet);
        $diceCount         = count($diceTimes);
        $this->category    = 'no points';
        $this->winnerPoint = 0;

        if ($diceCount == 1) {
            $this->category    = 'all the same kind';
            $this->winnerPoint = $diceSet[0];
        }

        if ($diceCount == 3) {
            $this->category    = 'normal point';
        }
    }

    public function isCategoryNoPoint()
    {
        return $this->category == "no point";
    }
}
