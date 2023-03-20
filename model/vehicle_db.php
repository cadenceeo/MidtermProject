<?php
function get_vehicles()
{
    global $db;
    $query = 'SELECT * FROM vehicles ORDER BY price DESC';
    $statement = $db->prepare($query);
    $statement->execute();
    $vehicles = $statement->fetchAll();
    $statement->closeCursor();
    return $vehicles;
}

function get_vehicle_make($make_id){
    if (!$make_id) {
        return "All makes";
    }
    global $db;
    $query = 'SELECT * FROM vehicles WHERE make_id = :make_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':make_id', $make_id);
    $statement->execute();
    $make = $statement->fetch();
    $statement->closeCursor();
    $makes = $make['make'];
    return $makes;
}


function get_vehicle_type($type_id){
    if (!$type_id) {
        return "All types";
    }
    global $db;
    $query = 'SELECT * FROM vehicles WHERE type_id = :type_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':type_id', $type_id);
    $statement->execute();
    $type = $statement->fetch();
    $statement->closeCursor();
    $types = $type['type'];
    return $types;
}

?>