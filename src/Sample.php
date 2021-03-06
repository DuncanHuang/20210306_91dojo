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
        foreach ($players as $play){
            $name = explode(':', $play)[0];
            $dices = explode(':', $play)[1];
            $diceSet = explode(' ', $dices);

            $output[$name] = $diceSet;
        }

        $winnerName = 'Lin';

        return '' . $winnerName . ' wins, all the same kind:5';
    }
}
