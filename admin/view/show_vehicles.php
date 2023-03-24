<?php include("view/header.php") ?>

</br>
<header>
    <h1>Current Vehicles</h1>
    <hr style="height:5px">

<?php foreach ($types as $type) : ?>
    <?php endforeach; ?>

<?php foreach ($makes as $make) : ?>
<?php endforeach; ?>

<?php foreach ($classes as $class) : ?>
<?php endforeach; ?>

<?php if ($vehicles) { ?>
        <table style="border:1px solid black;margin: left 50%;margin-right:50%;">
        <input type="hidden" name="action" value="show_vehicles"> 
                <tr>
                    <th><label>Year </label></th>
                    <th><label>Make </label></th>
                    <th><label>Model </label></th>
                    <th><label>Type </label></th>
                    <th><label>Class </label></th>
                    <th><label>Price </label></th>
                    <th><label>Remove </label></th>
                </tr> 
            <?php foreach ($vehicles as $vehicle) : ?>
                <tr>
                        <td style="width: 2%"><?= $vehicle['year'] ?></td>
                        <td style="width: 2%"><?= $make['make'] ?></td>
                        <td style="width: 2%"><?= $vehicle['model'] ?></td>
                        <td style="width: 2%"><?= $type['type'] ?></td>
                        <td style="width: 2%"><?= $class['class'] ?></td>
                        <td style="width: 2%"><?= $vehicle['price'] ?></td>
                        <td style="width: 45%">
                            <div class="list__removeItem">
                            <form action="." method="post">
                                <input type="hidden" name="action" value="delete_vehicle">
                                <input type="hidden" name="vehicle_id" value="<?= $vehicle['ID'] ?>">
                                <button>X</button>
                            </form>
                        </td>
                </div>
                </tr>
        <?php endforeach; ?>
        </table>
<?php } else { ?>
    <p>No Categories exist yet</p>
<?php } ?>
<p><a href=".?action=add_vehicle">Add vehicle</a></p>
<p><a href=".?action=add_make">Add or Delete Makes</a></p>
<p><a href=".?action=add_type">Add or Delete Types</a></p>
<p><a href=".?action=add_class">Add or Delete Classes</a></p>
<?php include("view/footer.php") ?>
