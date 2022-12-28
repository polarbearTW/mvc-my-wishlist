<?php 
include 'model/addFunction.php';

$add_manager = new addFunction();

if (isset($_POST['add'])) {
    // add comment
    $add_manager->addPlaces($_POST);
}

//include view

include 'view/addView.php';


