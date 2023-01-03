<?php 
include 'model/listFunction.php';

//prepare data
$manager = new listFunction();

if (isset($_POST['delete'])) {
    // delete place
    $id = $_POST['ID'];
    $manager->deletePlace($id);
// } elseif (isset($_POST['edit'])) {
//     //edit place
//     $id = $_POST['ID'];
//     $manager->editPlace($id, );
}

$places = $manager->listPlaces();

//include view

include 'view/listView.php';
