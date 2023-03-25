<?php
require('model/database.php');
require('model/vehicle_db.php');
require('model/admin_db.php');

$vehicle_id = filter_input(INPUT_POST, 'vehicle_id', FILTER_VALIDATE_INT);
$year = filter_input(INPUT_POST, 'year', FILTER_VALIDATE_INT);
$model = filter_input(INPUT_POST, 'model', FILTER_VALIDATE_INT);
$class = filter_input(INPUT_POST, 'class', FILTER_VALIDATE_INT);
$make = filter_input(INPUT_POST, 'make', FILTER_VALIDATE_INT);
$type = filter_input(INPUT_POST, 'type', FILTER_VALIDATE_INT);
$price = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_INT);

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
        $action = 'show_vehicles';
    }
}

switch ($action) {
    case "show_vehicles":
        $vehicles = get_vehicles();
        $makes = get_makes();
        $classes = get_classes();
        $types = get_types();
        include('view/show_vehicles.php');
        break;
    case "delete_vehicle":
        if ($vehicle_id) {
            delete_vehicle($vehicle_id);
        } else {
            $error = "Missing or incorrect vehicle id.";
            include('view/error.php');
        }
    case "add_vehicle":
        include('view/add_vehicle.php');
        if($year && $model && $price && $type_id && $class_id && $make_id){
            add_vehicle($year,$model, $price, $type_id, $class_id, $make_id);
            header("Location: .?action=$show_vehicles");
        }else{
            $error_message = "Invalid vehicle data .Check all felids and try again";
            include("view/error.php");
            exit();
        }
        break;
    case "add_make":
        if($make){
            add_make($make);
        }
        $makes = get_makes();
        include('view/add_make.php');
        break;
    case "add_type":
        if($type){
            add_type($type);
        }
        $types = get_types();
        include('view/add_type.php');
        break;
    case "add_class":
        if($class){
            add_class($class);
        }
        $classes = get_classes();
        include('view/add_class.php');
        break;
    case "delete_make":
        if ($make_id) {
            delete_make($make_id);
        } else {
            $error = "Missing or incorrect make id.";
            include('view/error.php');
        }
    case "delete_type":
        if ($type_id) {
            delete_type($type_id);
        } else {
            $error = "Missing or incorrect type id.";
            include('view/error.php');
        }
    case "delete_class":
        if ($class_id) {
            delete_class($class_id);
        } else {
            $error = "Missing or incorrect class id.";
            include('view/error.php');
        }
    default:
        $vehicles = get_vehicles();
        $make = get_vehicle_make($make_id);
        $type = get_vehicle_type($type_id);
        $class = get_vehicle_class($class_id);
        include('view/show_vehicles.php');
}

?>