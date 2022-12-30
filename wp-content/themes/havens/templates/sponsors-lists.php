<div class="container-fluid bg_lighter_grey">
<?php 
    if( have_rows('sponsorship_lists') ): 
        while( have_rows('sponsorship_lists') ): the_row();?>
      <div class="container">
      <div class="row gx-5">
            <div class="col-12 py-5">
                <?php
                // Get sub field values.
                    $sponsor_one = get_sub_field('sponsor_one');
                    $sponsor_two = get_sub_field('sponsor_two');
                    $sponsor_three = get_sub_field('sponsor_three');
                    $sponsor_four = get_sub_field('sponsor_four');
                ?>
                    <nav class="navbar navbar-expand-lg d-flex justify-content-center">
                        <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#"><img src="<?php echo $sponsor_one['url'] ?>" alt="<?php echo $sponsor_three['title'] ?>"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><img src="<?php echo $sponsor_two['url'] ?>" alt="<?php echo $sponsor_three['title'] ?>"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><img src="<?php echo $sponsor_three['url'] ?>" alt="<?php echo $sponsor_three['title'] ?>"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><img src="<?php echo $sponsor_four['url'] ?>" alt="<?php echo $sponsor_four['title'] ?>"></a>
                        </li>
                        </ul>
                    </nav>
            </div>
        </div>
      </div>
    <?php endwhile; ?>
<?php endif; ?>
</div>
