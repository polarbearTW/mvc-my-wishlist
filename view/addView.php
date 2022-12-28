<?php 
    $title = 'Add Your Wishlists';
    ob_start();
?>

<h1>Wishlist</h1>

<div class="btn">
    <button type="button">
    <a href="index.php?action=list">See My Wishlists</a>
    </button>
</div>

<form method="POST" action="" style="margin-top: 3rem;">
    <div>
        Place Name: <input type="text" name="placename"/><br>
        Country: <input type="text" name="country"/><br>
        City: <input type="text" name="city"/><br>
        Price: (KRW): <input type="text" name="price"/><br>
        Link: <input type="url" name="link"/><br>
    </div>
    <div>
        <button type="submit" name="add" value="add">Add Place</button>
    </div>
</form>

<?php 
    $html = ob_get_clean();
?>

<?php 
    include 'template.php';
?>