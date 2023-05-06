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

    /**
     * @Description 右子树的最小值
     *
     * @return null
     */
    public function successor()
    {
        $node = $this;
        if ($node->right) {
            return $node->right->min();
        } else {
            return NULL;
        }
    }

    /**
     * @Description 左子树的最大值
     *
     * @return null
     */
    public function predecessor()
    {
        $node = $this;
        if ($node->left) {
            return $node->left->max();
        } else {
            return NULL;
        }
    }

    /**
     * @Description 根据自己的情况删除节点，同样引用了双指针
     *
     * 1: 只有一个根节点
     * 2：只有一个左（右）节点
     * 3：左右节点都有，需要找到 左子树的最大值或者又子树的最大值 顶替 删除节点，保证二叉查询树的平衡性
     *
     * @return void
     */
    public function delete()
    {
        $node = $this;
        if (!$node->left && !$node->right) {
            if ($node->parent->left === $node) {
                $node->parent->left = NULL;
            } else {
                $node->parent->right = NULL;
            }
        } elseif ($node->left && $node->right) {
            $successor = $node->successor();
            $node->data = $successor->data;
            $successor->delete(); //删除右子树的最小值
        } elseif ($node->left) {
            if ($node->parent->left === $node) {
                $node->parent->left = $node->left;
                $node->left->parent = $node->parent->left;
            } else {
                $node->parent->right = $node->right;
                $node->right->parent = $node->parent->right;
            }
            $node->left = NULL;
        } elseif ($node->right) {
            if ($node->parent->left === $node) {
                $node->parent->left = $node->right;
                $node->right->parent = $node->parent->left;
            } else {
                $node->parent->right = $node->right;
                $node->right->parent = $node->parent->right;
            }
            $node->right = NULL;
        }
    }
}