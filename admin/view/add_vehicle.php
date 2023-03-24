<?php include("view/header.php") ?>
<section>
    <h2>Add Vehicle</h2>
    <form action="." method="post" id="add__form" class="add__form">
        <input type="hidden" name="action" value="add_vehicle">
        <div class="add__inputs">
            <label>Year:</label>
            <input type="text" name="year" maxlength="30" placeholder="Year" autofocus required><br>
            <label>Model:</label>
            <input type="text" name="model" maxlength="30" placeholder="Model" autofocus required><br>
            <label>Price:</label>
            <input type="text" name="Price" maxlength="30" placeholder="Price" autofocus required><br>
            <label>Type ID:</label>
            <input type="text" name="type_id" maxlength="30" placeholder="TypeID" autofocus required><br>
            <label>Class ID:</label>
            <input type="text" name="class_id" maxlength="30" placeholder="ClassID" autofocus required><br>
            <label>Make ID:</label>
            <input type="text" name="make_id" maxlength="30" placeholder="MakeID" autofocus required><br>
        </div>
        <div class="add__addItem">
            <button class="add-button bold">Add</button>
        </div>
    </form>
</section>

<p><a href=".?action=show_vehicles">Vehicles</a></p>
<?php include("view/footer.php") ?>