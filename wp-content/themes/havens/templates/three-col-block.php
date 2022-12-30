
            <?php if( have_rows('three_cols_with_bg_image') ): ?>
                <?php while( have_rows('three_cols_with_bg_image') ): the_row(); 

                    // Get sub field values.
                    $bg_image = get_sub_field('background_image');
                    $section_heading = get_sub_field('section_heading');
                    $column_one = get_sub_field('column_one');
                    $column_two = get_sub_field('column_two');
                    $column_three = get_sub_field('column_three');

                    ?>
                    <div class="container-fluid bg-dark" style="background-image: url('<?php echo $bg_image['url']; ?>')">
                        <div class="container">
                            <div class="row py-5">
                                <div class="col-12 text-center py-4"><?php echo $section_heading; ?></div>
                                <div class="col-12 col-md-4"><?php echo apply_filters('the_content', $column_one);?></div>
                                <div class="col-12 col-md-4"><?php echo apply_filters('the_content', $column_two);?></div>
                                <div class="col-12 col-md-4"><?php echo apply_filters('the_content', $column_three);?></div>
                            </div>
                            </div>
                        </div> 
                <?php endwhile; ?>
            <?php endif; ?>
    