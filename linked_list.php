<?php

require __DIR__ . '/vendor/autoload.php';

use DataStructuresAndAlgorithms\LinkedList\LinkedList;

$linkList = new LinkedList();
$linkList->add(5)->add(4)->add(3)->add(2)->add(1);
print_r($linkList);
