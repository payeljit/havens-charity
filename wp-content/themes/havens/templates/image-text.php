<?php 
    if( have_rows('text_and_image_block') ): 
        while( have_rows('text_and_image_block') ): the_row();?>
        <div class="row gx-5">
            <div class="col-12 py-5">
                <?php
                // Get sub field values.
                    $image_text_b_heading = get_sub_field('image_text_b_heading');
                    $content_text_b = get_sub_field('content_text_b');
                    $quote_text_b = get_sub_field('quote_text_b');
                    $image_text_b = get_sub_field('image_text_b');
                ?>
                <?php echo $image_text_b_heading; ?>
            </div>
            <div class="col-12 col-md-6 bg-transparent px-6">
                <div class="bg-orange p-5 twin-block font-medium ">
                    <?php echo apply_filters('the_content',  $content_text_b);?>
                    <h3 class="text-white carvet-font"><?php echo $quote_text_b; ?></h3>
                </div> 
            </div>
            <div class="col-12 col-md-6 twin-block" style="background-image: url('<?php echo $image_text_b['url']; ?>')">
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>