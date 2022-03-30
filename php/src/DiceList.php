<?php

namespace Project3;
class diceList{
    private array $dobbelstenen = [];

    public function addDice(Dobbelsteen $dobbelsteen){
        $this->dobbelstenen[] = $dobbelsteen;
    }

    public function getDices(){

    }
}
?>
