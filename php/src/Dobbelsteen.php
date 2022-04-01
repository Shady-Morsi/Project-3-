<?php
namespace Project3;
class Dobbelsteen {

    private int $iceHoles;
    private int $polarBears;
    private int $penguins;
    private int $dobbelsteen;
    public int $number;
    private $laatstGegenereerd;         // laatste getal dat werd gegenereerd
    private $fp;

    public function __construct() {
        $this->fp = fopen("logboek.txt", "a");
    }

    public function __destruct() {
        fclose($this->fp);
    }

    public function dobbelsteen(){

    }

    public function getDice(){

    }

    public function roll(){
        $this->number = rand(1,6);
    }

    public function geticeHoles(){
        return $this->iceHoles;
    }

    public function getpolarBears(){
        return $this->polarBears;
    }

    public function getpenguins(){
        return $this->penguins;
    }

    public function draw($maxAmount=8, $grootte=50){
        $rnd = rand(3, $maxAmount);

        for($i = 0; $i < $rnd; $i++) {
            echo
                "<img width='$grootte' src='assets/".$this->getRandomNumber(1, 6).".png'>";
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
