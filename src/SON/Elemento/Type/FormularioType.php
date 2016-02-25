<?php

namespace SON\Elemento\Type;

use SON\Elemento\ElementoAbstract;
use SON\Validator;

class FormularioType extends ElementoAbstract
{
    private $method;
    private $elementos;
    private $validator;

   public function __construct($id, $name, $class,$method,Validator $validator)
   {
       parent::__construct($id, $name, $class);
       $this->method = $method;
       $this->validator = $validator;
   }

    public function adicionarElemento(ElementoAbstract $elemento){
        $this->elementos[] = $elemento;
    }

    public function render(){

        echo "<form id='{$this->getId()}' name='{$this->getName()}' class='{$this->getClass()}' method='{$this->method}'>";
        echo "<h1>{$this->getName()}</h1>";
            foreach ($this->elementos as $elemento) {
                $elemento->render();
                echo "</br>";
            }
        echo "</form>";
    }
}