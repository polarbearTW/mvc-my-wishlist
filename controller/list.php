<?php 
include 'model/listFunction.php';

//prepare data
$manager = new listFunction();

if (isset($_POST['delete'])) {
    // delete comment
    $id = $_POST['ID'];
    $manager->deletePlace($id);
} 

echo $id;

$places = $manager->listPlaces();

//include view

include 'view/listView.php';
