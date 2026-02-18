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

    .custom-bullets {
        list-style: none;
        padding-left: 0;
    }

    .custom-bullets li {
        position: relative;
        padding-left: 28px;
        margin-bottom: 12px;
        font-weight: 500;
    }

    .custom-bullets li::before {
        content: "●";
        position: absolute;
        left: 0;
        top: 0;
        color: #d4a017;
        /* change color if needed */
        font-size: 18px;
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
                                <h1 class="pbmit-tbar-title">त्याग करना</h1>
                            </div>
                        </div>
                        <div class="pbmit-breadcrumb">
                            <div class="pbmit-breadcrumb-inner">
                                <span><a title="" href="index1.php" class="home"><span>Home</span></a></span>
                                <span class="sep">-</span>
                                <span><span class="post-root post post-post current-item">त्याग करना</span></span>
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
                    <h3 class="pbmit-title">बलिदान क्या होता है?</h3>
                    <p>
                        धातु 'यज' का अर्थ है पूजा, संगति (एक साथ आना), दान।<br><br>

                        यज्ञ एक ऐसी भेंट (बलिदान) है जो अग्नि के सामने देवताओं का आह्वान करते हुए विशिष्ट मंत्रों का उच्चारण करके की जाती है, जिससे देवताओं, ऋषियों और पूर्वजों को प्रसन्न किया जाता है और जन कल्याण प्राप्त होता है।<br><br>

                        यज्ञ वैदिक परंपरा की पवित्र अग्नि पूजा है। यह अग्नि में आहुति अर्पित करके देवताओं, प्रकृति और ब्रह्मांड के साथ सामंजस्य स्थापित करने का एक तरीका है।<br><br>

                        यज्ञ का उद्देश्य शुद्धिकरण, सकारात्मक ऊर्जा में वृद्धि और कल्याण एवं शांति की प्राप्ति है। यज्ञ मंत्रोच्चार और अनुष्ठानों के माध्यम से संपन्न किया जाता है.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include 'book-now-hindi.php'; ?>

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

                        <h2 class="pbmit-title">वैदिक ग्रंथों से संदर्भ</h2>

                        <div class="samagri-container">
                            <ul class="custom-bullets">
                                <li>ऋग्वेद, यजुर्वेद, सामवेद, अथर्ववेद - चारों वेदों में बलिदान के महत्व का उल्लेख किया गया है।</li>
                                <li>विभिन्न यज्ञों के अनुष्ठान मनुस्मृति, शतपथ ब्राह्मण और कात्यायन श्रौतसूत्र जैसे ग्रंथों में दिए गए हैं।</li>
                                <li>यज्ञ पांच प्रकार के होते हैं — देवयज्ञ, पितृयज्ञ, ऋषियज्ञ, अतिथियज्ञ और भूतयज्ञ।</li>
                            </ul>
                        </div>


                        <br>

                        <h3 class="accent-title">बलिदान का उद्देश्य</h3>

                        <div class="samagri-container">
                            <span class="samagri-box">सृष्टि के संतुलन को बनाए रखना</span>
                            <span class="samagri-box">पर्यावरण शुद्धिकरण</span>
                            <span class="samagri-box">देवी-देवताओं, ऋषियों और पूर्वजों को प्रसन्न करना</span>
                            <span class="samagri-box">व्यक्तिगत और सामाजिक कल्याण</span>
                            <span class="samagri-box">मोक्ष प्राप्ति के लिए ध्यान</span>
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
                            <h2 class="accent-title"><i class="fas fa-fire-alt"></i> बलिदान के मुख्य भाग</h2>

                            <div class="vows-container">

                                <div class="element-tag">
                                    <span class="tag-title">होमकुंड / यज्ञकुंड –</span>
                                    <span class="tag-desc">जहां आग जलाई जाती है।</span>
                                </div>

                                <div class="element-tag">
                                    <span class="tag-title">यज्ञ अग्नि –</span>
                                    <span class="tag-desc">तीन प्रकार: गार्हपत्य, आहवनीय, दक्षिणाग्नि।</span>
                                </div>

                                <div class="element-tag">
                                    <span class="tag-title">हविष्य / बलिदान –</span>
                                    <span class="tag-desc">सजुक घी, समिधा (विशेष लकड़ी), अनाज, औषधीय पौधे।</span>
                                </div>

                                <div class="element-tag">
                                    <span class="tag-title">मंत्रोच्चार –</span>
                                    <span class="tag-desc">ऋषि, यजुह और समा मंत्रों का पाठ।</span>
                                </div>

                                <div class="element-tag">
                                    <span class="tag-title">ऋत्विक –</span>
                                    <span class="tag-desc">पुरोहित वर्ग: होत्रि, अध्वर्यु, उद्दत्त, ब्रह्मा।</span>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="ritual-image-frame">
                            <img src="images/images/mantrache-mahtv.jpg" class="img-fluid rounded-custom shadow-lg" alt="यज्ञाची प्रमुख अंगे">
                            <div class="frame-decoration"></div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <div class="wedding-ritual-section mt-5">
            <h2 class="wedding-section-title text-center mb-5">
                <i class="fas fa-fire"></i>यज्ञ अनुष्ठान की प्रक्रिया और क्रम
            </h2>

            <div class="wedding-steps-grid">

                <div class="wedding-step-card">
                    <div class="wedding-step-icon"><i class="fas fa-bullseye"></i></div>
                    <h3>संकल्प</h3>
                    <p>मुख्य उद्देश्य, लक्ष्य और जिस व्यक्ति के लिए बलिदान किया जा रहा है, उसका नाम बोलकर औपचारिक संकल्प लेना।</p>
                </div>

                <div class="wedding-step-card">
                    <div class="wedding-step-icon"><i class="fas fa-sun"></i></div>
                    <h3>अग्नि प्रज्वलित करना</h3>
                    <p>पवित्र मंत्रों के उच्चारण के साथ अरणी मंथन या शुद्ध कपूर का उपयोग करके बलिदान की अग्नि को विधिपूर्वक जलाना।</p>
                </div>

                <div class="wedding-step-card">
                    <div class="wedding-step-icon"><i class="fas fa-vihara"></i></div>
                    <h3>देवताओं का आह्वान</h3>
                    <p>मंत्रों की मदद से यज्ञ के खास देवताओं का आह्वान। आपकी मदद से यज्ञ में शामिल होने के लिए आपको दिल से आमंत्रित करते हैं।</p>
                </div>

                <div class="wedding-step-card">
                    <div class="wedding-step-icon"><i class="fas fa-mortar-pestle"></i></div>
                    <h3>मंत्रोच्चार के साथ आहुति</h3>
                    <p>अग्नि में स्वाहाकार के साथ हविष्य (सजुक घी, समिधा, अनाज) अर्पित करके देवताओं को संतुष्ट करना।</p>
                </div>

                <div class="wedding-step-card">
                    <div class="wedding-step-icon"><i class="fas fa-sun"></i></div>
                    <h3>समापन</h3>
                    <p>यज्ञ के अंत में दी जाने वाली आखिरी मुख्य आहुति, जो यज्ञ की सफलता और सफलता का प्रतीक है।</p>
                </div>

                <div class="wedding-step-card">
                    <div class="wedding-step-icon"><i class="fas fa-dove"></i></div>
                    <h3>शांति पाठ</h3>
                    <p>यज्ञ के अंत में पूरे ब्रह्मांड में सभी जीवों की खुशी और भलाई के लिए एक सामूहिक प्रार्थना।</p>
                </div>

            </div>
        </div>




        <div class="compact-section-wrapper">
            <div class="philosophy-card ritual-rules-card">
                <div class="philosophy-flex">

                    <div class="phi-content-col rules-bg">
                        <div class="content-padding">
                            <h2 class="mini-title"><i class="fas fa-hand-holding-water"></i>वैदिक दृष्टिकोण से त्याग के लाभ</h2>
                            <ul class="ritual-list">
                                <li><i class="fas fa-check"></i> आध्यात्मिक प्रगति और मोक्ष का मार्ग।</li>
                                <li><i class="fas fa-check"></i> वायुमंडल में मौजूद प्रदूषण नष्ट हो जाता है।</li>
                                <li><i class="fas fa-check"></i> जीवित प्राणियों के कल्याण के लिए ऊर्जा का प्रक्षेपण।</li>
                                <li><i class="fas fa-check"></i> मानसिक और शारीरिक स्वास्थ्य में सुधार। </li>
                                <li><i class="fas fa-check"></i> कर्म शुद्धि और ऋण मुक्ति.</li>
                            </ul><br>
                            <h2 class="mini-title"><i class="fas fa-hand-holding-water"></i>वैदिक महत्व</h2>
                            <ul class="ritual-list">
                                <li><i class="fas fa-check"></i>यज्ञो वै श्रेष्ठतमं कर्म — यज्ञ सबसे अच्छा कर्म है (भगवद्गीता 4.23).</li>
                                <li><i class="fas fa-check"></i> देवता बिना यज्ञ के संतुष्ट नहीं होते.</li>
                                (गीता 3.14)
                            </ul>
                        </div>
                    </div>

                    <div class="phi-content-col meaning-bg">
                        <div class="content-padding">
                            <h2 class="mini-title"><i class="fas fa-lightbulb"></i> यज्ञों के प्रकार (वैदिक काल)</h2>

                            <div class="meaning-item">
                                <h4>नित्य यज्ञ—</h4>
                                <p>प्रतिदिन बलि दी जाती थी (अग्निहोत्र, दर्श पूर्णिमा, अग्रायण)।</p>
                            </div>

                            <div class="meaning-item">
                                <h4>काम्य यज्ञ —</h4>
                                <p>विशिष्ट फलों के लिए (पुत्रकामेष्टि, सर्वकामेष्टि, राजसूय, अश्वमेध)।</p>
                            </div>

                            <div class="meaning-item">
                                <h4>प्रायश्चित्त बलिदान —</h4>
                                <p>पाप से बचने के लिए।</p>
                            </div>

                            <div class="meaning-item">
                                <h4>सामाजिक बलिदान —</h4>
                                <p>लोक कल्याण के लिए (सार्वजनिक सत्यनारायण यज्ञ, रुद्रयज्ञ, दुर्गायज्ञ)।</p>
                            </div>

                        </div>
                    </div>


                </div>
            </div>
        </div>

</section>

<?php include 'hindi/footer.php'; ?>