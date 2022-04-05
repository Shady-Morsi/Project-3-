<?php
namespace Project3;
include "GameList.php";
include "Dobbelsteen.php";
include "HintList.php";
include "Hint.php";
include "Turn.php";

class Play{
    private string $name;
    private $gameList = [];
    private $hintList = [];

    public function __construct(){
        $this->gameList[] = new GameList();
    }

    public function reset(){

    }

    public function setHints(Hint $hint){
        $tijdelijk = new HintList();
        $this->hintList[]= $tijdelijk->addHint($hint);
//        echo "<pre>".print_r($this>hintList, true)."</pre>";
    }

    public function setPlayerName(string $name){
        $this->name = $name;
    }
    public function addGame(Game $game){
        $this->gameList->addGame($game);
    }

    public function addGuess(){

    }

    public function checkScore($objTurn){
        $objTurn->checkScore();
    }

    public function draw($objDobbelsteen){
        $objDobbelsteen->draw();
    }

    public function getHint($indexNumber){
        return $this->hintList[$indexNumber];
    }

    public function getPreviousGames(){

    }

    public function getAnswer(){

    }

    public function getScore(){

    }
}
$probeer = new Play();
$probeer->setHints(new Hint("hallo wereld"));
?>
