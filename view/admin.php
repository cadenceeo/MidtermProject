<?php include("view/header.php") ?>

</br></br>
<header>
    <h1>Current Vehicles</h1>
    <hr style="height:5px">



<?php if ($vehicles) { ?>

        
        <table class="table table-striped" style="width:70%">
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
                        <td><?= $vehicle['year'] ?><div class="list__removeItem">
                    <form action="." method="post">
                        <input type="hidden" name="action" value="delete_assignment">
                        <input type="hidden" name="assignment_id" value="<?= $assignment['ID'] ?>">
                        <button>X</button>
                    </form>
                </div></td>
                        <td><?= $vehicle['make'] ?></td>
                        <td><?= $vehicle['model'] ?></td>
                        <td><?= $vehicle['type'] ?></td>
                        <td><?= $vehicle['class'] ?></td>
                        <td><?= $vehicle['price'] ?></td>
                </tr>
        <?php endforeach; ?>

    </section>
<?php } else { ?>
    <p>No Categories exist yet</p>
<?php } ?>

<?php include("view/footer.php") ?>