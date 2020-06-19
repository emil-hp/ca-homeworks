<?php

namespace Emil\Select;

abstract class Aselect {
    protected $name;
    protected $values;

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }  
    public function setValue($value) {
        if(is_array($value)) {
            foreach ($value as $key => $browser) {
                $this->values[] = $browser;
            }
        }
    }
    public function getValue() {
        return $this->values;
    }
    protected function makeOptions($value) {
        foreach ($value as $key) {
            echo "<option value='$key'>" .$key. "</option>";
        }
    }
   
    abstract public function makeSelect();
       
 }
