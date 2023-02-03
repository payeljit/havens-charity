<?php get_header(); ?>

        <?php 
            include('templates/banner.php'); 
        ?>
    <div class="container overflow-hidden">
        <?php 
            include('templates/image-text.php');
            include('templates/services.php');
        ?>
    </div>
        <?php 
            include('templates/three-col-block.php'); 
        ?>
    <div class="container overflow-hidden">
        <?php 
            include('templates/get-involved-block.php');
        ?>
    </div>
        <?php 
            include('templates/sponsors-lists.php'); 
            include('templates/footer-banner.php'); 
        ?>

<?php get_footer(); ?>