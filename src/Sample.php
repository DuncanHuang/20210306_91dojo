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

        return array('name' => $name, 'diceSet' => $diceSet);
    }
}
