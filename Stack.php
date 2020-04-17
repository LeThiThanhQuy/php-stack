<?php


class Stack
{
    protected $stack;
    protected $limit;

    public function __construct($limit=20)
    {
        $this->limit = $limit;
        $this->stack = [];
    }

    function push($item){
        if (!$this->isFull()){
            array_unshift($this->stack, $item);
        } else {
            echo "Stack full";
        }
    }
    function pop(){
        if (!$this->isEmply()){
            return array_shift($this->stack);
        } else {
            echo "Stack empty";
        }
    }

    function top(){
        if (!$this->isEmply()){
            return end($this->stack);
        }else {
            echo "Stack empty";
        }
    }

    function getStack(){
        return $this->stack;
    }

    function isEmply(){
        return empty($this->stack);
    }
    function isFull(){
        return count($this->stack) == $this->limit;
    }
}