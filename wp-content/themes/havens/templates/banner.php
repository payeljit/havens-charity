
<?php 
if( have_rows('banner') ): ?>
    <?php while( have_rows('banner') ): the_row(); 
        // Get sub field values.
        $banner_heading = get_sub_field('banner_heading');
        $background_image = get_sub_field('background_image');
        $featured_image_rectangle_bottom = get_sub_field('featured_image_rectangle_bottom');
        $featured_image_rectangle = get_sub_field('featured_image_rectangle');
        $featured_image_vertical = get_sub_field('featured_image_vertical');
        $display_featured_news_content = get_sub_field('display_featured_news_content');
        $excerpt = get_sub_field('excerpt');
        ?>
        <div class="container-fluid bg-blackish banner"  style="background-image: url('<?php echo $background_image['url']; ?>'); background-repeat: no-repeat;background-position: 100%">
            <div class="row d-flex justify-content-end position-relative">
                <div class="position-absolute l-0 z-index-1"><?php echo $banner_heading; ?></div>
                    <div class="col-12 col-md-8 d-flex justify-content-end mb-3">
                        <img width="600" class="object-fit-scale mr-3" src="<?php echo $featured_image_rectangle['url']; ?>" alt="">
                        <img width="248" src="<?php echo $featured_image_vertical['url']; ?>" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-8">
                         <div class="row text-white padding-general">
                            <?php
                            if( $display_featured_news_content ): ?>
                                    <?php foreach( $display_featured_news_content as $post ): 
                                        // Setup this post for WP functions (variable must be named $post).
                                        setup_postdata($post); ?>
                                        <div class="col-12 col-lg-4 bg-transparent p-4">
                                            <a class="semi-grey" href="<?php the_permalink(); ?>">
                                                <div class="bg-semi-black border-r-20 p-3">
                                                    <h3 class="orange"><?php the_title(); ?></h3>
                                                    <span class="d-block pb-3"><?php the_field( 'excerpt' ); ?></span>
                                                    <a class="text-white border-b-orange pt-3" href="<?php the_permalink(); ?>">Read more</a>
                                                </div>
                                            </a>
                                        </div>
                                    <?php endforeach; ?>
                                <?php 
                                // Reset the global post object so that the rest of the page works correctly.
                                wp_reset_postdata(); ?>
                            <?php 
                            endif; ?>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 text-right">
                        <img width="100%" src="<?php echo  $featured_image_rectangle_bottom['url'] ?>" alt="<?php echo  $featured_image_rectangle_bottom['title'] ?>">
                    </div>
                </div>
            </div>
    <?php endwhile; ?>
<?php endif; ?>