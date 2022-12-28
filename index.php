<?php

// determine action

$action = isset($_GET['action']) ? $_GET['action'] : '';

// determine valid actions
switch($action){
    case 'list': 
        include 'controller/list.php'; 
        break;

    case 'add': 
        include 'controller/add.php'; 
        break;

    default: 
        include 'controller/list.php'; 
        break;
}
