<?php

namespace Mouson\Template;

class Player
{
    private $category;
    private $winnerPoint;
    private $name;
    private $dice;

    /**
     * Player constructor.
     *
     * @param mixed|string $name
     * @param false|string[] $diceSet
     */
    public function __construct(string $input)
    {

        $this->name    = explode(':', $input)[0];
        $dices   = explode(':', $input)[1];
        $diceSet = explode(' ', $dices);

        $this->dice        = new Dice($diceSet);
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
