
<div class="row">
    <div class="col-12 py-5">
        <?php 
            if( have_rows('text_and_image_block') ): 
                while( have_rows('text_and_image_block') ): the_row();?>
            <?php
            // Get sub field values.
                $image_text_b_heading = get_sub_field('image_text_b_heading');
                $content_text_b = get_sub_field('content_text_b');
                $quote_text_b = get_sub_field('quote_text_b');
                $image_text_b = get_sub_field('image_text_b');
            ?>
            <?php if( $image_text_b_heading ) : echo $image_text_b_heading; endif;?>
            </div>
            <div class="col-12 col-md-6 bg-transparent px-6">
                <?php if(  $content_text_b) : ?>
                    <div class="bg-orange p-5 twin-block font-medium ">
                        <?php echo apply_filters('the_content',  $content_text_b);?>
                        <h3 class="text-white carvet-font"><?php echo $quote_text_b; ?></h3>
                    </div> 
                <?php endif; ?>
            </div>
            <div class="col-12 col-md-6 twin-block" style="background-image: url('<?php echo $image_text_b['url']; ?>')">
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>
  