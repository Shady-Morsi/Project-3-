<?php
namespace Project3;
class GameList{
    private array $games = [];

    public function addGame(Game $game){
        $this->games[] = $game;
    }
}
?>
