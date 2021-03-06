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
        $result = new Compare($firstPlayer->getDice(), $secondPlayer->getDice());
    }
}
