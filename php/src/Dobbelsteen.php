<?php
namespace Project3;
class Dobbelsteen {

    private int $iceHoles ;
    private int $polarBears;
    private int $penguins;
    public int $number;
    private $laatstGegenereerd;         // laatste getal dat werd gegenereerd
    private $fp;

    public function __construct() {
        $this->fp = fopen("logboek.txt", "a");
        $this->iceHoles = 1;
        $this->polarBears = 3;
        $this->penguins = 5;
    }

    public function __destruct() {
        fclose($this->fp);
    }

    public function getDice($grootte){
        return "<img width='$grootte' src='../assets/" . rand(1, 6) . ".png'>";
    }



    public function getIceHoles(){
        return $this->iceHoles;
    }

    public function getPolarBears(){
        return $this->polarBears;
    }

    public function getPenguins(){
        return $this->penguins;
    }

    public function draw($maxAmount=8, $grootte=70){
        $rnd = rand(3, $maxAmount);

        for($i = 0; $i < $rnd; $i++) {
            echo $this->getDice($grootte);
        }
    }

    private function getRandomNumber($low, $high) {
        $this->laatstGegenereerd = rand($low, $high); // nieuw random getal
        fwrite($this->fp, $this->laatstGegenereerd . "\n"); // in file

        return $this->laatstGegenereerd;               // geef getal terug
    }

    public function getLaatstGegenereerd() {           // wat was de laatste?
        return $this->laatstGegenereerd;
    }

}
?>