<!doctype html>
<html class="no-js" lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		  <!-- Favicon -->
		  <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/fevicon.png">
	  <?php
		wp_head();
	  ?>

   </head>
   <body>
      <!-- page wrapper -->
      <div class="page-wrapper">

		<!-- Header Main Area -->
		<header class="site-header header-style-1">
			<div class="pbmit-header-overlay">
				<div class="pre-header">
					<div class="container">
						<div class="d-flex justify-content-between align-items-center">
							<div class="pbmit-pre-header-left">
								<ul class="pbmit-contact-info">
									<li><i class="pbmit-base-icon-phone-volume-solid"></i> +48 607 214 428</li>
									<li><i class="pbmit-base-icon-map-marker-alt-solid"></i>Wrocław</li>
								</ul>
							</div>
							<div class="pbmit-pre-header-right">
								<ul class="pbmit-contact-info">
									<li><i class="pbmit-base-icon-clock-solid"></i> Pon - Pt 9:00 - 20:00</li>
									<li>
										<ul class="pbmit-social-links">
											<li class="pbmit-social-li pbmit-social-facebook">
												<a href="https://www.facebook.com/profile.php?id=100095516106921 " target="_blank">
													<span><i class="pbmit-base-icon-facebook-squared"></i></span>
												</a>
											</li>

										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="site-header-menu">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="d-flex align-items-center justify-content-between">
									<div class="site-branding">
										<span class="site-title">
											<a href="/wordpress">
                                                <?php
                                                if(function_exists('the_custom_logo')){
                                                    
                                                        $custom_logo_id = get_theme_mod('custom_logo');
                                                        $logo = wp_get_attachment_image_src($custom_logo_id);

                                            
                                                }
                                                ?>
												<img class="logo-img" src="<?php echo $logo[0] ?>" alt="">
											</a>
										</span>
									</div>
									<div class="site-navigations">
										<nav class="main-menu navbar-expand-xl navbar-light">
											<div class="navbar-header">
												<!-- Toggle Button --> 
												<button class="navbar-toggler" type="button">
													<i class="pbmit-base-icon-menu-1"></i>
												</button>
											</div>
											<div class="pbmit-mobile-menu-bg"></div>
											<div class="collapse navbar-collapse clearfix show" id="pbmit-menu">
												<div class="pbmit-menu-wrap">
													<span class="closepanel">
														<i class="pbmit-base-icon-cancel"></i>
													</span>

                                                    <?php
                                                        wp_nav_menu(
                                                            array(
                                                                'menu' => 'primary',
                                                                'container' => '',
                                                                'theme_location' => 'primary',
                                                                'items_wrap' => '<ul id="" class="navigation clearfix">%3$s</ul>'
                                                            )
                                                        );
                                                    ?>
										</div>
										</nav>
									</div>
									<div class="pbmit-right-side">
										<div class="pbmit-header-search-btn">

										</div>
										<div class="pbmit-header-button">
											<a href="https://www.znanylekarz.pl/milena-gajewska/stomatolog-lekarz-medycyny-estetycznej/wroclawl" class="pbmit-btn pbmit-btn-outline">Umów wizytę</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
            </header>
			
		