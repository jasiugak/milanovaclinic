 <!-- footer -->
 <footer class="footer site-footer">
			<div class="pbmit-footer-widget-area-top">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-md-12 col-lg-3">
							<div class="pbmit-footer-boxes-1">
							<?php
                                                if(function_exists('the_custom_logo')){
                                                    
                                                        $custom_logo_id = get_theme_mod('custom_logo');
                                                        $logo = wp_get_attachment_image_src($custom_logo_id);

                                            
                                                }
                                                ?>
												<img class="pbmit-footerlogo" src="<?php echo $logo[0] ?>" alt="">
								
							</div>
						</div>
						<div class="col-md-12 col-lg-6">
							<form class="pbmit-footer-boxes-2">
								<input type="email" name="EMAIL" placeholder="Newsletter: Twój adres email" required="">	
								<button type="submit" value="Sign up">Zapisz</button> 
							</form>
						</div>
						<div class="col-md-12 col-lg-3">
					<div class="pbmit-footer-boxes-3">
								<ul class="pbmit-social-links">
									<li class="pbmit-social-li pbmit-social-facebook">
										<a href="https://www.facebook.com/profile.php?id=100095516106921 " target="_blank">
											<span><i class="pbmit-base-icon-facebook-squared"></i></span>
										</a>
									</li>
							
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="pbmit-footer-widget-area">
				<div class="container">
					<div class="row">
						<div class="pbmit-footer-widget-col-1">
							<div class="widget">
								<h2 class="widget-title">O Nas</h2>
								<div class="textwidget">
									<p>Milanovaclinic.pl | Uśmiech to Twoja wizytówka - naszą misją jest pomóc Ci go utrzymać.</p>
								</div>
								<div class="pbmit-contact-widget-lines">
									<div class="pbmit-contact-widget-line pbmit-contact-widget-address">Adres: Gazowa 90/U6, <br> 50-513 Wrocław</div>
									<div class="pbmit-contact-widget-line pbmit-contact-widget-phone">Telefon: +48 607 214 428</div>
									<div class="pbmit-contact-widget-line pbmit-contact-widget-email">Email: rejestracja@milanovaclinic.pl</div>
								</div>
							</div>
						</div>
						<div class="pbmit-footer-widget-col-2">
							<div class="widget">
							<h2 class="widget-title">Gabinet</h2>
							<div class="textwidget">
                            <?php
                                                        wp_nav_menu(
                                                            array(
                                                                'menu' => 'footer',
                                                                'container' => '',
                                                                'theme_location' => 'footer',
                                                                'items_wrap' => '<ul id="" class="navigation clearfix">%3$s</ul>'
                                                            )
                                                        );
                                                    ?>
								
							</div>
							</div>
						</div>
						<div class="pbmit-footer-widget-col-3">
							<!-- <div class="widget">
								<h2 class="widget-title"></h2>
								<ul class="pbmit-rpw-list">
									<li>
										<a href="blog-single.html">
											<span class="pbmit-rpw-img">
												<img src="images/footer-img-01.jpg" class="img-fluid" alt="">
											</span>
										</a>
										<span class="pbmit-rpw-content">
											<span class="pbmit-rpw-title">
												<a href="blog-single.html">Dental Hygiene for Children</a>
											</span>
											<span class="pbmit-rpw-date">
												<a href="blog-single.html">January 23, 2019</a>
											</span>
										</span>
									</li>
									<li>
										<a href="blog-single.html">
											<span class="pbmit-rpw-img">
												<img src="images/footer-img-02.jpg" class="img-fluid" alt="">
											</span>
										</a>
										<span class="pbmit-rpw-content">
											<span class="pbmit-rpw-title">
												<a href="blog-single.html">Improvements In Technology</a>
											</span>
											<span class="pbmit-rpw-date">
												<a href="blog-single.html">January 22, 2019</a>
											</span>
										</span>
									</li>
								</ul>
							</div> -->
						</div>
						<div class="pbmit-footer-widget-col-4">
							<div class="widget">
								<h2 class="widget-title">Godziny otwarcia</h2>
								<div class="textwidget">
									<div class="pbmit-timelist-wrapper">
										<ul class="pbmit-timelist-list">
											<li>
												<span class="pbmit-timelist-li-title">Pon – Piątek</span>
												<span class="pbmit-timelist-li-value">9:00 – 20:00</span>
											</li>
											<li>
												<span class="pbmit-timelist-li-title">Sobota</span>
												<span class="pbmit-timelist-li-value">10:00 – 15:00</span>
											</li>
											<li>
												<span class="pbmit-timelist-li-title">Niedziela</span>
												<span class="pbmit-timelist-li-value">Nieczynne</span>
											</li>
											<!-- <li>
												<span class="pbmit-timelist-li-title">Saturday</span>
												<span class="pbmit-timelist-li-value">10:00 – 12:30</span>
											</li>
											<li>
												<span class="pbmit-timelist-li-title">Sunday</span>
												<span class="pbmit-timelist-li-value">Closed</span>
											</li> -->
										</ul>	
									</div>				
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="pbmit-footer-bottom">
				<div class="container">
					<div class="pbmit-footer-text-inner">
						<div class="row">
							<div class="col-md-12">
								<div class="pbmit-footer-copyright-text-area"> Copyright © 2023  
									<a href="index.html">Milanovaclinic.pl</a>, Wszystkie Prawa Zastrzezone, realziacja: g-works.pl, <a href="/pp/ppmilanovaclinic.pdf">Polityka prywatności</a>
								</div>
							</div>			
						</div>
					</div>	
				</div>
			</div>	
		</footer>
		<!-- footer End -->

	</div>
	<!-- page wrapper End -->

	<!-- Search Box Start Here -->
	<div class="pbmit-search-overlay">
		<div class="pbmit-icon-close"></div>
		<div class="pbmit-search-outer"> 
			<form class="pbmit-site-searchform">
				<input type="search" class="form-control field searchform-s" name="s" placeholder="Type Word Then Press Enter">
				<button type="submit">
					<i class="pbmit-base-icon-search"></i>
				</button>
			</form>
		</div>
	</div>
   	<!-- Search Box End Here -->

     <!-- JS
         ============================================ -->
		 <?php
		 wp_footer();
		 ?>
   </body>
</html>