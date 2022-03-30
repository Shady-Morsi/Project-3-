<?php
namespace Project3;
class Hint{

    private string $hint;

    public function __construct(string $hint){
        $this->hint = $hint;
    }

    public function getHintString(){
        return $this->hint;
    }
}

?>
