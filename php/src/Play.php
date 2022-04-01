<?php
namespace Project3;
class Play{
    private string $name;
    private GameList $gameList;
    private HintList $hintList;

    public function __construct(){
        $this->gameList = new GameList();
    }

    public function reset(){

    }

    public function setHints(Hint $hint){
        $this->hintList->addHint($hint);
    }

    public function setPlayerName(string $name){
        $this->name = $name;
    }
    public function addGame(Game $game){
        $this->gameList->addGame($game);
    }

    public function addGuess(){

    }

    public function checkScore(){

    }

    public function draw(){

    }

    public function getHint(Hint $hint){
        return $this->hintList->$hint;
    }

    public function getPreviousGames(){
        return end(GameList::class->games);
    }

    public function getAnswer(){

    }

    public function getScore(){

    }
}
?>
