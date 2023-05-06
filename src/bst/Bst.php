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
                        $node->right = new Node($data, $node);
                        $node = $node->right;
                        break;
                    }
                } elseif ($data < $node->data) {
                    if ($node->left) {
                        $node = $node->left;
                    } else {
                        $node->left = new Node($data, $node);
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

    /**
     * @Description 删除节点
     *
     * @param int $data
     * @return void
     */
    public function remove(int $data)
    {
        $node = $this->search($data);
        if ($node) {
            $node->delete();
        }
    }
}