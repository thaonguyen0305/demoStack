<?php

class Book
{   
    protected $stack;
    protected $limit;

    public function __construct( $limit )
    {
        $this->stack = [];
        $this->limit = $limit;
    }

    public function push(string $item)
    {
        if ($this->isFull()) {
            throw new Exception("Stack is full");
        } else {  
            array_push($this->stack, $item); 
        }
    }

    public function pop()
    {
        if($this->isEmpty()) {
            throw new Exception("Stack is empty");
        } else { 
        array_pop($this->stack);
        }
    }

    public function top()
    {
        return end($this->stack);
    }

    public function isEmpty()
    {
        return empty($this->stack);
    }

    public function isFull() {
        return count($this->stack) >= $this->limit;
    }
}