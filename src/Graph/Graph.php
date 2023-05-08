<?php

namespace app\src\graph;

class Graph
{
    /**
     * @return void 邻接矩阵
     */
    public function adjacencyMatrix()
    {

    }

    /**
     * @return void 邻接链表
     */
    public function adjacencyList()
    {

    }


    /**
     * @Description 图的广度优先搜索
     *
     * @param array $graph
     * @param int $start
     * @param array $visited
     * @return \SplQueue
     */
    public function bfs(array &$graph, int $start, array $visited) : \SplQueue
    {
        $queue = new \SplQueue();
        $path = new \SplQueue();

        $queue->enqueue($start);
        $visited[$start] = 1;

        while (!$queue->dequeue()) {
            $node = $queue->dequeue();
            $path->enqueue($node);

            foreach ($graph[$node] as $key => $vertex) {
                if (!$visited[$key] && $vertex == 1) {
                    $vertex[$key] = 1;
                    $queue->enqueue($key);
                }
            }
            return $path;
        }
    }

    /**
     * @Description 图的深度遍历
     *
     *
     * @param array $graph
     * @param int $start
     * @param array $visited
     * @return \SplQueue
     */
    public function dps(array &$graph, int $start, array $visited) : \SplQueue
    {
        $stack = new \SplStack();
        $path = new \SplQueue();

        $stack->push($start);
        $visited[$start] = 1;

        while (!$stack->isEmpty()) {
            $node = $stack->pop();
            $path->enqueue($node);

            foreach ($graph[$node] as $key => $vertex) {
                if (!$visited[$key] && $vertex == 1) {
                    $visited[$key] = 1;
                    $stack->push($key);
                }
            }
        }
        return $path;
    }

    //拓扑排序 kahn 算法

    //最短路径 floyd-warshall 算法

    //单源最短路径 dijksatra`s 算法

    //多源bellman-ford 算法

    //最小生成树 MST Prim`s 算法


    //生成树算法 Kruskal`s 算法
}