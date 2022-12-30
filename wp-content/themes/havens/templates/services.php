
<?php 
if( have_rows('services_section') ): ?>
    <?php while( have_rows('services_section') ): the_row(); 
        // Get sub field values.
        $icon_1 = get_sub_field('icon_1');
        $icon_2 = get_sub_field('icon_2');
        $icon_3 = get_sub_field('icon_3');
        $icon_4 = get_sub_field('icon_4');
        $content_1 = get_sub_field('content_1');
        $content_2 = get_sub_field('content_2');
        $content_3 = get_sub_field('content_3');
        $content_4 = get_sub_field('content_4');
        ?>
        <div class="row py-5">
            <div class="col-12 col-md-3">
                <div class="icon-img"><img width="180" height="180" src="<?php echo $icon_1['url']; ?>" alt="<?php $icon_1['title']; ?>"></div>
                <?php echo $content_1; ?>
            </div>
            <div class="col-12 col-md-3">
                <div class="icon-img"><img width="180" height="180" src="<?php echo $icon_2['url']; ?>" alt="<?php $icon_2['title']; ?>"></div>
                <?php echo $content_2; ?>
            </div>
            <div class="col-12 col-md-3">
                <div class="icon-img"><img width="180" height="180" src="<?php echo $icon_3['url']; ?>" alt="<?php $icon_3['title']; ?>"></div>
                <?php echo $content_3; ?>
            </div>
            <div class="col-12 col-md-3">
                <div class="icon-img"><img width="180" height="180" src="<?php echo $icon_4['url']; ?>" alt="<?php $icon_4['title']; ?>"></div>
                <?php echo $content_4; ?>
            </div>
        </div>
     
    <?php endwhile; ?>
<?php endif; ?>