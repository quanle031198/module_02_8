<?php
include_once 'ArrayList.php';

$obj = new MyList(4);
$obj->ArrayList();
$obj->size();
$obj->add(10);
$obj->add(9);
$tt = $obj->arrayList;

$listArray = new MyList(6);
$listArray->ArrayList();
$listArray->size();
$listArray->add(10);
$listArray->add(2);
$listArray->add(3);
$listArray->add(4);
$listArray->insert(1,$tt);
// $listArray->remove(1);
// echo $listArray->get(0);
$listArray->sort();
// $listArray->clear();
// $listArray->addAll($tt);
// echo $listArray->indexOf(4);
// var_dump($listArray->isEmpty()) ;
print_r($listArray->reset());



echo "<pre>";
print_r($listArray->arrayList);