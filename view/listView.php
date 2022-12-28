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
            <th>price</th>
            <th>link</th>
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
                    <td><?= $place['price']; ?></td>
                    <td><?= $place['link']; ?></td>
                    <td><button type="button" class="delete-place" name="delete"
                    data-id="<?= $place['ID'] ?>">Delete</button></td>
                    <td><button type="button" class="edit-place" 
                    data-id="<?= $place['ID'] ?>">Edit</button></td>
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