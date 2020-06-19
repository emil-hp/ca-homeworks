<?php

namespace Emil\Select;

class HtmlSelect {

    public function makeSelect() {
        echo "<select name =".$this->getName(). "class=/".BOOTSTRAP_SELECT_CLASS.">";
        $this->makeOptions($this->getVaue());
        echo"</select>";
    }
}

