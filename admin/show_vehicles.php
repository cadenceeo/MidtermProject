

</br></br>
<header>
    <h1>Current Vehicles</h1>
    <hr style="height:5px">


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
