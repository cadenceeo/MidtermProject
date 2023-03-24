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

<p><a href=".?action=show_vehicles">Vehicles</a></p>
<?php include("view/footer.php") ?>