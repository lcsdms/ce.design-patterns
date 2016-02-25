<?php


namespace SON;


class Validator
{
    private $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }
}