<?php


namespace SON\Elemento\Type;


use SON\Elemento\ElementoAbstract;

class LabelType extends ElementoAbstract
{
    private $for;
    private $value;
    public function __construct($id, $name, $class,$value,ElementoAbstract $for)
    {
        parent::__construct($id, $name, $class);
        $this->value = $value;
        $this->for= $for;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function render()
    {
        $output = "<label for='{$this->for->getId()}' id='{$this->getId()}' name='{$this->getName()}' class='{$this->getClass()}' > {$this->getValue()} </label>";

    }

}