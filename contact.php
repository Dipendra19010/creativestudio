<?php
	$conn=mysqli_connect("localhost","root","","db_cstudio");
	
	if(isset($_POST['btn_contact']))
	{
		$firstname=$_POST['txtfirstname'];
		$lastname=$_POST['txtlastname'];
		$emaild=$_POST['txtemailid'];
		$message=$_POST['txtmessage'];
		$create_date=date("d-m-Y H:i:s");
		
		
		$addcontact=mysqli_query($conn,"INSERT INTO tbl_contact(first_name,last_name,emailid,message,create_date)VALUES('".$firstname."','".$lastname."','".$emaild."','".$message."','".$create_date."')");
		if($addcontact){
			echo "Message sent successfully...";
		}
		
		
		/* if($addcontact){
			$to="xyz@somedomain.com";
			$headers="From : ".$emaild;
			$msg=wordwrap($message,70);
			$retval=mail($to,"New Inquiry",$message,$headers);
			if( $retval == true ) {
				echo "Message sent successfully...";
			}
			else {
				echo "Message could not be sent...";
			}
		}
		else{
			echo "Please enter proper details";
		} */
	}
?>

<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from nurseitmukaytegin.com/envato-templates/Creative Studio/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Sep 2021 17:54:38 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="Jinna Gik">
		<meta name="description" content="Creative Studio Template is a uniquely HTML5 template develop in HTML with a modern look.">
		<meta name="keywords" content="creative, modern, clean, html5, css3, portfolio, blog, agency, templates, minimal">

		<!-- favicon -->
		<link rel="shortcut icon" href="assets/images/favicon.png">
		<link rel="apple-touch-icon" href="assets/images/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="72x72" href="assets/images/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="114x114" href="assets/images/apple-touch-icon-114x114.png">

		<title>Creative Studio</title>

		<!-- fonts -->
		<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&amp;display=swap" rel="stylesheet">

		<!-- styles -->
		<link href="assets/css/plugins.css" rel="stylesheet" type="text/css">
		<link href="assets/css/style.css" rel="stylesheet" type="text/css">
	</head>
	<body class="preloader cursor-anim-enable">
		<div class="preloader__out-overlay"></div>

		<!-- preloader-loading start -->
		<div class="preloader__loading in">
			<div class="preloader__loading-anim" data-splitting>Loading...</div>
		</div>
		<div class="preloader__loading out">
			<div class="preloader__loading-anim" data-splitting>Loading...</div>
		</div><!-- preloader-loading end -->

		<!-- header start -->
		<header class="fixed-header">
			<!-- logo start -->
			<div class="header-logo">
				<a href="index.html" class="header-logo__box js-pointer-large js-animsition-link">
					<img class="header-logo__img" src="assets/images/logo/Add-a-heading-1-1.png" alt="logo">
				</a>
			</div><!-- logo end -->
			<!-- menu-icon start -->
			<div class="menu-icon js-menu-open-close js-pointer-large">
				<div class="menu-icon__box">
					<span class="menu-icon__inner"></span>
					<span class="menu-icon__close"></span>
				</div>
			</div><!-- menu-icon end -->
		</header><!-- header end -->

		<!-- navigation overlay -->
		<div class="nav-overlay"></div>
		<!-- navigation start -->
		<nav class="nav-container js-dropdown-active-box">
			<!-- nav-box start -->
			<div class="container small nav-box">
				<!-- dropdown close btn start -->
				<div class="dropdown-close">
					<div class="dropdown-close__inner">
						<span class="dropdown-close__arrow"></span>
					</div>
					<div class="js-dropdown-close js-pointer-large"></div>
					<div class="js-dropdown-close-2lvl js-pointer-large"></div>
				</div><!-- dropdown close btn end -->

				<!-- menu-box start -->
				<ul class="menu-box nav-bg-overlay-box">
					<!-- nav-btn-box start -->
					<li class="nav-btn-box js-nav-bg-change js-dropdown-open">
						<a href="index.html" class="nav-btn dropdown-hidden-btn js-pointer-large">
							<span class="nav-btn__inner" data-text="Home">Home</span>
						</a>

						<div class="nav-bg-box">
							<div class="nav-bg" style="background-image: url(assets/images/menu/home2.jpg);"></div>
						</div>
					</li><!-- nav-btn-box end -->
					<!-- nav-btn-box start -->
					<li class="nav-btn-box js-nav-bg-change js-dropdown-open">
						<a class="nav-btn dropdown-hidden-btn js-pointer-large">
							<span class="nav-btn__inner" data-text="Portfolio">Portfolio</span>
						</a>

						<!-- dropdown start -->
						<ul class="menu-box dropdown js-dropdown">
							
							<li class="nav-btn-box">
								<a href="portfolio_commercial.html" class="nav-btn dropdown-2lvl-hidden-btn js-animsition-link js-pointer-large">
									<span class="nav-btn__inner" data-text="Commercial">Commercial</span>
								</a>
							</li>
							<li class="nav-btn-box">
								<a href="portfolio_hospitality.html" class="nav-btn dropdown-2lvl-hidden-btn js-animsition-link js-pointer-large">
									<span class="nav-btn__inner" data-text="Hospitality">Hospitality</span>
								</a>
							</li>
							<li class="nav-btn-box">
								<a href="portfolio_residental.html" class="nav-btn dropdown-2lvl-hidden-btn js-animsition-link js-pointer-large">
									<span class="nav-btn__inner" data-text="Residental">Residental</span>
								</a>
							</li>
							<li class="nav-btn-box">
								<a href="portfolio_master-plan.html" class="nav-btn dropdown-2lvl-hidden-btn js-animsition-link js-pointer-large">
									<span class="nav-btn__inner" data-text="Master Plan">Master Plan</span>
								</a>
							</li>
							<li class="nav-btn-box js-dropdown-open-2lvl">
								<a class="nav-btn dropdown-2lvl-hidden-btn js-pointer-large">
									<span class="nav-btn__inner" data-text="Projects">Projects</span>
								</a>

								<!-- dropdown 2-level start -->
								
							</li>
						</ul><!-- dropdown end -->

						<div class="nav-bg-box">
							<div class="nav-bg" style="background-image: url(assets/images/menu/goashape-RvyJGaoaWrs-unsplash.jpg);"></div>
						</div>
					</li><!-- nav-btn-box end -->

					<!-- nav-btn-box start -->
					
						<div class="nav-bg-box">
							<div class="nav-bg" style="background-image: url(assets/images/menu/face-facial-hair-fashionable-2555100.jpg);"></div>
						</div>
					</li><!-- nav-btn-box end -->

					<!-- nav-btn-box start -->
					<li class="nav-btn-box js-nav-bg-change js-nav-bg-active">
						<a href="contact.html" class="nav-btn dropdown-hidden-btn js-animsition-link js-pointer-large">
							<span class="nav-btn__inner" data-text="Contact">Contact</span>
						</a>
						<div class="nav-bg-box">
							<div class="nav-bg" style="background-image: url(assets/images/menu/architectural-design-architecture-building-exterior-1707823.jpg);"></div>
						</div>
					</li><!-- nav-btn-box end -->
				</ul><!-- menu-box end -->
			</div><!-- nav-box end -->
		</nav><!-- navigation end -->

		<!-- scroll-content start -->
		<div id="js-scroll-content">
			<!-- js-animsition-overlay start -->
			<div class="js-animsition-overlay" data-animsition-overlay="true">
				<!-- main start -->
				<main class="main-content">
					<!-- page head start -->
					<section id="up" class="pos-rel hidden-box" data-scroll-section>
						<div class="page-head-footer-overlay-fix" data-scroll data-scroll-repeat>
							<!-- video-bg-box start -->
							<div class="video-bg-box" data-scroll data-scroll-speed="-1.5">
								<video src="http://www.nurseitmukaytegin.com/envato-templates/videos/team.mp4" class="video-bg" muted loop autoplay playsinline poster="assets/images/backgrounds/team.jpg"></video>
							</div><!-- video-bg-box end -->

							<!-- bg-overlay -->
							<div class="bg-overlay-black"></div>

							<!-- flex-min-height-100vh start -->
							<div class="flex-min-height-100vh">
								<div class="padding-top-bottom-150 container small">
									<h2 class="headline-xxl headline-uppercase after-preloader-anim">
										<span class="d-block">
											<span class="anim-chars-fadein" data-splitting>Have a project in mind ?
									</span>
										</span>
										<span class="d-block" data-scroll data-scroll-speed="-0.4" data-scroll-position="top">
											<span class="anim-chars-fadein" data-splitting>lets talk...</span>
										</span>
										
									</h2>
								</div>
							</div><!-- flex-min-height-100vh end -->

							<!-- to top btn start -->
							<a href="#down" class="scroll-to-btn to-down js-pointer-large" data-scroll-to>
								<div class="scroll-to-down-box">
									<span class="scroll-to-btn__arrow"></span>
								</div>
							</a><!-- to top btn end -->
						</div>
					</section><!-- page head end -->

					<!-- contact us start -->
					<section id="down" class="section-bg-dark" data-scroll-section>
						<!-- flex-min-height-100vh start -->
						<div class="flex-min-height-100vh">
							<!-- flex-container start -->
							<div class="container flex-container flex-align-center padding-top-60 padding-bottom-150">
								<!-- column start -->
								<div class="six-columns column-100-999 padding-top-90">
									<div class="column-r-margin-20-999 hidden-box">
										<div data-scroll data-scroll-speed="-1.3">
											<div class="anim-img-reveal" data-scroll data-scroll-offset="20%" style="background-image:url(assets/images/contact/book-imagination.jpg)">
												<img src="assets/images/contact/book-imagination.jpg" alt="Contact photo">
											</div>
										</div>
									</div>
								</div><!-- column end -->

								<!-- column start -->
								<div class="six-columns column-100-999 padding-top-90 z-index-2">
									<!-- column-l-margin-20-999 start -->
									<div class="column-l-margin-20-999" data-scroll data-scroll-speed="1">
										<!-- title start -->
										<h2 class="padding-bottom-90 d-inline-block">
											<a href="#" class="text-left-offset headline-xl headline-uppercase hover-stroke-fill-white js-pointer-large" data-text="contact us">contact us</a>
										</h2><!-- title end -->

										<!-- pos-rel start -->
										<div class="pos-rel">
											<!-- anim-line-top -->
											<div class="anim-line-top" data-scroll data-scroll-offset="20%"></div>

											<!-- flex-container start -->
											<div class="flex-container">
												<!-- column start -->
												<div class="six-columns padding-top-30">
													<div class="column-r-margin-20">
														<h4 class="headline-xxxxs">General contact</h4>
														<div class="margin-top-20">
															<a href="#" class="subhead-xxs text-color-b0b0b0 text-hover-to-white js-pointer-small">+23 8 8532 7834</a>
															<div class="margin-top-bottom-5">
																<p class="subhead-xxs text-color-b0b0b0">9.00 ??? 18.00, Mon to Fri</p>
															</div>
															<a href="#" class="line-btn text-color-b0b0b0 text-hover-to-white js-pointer-small">email@Creative Studio_agency.com</a>
														</div>
													</div>
												</div><!-- column end -->

												<!-- column start -->
												<div class="six-columns padding-top-30">
													<div class="column-r-margin-20">
														<h4 class="headline-xxxxs">Marketing</h4>
														<div class="margin-top-20">
															<a href="#" class="subhead-xxs text-color-b0b0b0 text-hover-to-white js-pointer-small">+23 8 8852 7435</a>
															<div class="margin-top-bottom-5">
																<p class="subhead-xxs text-color-b0b0b0">9.00 ??? 18.00, Mon to Fri</p>
															</div>
															<a href="#" class="line-btn text-color-b0b0b0 text-hover-to-white js-pointer-small">email@Creative Studio_marketing.com</a>
														</div>
													</div>
												</div><!-- column end -->

												<!-- column start -->
												<div class="six-columns padding-top-30">
													<div class="column-r-margin-20">
														<h4 class="headline-xxxxs">Address</h4>
														<div class="margin-top-20">
															<p class="subhead-xxs text-color-b0b0b0">
																PO Box 223158 Oliver Street<br>
																East Victoria 2006 UK
															</p>
															<div class="margin-top-5">
																<a href="#" class="line-btn text-color-b0b0b0 text-hover-to-white js-pointer-small">open in google maps</a>
															</div>
														</div>
													</div>
												</div><!-- column end -->

												<!-- column start -->
												<div class="six-columns padding-top-30">
													<div class="column-r-margin-20">
														<h4 class="headline-xxxxs">Careers</h4>
														<div class="margin-top-20">
															<a href="#" class="line-btn text-color-b0b0b0 text-hover-to-white js-pointer-small">email@Creative Studio_career.com</a>
															<div class="margin-top-5">
																<a href="#" class="line-btn text-color-b0b0b0 text-hover-to-white js-pointer-small">email@Creative Studio_job.com</a>
															</div>
														</div>
													</div>
												</div><!-- column end -->
											</div><!-- flex-container end -->
										</div><!-- pos-rel end -->
									</div><!-- column-l-margin-20-999 end -->
								</div><!-- column end -->
							</div><!-- flex-container end -->
						</div><!-- flex-min-height-100vh end -->
					</section><!-- contact us end -->

					<!-- form section start -->
					<section class="pos-rel hidden-box" data-scroll-section>
						<!-- bg-parallax -->
						<div class="bg-parallax" style="background-image:url(assets/images/backgrounds/cback.jpg)" data-scroll data-scroll-speed="-1.5"></div>

						<!-- bg-overlay -->
						<div class="bg-overlay-black bg-overlay-black_deep"></div>

						<!-- flex-min-height-100vh start -->
						<div class="flex-min-height-100vh">
							<!-- container start -->
							<div class="container small padding-top-bottom-150">
								<!-- pos-rel start -->
								<div class="pos-rel">
									<!-- form-box start -->
									<div class="form-box scrollanim-activate line-scrollanim-activate form-anim-activate" data-scroll data-scroll-offset="30%">
										<!-- title start -->
										<div class="text-center">
											<h3 class="headline-xxxxs anim-fade-to-top">Lets Get In Touch!</h3>
										</div><!-- title end -->

										<!-- form start -->
										<form method="post" >
											<!-- flex-container start -->
											<div class="flex-container padding-top-60">
												<!-- column start -->
												<div class="four-columns padding-top-30">
													<div class="column-l-r-margin-10 pos-rel">
														<input type="text" name="txtfirstname" id="first_name" required class="form-input js-pointer-small">
														<label for="first_name" class="form-label" data-text="First name">First name</label>
														<div class="anim-line-bottom"></div>
													</div>
												</div><!-- column end -->

												<!-- column start -->
												<div class="four-columns padding-top-30">
													<div class="column-l-r-margin-10 pos-rel">
														<input type="text" name="txtlastname" id="last_name" required class="form-input js-pointer-small">
														<label for="last_name" class="form-label tr-delay-01" data-text="Last name">Last name</label>
														<div class="anim-line-bottom tr-delay-01"></div>
													</div>
												</div><!-- column end -->

												<!-- column start -->
												<div class="four-columns padding-top-30">
													<div class="column-l-r-margin-10 pos-rel">
														<input type="email" name="txtemailid" id="email" required class="form-input js-pointer-small">
														<label for="email" class="form-label tr-delay-02 email-label" data-text="Email address">Email address</label>
														<div class="anim-line-bottom tr-delay-02"></div>
													</div>
												</div><!-- column end -->

												<!-- column start -->
												<div class="twelve-columns padding-top-30">
													<div class="column-l-r-margin-10 pos-rel">
														<textarea name="txtmessage" id="message" required class="form-input js-pointer-small"></textarea>
														<label for="message" class="form-label tr-delay-03" data-text="Message content">Message content</label>
														<div class="anim-line-bottom tr-delay-03"></div>
													</div>
												</div><!-- column end -->
												
											</div><!-- flex-container end -->
											<div class="padding-top-30"></div>
											<div class="padding-top-0 anim-fade-to-top tr-delay-06 border-btn " style="margin-left: 360px;">
												<div class="js-pointer-large border-btn__inner ">
													<input type="submit" class="border-btn__inner text-center" name="btn_contact" value="Submit" >
												</div>	
											</div>
											<!-- button start -->
						
													
												
										</form><!-- form end -->
									</div><!-- form-box end -->

									<!-- alert start -->
									<div class="js-popup-fade" id="m_sent">
										<div class="js-popup text-center">
											<div class="popup-icon">
												<i class="fas fa-check"></i>
											</div>
											<div class="popup-alert headline-xs">
												Thank you!<br>
												Your submission<br>
												has been received!
											</div>
											<div class="flip-btn js-popup-close js-pointer-large" data-splitting>Close</div>
										</div>
									</div><!-- alert end -->

									<!-- alert start -->
									<div class="js-popup-fade" id="m_err">
										<div class="js-popup text-center">
											<div class="popup-icon">
												<i class="fas fa-times"></i>
											</div>
											<div class="popup-alert headline-xs">Error</div>
											<div class="flip-btn js-popup-close js-pointer-large" data-splitting>Close</div>
										</div>
									</div><!-- alert end -->
								</div><!-- pos-rel end -->
							</div><!-- container end -->
						</div><!-- flex-min-height-100vh end -->
					</section><!-- form section end -->
				</main><!-- main end -->

				<!-- footer start -->
				<footer class="section-bg-dark" data-scroll-section>
					<!-- container start -->
					<div class="container padding-top-bottom-30" data-scroll data-scroll-speed="-4" data-scroll-position="bottom">
						<!-- flex-container start -->
						<div class="flex-container flex-align-center">
							<!-- column start -->
							<div class="eight-columns padding-top-90">
								<h4 class="column-l-r-margin-10 headline-s headline-uppercase">
									Have a project in mind ?<br>
									lets talk...
								</h4>
							</div><!-- column end -->

							<!-- column start -->
							<div class="four-columns padding-top-90">
								<ul class="column-l-r-margin-10 list">
									<li class="list__item">
										<a href="index.html" class="footer-nav-btn js-pointer-small js-animsition-link">Home</a>
									</li>
									<li class="list__item">
										<a href="portfolio_commercial.html" class="footer-nav-btn js-pointer-small js-animsition-link">Portfolio</a>
									</li>
									<li class="list__item">
										<a href="contact.html" class="footer-nav-btn js-pointer-small js-animsition-link">Contact</a>
									</li>
								</ul>
							</div><!-- column end -->
						</div><!-- flex-container end -->

						<!-- flex-container start -->
						<div class="flex-container padding-top-30">
							<!-- column start -->
							<div class="four-columns padding-top-60">
								<div class="column-l-r-margin-10">
									<div class="headline-xxxxs">Email:</div>
									<div class="margin-top-20">
										<a href="#" class="line-btn js-pointer-small">email@Creative Studio_agency.com</a>
										<div class="margin-top-5">
											<a href="#" class="line-btn js-pointer-small">email@Creative Studio_job.com</a>
										</div>
									</div>
								</div>
							</div><!-- column end -->

							<!-- column start -->
							<div class="four-columns padding-top-60">
								<div class="column-l-r-margin-10">
									<div class="headline-xxxxs">Phone:</div>
									<div class="margin-top-20">
										<a href="#" class="subhead-xxs text-color-b0b0b0 text-hover-to-white js-pointer-small">+23 8 8532 7834</a>
										<div class="margin-top-5">
											<a href="#" class="subhead-xxs text-color-b0b0b0 text-hover-to-white js-pointer-small">+23 8 9635 7335</a>
										</div>
									</div>
								</div>
							</div><!-- column end -->

							<!-- column start -->
							<div class="four-columns padding-top-60">
								<div class="column-l-r-margin-10">
									<div class="headline-xxxxs">Address:</div>
									<div class="margin-top-20">
										<a href="#" class="subhead-xxs text-color-b0b0b0 text-hover-to-white js-pointer-small">
											680 E. Colorado Blvd Suite 180 Pasadena,<br>
											 CA 91101
										</a>
									</div>
								</div>
							</div><!-- column end -->

							<!-- column start -->
							<div class="twelve-columns padding-top-90">
								<div class="column-l-r-margin-10 padding-top-30 pos-rel">
									<div class="anim-line-top" data-scroll data-scroll-offset="5%"></div>
									<!-- footer-social start -->
									<ul class="list list_row list_margin-30px">
										<li class="list__item">
											<a href="#" class="flip-btn js-pointer-small" data-splitting>Facebook</a>
										</li>
										<li class="list__item">
											<a href="#" class="flip-btn js-pointer-small" data-splitting>Instagram</a>
										</li>
										<li class="list__item">
											<a href="#" class="flip-btn js-pointer-small" data-splitting>Youtube</a>
										</li>										
										<li class="list__item">
											<a href="#" class="flip-btn js-pointer-small" data-splitting>Twitter</a>
										</li>
									</ul><!-- footer-social end -->
								</div>
							</div><!-- column end -->

							<!-- column start -->
							<div class="twelve-columns padding-top-120">
								<div class="column-l-r-margin-10 pos-rel">
									<p class="copyright margin-right-30">
										&copy;Copyright 2021 CreAtive STUDIO  Collaborative, llc. <a href="#" class="copyright__author js-pointer-small"></a>
									</p>
									<!-- to top btn start -->
									<a href="#up" class="scroll-to-btn js-pointer-large" data-scroll data-scroll-repeat data-scroll-to>
										<span class="scroll-to-btn__arrow"></span>
									</a><!-- to top btn end -->
								</div>
							</div><!-- column end -->
						</div><!-- flex-container end -->
					</div><!-- container end -->
				</footer><!-- footer end -->
			</div><!-- js-animsition-overlay end -->
		</div><!-- scroll-content end -->

		<!-- scripts -->
		<script src="assets/js/plugins.js"></script>
		<script src="assets/js/main.js"></script>
	</body>

<!-- Mirrored from nurseitmukaytegin.com/envato-templates/Creative Studio/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Sep 2021 17:55:09 GMT -->
</html>