<?php

namespace app\src\bst;

class Node
{
    public $data;

    public $left;

    public $right;

    public $parent;

    public function __construct(int $data = NULL, Node $parent = NULL)
    {
        $this->data = $data;
        $this->left = NULL;
        $this->right = NULL;
        $this->parent = $parent;
    }

    public function min()
    {
        $node = $this;

        while ($this->left) {
            $node = $node->left;
        }
        return $node;
    }

    public function max()
    {
        $node = $this;

        while ($this->right) {
            $node = $this->right;
        }
        return $node;
    }

    public function successor()
    {
        $node = $this;
        if ($node->right) {
            return $node->right->min();
        } else {
            return NULL;
        }
    }

    public function predecessor()
    {
        $node = $this;
        if ($node->left) {
            return $node->left->max();
        } else {
            return NULL;
        }
    }
}