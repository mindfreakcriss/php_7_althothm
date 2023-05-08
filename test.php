<?php

require_once "./src/linklist/LinkedList.php";
require_once "./src/tree/Tree.php";
require_once "./src/binarytree/BinaryTree.php";
require_once "./src/bst/Bst.php";
require_once "./src/sort/Sort.php";
require_once "./src/recursion/Recursion.php";

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

//Tree
//$ceo = new \app\src\tree\TreeNode("CEO");
//$tree = new \app\src\tree\Tree($ceo);
//
//$cto = new \app\src\tree\TreeNode("CTO");
//$cfo = new \app\src\tree\TreeNode("CFO");
//$cmo = new \app\src\tree\TreeNode("CMO");
//$coo = new \app\src\tree\TreeNode("COO");
//
//$ceo->addChildren($cto);
//$ceo->addChildren($cfo);
//$ceo->addChildren($cmo);
//$ceo->addChildren($coo);
//
//$seniorArchitect = new \app\src\tree\TreeNode("Senior Architect");
//$softwareEngineer = new \app\src\tree\TreeNode("Software Engineer");
//$userInterfaceDesigner = new \app\src\tree\TreeNode("User Interface designer");
//$qualityAssuranceEngineer = new \app\src\tree\TreeNode("Quality Assurance Engineer");
//
//$cto->addChildren($seniorArchitect);
//$seniorArchitect->addChildren($softwareEngineer);
//$cto->addChildren($qualityAssuranceEngineer);
//$cto->addChildren($userInterfaceDesigner);
//
//$tree->traverse($tree->root);


//$final = new \app\src\binarytree\BinaryNode("Final");
//
//$tree = new \app\src\binarytree\BinaryTree($final);
//
//$semiFinal1 = new \app\src\binarytree\BinaryNode("Semi Final 1");
//$semiFinal2 = new \app\src\binarytree\BinaryNode("Semi Final 2");
//$quarterFinal1 = new \app\src\binarytree\BinaryNode("Quarter Final 1");
//$quarterFinal2 = new \app\src\binarytree\BinaryNode("Quarter Final 2");
//$quarterFinal3 = new \app\src\binarytree\BinaryNode("Quarter Final 3");
//$quarterFinal4 = new \app\src\binarytree\BinaryNode("Quarter Final 4");
//
//$semiFinal1->addChildren($quarterFinal1, $quarterFinal2);
//$semiFinal2->addChildren($quarterFinal3, $quarterFinal4);
//
//$final->addChildren($semiFinal1, $semiFinal2);
//
//$tree->traverse($tree->root);

//BST
//$tree = new \app\src\bst\Bst(10);
//
//$tree->insert(12);
//$tree->insert(6);
//$tree->insert(3);
//$tree->insert(8);
//$tree->insert(15);
//$tree->insert(13);
//$tree->insert(36);
//
////$tree->traverse($tree->root);
////
////$tree->remove(15);
////
////echo "------\n";
//
//$tree->traverse($tree->root, "pre-order");
//echo "\n";
//$tree->traverse($tree->root, 'in-order');
//echo "\n";
//$tree->traverse($tree->root, 'post-order');

//sort
//$array = [20,45,93,67,10,97,52,88,33,92];
//$sort = new \app\src\sort\Sort();
////$array = $sort->bubbleSort($array);
////$array = $sort->selectionSort($array);
////$sort->insertionSort($array);
//$array = $sort->mergeSort($array);
//echo implode(",",$array);


//BFS
//$root = new \app\src\tree\TreeNode("8");
//
//$tree = new \app\src\tree\Tree($root);
//
//$node1 = new \app\src\tree\TreeNode("3");
//$node2 = new \app\src\tree\TreeNode("10");
//$root->addChildren($node1);
//$root->addChildren($node2);
//
//$node3 = new \app\src\tree\TreeNode("1");
//$node4 = new \app\src\tree\TreeNode("6");
//$node5 = new \app\src\tree\TreeNode("14");
//$node1->addChildren($node3);
//$node1->addChildren($node4);
//$node2->addChildren($node5);
//
//$node6 = new \app\src\tree\TreeNode("4");
//$node7 = new \app\src\tree\TreeNode("7");
//$node8 = new \app\src\tree\TreeNode("13");
//
//$node4->addChildren($node6);
//$node4->addChildren($node7);
//$node5->addChildren($node8);
//
////$visited = $tree->bfs($tree->root);
//
//$visited = $tree->dfs($tree->root);
//
//while (!$visited->isEmpty()) {
//    echo $visited->dequeue()->data. "\n";
//}

//Recursion
$recursion = new \app\recursion\Recursion();
$recursion->hanoi(3,"A","B","C");


