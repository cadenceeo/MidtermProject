<?php include("view/header.php") ?>

</br></br>
<header>
    <h1>Current Vehicles</h1>
    <hr style="height:5px">
<form action="." method="get" id="list_header_select" class="list__header__select"> 
        <input type="hidden" name="action" value="list_vehicles" >
            <select name="type_id" required style="margin-bottom: -10px">
                <option value="0">View All Types</option>
            <?php foreach ($types as $type) : ?>
                <?php if ($type_id == $type['type_id']) { ?>
                    <option value="<?= $type['type_id'] ?>" selected>
                    <?php } else { ?>
                    <option value="<?= $type['type_id'] ?>">
                    <?php } ?>
                    <?= $type['type'] ?>
                    </option>
                <?php endforeach; ?>
            </select>
</form>

<form action="." method="get" id="list_header_select" class="list__header__select">
        <input type="hidden" name="action" value="list_vehicles">            
            <select name="make_id" required style="margin-bottom: -10px">
                <option value="0">View All Makes</option>
            <?php foreach ($makes as $make) : ?>
                <?php if ($make_id == $make['make_id']) { ?>
                    <option value="<?= $make['make_id'] ?>" selected>
                    <?php } else { ?>
                    <option value="<?= $make['make_id'] ?>">
                    <?php } ?>
                    <?= $make['make'] ?>
                    </option>
                <?php endforeach; ?>
            </select>
</form>


<form action="." method="get" id="list_header_select" class="list__header__select">
        <input type="hidden" name="action" value="list_vehicles">            
            <select name="class_id" required>
                <option value="0">View All Classes</option>
            <?php foreach ($classes as $class) : ?>
                <?php if ($class_id == $class['class_id']) { ?>
                    <option value="<?= $class['class_id'] ?>" selected>
                    <?php } else { ?>
                    <option value="<?= $class['class_id'] ?>">
                    <?php } ?>
                    <?= $class['class'] ?>
                    </option>
                <?php endforeach; ?>
            </select>
</form>
</header>


<?php if ($vehicles) { ?>

        
        <table style="border:1px solid black;margin-left:auto;margin-right:auto;">
                <tr>
                    <th><label>Year </label></th>
                    <th><label>Make </label></th>
                    <th><label>Model </label></th>
                    <th><label>Type </label></th>
                    <th><label>Class </label></th>
                    <th><label>Price </label></th>
                </tr> 
            <?php foreach ($vehicles as $vehicle) : ?>
            
                <tr>
                        <td><?= $vehicle['year'] ?></td>
                        <td><?= $make['make'] ?></td>
                        <td><?= $vehicle['model'] ?></td>
                        <td><?= $type['type'] ?></td>
                        <td><?= $class['class'] ?></td>
                        <td><?= $vehicle['price'] ?></td>
                </tr>
        <?php endforeach; ?>

    </section>
<?php } ?>

<?php include("view/footer.php") ?>