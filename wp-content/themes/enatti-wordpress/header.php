<!doctype html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ENATTI</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS here -->
    <?php wp_head();?>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    

    <!-- HEADER -->
    <header>
        <div class="header-area">
            <div id="sticky-header" class="main-header-area">
                <div class="container p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-4 col-lg-4">
                            <div class="logo-img">
                                <a href="index.html">
                                <?php 
                                $image=get_field('logo_header','option');
                                if( $image ): ?>
                                    <img src="<?php echo $image; ?>" />
                                <?php endif; ?>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">

                                        <?php 
                                        wp_nav_menu( 
                                            array(
                                                'theme-location'=>'top-menu',
                                            ) );
                                        ?>
            
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- HEADER END -->