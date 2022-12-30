
            <?php if( have_rows('three_cols_with_no_bg') ): ?>
                <?php while( have_rows('three_cols_with_no_bg') ): the_row(); 

                    // Get sub field values.
                    $heading = get_sub_field('heading');
                    $column_one_no_bg = get_sub_field('column_one_no_bg');
                    $column_two_no_bg = get_sub_field('column_two_no_bg');
                    $column_three_no_bg = get_sub_field('column_three_no_bg');
                    
                    $icon_col_one = get_sub_field('icon_col_one');
                    $icon_col_two = get_sub_field('icon_col_two');
                    $icon_col_three = get_sub_field('icon_col_three');

                    ?>
                    <div class="container-fluid">
                        <div class="container">
                            <div class="row py-5">
                                <div class="col-12 text-center py-5"><?php echo $heading; ?></div>
                                <div class="col-12 col-md-4">
                                    <img class="pb-4" src="<?php echo $icon_col_one['url']; ?>" alt="<?php echo $icon_col_one['title']; ?>">
                                    <?php echo apply_filters('the_content',  $column_one_no_bg);?>
                                </div>
                                <div class="col-12 col-md-4">
                                    <img class="pb-4" src="<?php echo $icon_col_two['url']; ?>" alt="<?php echo $icon_col_two['title']; ?>">
                                    <?php echo apply_filters('the_content', $column_two_no_bg);?>
                                </div>
                                <div class="col-12 col-md-4">
                                    <img class="pb-4" src="<?php echo $icon_col_three['url']; ?>" alt="<?php echo $icon_col_three['title']; ?>">
                                    <?php echo apply_filters('the_content', $column_three_no_bg);?>
                                </div>
                            </div>
                            </div>
                        </div> 
                <?php endwhile; ?>
            <?php endif; ?>
    