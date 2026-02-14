<?php include 'header.php'; ?>
<!-- Page Content -->
<div class="page-content demo-five">


	<!--<section class="position-relative">-->
	<!--    <div class="swiper-container demo">-->
	<!--        <div class="swiper-wrapper">-->
	<!--            <div class="swiper-slide">-->
	<!--                      <div class="bg-img" style="background-image:url(images/guruji/arti.jpg); background-size:cover;">-->
	<!--                         <div class="container">-->
	<!--                      <div class="row"> -->
	<!--                          <div class="col-12">-->
	<!--                              <div class="banner-con">-->
	<!--                                  <h1>Book Your Personalized Puja Online...</h1>-->
	<!--                                  <p>Experience Divine Blessings from the Comfort of Your Home</p>-->
	<!--                                  <a href="our-team.html" class="pbmit-btnn pbmit-btn-lg">Book Now</a>-->
	<!--                              </div>-->
	<!--                          </div>   -->
	<!--                      </div>-->
	<!--                  </div>-->
	<!--              </div>-->
	<!--            </div>-->
	<!--                 <div class="swiper-slide">-->
	<!--                      <div class="bg-img" style="background-image:url(images/guruji/arti.jpg); background-size:cover;">-->
	<!--                         <div class="container">-->
	<!--                      <div class="row"> -->
	<!--                          <div class="col-12">-->
	<!--                              <div class="banner-con">-->
	<!--                                  <h1> Your Personalized Puja Online...</h1>-->
	<!--                                  <p>Experience Divine Blessings from the Comfort of Your Home</p>-->
	<!--                                  <a href="our-team.html" class="pbmit-btnn pbmit-btn-lg">Book Now</a>-->
	<!--                              </div>-->
	<!--                          </div>   -->
	<!--                      </div>-->
	<!--                  </div>-->
	<!--              </div>-->
	<!--            </div>-->
	<!--        </div>-->
	<!--         <div class="swiper-pagination text-center"></div>-->
	<!--    </div>-->
	<!--</section>-->



	<section class="slider-wrp position-relative" style="font-family: 'Mukta', sans-serif; overflow: hidden;">
		<div class="swiper-container main-hero-slider">
			<div class="swiper-wrapper">

				<div class="swiper-slide">
					<div class="bg-img" style="background: linear-gradient(90deg, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0.2) 100%), url(images/guruji/bg1.jpg); background-size:cover; background-position: center; min-height: 85vh; display: flex; align-items: center;">
						<div class="container">
							<div class="row align-items-center">
								<div class="col-12 col-md-7">
									<div class="banner-conn text-white">
										<h1 style="font-size: clamp(2.5rem, 5vw, 4rem); font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffca28;">सनातन वैदिक परंपरा</h1>
										<p style="font-size: 1.25rem; font-weight: 400; margin-bottom: 35px; opacity: 0.9;">आपल्या घरातूनच दैवी आशीर्वादाचा अनुभव घ्या. प्राचीन विधी आणि शुद्ध मंत्रोच्चार.</p>
										<a href="#book" class="btn" style="background: #ff8c00; color: #fff; padding: 15px 40px; font-weight: 700; border-radius: 50px; text-transform: uppercase; letter-spacing: 1px; box-shadow: 0 4px 15px rgba(255,140,0,0.4);">आरक्षण करा</a>
									</div>
								</div>
								<div class="col-12 col-md-5 d-none d-md-block text-center">
									<img src="images/guruji/mock.png" class="img-fluid" style="max-height: 500px; filter: drop-shadow(0 10px 20px rgba(0,0,0,0.5));">
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="swiper-slide">
					<div class="bg-img" style="background: linear-gradient(90deg, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0.2) 100%), url(images/guruji/bg2.jpg); background-size:cover; background-position: center; min-height: 85vh; display: flex; align-items: center;">
						<div class="container">
							<div class="row align-items-center">
								<div class="col-12 col-md-7">
									<div class="banner-conn text-white">
										<h1 style="font-size: clamp(2.5rem, 5vw, 4rem); font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffca28;">ज्योतिष व वास्तुने जीवन परिवर्तन</h1>
										<p style="font-size: 1.25rem; font-weight: 400; margin-bottom: 35px; opacity: 0.9;">सकारात्मक ऊर्जा, सुख-समृद्धी आणि जीवनातील संतुलनासाठी अचूक मार्गदर्शन.</p>
										<a href="contact.php" class="btn" style="background: #ff8c00; color: #fff; padding: 15px 40px; font-weight: 700; border-radius: 50px; text-transform: uppercase; letter-spacing: 1px;">संपर्क साधा</a>
									</div>
								</div>
								<div class="col-12 col-md-5 d-none d-md-block text-center">
									<img src="images/guruji/mock2.png" class="img-fluid" style="max-height: 500px; filter: drop-shadow(0 10px 20px rgba(0,0,0,0.5));">
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			<div class="swiper-pagination custom-dots"></div>
		</div>
	</section>

	<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
	<script>
		var swiper = new Swiper(".main-hero-slider", {
			slidesPerView: 1,
			spaceBetween: 0,
			loop: true,
			effect: "fade", // Professional fade effect instead of slide
			speed: 1000,
			autoplay: {
				delay: 5000, // 5 seconds per slide
				disableOnInteraction: false,
			},
			pagination: {
				el: ".swiper-pagination",
				clickable: true,
			},
		});
	</script>

	<!-- Icon Box Start -->
	<section class="icon-box-six">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 text-center mb-3">
					<div class="pbmit-heading-subheading-style-1">
						<h4 class="pbmit-subtitle">आमच्या सेवा </h4>
						<h2 class="pbmit-title"><strong>संपूर्ण सेवा मार्गदर्शन</strong></h2>
					</div>
				</div>
				<div class="col-md-4">
					<div class="pbminfotech-ihbox-style-11">
						<div class="pbminfotech-ihbox-inner">
							<div class="pbminfotech-ihbox-icon pbminfotech-large-icon">
								<div class="pbminfotech-ihbox-icon-wrapper">
									<img src="images/guruji/vedic-icon.png" class="img-fluid">
								</div>
							</div>
							<div class="pbminfotech-ihbox-contents">
								<div class="pbminfotech-vc_general pbminfotech-vc_cta3">
									<div class="pbminfotech-vc_cta3_content-container">
										<div class="pbminfotech-vc_cta3-content">
											<div class="pbminfotech-vc_cta3-content-header pbminfotech-wrap">
												<div class="pbminfotech-vc_cta3-headers pbminfotech-wrap-cell">
													<h2 class="pbminfotech-custom-heading">वैदिक शास्त्र</h2>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="pbminfotech-cta3-content-wrapper">यज्ञ, मंत्र व प्राचीन ज्ञानातून जीवनशुद्धी</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="pbminfotech-ihbox-style-11">
						<div class="pbminfotech-ihbox-inner">
							<div class="pbminfotech-ihbox-icon pbminfotech-large-icon">
								<div class="pbminfotech-ihbox-icon-wrapper">
									<img src="images/guruji/astrology-icon.png" class="img-fluid">
								</div>
							</div>
							<div class="pbminfotech-ihbox-contents">
								<div class="pbminfotech-vc_general pbminfotech-vc_cta3">
									<div class="pbminfotech-vc_cta3_content-container">
										<div class="pbminfotech-vc_cta3-content">
											<div class="pbminfotech-vc_cta3-content-header pbminfotech-wrap">
												<div class="pbminfotech-vc_cta3-headers pbminfotech-wrap-cell">
													<h2 class="pbminfotech-custom-heading">ज्योतिष शास्त्र</h2>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="pbminfotech-cta3-content-wrapper">ग्रह-नक्षत्रांद्वारे अचूक भविष्य मार्गदर्शन</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="pbminfotech-ihbox-style-11">
						<div class="pbminfotech-ihbox-inner">
							<div class="pbminfotech-ihbox-icon pbminfotech-large-icon">
								<div class="pbminfotech-ihbox-icon-wrapper">
									<img src="images/guruji/vastu-icon.png" class="img-fluid">
								</div>
							</div>
							<div class="pbminfotech-ihbox-contents">
								<div class="pbminfotech-vc_general pbminfotech-vc_cta3">
									<div class="pbminfotech-vc_cta3_content-container">
										<div class="pbminfotech-vc_cta3-content">
											<div class="pbminfotech-vc_cta3-content-header pbminfotech-wrap">
												<div class="pbminfotech-vc_cta3-headers pbminfotech-wrap-cell">
													<h2 class="pbminfotech-custom-heading">वास्तुशास्त्र</h2>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="pbminfotech-cta3-content-wrapper">सकारात्मक ऊर्जा व समृद्धीसाठी वास्तु उपाय</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Icon Box End -->
	<?php include 'counter.php'; ?>
	<!-- About Start -->
	<section>
		<div class="container">
			<div class="about-five-box">
				<div class="row align-items-center">

					<div class="col-md-12 col-lg-6">
						<div class="pbmit-heading-subheading-style-1">
							<h4 class="pbmit-subtitle">आमच्याबद्दल</h4>
							<h2 class="pbmit-title">
								पञ्चाङ्ग वास्तु – <strong>सचिन जोशी</strong>
							</h2>
						</div>
						<img src="images/guruji/rgab.jpg" class="img-fluid brad" alt="">
					</div>

					<div class="col-md-12 col-lg-6">
						<div class="about-five-content">
							<p>
								मानवी जीवनाचा पाया आणि निसर्गाचा संतुलन हे पंचतत्त्वांवर आधारित आहे.
								अग्नी, पृथ्वी, वायू, जल आणि आकाश ही पंचतत्त्वे जीवनात योग्य प्रमाणात
								संतुलित असणे अत्यंत आवश्यक आहे. पंचतत्त्वांमध्ये कमतरता किंवा अतिरेक
								झाल्यास जीवनात विविध अडचणी निर्माण होतात.
							</p>

							<p>
								आपले <strong>पंचांग वास्तु असोसिएट्स</strong> हे पंचतत्त्व संतुलित
								करण्यासाठी प्राचीन ग्रंथांच्या आधारे प्रामाणिक प्रयत्न करते.
								त्या शास्त्रीय मार्गदर्शनाच्या मदतीने आम्ही मानवी जीवन अधिक
								सकारात्मक, संतुलित आणि समृद्ध बनवण्यासाठी कार्य करतो.
							</p>

							<p>
								<strong>सचिन जोशी</strong> यांच्या मार्गदर्शनाखाली आमचे ध्येय
								वास्तुशास्त्र आणि जीवनातील इतर प्रमुख घटक यांचा योग्य समतोल साधणे
								आणि तुमच्या जीवनात सकारात्मक बदल घडवून आणणे हे आहे.
							</p>

							<p>
								<strong>“संकल्पात जायते सिद्धी”</strong> — यश हे दृढनिश्चयातूनच
								जन्माला येते. तुमच्या जीवनाच्या प्रत्येक पैलूमध्ये सुसंवाद,
								शांती आणि यशाच्या मार्गावर योग्य मार्गदर्शन करण्यासाठी
								आम्ही पूर्णपणे समर्पित आहोत.
							</p>

							<a href="about.php" class="pbmit-btnn pbmit-btn-lg mt-4">
								अधिक वाचा
							</a>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>

	<!-- Service Start -->
