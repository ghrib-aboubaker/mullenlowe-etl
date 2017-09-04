<?php

namespace Mullenlowe\EtlBundle\Service;

class ClassA
{
    private $param1;
    private $param2;

    public function __construct($param1, $param2)
    {
        $this->param1 = $param1;
    	$this->param2 = $param2;
    }

    public function getGreeting()
    {
        return $this->param1 . ' ' . $this->param2;
    }
}
