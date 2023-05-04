<?php

namespace app\src\linklist;

class IterateLinkList implements \Iterator
{
    private $_currentNode = NULL;
    private $_currentPosition = 0;

    private $_firstNode = NULL;

    public function current()
    {
        // TODO: Implement current() method.
        return $this->_currentNode->data;
    }

    public function next()
    {
        // TODO: Implement next() method.
        $this->_currentPosition++;
        $this->_currentNode = $this->_currentNode->next;
    }

    public function rewind()
    {
        // TODO: Implement rewind() method.
        $this->_currentPosition = 0;
        $this->_currentNode = $this->_firstNode;
    }

    public function valid()
    {
        // TODO: Implement valid() method.
        return $this->_currentNode !== NULL;
    }

    public function key()
    {
        // TODO: Implement key() method.
        return $this->_currentPosition;
    }
}