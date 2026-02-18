<?php include 'english/header.php'; ?>
<!-- Page Content -->
<div class="page-content demo-five">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

	<section class="hero-static-wrp position-relative">
		<div class="swiper-container main-hero-slider">
			<div class="swiper-wrapper">

				<div class="swiper-slide">
					<div class="hero-slide-bg-clean slide-one">
						<div class="container">
							<div class="row align-items-center min-vh-85">
								<div class="col-12 col-md-8 col-lg-7">
									<div class="hero-content">
										<span class="badge mb-3 custom-badge animate__animated animate__fadeInDown">Ancient Indian knowledge</span>
										<h1 class="hero-title-clean animate__animated animate__fadeInLeft">Sanatana Vedic <br><span class="highlight-text">Traditions and blessings</span></h1>
										<p class="hero-desc-clean animate__animated animate__fadeInLeft animate__delay-1s">Resolve the problems in your life through pure mantra chanting and ancient Vedic rituals. Experience the divine consciousness in your own home.</p>
										<div class="hero-btns-clean animate__animated animate__fadeInUp animate__delay-1s">
											<a href="#book" class="btn-orange">Book a ritual</a>
											<a href="tel:+91XXXXXXXXXX" class="btn-outline-orange ml-md-3">Talk to us</a>
										</div>
									</div>
								</div>
								<div class="col-12 col-md-4 col-lg-5 d-none d-md-block text-center">
									<div class="image-frame-gold animate__animated animate__zoomIn animate__delay-1s">
										<img src="images/homepage-1/hero-img.png" class="img-fluid main-img-clean" alt="Vedic Guru">
										<div class="exp-badge-white">
											<span class="num">15+</span>
											<span class="txt">Years of experience</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="swiper-slide">
					<div class="hero-slide-bg-clean slide-two">
						<div class="container">
							<div class="row align-items-center min-vh-85">
								<div class="col-12 col-md-8 col-lg-7">
									<div class="hero-content">
										<span class="badge mb-3 custom-badge">Astrology and Vastu Consulting</span>
										<h1 class="hero-title-clean">Astrology and Vastu <br><span class="highlight-text">Transform Your Life</span></h1>
										<p class="hero-desc-clean">Resolve planetary and Vastu doshas with scientifically accurate remedies. Find a new path to happiness, prosperity, and progress.</p>
										<div class="hero-btns-clean">
											<a href="contact.php" class="btn-orange">Contact Us</a>
											<a href="#services" class="btn-outline-orange ml-md-3">Our Services</a>
										</div>
									</div>
								</div>
								<div class="col-12 col-md-4 col-lg-5 d-none d-md-block text-center">
									<div class="image-frame-gold">
										<img src="images/homepage-1/hero-img.png" class="img-fluid main-img-clean" alt="Astrology Expert">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			<div class="swiper-pagination custom-hero-dots-gold"></div>
		</div>
	</section>

	<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
	<script>
		var swiper = new Swiper(".main-hero-slider", {
			slidesPerView: 1,
			loop: true,
			effect: "fade",
			fadeEffect: {
				crossFade: true
			},
			speed: 1500,
			autoplay: {
				delay: 6000,
				disableOnInteraction: false,
			},
			pagination: {
				el: ".custom-hero-dots-gold",
				clickable: true,
			},
		});
	</script>

	<!-- About Start -->
	<section class="about-section-premium py-5">
		<div class="container">

			<div class="row mb-5">
				<div class="col-12 text-center">
					<div class="heading-wrapper">

						<h2 class="display-6 fw-bold text-dark">About Us</h2>
						<div class="title-line mx-auto"></div>
					</div>
				</div>
			</div>
			<div class="row align-items-center">

				<div class="col-md-12 col-lg-6 mb-5 mb-lg-0 animate__animated animate__fadeInLeft">
					<div class="about-img-wrapper">
						<img src="images/About images/img02.png" class="img-fluid about-img" alt="सचिन जोशी">
					</div>
				</div>

				<div class="col-md-12 col-lg-6 animate__animated animate__fadeInRight">
					<div class="about-content-box ps-lg-4">

						<div class="about-header mb-4">
							<h4 class="about-subtitle"></h4>
							<h2 class="about-main-title">
								Panchang Vastu – <span class="highlight">Sachin Joshi</span>
							</h2>
							<div class="accent-line"></div>
						</div>
						<p class="intro-para">
							The foundation of human life and the balance of <strong>nature</strong> are based on the five elements. It is very important to have the five elements of fire, earth, air, water and sky in proper balance in life. If there is a deficiency or excess in the five elements, various problems arise in life.
						</p>

						<div class="focus-box">
							<p>
								Our <strong>Panchang Vastu Associates</strong> makes sincere efforts based on ancient texts to balance the Panchatattva. With the help of that classical guidance, we work to make human life more positive, balanced and prosperous.
							</p>
						</div>

						<p class="guruji-note">
							Under the guidance of <strong>Sachin Joshi</strong>, our goal is to strike the right balance between Vastu Shastra and other key elements of life and bring about positive changes in your life. </p>

						<div class="quote-box">
							<p>
