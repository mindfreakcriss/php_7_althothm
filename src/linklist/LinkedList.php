<?php

namespace app\src\linklist;

include_once "ListNode.php";

class LinkedList
{
    private $_firstNode = NULL;

    private $_totalNodes = 0;

    /**
     * @Description 数据插入(尾插入)
     *
     * @param string|NULL $data
     * @return true
     */
    public function insert(string $data = NULL)
    {
        $newNode = new ListNode($data);

        if ($this->_firstNode == NULL) {
            $this->_firstNode = &$newNode;
        } else {
            $currentNode = $this->_firstNode;
            while ($currentNode->next !== NULL) {
                $currentNode = $currentNode->next;
            }
            $currentNode->next = $newNode;
        }
        $this->_totalNodes++;
        return true;
    }

    /**
     * @Description 查询
     *
     * @param string|NULL $data
     * @return bool|void
     */
    public function search(string $data = NULL)
    {
        if ($this->_totalNodes) {
            $currenNode = $this->_firstNode;
            while ($currenNode !== NULL) {
                if ($currenNode->data == $data) {
                    return true;
                } else {
                    $currenNode = $currenNode->next;
                }
            }
            return false;
        }
    }

    /**
     * @Description 首插
     *
     * @param string|NULL $data
     * @return true
     */
    public function insertAtFirst(string $data = NULL) : bool
    {
        $newNode = new ListNode($data);
        if ($this->_firstNode === NULL) {
            $this->_firstNode = $newNode;
        } else {
            $currentNode = $this->_firstNode;
            $this->_firstNode = &$newNode;
            $newNode->next = $currentNode;
        }
        $this->_totalNodes++;
        return true;
    }

    /**
     * @Description 双指针逻辑，快慢指针
     *
     * @param string|NULL $data
     * @param string|NULL $query
     * @return void
     */
    public function insertBefore(string $data = NULL, string $query = NULL)
    {
        $newNode = new ListNode($data);

        if ($this->_firstNode) {
            $previous = NULL;
            $currentNode = $this->_firstNode;
            while ($currentNode !== NULL) {
                if ($currentNode->data === $query) {
                    $newNode->next = $currentNode;
                    $previous->next = $newNode;
                    $this->_totalNodes++;
                    break;
                }
                $previous = $currentNode;
                $currentNode = $currentNode->next;
            }
        }
    }

    /**
     * @Description 依旧双指针
     *
     * @param string|NULL $data
     * @param string|NULL $query
     * @return void
     */
    public function insertAfter(string $data = NULL, string $query = NULL)
    {
        $newNode = new ListNode($data);

        if ($this->_totalNodes) {
            $nextNode = NULL;
            $currentNode = $this->_firstNode;
            while ($currentNode !== NULL) {
                if ($currentNode->data == $query) {
                    if ($nextNode !== NULL) {
                        $newNode->next = $nextNode;
                        $currentNode->next = $newNode;
                        $this->_totalNodes++;
                        break;
                    }
                    $currentNode = $currentNode->next;
                    $newNode = $currentNode->next;
                }
            }
        }
    }

    /**
     * @Description 删除头
     *
     * @return bool
     */
    public function deleteFirst() : bool
    {
        if ($this->_firstNode !== NULL) {
            if ($this->_firstNode->next !== NULL) {
                $this->_firstNode = $this->_firstNode->next;
            } else {
                $this->_firstNode = NULL;
            }
            $this->_totalNodes --;
            return true;
        }
        return false;
    }

    /**
     * @Description 删除最后一个
     *
     * @return bool
     */
    public function deleteLast()
    {
        if ($this->_firstNode !== NULL) {
            $currentNode = $this->_firstNode;
            if ($currentNode->next === NULL) {
                $this->_firstNode = NULL;
            } else {
                $previousNode = NULL;
                while($currentNode->next !== NULL) {
                    $previousNode = $currentNode;
                    $currentNode = $currentNode->next;
                }
                $previousNode->next = NULL;
                $this->_totalNodes--;
                return true;
            }
        }

        return false;
    }

    public function display()
    {
        echo "Total book titles:".$this->_totalNodes."\n";
        $currentNode = $this->_firstNode;
        while ($currentNode !== NULL) {
            echo $currentNode->data . "\n";
            $currentNode = $currentNode->next;
        }
    }
}