<?php
include_once 'db.php';

class editFunction{

    function showEntry($id) 
    {
        $db = DB::connectDB();

        $places = $db->prepare('SELECT * FROM place WHERE id = ?');
        
        $places->execute([$id]);
        $place = $places->fetch();

        return $place;

    }

    function editEntry($id,$edited_name, $edited_country,$edited_city,$edited_price, $edited_link) 
    {
        $db = DB::connectDB();

        $places = $db->prepare('UPDATE place SET name=?, country=?, city=?, price=?, link=? WHERE id=?');

        // $places = $db->prepare('UPDATE place SET name = '.$edited_name.', country = '.$edited_country.', city='.$edited_city.', price='.$edited_price.', link='.$edited_link.' WHERE id= ?');
        
        $places->execute([$edited_name, $edited_country,$edited_city,$edited_price, $edited_link, $id]);
    }
}