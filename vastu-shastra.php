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


        background-color: #fff8f0;

        color: #8B4513;
        /* Deep brown text */
        border: 1px solid #FF9800;
        /* Saffron border */

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

        margin-top: 30px;
        justify-items: center;
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

    .sub-point {
        display: block;
        margin-top: 8px;
        font-size: 14px;
        color: #8b0000;
        font-weight: 500;
        background: #fff3e0;
        padding: 6px 10px;
        border-radius: 8px;
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

    .sub-point {
        font-size: 14px;
        color: #8b0000;
        background: #fff3e0;
        padding: 5px 10px;
        border-radius: 6px;
        margin: 5px 0;
        display: block;
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
                                <h1 class="pbmit-tbar-title">वास्तु शास्त्र</h1>
                            </div>
                        </div>
                        <div class="pbmit-breadcrumb">
                            <div class="pbmit-breadcrumb-inner">
                                <span><a title="" href="index.php" class="home"><span>Home</span></a></span>
                                <span class="sep">-</span>
                                <span><span class="post-root post post-post current-item">वास्तु शास्त्र</span></span>
                            </div>
                        </div>
                    </div>
                </div>

                <?php include 'sachin_guruji_marathi.php'; ?>
            </div>
            <?php include 'inner-form-marathi.php'; ?>
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
                            भ्रूगुरत्रिर्वसिष्ठश्च विश्वकर्मा मयस्तदा । नारदो नग्नजिच्चैव विशालाक्ष: पुरन्दर :।। <br>
                            ब्रह्मा कुमारो नंन्दीश : शौनको गर्ग एव च । वासुदेवो अनिरुद्धश्च तथा शुक्र बृहस्पती :।। <br>
                            अष्टादशैते विख्यता वास्तूशास्रोपदेशका संक्षेपण उपदिष्टम यन्मनवे मत्स्यरूपिणा ।।


                        </p>
                        <div class="shlok-divider"></div>
                        <p class="shlok-meaning">
                            <strong>अर्थ:</strong> भृगू, अत्री, वसिष्ठ, विश्वकर्मा, मय, नारद, नग्नजित, विशालाक्ष, पुरंदर, ब्रह्मा, कुमार, नंदीश्वर, शौनक, गर्ग, वासुदेव, अनिरुद्ध, शुक्राचार्य आणि बृहस्पती — हे वास्तुशास्त्राचे १८ प्रख्यात उपदेशक (प्रवर्तक) मानले जातात. मत्स्य रूप धारण केलेल्या भगवान विष्णूंनी राजा मनूला वास्तुशास्त्राचे जे ज्ञान थोडक्यात सांगितले, त्यात या १८ विद्वानांच्या परंपरेचा उल्लेख केला आहे.
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
                    <h3 class="pbmit-title">वास्तु शास्त्र म्हणजे काय?</h3>
                    <h5>
                        वास्तु शास्त्र हे प्राचीन भारतीय शास्त्र आहे, जे घर, कार्यालय, मंदिर, शाळा, इमारत इत्यादींचे बांधकाम आणि संरचना कशी असावी याविषयी मार्गदर्शन करते. “वास्तु” म्हणजे घर, इमारत किंवा इतर वास्तुची संरचना आणि “शास्त्र” म्हणजे त्या संरचनेला योग्य ठरवण्यासाठी असलेली विद्यान्वित माहिती. <br><br>
                        वास्तु शास्त्राच्या अनुसार, प्रत्येक वास्तुची दिशा, आकार, रंग, रचना आणि इतर घटक त्या वास्तुतील लोकांच्या जीवनावर सकारात्मक किंवा नकारात्मक प्रभाव टाकू शकतात. घरात चांगली ऊर्जा आणण्यासाठी आणि नकारात्मक ऊर्जा टाळण्यासाठी वास्तु शास्त्राचे नियम महत्त्वाचे ठरतात.</h5>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'book-now-marathi.php'; ?>

<section class="ritual-elements-section">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6">
                <div class="ritual-info-group">
                    <h2 class="pbmit-title"><i class="fas fa-fire-alt"></i> वास्तु शास्त्राचे महत्त्व</h2><br>

                    <div class="ritual-intro-text">
                        <h5>वास्तु शास्त्र आपल्याला घरात सकारात्मक ऊर्जा निर्माण करण्यासाठी मार्गदर्शन करते. याचे प्रमुख उद्दिष्ट आहे.</h5>
                    </div><br>
                    <div class="samagri-container">
                        <span class="samagri-box">घरात समृद्धी, आनंद आणि शांततेचा संचार करणे.</span>
                        <span class="samagri-box">नकारात्मक ऊर्जा दूर करणे..</span>
                        <span class="samagri-box"> घरातील लोकांना शारीरिक आणि मानसिक आरोग्य मिळवून देणे.</span>
                        <span class="samagri-box"> घराच्या प्रत्येक क्षेत्राचा अधिक प्रभावी वापर करणे.</span><br>
                    </div><br>

                    <div class="ritual-intro-text">
                        <h5>वास्तु शास्त्राच्या ज्ञानाचा वापर केल्याने घरातील उर्जा सुरळीत व संतुलित राहते, ज्यामुळे व्यक्तीचे जीवन अधिक सुखी व समृद्ध होऊ शकते.</h5>
                    </div>


                </div>
            </div>

            <div class="col-lg-6">
                <div class="ritual-image-frame">
                    <img src="images/images/bhu-urja01.jpg" class="img-fluid rounded-custom shadow-lg" alt="यज्ञाची प्रमुख अंगे">
                    <div class="frame-decoration"></div>
                </div>
            </div>
        </div>
    </div>

</section>


<div class="container">
    <div class="wedding-ritual-section mt-5">
        <h2 class="wedding-section-title text-center mb-5">
            <i class="fas fa-home"></i> वास्तु शास्त्राचे महत्त्वपूर्ण तत्त्वे
        </h2>

        <div class="wedding-steps-grid">

            <!-- Card 1 -->
            <div class="wedding-step-card">
                <div class="wedding-step-icon">
                    <i class="fas fa-compass fa-3x" style="color:#ff6f00;"></i>
                </div>
                <h3>दिशांचे महत्त्व</h3>
                <p>
                    वास्तु शास्त्रात प्रत्येक दिशेचे महत्त्व असते. प्रत्येक दिशा विशिष्ट ग्रह,
                    देवता आणि ऊर्जा घेऊन येते.
                </p>

                <p class="sub-point">पूर्व: सूर्य — उर्जा, स्वास्थ्य, समृद्धी</p>
                <p class="sub-point">पश्चिम: चंद्र — शांतता, आराम</p>
                <p class="sub-point">उत्तर: व्यापारी यश, करिअर, प्रगती</p>
                <p class="sub-point">दक्षिण: शनी — सुरक्षा, बचाव</p>
            </div>

            <!-- Card 3 -->
            <div class="wedding-step-card">
                <div class="wedding-step-icon">
                    <i class="fas fa-palette fa-3x" style="color:#ff6f00;"></i>
                </div>
                <h3>रंगांची निवडकता</h3>
                <p>
                    रंगांचा प्रभाव वास्तु शास्त्रात महत्त्वपूर्ण असतो. प्रत्येक रंगाची
                    विशिष्ट ऊर्जा असते.
                </p>

                <p class="sub-point">पांढरा — शांती, पवित्रता</p>
                <p class="sub-point">केशरी — उर्जा, उत्साह</p>
                <p class="sub-point">लाल — साहस, प्रेम</p>
                <p class="sub-point">पिवळा — आनंद, समृद्धी</p>
            </div>

            <!-- Card 4 -->
            <div class="wedding-step-card">
                <div class="wedding-step-icon">
                    <i class="fas fa-door-open fa-3x" style="color:#ff6f00;"></i>
                </div>
                <h3>मुख्य दरवाजाचे स्थान</h3>
                <p>
                    घराच्या मुख्य दरवाजातून सकारात्मक ऊर्जा प्रवेश करते.
                    तो पूर्व, उत्तर किंवा उत्तर-पूर्व दिशेला असणे शुभ मानले जाते.
                </p>
                <p class="sub-point">
                    दरवाजासमोर कोणताही अडथळा नसावा.
                </p>
            </div>

            <!-- Card 5 -->
            <div class="wedding-step-card">
                <div class="wedding-step-icon">
                    <i class="fas fa-bed fa-3x" style="color:#ff6f00;"></i>
                </div>
                <h3>शयनकक्षाचे स्थान</h3>
                <p>
                    दक्षिण-पश्चिम कोपऱ्यात शयनकक्ष असावा. हे स्थान मानसिक
                    आणि शारीरिक विश्रांतीसाठी आदर्श आहे.
                </p>
                <p class="sub-point">
                    साधेपणाने सजावट करावी, जास्त रंग टाळावेत.
                </p>
            </div>

            <!-- Card 6 -->
            <div class="wedding-step-card">
                <div class="wedding-step-icon">
                    <i class="fas fa-utensils fa-3x" style="color:#ff6f00;"></i>
                </div>
                <h3>स्वयंपाकघराचे स्थान</h3>
                <p>
                    स्वयंपाकघर दक्षिण-पूर्व (Agni कोण) कोपऱ्यात असावे.
                    येथे अग्नी, पाणी आणि वायू यांचे संतुलन आवश्यक आहे.
                </p>
                <p class="sub-point">
                    स्वच्छता आणि वायुवीजन राखणे अत्यंत महत्त्वाचे आहे.
                </p>
            </div>

            <div class="wedding-step-card">
                <div class="wedding-step-icon">
                    <i class="fas fa-couch fa-3x" style="color:#ff6f00;"></i>
                </div>
                <h3>स्मार्ट आणि योग्य फर्निचर वापर</h3>
                <p>
                    वास्तु शास्त्रानुसार, घरात फर्निचरचे स्थान आणि आकारही महत्त्वपूर्ण असतो. त्याचा प्रभाव घरातील प्रत्येक व्यक्तीवर होतो. फर्निचरचे योग्य स्थान घराच्या उर्जेचा प्रवाह सुसंस्कृत करतो.
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
                    <h2 class="pbmit-title"><i class="fas fa-fire-alt"></i>वास्तु दोष आणि त्याचे उपाय</h2><br>

                    <div class="ritual-intro-text">
                        <h5>वास्तु दोष हे घरातील किंवा इमारतीतील संरचनात्मक समस्या आहेत, ज्यामुळे घरात नकारात्मक ऊर्जा संचारते. यामुळे आर्थिक, मानसिक, शारीरिक किंवा भावनिक तणाव होऊ शकतो.</h5>
                    </div><br>

                    <h3>मुख्य दरवाजा किंवा खिडक्या</h3>
                    <div class="element-tag">
                        <span class="tag-decs">मुख्य दरवाज्याच्या दिशेची चूक किंवा खिडक्या योग्य दिशेने न लागल्यामुळे घरातील उर्जा वाया जाते.</span>
                        <span class="tag-title">उपाय: मुख्य दरवाजासमोर झाडे आणि अडथळे टाळावेत. तसेच खिडक्या साफ ठेवाव्यात.</span>
                    </div><br>

                    <h3>नम्रतेची भावना</h3>
                    <div class="element-tag">
                        <span class="tag-decs">घरात चुकलेली दिशा किंवा अनावश्यक वस्तू असणे यामुळे मानसिक शांतीत अडथळे येतात.</span>
                        <span class="tag-title">उपाय: घरात वातावरण स्वच्छ ठेवा आणि निर्बाध उर्जा प्रवाहासाठी वस्तूंच्या वापरात मर्यादा ठेवा.</span>
                    </div><br>

                    <h3>घराची विचित्र रचना</h3>
                    <div class="element-tag">
                        <span class="tag-decs">घराची रचना किंवा बांधकाम खूप विचित्र किंवा चुकीच्या प्रकारे केले असेल तर ती नकारात्मक उर्जेला आमंत्रित करते.</span>
                        <span class="tag-title">उपाय: घराच्या रचनेत योग्य सुधारणा करा. फर्निचर आणि इतर घटक संतुलित ठेवा.</span>
                    </div>

                </div>
            </div>

            <div class="col-lg-6">
                <div class="ritual-image-frame">
                    <img src="images/images/bhumi-puja04.jpg" class="img-fluid rounded-custom shadow-lg" alt="यज्ञाची प्रमुख अंगे">
                    <div class="frame-decoration"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ritual-elements-section">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6">
                <div class="ritual-image-frame">
                    <img src="images/images/bhumi-puja06.jpg" class="img-fluid rounded-custom shadow-lg" alt="यज्ञाची प्रमुख अंगे">
                    <div class="frame-decoration"></div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="ritual-info-group">
                    <h2 class="pbmit-title"><i class="fas fa-fire-alt"></i>वास्तु शास्त्राचे फायदे</h2><br>

                    <div class="ritual-intro-text">
                        <h5>वास्तु शास्त्राच्या नियमांचे पालन केल्याने अनेक फायदे होतात:</h5>
                    </div><br>

                    <h3>सकारात्मक ऊर्जा:</h3>
                    <div class="element-tag">
                        <span class="tag-decs">घरात सकारात्मक ऊर्जा आणि वातावरण निर्माण होते.</span>
                    </div><br>

                    <h3>संपूर्ण शांती:</h3>
                    <div class="element-tag">
                        <span class="tag-decs">मानसिक शांती आणि समृद्धी प्राप्त होऊ शकते.</span>
                    </div><br>

                    <h3>कुटुंबात प्रेम आणि समृद्धी:</h3>
                    <div class="element-tag">
                        <span class="tag-decs">घरातील प्रत्येक सदस्यासाठी आनंदी आणि प्रेमळ वातावरण तयार होते.
                            वास्तु शास्त्राच्या सर्व नियमांचे पालन करण्यावर घरात सकारात्मक उर्जा आणि जीवनशक्तीचा प्रवाह होतो. त्यामुळे जीवनातील अनेक समस्यांचे निराकरण होऊन आपल्या कुटुंबाला समृद्धी, शांती, सुख आणि यश प्राप्त होऊ शकते.</span>

                    </div>

                </div>
            </div>


        </div>
    </div>
</section>

</section>

<?php include 'footer.php'; ?>