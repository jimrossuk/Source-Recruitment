<?php
get_header();
?>

<div class= "flex-container">
    <div class="column bg-p">

    </div>
    <div class="column">

        
            
            <?php if( get_field('photo') ): ?>
                <img  class= "img "src="<?php the_field('photo'); ?>" />
            <?php endif; ?>
                
    </div>       
        
</div>

