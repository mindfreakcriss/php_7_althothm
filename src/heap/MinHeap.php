<?php

namespace app\src\heap;

/**
 * @Description 堆的性质
 *
 * * 如果 i 是节点的索引
 *   那么：parent(i) = floor (( i- 1) / 2 )
 *       left(i) = 2i + 1
 *       right(i) = 2i + 2
 * * 堆是一棵完全二叉树，除了最后一层，其他层的节点都是满的，最后一层的数据靠左排列
 * * 堆的父节点总比儿子大（大顶堆）OR 小（小顶堆）但儿子之间无法确定
 */
class MinHeap
{
    public $heap;
    public $count;

    public function __construct(int $size)
    {
        $this->heap = array_fill(0, $size + 1, 0);
        $this->count = 0;
    }

    /**
     * @Description 创建
     *
     * @param array $arr
     * @return void
     */
    public function create(array $arr = [])
    {
        if (!empty($arr)) {
            foreach ($arr as $val) {
                $this->insert($val);
            }
        }
    }

    /**
     * @Description 插入
     *
     * @param int $i
     * @return void
     */
    public function insert(int $i)
    {
        if ($this->count == 0) {
            $this->heap[1] = $i;
            $this->count = 2;
        } else {
            $this->heap[$this->count++] = $i;
            $this->siftUp();
        }
    }

    /**
     * @Description 上升
     *
     * @return void
     */
    public function siftUp()
    {
        $tmpPos = $this->count - 1;
        $tmp = intval($tmpPos / 2);

        while ($tmpPos > 0 && $this->heap[$tmpPos]) {
            $this->swap($tmpPos, $tmp);
            $tmpPos = intval($tmpPos / 2);
            $tmp = intval($tmpPos / 2);
        }
    }

    /**
     * @Description 下沉
     *
     * @param int $k
     * @return void
     */
    public function siftDown(int $k)
    {
        $smallest = $k;
        $left = 2 * $k;
        $right = 2 * $k + 1;

        if ($left < $this->count && $this->heap[$smallest] > $this->heap[$left]) {
            $smallest = $left;
        }

        if ($right < $this->count && $this->heap[$smallest] > $this->heap[$right]) {
            $smallest = $right;
        }

        if ($smallest != $k) {
            $this->swap($k, $smallest);
            $this->siftDown($smallest);
        }
    }

    /**
     * @Description 交换
     *
     * @param int $a
     * @param int $b
     * @return void
     */
    public function swap(int $a, int $b)
    {
        $tmp = $this->heap[$a];
        $this->heap[$a] = $this->heap[$b];
        $this->heap[$b] = $tmp;
    }

    /**
     * @Description 去除根节点并恢复堆的性质
     *
     * @return mixed
     */
    public function extractMin()
    {
        $min = $this->heap[1];
        $this->heap[1] = $this->heap[$this->count - 1];
        $this->heap[--$this->count] = 0;
        $this->siftDown(1);
        return $min;
    }

    /**
     * @Description 展示
     *
     * @return void
     */
    public function display()
    {
        echo implode("\t",array_slice($this->heap, 1)) . "\n";
    }

}