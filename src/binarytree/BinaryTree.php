<?php

namespace app\src\binarytree;

include_once "BinaryNode.php";

class BinaryTree
{
    public $root = NULL;

    public function __construct(BinaryNode $node)
    {
        $this->root = $node;
    }

    public function traverse(BinaryNode $node, int $level = 0)
    {
        if ($node) {
            echo str_repeat("-", $level);
            echo $node->data . "\n";

            if ($node->left) {
                $this->traverse($node->left, $level + 1);
            }

            if ($node->right) {
                $this->traverse($node->right, $level + 1);
            }
        }
    }
}
