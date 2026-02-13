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
        grid-template-columns: repeat(2, 1fr);
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
                                <h1 class="pbmit-tbar-title">वास्तु योजना</h1>
                            </div>
                        </div>
                        <div class="pbmit-breadcrumb">
                            <div class="pbmit-breadcrumb-inner">
                                <span><a title="" href="index.php" class="home"><span>Home</span></a></span>
                                <span class="sep">-</span>
                                <span><span class="post-root post post-post current-item">वास्तु योजना</span></span>
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
            <!--					<li><a href="services-details.html">  Kalsarp Yog Puja </a></li>-->
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
                <div class="mantra-ribbon puja-initiation-theme">
                    <div class="mantra-icon-left"><i class="fas fa-gopuram"></i></div>
                    <div class="mantra-text-content">

                        <p class="sanskrit-shlok">
                            परीक्षितायां भुवि विघ्नराजं । समर्चयेच्चण्डिकया समेतम् ।
                            क्षेत्राधिपं चाष्टदिगीशदेवान् पुष्यैश्च धूपैर्बलिभि: सुखाय ॥
                        </p>
                        <div class="shlok-divider"></div>
                        <p class="shlok-meaning">
                            <strong>अर्थ:</strong> भूमी परीक्षणांनंतर गणपती, चंडिका माता, क्षेत्रपाल आणि अष्टदिक्पाल यांचे पूजन करावे. यामुळे वास्तूमध्ये कायमस्वरूपी सुख आणि शांती नांदते.
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
                                <h2 class="pbmit-title">वास्तु योजना डिझाइनिंग?</h2>
                                <div class="samagri-container">
                                    <b>वास्तु शास्त्रानुसार घर, कार्यालय, आणि इतर इमारतींचे डिझाइन करताना उर्जा संतुलन साधणे अत्यंत महत्त्वाचे आहे. योग्य वास्तु योजना डिझाइनिंग केल्यास त्या ठिकाणी सकारात्मक उर्जा निर्माण होते, ज्यामुळे व्यक्तीला सुख, समृद्धी, आणि मानसिक शांती मिळते. तरच त्या जागेत राहणाऱ्यांचे जीवन अधिक आनंदी, यशस्वी आणि समृद्ध होऊ शकते. <br><br>
                                        वास्तु योजना डिझाइनिंगमध्ये घराच्या किंवा इमारतीच्या रचनेचे आणि ठिकाणाचे योग्य नियोजन केले जाते. इथे घराच्या भौगोलिक स्थळ, दिशांमधील समतोल, त्याच्या वास्तुशास्त्रातील नियमांचा आदर, आणि स्थानिक वातावरणाचा विचार केला जातो.</b>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="image-wrapper">
                                <img src="images/images/vastu-yojna01.jpeg" class="img-fluid main-ritual-img" alt="Vedic Ritual">
                            </div>
                        </div>
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
                        <img src="images/images/aura-scanner04.png" class="img-fluid main-ritual-img" alt="Vedic Ritual">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="principle-content">
                        <h2 class="pbmit-title">वास्तु योजना डिझाइनिंगचे महत्व</h2>
                        <div class="samagri-container">
                            <b>वास्तुशास्त्र केवळ एक रचनात्मक डिझाइन नाही, तर ते एक वैज्ञानिक दृष्टिकोन आहे, ज्यामध्ये उर्जा संतुलन आणि त्या उर्जेचा मनुष्याच्या जीवनावर होणारा प्रभाव यावर लक्ष केंद्रित केले जाते. योग्य वास्तु योजना डिझाइन केली असल्यास:</b>
                        </div><br>

                        <div class="samagri-container">
                            <span class="samagri-box"> सकारात्मक उर्जा निर्माण होते.</span>
                            <span class="samagri-box"> शारीरिक आणि मानसिक स्वास्थ्य सुधारते.</span>
                        </div>
                        <div class="samagri-container">
                            <span class="samagri-box"> व्यक्तिगत आणि व्यावसायिक जीवनात यश मिळवता येते.</span>
                            <span class="samagri-box"> आर्थिक समृद्धी आणि सुखशांती मिळवता येते.</span>
                            <span class="samagri-box"> संतुलित जीवनशैली तयार होते..</span>
                        </div>
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
                            <h2 class="pbmit-title"><i class="fas fa-fire-alt"></i>वास्तु योजना डिझाइनिंगचे तत्त्व</h2>

                            <div class="ritual-intro-text">
                                <p>वास्तु योजना डिझाइन करताना काही महत्त्वाचे तत्त्वे आणि नियम आहेत, जे वास्तुशास्त्रात दिलेले आहेत:</p>
                            </div>

                            <div class="vows-container">
                                <div class="element-tag">
                                    <span class="tag-title">दिशा महत्त्वाची असते:</span>
                                    घर किंवा इमारतीचे मुख्य प्रवेशद्वार, रुम्स, ऑफिसेस, आणि इतर महत्त्वाची जागा योग्य दिशेत असावी लागतात. प्रत्येक दिशेसाठी विशेष उर्जा असते, जी त्या दिशेतील जागेच्या वापरावर प्रभाव टाकते.</span>
                                </div>

                                <div class="element-tag">
                                    <span class="tag-title">मुख्य प्रवेशद्वार:</span>
                                    <span class="tag-desc">घराचे मुख्य प्रवेशद्वार सकारात्मक उर्जेचा प्रवेश असावा लागतो. प्रवेशद्वारापासून उर्जा घरात येते, त्यामुळे त्याची दिशा आणि स्थान महत्त्वाचे आहे. पूर्व किंवा उत्तर दिशेला प्रवेशद्वार असलेले घर उत्तम मानले जाते.</span>
                                </div>

                                <div class="element-tag">
                                    <span class="tag-title">कोपरे आणि खुले स्पेस:</span>
                                    <span class="tag-desc">घरातील किंवा कार्यालयातील कोपरे आणि उंच ठिकाणांची रचना उर्जेच्या प्रवाहावर प्रभाव टाकते. रचनात्मक जागा उघडी आणि मोकळी ठेवणे महत्त्वाचे आहे. जर कोपरे अव्यवस्थित आणि बंद असतील, तर त्यामुळे नकारात्मक उर्जा निर्माण होऊ शकते.</span>
                                </div>

                                <div class="element-tag">
                                    <span class="tag-title">रंगांचे महत्त्व:</span>
                                    <span class="tag-desc">वास्तु डिझाइनमध्ये रंग निवडणे खूप महत्त्वाचे असते. प्रत्येक रंगाची उर्जा आणि प्रभाव वेगवेगळा असतो. रंगांची योग्य निवड आपल्या मानसिकतेवर आणि शारीरिक आरोग्यावर सकारात्मक परिणाम करू शकते.</span>
                                </div>

                                <div class="element-tag">
                                    <span class="tag-title">केंद्र आणि उर्जा प्रवाह:</span>
                                    <span class="tag-desc">घराच्या किंवा इमारतीच्या मध्यभागी (केंद्र) नको असलेल्या गोष्टी ठेवू नयेत. याला “ब्रह्मस्थान” असे संबोधले जाते. याठिकाणी खुली आणि मोकळी जागा ठेवावी लागते. यामुळे उर्जा मुक्तपणे फिरू शकते आणि सकारात्मक प्रभाव पडतो.</span>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="ritual-image-frame">
                            <img src="images/images/vastu-yojna02.jpg" class="img-fluid rounded-custom shadow-lg" alt="यज्ञाची प्रमुख अंगे">
                            <div class="frame-decoration"></div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>

    <div class="container">

        <div class="service-page-infobox">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="image-wrapper">
                        <img src="images/images/vastu-yojna03.jpg" class="img-fluid main-ritual-img" alt="Vedic Ritual">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="principle-content">
                        <h2 class="pbmit-title">वास्तु योजना डिझाइनमध्ये वापरण्याचे साधने</h2>

                        <div class="vows-container">
                            <div class="element-tag">
                                <span class="tag-title">गणित आणि अंकशास्त्र:</span>
                                <span class="tag-desc">वास्तु योजना डिझाइनिंगमध्ये गणित आणि अंकशास्त्राचे महत्त्व असते. घराची रचना करताना गणिताचा वापर करून, घरातील प्रत्येक क्षेत्राची लांबी, रुंदी, आणि उंची योग्य प्रमाणात ठेवावी लागते. ज्यामुळे उर्जा संतुलन राखले जाते.</span>
                            </div>
                            <div class="element-tag">
                                <span class="tag-title">सौम्य वाचन:</span>
                                <span class="tag-desc">वास्तुशास्त्राच्या तत्त्वानुसार, घरातील प्रत्येक कोपरा आणि खोल्या योग्य चक्रांनुसार असाव्यात. याचा विचार करून, उर्जेचा योग्य प्रवाह राखता येतो.</span>
                            </div>

                            <div class="element-tag">
                                <span class="tag-title">ग्रह आणि रत्न:</span>
                                <span class="tag-desc">घराच्या वास्तुशास्त्रात काही वेळा ग्रहांचा प्रभाव देखील मोजला जातो. ग्रहांच्या शुभ आणि अशुभ प्रभावावरून, घराची रचना आणि उर्जा प्रवाह संबंधित केले जातात. काही वेळा, ग्रह दोष निवारणासाठी, योग्य रत्नांची निवड केली जाते.</span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="service-page-infobox">
                <div class="row align-items-center">

                    <div class="col-lg-6">
                        <div class="principle-content">
                            <h2 class="pbmit-title">वास्तु योजना डिझाइनिंग मध्ये वापरण्याचे उपाय</h2>
                            <div class="samagri-container">
                            </div><br>
                            <div class="vows-container">
                                <div class="element-tag">
                                    <span class="tag-title">वास्तु यंत्रांचा वापर::</span>
                                    <span class="tag-desc">वास्तु यंत्रे जसे की “वास्तु पिरामिड” आणि “वास्तु द्रव्य” घराच्या प्रत्येक कोपऱ्यात ठेवले जातात, ज्यामुळे नकारात्मक उर्जा दूर केली जाते. यामुळे घरातील उर्जा संतुलित होते.</span>
                                </div>
                                <div class="element-tag">
                                    <span class="tag-title">ग्रह शांती उपाय:</span>
                                    <span class="tag-desc">काही वेळा ग्रह दोष आणि उर्जा असंतुलन दूर करण्यासाठी ग्रह शांती उपाय केले जातात. यामध्ये विशेष पूजा, हवन, आणि रत्न धारण करण्याचे उपाय सुचवले जातात.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="image-wrapper">
                            <img src="images/images/vastu-yojna04.jpg" class="img-fluid main-ritual-img" alt="Vedic Ritual">
                        </div>
                    </div>
                </div>

                <div class="content-section mt-5">
                    <h2 class="section-title text-center mb-5"><i class="fas fa-fire"></i> वास्तु योजना डिझाइनिंगचे फायदे:</h2>
                    <div class="puja-steps-grid">

                        <div class="step-card">
                            <div class="step-icon"><i class="fas fa-bullseye"></i></div>
                            <h3>शारीरिक आणि मानसिक आरोग्य:</h3>
                            <p>योग्य वास्तु योजना डिझाइन केल्यास शारीरिक आणि मानसिक आरोग्य सुधारते. घरातील उर्जा संतुलित ठेवल्याने व्यक्तीला ताजेतवाने वाटते.</p>
                        </div>

                        <div class="step-card">
                            <div class="step-icon"><i class="fas fa-igniting"></i></div>
                            <h3>आर्थिक समृद्धी:</h3>
                            <p>सकारात्मक उर्जा घरात प्रवेश करण्यामुळे आर्थिक समृद्धी आणि सुखप्राप्ती होऊ शकते. व्यवसायात यश मिळवता येते.</p>
                        </div>

                        <div class="step-card">
                            <div class="step-icon"><i class="fas fa-bullseye"></i></div>
                            <h3>व्यक्तिमत्वावर सकारात्मक प्रभाव:</h3>
                            <p>घरातील सकारात्मक उर्जा व्यक्तिमत्वावर चांगला प्रभाव टाकते, ज्यामुळे व्यक्तीचे आत्मविश्वास आणि सकारात्मकता वाढते..</p>
                        </div>

                        <div class="step-card">
                            <div class="step-icon"><i class="fas fa-bullseye"></i></div>
                            <h3>संपूर्ण जीवनात सुख-शांती:</h3>
                            <p>योग्य वास्तु योजना डिझाइन केल्यास घरात शांती आणि सौम्यता राहते. त्यामुळे घरातील सदस्य शांत, प्रेमळ, आणि आनंदी राहतात.</p>
                        </div>



                    </div>
                </div>

                <div class="phi-content-col meaning-bg">
                    <div class="content-padding">
                        <h2 class="mini-title"><i class="fas fa-lightbulb"></i> निष्कर्ष</h2>
                        <div class="meaning-item d-flex justify-content-center">

                            <p>वास्तु योजना डिझाइनिंग केवळ घराच्या रचनात्मक बाजूला महत्त्व देत नाही, तर त्या जागेतील उर्जा प्रवाहाच्या संतुलनावरही लक्ष केंद्रित करते. योग्य वास्तु योजना घरातील उर्जा संतुलित ठेवून सकारात्मक उर्जा निर्माण करते, ज्यामुळे व्यक्तीचे जीवन अधिक सुखी, समृद्ध आणि यशस्वी होऊ शकते.</p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

</section>

<?php include 'footer.php'; ?>