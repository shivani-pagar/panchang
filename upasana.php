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

    /* Table Wrapper */
    .vedic-table-wrapper {
        background: #ffffff;
        border-radius: 15px;
        padding: 10px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
    }

    .vedic-no-border-table {
        width: 100%;
        border-collapse: collapse;
        border: none;
        /* Borders Removed */
    }

    /* Header Styling */
    .vedic-no-border-table thead th {
        background-color: #FFF3E0;
        color: #8B4513;
        padding: 15px;
        text-align: left;
        font-size: 1.1rem;
        font-weight: 800;
        border-radius: 8px;
        border: none;
    }

    .vedic-no-border-table thead th i {
        margin-right: 8px;
        color: #FF9800;
    }

    /* Rows Styling */
    .vedic-no-border-table tbody td {
        padding: 12px 15px;
        color: #444;
        font-size: 1rem;
        border-bottom: 1px solid #f1f1f1;
        /* Subtle divider instead of border */
    }

    .vedic-no-border-table tbody tr:last-child td {
        border-bottom: none;
    }

    .vedic-no-border-table tbody td strong {
        color: #E65100;
        font-weight: 700;
    }

    /* Hover Effect for Professional Feel */
    .vedic-no-border-table tbody tr {
        transition: all 0.2s ease;
    }

    .vedic-no-border-table tbody tr:hover {
        background-color: #fdf5e6;
        transform: scale(1.01);
    }

    /* Adjustments for Image Frame on Left */
    .rounded-custom {
        border-radius: 20px;
        border-left: 8px solid #FF9800;
    }

    /* Mobile Responsive */
    @media (max-width: 991px) {
        .ritual-info-group {
            margin-top: 40px;
            padding-left: 0 !important;
        }
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
                                <h1 class="pbmit-tbar-title">उपासन</h1>
                            </div>
                        </div>
                        <div class="pbmit-breadcrumb">
                            <div class="pbmit-breadcrumb-inner">
                                <span><a title="" href="index.php" class="home"><span>Home</span></a></span>
                                <span class="sep">-</span>
                                <span><span class="post-root post post-post current-item">उपासन</span></span>
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
                            सर्वधर्मान्परित्यज्य मामेकं शरणं व्रज ।
                            अहं त्वां सर्वपापेभ्यो मोक्षयिष्यामि मा शुचः ॥
                        </p>
                        <p class="shlok-meaning">
                            अर्थ: सर्व धर्मांचा (कर्तव्यांचा आणि बंधनांचा) आश्रय सोडून तू केवळ मला एकालाच शरण ये. मी तुला सर्व पापांतून मुक्त करीन, तू शोक करू नकोस.
                        </p>
                    </div>
                    <div class="mantra-icon-right"><i class="fas fa-om"></i></div>
                </div>
            </div>
            <div class="service-page-infobox">
                <div class="row align-items-center">

                    <div class="col-lg-6">
                        <div class="principle-content">
                            <h2 class="accent-title">वैदिक उपासना म्हणजे काय?</h2><br>
                            <p>वैदिक उपासना म्हणजे वेदांमध्ये सांगितलेल्या पद्धतीने देवतांची साधना, पूजा, यज्ञ, जप, ध्यान, स्तुती इ. करणे
                                ही उपासना प्राचीन ऋषी, मुनि, यज्ञकुंड, मंत्र, अग्निहोत्र यांच्या माध्यमातून केली जायची आणि तिचा मुख्य उद्देश होता ईश्वराशी एकरूप होणे, प्रकृतीचा समतोल राखणे व चित्तशुद्धी साधणे. <br> <br>
                                वैदिक उपासना म्हणजे <b>वेदांमध्ये सांगितलेल्या मंत्र, यज्ञ आणि विधींमार्फत ईश्वर व निसर्गशक्तींची उपासना </b> करणे. या उपासनेचा उद्देश <b>मनःशुद्धी, आत्मिक उन्नती आणि जीवनातील संतुलन</b> साधणे हा आहे. <br><br>
                                वैदिक उपासना ही <b>श्रद्धा, शिस्त आणि साधनेवर आधारित प्राचीन आध्यात्मिक</b> परंपरा आहे.</p>
                            <div class="samagri-container">

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="image-wrapper">
                            <img src="images/images/upasana01.png" class="img-fluid main-ritual-img" alt="Vedic Ritual">
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
                        <img src="images/images/mantrache-mahtv.png" class="img-fluid main-ritual-img" alt="Vedic Ritual">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="principle-content">
                        <h2 class="accent-title">वैदिक उपासनेची वैशिष्ट्ये</h2>
                        <p>वैदिक उपासना ही मंत्रोच्चार, यज्ञ, हवन आणि शास्त्रानुसार केलेल्या विधींवर आधारित असते. ती निसर्ग, देवता आणि ब्रह्म यांच्या पूजनातून मन, शरीर आणि वातावरण शुद्ध करण्यावर भर देते. या उपासनेत श्रद्धा, शिस्त आणि आध्यात्मिक उन्नती यांना विशेष महत्त्व दिले जाते.</p>
                        <div class="samagri-container">
                            <span class="samagri-box"> 🧘‍♂️ मूर्तीपूजेला कमी महत्त्व (यज्ञ, अग्निहोत्र, मंत्र महत्त्वाचे)</span>
                            <span class="samagri-box">🧠ऋग्वेद, यजुर्वेद, सामवेद, अथर्ववेदातील मंत्रांचा उपयोग</span>
                            <span class="samagri-box">🌱 अग्नी (अग्निहोत्र), सोम, इंद्र, वरुण, मित्र, सूर्य, वायु, अश्विनीकुमार इ. देवतांची उपासना</span>
                            <span class="samagri-box">🌱 श्रुती (ऐकलेले ज्ञान), स्मृती (लिहिलेल्या नियम) आणि संहिता यांचा आधार</span>
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
                            <h2 class="accent-title">वैदिक उपासनेचे प्रकार</h2>

                            <div class="saptpadi-intro-text">
                                <h3>यज्ञ (अग्निहोत्र, होम)</h3>
                            </div>

                            <div class="vows-container">
                                <span class=""><i class=""></i>अग्नीमध्ये हविष्य (धान्य, तूप, समिधा) समर्पण करून देवतेला आह्वान करणे.</span>
                                <span class=""><i class=""></i><b> सामूहिक किंवा व्यक्तिगत फलांसाठी – </b> आरोग्य, पर्जन्य, समृद्धी, शांती.</span>
                            </div>

                            <div class="saptpadi-intro-text">
                                <h3>मंत्रजप व स्तुती</h3>
                            </div>

                            <div class="vows-container">
                                <span class=""><i class=""></i>विशिष्ट मंत्रांचा जप करून मनःशांती, सकारात्मक ऊर्जा मिळवणे.</span>
                                <span class=""><i class=""></i><b>उदा. </b>गायत्री मंत्र, रुद्राष्टाध्यायी, पुरुषसूक्त, श्रीसूक्त..</span>
                            </div>

                            <div class="saptpadi-intro-text">
                                <h3>ध्यान व तप</h3>
                            </div>

                            <div class="vows-container">
                                <span class=""><i class=""></i>एकाग्र चित्ताने देवतेवर ध्यान करणे, आत्मशुद्धीसाठी तप (संयम, उपवास).</span>
                            </div>

                            <div class="saptpadi-intro-text">
                                <h3>सामवेद संगीतातील उपासना</h3>
                            </div>

                            <div class="vows-container">
                                <span class=""><i class=""></i>सामगान (सामवेदातील संगीत स्वरूपातील स्तुती) – देवतेच्या प्रसन्नतेसाठी.</span>
                            </div>

                            <div class="saptpadi-intro-text">
                                <h3>व्रत व अनुशासन</h3>
                            </div>

                            <div class="vows-container">
                                <span class=""><i class=""></i>विशेष तिथी, नक्षत्र, ऋतू यानुसार उपवास, संयम, नियमितता राखणे.</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="saptpadi-image-frame">
                            <img src="images/images/upasana03.jpg" class="img-fluid rounded-custom shadow-lg" alt="सप्तपदी विधी">
                            <div class="frame-decoration"></div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <div class="content-section mt-5">
            <h2 class="section-title text-center mb-5"><i class="fas fa-scroll"></i> आध्यात्मिक मार्ग आणि श्रद्धा</h2>
            <div class="puja-steps-grid">

                <div class="step-card">
                    <div class="step-icon"><i class="fas fa-pray"></i></div>
                    <h3>साधकांचा मार्गदर्शन</h3>
                    <p>साधकांसाठी एक गुरू किंवा मार्गदर्शक महत्त्वाचा असतो. गुरु त्या व्यक्तीला आध्यात्मिक मार्गदर्शन, साधना, आणि जीवनाचा उच्चतम अर्थ समजावतो. त्यांचा आध्यात्मिक ज्ञान आणि दृष्टिकोन साधकासाठी जीवनाचे अधिक गहिरा अनुभव देणारा असतो..</p>
                </div>

                <div class="step-card">
                    <div class="step-icon"><i class="fas fa-place-of-worship"></i></div>
                    <h3>भक्ती आणि विश्वास</h3>
                    <p>भक्ती ही आध्यात्मिक जीवनाची एक महत्त्वाची बाजू आहे. आपण जेव्हा एका उच्च शक्तीवर, देवतेवर किंवा ब्रह्मावर विश्वास ठेवतो आणि त्याच्याशी आपल्या हृदयाच्या गोडीने जोडले जातो, तेव्हा जीवन अधिक शांत आणि स्थिर होऊ शकते..</p>
                </div>


            </div>
        </div>

        <br><br>
        <section class="saptpadi-dynamic-section">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-5">
                        <div class="saptpadi-image-frame">
                            <img src="images/images/mantrache-mahtv.png" class="img-fluid rounded-custom shadow-lg" alt="आध्यात्मिक जीवन">
                            <div class="frame-decoration"></div>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="ritual-info-group ps-lg-4">
                            <h2 class="accent-title mb-4">यज्ञातील प्रमुख देवता आणि त्यांचे फळ</h2>

                            <div class="vedic-table-wrapper">
                                <table class="vedic-no-border-table">
                                    <thead>
                                        <tr>
                                            <th><i class="fas fa-om"></i> देवता</th>
                                            <th><i class="fas fa-bullseye"></i> उद्देश / फल</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><strong>अग्नी</strong></td>
                                            <td>सर्व देवतांपर्यंत पोचणारा यज्ञाचा माध्यम</td>
                                        </tr>
                                        <tr>
                                            <td><strong>इंद्र</strong></td>
                                            <td>विजयी शक्ती, पर्जन्य, सामर्थ्य</td>
                                        </tr>
                                        <tr>
                                            <td><strong>वरुण</strong></td>
                                            <td>पाप क्षमा, जलशक्ती, नैतिक शुद्धता</td>
                                        </tr>
                                        <tr>
                                            <td><strong>मित्र</strong></td>
                                            <td>सौहार्द, स्नेह, मैत्री</td>
                                        </tr>
                                        <tr>
                                            <td><strong>सूर्य</strong></td>
                                            <td>आरोग्य, तेज, बुद्धी, प्रकाश</td>
                                        </tr>
                                        <tr>
                                            <td><strong>वायु</strong></td>
                                            <td>प्राणशक्ती, जीवनशक्ती</td>
                                        </tr>
                                        <tr>
                                            <td><strong>अश्विनीकुमार</strong></td>
                                            <td>आरोग्य, औषधोपचार, तारुण्य</td>
                                        </tr>
                                        <tr>
                                            <td><strong>सोम</strong></td>
                                            <td>आनंद, अमृत, उर्जितता</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <div class="content-section mt-5">
            <h2 class="section-title text-center mb-5"><i class="fas fa-scroll"></i> ग्रंथ व स्रोत</h2>
            <div class="puja-steps-grid">

                <div class="step-card">
                    <div class="step-icon"><i class="fas fa-pray"></i></div>
                    <h3>वैदिक उपासनेतील मुख्य ग्रंथ व स्रोत</h3>
                    <div class="samagri-container" style="display: flex; flex-wrap: wrap; justify-content: center;">
                        <span class="samagri-box"> चित्तशुद्धी <br> (मनाची स्वच्छता)</span>
                        <span class="samagri-box"> धर्म <br> (कर्तव्यपालन)</span>
                        <span class="samagri-box"> अर्थ <br> (समृद्धी, समाजकल्याण)</span>
                        <span class="samagri-box"> काम  (शुद्ध इच्छाशक्ती)</span>
                        <span class="samagri-box"> मोक्ष  (आध्यात्मिक मुक्ती)</span>
                    </div>
                </div>

                <div class="step-card">
                    <div class="step-icon"><i class="fas fa-place-of-worship"></i></div>
                    <h3>वैदिक उपासनेतील मुख्य ग्रंथ व स्रोत</h3>
                    <div class="samagri-container" style="display: flex; flex-wrap: wrap; justify-content: center;">
                        <span class="samagri-box"> ऋग्वेद संहिता</span>
                        <span class="samagri-box"> यजुर्वेद संहिता</span>
                        <span class="samagri-box"> सामवेद संहिता</span>
                        <span class="samagri-box">अथर्ववेद संहिता</span>
                        <span class="samagri-box"> ब्राह्मण ग्रंथ</span>
                        <span class="samagri-box"> आरण्यक व उपनिषद</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>

    <section class="saptpadi-dynamic-section">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6">
                    <div class="ritual-info-group">
                        <h2 class="accent-title">आध्यात्मिक जीवन कसे सुरू करावे?</h2>

                        <div class="saptpadi-intro-text">
                            <h3>ध्यानाचा अभ्यास करा</h3>
                        </div>

                        <div class="vows-container">
                            <span class=""><i class=""></i>रोज काही मिनिटे शांतपणे बसून ध्यान करा. आपल्या श्वासावर लक्ष केंद्रित करा. मन शांत होईल आणि अंतर्मुख होण्याची प्रक्रिया सुरू होईल.</span>
                            <span class=""><i></i> आध्यात्मिक जीवन म्हणजे आपल्या अंतर्मनाशी, आत्म्याशी आणि ब्रह्माशी जोडणारी एक गहरी प्रक्रिया आहे. हे जीवन केवळ धर्मिक वर्तन, पूजा किंवा आचारधर्माशी संबंधित नाही, तर आपल्या जीवनाच्या प्रत्येक क्षेत्रात शांती, प्रेम, धैर्य आणि समजूतदारपणाने वावरणे हे त्याचे मुख्य उद्दिष्ट आहे. आध्यात्मिक जीवन व्यक्तीला त्याच्या आंतरिक शांतीची, मानसिक स्पष्टतेची आणि उच्चतम साध्याची दिशा दर्शवते.</span>
                        </div>

                        <div class="saptpadi-intro-text">
                            <h3>पुजा आणि प्रार्थना करा</h3>
                        </div>

                        <div class="vows-container">
                            <span class=""><i class=""></i>दिवसभरात आपली धार्मिक पूजा किंवा प्रार्थना साधा. आपल्या श्रद्धेप्रमाणे देवतेची पूजा करा आणि आपले मन शांतीने भरून टाका.</span>
                        </div>

                        <div class="saptpadi-intro-text">
                            <h3>पुस्तकांचा अभ्यास करा</h3>
                        </div>

                        <div class="vows-container">
                            <span class=""><i class=""></i>आध्यात्मिक ग्रंथांचा अभ्यास करा. भगवद गीता, उपनिषद, वेद, बायबल, कुराण, इत्यादी या ग्रंथांमध्ये जीवनाचे तात्त्विक उद्देश आणि मार्गदर्शन आहे.</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="saptpadi-image-frame">
                        <img src="images/images/upay02.webp" class="img-fluid rounded-custom shadow-lg" alt="सप्तपदी विधी">
                        <div class="frame-decoration"></div>
                    </div>
                </div>

            </div>
            <div class="content-section mt-5">
                <h2 class="section-title text-center mb-5"><i class="fas fa-scroll"></i> आध्यात्मिक नैतिकता आणि गुरूची शोध</h2>
                <div class="puja-steps-grid">
                    <div class="step-card">
                        <div class="step-icon"><i class="fas fa-pray"></i></div>
                        <h3>नैतिकता आणि करुणा पाळा</h3>
                        <p>आपल्या जीवनात सत्य, अहिंसा, करुणा आणि प्रेम याचे पालन करा. हे आपल्याला दुसऱ्या व्यक्तींच्या भावनांचा आदर करायला शिकवते.</p>
                    </div>

                    <div class="step-card">
                        <div class="step-icon"><i class="fas fa-place-of-worship"></i></div>
                        <h3>गुरूची शोध</h3>
                        <p>योग्य मार्गदर्शन घेण्यासाठी एक गुरू किंवा मार्गदर्शक शोधा. गुरुच्या उपस्थितीमुळे आपल्याला आध्यात्मिक जीवनाची दिशा मिळते.</p>
                    </div>
                </div>
            </div><br><br>
        </div>




    </section>

    <?php include 'footer.php'; ?>