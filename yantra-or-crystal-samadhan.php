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

    .step-card img {
        width: 50%;
        height: 180px;
        object-fit: cover;
        border-radius: 10px;
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

    .content-section {
        padding: 60px 0;
        background-color: #fffaf5;
        /* हलका सात्विक बॅकग्राउंड */
    }

    /* Section Styling */
    .wedding-ritual-section {
        padding: 60px 20px;
        background: #fffaf5;
    }

    .wedding-section-title {
        font-size: 32px;
        font-weight: 700;
        color: #8b0000;
        position: relative;
    }

    .wedding-section-title i {
        color: #ff6f00;
    }

    /* Grid Layout */
    .wedding-steps-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
        gap: 30px;
        max-width: 1200px;
        margin: 0 auto;
    }

    /* Card Design */
    .wedding-step-card {
        background: #ffffff;
        padding: 30px 20px;
        border-radius: 15px;
        text-align: center;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .wedding-step-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
    }

    /* Image Styling */
    .wedding-step-icon {
        margin-bottom: 20px;
    }

    .wedding-yantra-img {
        width: 120px;
        height: 120px;
        object-fit: cover;
        border-radius: 50%;
        border: 4px solid #ff6f00;
        padding: 5px;
        background: #fff;
        transition: 0.3s;
    }

    .wedding-step-card:hover .wedding-yantra-img {
        transform: scale(1.08);
    }

    /* Card Title */
    .wedding-step-card h3 {
        font-size: 20px;
        color: #8b0000;
        margin-bottom: 15px;
        font-weight: 600;
    }

    /* Card Paragraph */
    .wedding-step-card p {
        font-size: 15px;
        color: #555;
        line-height: 1.6;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .wedding-section-title {
            font-size: 24px;
        }

        .wedding-step-card {
            padding: 20px 15px;
        }

        .wedding-yantra-img {
            width: 100px;
            height: 100px;
        }
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
                                <h1 class="pbmit-tbar-title">यंत्र आणि क्रिस्टल उपाय योजना</h1>
                            </div>
                        </div>
                        <div class="pbmit-breadcrumb">
                            <div class="pbmit-breadcrumb-inner">
                                <span><a title="" href="index1.php" class="home"><span>Home</span></a></span>
                                <span class="sep">-</span>
                                <span><span class="post-root post post-post current-item">यंत्र आणि क्रिस्टल उपाय योजना</span></span>
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
                                <h2 class="pbmit-title">यंत्र और क्रिस्टल उपाय योजना</h2>
                                <div class="samagri-container"> <b>यंत्र (Yantra) और क्रिस्टल (Crystal) प्राचीन आध्यात्मिक साधन माने जाते हैं, जो सूक्ष्म ऊर्जाओं पर कार्य करते हैं। यंत्र विशिष्ट ज्यामितीय आकृतियों और मंत्रशक्ति पर आधारित होता है, जिससे वह विशेष देवता या ग्रहों की ऊर्जा को आकर्षित कर स्थिर करता है। विधिपूर्वक प्राणप्रतिष्ठा किया हुआ यंत्र घर, कार्यालय या पूजा स्थान में स्थापित करने से वातावरण की नकारात्मकता कम होकर सकारात्मक ऊर्जा बढ़ती है। <br><br> क्रिस्टल एक प्राकृतिक खनिज है, जिसमें ऊर्जा को अवशोषित करने, संचित करने और प्रसारित करने की क्षमता होती है। उदाहरण के लिए, स्फटिक (Crystal Quartz) मानसिक शांति के लिए, अॅमेथिस्ट मानसिक संतुलन के लिए, और सिट्रीन आर्थिक प्रगति के लिए उपयोगी माना जाता है। उचित क्रिस्टल को उचित स्थान पर रखने या धारण करने से व्यक्ति के आभामंडल (Aura) पर सकारात्मक प्रभाव पड़ता है। <br> </b> </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="image-wrapper">
                                <img src="images/images/vastu-yantra01.jpg" class="img-fluid main-ritual-img" alt="Vedic Ritual">
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
                    <p>अपने पवित्र कार्य के लिए आसानी से पंजीकरण करें और ईश्वरीय आशीर्वाद का लाभ प्राप्त करें।</p>
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
                        <img src="images/images/vastu-yantra02.jpg" class="img-fluid main-ritual-img" alt="Vedic Ritual">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="principle-content">
                        <h2 class="pbmit-title">यंत्र (Yantra) क्या है?</h2>
                        <div class="samagri-container">
                            <b>यंत्र एक विशेष आकार या संरचना वाली धातु या पत्र पर निर्मित पवित्र रचना होती है, जो ऊर्जा का परिष्कृत और केंद्रित रूप मानी जाती है। यंत्र के रूप में किसी देवता या विशेष शक्ति का प्रतीकात्मक संकलन होता है, जिससे उस ऊर्जा के प्रभाव का व्यक्ति पर सकारात्मक परिणाम होता है।</b>
                        </div><br>

                        <div class="element-tag">
                            <span class="tag-title">शक्ति का प्रतीक:</span>
                            <span class="tag-desc">यंत्र एक प्रकार से उच्च ऊर्जा का साधन होता है, जिसके माध्यम से सकारात्मक शक्तियों को आकर्षित किया जाता है। यंत्र के द्वारा देवी-देवता या उच्च शक्तियों का आशीर्वाद प्राप्त होता है।</span>
                        </div>

                        <div class="element-tag">
                            <span class="tag-title">उपयोग:</span>
                            <span class="tag-desc">यंत्रों का उपयोग विभिन्न समस्याओं के समाधान के लिए किया जाता है, जैसे वाद-विवाद से मुक्ति, आर्थिक समस्याओं पर विजय, ग्रह दोष निवारण, स्वास्थ्य संबंधी समस्याओं का समाधान आदि।</span>
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
                            <h2 class="pbmit-title"><i class="fas fa-fire-alt"></i>क्रिस्टल (Crystal) क्या है?</h2>

                            <div class="ritual-intro-text">
                                <p>क्रिस्टल प्राकृतिक खनिज होते हैं, जिनके विभिन्न प्रकार होते हैं और प्रत्येक प्रकार का अपना विशेष ऊर्जा प्रभाव होता है। हर क्रिस्टल अलग-अलग प्रकार की समस्याओं के समाधान में सहायक माना जाता है। क्रिस्टल विज्ञान या *क्रिस्टल हीलिंग* एक प्राचीन पद्धति है, जो शरीर के ऊर्जा केंद्रों (चक्रों) पर क्रिस्टल के उपचारात्मक प्रभाव को दर्शाती है।</p>
                            </div>

                            <div class="vows-container">
                                <div class="element-tag">
                                    <span class="tag-title">प्रकार:</span>
                                    <span class="tag-desc">क्रिस्टल विभिन्न प्रकारों में उपलब्ध होते हैं, जैसे आमथिस्ट, रोज क्वार्ट्ज, सिट्रीन, टाइगर आई, अर्थ क्रिस्टल आदि।</span>
                                </div>

                                <div class="element-tag">
                                    <span class="tag-title">उपयोग:</span>
                                    <span class="tag-desc">क्रिस्टल का उपयोग मानसिक शांति, शारीरिक स्वास्थ्य सुधारने, नकारात्मक ऊर्जा दूर करने और आकर्षण शक्ति बढ़ाने के लिए किया जाता है।</span>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="ritual-image-frame">
                            <img src="images/images/vastu-yantra03.jpg" class="img-fluid rounded-custom shadow-lg" alt="यज्ञ के प्रमुख अंग">
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
                        <img src="images/images/vastu-yojna04.jpg" class="img-fluid main-ritual-img" alt="Vedic Ritual">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="principle-content">
                        <h2 class="pbmit-title">वास्तु योजना डिज़ाइनिंग में उपयोग किए जाने वाले उपाय</h2>
                        <div class="samagri-container">
                        </div><br>
                        <div class="vows-container">
                            <div class="element-tag">
                                <span class="tag-title">वास्तु यंत्रों का उपयोग:</span>
                                <span class="tag-desc">वास्तु यंत्र जैसे “वास्तु पिरामिड” और “वास्तु द्रव्य” घर के प्रत्येक कोने में रखे जाते हैं, जिससे नकारात्मक ऊर्जा दूर होती है। इससे घर की ऊर्जा संतुलित रहती है।</span>
                            </div>
                            <div class="element-tag">
                                <span class="tag-title">ग्रह शांति उपाय:</span>
                                <span class="tag-desc">कभी-कभी ग्रह दोष और ऊर्जा असंतुलन को दूर करने के लिए ग्रह शांति के उपाय किए जाते हैं। इसमें विशेष पूजा, हवन और रत्न धारण करने के उपाय सुझाए जाते हैं।</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <div class="wedding-ritual-section mt-5">

            <h2 class="wedding-section-title text-center mb-5">
                <i class="fas fa-fire me-2"></i> यंत्रों का महत्व
            </h2>

            <div class="wedding-steps-grid">

                <!-- Card 1 -->
                <div class="wedding-step-card">
                    <div class="wedding-step-icon">
                        <img src="images/images/vastu-yantra04.jpeg" alt="श्री यंत्र" class="wedding-yantra-img">
                    </div>
                    <h3>श्री यंत्र</h3>
                    <p>
                        सर्वोत्तम यंत्रों में से एक श्री यंत्र देवी लक्ष्मी की कृपा प्राप्त करने
                        और धन-धान्य की वृद्धि के लिए अत्यंत प्रभावशाली माना जाता है।
                    </p>
                </div>

                <!-- Card 2 -->
                <div class="wedding-step-card">
                    <div class="wedding-step-icon">
                        <img src="images/images/vastu-yantra05.webp" alt="आर्थिक समृद्धि यंत्र" class="wedding-yantra-img">
                    </div>
                    <h3>आर्थिक समृद्धि</h3>
                    <p>
                        सकारात्मक ऊर्जा के घर में प्रवेश करने से आर्थिक समृद्धि और सुख में वृद्धि होती है।
                        व्यवसाय में स्थिरता और सफलता प्राप्त करने के लिए यह उपयोगी माना जाता है।
                    </p>
                </div>

                <!-- Card 3 -->
                <div class="wedding-step-card">
                    <div class="wedding-step-icon">
                        <img src="images/images/vastu-yantra06.jpg" alt="सकारात्मक प्रभाव" class="wedding-yantra-img">
                    </div>
                    <h3>व्यक्तित्व पर सकारात्मक प्रभाव</h3>
                    <p>
                        घर की सकारात्मक ऊर्जा व्यक्तित्व पर अच्छा प्रभाव डालती है,
                        जिससे आत्मविश्वास, स्थिरता और सकारात्मकता बढ़ती है।
                    </p>
                </div>

                <!-- Card 4 -->
                <div class="wedding-step-card">
                    <div class="wedding-step-icon">
                        <img src="images/images/vastu-yantra07.jpg" alt="सुख-शांति" class="wedding-yantra-img">
                    </div>
                    <h3>संपूर्ण जीवन में सुख-शांति</h3>
                    <p>
                        सही वास्तु योजना और यंत्र स्थापना से घर में शांति, सौहार्द
                        और आनंद का वातावरण निर्मित होता है।
                    </p>
                </div>

            </div>

        </div>



        <div class="wedding-ritual-section mt-5">

            <h2 class="wedding-section-title text-center mb-5">
                <i class="fas fa-gem me-2"></i> क्रिस्टल्स का महत्व
            </h2>

            <div class="wedding-steps-grid">

                <!-- Card 1 -->
                <div class="wedding-step-card">
                    <div class="wedding-step-icon">
                        <img src="images/images/vastu-yantra08.jpg" alt="अमेथिस्ट क्रिस्टल" class="wedding-yantra-img">
                    </div>
                    <h3>अमेथिस्ट क्रिस्टल</h3>
                    <p>
                        अमेथिस्ट क्रिस्टल मानसिक शांति और संतुलन बनाए रखने में सहायक है।
                        इसकी सहायता से चिंता, तनाव और भ्रम को दूर किया जाता है।
                    </p>
                </div>

                <!-- Card 2 -->
                <div class="wedding-step-card">
                    <div class="wedding-step-icon">
                        <img src="images/images/vastu-yantra09.jpg" alt="रोज क्वार्ट्ज क्रिस्टल" class="wedding-yantra-img">
                    </div>
                    <h3>रोज क्वार्ट्ज क्रिस्टल</h3>
                    <p>
                        प्रेम और मित्रता बढ़ाने के लिए रोज क्वार्ट्ज क्रिस्टल अत्यंत प्रभावी माना जाता है।
                        यह नकारात्मक ऊर्जा को दूर कर प्रेम और शांति का संचार करता है।
                    </p>
                </div>

                <!-- Card 3 -->
                <div class="wedding-step-card">
                    <div class="wedding-step-icon">
                        <img src="images/images/vastu-yantra10.jpg" alt="सिट्रीन क्रिस्टल" class="wedding-yantra-img">
                    </div>
                    <h3>सिट्रीन क्रिस्टल</h3>
                    <p>
                        सिट्रीन क्रिस्टल आर्थिक समृद्धि, खुशी और आत्मविश्वास बढ़ाने में सहायक है।
                        यह व्यक्ति को अपने कार्यों में सफलता प्राप्त करने में मदद करता है।
                    </p>
                </div>

                <!-- Card 4 -->
                <div class="wedding-step-card">
                    <div class="wedding-step-icon">
                        <img src="images/images/vastu-yantra11.jpg" alt="टाइगर आई क्रिस्टल" class="wedding-yantra-img">
                    </div>
                    <h3>टाइगर आई क्रिस्टल</h3>
                    <p>
                        टाइगर आई क्रिस्टल मानसिक स्थिरता, निर्णय क्षमता में सुधार
                        और आत्मविश्वास बढ़ाने के लिए अत्यंत प्रभावी है।
                    </p>
                </div>

                <!-- Card 5 -->
                <div class="wedding-step-card">
                    <div class="wedding-step-icon">
                        <img src="images/images/vastu-yantra12.jpg" alt="हेलाइट क्रिस्टल" class="wedding-yantra-img">
                    </div>
                    <h3>हेलाइट क्रिस्टल</h3>
                    <p>
                        हेलाइट क्रिस्टल नकारात्मक ऊर्जा को समाप्त कर सकारात्मक ऊर्जा का संचार करता है।
                        इसका उपयोग मानसिक और शारीरिक स्वास्थ्य सुधारने के लिए किया जाता है।
                    </p>
                </div>

            </div>

        </div>



        <section class="ritual-elements-section">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-6">
                        <div class="ritual-info-group">
                            <h2 class="pbmit-title"><i class="fas fa-fire-alt"></i>यंत्र और क्रिस्टल का संयुक्त उपयोग:</h2>

                            <div class="ritual-intro-text">
                                <p>यंत्र और क्रिस्टल का संयुक्त उपयोग करके एक ऐसी पद्धति बनाई जाती है, जिससे व्यक्ति अपने जीवन की नकारात्मक ऊर्जा को दूर कर सकारात्मक ऊर्जा को आकर्षित कर सकता है। यंत्र और क्रिस्टल एक-दूसरे के साथ समन्वय में कार्य करते हैं। यंत्र देवता या ग्रहों की शक्ति को आकर्षित करते हैं, और क्रिस्टल उस ऊर्जा को धारण कर उसके प्रभाव से व्यक्ति के जीवन में सकारात्मक परिवर्तन लाते हैं।</p>
                            </div>

                            <div class="vows-container">
                                <div class="element-tag">
                                    <span class="tag-title">प्राथमिक उपाय:</span>
                                    <span class="tag-desc">यंत्र और क्रिस्टल को एक साथ रखकर त्वरित उपाय किए जा सकते हैं। उदाहरण के लिए, “श्री यंत्र” और “अमेथिस्ट क्रिस्टल” को साथ रखने से मानसिक और आर्थिक शांति प्राप्त की जा सकती है।</span>
                                </div>

                                <div class="element-tag">
                                    <span class="tag-title">प्राथमिक उपाय:</span>
                                    <span class="tag-desc">यंत्र और क्रिस्टल को एक साथ रखकर त्वरित उपाय किए जा सकते हैं। उदाहरण के लिए, “श्री यंत्र” और “अमेथिस्ट क्रिस्टल” को साथ रखने से मानसिक और आर्थिक शांति प्राप्त की जा सकती है।</span>
                                </div>

                                <div class="element-tag">
                                    <span class="tag-title">विशेष उपाय:</span>
                                    <span class="tag-desc">यंत्र और क्रिस्टल का उपयोग करते समय नियमित धूप, पुष्प पूजा और ध्यान प्रक्रिया के माध्यम से उन्हें अधिक प्रभावी बनाया जा सकता है। इससे ऊर्जा का प्रवाह संतुलित और सशक्त होता है।</span>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="ritual-image-frame">
                            <img src="images/images/vastu-yantra13.jpg" class="img-fluid rounded-custom shadow-lg" alt="यज्ञ के प्रमुख अंग">
                            <div class="frame-decoration"></div>
                        </div>
                    </div>

                </div>
            </div>
        </section>



        <div class="wedding-ritual-section mt-5">
            <h2 class="wedding-section-title text-center mb-5">
                <i class="fas fa-fire"></i> यंत्र और क्रिस्टल उपाय योजना के लाभ
            </h2>

            <div class="wedding-steps-grid">

                <div class="wedding-step-card">
                    <div class="wedding-step-icon">
                        <i class="fas fa-star fa-3x" style="color:#ff6f00;"></i>
                    </div>
                    <h3>सकारात्मक ऊर्जा का आकर्षण</h3>
                    <p>
                        यंत्र और क्रिस्टल का संयुक्त उपयोग घर और कार्यालय के वातावरण में
                        सकारात्मक ऊर्जा आकर्षित करने में सहायक होता है।
                    </p>
                </div>

                <div class="wedding-step-card">
                    <div class="wedding-step-icon">
                        <i class="fas fa-globe fa-3x" style="color:#ff6f00;"></i>
                    </div>
                    <h3>ग्रह दोष निवारण</h3>
                    <p>
                        ज्योतिष शास्त्र के अनुसार, यंत्र और क्रिस्टल के उपयोग से ग्रह दोष कम किए जाते हैं।
                        विशेष रूप से राहु, केतु और शनि के नकारात्मक प्रभाव कम होते हैं।
                    </p>
                </div>

                <div class="wedding-step-card">
                    <div class="wedding-step-icon">
                        <i class="fas fa-heartbeat fa-3x" style="color:#ff6f00;"></i>
                    </div>
                    <h3>स्वास्थ्य में सुधार</h3>
                    <p>
                        क्रिस्टल और यंत्रों का उपयोग मानसिक, शारीरिक और आध्यात्मिक
                        स्वास्थ्य को बेहतर बनाने के लिए किया जाता है।
                    </p>
                </div>

                <div class="wedding-step-card">
                    <div class="wedding-step-icon">
                        <i class="fas fa-coins fa-3x" style="color:#ff6f00;"></i>
                    </div>
                    <h3>आर्थिक समृद्धि</h3>
                    <p>
                        विशेष यंत्रों के माध्यम से आर्थिक समस्याओं पर विजय पाई जा सकती है।
                        यंत्र और क्रिस्टल के उपाय धन और समृद्धि प्राप्त करने में सहायक होते हैं।
                    </p>
                </div>

                <div class="wedding-step-card">
                    <div class="wedding-step-icon">
                        <i class="fas fa-handshake fa-3x" style="color:#ff6f00;"></i>
                    </div>
                    <h3>विवाद निवारण</h3>
                    <p>
                        यंत्र और क्रिस्टल के उपयोग से घर या कार्यालय के विवाद कम किए जा सकते हैं।
                        ये वातावरण में शांति और समृद्धि लाते हैं।
                    </p>
                </div>

            </div>
        </div>

        <div class="phi-content-col meaning-bg">
            <div class="content-padding">
                <h2 class="mini-title"><i class="fas fa-lightbulb"></i> निष्कर्ष</h2>
                <div class="meaning-item d-flex justify-content-center">

                    <p>यंत्र और क्रिस्टल उपाय योजना इन दोनों शक्तिशाली साधनों के माध्यम से व्यक्ति का जीवन सुधारा जा सकता है। यंत्र ग्रह दोष निवारण, आर्थिक समृद्धि और मानसिक शांति प्रदान करते हैं, जबकि क्रिस्टल शरीर और मन के स्वास्थ्य पर सकारात्मक प्रभाव डालते हैं। दोनों का संयुक्त उपयोग करने से जीवन में स्थिरता, समृद्धि और सफलता प्राप्त की जा सकती है।</p>
                </div>

            </div>
        </div>


    </div>
    </div>
    </div>

</section>

<?php include 'hindi/footer.php'; ?>    