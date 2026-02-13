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
            <div class="col-md-5 col-lg-5">
                <div class="form-wrp">
                    <form method="post" id="contact-form">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="pbmit-titlee">MAKE AN ENQUIRY</h2>
                            </div>
                            <div class="col-md-12">
                                <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                            </div>
                            <div class="col-md-12">
                                <input type="text" name="transport-type" class="form-control" placeholder="Phone" required="">
                            </div>
                            <div class="col-md-12">
                                <input type="date" name="subject" class="form-control" placeholder="Email" required="">
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="pbmit-btn w-100">
                                    <i class="form-btn-loader fa fa-circle-o-notch fa-spin fa-fw margin-bottom d-none"></i>
                                    Book Your Puja
                                </button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
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
                            अन्नाद्भवन्ति भूतानि पर्जन्यादन्नसंभवः ।
                            यज्ञाद्भवति पर्जन्यो यज्ञः कर्मसमुद्भवः ॥
                        </p>
                        <p class="shlok-meaning">
                            <strong>अर्थ:</strong> संपूर्ण सजीव सृष्टी अन्नावर अवलंबून आहे, अन्नाची निर्मिती पावसापासून होते, पाऊस यज्ञाद्वारे प्राप्त होतो आणि यज्ञ विहित कर्मातून निर्माण होतो.
                        </p>
                    </div>
                    <div class="mantra-icon-right"><i class="fas fa-om"></i></div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6  order-1">
                <img src="images/images/yadnya-karm01.jpg" class="w-100" alt="">

            </div>
            <div class="col-md-6 col-lg-6">
                <div class="service-details">
                    <h3 class="pbmit-title">यज्ञ म्हणजे काय?</h3>
                    <p>‘यज्’ धातूचा अर्थ आहे पूजा, संगति (एकत्र येणे), दान. <br><br>
                        यज्ञ म्हणजे अग्नीसमोर विशिष्ट मंत्रांनी देवतांचे आवाहन करून हविष्य (आहुती) अर्पण करणे, त्यातून देव, ऋषी, पितर यांचे तृप्तीकरण व लोककल्याण साधणे.<br><br>
                        यज्ञ म्हणजे वैदिक परंपरेतील पवित्र अग्निपूजा होय. यामध्ये अग्नीत आहुती अर्पण करून देवता, निसर्ग आणि विश्वाशी समन्वय साधला जातो.<br><br>
                        यज्ञाचा उद्देश शुद्धीकरण, सकारात्मक ऊर्जा वाढवणे, कल्याण व शांती प्राप्त करणे हा आहे. मंत्रोच्चार व विधींच्या माध्यमातून यज्ञ केला जातो.</p>
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
                        <img src="images/images/yadnya-karm02.png" class="img-fluid main-ritual-img" alt="Vedic Ritual">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="principle-content">
                        <h2 class="pbmit-title">वैदिक शास्त्रांतील संदर्भ</h2>
                        <div class="samagri-container">
                            <b>ऋग्वेद, यजुर्वेद, सामवेद, अथर्ववेद — चारही वेदांमध्ये यज्ञाचे महत्त्व सांगितले आहे.</b>
                            <b>मनुस्मृती, शतपथ ब्राह्मण, कात्यायन श्रौतसूत्र या ग्रंथांमध्ये विविध यज्ञांचे विधी दिलेले आहेत.</b>
                            <b> यज्ञामध्ये देवयज्ञ, पितृयज्ञ, ऋषियज्ञ, अतिथियज्ञ, भूतयज्ञ असे पाच प्रकार सांगितले जातात.</b>
                        </div><br>
                        <h3 class="accent-title">यज्ञाचे उद्दिष्ट</h3>
                        <div class="samagri-container">
                            <span class="samagri-box"> सृष्टीचे संतुलन राखणे</span>
                            <span class="samagri-box">पर्यावरण शुद्धीकरण</span>
                            <span class="samagri-box"> देवता, ऋषी, पितर यांचे तृप्तीकरण</span>
                            <span class="samagri-box"> व्यक्तिगत व सामाजिक कल्याण</span>
                            <span class="samagri-box"> मोक्षप्राप्तीसाठी साधना</span>
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
                            <h2 class="accent-title"><i class="fas fa-fire-alt"></i> यज्ञाची प्रमुख अंगे</h2>

                            <div class="ritual-intro-text">
                                <p>वैदिक परंपरेनुसार यज्ञ ही एक अत्यंत शिस्तबद्ध आणि शास्त्रोक्त प्रक्रिया आहे. यज्ञाची पूर्णता होण्यासाठी खालील पाच प्रमुख घटकांचे (अंगांचे) विशेष महत्त्व असते:</p>
                            </div>

                            <div class="vows-container">
                                <div class="element-tag">
                                    <span class="tag-title">होमकुंड / यज्ञकुंड:</span>
                                    <span class="tag-desc">जिथे पवित्र अग्नी प्रज्वलित केला जातो.</span>
                                </div>

                                <div class="element-tag">
                                    <span class="tag-title">यज्ञाग्नि:</span>
                                    <span class="tag-desc">गार्हपत्य, आहवनीय आणि दक्षिणाग्नि हे तीन मुख्य प्रकार.</span>
                                </div>

                                <div class="element-tag">
                                    <span class="tag-title">हविष्य / आहुती:</span>
                                    <span class="tag-desc">साजूक तूप, समिधा, धान्य आणि औषधी वनस्पतींचे अर्पण.</span>
                                </div>

                                <div class="element-tag">
                                    <span class="tag-title">मंत्रोच्चार:</span>
                                    <span class="tag-desc">ऋग्वेद, यजुर्वेद आणि सामवेदातील पवित्र मंत्रांचे पठण.</span>
                                </div>

                                <div class="element-tag">
                                    <span class="tag-title">ऋत्विक (पुरोहित):</span>
                                    <span class="tag-desc">होतृ, अध्वर्यु, उद्गाता आणि ब्रह्मा या चतुरंगी पुरोहितांचे मार्गदर्शन.</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="ritual-image-frame">
                            <img src="images/images/mantrache-mahtv.png" class="img-fluid rounded-custom shadow-lg" alt="यज्ञाची प्रमुख अंगे">
                            <div class="frame-decoration"></div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <div class="wedding-ritual-section mt-5">
            <h2 class="wedding-section-title text-center mb-5">
                <i class="fas fa-fire"></i> यज्ञ विधीची प्रक्रिया आणि क्रम (Yagna Process)
            </h2>

            <div class="wedding-steps-grid">

                <div class="wedding-step-card">
                    <div class="wedding-step-icon"><i class="fas fa-bullseye"></i></div>
                    <h3>संकल्प</h3>
                    <p>यज्ञाचा मुख्य हेतू, उद्देश आणि ज्यांच्यासाठी यज्ञ केला जात आहे, त्यांचे नाव उच्चारून विधीवत संकल्प करणे.</p>
                </div>

                <div class="wedding-step-card">
                    <div class="wedding-step-icon"><i class="fas fa-igniting"></i></div>
                    <h3>अग्निप्रज्वलन</h3>
                    <p>पवित्र मंत्रांच्या पाठासह अरणी मंथन किंवा शुद्ध कापूर वापरून विधीपूर्वक यज्ञाचा अग्नी जागवणे.</p>
                </div>

                <div class="wedding-step-card">
                    <div class="wedding-step-icon"><i class="fas fa-vihara"></i></div>
                    <h3>देवता आवाहन</h3>
                    <p>यज्ञाच्या विशिष्ट अधिष्ठाता देवतांना मंत्रांच्या साह्याने यज्ञात उपस्थित राहण्यासाठी सप्रेम आमंत्रण देणे.</p>
                </div>

                <div class="wedding-step-card">
                    <div class="wedding-step-icon"><i class="fas fa-mortar-pestle"></i></div>
                    <h3>मंत्रोच्चारासह आहुती</h3>
                    <p>स्वाहाकारासह हविष्य (साजूक तूप, समिधा, धान्य) अग्नीमध्ये अर्पण करून देवतांना तृप्त करणे.</p>
                </div>

                <div class="wedding-step-card">
                    <div class="wedding-step-icon"><i class="fas fa-sun"></i></div>
                    <h3>पूर्णाहुती</h3>
                    <p>यज्ञाची सांगता म्हणून दिलेली अंतिम मुख्य आहुती, जी यज्ञाच्या यशाचे आणि फलप्राप्तीचे प्रतीक आहे.</p>
                </div>

                <div class="wedding-step-card">
                    <div class="wedding-step-icon"><i class="fas fa-dove"></i></div>
                    <h3>शांतिपाठ</h3>
                    <p>यज्ञाच्या अखेरीस संपूर्ण विश्वातील प्राणिमात्रांच्या सुखासाठी आणि कल्याणासाठी केलेली सामूहिक प्रार्थना.</p>
                </div>

            </div>
        </div>




        <div class="compact-section-wrapper">
            <div class="philosophy-card ritual-rules-card">
                <div class="philosophy-flex">

                    <div class="phi-content-col rules-bg">
                        <div class="content-padding">
                            <h2 class="mini-title"><i class="fas fa-hand-holding-water"></i>यज्ञाचे फायदे (वैदिक दृष्टीने)</h2>
                            <ul class="ritual-list">
                                <li><i class="fas fa-check"></i> आध्यात्मिक प्रगती व मोक्षमार्ग.</li>
                                <li><i class="fas fa-check"></i> वातावरणातील दूषितता नष्ट होते.</li>
                                <li><i class="fas fa-check"></i>सजीवांच्या कल्याणासाठी ऊर्जेचे प्रक्षेपण.</li>
                                <li><i class="fas fa-check"></i> मानसिक, शारीरिक स्वास्थ्याची वृद्धी.</li>
                                <li><i class="fas fa-check"></i> कर्मशुद्धी व ऋणमोचन.</li>
                            </ul><br>
                            <h2 class="mini-title"><i class="fas fa-hand-holding-water"></i>वैदिक महत्त्व</h2>
                            <ul class="ritual-list">
                                <li><i class="fas fa-check"></i>यज्ञो वै श्रेष्ठतमं कर्म — यज्ञ हे श्रेष्ठ कर्म आहे (भगवद्गीता ४.२३).</li>
                                <li><i class="fas fa-check"></i> यज्ञाशिवाय देवता संतुष्ट होत नाहीत.</li>
                                <li><i class="fas fa-check"></i>यज्ञातूनच वर्षा, अन्नवृद्धी, सृष्टीचक्र चालते (गीता ३.१४).</li>
                            </ul>
                        </div>
                    </div>

                    <div class="phi-content-col meaning-bg">
                        <div class="content-padding">
                            <h2 class="mini-title"><i class="fas fa-lightbulb"></i> यज्ञांचे प्रकार (वैदिक काळातील)</h2>
                            <div class="meaning-item">
                                <h4>नित्य यज्ञ—</h4>
                                <p>दररोज करायचे यज्ञ (अग्निहोत्र, दर्शपौर्णमास, आग्रयण).</p>
                            </div>
                            <div class="meaning-item">
                                <h4>काम्य यज्ञ —</h4>
                                <p>विशिष्ट फलासाठी (पुत्रकामेष्ठी, सर्वकामेष्टी, राजसूय, अश्वमेध).</p>
                            </div>
                            <div class="meaning-item">
                                <h4>प्रायश्चित्त यज्ञ —</h4>
                                <p>पापपरिहारासाठी.</p>
                            </div>
                            <div class="meaning-item">
                                <h4>सामाजिक यज्ञ —</h4>
                                <p>जनकल्याणासाठी (सार्वजनिक सत्यनारायण यज्ञ, रुद्रयज्ञ, दुर्गायज्ञ).</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

</section>

<?php include 'footer.php'; ?>