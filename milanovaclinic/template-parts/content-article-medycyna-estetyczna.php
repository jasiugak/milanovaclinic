<div class="pbmit-title-bar-wrapper">
			<div class="container">
				<div class="pbmit-title-bar-content">
					<div class="pbmit-title-bar-content-inner">
						<div class="pbmit-tbar">
							<div class="pbmit-tbar-inner container">
								<h1 class="pbmit-tbar-title">Medycyna estetyczna</h1>
							</div>
						</div>
						<div class="pbmit-breadcrumb">
							<div class="pbmit-breadcrumb-inner">
								<span><a title="" href="#" class="home"><span>Milanovaclinic</span></a></span>
								<span class="sep">-</span>
								<span class="post-root post post-post current-item">Medycyna Estetyczna</span>
							</div>
						</div>
					</div>
				</div> 
			</div> 
		</div>
		<!-- Page Content -->
		<div class="page-content">

            <!-- service Details --> 
            <section>
				<div class="container">
					<div class="row">
						<div class="col-lg-3 service-left-col order-2 order-lg-1">
							<aside class="service-sidebar">
								<aside class="widget post-list">
									<div class="all-post-list">
									<?php
                                                        wp_nav_menu(
                                                            array(
                                                                'menu' => 'medycyna_menu',
                                                                'container' => '',
                                                                'theme_location' => 'medycyna_menu',
                                                                'items_wrap' => '<ul>%3$s</ul>'
                                                            )
                                                        );
                                                    ?>
										
									</div>
								</aside>
								<!-- <aside class="widget post-list">
									<h2 class="widget-title">Download</h2>
									<div class="widget_text widget-as-link ">
										<div class="textwidget custom-html-widget">
											<div class="download">
												<div class="item-download">
													<a href="#" target="_blank" rel="noopener">
														<i class="pbmit-dentiq-icon pbmit-dentiq-icon-pdf"></i>Download our Brochures 
														<span>DOWNLOAD</span>
													</a>
												</div>
												<div class="item-download">
													<a href="#" target="_blank" rel="noopener">
														<i class="pbmit-dentiq-icon pbmit-dentiq-icon-doc"></i>OurBotoks
														<span>DOWNLOAD</span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</aside> -->
								<aside class="widget post-list">
									<div class="textwidget">
										<p>
											<img src="<?php echo get_template_directory_uri(); ?>/assets/images/homepage-1-service/service-image.jpg" class="img-fluid" alt="">
										</p>
										<div class="single-service-contact">
													<div class="single-service-contact-inner">
												<h2>Możemy pomóc?</h2>
												<p>
													Jeżeli myślisz, że możemy pomóc<br>
