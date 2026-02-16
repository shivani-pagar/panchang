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
										<img src="images/homepage-1/bg03.png" class="img-fluid main-img-clean" alt="Vedic Guru">
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
										<img src="images/homepage-1/bg03.png" class="img-fluid main-img-clean" alt="Astrology Expert">
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


	<!-- <section class="services-icon-section py-5" style="background-color: #ffffff; font-family: 'Mukta', sans-serif;">
		<div class="container">
			<div class="row mb-5">
				<div class="col-12 text-center">
					<div class="heading-wrapper">
						<h4 class="text-orange fw-bold text-uppercase" style="letter-spacing: 2px; color: #ff8c00;">आमच्या सेवा</h4>
						<h2 class="display-6 fw-bold text-dark">संपूर्ण सेवा मार्गदर्शन</h2>
						<div class="title-line mx-auto"></div>
					</div>
				</div>
			</div>

			<div class="row g-4">
				<div class="col-md-4">
					<div class="service-icon-card text-center p-4">
						<div class="icon-circle mb-4">
							<img src="images/homepage-1/section03.jpg" class="img-fluid" alt="वैदिक शास्त्र">
						</div>
						<div class="service-card-body">
							<h3 class="h4 fw-bold mb-3">वैदिक शास्त्र</h3>
							<p class="text-muted mb-0">यज्ञ, मंत्र व प्राचीन ज्ञानातून जीवनशुद्धी</p>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="service-icon-card text-center p-4">
						<div class="icon-circle mb-4">
							<img src="images/homepage-1/section02.jpg" class="img-fluid" alt="ज्योतिष शास्त्र">
						</div>
						<div class="service-card-body">
							<h3 class="h4 fw-bold mb-3">ज्योतिष शास्त्र</h3>
							<p class="text-muted mb-0">ग्रह-नक्षत्रांद्वारे अचूक भविष्य मार्गदर्शन</p>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="service-icon-card text-center p-4">
						<div class="icon-circle mb-4">
							<img src="images/homepage-1/section01.png" class="img-fluid" alt="वास्तुशास्त्र">
						</div>
						<div class="service-card-body">
							<h3 class="h4 fw-bold mb-3">वास्तुशास्त्र</h3>
							<p class="text-muted mb-0">सकारात्मक ऊर्जा व समृद्धीसाठी वास्तु उपाय</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<br><br> -->


	<!-- Icon Box End -->

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
						<img src="\images\About images/img02.png" class="img-fluid about-img" alt="सचिन जोशी">
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
								“Sankalpāt jayate siddhi” — Success is born from determination. We are fully dedicated to guiding you on the path to harmony, peace and success in every aspect of your life.
							</p>
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
						Kaal Sarp Dosha, Pitru Dosha or Graha Dosha can cause difficulties, delays and mental stress in life. Properly performed pujas like Maha Mrityunjay Japa, Navagraha Shanti, Rudrabhishek bring positive changes, peace and stability in life. </p>
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
							<p class="text-muted mb-4" style="font-size: 0.95rem; line-height: 1.6;">वास्तूची अंतर्गत आणि बाह्य रचना, तसेच त्यामधील स्पंदने यांचा आपल्या जीवनावर मोठा परिणाम होतो. या स्पंदनांमुळे वास्तूमध्ये सकारात्मक किंवा नकारात्मक बदल घडून येतो.</p>
							<a href="contact.php" class="service-link-btn">अधिक वाचा <i class="fas fa-arrow-right ms-2"></i></a>

						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="premium-service-card">
						<div class="service-img-box">
							<img src="images/images/ved.jpg" alt="वैदिक शास्त्र" class="w-100">
							<div class="service-overlay"></div>
							<span class="service-tag">आरोग्य व दीर्घायुष्यासाठी</span>
						</div>
						<div class="service-info text-center p-4">
							<h3 class="fw-bold h4 mb-3">|| Vedic Science||</h3>
							<p class="text-muted mb-4" style="font-size: 0.95rem; line-height: 1.6;">मनुष्य जन्माचा हेतू साध्य करण्यासाठी पवित्र हेतू सोबत नित्य ईश्वराची केलेली उपासना किंवा मंत्र जप यामुळे ईश्वरी आशीर्वाद लाभतो.</p>
							<a href="contact.php" class="service-link-btn">अधिक वाचा <i class="fas fa-arrow-right ms-2"></i></a>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="premium-service-card">
						<div class="service-img-box">
							<img src="images/images/jyoti.jpg" alt="ज्योतिष शास्त्र" class="w-100">
							<div class="service-overlay"></div>
							<span class="service-tag">शांती व यशासाठी</span>
						</div>
						<div class="service-info text-center p-4">
							<h3 class="fw-bold h4 mb-3">|| ज्योतिष शास्त्र ||</h3>
							<p class="text-muted mb-4" style="font-size: 0.95rem; line-height: 1.6;">जन्म तारखे नुसार आणि जन्म वेळेनुसार तयार होणारी कुंडली जीवनातील सकारात्मक व नकारात्मक परिस्थिती संतुलित करण्यास मदत करते.</p>
							<a href="contact.php" class="service-link-btn">अधिक वाचा <i class="fas fa-arrow-right ms-2"></i></a>
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
						<h4 class="text-orange fw-bold text-uppercase mb-2" style="color: #ff8c00; letter-spacing: 2px;">अभिप्राय</h4>
						<h2 class="display-6 fw-bold mb-4">आमच्यावर विश्वास ठेवणारे <br><span style="color: #ff8c00;">समाधानी ग्राहक</span></h2>

						<div class="swiper testimonial-swiper-mini">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<div class="testimonial-mini-card p-4 bg-white shadow-sm" style="border-radius: 15px; border-left: 5px solid #ff8c00;">
										<div class="star-rating mb-2" style="color: #ffc107; font-size: 0.8rem;">
											<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
										</div>
										<p class="fs-6 italic" style="color: #555;">"सचिन गुरुजींनी सुचवलेल्या वास्तु बदलांमुळे आमच्या घरात खूप सकारात्मकता आली आहे. विना तोडफोड केलेले उपाय अत्यंत प्रभावी ठरले."</p>
										<div class="d-flex align-items-center mt-3">
											<img src="images/homepage-1/avatar/img-01.png" class="rounded-circle me-3" width="110" height="100">
											<h3 class="fw-bold mb-0">अमोल सोनवणे, <span class="fw-normal text-muted">पुणे</span></h3>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="testimonial-mini-card p-4 bg-white shadow-sm" style="border-radius: 15px; border-left: 5px solid #ff8c00;">
										<div class="star-rating mb-2" style="color: #ffc107; font-size: 0.8rem;">
											<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
										</div>
										<p class="fs-6 italic" style="color: #555;">"मुलीच्या लग्नाचे सर्व विधी गुरुजींनी अत्यंत शास्त्रोक्त पद्धतीने पार पाडले. मंत्रोच्चार आणि विधींचे महत्त्व त्यांनी खूप छान समजावून सांगितले."</p>
										<div class="d-flex align-items-center mt-3">
											<img src="images/homepage-1/avatar/img-02.png" class="rounded-circle me-3" width="110" height="100">
											<h3 class="fw-bold mb-0">सौ. आशालता पाटील, <span class="fw-normal text-muted">नाशिक</span></h3>
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
						<h3 class="fw-bold mb-2">चर्चा करण्यासाठी संपर्क साधा</h3>
						<p class="text-muted mb-4">तुमच्या अडचणी सोडवण्यासाठी आजच आमच्याशी संपर्क साधा.</p>

						<form action="contact-process.php" method="POST">
							<div class="row g-3">
								<div class="col-md-6">
									<label class="form-label fw-bold">नाव</label>
									<input type="text" name="name" class="form-control custom-input" placeholder="तुमचे नाव" required>
								</div>
								<div class="col-md-6">
									<label class="form-label fw-bold">मोबाईल नंबर</label>
									<input type="tel" name="phone" class="form-control custom-input" placeholder="९१XXXXXXXX" required>
								</div>
								<div class="col-12">
									<label class="form-label fw-bold">सेवेचा प्रकार</label>
									<select name="service" class="form-select custom-input">
										<option selected>निवडा...</option>
										<option>वास्तु कन्सल्टिंग</option>
										<option>ज्योतिष मार्गदर्शन</option>
										<option>पूजा विधी</option>
									</select>
								</div>
								<div class="col-12">
									<label class="form-label fw-bold">संदेश</label>
									<textarea name="message" class="form-control custom-input" rows="3" placeholder="तुमची समस्या थोडक्यात लिहा..."></textarea>
								</div>
								<div class="col-12">
									<button type="submit" class="btn btn-orange w-100 py-3 mt-2 fw-bold text-uppercase">माहिती पाठवा</button>
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