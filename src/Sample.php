<?php

namespace Mouson\Template;

class Sample
{
    public function isTrue(): bool
    {
        return true;
    }

    public function parser(string $string)
    {
        $players = explode('  ', $string);
        $firstPlayer = new Player($players[0]);
        $secondPlayer = new Player($players[1]);

        if ($firstPlayer->getDice()->isCategoryNoPoint() &&
        $firstPlayer->getDice()->getCategory() == $secondPlayer->getDice()->getCategory()) {
            return 'Tie.';
        }

        if ($firstPlayer->getDice()->getCategory() == $secondPlayer->getDice()->getCategory()) {
            if (($firstPlayer->getDice()->getWinnerPoint() == $secondPlayer->getDice()->getWinnerPoint())){
                return'Tie.';
            }
            $winner = ($firstPlayer->getDice()->getWinnerPoint() > $secondPlayer->getDice()->getWinnerPoint())? $firstPlayer : $secondPlayer;
            return $winner->getName() . " wins, all the same kind:" . $winner->getDice()->getWinnerPoint();
        }
    }
}
