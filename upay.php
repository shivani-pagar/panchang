<style>
	.mantra-ribbon-container {
		max-width: 1200px;
		margin: 40px auto;
		padding: 0 20px;
	}

	.mantra-ribbon {
		background: linear-gradient(135deg, #FFF8E1 0%, #FFECB3 100%);
		border-top: 3px solid #FF9800;
		border-bottom: 3px solid #FF9800;
		padding: 30px;
		display: flex;
		align-items: center;
		justify-content: center;
		text-align: center;
		position: relative;
		box-shadow: inset 0 0 20px rgba(139, 69, 19, 0.05), 0 10px 25px rgba(0, 0, 0, 0.05);
		border-radius: 8px;
	}

	/* Decorative Icons */
	.mantra-icon-left,
	.mantra-icon-right {
		font-size: 2.5rem;
		color: #8B4513;
		opacity: 0.15;
		position: absolute;
	}

	.mantra-icon-left {
		left: 40px;
	}

	.mantra-icon-right {
		right: 40px;
	}

	/* Text Styling */
	.sanskrit-shlok {
		font-size: 1.8rem;
		font-weight: 700;
		color: #5D4037;
		margin-bottom: 10px;
		line-height: 1.5;
		font-family: 'Sanskrit Text', 'Nirmala UI', serif;
	}

	.shlok-meaning {
		font-size: 1rem;
		font-style: italic;
		color: #8B4513;
		margin: 0;
		font-weight: 500;
	}

	/* Responsive for Mobile */
	@media (max-width: 768px) {
		.mantra-ribbon {
			padding: 20px;
		}

		.sanskrit-shlok {
			font-size: 1.3rem;
		}

		.mantra-icon-left,
		.mantra-icon-right {
			display: none;
			/* Hide icons on small screens to save space */
		}
	}

	/* Overall Section Styling */
	.puja-details-section {
		padding: 60px 0;
		background-color: #fdfdfd;
	}


	.samagri-container {
		display: flex;
		flex-wrap: wrap;
		/* Allows boxes to wrap to the next line */
		gap: 25px;
		/* Space between boxes */
		margin-top: 15px;
	}

	.vows-container {
		display: flex;
		flex-wrap: wrap;
		gap: 20px;
		/* Increased from 12px to 20px for more breathing room */
		margin-bottom: 30px;
	}

	.samagri-box {
		display: inline-flex;
		align-items: center;
		gap: 10px;
		/* This creates gap between the ICON and the TEXT */
		padding: 12px 20px;

		background-color: #fff8f0;

		color: #8B4513;
		/* Deep brown text */
		border: 1px solid #FF9800;
		/* Saffron border */
		padding: 6px 14px;
		border-radius: 6px;
		font-size: 0.9rem;
		font-weight: 600;
		transition: all 0.3s ease;
		display: inline-block;
		cursor: default;
	}

	.samagri-box:hover {
		background-color: #8B4513;
		color: #ffffff;
		transform: translateY(-2px);
		box-shadow: 0 4px 8px rgba(139, 69, 19, 0.2);
	}

	/* Adjusting the parent text spacing */
	.info-text h4 {
		margin-bottom: 10px;
		color: #333;
		font-weight: 700;
	}

	/* Info Box */
	.service-page-infobox {
		background: #fff;
		padding: 30px;
		border-radius: 15px;
		box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
		margin-bottom: 50px;
	}

	.main-ritual-img {
		border-radius: 12px;
		box-shadow: 10px 10px 0px #8B4513;
		/* Brand color offset */
	}

	.accent-title {
		color: #8B4513;
		font-weight: 800;
		margin-bottom: 20px;
	}

	.section-divider {
		margin: 50px 0;
		border: 0;
		border-top: 1px dashed #ccc;
	}

	/* Ritual Info Groups */
	.ritual-header {
		color: #d32f2f;
		/* More professional red */
		font-weight: 800;
		font-size: 1.8rem;
		margin-bottom: 30px;
		display: flex;
		align-items: center;
		gap: 15px;
	}

	/* Preparation Items */
	.info-item {
		display: flex;
		gap: 15px;
		margin-bottom: 25px;
	}

	.info-icon {
		color: #4CAF50;
		font-size: 1.2rem;
	}

	.info-text h4 {
		font-weight: 700;
		color: #333;
		margin-bottom: 5px;
	}

	/* Process Steps (Numbered) */
	.process-step {
		display: flex;
		gap: 20px;
		margin-bottom: 30px;
		background: #fff;
		padding: 20px;
		border-radius: 10px;
		border-left: 5px solid #8B4513;
		box-shadow: 0 4px 10px rgba(0, 0, 0, 0.03);
	}

	.step-num {
		font-size: 1.5rem;
		font-weight: 900;
		color: #8B4513;
		opacity: 0.3;
	}

	.step-body h4 {
		font-weight: 700;
		color: #333;
	}

	.mantra-text {
		display: block;
		margin-top: 10px;
		font-style: italic;
		color: #8B4513;
		background: #fff8f0;
		padding: 5px 10px;
		border-radius: 5px;
		font-weight: 600;
	}

	.puja-steps-grid {
		display: grid;
		grid-template-columns: repeat(3, 1fr);
		/* 3 cards per row */
		gap: 25px;
		margin-top: 30px;
	}

	.step-card {
		background: #fff;
		border: 1px solid #e0e0e0;
		border-top: 4px solid #8B4513;
		/* Saffron/Brown accent */
		border-radius: 12px;
		padding: 30px;
		text-align: center;
		transition: all 0.3s ease;
		box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
	}

	.step-card:hover {
		transform: translateY(-10px);
		box-shadow: 0 10px 25px rgba(139, 69, 19, 0.15);
		border-top-color: #FF9800;
		/* Glow effect on hover */
	}

	.step-icon {
		font-size: 2.5rem;
		color: #8B4513;
		margin-bottom: 20px;
	}

	.step-card h3 {
		font-size: 1.4rem;
		color: #5D4037;
		margin-bottom: 15px;
		font-weight: 700;
	}

	.step-card p {
		font-size: 0.95rem;
		color: #666;
		line-height: 1.6;
	}

	/* Control the overall width here */
	.compact-section-wrapper {
		max-width: 1200px;
		/* Limits the width so it's not full-screen */
		margin: 60px auto;
		/* Centers the whole section */
		padding: 0 20px;
	}

	.philosophy-card {
		background: #fff;
		border-radius: 20px;
		overflow: hidden;
		box-shadow: 0 15px 50px rgba(0, 0, 0, 0.1);
		border: 1px solid #eee;
	}

	.philosophy-flex {
		display: flex;
		flex-wrap: wrap;
	}

	.phi-img-col {
		flex: 1;
		min-width: 350px;
		max-height: 550px;
	}

	.phi-img-col img {
		width: 100%;
		height: 100%;
		object-fit: cover;
	}

	.phi-content-col {
		flex: 1.2;
		min-width: 350px;
		background: #fff;
	}

	.content-padding {
		padding: 40px;
	}

	.mini-title {
		font-size: 1.5rem;
		color: #8B4513;
		margin-bottom: 15px;
		font-weight: 800;
	}

	.phi-desc {
		color: #666;
		line-height: 1.6;
		margin-bottom: 25px;
	}

	.phi-steps {
		display: flex;
		flex-direction: column;
		gap: 20px;
	}

	.phi-step {
		display: flex;
		gap: 15px;
	}

	.step-bullet {
		color: #FF9800;
		font-size: 1.2rem;
		margin-top: 5px;
	}

	.phi-step h4 {
		font-size: 1.1rem;
		margin: 0;
		color: #333;
	}

	.phi-step p {
		font-size: 0.9rem;
		color: #777;
		margin: 0;
	}

	.ritual-rules-card {
		border-radius: 15px;
		overflow: hidden;
		box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
	}

	.rules-bg {
		background-color: #FFF3E0;
		/* हलका भगवा रंग नियमांसाठी */
		border-right: 1px solid #FFE0B2;
	}

	.meaning-bg {
		background-color: #ffffff;
		/* पांढरा रंग आध्यात्मिक अर्थासाठी */
	}

	/* लिस्ट स्टाईल */
	.ritual-list {
		list-style: none;
		padding: 0;
		margin-top: 20px;
	}

	.ritual-list li {
		font-size: 1.1rem;
		color: #5D4037;
		margin-bottom: 15px;
		display: flex;
		align-items: center;
		gap: 12px;
		font-weight: 600;
	}

	.ritual-list li i {
		color: #FF9800;
		font-size: 0.9rem;
	}

	/* अर्थ स्टाईल */
	.meaning-item {
		margin-bottom: 20px;
		padding-bottom: 15px;
		border-bottom: 1px dashed #eee;
	}

	.meaning-item:last-child {
		border-bottom: none;
	}

	.meaning-item h4 {
		color: #8B4513;
		font-weight: 700;
		margin-bottom: 5px;
	}

	.meaning-item p {
		color: #666;
		font-size: 0.95rem;
		margin: 0;
	}

	.ritual-elements-section {
		padding: 80px 0;
		background-color: #ffffff;
	}

	.accent-title {
		color: #8B4513;
		font-weight: 800;
		font-size: 2.5rem;
		margin-bottom: 20px;
	}

	.accent-title i {
		color: #FF9800;
		margin-right: 15px;
	}

	.ritual-intro-text p {
		font-size: 1.1rem;
		line-height: 1.8;
		color: #555;
		margin-bottom: 35px;
	}

	/* Element Tags Design */
	.vows-container {
		display: flex;
		flex-direction: column;
		gap: 15px;
	}

	.element-tag {
		background: #FFF8F0;
		border-left: 4px solid #8B4513;
		padding: 15px 20px;
		border-radius: 0 10px 10px 0;
		transition: all 0.3s ease;
		display: flex;
		flex-direction: column;
	}

	.element-tag:hover {
		transform: translateX(10px);
		background: #FFF3E0;
		box-shadow: 0 5px 15px rgba(139, 69, 19, 0.1);
	}

	.tag-title {
		font-weight: 800;
		color: #8B4513;
		font-size: 1.1rem;
		margin-bottom: 4px;
	}

	.tag-desc {
		color: #444;
		font-size: 1rem;
		font-weight: 500;
	}

	/* Image Decoration */
	.ritual-image-frame {
		position: relative;
		padding: 20px;
	}

	.rounded-custom {
		border-radius: 30px;
		z-index: 2;
		position: relative;
	}

	.frame-decoration {
		position: absolute;
		top: 0;
		right: 0;
		width: 90%;
		height: 90%;
		border: 10px solid #FF9800;
		border-radius: 30px;
		z-index: 1;
		opacity: 0.15;
	}

	/* मोबाईल रिस्पॉन्सिव्ह */
	@media (max-width: 768px) {
		.rules-bg {
			border-right: none;
			border-bottom: 1px solid #FFE0B2;
		}
	}

	/* Mobile Adjustments */
	@media (max-width: 768px) {
		.phi-img-col {
			min-height: 250px;
		}
	}

	/* Responsive: 2 columns on tablets, 1 on mobile */
	@media (max-width: 992px) {
		.puja-steps-grid {
			grid-template-columns: repeat(2, 1fr);
		}
	}

	@media (max-width: 600px) {
		.puja-steps-grid {
			grid-template-columns: 1fr;
		}
	}
</style>
<?php include 'header.php'; ?>
<!-- Title Bar -->
<div class="pbmit-title-bar-wrapper " style="background-image:url(images/guruji/ser-img/bgser.jpg);">
	<div class="container paddcon">
		<div class="row align-items-center">
			<div class="col-md-7 col-lg-7">
				<div class="pbmit-title-bar-content">
					<div class="pbmit-title-bar-content-inner">
						<div class="pbmit-tbar">
							<div class="pbmit-tbar-inner container">
								<h1 class="pbmit-tbar-title">यज्ञ कर्म</h1>
							</div>
						</div>
						<div class="pbmit-breadcrumb">
							<div class="pbmit-breadcrumb-inner">
								<span><a title="" href="index.php" class="home"><span>Home</span></a></span>
								<span class="sep">-</span>
								<span><span class="post-root post post-post current-item">यज्ञ कर्म</span></span>
							</div>
						</div>
					</div>
				</div>

				<?php include 'sachin_guruji.php'; ?>


			</div>
			<?php include 'inner-form.php'; ?>
		</div>
	</div>
</div>
<!-- Title Bar End-->


<section class="mainsection">
	<div class="container">
		<div class="row align-items-center">
			<!--<div class="col-lg-4 service-left-col order-2 order-lg-1">-->
			<!--	<aside class="service-sidebar">-->
			<!--		<aside class="widget post-list">-->
			<!--			<div class="all-post-list">-->
			<!--				<ul>-->
			<!--					<li><a href="services-details.html">  Panchang VastuPuja </a></li>-->
			<!--					<li class="post-active"><a href="services-details.html"> Rudrabhisek </a></li>-->
			<!--					<li><a href="services-details.html">  Mahamrityunjay  pooja  </a></li>-->
			<!--					<li><a href="services-details.html"> Pitru dosh  </a></li>-->
			<!--					<li><a href="services-details.html"> Navgrah shaanti  </a></li>-->
			<!--				</ul>-->
			<!--			</div>-->
			<!--		</aside>-->
			<!--		<aside class="widget post-list">-->
			<!--			<div class="textwidget">-->
			<!--				<div class="single-service-contact">-->
			<!--					<div class="single-service-contact-inner">-->
			<!--						<span><i class="pbmit-moversco-business-icon-headset"></i></span>-->
			<!--						<h3>For More Details<br> Call Us</h3>-->
			<!--						<ul class="ctc">-->
			<!--							<li>-->
			<!--								<i class="pbmit-base-icon-phone"></i> <a href="tel:+91 9890702222">-->
			<!--								    +91 9890702222-->
			<!--								</a> -->
			<!--							</li>-->

			<!--						</ul>-->
			<!--					</div>-->
			<!--				</div>-->
			<!--			</div>-->
			<!--		</aside>-->
			<!--	</aside>-->
			<!--</div>-->

			<div class="mantra-ribbon-container">
				<div class="mantra-ribbon">
					<div class="mantra-icon-left"><i class="fas fa-om"></i></div>
					<div class="mantra-text-content">
						<p class="sanskrit-shlok">
							गुरुर ब्रह्मा गुरुर विष्णुः गुरूर्देवो महेश्वरः ।
							गुरूर्साक्षात परब्रह्म तस्मै श्री गुरवे नमः ॥
						</p>
						<p class="shlok-meaning">
							<strong>अर्थ:</strong> गुरु हेच ब्रह्मा, विष्णू आणि महेश आहेत. गुरु हेच आपल्या समोर असलेले साक्षात परब्रह्म आहेत. अशा महान गुरूंना मी आदरपूर्वक नमस्कार करतो.
						</p>
					</div>
					<div class="mantra-icon-right"><i class="fas fa-om"></i></div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6  order-1">
				<img src="images/images/upay03.webp" class="w-100" alt="">

			</div>
			<div class="col-md-6 col-lg-6">
				<div class="service-details">
					<h3 class="pbmit-title">वैदिक शास्त्रातील उपाय म्हणजे काय?</h3>

					<div class="ritual-intro-text">
						<p>वैदिक शास्त्रानुसार मानवी जीवनावर ग्रह, नक्षत्रांची स्थिती, पूर्वसंचित कर्मे आणि संस्कारांचा खोलवर परिणाम होत असतो, अशी धारणा आहे.
							जेव्हा ग्रहांचा प्रभाव प्रतिकूल होतो किंवा जीवनात विविध संकटे उद्भवतात, तेव्हा त्या समस्यांच्या निवारणासाठी आणि नकारात्मकता दूर करण्यासाठी विशिष्ट ‘शांती उपाय’ सुचवले गेले आहेत.
							हे उपाय प्रामुख्याने वेदांमधील सामर्थ्यशाली मंत्र, यज्ञ, आणि विधीपूर्वक केल्या जाणाऱ्या पूजेवर आधारित असतात.
							यामध्ये केवळ बाह्य कर्मकांड नसून, दान-धर्म, व्रत-वैकल्ये, उपवास, जप-तप आणि ध्यानासारख्या आध्यात्मिक साधनांचाही समावेश होतो.
							याव्यतिरिक्त, रत्न धारण करणे, पवित्र तीर्थस्नान करणे आणि विशिष्ट देवतांच्या मंत्रांचा जप करून ग्रहांची अनुकूलता मिळवणे, हे देखील वैदिक उपायांचे महत्त्वाचे भाग मानले जातात.
							या सर्व माध्यमांतून व्यक्तीला मानसिक शांती, शारीरिक आरोग्य आणि जीवनातील अडथळ्यांवर मात करण्याचे बळ मिळते.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="py-5"
	style="background-image: url(images/guruji/ser-img/ctcbgg.jpg);
       height: 300px;
       width: 100%;
       background-size: cover;
       background-position: center;">

	<div class="container">
		<div class="row justify-content-end">
			<div class="col-md-6">
				<div>
					<h2>तुमची पूजा आजच बुक करा</h2>
					<p>तुमच्या पवित्र कार्यासाठी सुलभतेने नोंदणी करा आणि ईश्वरी आशीर्वादाचा लाभ घ्या.</p>
					<a href="contact.php" class="pbmit-btnn pbmit-btn-lg">पूजेसाठी नोंदणी करा</a>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="puja-details-section">
	<div class="container">

		<div class="service-page-infobox">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="image-wrapper">
						<img src="images/images/upay02.webp" class="img-fluid main-ritual-img" alt="Vedic Ritual">
					</div>
				</div>
				<div class="col-lg-6">
					<div class="principle-content">
						<h2 class="pbmit-title">वैदिक उपायांचे मुख्य प्रकार</h2>
						<div class="samagri-container">
							<h3>मंत्रोपचार (मंत्रांचा उपाय)</h3><b>विशिष्ट देवतेचे मंत्र जपून किंवा होम करून कार्यसिद्धी किंवा ग्रहशांती केली जाते. <br><br>
								<b>उदा. सूर्य शांतीसाठी</b> – आदित्यहृदय स्तोत्र, गायत्री मंत्र <br><br>
								<b>शनीसाठी </b>– शनी मंत्र, नवग्रह मंत्र, हनुमान चालीसा</b>
						</div><br>
						<h3 class="color-primary">यज्ञाचे उद्दिष्ट</h3>
						<div class="samagri-container">
							<b>ग्रहशांतीसाठी विशिष्ट वस्तूंचे दान सांगितले आहे, <br><br>
								<b>उदा. शनीसाठी काळे वस्त्र, लोखंड, तीळ; मंगळासाठी तांब्याचे भांडे, लाल वस्त्र.<br><br>
									<b>दान हे योग्य</b>
						</div>
					</div>
				</div>
			</div>
		</div>

		<hr class="section-divider">



</section>

<?php include 'footer.php'; ?>