<?php
include_once 'db.php';
class addFunction{
    public function addPlaces($entry){

        if($entry['price']==''){
            $price=0;
        } else {
            $price=$entry['price'];
        }

        $db = DB::connectDB();

        $newEntry = $db->prepare('
            INSERT INTO place (name, country, city, price, link)
            VALUES (?, ?, ?, ?, ?)
        ');
        $newEntry->execute([$entry['placename'], $entry['country'], $entry['city'], $price, $entry['link']]);
    }


}