<?php

namespace SON\Elemento\Type;

use SON\Elemento\ElementoAbstract;

class FormularioType extends ElementoAbstract
{
    private $method;
    private $elementos;

   public function __construct($id, $name, $class,$method)
   {
       parent::__construct($id, $name, $class);
       $this->method = $method;
   }

    public function adicionarElemento(ElementoAbstract $elemento){
        $this->elementos[] = $elemento;
    }

    public function render(){
        echo "<form id='{$this->getId()}' name='{$this->getName()}' class='{$this->getClass()}' method='{$this->method}'>";
            foreach ($this->elementos as $elemento) {
                $elemento->render();
                echo "</br>";
            }
        echo "</form>";
    }
}