<?php

namespace SON\Elemento\Type;

use SON\Elemento\ElementoAbstract;

class ButtonType extends ElementoAbstract{
    private $type;
    private $value;

    public function __construct($id, $name, $class, $type, $value)
    {
        parent::__construct($id, $name, $class);
        $this->type = $type;
        $this->value = $value;

    }

    public function render()
    {
        echo "<button type='{$this->type}' id='{$this->getId()}' name='{$this->getName()}' class='{$this->getClass()}' >{$this->value}</button>";
    }
}