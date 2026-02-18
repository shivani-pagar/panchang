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
                                <h1 class="pbmit-tbar-title">वास्तु ऑरा स्कॅनर</h1>
                            </div>
                        </div>
                        <div class="pbmit-breadcrumb">
                            <div class="pbmit-breadcrumb-inner">
                                <span><a title="" href="index.php" class="home"><span>Home</span></a></span>
                                <span class="sep">-</span>
                                <span><span class="post-root post post-post current-item">वास्तु ऑरा स्कॅनर</span></span>
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
                <div class="mantra-ribbon">
                    <div class="mantra-icon-left"><i class="fas fa-om"></i></div>
                    <div class="mantra-text-content">
                        <p class="sanskrit-shlok">
                            अमीवहा वास्तोष्पते विश्वा रूपाण्याविशन । सखा सुशेव एधि न: ॥
                        </p>
                        <p class="shlok-meaning">
                            <strong>अर्थ:</strong> हे वास्तू देवते, तुम्ही सर्व रोगांचा आणि व्याधींचा नाश करणारे आहात. तुम्ही विश्वातील सर्व रूपांमध्ये व्यापून राहिलेले आहात. तुम्ही आमचे कल्याणकारी मित्र बना आणि आम्हास सदैव सुख व आनंद प्रदान करा.
                        </p>
                    </div>
                    <div class="mantra-icon-right"><i class="fas fa-om"></i></div>
                </div>
            </div>

            <div class="container">
                <div class="service-page-infobox">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="principle-content">
                                <h2 class="pbmit-title">वास्तु ऑरा स्कॅनर म्हणजे काय?</h2>
                                <div class="samagri-container">
                                    <b>वास्तु ऑरा स्कॅनर हा एक अत्याधुनिक तंत्रज्ञान आधारित साधन आहे, ज्याचा उपयोग घर, कार्यालय, किंवा इतर कोणत्याही जागेतील उर्जा प्रवाह आणि वातावरणाचे विश्लेषण करण्यासाठी केला जातो. याचा मुख्य उद्देश त्या जागेच्या वातावरणातील सकारात्मक आणि नकारात्मक उर्जा तपासणे आहे. वास्तु शास्त्रानुसार, प्रत्येक जागेची एक ऑरा असते, जी त्या जागेतील उर्जेच्या प्रवाहाला प्रतिबिंबित करते. <br>
                                        वास्तु ऑरा स्कॅनर ह्या उर्जा प्रवाहाचे मोजमाप करते आणि त्या जागेची उर्जा सकारात्मक आहे की नकारात्मक, याचा अभ्यास करतो.</b>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="image-wrapper">
                                <img src="images/images/aura-scanner02.jpg" class="img-fluid main-ritual-img" alt="Vedic Ritual">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'book-now-marathi.php'; ?>

