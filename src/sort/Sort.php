<?php

namespace app\src\sort;

class Sort
{
    /**
     * @Description 冒泡排序
     *
     * @param $array
     * @return mixed
     */
    public function bubbleSort($array)
    {
        $total = count($array);
        $bound = $total - 1;

        for ($i = 0; $i < $total; $i++) {
            $flag = false; //极端情况检查循环
            $newBound = 0;
            for ($j = 0 ; $j < $bound; $j++) { //减少已经排序的循环
                if ($array[$j] > $array[$j + 1]) {
                    $swap = $array[$j + 1];
                    $array[$j + 1] = $array[$j];
                    $array[$j] = $swap;
                    $flag = true;
                    $newBound = $j;
                }
            }
            $bound = $newBound; //对于不需要排序的调整边界
            if (!$flag) {
                break;
            }
        }

        return $array;
    }

    /**
     * @Description 选择排序
     *
     * @param $array
     * @return mixed
     */
    public function selectionSort($array)
    {
        $len = count($array);

        for ($i = 0; $i < $len ; $i++) {
            $min = $i;
            for ($j = $i + 1; $j < $len; $j++) {
                if ($array[$j] < $array[$min]) {
                    $min = $j;
                }
            }
            if ($min != $i) {
                $swap = $array[$i];
                $array[$i] = $array[$min];
                $array[$min] = $swap;
            }
        }
        return $array;
    }

    /**
     * @Description 插入排序
     *
     * @param array $arr
     * @return void
     */
    public function insertionSort(array &$arr)
    {
        $len = count($arr);
        for ($i = 1; $i < $len; $i++) {
            $key = $arr[$i];
            $j = $i - 1;
            while ($j >= 0 && $arr[$j] > $key) {
                $arr[$j + 1] = $arr[$j];
                $j--;
            }
            $arr[$j + 1] = $key;
        }
    }

    private function merge(array $left, array $right) : array
    {
        $combined = [];
        $countLeft = count($left);
        $countRight = count($right);
        $leftIndex = $rightIndex = 0;

        while ($leftIndex < $countLeft && $rightIndex < $countRight) {
            if ($left[$leftIndex] > $right[$rightIndex]) {
                $combined[] = $right[$rightIndex];
                $rightIndex++;
            } else {
                $combined[] = $left[$leftIndex];
                $leftIndex++;
            }
        }

        while ($leftIndex < $countLeft) {
            $combined[] = $left[$rightIndex];
            $leftIndex++;
        }

        while ($rightIndex < $countRight) {
            $combined[] = $right[$rightIndex];
            $rightIndex++;
        }

        return $combined;
    }

    /**
     * @Description 归并排序
     *
     * @param array $arr
     * @return array
     */
    public function mergeSort(array $arr) : array
    {
        $len = count($arr);
        $mid = (int)$len / 2;
        if ($len == 1) {
            return $arr;
        }

        $left = $this->mergeSort(array_slice($arr, 0 , $mid));
        $right = $this->mergeSort(array_slice($arr, $mid));

        return $this->merge($left, $right);
    }
}