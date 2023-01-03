<?php 
    $title = 'Wishlists';
    ob_start();
?>

<h1>Wishlist</h1>

<div class="btn">
    <button type="button">
    <a href="index.php?action=add">Add a Place</a>
    </button>
</div>

<table border="1" style="margin-bottom: 15rem;">
    <thead>
        <tr>
            <th>id</th>
            <th>place</th>
            <th>country</th>
            <th>city</th>
            <th>Latitude</th>
            <th>Longitude</th>
            <th>price</th>
            <th>link</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($places as $place) { ?>
                <tr>
                    <td><?= $place['ID']; ?></td>
                    <td><?= $place['name']; ?></td>
                    <td><?= $place['country']; ?></td>
                    <td><?= $place['city']; ?></td>
                    <td><?= $place['Latitude']; ?></td>
                    <td><?= $place['Longitude']; ?></td>
                    <td><?= $place['price']; ?></td>
                    <td><?= $place['link']; ?></td>
                    <td><button type="button" class="delete-place" name="delete"
                    data-id="<?= $place['ID'] ?>">Delete</button></td>
                    <td><a href="index.php?action=edit&id=<?=$place['ID']?>">Edit</a></td>
                    <td><button type="button" class="show-on-map" name="map"
                    data-id="<?= $place['ID'] ?>">Show on Map</button></td>
                </tr>
        <?php } ?>
    </tbody>
</table>

<?php 
    $html = ob_get_clean();
?>

<?php 
    include 'template.php';
?>