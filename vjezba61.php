<?php

class Kalkulator {
    public $broj1;
    public $broj2;
    public $sabiranje;
    public $oduzimanje;
    public $mnozenje;
    public $oduzimanje;

    public function __construct($broj1, $broj2){
        $this->broj1 = $broj1;
        $this->broj2 = $broj2;
    }

    public function oduzimanje(){
        return $this->broj1 - $this->broj2;
    }
    public function mnozenje(){
        return $this->broj1 * $this->broj2;
    }
    public function djeljenje(){
        return $this->broj1 / $this->broj2;
    }

    public function __toString(){
        return "Sanbiranje: " . $this->sabiranje() .
    }


 

}


}

?>