
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
                            <div class="col-12 col-lg-4 bg-semi-black border-r-20 p-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas, sed veritatis culpa fugiat omnis, repellat architecto animi cupiditate consectetur ad vitae corporis molestiae id excepturi dignissimos saepe incidunt! Nam, illum.</div>
                            <div class="col-12 col-lg-4 bg-semi-black border-r-20 p-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos rem accusamus iure minima maxime nulla reprehenderit, similique provident. Quis ad neque non vero voluptatem rerum ea officiis autem iure ut.</div>
                            <div class="col-12 col-lg-4 bg-semi-black border-r-20 p-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum labore sunt totam quibusdam iste eaque rem. Dolorum architecto delectus officia quo, necessitatibus facilis aperiam atque est, pariatur, hic quae! Tempore.</div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 text-right">
                        <img width="100%" src="<?php echo  $featured_image_rectangle_bottom['url'] ?>" alt="<?php echo  $featured_image_rectangle_bottom['title'] ?>">
                    </div>
                </div>
                
            
           
           
        </div>
    <?php endwhile; ?>
<?php endif; ?>