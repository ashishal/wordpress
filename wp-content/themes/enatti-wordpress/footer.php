 <!-- FOOTER -->
 <section class="bg-footer">
        <div class="container">
        <?php 
                ?>
            <div class="row"> 
                <div class="col-lg-4 col-md-4">
                    <div class="footer-start">




                    <?php 
                        $image=get_field('logo_footer','option');
                        if( $image ): ?>
                            <img src="<?php echo $image; ?>" />
                        <?php endif; ?>



                        <p><?php $fdescr=get_field('footer_description','option');
                                echo $fdescr; ?></p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2">
                    <div class="footer-start">
                        <h5>Quick Links</h5>
                        
                        <?php   

                                wp_nav_menu( 
                                    array(
                                        'theme-location'=>'main-menu',
                                        'Menus'=>'footer',
                                    ) );
                            ?>
                        
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="footer-start">
                        <h5>Contact Info</h5>
                        <p><?php $contact=get_field('contact_info','option');
                             echo $contact['address']; ?></p>
                        <p><?php echo $contact['phone_number']; ?></p>
                        <p><?php echo $contact['email'];?></p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2">
                    <div class="footer-start">
                        <h5>Social Media</h5>
                        <div class="footer-icons">
                                        
                            <?php $links=get_field('social_links','option'); ?>
                                 


                            <a href="<?php echo $links['facebook']; ?>"><i class="fa fa-facebook"></i></a>
                            <a href="<?php echo $links['twitter']; ?>"><i class="fa fa-twitter"></i></a>
                            <a href="<?php echo $links['instagram']; ?>"><i class="fa fa-instagram"></i></a>
                        </div>  
                    </div>
                </div>
            </div>
            <div class="footer-line"></div>
            <p class="copyright-p">Copyright &#169; 2020. All rights reserved.</p>   
        </div>
    </section>
    <!-- FOOTER END -->




    
    <!-- CALL - MESSAGE -->
    <div class="container-fluid">
        <div class="icon-bar-2">
            <div class="row">
                <div class="col-6 nopad">
                    <button class="call-butn" style="background-color: #097bff"> Call <i class="fa fa-phone"></i></button>
                </div>
                <div class="col-6 nopad">
                    <button class="call-butn" style="background-color: #032348"> Message <i class="fa fa-envelope-o"></i></button>
                </div>
            </div>            
        </div>
    </div>
    <!-- CALL - MESSAGE - END -->


<?php wp_footer(); ?>

</body>
</html>