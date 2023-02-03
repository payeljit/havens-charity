
<?php 
if( have_rows('two_column_row') ): ?>
    <?php while( have_rows('two_column_row') ): the_row(); 
        // Get sub field values.

        $col_one = get_sub_field('column_one');
        $col_two = get_sub_field('column_two');
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