“संकल्पात जायते सिद्धी” — यश हे दृढनिश्चयातूनच जन्माला येते. तुमच्या जीवनाच्या प्रत्येक पैलूमध्ये सुसंवाद, शांती आणि यशाच्या मार्गावर योग्य मार्गदर्शन करण्यासाठी आम्ही पूर्णपणे समर्पित आहोत.							</p>
						</div>

						<a href="about.php" class="btn-modern-about">
							Read More <i class="fas fa-arrow-right ms-2"></i>
						</a>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- Service Start -->

	<section class="service-slider-section py-5" id="book" style="background-color: #fdfdfd; font-family: 'Mukta', sans-serif;">
		<div class="container">

			<div class="row align-items-center mb-5">
				<div class="col-lg-5">
					<div class="section-title-area">
						<h4 class="text-uppercase fw-bold mb-2" style="color: #c39b2e; letter-spacing: 1px; font-size: 0.9rem;">Honest and Vedic service</h4>
						<h2 class="display-6 fw-bold text-dark">Our worship services –<span style="color: #c39b2e;">Sachin Joshi</span></h2>
						<div style="width: 50px; height: 3px; background: #c39b2e; margin-top: 10px;"></div>
					</div>
				</div>
				<div class="col-lg-7">
					<p class="text-muted fs-5 mb-0" style="border-left: 3px solid #c39b2e; padding-left: 20px;">
						 Pitru Dosha or Graha Dosha can cause difficulties, delays and mental stress in life. Properly performed pujas like Maha Mrityunjay Japa, Navagraha Shanti, Rudrabhishek bring positive changes, peace and stability in life. </p>
				</div>
			</div>

			<div class="row g-4">

				<div class="col-md-4">
					<div class="premium-service-card">
						<div class="service-img-box">
							<img src="images/images/vastu.jpg" alt="वास्तुशास्त्र" class="w-100">
							<div class="service-overlay"></div>
							<span class="service-tag">Vastu related obstacles</span>
						</div>

						<div class="service-info text-center p-4">
							<h3 class="fw-bold h4 mb-3">|| Vastu Consulting ||</h3>
							<p class="text-muted mb-4" style="font-size: 0.95rem; line-height: 1.6;">The internal and external structure of a building, as well as the vibrations within it, have a major impact on our lives. These vibrations can bring about positive or negative changes in the building.</p>
							<a href="contact.php" class="service-link-btn">Read More <i class="fas fa-arrow-right ms-2"></i></a>

						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="premium-service-card">
						<div class="service-img-box">
							<img src="images/images/ved.jpg" alt="वैदिक शास्त्र" class="w-100">
							<div class="service-overlay"></div>
							<span class="service-tag">For Health and Longevity</span>
						</div>
						<div class="service-info text-center p-4">
							<h3 class="fw-bold h4 mb-3">|| Vedic Science||</h3>
							<p class="text-muted mb-4" style="font-size: 0.95rem; line-height: 1.6;">To achieve the purpose of human birth, proper worship of the holy deity along with daily worship of the Lord or chanting of mantras brings divine blessings.</p>
							<a href="contact.php" class="service-link-btn">Read More <i class="fas fa-arrow-right ms-2"></i></a>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="premium-service-card">
						<div class="service-img-box">
							<img src="images/images/jyoti.jpg" alt="ज्योतिष शास्त्र" class="w-100">
							<div class="service-overlay"></div>
							<span class="service-tag">For Peace and Prosperity</span>
						</div>
						<div class="service-info text-center p-4">
							<h3 class="fw-bold h4 mb-3">|| Astrology ||</h3>
							<p class="text-muted mb-4" style="font-size: 0.95rem; line-height: 1.6;">Birth date and time based horoscope helps in balancing positive and negative conditions in life.</p>
							<a href="contact.php" class="service-link-btn">Read More <i class="fas fa-arrow-right ms-2"></i></a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- Service End -->

	<!-- Testimonial Start -->
	<section class="testimonial-contact-section py-5" style="background-color: #fffaf5; font-family: 'Mukta', sans-serif;">
		<div class="container">
			<div class="row g-5 align-items-center">

				<div class="col-lg-6">
					<div class="testimonial-side pe-lg-4">
						<h4 class="text-orange fw-bold text-uppercase mb-2" style="color: #ff8c00; letter-spacing: 2px;">Testimonials</h4>
						<h2 class="display-6 fw-bold mb-4">Our Trusted <br><span style="color: #ff8c00;">Satisfied Clients</span></h2>

						<div class="swiper testimonial-swiper-mini">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<div class="testimonial-mini-card p-4 bg-white shadow-sm" style="border-radius: 15px; border-left: 5px solid #ff8c00;">
										<div class="star-rating mb-2" style="color: #ffc107; font-size: 0.8rem;">
											<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
										</div>
										<p class="fs-6 italic" style="color: #555;">"The Vastu changes suggested by Sachin Guruji have brought a lot of positivity to our house. The non-destructive solutions were extremely effective."</p>
										<div class="d-flex align-items-center mt-3">
											<img src="images/homepage-1/avatar/img-01.png" class="rounded-circle me-3" width="110" height="100">
											<h3 class="fw-bold mb-0">Amol Sonawane, <span class="fw-normal text-muted">Pune</span></h3>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="testimonial-mini-card p-4 bg-white shadow-sm" style="border-radius: 15px; border-left: 5px solid #ff8c00;">
										<div class="star-rating mb-2" style="color: #ffc107; font-size: 0.8rem;">
											<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
										</div>
										<p class="fs-6 italic" style="color: #555;">"The wedding rituals of my daughter were performed perfectly by Guruji. The importance of mantras and rituals was explained in a very clear and understandable way."</p>
										<div class="d-flex align-items-center mt-3">
											<img src="images/homepage-1/avatar/img-02.png" class="rounded-circle me-3" width="110" height="100">
											<h3 class="fw-bold mb-0">Smt. Ashalata Patil, <span class="fw-normal text-muted">Nashik</span></h3>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-pagination mt-4 position-relative"></div>
						</div>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="contact-form-card p-5 bg-white shadow-lg" style="border-radius: 25px; border-top: 8px solid #ff8c00;">
						<h3 class="fw-bold mb-2">Contact Us For Discussion</h3>
						<p class="text-muted mb-4">Connect with us today to resolve your challenges.</p>

						<form action="contact-process.php" method="POST">
							<div class="row g-3">
								<div class="col-md-6">
									<label class="form-label fw-bold">Name</label>
									<input type="text" name="name" class="form-control custom-input" placeholder="Your Name" required>
								</div>
								<div class="col-md-6">
									<label class="form-label fw-bold">Mobile Number</label>
									<input type="tel" name="phone" class="form-control custom-input" placeholder="91XXXXXXXX" required>
								</div>
								<div class="col-12">
									<label class="form-label fw-bold">Service Type</label>
									<select name="service" class="form-select custom-input">
										<option selected>Select...</option>
										<option>Vastu Consulting</option>
										<option>Jyotish Guidance</option>
										<option>Puja Vidhi</option>
									</select>
								</div>
								<div class="col-12">
									<label class="form-label fw-bold">Message</label>
									<textarea name="message" class="form-control custom-input" rows="3" placeholder="Briefly describe your problem..."></textarea>
								</div>
								<div class="col-12">
									<button type="submit" class="btn btn-orange w-100 py-3 mt-2 fw-bold text-uppercase">Send Message</button>
								</div>
							</div>
						</form>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- Testimonial End -->

</div>
<!-- Page Content End -->

<script>
	var testimonialSwiperMini = new Swiper(".testimonial-swiper-mini", {
		slidesPerView: 1,
		spaceBetween: 20,
		loop: true,
		autoplay: {
			delay: 4500,
		},
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
		},
	});
</script>
<?php include 'english/footer.php'; ?>