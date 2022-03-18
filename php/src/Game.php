<?php
namespace Project3;
class Game{
    private DiceList $diceList;

    public function __construct($amount)
    {
        $this->diceList = new DiceList();

        for($i = 0; $i < $amount; ++$i) {
            $dobbelsteen = new Dobbelsteen();
            $this->diceList->addDice($dobbelsteen);
        }
    }
}
?>
