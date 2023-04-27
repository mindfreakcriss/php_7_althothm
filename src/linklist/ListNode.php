<?php

namespace app\src\linklist;

class ListNode {
    public $data = NULl;

    public $next = NULL;

    public function __construct(string $data = "")
    {
        $this->data = $data;
    }
}
