<?php
function delete_vehicle($id)
{
    global $db;
    $query = 'DELETE FROM vehicles WHERE ID = :ID';
    $statement = $db->prepare($query);
    $statement->bindValue(':ID', $id);
    $statement->execute();
    $statement->closeCursor();
}
?>