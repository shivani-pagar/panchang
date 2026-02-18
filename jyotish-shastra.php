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
        gap: 10px;
        /* Space between boxes */

    }

    .vows-container {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        /* Increased from 12px to 20px for more breathing room */
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

    /* Wedding Grid */
    .wedding-steps-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 25px;
        justify-content: center;
        margin-top: 30px;
    }

    /* Wedding Card */
    .wedding-step-card {
        background: #fff;
        border: 1px solid #e0e0e0;
        border-top: 4px solid #8B4513;
        border-radius: 12px;
        padding: 30px;
        text-align: center;
        justify-content: center;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
    }

    .wedding-step-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 25px rgba(139, 69, 19, 0.15);
        border-top-color: #FF9800;
    }

    .wedding-card-img {
        width: 100px;
        height: 100px;
        object-fit: cover;
        border-radius: 12px;
        margin-bottom: 15px;
        transition: 0.3s ease;
    }

    .wedding-step-card:hover .wedding-card-img {
        transform: scale(1.08);
    }


    /* Wedding Icon */
    .wedding-step-icon {
        font-size: 2.5rem;
        color: #8B4513;
        margin-bottom: 20px;
    }

    .wedding-step-card h3 {
        font-size: 1.4rem;
        color: #5D4037;
        margin-bottom: 15px;
        font-weight: 700;
    }

    .wedding-step-card p {
        font-size: 0.95rem;
        color: #666;
        line-height: 1.6;
    }

    /* Responsive */
    @media (max-width: 992px) {
        .wedding-steps-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 600px) {
        .wedding-steps-grid {
            grid-template-columns: 1fr;
        }
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
                                <h1 class="pbmit-tbar-title">ज्योतिष शास्त्र</h1>
                            </div>
                        </div>
                        <div class="pbmit-breadcrumb">
                            <div class="pbmit-breadcrumb-inner">
                                <span><a title="" href="index.php" class="home"><span>Home</span></a></span>
                                <span class="sep">-</span>
                                <span><span class="post-root post post-post current-item">ज्योतिष शास्त्र</span></span>
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
                <div class="mantra-ribbon astrology-theme">
                    <div class="mantra-icon-left"><i class="fas fa-star-and-crescent"></i></div>
                    <div class="mantra-text-content">

                        <p class="sanskrit-shlok">
                            यथा शिखा मयूराणां नागानां मणयो यथा ।
                            तद्वद् वेदाङ्गशास्त्राणां ज्योतिषं मूर्धनि स्थितम् ॥
                        </p>
                        <div class="shlok-divider"></div>
                        <p class="shlok-meaning">
                            <strong>अर्थ:</strong> ज्योतिष शास्त्र हे सर्व शास्त्रांमध्ये शिरोमणी आहे. हे शास्त्र मानवाला काळाची ओळख करून देऊन जीवनातील अडथळे दूर करण्यास मदत करते.
                        </p>
                    </div>
                    <div class="mantra-icon-right"><i class="fas fa-om"></i></div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6  order-1">
                <img src="images/images/jyotish-shastra01.webp" class="w-100" alt="">

            </div>
            <div class="col-md-6 col-lg-6">
                <div class="service-details">
                    <h3 class="pbmit-title">ज्योतिष शास्त्र म्हणजे काय?</h3>
                    <h5>
                        ज्योतिष शास्त्र हा एक प्राचीन भारतीय विद्या आहे ज्यात ग्रह, नक्षत्र, राशी यांचा अभ्यास करून व्यक्तीचे भविष्य, स्वभाव, आरोग्य, आर्थिक स्थिती, विवाह, संतती, नोकरी, व्यवसाय इत्यादी बाबींचा अंदाज घेतला जातो. <br><br>
                        हा वेदाचा सहा उपवेदांपैकी एक आहे (अर्थात वेदाङ्ग). याला नेत्र (डोळे) असेही म्हटले जाते कारण हे भविष्याचा वेध घेते..</h5>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'book-now-marathi.php'; ?>

<div class="container">
    <div class="wedding-ritual-section mt-5">
        <h2 class="wedding-section-title text-center mb-5">
            <i class="fas fa-fire"></i> वैदिक शास्त्राचे मुख्य तत्त्व
        </h2>

        <div class="wedding-steps-grid">

            <div class="wedding-step-card">
                <div class="wedding-step-icon"><i class="fas fa-bullseye"></i></div>
                <h3> सिद्धांत ज्योतिष (Theoretical Astrology):</h3>
                <p>ग्रहांची गती, राशींची गणिते, नक्षत्रांचा अभ्यास, पंचांग तयार करणे — हा गणिताचा भाग.</p>
            </div>

            <div class="wedding-step-card">
                <div class="wedding-step-icon"><i class="fas fa-igniting"></i></div>
                <h3>संहिता ज्योतिष (Mundane Astrology):</h3>
                <p>देश, प्रांत, जगावर परिणाम करणारे अंदाज — उदा. युद्ध, भूकंप, पावसाळा, दुष्काळ इत्यादी.</p>
            </div>

            <div class="wedding-step-card">
                <div class="wedding-step-icon"><i class="fas fa-vihara"></i></div>
                <h3>होराशास्त्र (Predictive Astrology):</h3>
                <p>व्यक्तीच्या पत्रिकेवरून त्याचे भविष्य पाहणे, होरा, प्रश्नशास्त्र, मुहूर्त, विवाह, कुंडली इत्यादी.</p>
            </div>

        </div>
    </div>
</div>
<section class="puja-details-section">
    <div class="container">
        <div class="wedding-ritual-section mt-5">
            <h2 class="wedding-section-title text-center mb-5">
                <i class="fas fa-star"></i> ज्योतिष शास्त्राचे मुख्य घटक
            </h2>

            <div class="wedding-steps-grid">

                <!-- Card 1 -->
                <div class="wedding-step-card">
                    <div class="wedding-step-icon">
                        <img src="images/images/jyotish-shastra02.png" alt="राशी" class="wedding-card-img">
                    </div>
                    <h3>राशी</h3>
                    <p>
                        १२ राशी (मेष, वृषभ, मिथुन, कर्क, सिंह, कन्या, तुला, वृश्चिक,
                        धनु, मकर, कुंभ, मीन) या व्यक्तीच्या स्वभाव व जीवनावर प्रभाव टाकतात.
                    </p>
                </div>

                <!-- Card 2 -->
                <div class="wedding-step-card">
                    <div class="wedding-step-icon">
                        <img src="images/images/jyotish-shastra03.jpg" alt="ग्रह" class="wedding-card-img">
                    </div>
                    <h3>ग्रह</h3>
                    <p>
                        ९ ग्रह (सूर्य, चंद्र, मंगळ, बुध, गुरु, शुक्र, शनी, राहू, केतु)
                        हे जीवनातील विविध क्षेत्रांवर प्रभाव टाकतात.
                    </p>
                </div>

                <!-- Card 3 -->
                <div class="wedding-step-card">
                    <div class="wedding-step-icon">
                        <img src="images/images/jyotish-shastra04.webp" alt="नक्षत्र" class="wedding-card-img">
                    </div>
                    <h3>नक्षत्र</h3>
                    <p>
                        २७ किंवा २८ नक्षत्र व्यक्तीच्या स्वभाव, विचारसरणी
                        आणि भविष्यावर महत्त्वाचा प्रभाव टाकतात.
                    </p>
                </div>

                <!-- Card 4 -->
                <div class="wedding-step-card">
                    <div class="wedding-step-icon">
                        <img src="images/images/jyotish-shastra05.jpg" alt="भाव" class="wedding-card-img">
                    </div>
                    <h3>भाव (घर)</h3>
                    <p>
                        पत्रिकेतील १२ भाव जीवनातील वेगवेगळ्या क्षेत्रांना
                        दर्शवतात जसे की धन, विवाह, करिअर, आरोग्य इत्यादी.
                    </p>
                </div>

                <!-- Card 5 -->
                <div class="wedding-step-card">
                    <div class="wedding-step-icon">
                        <img src="images/images/jyotish-shastra06.jpg" alt="दशा" class="wedding-card-img">
                    </div>
                    <h3>दशा / अंतरदशा</h3>
                    <p>
                        वेळेनुसार येणारी ग्रहांची दशा व्यक्तीच्या जीवनातील
                        घटना आणि परिस्थिती निश्चित करते.
                    </p>
                </div>

                <!-- Card 6 -->
                <div class="wedding-step-card">
                    <div class="wedding-step-icon">
                        <img src="images/images/jyotish-shastra07.jpeg" alt="योग" class="wedding-card-img">
                    </div>
                    <h3>योग</h3>
                    <p>
                        ग्रहांच्या विशिष्ट संयोगामुळे तयार होणारे योग
                        जीवनात विशेष शुभ किंवा अशुभ परिणाम घडवतात.
                    </p>
                </div>

            </div>
        </div>
    </div>


    <hr class="section-divider">

    <section class="ritual-elements-section">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6">
                    <div class="ritual-info-group">
                        <h2 class="pbmit-title"><i class="fas fa-fire-alt"></i> कुंडली म्हणजे काय?</h2><br>

                        <div class="ritual-intro-text">
                            <h5>जन्माच्या वेळी आकाशातील ग्रहांची स्थिती एका विशिष्ट आकृतीत मांडलेली असते, त्याला जन्मकुंडली (horoscope) म्हणतात. यावरून व्यक्तीचा स्वभाव, आयुष्याची दिशा, विवाहयोग, आर्थिक स्थिती, आरोग्य, संतानसुख, इ. गोष्टींचा अभ्यास केला जातो.</h5>
                        </div><br>

                        <h3>ज्योतिषाचे महत्त्व</h3>
                        <div class="samagri-container">
                            <span class="samagri-box">विवाह जुळवणी (कुण्डली मिलान) </span>
                            <span class="samagri-box"> आरोग्य व आर्थिक संकटांचे उपाय.</span>
                            <span class="samagri-box"> मुहूर्त ठरवणे (लग्न, वास्तु, प्रवास, व्यवसाय सुरू करणे)</span>
                            <span class="samagri-box"> शांती उपाय (ग्रहशांती, नवग्रह पूजन, रत्न धारण)</span><br>
                        </div><br>

                        <h3>प्रमुख ग्रंथ</h3>
                        <div class="samagri-container">
                             <span class="samagri-box">बृहज्जातक (वराहमिहिर) </span>
                            <span class="samagri-box">फलदीपिका </span>
                            <span class="samagri-box">पाराशर होरा शास्त्र</span><br>
                            <span class="samagri-box"> सारावली</span>
                            <span class="samagri-box"> भृगु संहिता</span><br>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="ritual-image-frame">
                        <img src="images/images/jyotish-shastra08.jpg" class="img-fluid rounded-custom shadow-lg" alt="यज्ञाची प्रमुख अंगे">
                        <div class="frame-decoration"></div>
                    </div>
                </div>


                
            </div>
            <div class="phi-content-col meaning-bg">
                    <div class="content-padding">
                        <h2 class="mini-title"><i class="fas fa-lightbulb"></i> ज्योतिषावर टीका व शास्त्रीय दृष्टीकोन</h2>
                        <div class="meaning-item d-flex justify-content-center">

                            <p>अनेक शास्त्रज्ञ ज्योतिषाला अंधश्रद्धा मानतात कारण त्याचे वैज्ञानिक आधार कमी आहेत. मात्र, भारतीय समाजात याचे सांस्कृतिक महत्त्व प्रचंड आहे, विशेषतः लग्न, मुहूर्त व नक्षत्र विचारा</p>
                        </div>

                    </div>
                </div>
        </div>
        
    </section>

    

</section>

<?php include 'footer.php'; ?>