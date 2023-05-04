<?php

require_once "./src/linklist/LinkedList.php";
require_once "./src/tree/Tree.php";

//myself linklist
//$link = new \app\src\linklist\LinkedList();
//
//$link->insert("Introduction to algorithm");
//$link->insert("Introduction to PHP");
//$link->insert("Programming Intelligence");
//$link->insert("Math");
//
//$link->display();
//
//$link->reverse();
//
//$link->display();

////sqldoublelinklist
//$bookTitles = new SplDoublyLinkedList();
//$bookTitles->push("Introduction to algorithm");
//$bookTitles->push("Introduction to PHP");
//$bookTitles->push("Programming Intelligence");
//$bookTitles->push("Math");
//$bookTitles->add(1, "English");
//$bookTitles->add(3,"Graph Theory");
//
//$bookTitles->setIteratorMode(SplDoublyLinkedList::IT_MODE_FIFO);
//
//for ($bookTitles->rewind(); $bookTitles->valid(); $bookTitles->next()) {
//    echo $bookTitles->current()."\n";
//}
//
//echo "---------\n";
//
//$bookTitles->setIteratorMode(SplDoublyLinkedList::IT_MODE_LIFO);
//
//for ($bookTitles->rewind(); $bookTitles->valid(); $bookTitles->next()) {
//    echo $bookTitles->current()."\n";
//}

//stack
//$bookTitles = new SplStack();
//$bookTitles->push("Introduction to PHP");
//$bookTitles->push("Mastering Javasript");
//$bookTitles->push("Mysql Workbench tutorial");
//echo $bookTitles->pop();
//echo "\n";
//echo $bookTitles->pop();


$ceo = new \app\src\tree\TreeNode("CEO");
$tree = new \app\src\tree\Tree($ceo);
$tree->traverse($ceo);

