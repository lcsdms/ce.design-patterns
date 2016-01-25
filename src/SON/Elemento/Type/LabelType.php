<?php


namespace SON\Elemento\Type;


use SON\Elemento\ElementoAbstract;

class LabelType extends ElementoAbstract
{
    public function __construct($id, $name, $class,$value)
    {
        parent::__construct($id, $name, $class);
        $this->value = $value;
    }

    public function render()
    {
        // TODO: Implement render() method.
    }

}