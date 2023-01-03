<?php 
include 'model/editFunction.php';

//prepare data
$manager = new editFunction();

$id = $_GET['id'];

if (isset($_POST['edit'])) {
    //show the pre-filled answer
    // $id = $_POST['id'];
    $edited_name = $_POST['placename'];
    $edited_country = $_POST['country'];  
    $edited_city = $_POST['city']; 
    $edited_price = $_POST['price']; 
    $edited_link = $_POST['link']; 
    $manager -> editEntry($id, $edited_name, $edited_country, $edited_city, $edited_price, $edited_link);
}

$place = $manager->showEntry($id);


// $db = DB::connectDB();

// $places = $db->prepare('SELECT * FROM place WHERE id = ?');

// $places->execute([$id]);
// $place = $places->fetch();


// print_r($_POST);

// if (isset($_POST['edit'])) {
//     //edit place
//     $id = $_POST['ID'];
//     $manager->edit($id,);
// }

// $places = $manager->listPlaces();


//include view
include 'view/editView.php';