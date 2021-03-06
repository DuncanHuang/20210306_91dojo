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
        $output = [];
        $firstPlayer = new Player($players[0]);
        $secondPlayer = new Player($players[1]);

        if ($firstPlayer->getCategory() == 'no points' &&
        $firstPlayer->getCategory() == $secondPlayer->getCategory()) {
            return 'Tie.';
        }

        if ($firstPlayer->getCategory() == $secondPlayer->getCategory()) {
            if (($firstPlayer->getWinnerPoint() == $secondPlayer->getWinnerPoint())){
                return'Tie.';
            }
            $winner = ($firstPlayer->getWinnerPoint() > $secondPlayer->getWinnerPoint())? $firstPlayer : $secondPlayer;
            return $winner->getName() . " wins, all the same kind:" . $winner->getWinnerPoint();
        }
    }
}
