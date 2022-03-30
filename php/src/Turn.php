<?php

class Turn{

    private GuessIceHoles $guessIceHoles;
    private GuessPolarBears $guessPolarBears;
    private GuessPenguins $guessPenguins;

    public function __construct(){

    }

    public function getGuessIceHoles(){
        return $this->guessIceHoles;
    }

    public function getGuessPolarBears(){
        return $this->guessPolarBears;
    }

    public function getGuessPenguins(){
        return $this->guessPenguins;
    }

    public function checkScore(){

    }
}
?>
