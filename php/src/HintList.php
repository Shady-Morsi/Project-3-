<?php
namespace Project3;
class HintList{
    private array $hints = [];

    public function addHint(Hint $hint){
        $this->hints[] = $hint;
    }

    public function getHint(){
        return $this->hints;
    }

    public function getRandomHint(){
        $amountOfHints = count($this->hints);
        $position = rand(0, $amountOfHints-1);
        return $this->hints[$position];
    }
}
?>
