<?php

namespace Mouson\Template;

class Compare
{
    /**
     * Compare constructor.
     *
     * @param Dice $getDice
     * @param Dice $getDice1
     */
    public function __construct(\Mouson\Template\Dice $firstDice, \Mouson\Template\Dice $secondDice)
    {
        if ($firstDice->isCategoryNoPoint() &&
            $firstDice->getCategory() == $secondDice->getCategory()) {
            return 'Tie.';
        }

        if ($firstDice->getCategory() == $secondDice->getCategory()) {
            if (($firstDice->getWinnerPoint() == $secondDice->getWinnerPoint())){
                return'Tie.';
            }
            $winner = ($firstDice->getWinnerPoint() > $secondDice->getWinnerPoint()) ? $firstPlayer : $secondPlayer;
            return $winner->getName() . " wins, all the same kind:" . $winner->getDice()->getWinnerPoint();
        }
    }
}

