
<?php 
if( have_rows('footer_banner') ): ?>
    <?php while( have_rows('footer_banner') ): the_row(); 
        // Get sub field values.
        $banner_heading = get_sub_field('banner_heading');
        $background_image = get_sub_field('background_image');
        $featured_image_rectangle_bottom = get_sub_field('featured_image_rectangle_bottom');
        $featured_image_rectangle = get_sub_field('featured_image_rectangle');
        $featured_image_vertical = get_sub_field('featured_image_vertical');
        $content = get_sub_field('content');
        ?>
        <div class="container-fluid bg-blackish banner"  style="background-image: url('<?php echo $background_image['url']; ?>'); background-repeat: no-repeat;background-position: 100%">
            <div class="row d-flex justify-content-end position-relative">
                <div class="col-12 col-md-4"><?php echo $banner_heading; ?></div>
                    <div class="col-12 col-md-8 d-flex justify-content-end mb-3">
                        <img width="465" class="object-fit-scale mr-3" src="<?php echo $featured_image_rectangle['url']; ?>" alt="">
                        <img width="248" src="<?php echo $featured_image_vertical['url']; ?>" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6">
                         <div class="row text-white padding-general">
                            <?php echo apply_filters('the_content', $content);?>
                                <?php 
                                // Reset the global post object so that the rest of the page works correctly.
                                wp_reset_postdata(); ?>
                          
                        </div>
                    </div>
                    <div class="col-12 col-md-6 text-right">
                        <img width="100%" src="<?php echo  $featured_image_rectangle_bottom['url'] ?>" alt="<?php echo  $featured_image_rectangle_bottom['title'] ?>">
                    </div>
                </div>
            </div>
    <?php endwhile; ?>
<?php endif; ?>