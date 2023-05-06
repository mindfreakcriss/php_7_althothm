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

    /**
     * @Description 基础遍历
     *
     * @param Node $node
     * @return void
     */
//    public function traverse(Node $node)
//    {
//        if ($node) {
//            if ($node->left) {
//                $this->traverse($node->left);
//            }
//            echo $node->data . "\n";
//            if ($node->right) {
//                $this->traverse($node->right);
//            }
//        }
//    }

    /**
     * @Description 中序遍历：左 ， 根， 右
     *
     * @param Node $node
     * @return void
     */
    public function inOrder(Node $node)
    {
        if ($node) {
            if ($node->left) {
                $this->traverse($node->left);
            }
            echo $node->data . " ";
            if ($node->right) {
                $this->traverse($node->right);
            }
        }
    }

    /**
     * @Description 前序遍历 ：根， 左， 右
     *
     * @param Node $node
     * @return void
     */
    public function preOrder(Node $node)
    {
        if ($node) {
            echo $node->data . " ";
            if ($node->left) {
                $this->traverse($node->left);
            }
            if ($node->right) {
                $this->traverse($node->right);
            }
        }
    }

    /**
     * @Description 后续遍历：左， 右， 根
     *
     * @param Node $node
     * @return void
     */
    public function postOrder(Node $node)
    {
        if ($node) {
            if ($node->left) {
                $this->traverse($node->left);
            }
            if ($node->right) {
                $this->traverse($node->right);
            }
            echo $node->data . " ";
        }
    }


    /**
     * @Description 遍历的时候利用画图的方式学习
     *
     * Pre  前序 遍历， 往 node 左边画 点 * 然后连起来
     * In   中序 遍历， 往 node 下边画 点 * 然后连起来
     * post 后序 遍历， 往 node 右边画 点 * 然后连起来
     *
     * @param Node $node
     * @param string $type
     * @return void
     */

    public function traverse(Node $node, string $type = "in-order")
    {
        switch ($type) {
            case "in-order":
                $this->inOrder($node);
                break;
            case "pre-order":
                $this->preOrder($node);
                break;
            case "post-order":
                $this->postOrder($node);
                break;
        }
    }
}