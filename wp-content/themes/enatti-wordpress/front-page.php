<?php get_header(); ?>    

    <!-- BANNER CARPUSEL -->

    <section class="car-mt-150">
        <div class="site-section testimonial-wrap custom-owl-carousel" id="testimonials-section">
          <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 mr-auto">

                    <div class="owl-carousel slide-one-item-alt-text">
                    
                        <?php 
                        while( have_rows('main_content') ): the_row(); 
                            $title= get_sub_field('product_title');
                            $description= get_sub_field('product_description');
                            $link_text= get_sub_field('link_text');
                            $link= get_sub_field('link'); ?>

                            <div class="slide-text">
                            <blockquote>
                                <h1><?php echo $title ; ?></h1>
                                <p><?php echo $description ; ?> </p>
                                <a href=<?php echo $link; ?>><button class="read-more"><?php echo $link_text; ?></button></a>
                            </blockquote>
                            </div>
                        <?php endwhile; ?>
                    
                    </div>

                </div>
                <div class="col-lg-6 ml-auto">
                            
                    <div class="owl-carousel slide-one-item-alt">
                    <?php 
                        while( have_rows('main_content') ): the_row(); 
                        $image=get_sub_field('product_image');
                        if( $image ): ?>
                            <img src="<?php echo $image; ?>" alt="Image" class="img-fluid" />
                        <?php endif; ?>
                        <?php endwhile; ?>
                        
                    </div>

                    <div class="owl-custom-direction">
                        <a href="#" class="custom-prev"><img src="<?php bloginfo( 'template_directory' );?>/images/icon-left.png"></a>
                        <a href="#" class="custom-next"><img src="<?php bloginfo( 'template_directory' );?>/images/icon-right.png"></a>
                    </div>

                </div>
            </div>
          </div>
        </div>
    </section>

    <!-- BANNER CARPUSEL END -->

    <div class="bg-blue-banner">
        <img src="<?php bloginfo( 'template_directory' );?>/images/bg-blue.png" width="100%">
    </div>
    <div class="bg-blue-banner-dot">
        <img src="<?php bloginfo( 'template_directory' );?>/images/dot.png" width="100%">
    </div>

    <div class="clearfix"></div>


    <!-- ABOUT -->
    <?php $about=get_field('about_us'); ?>
    <section class="m-t-150 m-b-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="about-sec">
                        <?php 
                        $image=$about['image'];
                        if( $image ): ?>
                            <img src="<?php echo $image; ?>" width="100%" />
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="about-sec-content">
                        <h5>About Us</h5>
                        <h2><?php echo $about['title'] ?></h2>
                        <p><?php echo $about['description'] ?></p>
                        <a href="<?php echo $about['link'] ?>"><button class="read-more"><?php echo $about['link_text'] ?></button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ABOUT END -->

    <!-- OUR PRODUCTS -->
    <?php $products=get_field('our_products'); ?>
    <section class="m-b-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="about-sec-content">
                        <h5>Our Products</h5>
                        <h2 style="text-transform: uppercase;"><?php echo $products['title']; ?></h2>
                        <p><?php echo $products['main_description']; ?> </p>
                        
                        <div class="m-t-20">
                            <div class="tabset">
                                <input type="radio" name="tabset" id="tab" checked >
                                <?php 
                                    if( have_rows('our_products') ): while ( have_rows('our_products') ) : the_row();  ?>
                                            
                                    <?php 
                                        if( have_rows('capacity') ): while ( have_rows('capacity') ) : the_row();  
                                        ?>

                                <label for="tab"><?php echo get_sub_field('litres');?></label> 
                                <?php 
                                        endwhile; endif;

                                    endwhile; endif;    ?>


                                <?php 
                                    if( have_rows('our_products') ): while ( have_rows('our_products') ) : the_row();  ?>
                                            
                                    <?php 
                                        if( have_rows('capacity') ): while ( have_rows('capacity') ) : the_row();  
                                        ?>
                                        
                                        
                                        
                                        <div class="tab-panels">
                                            <section class="tab-panel">
                                            <h3><?php echo get_sub_field('product_description'); ?></h3>
                                            <a href="<?php echo get_sub_field('link_1');?>"><button class="read-more m-r-20"><?php echo get_sub_field('link_text_1'); ?></button></a>
                                            <a href="<?php echo get_sub_field('link_2');?>"><button class="read-more2"><?php echo get_sub_field('link_text_2'); ?></button></a>
                                            </section>
                                        </div>
                                        

                                    <?php 
                                        endwhile; endif;

                                    endwhile; endif;    ?>
                            </div> 
                        </div>
                         <!-- tab - end -->

                        
                    <div>
                </div>

                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="pdt-img">
                        <?php 
                        $image=$products['image'];
                        if( $image ): ?>
                            <img src="<?php echo $image; ?>" width="100%" />
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- OUR PRODUCTS END -->


   
    <!-- BLOG -->
    <?php $blog=get_field('blog');?>

    <section class="m-b-100">
        <div class="container">
            <div class="head-sec text-center">
                <h5><?php echo $blog['main_blog_title']; ?></h5>
                <h2><?php echo $blog['sub_blog_title']; ?></h2>
            </div>
        </div>
        <div class="container m-t-50">
            <div class="row">
            <?php

                    if( have_rows('blog') ): while ( have_rows('blog') ) : the_row();  

                        if( have_rows('blogs_thumb') ): while ( have_rows('blogs_thumb') ) : the_row();   ?>
                        <div class="col-lg-4 col-md-4 m-t-30 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="zoom-out-img">
                                
                                
                            <?php 
                                $image=get_sub_field('blog_image');
                                if( $image ): ?>
                                    <img src="<?php echo $image; ?>" width="100%" />
                            <?php endif; ?>


                            </div>
                            <div class="blog-grid-bg">
                                <h6><?php echo get_sub_field('date'); ?></h6>
                                <h5><?php echo get_sub_field('blog_title'); ?> </h5>
                                <p> <?php echo get_sub_field('blog_summary'); ?> </p>
                                <div class="btn-blog">
                                    <a href="<?php echo get_sub_field('blog_link'); ?>"> 
                                        <button class="read-more3"><?php echo get_sub_field('blog_link_text'); ?></button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php
                        endwhile; endif;

                    endwhile; endif;

                    ?>


        
                

                    
                    
                
                
            </div>
        </div>
    </section>
    <!-- BLOG END -->
  


    <!-- TESTIMONIAL CAROUSEL -->
    <section class="car-mt-150 m-b-100">
        <div class="site-section testimonial-wrap custom-owl-carousel" id="testimonials-section">
          <div class="container">

          <?php $test=get_field('testimonials'); ?>
            <div class="clients-head">
                    <h5><?php echo $test['testimonial_title'];?></h5>
                    <h2><?php echo $test['tag_line'];?></h2>
                </div>
            <div class="row align-items-center">
              <div class="col-lg-12 mr-auto">
              <?php if( have_rows('testimonials') ): while ( have_rows('testimonials') ) : the_row();  ?>
                <div class="owl-carousel slide-one-item-alt-text2">
                <?php  

                        if( have_rows('clients') ): while ( have_rows('clients') ) : the_row();   ?>


                  <div class="slide-text2">
                    <div class="testi-clients">
                        <img src="<?php echo get_sub_field('image');?>">
                        <h6><?php echo get_sub_field('client_name'); ?></h6>
                        <p><?php echo get_sub_field('client_description'); ?></p>
                    </div>
                  </div>
                  <?php 
                  endwhile; endif;

                endwhile; endif; ?>

                </div>

                <div class="owl-custom-direction2">
                  <a href="#" class="custom-prev"><img src="<?php bloginfo( 'template_directory' );?>/images/icon2-left.png"></a>
                  <a href="#" class="custom-next"><img src="<?php bloginfo( 'template_directory' );?>/images/icon2-right.png"></a>
                </div>

              </div>
            </div>
          </div>
        </div>
    </section>
    <!-- TESTIMONIAL CAROUSEL END -->

<?php get_footer(); ?>