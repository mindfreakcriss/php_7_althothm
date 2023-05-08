<?php

namespace app\src\heap;

class Heap
{
    public $heap;

    public function __construct()
    {
        $this->heap = new \SplMaxHeap();
    }


    public function create($array)
    {
        foreach ($array as $arr) {
            $this->heap->insert($arr);
        }
    }

    public function display()
    {
        while (!$this->heap->isEmpty()) {
            echo $this->heap->extract() . "\t";
        }
    }
}