<?php

namespace SON\Elemento\Type;

use SON\Elemento\ElementoAbstract;

class InputType extends ElementoAbstract
{
    private $type;
    private $placeholder;
    private $value;

    public function __construct($id, $name,$class,$type)
    {
        parent::__construct($id, $name, $class);
        $this->type= type;
    }

    public function setPlaceholder($placeholder)
    {
        $this->placeholder = $placeholder;
    }

    public function setValue($value)
    {
        $this->value = $value;
    }

    public function render()
    {
        $output = "<input type='$this->type' id='$this->getid();' name='$this->getName();' class='$this->getClass();' ";
        if(!is_null($this->value)){
            $output += "value='$this->value'";
        }
        $output += "/>";
        echo $output;
    }


}