<?php
class MyList
{
    public $size;
    public $arrayList = [];

    public function __construct($size)
    {
        $this->size = $size;
    }
  
    public function ArrayList($arr = "")
    {
        if (is_array($arr) == true)
            $this->arrayList = $arr;
        else
            $this->arrayList = array();
    }
    
    public function insert($index, $obj)
    {
        $arr1 =  array_slice($this->arrayList, 0, $index);
        $arr2 = array_slice($this->arrayList, $index + 1, count($this->arrayList));
        array_push($arr1, $obj);
        $this->arrayList = array_merge($arr1, $arr2);
    }

    public function add($obj)
    {
        array_push($this->arrayList, $obj);
        return $this->arrayList;
    }
    public function remove($index)
    {
        array_splice($this->arrayList,$index,1);
        
    }
  
    public function get($index)
    {
        if ($index <= $this->size()) {
            return $this->arrayList[$index];
        } else {
            return("ERROR in ArrayList.get");
        }
    }
    public function clear()
    {
        $this->arrayList = [];
    }
    public function addAll($arr)
    {
       $this->arrayList = array_merge($this->arrayList,$arr);
    }
    public function indexOf($obj)
    {
        
        return "key = ".array_search($obj,$this->arrayList);
    }
    public function isEmpty()
    {
        return empty($this->arrayList);
    }
    public function sort()
    {
        sort($this->arrayList);
    }
    public function reset()
    {
        return reset($this->arrayList);
    }
    public function size()
    {
        $this->size = count($this->arrayList) ;
    }
}
