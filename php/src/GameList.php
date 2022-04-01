<?php
namespace Project3;
class GameList{
    private array $games = [];

    public function __construct(){

    }

    public function addGame(Game $game){
        $this->games[] = $game;
    }

    public function getGame(){
        return $this->games;
    }

    public function getCurrentGame(){
        return end($this->games);
    }
}
?>
