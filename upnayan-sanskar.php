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

    /* Wedding Grid */
    .wedding-steps-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 25px;
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
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
    }

    .wedding-step-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 25px rgba(139, 69, 19, 0.15);
        border-top-color: #FF9800;
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
                                <h1 class="pbmit-tbar-title">वैदिक विवाह संस्कार</h1>
                            </div>
                        </div>
                        <div class="pbmit-breadcrumb">
                            <div class="pbmit-breadcrumb-inner">
                                <span><a title="" href="index.php" class="home"><span>Home</span></a></span>
                                <span class="sep">-</span>
                                <span><span class="post-root post post-post current-item">वैदिक विवाह संस्कार</span></span>
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
                <div class="mantra-ribbon">
                    <div class="mantra-icon-left"><i class="fas fa-om"></i></div>
                    <div class="mantra-text-content">
                        <p class="sanskrit-shlok">
                            "जन्मना जायते शूद्रः संस्कारैर्द्विज उच्यते ।
                            वैदिकैः कर्मभिः पुण्यैर्निषेकादिद्विजन्मनाम् ॥"
                        </p>
                        <p class="shlok-meaning">
                            अर्थ: जन्माने प्रत्येक जण शूद्र असतो, संस्कारांनी तो 'द्विज' (दुसरा जन्म) प्राप्त करतो.
                        </p>
                    </div>
                    <div class="mantra-icon-right"><i class="fas fa-om"></i></div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6  order-1">
                <img src="images/images/UPANAYAN-SANSKAR.png" class="w-100" alt="">

            </div>
            <div class="col-md-6 col-lg-6">
                <div class="service-details">
                    <h3 class="pbmit-title">उपनयन संस्कार</h3>
                    <p>उपनयन संस्कार (उपनयन = जवळ नेणे; संस्कार = शुद्धिकरण व घडवणूक) हा वैदिक परंपरेतील एक महत्त्वाचा संस्कार आहे, ज्याला यज्ञोपवीत संस्कार किंवा मुनिब्राह्मण संस्कार असेही म्हणतात. हा संस्कार मूलावर वेदाध्ययनाचा अधिकार प्रदान करतो आणि तो द्विजत्व (दुसरा जन्म) प्राप्त करतो असे मानले जाते.</p>
                </div>
                <div class="service-details">
                    <h3 class="pbmit-title">उपनयन संस्काराचा अर्थ व महत्त्व</h3>
                    <p>उप + नयन = गुरुच्या जवळ नेणे.</p>
                    <p>शिष्याला वेदाध्ययनासाठी व ब्रह्मचर्याश्रमात प्रवेश देणारा संस्कार.</p>
                    <p>द्विज’ म्हणजे दुसऱ्यांदा जन्मलेला — पहिला जन्म आई-वडिलांकडून, दुसरा जन्म गुरुंकडून (ज्ञानाचा).</p>
                    <p>उपनयन झाल्यावर शिष्य ब्रह्मचर्य पाळतो, स्वाध्याय करतो, गुरुसेवा करतो.</p>
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
                    <h2>उपनयन संस्काराची योग्य वय</h2>
                    <p>ब्राह्मण – ८ वर्षे (गर्भधारणेपासून ८वा वर्ष)</p>
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
                        <img src="images/images/matrubhojan.jpeg" class="img-fluid main-ritual-img" alt="Vedic Ritual">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="principle-content">
                        <h2 class="accent-title">उपनयन संस्काराची योग्य वय</h2>
                        <p>वैदिक विवाह संस्कारात अनेक पद्धती आहेत (उदा. ब्रह्मविवाह, गंधर्वविवाह), पण ब्राह्मणधर्मप्रणीत विवाहात यज्ञ आणि सप्तपदी हे मुख्य भाग आहेत.</p>
                        <div class="samagri-container">
                            <span class="samagri-box"> ब्राह्मण – ८ वर्षे (गर्भधारणेपासून ८वा वर्ष) </span>
                            <br><span class="samagri-box">क्षत्रिय – ११ वर्षे (गर्भधारणेपासून ८वा वर्ष)</span>
                            <br><span class="samagri-box"> वैश्य – १२ वर्षे (मनुस्मृती २.३६ नुसार)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr class="section-divider">

        <section class="saptpadi-dynamic-section">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-6">
                        <div class="ritual-info-group">
                            <h2 class="accent-title">वैदिक शास्त्रांतील संदर्भ</h2>

                            <div class="saptpadi-intro-text">
                                <p>सप्तपदी हा हिंदू विवाहाचा सर्वात पवित्र आणि कायदेशीरदृष्ट्या महत्त्वाचा विधी आहे. अग्निसाक्षीत वर-वधू सात पावले चालतात आणि प्रत्येक पावलावर संसाराच्या समृद्धीसाठी विशिष्ट संकल्प करतात:</p>
                            </div>

                            <div class="vows-container">
                                <span class="samagri-box"><i class="fas fa-leaf"></i> उपनयन संस्काराचा उल्लेख मनुस्मृती, गृह्यसूत्रे, धर्मशास्त्रे यामध्ये आहे.</span>
                                <span class="samagri-box"><i class="fas fa-heartbeat"></i> यज्ञोपवीत (जानेऊ) धारण करून ‘गायत्री मंत्र’ चा अधिकार प्राप्त होतो.</span>
                                <span class="samagri-box"><i class="fas fa-coins"></i> सामवेद, ऋग्वेद, यजुर्वेद – कोणत्या शाखेचा अभ्यास करायचा हे ठरवले जाते.</span>
                                <span class="samagri-box"><i class="fas fa-smile-beam"></i> गुरु शिष्याला ‘सावित्री उपदेश’ (गायत्री मंत्र) देतो.</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="saptpadi-image-frame">
                            <img src="images/images/upnayan02.png" class="img-fluid rounded-custom shadow-lg" alt="सप्तपदी विधी">
                            <div class="frame-decoration"></div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <div class="wedding-ritual-section mt-5">
            <h2 class="wedding-section-title text-center mb-5">
                <i class="fas fa-scroll"></i> उपनयन संस्कार विधी (Upanayan Rituals)
            </h2>

            <div class="wedding-steps-grid">

                <div class="wedding-step-card">
                    <div class="wedding-step-icon"><i class="fas fa-pray"></i></div>
                    <h3>नंदी श्राद्ध</h3>
                    <p>विधी निर्विघ्न पार पडण्यासाठी आणि पूर्वजांची कृपा प्राप्त करण्यासाठी श्राद्ध विधी व पूजन करणे.</p>
                </div>

                <div class="wedding-step-card">
                    <div class="wedding-step-icon"><i class="fas fa-place-of-worship"></i></div>
                    <h3>मंडप स्थापना</h3>
                    <p>यज्ञ आणि मुख्य संस्कारासाठी पवित्र वेदी तयार करून शुद्ध स्थान निश्चित करणे.</p>
                </div>

                <div class="wedding-step-card">
                    <div class="wedding-step-icon"><i class="fas fa-cut"></i></div>
                    <h3>केशवपन विधी</h3>
                    <p>शिष्याचे केस काढून शुद्धी करणे (शिखा ठेवून), जे नवीन आध्यात्मिक जीवनाचे प्रतीक आहे.</p>
                </div>

                <div class="wedding-step-card">
                    <div class="wedding-step-icon"><i class="fas fa-utensils"></i></div>
                    <h3>मातृ भोजन</h3>
                    <p>संस्कारापूर्वी बटूने आपल्या मातेसोबत केलेले शेवटचे कौटुंबिक जेवण, ज्यानंतर गुरुगृही प्रयाण होते.</p>
                </div>

                <div class="wedding-step-card">
                    <div class="wedding-step-icon"><i class="fas fa-om"></i></div>
                    <h3>यज्ञोपवीतधारण</h3>
                    <p>वैदिक परंपरेनुसार तीन सुतांचे 'जानवे' परिधान करणे, जे कर्तव्य आणि ज्ञानाचे प्रतीक आहे.</p>
                </div>

                <div class="wedding-step-card">
                    <div class="wedding-step-icon"><i class="fas fa-microphone-alt"></i></div>
                    <h3>गायत्री मंत्र उपदेश</h3>
                    <p>गुरु शिष्याच्या कानात पवित्र गायत्री मंत्राचा उपदेश करून त्याला विद्याभ्यासास प्रवृत्त करतात.</p>
                </div>

                <div class="wedding-step-card">
                    <div class="wedding-step-icon"><i class="fas fa-hand-holding-heart"></i></div>
                    <h3>भिक्षाटन विधी</h3>
                    <p>शिष्य गुरुच्या आज्ञेनुसार भिक्षा मागतो, ज्यामुळे मनातील अहंकार शमून नम्रता निर्माण होते.</p>
                </div>

                <div class="wedding-step-card">
                    <div class="wedding-step-icon"><i class="fas fa-user-shield"></i></div>
                    <h3>गुरुसेवा व व्रतधारण</h3>
                    <p>ब्रह्मचर्य पालनाची प्रतिज्ञा घेऊन गुरुच्या मार्गदर्शनाखाली ज्ञानार्जन करण्याचा संकल्प करणे.</p>
                </div>

            </div>
        </div>




        <div class="compact-section-wrapper">
            <div class="philosophy-card ritual-rules-card">
                <div class="philosophy-flex">

                    <div class="phi-content-col rules-bg">
                        <div class="content-padding">
                            <h2 class="mini-title"><i class="fas fa-hand-holding-water"></i> महत्त्वाचे नियम</h2>
                            <ul class="ritual-list">
                                <li><i class="fas fa-check"></i> ब्रह्मचर्याचे पालन</li>
                                <li><i class="fas fa-check"></i> सत्य बोलणे, संयम राखणे</li>
                                <li><i class="fas fa-check"></i> गुरुचे वचन पाळणे</li>
                                <li><i class="fas fa-check"></i> स्वाध्याय (स्वतःचा अभ्यास)</li>
                                <li><i class="fas fa-check"></i> प्रातःस्मरण व संध्यावंदन</li>
                            </ul>
                        </div>
                    </div>

                    <div class="phi-content-col meaning-bg">
                        <div class="content-padding">
                            <h2 class="mini-title"><i class="fas fa-lightbulb"></i> आध्यात्मिक अर्थ</h2>
                            <div class="meaning-item">
                                <h4>मन, वाणी, शरीराची शुद्धी</h4>
                                <p>हा संस्कार बटूला शारीरिक आणि मानसिक स्तरावर शुद्ध करून विद्यार्जनासाठी तयार करतो.</p>
                            </div>
                            <div class="meaning-item">
                                <h4>आत्मसाक्षात्काराचा प्रारंभ</h4>
                                <p>गायत्री मंत्राच्या उपदेशासह शिष्याच्या आध्यात्मिक प्रवासाची खरी सुरुवात होते.</p>
                            </div>
                            <div class="meaning-item">
                                <h4>शिष्य आणि गुरु यांचे पवित्र नाते</h4>
                                <p>गुरु शिष्याला अंधारातून प्रकाशाकडे (अज्ञानाकडून ज्ञानाकडे) नेण्याची जबाबदारी घेतात.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

</section>

<?php include 'footer.php'; ?>