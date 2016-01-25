<?php
namespace SON\Elemento;

abstract class ElementoAbstract implements ElementoInterface
{
    private $id;
    private $name;
    private $class;

    public function __construct($id,$name,$class)
    {
        $this->setId($id);
        $this->setName($name);
        $this->setClass($class);
    }

    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;
    }


    public function getName()
    {
        return $this->name;
    }


    public function setName($name)
    {
        $this->name = $name;
    }


    public function getClass()
    {
        return $this->class;
    }


    public function setClass($class)
    {
        $this->class = $class;
    }

}