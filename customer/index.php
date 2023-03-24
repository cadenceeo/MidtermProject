<?php
require('model/database.php');
require('model/vehicle_db.php');

$vehicle_id = filter_input(INPUT_POST, 'vehicle_id', FILTER_VALIDATE_INT);
$year = filter_input(INPUT_POST, 'year', FILTER_VALIDATE_INT);
$model = filter_input(INPUT_POST, 'model', FILTER_VALIDATE_INT);
$make = filter_input(INPUT_POST, 'make', FILTER_VALIDATE_INT);
$type = filter_input(INPUT_POST, 'type', FILTER_VALIDATE_INT);

$make_id = filter_input(INPUT_POST, 'make_id', FILTER_VALIDATE_INT);
if (!$make_id) {
    $make_id = filter_input(INPUT_GET, 'make_id', FILTER_VALIDATE_INT);
}

$type_id = filter_input(INPUT_POST, 'type_id', FILTER_VALIDATE_INT);
if (!$type_id) {
    $type_id = filter_input(INPUT_GET, 'type_id', FILTER_VALIDATE_INT);
}

$class_id = filter_input(INPUT_POST, 'class_id', FILTER_VALIDATE_INT);
if (!$class_id) {
    $class_id = filter_input(INPUT_GET, 'class_id', FILTER_VALIDATE_INT);
}



$action = filter_input(INPUT_POST, 'action', FILTER_UNSAFE_RAW);
if (!$action) {
    $action = filter_input(INPUT_GET, 'action', FILTER_UNSAFE_RAW);
    if (!$action) {
        $action = 'list_vehicles';
    }
}

switch ($action) {
    case "list_vehicles":
        $vehicles = get_vehicles();
        $makes = get_makes();
        $classes = get_classes();
        $types = get_types();
        include('view/vehicle_list.php');
        break;
    default:
        $vehicles = get_vehicles();
        $type = get_vehicle_type($type_id);
        $class = get_vehicle_class($class_id);
        include('view/vehicle_list.php');
}

?>