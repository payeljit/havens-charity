<?php get_header();
 include('templates/banner.php');
?>

<div class="container">
    <!-- <h2 class="pt-5"><?php the_title();?></h2> -->
    <?php 
    the_content();
    include('templates/image-text.php');
    include('templates/two-col-row.php'); 
    ?>
</div>


<?php
get_footer();

?>