<?php

namespace app\src\linklist;

class ListNode {
    public $data = NULl;

    public $next = NULL;

    public $prev = NULL;

    public function __construct(string $data = "")
    {
        $this->data = $data;
    }
}