<section class="service-slider-four" id="book" style="padding:60px 0; background:#f9f9f9;">
	<div class="container">
		
		<div class="service-four-content" style="margin-bottom:40px;">
			<div class="row align-items-center">
				<div class="col-md-5">
					<div class="pbmit-heading-subheading-style-1">
						<h4 class="pbmit-subtitle">आपल्या जीवनासाठी प्रामाणिक व वैदिक सेवा</h4>
						<h2 class="pbmit-title">आमच्या पूजा सेवा – <strong>सचिन जोशी</strong></h2>
					</div>
				</div>
				<div class="col-md-7">
					<p style="margin:0;">
						कालसर्प दोष, पितृ दोष किंवा ग्रहदोष यामुळे जीवनात अडचणी, विलंब आणि मानसिक ताण येऊ शकतो.
						योग्य पद्धतीने केलेली महा मृत्युंजय जप, नवग्रह शांती, रुद्राभिषेक यांसारखी पूजा
						जीवनात सकारात्मक बदल, शांती आणि स्थैर्य आणते.
					</p>
				</div>
			</div>
		</div>

		<div class="swiper-slider pbmit-element-viewtype-carousel-1"
			data-autoplay="true" data-dots="true"
			data-arrows="false" data-columns="3" data-margin="30">

			<div class="swiper-wrapper">

				<!-- Card 1 -->
				<div class="swiper-slide" style="padding:10px;">
					<article style="background:#fff; border-radius:12px; overflow:hidden; box-shadow:0 5px 20px rgba(0,0,0,0.08); height:100%;">
						<div style="padding:20px;">

							<span style="display:block; margin-bottom:20px;">
								<img src="images/images/vastu.jpg"
									class="img-fluid"
									style="width:100%; border-radius:8px;"
									alt="">
							</span>

							<div>
								<div style="margin-bottom:10px; font-size:14px; color:#c39b2e;">
									वास्तु संबंधित अडथळे
								</div>

								<h3 style="margin-bottom:15px;">
									<a href="contact.php" style="text-decoration:none; color:#222;">
										|| वास्तुशास्त्र ||
									</a>
								</h3>

								<p style="margin-bottom:20px; font-size:14px; line-height:1.7;">
									वास्तूची अंतर्गत आणि बाह्य रचना, तसेच त्यामधील स्पंदने यांचा आपल्या जीवनावर मोठा परिणाम होतो.
									या स्पंदनांमुळे वास्तूमध्ये सकारात्मक किंवा नकारात्मक बदल घडून येतो.
								</p>

								<a href="contact.php"
									style="display:inline-block; padding:8px 18px; background:#c39b2e; color:#fff; border-radius:5px; text-decoration:none;">
									अधिक वाचा
								</a>
							</div>

						</div>
					</article>
				</div>

				<!-- Card 2 -->
				<div class="swiper-slide" style="padding:10px;">
					<article style="background:#fff; border-radius:12px; overflow:hidden; box-shadow:0 5px 20px rgba(0,0,0,0.08); height:100%;">
						<div style="padding:20px;">

							<span style="display:block; margin-bottom:20px;">
								<img src="images/images/ved.jpg"
									class="img-fluid"
									style="width:100%; border-radius:8px;"
									alt="">
							</span>

							<div>
								<div style="margin-bottom:10px; font-size:14px; color:#c39b2e;">
									आरोग्य व दीर्घायुष्यासाठी
								</div>

								<h3 style="margin-bottom:15px;">
									<a href="contact.php" style="text-decoration:none; color:#222;">
										|| वैदिक शास्त्र ||
									</a>
								</h3>

								<p style="margin-bottom:20px; font-size:14px; line-height:1.7;">
									मनुष्य जन्माचा हेतू साध्य करण्यासाठी पवित्र हेतू सोबत नित्य ईश्वराची केलेली उपासना
									किंवा मंत्र जप यामुळे ईश्वरी आशीर्वाद लाभतो.
								</p>

								<a href="contact.php"
									style="display:inline-block; padding:8px 18px; background:#c39b2e; color:#fff; border-radius:5px; text-decoration:none;">
								अधिक वाचा
								</a>
							</div>

						</div>
					</article>
				</div>

				<!-- Card 3 -->
				<div class="swiper-slide" style="padding:10px;">
					<article style="background:#fff; border-radius:12px; overflow:hidden; box-shadow:0 5px 20px rgba(0,0,0,0.08); height:100%;">
						<div style="padding:20px;">

							<span style="display:block; margin-bottom:20px;">
								<img src="images/images/jyoti.jpg"
									class="img-fluid"
									style="width:100%; border-radius:8px;"
									alt="">
							</span>

							<div>
								<div style="margin-bottom:10px; font-size:14px; color:#c39b2e;">
									शांती व यशासाठी
								</div>

								<h3 style="margin-bottom:15px;">
									<a href="contact.php" style="text-decoration:none; color:#222;">
										|| ज्योतिष शास्त्र ||
									</a>
								</h3>

								<p style="margin-bottom:20px; font-size:14px; line-height:1.7;">
									जन्म तारखे नुसार आणि जन्म वेळेनुसार तयार होणारी कुंडली
									जीवनातील सकारात्मक व नकारात्मक परिस्थिती संतुलित करण्यास मदत करते.
								</p>

								<a href="contact.php"
									style="display:inline-block; padding:8px 18px; background:#c39b2e; color:#fff; border-radius:5px; text-decoration:none;">
									अधिक वाचा
								</a>
							</div>

						</div>
					</article>
				</div>

			</div>
		</div>
	</div>
