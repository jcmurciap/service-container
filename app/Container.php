<?php

class Container
{
    protected $bindings = [];

    public function bind($abstract, Closure $concrete)
    {
        $this->bindings[$abstract] = $concrete;
    }

    public function make($abstract)
    {
        if (!isset($this->bindings[$abstract])) {
            throw new Exception("Service {$abstract} not registered.");
        }
        return $this->bindings[$abstract];
    }
}