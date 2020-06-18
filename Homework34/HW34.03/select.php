<?php

class select {
    public $name;
    public $value;

    function setName($name) {
        $this->name = $name;
    }

    function getName() {
        return $this->name;
    }

    function setValue($value) {
        if(is_array($value)){
            foreach($value as $key => $browser){
                $this->value[] = $browser;
            }
        }
    }
    public function getValue() {
        return $this-> value;
    }
     
    public function makeOptions($value) {
        foreach ($value as $key) {
            echo "<option value='$key'>" .$key. "</option>";
        }
    }
    public function makeSelect() {
        echo "<select name=" .$this->getName(). ">";
        echo "<option value= '' selected>Choose browser</option>";
        echo $this->makeOptions($this->value);
        echo "</select>";
    }
}

?>