<section class="puja-details-section">
    <div class="container">

        <div class="service-page-infobox">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="image-wrapper">
                        <img src="images/images/aura-scanner04.png" class="img-fluid main-ritual-img" alt="Vedic Ritual">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="principle-content">
                        <h2 class="pbmit-title">वास्तु ऑरा स्कॅनर कसा कार्य करतो?</h2>
                        <div class="samagri-container">
                            <b>वास्तु ऑरा स्कॅनर कार्य करण्याच्या बाबतीत अत्याधुनिक तंत्रज्ञानाचा वापर करतो. हा साधन वीजेच्या किंवा ध्रुवीय उर्जेच्या प्रमाणात बदल ओळखून त्या जागेच्या ऑरा (ऊर्जा क्षेत्र) चे विश्लेषण करते. यामध्ये खालील गोष्टींचा अभ्यास केला जातो:</b>
                        </div><br>

                        <div class="samagri-container">
                            <span class="samagri-box"> <b>ऊर्जा क्षेत्र (Energy Field):</b> सृष्टीचे संतुलन राखणे</span>
                            <span class="samagri-box"> <b>नकारात्मक उर्जा (Negative Energy):</b>यामध्ये त्या जागेतील नकारात्मक उर्जा (उदाहरणार्थ, वाईट भावना, दोषपूर्ण वास्तु इ.) ओळखली जाते.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr class="section-divider">

        <div class="content-section mt-5">
            <h2 class="section-title text-center mb-5"><i class="fas fa-fire"></i> यज्ञ विधीची प्रक्रिया आणि क्रम (Yagna Process)</h2>
            <div class="puja-steps-grid">

                <div class="step-card">
                    <div class="step-icon"><i class="fas fa-bullseye"></i></div>
                    <h3>सकारात्मक उर्जा <br> (Positive Energy):</h3>
                    <p>इतर उर्जांचे (जसे की चांगली मानसिकता, समृद्धी, शांती) मोजमाप केले जाते, जे त्या जागेच्या ऑरासारखे सकारात्मक वातावरण तयार करतात.</p>
                </div>

                <div class="step-card">
                    <div class="step-icon"><i class="fas fa-igniting"></i></div>
                    <h3>उर्जा संतुलन <br> (Energy Balance):</h3>
                    <p>एक महत्त्वाचा घटक म्हणजे, सकारात्मक आणि नकारात्मक उर्जेचा संतुलन. वास्तु ऑरा स्कॅनर त्याच्या मापदंडांच्या आधारे त्या उर्जेचे संतुलन तपासतो आणि ते योग्य आहे का, हे पाहतो.</p>
                </div>

                <div class="step-card">
                    <div class="step-icon"><i class="fas fa-vihara"></i></div>
                    <h3>केंद्र <br>(Centers of Energy):</h3>
                    <p>त्या जागेतील उर्जेचे केंद्र ओळखले जातात. योग्य केंद्रांसाठी सकारात्मक उर्जा अधिक असेल, ज्यामुळे त्या जागेत चांगली सकारात्मक वातावरण तयार होईल.</p>
                </div>

            </div>
        </div>

        <section class="ritual-elements-section">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-6">
                        <div class="ritual-info-group">
                            <h2 class="pbmit-title"><i class="fas fa-fire-alt"></i>ऑरा स्कॅनरच्या फायदेशीर उपयोगिता</h2>

                            <div class="ritual-intro-text">
                                <p>वास्तु ऑरा स्कॅनर हा एक अत्याधुनिक आणि प्रभावी साधन आहे, जो वास्तु दोष आणि उर्जा प्रवाहाच्या स्थितीचे माप देतो. याचे उपयोग अनेक बाबींमध्ये होऊ शकतात:</p>
                            </div>

                            <div class="vows-container">
                                <div class="element-tag">
                                    <span class="tag-title">नकारात्मक उर्जा दूर करणे:</span>
                                    नकारात्मक उर्जा दूर करणे: स्कॅनरच्या मदतीने घरातील किंवा इमारतीतील नकारात्मक उर्जा शोधून ती दूर केली जाते. यामुळे घरात सकारात्मक वातावरण निर्माण होते.</span>
                                </div>

                                <div class="element-tag">
                                    <span class="tag-title">संतुलित उर्जा प्रवाह:</span>
                                    <span class="tag-desc">घर, ऑफिस किंवा इतर जागेतील उर्जा संतुलित करण्यासाठी, वास्तु ऑरा स्कॅनरच्या मदतीने आवश्यक उपाय निश्चित केले जातात. जेव्हा सकारात्मक उर्जा अधिक आणि नकारात्मक उर्जा कमी असते, तेव्हा एक चांगला वातावरण निर्माण होतो.</span>
                                </div>


                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="ritual-image-frame">
                            <img src="images/images/aura-scanner06.png" class="img-fluid rounded-custom shadow-lg" alt="यज्ञाची प्रमुख अंगे">
                            <div class="frame-decoration"></div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <div class="content-section mt-5">
            <h2 class="section-title text-center mb-5"><i class="fas fa-fire"></i> वास्तु ऑरा स्कॅनरचे महत्त्व</h2>
            <div class="puja-steps-grid">

                <div class="step-card">
                    <div class="step-icon"><i class="fas fa-bullseye"></i></div>
                    <h3>वास्तु दोषांचा निवारण:</h3>
                    <p>घरात किंवा कार्यालयात वास्तु दोष असू शकतात. स्कॅनर त्या दोषांचा पत्ता लावतो आणि योग्य उपाय सुचवतो, ज्यामुळे जागेतील उर्जा प्रवाह संतुलित होतो.</p>
                </div>

                <div class="step-card">
                    <div class="step-icon"><i class="fas fa-igniting"></i></div>
                    <h3>व्यक्तिगत आणि मानसिक शांती:</h3>
                    <p>सकारात्मक उर्जा निर्माण केल्यामुळे, त्या जागेत राहणाऱ्यांना मानसिक शांती आणि आनंद मिळतो. यामुळे त्यांचा मानसिक विकास आणि आध्यात्मिक उन्नती होते..</p>
                </div>

                <div class="step-card">
                    <div class="step-icon"><i class="fas fa-vihara"></i></div>
                    <h3>नवीन घर किंवा व्यवसाय सुरू करतांना:</h3>
                    <p>नवीन घर, कार्यालय किंवा व्यवसाय सुरू करतांना वास्तु ऑरा स्कॅनर वापरून त्या जागेची उर्जा तपासली जाऊ शकते. यामुळे प्रारंभापासूनच सकारात्मक उर्जा मिळवता येते आणि उर्जा संतुलित केली जाऊ शकते..</p>
                </div>
            </div>
        </div>

    </div>

    <div class="container">

        <div class="service-page-infobox">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="image-wrapper">
                        <img src="images/images/aura-scanner08.jpg" class="img-fluid main-ritual-img" alt="Vedic Ritual">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="principle-content">
                        <h2 class="pbmit-title">वास्तु ऑरा स्कॅनरच्या विशिष्ट वैशिष्ट्ये</h2>
                        <div class="samagri-container">
                            <b>वास्तु ऑरा स्कॅनर कार्य करण्याच्या बाबतीत अत्याधुनिक तंत्रज्ञानाचा वापर करतो. हा साधन वीजेच्या किंवा ध्रुवीय उर्जेच्या प्रमाणात बदल ओळखून त्या जागेच्या ऑरा (ऊर्जा क्षेत्र) चे विश्लेषण करते. यामध्ये खालील गोष्टींचा अभ्यास केला जातो:</b>
                        </div><br>
                        <div class="vows-container">
                            <div class="element-tag">
                                <span class="tag-title">सुसंगत परिणाम:</span>
                                <span class="tag-desc">वास्तु ऑरा स्कॅनर अत्याधुनिक तंत्रज्ञानावर आधारित असल्यामुळे, त्याच्या परिणामामध्ये 100% सुसंगतता आणि अचूकता असते. प्रत्येक स्कॅनिंगच्या परिणामांची अचूकता आणि विश्वासार्हता सुनिश्चित केली जाते.</span>
                            </div>
                            <div class="element-tag">
                                <span class="tag-title">विविध जागांसाठी वापर:</span>
                                <span class="tag-desc">ह्या स्कॅनरचा वापर घर, कार्यालय, दुकान, कारखाना, इमारत, उद्याने, इत्यादी विविध प्रकारच्या जागांवर केला जाऊ शकतो.</span>
                            </div>

                            <div class="element-tag">
                                <span class="tag-title">सुरक्षित आणि सोपे:</span>
                                <span class="tag-desc">वास्तु ऑरा स्कॅनर वापरणे खूपच सोपे आहे. याला वापरण्यासाठी कोणतीही जटिल तंत्रज्ञानाची गरज नाही, आणि तो वापरण्याचा प्रक्रिया सुरक्षित आहे.</span>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

            <div class="content-section mt-5">
                <h2 class="section-title text-center mb-5"><i class="fas fa-fire"></i>वास्तु स्कॅनिंगची प्रक्रिया आणि लाभ</h2>
                <div class="puja-steps-grid">

                    <div class="step-card">
                        <div class="step-icon"><i class="fas fa-bullseye"></i></div>
                        <h3>जलद परिणाम:</h3>
                        <p>स्कॅनिंग प्रक्रिया जलद होण्यामुळे, वापरकर्त्याला काही मिनिटांत त्या जागेच्या उर्जेचे माप आणि परीक्षण मिळू शकते.</p>
                    </div>

                    <div class="step-card">
                        <div class="step-icon"><i class="fas fa-igniting"></i></div>
                        <h3>उपाय आणि सल्ला:</h3>
                        <p>स्कॅनिंगच्या नंतर, जर कोणतीही नकारात्मक उर्जा आढळली तर, ताबडतोब उपाय आणि सल्ले दिले जातात. हे उपाय उर्जा संतुलन साधण्यासाठी आणि नकारात्मक प्रभाव दूर करण्यासाठी महत्त्वाचे असतात.</p>
                    </div>

                    <div class="step-card">
                        <div class="step-icon"><i class="fas fa-bullseye"></i></div>
                        <h3>जलद परिणाम:</h3>
                        <p>स्कॅनिंग प्रक्रिया जलद होण्यामुळे, वापरकर्त्याला काही मिनिटांत त्या जागेच्या उर्जेचे माप आणि परीक्षण मिळू शकते.</p>
                    </div>

                </div>
            </div>


            <div class="service-page-infobox">
                <div class="row align-items-center">

                    <div class="col-lg-6">
                        <div class="principle-content">
                            <h2 class="pbmit-title">वास्तु ऑरा स्कॅनरचे फायदे</h2>
                            <div class="samagri-container">
                            </div><br>
                            <div class="vows-container">
                                <div class="element-tag">
                                    <span class="tag-title">सकारात्मक वातावरण निर्माण:</span>
                                    <span class="tag-desc">वास्तु ऑरा स्कॅनरच्या मदतीने घरात किंवा ऑफिसमध्ये सकारात्मक उर्जा तयार केली जाऊ शकते, ज्यामुळे घरातील सदस्य आनंदी आणि मानसिकदृष्ट्या स्वस्थ राहतात.</span>
                                </div>
                                <div class="element-tag">
                                    <span class="tag-title">वास्तु दोषांचे निराकरण:</span>
                                    <span class="tag-desc">त्याच्या मदतीने, घरातील किंवा इमारतीतील वास्तु दोष ओळखून ते दूर केले जातात. यामुळे सकारात्मक उर्जा वाढवते आणि नकारात्मक प्रभाव कमी होतात.</span>
                                </div>

                                <div class="element-tag">
                                    <span class="tag-title">स्वास्थ्य आणि समृद्धी:</span>
                                    <span class="tag-desc">उर्जा संतुलनामुळे शरीर व मनाची स्थिती सुधरते. यामुळे शारीरिक आणि मानसिक स्वास्थ्य प्राप्त होते.</span>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="image-wrapper">
                            <img src="images/images/aura-scanner08.jpg" class="img-fluid main-ritual-img" alt="Vedic Ritual">
                        </div>
                    </div>
                </div>

                <div class="content-section mt-5">
                    <h2 class="section-title text-center mb-5"><i class="fas fa-fire"></i> वास्तु स्कॅनिंगचे प्रमुख लाभ</h2>
                    <div class="puja-steps-grid">

                        <div class="step-card">
                            <div class="step-icon"><i class="fas fa-bullseye"></i></div>
                            <h3>व्यावसायिक प्रगती:</h3>
                            <p>सकारात्मक उर्जा निर्माण केल्यामुळे व्यवसायात यश, समृद्धी आणि प्रगती मिळवता येते.</p>
                        </div>

                        <div class="step-card">
                            <div class="step-icon"><i class="fas fa-igniting"></i></div>
                            <h3>स्पष्टतेचे आणी समृद्धीचे स्रोत:</h3>
                            <p>घरातील किंवा कार्यस्थळाच्या प्रत्येक भागाचे उर्जा विश्लेषण करून, ती जागा कार्यक्षम आणि समृद्ध होऊ शकते.</p>
                        </div>

                        <div class="step-card">
                            <div class="step-icon"><i class="fas fa-bullseye"></i></div>
                            <h3>जलद परिणाम:</h3>
                            <p>स्कॅनिंग प्रक्रिया जलद होण्यामुळे, वापरकर्त्याला काही मिनिटांत त्या जागेच्या उर्जेचे माप आणि परीक्षण मिळू शकते.</p>
                        </div>

                    </div>
                </div>

                <div class="phi-content-col meaning-bg">
                    <div class="content-padding">
                        <h2 class="mini-title"><i class="fas fa-lightbulb"></i> निष्कर्ष</h2>
                        <div class="meaning-item d-flex justify-content-center">
                            
                            <p>वास्तु ऑरा स्कॅनर एक अत्याधुनिक साधन आहे ज्याच्या मदतीने घर, कार्यालय किंवा इतर जागेतील उर्जा आणि वातावरणाची तपासणी केली जाऊ शकते. योग्य उर्जा प्रवाह आणि संतुलन ठेवण्यासाठी हे साधन खूप प्रभावी ठरते. ह्या साधनाच्या मदतीने वास्तु दोषांचा निवारण केला जातो, आणि सकारात्मक वातावरण निर्माण केले जाते, ज्यामुळे जीवनातील समृद्धी, यश, आणि मानसिक शांती प्राप्त होते..</p>
                        </div>
                        
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>

<?php include 'footer.php'; ?>