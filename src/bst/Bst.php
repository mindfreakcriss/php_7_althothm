<?php

namespace app\src\bst;

include_once "Node.php";

//二叉查询树：左边节点小于根节点，右边节点大于根节点

class Bst
{
    public $root = NULL;

    public function __construct(int $data)
    {
        $this->root = new Node($data);
    }

    public function isEmpty() : bool
    {
        return $this->root === NULL;
    }

    /**
     * @Description 插入
     *
     * @param int $data
     * @return Node|mixed|null
     */
    public function insert(int $data)
    {
        if ($this->isEmpty()) {
            $node = new Node($data);
            $this->root = $node;
            return $node;
        } else {
            $node = $this->root;
            while ($node) {
                if ($data > $node->data) {
                    if ($node->right) {
                        $node = $node->right;
                    } else {
                        $node->right = new Node($data);
                        $node = $node->right;
                        break;
                    }
                } elseif ($data < $node->data) {
                    if ($node->left) {
                        $node = $node->left;
                    } else {
                        $node->left = new Node($data);
                        $node = $node->left;
                        break;
                    }
                } else {
                    break;
                }
            }
            return $node;
        }
    }

    /**
     * @Description 查找
     *
     * @param int $data
     * @return Node|false|mixed|null
     */
    public function search(int $data)
    {
        if ($this->isEmpty()) {
            return false;
        }

        $node = $this->root;
        while ($node) {
            if ($node->data < $data) {
                if ($node->right) {
                    $node = $node->right;
                }
            } elseif ($node->data > $data) {
                if ($node->left) {
                    $node = $node->left;
                }
            } else {
                break;
            }
        }
        return $node;
    }

    public function delete()
    {
        $node = $this;
        if ($node->left && !$node->right) {
            if ($node->parent->left === $node) {
                $node->parent->left = NULL;
            } else {
                $node->parent->right = NULL;
            }
        } elseif ($node->left && $node->right) {
            $successor = $node->successor();
            $node->data = $successor->data;
            $successor->delete();
        } elseif ($node->left) {
            if ($node->parent->left === $node) {
                $node->parent->left == $node->left;
                $node->left->parent = 
            }
        }
    }
}