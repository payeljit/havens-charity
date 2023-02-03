
<?php 
if( have_rows('quotation_with_image') ): ?>
    <?php while( have_rows('quotation_with_image') ): the_row(); 
        // Get sub field values.

        $content = get_sub_field('content');
        $image = get_sub_field('image');
        ?>
        <div class="row py-5">
            <div class="col-12 col-lg-6">
                <?php echo apply_filters('the_content', $col_one); ?>
            </div>
            <div class="col-12 col-lg-6">
                <?php echo apply_filters('the_content', $col_two); ?>
            </div>
        </div>
     
    <?php endwhile; ?>
<?php endif; ?>