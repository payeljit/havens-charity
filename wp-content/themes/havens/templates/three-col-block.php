
            <?php if( have_rows('three_cols_with_bg_image') ): ?>
                <?php while( have_rows('three_cols_with_bg_image') ): the_row(); 

                    // Get sub field values.
                    $bg_image = get_sub_field('background_image');
                    $section_heading = get_sub_field('section_heading');
                    $column_one = get_sub_field('column_one');
                    $column_two = get_sub_field('column_two');
                    $column_three = get_sub_field('column_three');
                    ?>
                    <div class="container-fluid bg-section-dark position-relative" style="background-image: url('<?php echo $bg_image['url']; ?>'); background-repeat: no-repeat;background-size:cover;">
                        <div class="container py-6">
                            <div class="row py-5">
                                <div class="col-12 text-center py-4"><?php echo $section_heading; ?></div>
                                <div class="col-12 col-md-4"><?php echo apply_filters('the_content', $column_one);?></div>
                                <div class="col-12 col-md-4"><?php echo apply_filters('the_content', $column_two);?></div>
                                <div class="col-12 col-md-4"><?php echo apply_filters('the_content', $column_three);?></div>
                            </div>
                        </div>
                        <img class="position-absolute curl-arrow" width="200" src="<?php echo get_template_directory_uri() ?>/assets/images/curl-arrow.svg" alt="Curl arrow">
                    </div> 
                <?php endwhile; ?>
            <?php endif; ?>
    