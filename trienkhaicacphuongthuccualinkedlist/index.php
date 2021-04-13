<?php
include_once 'LinkedList.php';
$linkedList = new LinkedList();

$linkedList->addFirst("Introduction to Algorithm");
$linkedList->addFirst(32);
$linkedList->addFirst(1);
$linkedList->addLast("dasdasdas");
$linkedList->add(2,'ffff');
// $linkedList->removeIndex(2);
// echo $linkedList->indexOf(32);
// $linkedList->removeObj(32);
// $linkedList->contains(32);

echo $linkedList->size();
echo "<pre>";
// print_r($linkedList->clone());
var_dump($linkedList->firstNode);
echo "<hr>";
print_r($linkedList->printList());
