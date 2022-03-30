<?php
namespace Project3;
class Game{
    private DiceList $diceList;
    private wrong $wrong;
    private correct $correct;
    private TurnList $turnList;


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
