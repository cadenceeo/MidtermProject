<?php include("view/header.php") ?>
<section>
    <h2>Add Type</h2>
    <form action="." method="post" id="add__form" class="add__form">
        <input type="hidden" name="action" value="add_type">
        <div class="add__inputs">
            <label>Type Name:</label>
            <input type="text" name="type" maxlength="30" placeholder="Type Name" autofocus required><br>
        </div>
        <div class="add__addItem">
            <button class="add-button bold">Add</button>
        </div>
    </form>
</section>

<?php if ($types) { ?>
<section id="list" class="list">
        <header>
            <h1>Current Types</h1>
        </header>
        <table style="border:1px solid black;margin: left 50%;margin-right:50%;">
        <input type="hidden" name="action" value="show_types">
            <tr>
                <th>Type</th>
                <th>Delete</th>
            </tr>
            <?php foreach ($types as $type) : ?>
            <tr>
                <td style="width: 5%"><?= $type['type'] ?></td>
                    <div class="delete_type">
                        <form action="." method="post">
                            <input type="hidden" name="action" value="delete_task">
                            <input type="hidden" name="title" value="<?= $type['type'] ?>">
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