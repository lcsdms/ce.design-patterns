<?php

namespace SON\Elemento\Type;

use SON\Elemento\ElementoAbstract;

class InputType extends ElementoAbstract
{
    private $type;
    private $placeholder;

    public function __construct($id, $name,$class,$type)
    {
        parent::__construct($id, $name, $class);
        $this->type= type;
    }

    public function setPlaceholder($placeholder)
    {
        $this->placeholder = $placeholder;
    }


    public function render()
    {
        // TODO: Implement render() method.
    }


}