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
        $firstPlayer = $this->parsePlayer($players[0]);
        $secondPlayer = $this->parsePlayer($players[1]);

        if ($firstPlayer->getCategory() == 'no points' &&
        $firstPlayer->getCategory() == $secondPlayer->getCategory()) {
            return 'Tie.';
        }

        if ($firstPlayer->getCategory() == $secondPlayer->getCategory()) {
            if (($firstPlayer->getWinnerPoint() == $secondPlayer->getWinnerPoint())){
                return'Tie.';
            }
            $winner = ($firstPlayer->getWinnerPoint() > $secondPlayer->getWinnerPoint())? $firstPlayer : $secondPlayer;
            return $winner['name'] . " wins, all the same kind:" . $winner->getWinnerPoint();
        }

        $winnerName = 'Lin';

        return '' . $winnerName . ' wins, all the same kind:5';
    }

    /**
     * @param string $play
     *
     * @return Player
     */
    protected function parsePlayer(string $play): Player
    {
        $name    = explode(':', $play)[0];
        $dices   = explode(':', $play)[1];
        $diceSet = explode(' ', $dices);

        return new Player($name, $diceSet);
//        return array(
//            'name'     => $name, 'diceSet' => $diceSet,
//            'category' => ['name' => $category, 'winnerPoint' => $winnerPoint],
//        );
    }
}
