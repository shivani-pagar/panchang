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
<?php include 'hindi/header.php'; ?>
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

                <?php include 'sachin_guruji_hindi.php'; ?>
            </div>
            <?php include 'inner-form-hindi.php'; ?>
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
                <div class="mantra-ribbon puja-initiation-theme">
                    <div class="mantra-icon-left"><i class="fas fa-gopuram"></i></div>
                    <div class="mantra-text-content">

                        <p class="sanskrit-shlok">
                            परीक्षितायां भुवि विघ्नराजं । समर्चयेच्चण्डिकया समेतम् ।
                            क्षेत्राधिपं चाष्टदिगीशदेवान् पुष्यैश्च धूपैर्बलिभि: सुखाय ॥
                        </p>
                        <div class="shlok-divider"></div>
                        <p class="shlok-meaning">
                            <strong>अर्थ:</strong> भूमि परीक्षण के बाद गणपति, चंडिका माता, क्षेत्रपाल और अष्टदिक्पाल का पूजन करना चाहिए। इससे वास्तु में स्थायी रूप से सुख और शांति का वास होता है।
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
                                    <b>वास्तु शास्त्र के अनुसार घर, कार्यालय और अन्य इमारतों का डिजाइन करते समय ऊर्जा संतुलन साधना अत्यंत महत्वपूर्ण है। सही वास्तु योजना डिजाइनिंग से उस स्थान पर सकारात्मक ऊर्जा का निर्माण होता है, जिससे व्यक्ति को सुख, समृद्धि और मानसिक शांति मिलती है। तभी उस स्थान पर रहने वालों का जीवन अधिक आनंदमय, सफल और समृद्ध हो सकता है। <br><br>
                                        वास्तु योजना डिजाइनिंग में घर या इमारत की संरचना और स्थान का उचित नियोजन किया जाता है। इसमें घर के भौगोलिक स्थान, दिशाओं के बीच संतुलन, वास्तुशास्त्र के नियमों का पालन और स्थानीय वातावरण पर विचार किया जाता है।</b>
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
                    <h2>अपनी पूजा आज ही बुक करें</h2>
                    <p>अपने पवित्र कार्य के लिए सरलता से पंजीकरण करें और ईश्वरीय आशीर्वाद का लाभ उठाएं।</p>
                    <a href="contact.php" class="pbmit-btnn pbmit-btn-lg">पूजा के लिए पंजीकरण करें</a>
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
                            <b>वास्तुशास्त्र केवल एक रचनात्मक डिजाइन नहीं है, बल्कि यह एक वैज्ञानिक दृष्टिकोण है, जिसमें ऊर्जा संतुलन और उस ऊर्जा का मनुष्य के जीवन पर पड़ने वाले प्रभाव पर ध्यान केंद्रित किया जाता है। सही वास्तु योजना डिजाइन किए जाने पर:</b>
                        </div><br>

                        <div class="samagri-container">
                            <span class="samagri-box"> सकारात्मक ऊर्जा का निर्माण होता है।</span>
                            <span class="samagri-box"> शारीरिक और मानसिक स्वास्थ्य में सुधार होता है।</span>
                        </div>
                        <div class="samagri-container">
                            <span class="samagri-box">व्यक्तिगत और व्यावसायिक जीवन में सफलता प्राप्त होती है।</span>
                            <span class="samagri-box"> आर्थिक समृद्धि और सुख-शांति प्राप्त होती है</span>
                            <span class="samagri-box"> संतुलित जीवनशैली का निर्माण होता है। </span>
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
                                <p>वास्तु योजना डिजाइन करते समय कुछ महत्वपूर्ण सिद्धांत और नियम हैं, जो वास्तुशास्त्र में दिए गए हैं:</p>
                            </div>

                            <div class="vows-container">
                                
                                    <div class="element-tag">
                                        <span class="tag-title">दिशा का महत्व है:</span>
                                        घर या इमारत का मुख्य प्रवेशद्वार, कमरे, कार्यालय और अन्य महत्वपूर्ण स्थान सही दिशा में होने चाहिए। प्रत्येक दिशा के लिए विशेष ऊर्जा होती है, जो उस दिशा में स्थान के उपयोग पर प्रभाव डालती है।</span>
                                    </div>

                                    <div class="element-tag">
                                        <span class="tag-title">मुख्य प्रवेशद्वार:</span>
                                        <span class="tag-desc">घर का मुख्य प्रवेशद्वार सकारात्मक ऊर्जा का प्रवेश होना चाहिए। प्रवेशद्वार से ऊर्जा घर में आती है, इसलिए उसकी दिशा और स्थान महत्वपूर्ण है। पूर्व या उत्तर दिशा में प्रवेशद्वार वाला घर उत्तम माना जाता है।</span>
                                    </div>

                                    <div class="element-tag">
                                        <span class="tag-title">कोने और खुली जगह:</span>
                                        <span class="tag-desc">घर या कार्यालय के कोने और ऊंचे स्थानों की संरचना ऊर्जा के प्रवाह पर प्रभाव डालती है। संरचनात्मक स्थान खुला और खाली रखना महत्वपूर्ण है। यदि कोने अव्यवस्थित और बंद हैं, तो इससे नकारात्मक ऊर्जा उत्पन्न हो सकती है।</span>
                                    </div>

                                    <div class="element-tag">
                                        <span class="tag-title">रंगों का महत्व:</span>
                                        <span class="tag-desc">वास्तु डिजाइन में रंग चुनना बहुत महत्वपूर्ण होता है। प्रत्येक रंग की ऊर्जा और प्रभाव अलग-अलग होता है। रंगों का सही चयन हमारी मानसिकता और शारीरिक स्वास्थ्य पर सकारात्मक प्रभाव डाल सकता है।</span>
                                    </div>

                                    <div class="element-tag">
                                        <span class="tag-title">केंद्र और ऊर्जा प्रवाह:</span>
                                        <span class="tag-desc">घर या इमारत के मध्यभाग (केंद्र) में अनावश्यक चीजें नहीं रखनी चाहिए। इसे 'ब्रह्मस्थान' कहा जाता है। यहाँ खुली और खाली जगह रखनी चाहिए। इससे ऊर्जा स्वतंत्र रूप से प्रवाहित हो सकती है और सकारात्मक प्रभाव पड़ता है।</span>
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
                            <h2 class="pbmit-title">वास्तु योजना डिजाइन में उपयोग किए जाने वाले उपकरण</h2>
                            <div class="samagri-container">
                            </div><br>
                            <div class="vows-container">
                                <div class="element-tag">
                                    <span class="tag-title">गणित और अंकशास्त्र:</span>
                                    <span class="tag-desc">वास्तु योजना डिजाइनिंग में गणित और अंकशास्त्र का महत्व होता है। घर की संरचना करते समय गणित का उपयोग करके, घर के प्रत्येक क्षेत्र की लंबाई, चौड़ाई और ऊंचाई सही अनुपात में रखनी होती है, जिससे ऊर्जा संतुलन बना रहता है।</span>
                                </div>
                                <div class="element-tag">
                                    <span class="tag-title">सौम्य वाचन:</span>
                                    <span class="tag-desc">वास्तुशास्त्र के सिद्धांतों के अनुसार, घर के प्रत्येक कोने और कमरे सही चक्रों के अनुसार होने चाहिए। इस पर विचार करके, ऊर्जा का सही प्रवाह बनाए रखा जा सकता है।</span>
                                </div>

                                <div class="element-tag">
                                    <span class="tag-title">ग्रह और रत्न:</span>
                                    <span class="tag-desc">घर के वास्तुशास्त्र में कभी-कभी ग्रहों का प्रभाव भी मापा जाता है। ग्रहों के शुभ और अशुभ प्रभाव के आधार पर, घर की संरचना और ऊर्जा प्रवाह संबंधित किए जाते हैं। कभी-कभी, ग्रह दोष निवारण के लिए, सही रत्नों का चयन किया जाता है।</span>
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
                    <h2 class="pbmit-title">वास्तु योजना डिजाइनिंग के लाभ:</h2>
                    <div class="puja-steps-grid">

                        <div class="step-card">
                            <div class="step-icon"><i class="fas fa-bullseye"></i></div>
                            <h3>शारीरिक और मानसिक स्वास्थ्य:</h3>
                            <p>सही वास्तु योजना डिजाइन करने से शारीरिक और मानसिक स्वास्थ्य में सुधार होता है। घर की ऊर्जा संतुलित रखने से व्यक्ति तरोताजा महसूस करता है।</p>
                        </div>

                        <div class="step-card">
                            <div class="step-icon"><i class="fas fa-igniting"></i></div>
                            <h3>आर्थिक समृद्धि:</h3>
                            <p>सकारात्मक ऊर्जा के घर में प्रवेश करने से आर्थिक समृद्धि और सुख की प्राप्ति हो सकती है। व्यवसाय में सफलता मिलती है।</p>
                        </div>

                        <div class="step-card">
                            <div class="step-icon"><i class="fas fa-bullseye"></i></div>
                            <h3>व्यक्तित्व पर सकारात्मक प्रभाव:</h3>
                            <p>घर की सकारात्मक ऊर्जा व्यक्तित्व पर अच्छा प्रभाव डालती है, जिससे व्यक्ति का आत्मविश्वास और सकारात्मकता बढ़ती है।</p>
                        </div>

                        <div class="step-card">
                            <div class="step-icon"><i class="fas fa-bullseye"></i></div>
                            <h3>संपूर्ण जीवन में सुख-शांति:</h3>
                            <p>सही वास्तु योजना डिजाइन करने से घर में शांति और सौम्यता बनी रहती है। इससे घर के सदस्य शांत, प्रेममय और आनंदित रहते हैं।</p>
                        </div>

                    </div>
                </div>

                <div class="phi-content-col meaning-bg">
                    <div class="content-padding">
                        <h2 class="mini-title"><i class="fas fa-lightbulb"></i> निष्कर्ष</h2>
                        <div class="meaning-item d-flex justify-content-center">

                            <p>वास्तु योजना डिजाइनिंग केवल घर के संरचनात्मक पक्ष को महत्व नहीं देती, बल्कि उस स्थान में ऊर्जा प्रवाह के संतुलन पर भी ध्यान केंद्रित करती है। सही वास्तु योजना घर की ऊर्जा को संतुलित रखकर सकारात्मक ऊर्जा का निर्माण करती है, जिससे व्यक्ति का जीवन अधिक सुखी, समृद्ध और सफल हो सकता है।</p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

</section>

<?php include 'hindi/footer.php'; ?>