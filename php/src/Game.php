<?php
namespace Project3;
class Game{
    private DiceList $diceList;
    private int $wrong;
    private int $correct;
    private int $resultIceHoles;
    private int $resultPolarBears;
    private int $resultpenguins;
    private TurnList $turnList;


    public function __construct($amount)
    {
        $this->diceList = new DiceList();

        for($i = 0; $i < $amount; ++$i) {
            $dobbelsteen = new Dobbelsteen();
            $this->diceList->addDice($dobbelsteen);
        }
    }

    public function drawCubes(){

    }

    public function result(){

    }

    public function getTurnList(){

    }

    public function addGuess(){

    }

    public function checkGuess(){

    }

    public function getGameTurns(){

    }

    public function getWrongAnswers(){

    }

    public function getAnswer(){

    }

    public function getScore(){

    }
}
?>
