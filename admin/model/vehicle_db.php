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

function get_types()
{
    global $db;
    $query = 'SELECT * FROM types ';
    $statement = $db->prepare($query);
    $statement->execute();
    $types = $statement->fetchAll();
    $statement->closeCursor();
    return $types;
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

function get_classes()
{
    global $db;
    $query = 'SELECT * FROM classes ';
    $statement = $db->prepare($query);
    $statement->execute();
    $classes = $statement->fetchAll();
    $statement->closeCursor();
    return $classes;
}

function get_vehicle_class($class_id){
    if (!$class_id) {
        return "All types";
    }
    global $db;
    $query = 'SELECT * FROM classes WHERE class_id = :class_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':class_id', $class_id);
    $statement->execute();
    $class = $statement->fetch();
    $statement->closeCursor();
    $classes = $class['class'];
    return $classes;
}

function get_makes()
{
    global $db;
    $query = 'SELECT * FROM makes ';
    $statement = $db->prepare($query);
    $statement->execute();
    $makes = $statement->fetchAll();
    $statement->closeCursor();
    return $makes;
}

function get_vehicle_make($make_id){
    if (!$make_id) {
        return "All makes";
    }
    global $db;
    $query = 'SELECT * FROM makes WHERE make_id = :make_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':make_id', $make_id);
    $statement->execute();
    $make = $statement->fetch();
    $statement->closeCursor();
    $makes = $make['make'];
    return $makes;
}


?>