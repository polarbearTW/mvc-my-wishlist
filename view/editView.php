<?php 
    $title = 'Edit My Place';
    ob_start();
?>

<h1>Edit My Place</h1>

<div class="btn">
    <button type="button">
    <a href="index.php?action=list">See My Wishlists</a>
    </button>
</div>

<form method="POST" action="" style="margin-top: 3rem;">
    <div>
        Place Name: <input type="text" name="placename" value=<?= isset($place['name'])? $place['name']:" ";?>><br>
        Country: <input type="text" name="country" value=<?= isset($place['country'])? $place['country']:" ";?>><br>
        City: <input type="text" name="city" value=<?= isset($place['city'])? $place['city']:" ";?>><br>
        Price: (KRW): <input type="text" name="price" value=<?= isset($place['price'])? $place['price']:" ";?>><br>
        Link: <input type="url" name="link" value=<?= isset($place['link'])? $place['link']:" ";?>><br>
    </div>
    <div>
        <button type="submit" name="edit" value="edit">Edit Place</button>
    </div>
</form>

<?php 
    $html = ob_get_clean();
?>

<?php 
    include 'template.php';
?>