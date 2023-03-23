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


function get_make_by_vehicle($make_id)
{
    global $db;
    if ($make_id) {
        $query = 'SELECT A.ID, A.Year, A.model, A.price, C.make_id From makes A
            LEFT JOIN vehicles C ON A.make_id = C.make_id
                WHERE A.make_id = :make_id ';
    } else {
        $query = 'SELECT A.ID, A.Year, A.mode, A.price, C.make_id From makes A
        LEFT JOIN vehicles C ON A.make_id = C.make_id ';
    }
    $statement = $db->prepare($query);
    if ($make_id) {
        $statement->bindValue(':courseID', $make_id);
    }
    $statement->execute();
    $makes = $statement->fetchAll();
    $statement->closeCursor();
    return $makes;
}

?>