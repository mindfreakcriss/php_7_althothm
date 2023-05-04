<?php

namespace app\src\tree;

class TreeNode
{
    public $data = NULL;
    public $children = [];

    public function __construct(string $data = NULl)
    {
        $this->data = $data;
    }

    public function addChildren(TreeNode $node)
    {
        $this->children[] = $node;
    }
}