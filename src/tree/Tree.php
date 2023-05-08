<?php

namespace app\src\tree;

include_once "TreeNode.php";

class Tree
{
    public $root = NULL;
    public function __construct(TreeNode $node)
    {
        $this->root = $node;
    }

    public function traverse(TreeNode $node, int $level = 0)
    {
        if ($node) {
            echo str_repeat("-", $level);
            echo $node->data . "\n";

            foreach ($node->children as $childNode) {
                $this->traverse($childNode, $level + 1);
            }
        }
    }

    /**
     * @Description 广度优先搜索
     *
     * @param TreeNode $node
     * @return \SplQueue
     */
    public function bfs(TreeNode $node) : \SplQueue {
        $queue = new \SplQueue();
        $visited = new \SplQueue();

        $queue->enqueue($node);

        while (!$queue->isEmpty()) {
            $current = $queue->dequeue();
            $visited->enqueue($current);

            foreach ($current->children as $child) {
                $queue->enqueue($child);
            }
        }
        return $visited;
    }

    /**
     * @Description 深度优先
     *
     * @param TreeNode $node
     * @return \SplQueue
     */
    public function dfs(TreeNode $node)
    {
        $stack = new \SplStack();
        $visited = new \SplQueue();

        $stack->push($node);

        while (!$stack->isEmpty()) {

            $current = $stack->pop();
            $visited->enqueue($current);

            foreach ($current->children as $child) {
                $stack->push($child);
            }
        }
        return $visited;
    }
}