to działajmy.
													<a href="wordpress/kontakt" class="pbmit-btn pbmit-btn-white">Umów wizytę</a>
												</p>
											</div>
										</div>
									</div>
								</aside>
							</aside>
						</div>
						<div class="col-lg-9 service-right-col order-1">
							<div class="pbmit-service-single">
								<img src="<?php the_post_thumbnail_url(); ?>" class="w-100" alt="">
							</div>
							<div class="profilaktyka">
								<div class="pbmit-service-contant">
									<h3 class="pbmit-title">Opis usługi</h3>
                                    <p>
									<?php
                                        the_content();
                                    ?>
                                    </p>
									<!-- <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable.</p> -->
								</div>
								<!-- <div class="service-page-infobox">
									<div class="row">
										<div class="col-md-4">
											<div class="pbmit-ihbox-style-1">
												<div class="pbmit-ihbox-icon">
													<div class="pbmit-ihbox-icon-wrapper">
														<i class="pbmit-dentiq-icon pbmit-dentiq-icon-implants-1"></i>
													</div>
												</div>
												<div class="pbmit-ihbox-contents">
													<div class="pbmit-ihbox-heading">
														<h2 class="pbmit_custom_heading">Dental Implant</h2>
													</div>
													<div class="pbmit-ihbox-content">Dental implants are effective to smile. </div>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="pbmit-ihbox-style-1">
												<div class="pbmit-ihbox-icon">
													<div class="pbmit-ihbox-icon-wrapper">
														<i class="pbmit-dentiq-icon pbmit-dentiq-icon-call"></i>
													</div>
												</div>
												<div class="pbmit-ihbox-contents">
													<div class="pbmit-ihbox-heading">
														<h2 class="pbmit_custom_heading">Emergency Care</h2>
													</div>
													<div class="pbmit-ihbox-content">Emergency Call only +1 945 825 763 </div>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="pbmit-ihbox-style-1">
												<div class="pbmit-ihbox-icon">
													<div class="pbmit-ihbox-icon-wrapper">
														<i class="pbmit-dentiq-icon pbmit-dentiq-icon-insurance"></i>
													</div>
												</div>
												<div class="pbmit-ihbox-contents">
													<div class="pbmit-ihbox-heading">
														<h2 class="pbmit_custom_heading">Teeth cleaning</h2>
													</div>
													<div class="pbmit-ihbox-content">Teeth cleaning is part involves of denta </div>
												</div>
											</div>
										</div>
									</div>
								</div> -->
								<!-- <div class="service-plan">
									<h3 class="pbmit-title">Dental Family Plan</h3>
									<P>We have a long and proud history givin emphasis to environment social and economic outcomes to deliver places that respond.Lorem ipsum dolor sit amet, consectetur adipisicing elit. sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</P>
								</div>
								<div class="service-list-group-img">
									<div class="row">
										<div class="col-md-6">
											<ul class="list-group list-group-borderless">
												<li class="list-group-item">
													<i class="fa fa-check"></i> Better Care For Complex Conditions
												</li>
												<li class="list-group-item">
													<i class="fa fa-check"></i> Respiratory Syncytial Virus
												</li>
												<li class="list-group-item">
													<i class="fa fa-check"></i> Routine and medical care and travel medicine.
												</li>
												<li class="list-group-item">
													<i class="fa fa-check"></i> Manage your time so you’ll get more done
												</li>
											</ul>
										</div>
										<div class="col-md-6">
											<img src="images/homepage-1/service/service-image-01.jpg" class="img-fluid w-100" alt="">
										</div>
									</div>
								</div> -->
								<!-- <div class="service-our-dentist">
									<h3 class="pbmit-title">Our dentist</h3>
									<div class="row">
										<div class="col-md-4">
											<article class="pbmit-team-style-1">
												<div class="pbminfotech-post-item">
													<div class="pbminfotech-team-image-box">
														<div class="pbmit-featured-wrapper">
															<img src="images/homepage-1/team/team-01.jpg" class="img-fluid w-100" alt="">
														</div>
													</div>
													<div class="pbminfotech-box-content">
														<div class="pbminfotech-box-content-inner">
															<div class="pbminfotech-box-team-position">
																<div class="pbminfotech-box-team-position">Dental surgeon</div>
															</div>
															<h3 class="pbmit-team-title">
																<a href="team-single.html">Dr. Jason Smith</a>
															</h3>
														</div>
														<div class="pbminfotech-box-social-links">
															<ul class="pbmit-social-links pbmit-team-social-links">
																<li class="pbmit-social-li pbmit-social-facebook">
																	<a href="#" title="Facebook" target="_blank">
																		<span><i class="pbmit-base-icon-facebook-squared"></i></span>
																	</a>
																</li>
																<li class="pbmit-social-li pbmit-social-twitter">
																	<a href="#" title="Twitter" target="_blank">
																		<span><i class="pbmit-base-icon-twitter"></i></span>
																	</a>
																</li>
																<li class="pbmit-social-li pbmit-social-linkedin">
																	<a href="#" title="LinkedIn" target="_blank">
																		<span><i class="pbmit-base-icon-linkedin-squared"></i></span>
																	</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</article>
										</div>
										<div class="col-md-4">
											<article class="pbmit-team-style-1">
												<div class="pbminfotech-post-item">
													<div class="pbminfotech-team-image-box">
														<div class="pbmit-featured-wrapper">
															<img src="images/homepage-1/team/team-02.jpg" class="img-fluid w-100" alt="">
														</div>
													</div>
													<div class="pbminfotech-box-content">
														<div class="pbminfotech-box-content-inner">
															<div class="pbminfotech-box-team-position">
																<div class="pbminfotech-box-team-position">Orthodontist</div>
															</div>
															<h3 class="pbmit-team-title">
																<a href="team-single.html">Dr. Adam Smith</a>
															</h3>
														</div>
														<div class="pbminfotech-box-social-links">
															<ul class="pbmit-social-links pbmit-team-social-links">
																<li class="pbmit-social-li pbmit-social-facebook">
																	<a href="#" title="Facebook" target="_blank">
																		<span><i class="pbmit-base-icon-facebook-squared"></i></span>
																	</a>
																</li>
																<li class="pbmit-social-li pbmit-social-twitter">
																	<a href="#" title="Twitter" target="_blank">
																		<span><i class="pbmit-base-icon-twitter"></i></span>
																	</a>
																</li>
																<li class="pbmit-social-li pbmit-social-linkedin">
																	<a href="#" title="LinkedIn" target="_blank">
																		<span><i class="pbmit-base-icon-linkedin-squared"></i></span>
																	</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</article>
										</div>
										<div class="col-md-4">
											<article class="pbmit-team-style-1">
												<div class="pbminfotech-post-item">
													<div class="pbminfotech-team-image-box">
														<div class="pbmit-featured-wrapper">
															<img src="images/homepage-1/team/team-03.jpg" class="img-fluid w-100" alt="">
														</div>
													</div>
													<div class="pbminfotech-box-content">
														<div class="pbminfotech-box-content-inner">
															<div class="pbminfotech-box-team-position">
																<div class="pbminfotech-box-team-position">General Dentist</div>
															</div>
															<h3 class="pbmit-team-title">
																<a href="team-single.html">Dr. Maria Angel</a>
															</h3>
														</div>
														<div class="pbminfotech-box-social-links">
															<ul class="pbmit-social-links pbmit-team-social-links">
																<li class="pbmit-social-li pbmit-social-facebook">
																	<a href="#" title="Facebook" target="_blank">
																		<span><i class="pbmit-base-icon-facebook-squared"></i></span>
																	</a>
																</li>
																<li class="pbmit-social-li pbmit-social-twitter">
																	<a href="#" title="Twitter" target="_blank">
																		<span><i class="pbmit-base-icon-twitter"></i></span>
																	</a>
																</li>
																<li class="pbmit-social-li pbmit-social-linkedin">
																	<a href="#" title="LinkedIn" target="_blank">
																		<span><i class="pbmit-base-icon-linkedin-squared"></i></span>
																	</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</article>
										</div>
									</div>
								</div> -->
								<!-- <div class="pbmit-service-related">
									<h3>Related Service</h3>
									<div class="row">
										<div class="col-md-4"></div>
										<div class="col-md-4"></div>
										<div class="col-md-4">
											<article class="pbmit-service-style-2">
												<div class="pbminfotech-post-item">
													<div class="pbmit-featured-wrapper">
														<img src="images/homepage-1/service/service-07.jpg" class="img-fluid" alt="">
													</div>
													<div class="pbminfotech-box-content">
														<div class="pbminfotech-box-content-inner">
															<div class="pbmit-service-icon">
																<div class="pbmit-service-icon-wrapper">
																	<i class="pbmit-dentiq-icon pbmit-dentiq-icon-pills"></i> 
																</div>
															</div>
															<h3 class="pbmit-service-title">
																<a href="profilaktyka.html">Paradontosis</a>
															</h3>
															<div class="pbmit-service-content">
																<p>Paradontosis involves oral hygiene and professional teeth cleaning.</p>
															</div>
														</div>
													</div>
												</div>
											</article>
										</div>
									</div>
								</div> -->
							</div>
						</div>
					</div>
				</div>
            </section>
            <!-- service Details End -->

		</div>
		<!-- Page Content End -->
