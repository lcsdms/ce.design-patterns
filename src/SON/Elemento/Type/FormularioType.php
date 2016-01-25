<?php

namespace SON\Elemento\Type;

use SON\Elemento\ElementoAbstract;

class Formulario extends ElementoAbstract
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
        //TODO fazer a renderização do formulario em HTML
        foreach ($this->elementos as $elemento) {
            $elemento->renderizarElemento();
        }
    }
}