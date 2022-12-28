<?php
include_once 'db.php';

class listFunction{

    public function listPlaces()
    {
        $db = DB::connectDB();

        $places = $db->query('SELECT * FROM place');
        $places = $places->fetchAll(PDO::FETCH_ASSOC);
        //FETCH_ASSOC means only fetch field name, instead both field name & index

        return $places;
    }

    public function listPlace($id)
    {
        $db = DB::connectDB();

        $places = $db->prepare('SELECT * FROM place WHERE id = ?');
        $places->execute([$id]);

        $place = $places->fetch();

        return $place;
    }

    public function deletePlace($id)
    {
        $db = DB::connectDB();

        $places = $db->prepare('DELETE FROM place WHERE id = ?');
        $places->execute([$id]);
    }

}