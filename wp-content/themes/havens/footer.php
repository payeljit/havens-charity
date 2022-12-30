       <footer class="footer pt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div>
                        <img width="114" height="60" src="<?php echo get_template_directory_uri()?>/assets/images/haven-logo.svg" alt="Haven's charity">
                    </div>
                    <a href="mialto:sushovan_ghosh@hotmail.com">sushovan_ghosh@hotmail.com</a>
                    <div>14 St John's Road, Woking. <br/>Surrey GU21 7SE </div>
                    <div class="footer_social my-5"> 
                        <!-- Facebook -->
                        <img width="23" height="23" src="<?php echo get_template_directory_uri()?>/assets/images/facebook.svg" alt="Facebook icon">
                        <img width="23" height="23" src="<?php echo get_template_directory_uri()?>/assets/images/instagram.svg" alt="Instagram icon">
                        <img width="23" height="23" src="<?php echo get_template_directory_uri()?>/assets/images/twitter.svg" alt="Twitter icon">
                        <img width="23" height="23" src="<?php echo get_template_directory_uri()?>/assets/images/skype.svg" alt="Skype icon">

                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <?php
                            wp_nav_menu( array(
                                'theme_location'    => 'secondary',
                                
                            ) );
                        ?>
                </div>
                <div class="col-12 copyright">
                    ©2010 HAVEN. Registered in England: 1099333. Phone: 01483 776187. Registered Office: 14 St John's Road, Woking, Surrey GU21 7SE |
                </div>
            </div>
        </div>
       </footer>
    

        <?php wp_footer(); ?>    

        </main>
    </body>
</html>