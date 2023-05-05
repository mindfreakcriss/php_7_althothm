<?php

require_once "./src/linklist/LinkedList.php";
require_once "./src/tree/Tree.php";
require_once "./src/binarytree/BinaryTree.php";

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


$final = new \app\src\binarytree\BinaryNode("Final");

$tree = new \app\src\binarytree\BinaryTree($final);

$semiFinal1 = new \app\src\binarytree\BinaryNode("Semi Final 1");
$semiFinal2 = new \app\src\binarytree\BinaryNode("Semi Final 2");
$quarterFinal1 = new \app\src\binarytree\BinaryNode("Quarter Final 1");
$quarterFinal2 = new \app\src\binarytree\BinaryNode("Quarter Final 2");
$quarterFinal3 = new \app\src\binarytree\BinaryNode("Quarter Final 3");
$quarterFinal4 = new \app\src\binarytree\BinaryNode("Quarter Final 4");

$semiFinal1->addChildren($quarterFinal1, $quarterFinal2);
$semiFinal2->addChildren($quarterFinal3, $quarterFinal4);

$final->addChildren($semiFinal1, $semiFinal2);

$tree->traverse($tree->root);

