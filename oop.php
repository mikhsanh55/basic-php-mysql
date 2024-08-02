<?php

class Human {
    public $skin = "brown";
    public $eyeColor = "red";

    // public, private, protected

    private function takeBath()
    {
        echo "Take a bath";
    }
    
    public function punch()
    {
        return "Do the punch";
    }

    public function kick()
    {
        return "Do the kick";
    }
}

// object initiation

class Handphone {
    public function playGame() {
        echo "Play the game";
    }

    private function playMarioBros()
    {
        echo "Play mario bros";
    }
}
class SmartPhone extends Handphone {
    private function scanFingerPrint()
    {
        echo "Scan the finger print";
    }

    public function showAbilities()
    {
        $this->playGame();
        echo "<br />";
        $this->scanFingerPrint();
        echo "<br />";
        $this->playMarioBros();
    }
}

// $vivoHandphone = new SmartPhone();
// $vivoHandphone->playGame();
