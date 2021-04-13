<?php
include_once 'Node.php';
class LinkedList
{
    public $count;
    public $firstNode;
    public $lastNode;

    public function __construct()
    {
        $this->firstNode = NULL;
        $this->lastNode = NULL;
        $this->count = 0;
    }

    public function addFirst($data)
    {
        $link = new Node($data);
        $link->next = $this->firstNode;
        $this->firstNode = $link;

        if ($this->lastNode == NULL)
            $this->lastNode = $link;

        $this->count++;
    }

    public function add($index, $data)
    {
        $link = new Node($data);
        if ($index === 1) {
            $this->addFirst($data);
        } else if ($index === $this->count + 1) {
            $this->addLast($data);
        } else if ($index >= 2 && $index <= $this->count) {
            $currentNode = $this->firstNode;
            for ($i = 1; $i < $index - 1; $i++) {
                $currentNode = $currentNode->next;
            }
            $link->next = $currentNode->next;
            $currentNode->next = $link;
            $this->count++;
        }
    }

    public function addLast($data)
    {
        if ($this->firstNode != NULL) {
            $link = new Node($data);
            $this->lastNode->next = $link;
            $link->next = NULL;
            $this->lastNode = $link;
            $this->count++;
        } else {
            $this->addLast($data);
        }
    }

    public function removeIndex($index)
    {
        if ($this->firstNode === NULL || $index > $this->count) {
            echo "Error <br/>";
        } else {
            if ($index === 1) {
                if ($this->count === 1) {
                    $this->firstNode = NULL;
                    $this->lastNode = NULL;
                    $this->count--;
                } else {
                    $temp = $this->firstNode;
                    $this->firstNode = $temp->next;
                    $temp = NULL;
                    $this->count--;
                }
            } else if ($index === $this->count) {
                $currentNode = $this->firstNode;
                for ($i = 1; $i < $this->count - 1; $i++) {
                    $currentNode = $currentNode->next;
                }
                $temp = $this->lastNode;
                $currentNode->next = $temp->next;
                $temp = NULL;
                $this->count--;
            } else if ($index > 1 && $index < $this->count) {
                $currentNode = $this->firstNode;
                for ($i = 1; $i < $index - 1; $i++) {
                    $currentNode = $currentNode->next;
                }
                $temp = $currentNode->next;
                $currentNode->next = $temp->next;
                $temp = NULL;
                $this->count--;
            } else {
                die("nap lai <br/>");
            }
        }
    }

    public function indexOf($obj)
    {
        if ($this->count === 0) {
            return false;
        } else {
            $currentNode = $this->firstNode;
            $index = 0;
            while ($obj != $currentNode->readNode()) {
                if ($currentNode->next == null) {
                    break;
                } else {
                    $index++;
                    $currentNode = $currentNode->next;
                }
            }
            if ($index === 0) {
                return false;
            } else {
                return $index + 1;
            }
        }
    }

    public function removeObj($obj)
    {
        if (!$this->indexOf($obj)) {
            echo "khong co trong danh sach";
        } else {
            $this->removeIndex($this->indexOf($obj));
        }
    }

    public function clone(){
        $cloneLinkList = new LinkedList();
        for ($currenNode = $this->firstNode; $currenNode != null; $currenNode->next)
        {
            $data = $currenNode->readNode();
            $cloneLinkList->addLast($data);
        }
            

        return $cloneLinkList;
    }

    public function contains($obj)
    {
        if ($this->indexOf($obj) == false) {
            echo $obj." Not found<br/>";
        } else {
            echo $obj." appears in list<br/>";
        }
    }

    public function size()
    {
        return "Size = " . $this->count;
    }

    public function printList()
    {
        $listData = array();
        $current = $this->firstNode;

        while ($current != NULL) {
            array_push($listData, $current->readNode());
            $current = $current->next;
        }
        return $listData;
    }
}
