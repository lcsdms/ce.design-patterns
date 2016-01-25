<?php

namespace SON\Elemento\Type;

use SON\Elemento\ElementoAbstract;

class InputType extends ElementoAbstract
{
    private $type;
    private $placeholder;
    private $value;
    private $textLabel;
    private $labelClass;

    public function __construct($id, $name,$class,$type, $textLabel = null,$labelClass = null)
    {
        parent::__construct($id, $name, $class);
        $this->type= $type;
        $this->textLabel= $textLabel;
        $this->labelClass= $labelClass;
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
        if(!is_null($this->textLabel)){
            $output = "<label for='{$this->getId()}' ";
            if(!is_null($this->labelClass)){
                $output.= "class='{$this->labelClass}'";
            }
            $output .= ">{$this->textLabel}</label> ";
        }
     $output .= "<input type='$this->type' id='{$this->getId()}' name='{$this->getName()}' class='{$this->getClass()}' ";
        if(!is_null($this->value)){
            $output .= "value='$this->value'";
        }
        $output .= "/>";
        echo $output;
    }


}