<?php

namespace DataStructuresAndAlgorithms\LinkedList;

class LinkedList
{
    public $head;
    public $tail;

    public function __construct()
    {
        $this->head = null;
        $this->tail = null;
    }

    public function add($value)
    {
        $node = new Node($value);
        if (is_null($this->head)) {
            $this->head = $node;
        } else {
            $this->tail->next = $node;
        }
        $this->tail = $node;

        return $this;
    }
}