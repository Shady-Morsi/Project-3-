<?php
namespace Project3;
class Turn{

    private int $guessIceHoles;
    private int $guessPolarBears;
    private int $guessPenguins;

    public function __construct(int $guessIceHoles = 2, int $guessPolarBears = 5, int $guessPenguins = 6){
        $this->guessIceHoles = $guessIceHoles;
        $this->guessPolarBears = $guessPolarBears;
        $this->guessPenguins = $guessPenguins;
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