</section>


	<!-- Service End -->



	<!-- Testimonial Start -->
	<section class="testimonial-six">
		<div class="container-fluid">
			<div class="row g-0">
				<div class="col-md-12 col-xl-5">
					<div class="testimonial-six-title">
						<div class="testimonial-arrow swiper-btn-custom d-flex flex-row-reverse">
							<div class="pbmit-heading-subheading-style-1">
								<h4 class="pbmit-subtitle">Testimonial</h4>
								<h2 class="pbmit-title text-dark"><strong>We are trusted 15+ countries worldwide</strong></h2>
							</div>	
						</div>
					</div>
				</div>
				<div class="col-md-12 col-xl-7">
					<div class="testimonial-six-slider">
						<div class="swiper-slider pbmit-element-viewtype-carousel-2 swiper-initialized swiper-horizontal swiper-pointer-events" data-arrows-class="testimonial-arrow" data-loop="true" data-autoplay="true" data-dots="false" data-arrows="true" data-columns="3" data-margin="0" data-effect="slide">
							<div class="swiper-wrapper" id="swiper-wrapper-3a7bcacf97c77126" aria-live="off" style="transform: translate3d(-2496px, 0px, 0px); transition-duration: 1500ms;">
								<!-- Testimonial 1 -->
								<div class="swiper-slide">
									<article class="pbminfotech-testimonialbox-style-6">
										<div class="pbminfotech-post-item">
											<div class="pbminfotech-box-content">
												<div class="pbminfotech-box-star">
													<i class="pbmit-base-icon-star pbmit-active"></i>
													<i class="pbmit-base-icon-star pbmit-active"></i>
													<i class="pbmit-base-icon-star pbmit-active"></i>
													<i class="pbmit-base-icon-star pbmit-active"></i>
													<i class="pbmit-base-icon-star pbmit-active"></i>
												</div>
												<blockquote class="pbminfotech-testimonial-text">
													सचिन गुरुजींचे मी मनापासून आभार मानतो. त्यांनी आमच्या घराच्या वास्तुचा अचूक आढावा घेतला
													आणि आवश्यक बदल सुचवले. काही दिवसांतच घरात सकारात्मक ऊर्जा जाणवू लागली.
												</blockquote>
												<div class="pbminfotech-box-author">
													<img src="images/homepage-6/testimonial/testimonial-01.jpg" class="img-fluid" alt="">
													<h3 class="pbminfotech-author-name">अमोल सोनवणे</h3>
													<span>पुणे</span>
												</div>
											</div>
										</div>
									</article>
								</div>

								<!-- Testimonial 2 -->
								<div class="swiper-slide">
									<article class="pbminfotech-testimonialbox-style-6">
										<div class="pbminfotech-post-item">
											<div class="pbminfotech-box-content">
												<div class="pbminfotech-box-star">
													<i class="pbmit-base-icon-star pbmit-active"></i>
													<i class="pbmit-base-icon-star pbmit-active"></i>
													<i class="pbmit-base-icon-star pbmit-active"></i>
													<i class="pbmit-base-icon-star pbmit-active"></i>
													<i class="pbmit-base-icon-star pbmit-active"></i>
												</div>
												<blockquote class="pbminfotech-testimonial-text">
													आमच्या कन्या व जावई यांच्या साखरपुडा, हळदी व विवाहाचे सर्व विधी
													सचिन गुरुजी व त्यांच्या टीमने अत्यंत विधीवत पार पाडले.
													मंत्रोच्चार व विधी सजावट अतिशय सुंदर होती.
												</blockquote>
												<div class="pbminfotech-box-author">
													<img src="images/homepage-6/testimonial/testimonial-02.jpg" class="img-fluid" alt="">
													<h3 class="pbminfotech-author-name">
														प्रा. के. डी. चौधरी पाटील<br>
														सौ. आशालता चौधरी पाटील
													</h3>
													<span>नाशिक</span>
												</div>
											</div>
										</div>
									</article>
								</div>

								<!-- Testimonial 3 -->
								<div class="swiper-slide">
									<article class="pbminfotech-testimonialbox-style-6">
										<div class="pbminfotech-post-item">
											<div class="pbminfotech-box-content">
												<div class="pbminfotech-box-star">
													<i class="pbmit-base-icon-star pbmit-active"></i>
													<i class="pbmit-base-icon-star pbmit-active"></i>
													<i class="pbmit-base-icon-star pbmit-active"></i>
													<i class="pbmit-base-icon-star pbmit-active"></i>
													<i class="pbmit-base-icon-star pbmit-active"></i>
												</div>
												<blockquote class="pbminfotech-testimonial-text">
													वास्तु मार्गदर्शनासाठी आम्ही सचिन गुरुजींना भेटलो.
													लहान बदलांमुळे घरातील वातावरण अधिक शांत व सकारात्मक झाले.
													आम्हाला पूर्ण समाधान मिळाले.
												</blockquote>
												<div class="pbminfotech-box-author">
													<img src="images/homepage-6/testimonial/testimonial-03.jpg" class="img-fluid" alt="">
													<h3 class="pbminfotech-author-name">सौरभ देशमुख</h3>
													<span>मुंबई</span>
												</div>
											</div>
										</div>
									</article>
								</div>

							</div>
							<span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Testimonial End -->

</div>
<!-- Page Content End -->

<?php include 'footer.php'; ?>