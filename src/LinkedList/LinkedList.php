<?php

namespace DataStructuresAndAlgorithms\LinkedList;

use DataStructuresAndAlgorithms\LinkedList\Node;

class LinkedList
{
    public $head;
    public $tail;

    public function __construct()
    {
        $this->head = null;
        $this->tail = null;
    }

    public function insert($value)
    {
        $node = new Node($value);
        if (!$this->head) {
            $this->head = $node;
            $this->tail = $node;
        } else {
            $this->tail->next = $node;
            $this->tail = $node;
        }
        return $this;
    }

    public function traverse()
    {
        $start = $this->head;
        while ($start != null) {
            echo $start->data;
            $start = $start->next;
        }
    }

    public function insertAt($position, $value)
    {
        $newNode = new Node($value);
        $pos = 1;
        $currentNode = $this->head;
        while ($pos < $position) {
            $currentNode = $currentNode->next;
            $pos++;
        }

        $newNode->next = $currentNode->next;
        $currentNode->next = $newNode;
        return $this;
    }

    public function deleteFromBeg()
    {
        $this->head = $this->head->next;
        return $this;
    }

    public function deleteAtLast()
    {
        $currentNode = $this->head;
        while ($currentNode->next->next) {
            $currentNode = $currentNode->next;
        }
        $currentNode->next = null;
        $this->tail = $currentNode;
        return $this;
    }

    public function deleteFromPosition($position)
    {
        $currentNode = $this->head;
        $pos = 1;
        while ($pos < $position) {
            $currentNode = $currentNode->next;
            $pos++;
        }

        $currentNode->next = $currentNode->next->next;
        return $this;
    }

    public function reverse()
    {
        $current = $this->head;
        $prev = null;
        $next = null;

        while ($current) {
            $next = $current->next;
            $current->next = $prev;
            $prev = $current;
            $current = $next; // for iteration
        }

        $this->tail = $this->head;
        $this->head = $prev;
        return $this;
    }
}
