<?php
namespace Project3;

class Play{
private string $name;
private GameList $gameList;

public function __construct(){
    $this->gameList = new GameList();
}

public function setPlayerName(string $name){
    $this->name = $name;
}
public function addGame(Game $game){
    $this->gameList->addGame($game);
}
}
?>
