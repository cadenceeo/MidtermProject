<?php include("view/header.php") ?>
<section>
    <h2>Add Make</h2>
    <form action="." method="post" id="add__form" class="add__form">
        <input type="hidden" name="action" value="add_make">
        <div class="add__inputs">
            <label>Make Name:</label>
            <input type="text" name="make" maxlength="30" placeholder="Make Name" autofocus required><br>
        </div>
        <div class="add__addItem">
            <button class="add-button bold">Add</button>
        </div>
    </form>
</section>



<?php if ($makes) { ?>
<section id="list" class="list">
        <header>
            <h1>Current Makes</h1>
        </header>
        <table style="border:1px solid black;margin: left 50%;margin-right:50%;">
        <input type="hidden" name="action" value="show_makes">
            <tr>
                <th>Make</th>
                <th>Delete</th>
            </tr>
            <?php foreach ($makes as $make) : ?>
            <tr>
                <td style="width: 5%"><?= $make['make'] ?></td>
                    <div class="delete_make">
                        <form action="." method="post">
                            <input type="hidden" name="action" value="delete_task">
                            <input type="hidden" name="title" value="<?= $make['make'] ?>">
                           <td> <button class="remove-button">X</button></td>
                        </form>
                    </div>
            </tr>
                </div>
            <?php endforeach; ?>
        </table>
    </section>
<?php } else { ?>
    <p>No Categories exist yet</p>
<?php } ?>
</section>

<p><a href=".?action=show_vehicles">Vehicles</a></p>
<?php include("view/footer.php") ?>