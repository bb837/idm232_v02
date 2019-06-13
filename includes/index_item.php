<a class="link" target="_blank" href="<?php 
              $rec_url = rawurldecode("recipe.php");
              $rec_url .= "?" . "id=" . urldecode($recipe["id"]);
              echo htmlspecialchars($rec_url);?>">
<figure class="index_item">

    <img 
    
    src="images/<?php echo $recipe["id"]?>/thumb_lg.jpg" 
    alt="<?php echo $recipe["title"] ?>"
    
    class="index_img">

    <figcaption class="item_cap">
            <h2><?php echo $recipe["title"]?></h2>
            <p>with <?php echo $recipe["side"]?></p>
        </figcaption>
</figure>
</a>