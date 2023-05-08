<?php

namespace app\recursion;

class Recursion
{
    /**
     * @Description 汉诺塔递归实现
     *
     * @param integer $n 盘子数量
     * @param string $a  第一根柱子
     * @param string $b 第二根柱子
     * @param string $c 第三根柱子
     * @return void
     */
    public function hanoi(int $n,string $a,string $b,string $c)
    {
        if ($n == 1) {
            echo sprintf("move %s to %s\n", $a, $c);
        } else {
            $this->hanoi($n-1, $a, $c, $b);
            echo sprintf("move %s to %s\n", $a, $c);
            $this->hanoi($n - 1, $b, $a, $c);
        }
    }
}