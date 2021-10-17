<?php

require __DIR__ . '/vendor/autoload.php';

use DataStructuresAndAlgorithms\LinkedList\LinkedList;


// $list = new LinkedList();
// $list->insert(10)
//     ->insert(20)
//     ->insert(30)
//     ->insert(40)
//     ->insert(50)
//     ->insert(60)
//     ->insert(70)
//     ->insert(80)
//     ->insertAt(2, 100)
//     ->deleteFromBeg()
//     ->deleteAtLast();

$list = new LinkedList();
$list->insert(10)
    ->insert(20)
    ->insert(30)
    ->insert(40)
    ->insert(50)
    ->insert(60)
    ->insert(70)
    ->insert(80)
    ->insertAt(2, 100)
    ->reverse();

print_r($list);
