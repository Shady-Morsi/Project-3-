<?php

class TurnList{
    private array $turns = [];

    public function addTurn(Turn $turn){
        $this->turns[]=$turn;
    }
}
?>
