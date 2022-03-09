<?php
class dobbelstenen {

    public $number;

    public function roll(){
        $this->number = rand(1,6);
    }

    public function draw(){
        if($this->number == 1){
            echo '<img src="../assets/dice-1.png">';
        }elseif($this->number == 2){
            echo '<img src="../assets/dice-2.png">';
        }elseif($this->number == 3){
            echo '<img src="../assets/dice-3.png">';
        }elseif($this->number == 4){
            echo '<img src="../assets/dice-4.png">';
        }elseif($this->number == 5){
            echo '<img src="../assets/dice-5.png">';
        }else{
            echo '<img src="../assets/dice-6.png">';
        }
    }
}
?>
