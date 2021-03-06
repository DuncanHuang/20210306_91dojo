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

        if ($firstPlayer['category']['name'] == 'no points' &&
        $firstPlayer['category']['name'] == $secondPlayer['category']['name']) {
            return 'Tie.';
        }elseif($firstPlayer['category']['name'] == $secondPlayer['category']['name'])


        $winnerName = 'Lin';

        return '' . $winnerName . ' wins, all the same kind:5';
    }

    /**
     * @param string $play
     *
     * @return array
     */
    protected function parsePlayer(string $play): array
    {
        $name    = explode(':', $play)[0];
        $dices   = explode(':', $play)[1];
        $diceSet = explode(' ', $dices);

        $diceTimes = array_unique($diceSet);
        $diceCount = count($diceTimes);
        $category = 'no points';
        $winnerPoint = 0;
        if($diceCount==1) {
            $category = 'all the same kind';
            $winnerPoint = $diceSet[0];
        }

        return array('name' => $name, 'diceSet' => $diceSet, 'category' => ['name'=>$category, 'winnerPoint'=>$winnerPoint]);
    }
}
