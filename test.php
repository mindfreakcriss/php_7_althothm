<?php

require_once "./src/linklist/LinkedList.php";

$link = new \app\src\linklist\LinkedList();

$link->insert("Introduction to algorithm");
$link->insert("Introduction to PHP");
$link->insert("Programming Intelligence");

$link->display();
