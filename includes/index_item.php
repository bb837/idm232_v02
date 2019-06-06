<?php
 while($recipe = mysqli_fetch_assoc($result)) {
    if (in_array($recipe["id"], $random_id)) {
        ?>

<figure class="index_item">

    <img 
    
    src="images/<?php echo $recipe["id"] . "/" . $recipe["hero_image"] ?>"
    alt="<?php echo $recipe["title"] ?>"
    
    class="index_img">

    <figcaption class="item_cap">
            <h2><?php echo $recipe["title"]?></h2>
            <p>with <?php echo $recipe["side"]?></p>
        </figcaption>
</figure>

<?php
    }
 }
 ?>