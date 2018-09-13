<?php

namespace classes;

class Child extends Pops {

    //substitua o metodo da classe pai
    public function sayHi() {
        echo "Hi, I am a child. <br>";
        
        parent::sayHi();
    }

}
