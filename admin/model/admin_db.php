<?php
function add_make($make)
{
    global $db;
    $query = 'INSERT INTO makes (make) VALUES (:make)';
    $statement = $db->prepare($query);
    $statement->bindValue(':make', $make);
    $statement->execute();
    $statement->closeCursor();
}

function add_class($class)
{
    global $db;
    $query = 'INSERT INTO classes (class) VALUES (:class)';
    $statement = $db->prepare($query);
    $statement->bindValue(':class', $class);
    $statement->execute();
    $statement->closeCursor();
}

function add_type($type)
{
    global $db;
    $query = 'INSERT INTO types (type) VALUES (:type)';
    $statement = $db->prepare($query);
    $statement->bindValue(':type', $type);
    $statement->execute();
    $statement->closeCursor();
}

function add_vehicle($year,$model, $price, $type_id, $class_id, $make_id )
{
    global $db;
    $query = 'INSERT INTO vehicles ( year,model, price, type_id, class_id, make_id  ) VALUES (:year, :model, :price, :type_id, :class_id, :make_id)';
    $statement = $db->prepare($query);
    $statement->bindValue(':year', $year);
    $statement->bindValue(':model', $model);
    $statement->bindValue(':price', $price);
    $statement->bindValue(':type_id', $type_id);
    $statement->bindValue(':class_id', $class_id);
    $statement->bindValue(':make_id', $make_id);
    $statement->execute();
    $statement->closeCursor();
}

function delete_vehicle($vehicle_id)
{
    global $db;
    $query = 'DELETE FROM vehicles WHERE ID = :vehicle_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':vehicle_id', $vehicle_id);
    $statement->execute();
    $statement->closeCursor();
}

function delete_make($make_id)
{
    global $db;
    $query = 'DELETE FROM makes WHERE ID = :make_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':make_id', $make_id);
    $statement->execute();
    $statement->closeCursor();
}

function delete_type($type_id)
{
    global $db;
    $query = 'DELETE FROM types WHERE ID = :type_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':type_id', $type_id);
    $statement->execute();
    $statement->closeCursor();
}

function delete_class($class_id)
{
    global $db;
    $query = 'DELETE FROM classes WHERE ID = :class_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':class_id', $class_id);
    $statement->execute();
    $statement->closeCursor();
}
?>