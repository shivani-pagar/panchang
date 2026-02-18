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
                                <h1 class="pbmit-tbar-title">आध्यात्मिकता</h1>
                            </div>
                        </div>
                        <div class="pbmit-breadcrumb">
                            <div class="pbmit-breadcrumb-inner">
                                <span><a title="" href="index1.php" class="home"><span>Home</span></a></span>
                                <span class="sep">-</span>
                                <span><span class="post-root post post-post current-item">आध्यात्मिकता</span></span>
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
                            अनन्तं कृष्णगोपालं जपतो नास्ति पातकम् ।
                            गवां कोटिप्रदानस्य अश्वमेधशतस्य च ॥ ५॥
                            कन्यादानसहस्राणां फलं प्राप्नोति मानवः ।
                        </p>
                        <p class="shlok-meaning">
                            अर्थ: अनंत अशा भगवान श्रीकृष्ण-गोपालाच्या नामाचा जप करणाऱ्या मनुष्याला कोणत्याही पापाची बाधा होत नाही. केवळ या नामाच्या जपाने मनुष्याला एक कोटी गायींचे दान, शंभर अश्वमेध यज्ञ आणि हजारो कन्यादान केल्याने जे महापुण्य मिळते, ते सर्व फळ प्राप्त होते.
                        </p>
                    </div>
                    <div class="mantra-icon-right"><i class="fas fa-om"></i></div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6  order-1">
                <img src="images/images/adhyatm01.webp" class="w-100" alt="">

            </div>
            <div class="col-md-6 col-lg-6">
                <div class="service-details">
                    <h2 style="font-size: 34px" class="sanskrit-shlok">
                        आध्यात्मिक जीवन क्या है?</h2>

                    <div style="line-height: 1.9; font-size: 17px" class="ritual-intro-text  ">
                        <p>आध्यात्मिक जीवन हमारे अंतर्मन, आत्मा और ब्रह्म से जुड़ने की एक गहन प्रक्रिया है। यह जीवन केवल धार्मिक आचरण, पूजा या नैतिकता तक सीमित नहीं है, बल्कि इसका मुख्य उद्देश्य जीवन के हर पहलू में शांति, प्रेम, साहस और समझ के साथ जीना है। आध्यात्मिक जीवन व्यक्ति को उसकी आंतरिक शांति, मानसिक स्पष्टता और उच्च उद्देश्य की दिशा दिखाता है।
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
                        <img src="images/images/upay02.webp" class="img-fluid main-ritual-img" alt="Vedic Ritual">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="principle-content">
                        <h2 class="accent-title">आध्यात्मिक जीवन का महत्व</h2>
                        <p>हमारे शारीरिक, मानसिक और भावनात्मक स्वास्थ्य के लिए आध्यात्मिक जीवन अत्यंत महत्वपूर्ण है। जीवन में उच्च उद्देश्य की प्राप्ति और अपनी आंतरिक शक्ति को जागृत करने के लिए प्रत्येक व्यक्ति को आध्यात्मिक मार्गदर्शन की आवश्यकता होती है। यह जीवन केवल सुख के क्षणों का पीछा करने के बारे में नहीं है, बल्कि जीवन के सार, दिव्यता और सत्य के रहस्य की ओर एक शाश्वत यात्रा है।</p>
                        <div class="samagri-container">
                            <span class="samagri-box"> 🧘‍♂️ 🧘‍♂️ अंदरूनी शक्ति की जागरूकता: आध्यात्मिक जीवन व्यक्ति की अंदरूनी शक्ति को जगाकर आत्म-विकास करता है। </span>
                            <span class="samagri-box">🧠 मेंटल और इमोशनल बैलेंस: स्पिरिचुअलिटी मन को शांति देती है और स्ट्रेस और नेगेटिविटी कम करती है।</span>
                            <span class="samagri-box">🌱 जीवन का बड़ा मकसद: यह जीवन सिर्फ़ खुशी तक सीमित नहीं है, बल्कि यह सत्य, दर्शन और ईश्वरीय अर्थ को समझने में मदद करता है।</span>
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

                            <h2 class="accent-title">आध्यात्मिक जीवन के मुख्य सिद्धांत</h2>

                            <div class="saptpadi-intro-text">
                                <h3>स्व-अनुसंधान और स्व-ज्ञान</h3>
                            </div>

                            <div class="vows-container">
                                <span><i class="fas fa-search"></i> आध्यात्मिक जीवन का पहला चरण आत्म-अन्वेषण है। इसमें व्यक्ति अपने विचारों, भावनाओं और व्यवहार का विश्लेषण करता है। आत्म-ज्ञान प्राप्त करने के लिए वह ध्यान, आध्यात्मिक विकास और अंतर्दृष्टि का अभ्यास करता है।</span>
                                <span><i class="fas fa-lightbulb"></i> इससे उसे अपने अन्य विचारों से खुद को मुक्त करने का मौका मिलता है।</span>
                            </div>

                            <div class="saptpadi-intro-text">
                                <h3>ध्यान और साधना</h3>
                            </div>

                            <div class="vows-container">
                                <span><i class="fas fa-om"></i> ध्यान और साधना आध्यात्मिक जीवन के प्रमुख अभ्यास हैं। ध्यान में एक निश्चित मुद्रा में शांति से बैठना, मन को नियंत्रित करना और आंतरिक शांति का अनुभव करना शामिल है।</span>
                                <span><i class="fas fa-praying-hands"></i> साधना एक नियमित आध्यात्मिक अभ्यास है जैसे प्रार्थना, मंत्रोच्चार, ध्यान आदि, जो व्यक्ति की मनःस्थिति में सुधार करता है और दार्शनिक ज्ञान की प्राप्ति में सहायक होता है।</span>
                            </div>

                            <div class="saptpadi-intro-text">
                                <h3>नैतिकता और परोपकार</h3>
                            </div>

                            <div class="vows-container">
                                <span><i class="fas fa-heart"></i> आध्यात्मिक जीवन में नैतिक मूल्यों की महत्वपूर्ण भूमिका होती है। सत्य, अहिंसा, प्रेम, करुणा और अन्य पवित्र गुणों का व्यक्ति के जीवन में पूर्णतः प्रकटीकरण होना आवश्यक है।</span>
                                <span><i class="fas fa-hands-helping"></i> अपना जीवन दान-पुण्य और मानवता की सेवा में समर्पित करना एक अत्यंत आध्यात्मिक प्रक्रिया है।</span>
                            </div>

                        </div>
                    </div>


                    <div class="col-lg-6">
                        <div class="saptpadi-image-frame">
                            <img src="images/images/adhyatm03.jpg" class="img-fluid rounded-custom shadow-lg" alt="सप्तपदी विधी">
                            <div class="frame-decoration"></div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <div class="content-section mt-5">
            <h2 class="section-title text-center mb-5"><i class="fas fa-scroll"></i> आध्यात्मिक मार्ग और आस्था</h2>
            <div class="puja-steps-grid">

                <div class="step-card">
                    <div class="step-icon"><i class="fas fa-pray"></i></div>
                    <h3>साधकों का मार्गदर्शन</h3>
                    <p>
                        साधकों के लिए गुरु या मार्गदर्शक का विशेष महत्व होता है। गुरु आध्यात्मिक मार्गदर्शन, अभ्यास और जीवन का सर्वोच्च अर्थ प्रदान करते हैं। उनका आध्यात्मिक ज्ञान और दृष्टिकोण साधक को जीवन का गहरा अनुभव प्रदान करता है।
                    </p>
                </div>

                <div class="step-card">
                    <div class="step-icon"><i class="fas fa-place-of-worship"></i></div>
                    <h3>भक्ति और आस्था</h3>
                    <p>
                        भक्ति आध्यात्मिक जीवन का एक महत्वपूर्ण पहलू है। जब हम किसी उच्च शक्ति, देवता या ब्रह्म में विश्वास रखते हैं और अपने हृदय की मधुरता से उससे जुड़ते हैं, तो जीवन अधिक शांतिपूर्ण और स्थिर हो सकता है।
                    </p>
                </div>



            </div>
        </div>

        <br><br>
        <section class="saptpadi-dynamic-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="saptpadi-image-frame">
                            <img src="images/images/adhyatm02.webp" class="img-fluid rounded-custom shadow-lg" alt="आध्यात्मिक जीवन">
                            <div class="frame-decoration"></div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="ritual-info-group">
                            <h2 class="accent-title">आध्यात्मिक जीवन के लाभ</h2>

                            <div class="saptpadi-intro-text">
                                <h3>आध्यात्मिक शांति और संतोष</h3>
                            </div>

                            <div class="vows-container">
                                <span><i class="fas fa-fire-alt me-2"></i>
                                    आध्यात्मिक जीवन व्यक्ति को आंतरिक शांति प्रदान करता है। जब हम जीवन के सर्वोच्च उद्देश्य को समझ लेते हैं, तो हम अनावश्यक चिंताओं और दैनिक तनावों से मुक्त हो जाते हैं।
                                </span>
                            </div>

                            <div class="saptpadi-intro-text">
                                <h3>मानसिक स्पष्टता और सकारात्मक दृष्टिकोण</h3>
                            </div>

                            <div class="vows-container">
                                <span><i class="fas fa-balance-scale me-2"></i>
                                    नियमित अभ्यास और ध्यान से मानसिक स्पष्टता बढ़ती है।
                                </span>
                                <span><i class="fas fa-smile-beam me-2"></i>
                                    जीवन की कठिन परिस्थितियों में भी शांत और सकारात्मक दृष्टिकोण बनाए रखने में सहायता मिलती है।
                                </span>
                            </div>

                            <div class="saptpadi-intro-text">
                                <h3>सकारात्मक ऊर्जा</h3>
                            </div>

                            <div class="vows-container">
                                <span><i class="fas fa-heart me-2"></i>
                                    आध्यात्मिक जीवन जीने वाला व्यक्ति सकारात्मक ऊर्जा और आध्यात्मिक शक्ति का अनुभव करता है।
                                </span>
                                <span><i class="fas fa-smile-beam me-2"></i>
                                    इसका प्रभाव उसके आसपास के लोगों पर भी सकारात्मक रूप से पड़ता है।
                                </span>
                            </div>

                        </div>
                    </div>




                </div>
            </div>
        </section>

        <div class="content-section mt-5">
            <h2 class="section-title text-center mb-5"><i class="fas fa-scroll"></i> आध्यात्मिक मार्ग और आस्था</h2>
            <div class="puja-steps-grid">

                <div class="step-card">
                    <div class="step-icon"><i class="fas fa-heartbeat"></i></div>
                    <h3>स्वास्थ्य</h3>
                    <p>
                        आध्यात्मिक जीवन मानसिक और शारीरिक स्वास्थ्य को बेहतर बनाने में महत्वपूर्ण भूमिका निभाता है। उचित ध्यान, योग और साधना शरीर और मन की स्थिति में सुधार लाते हैं।
                    </p>
                </div>

                <div class="step-card">
                    <div class="step-icon"><i class="fas fa-hands-helping"></i></div>
                    <h3>रिश्तों में सुधार</h3>
                    <p>
                        आध्यात्मिक जीवन के माध्यम से सकारात्मक दृष्टिकोण प्राप्त करने से हमारे रिश्ते बेहतर होते हैं। मन और आत्मा की शांति हमें अन्य लोगों के साथ प्रेम और सहयोग विकसित करने में मदद करती है।
                    </p>
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
                        <h2 class="accent-title">आध्यात्मिक जीवन की शुरुआत कैसे करें?</h2>

                        <div class="saptpadi-intro-text">
                            <h3>ध्यान का अभ्यास करें</h3>
                        </div>

                        <div class="vows-container">
                            <span><i class="fas fa-om me-2"></i>
                                प्रतिदिन कुछ मिनटों के लिए शांतिपूर्वक बैठें और ध्यान करें। अपनी सांसों पर ध्यान केंद्रित करें। मन शांत हो जाएगा और आत्मनिरीक्षण की प्रक्रिया शुरू हो जाएगी।
                            </span>
                            <span><i class="fas fa-lightbulb me-2"></i>
                                आध्यात्मिक जीवन हमारे अंतर्मन, आत्मा और ब्रह्म से जुड़ने की एक गहन प्रक्रिया है। यह जीवन केवल धार्मिक आचरण, पूजा या नैतिकता तक सीमित नहीं है, बल्कि इसका मुख्य उद्देश्य जीवन के हर पहलू में शांति, प्रेम, साहस और समझ के साथ जीना है। आध्यात्मिक जीवन व्यक्ति को उसकी आंतरिक शांति, मानसिक स्पष्टता और उच्च उद्देश्य की दिशा दिखाता है।
                            </span>
                        </div>

                        <div class="saptpadi-intro-text">
                            <h3>पूजा और प्रार्थना करें</h3>
                        </div>

                        <div class="vows-container">
                            <span><i class="fas fa-pray me-2"></i>
                                दिनभर अपनी धार्मिक पूजा-अर्चना करें। अपनी आस्था के अनुसार देवता की आराधना करें और अपने मन को शांति से भरें।
                            </span>
                        </div>

                        <div class="saptpadi-intro-text">
                            <h3>पुस्तकों का अध्ययन करें</h3>
                        </div>

                        <div class="vows-container">
                            <span><i class="fas fa-book me-2"></i>
                                आध्यात्मिक ग्रंथों का अध्ययन करें — भगवद् गीता, उपनिषद, वेद, बाइबिल, कुरान आदि। इन ग्रंथों में जीवन का दार्शनिक उद्देश्य और मार्गदर्शन निहित है।
                            </span>
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
                <h2 class="section-title text-center mb-5"><i class="fas fa-scroll"></i> आध्यात्मिक नैतिकता और गुरु की खोज</h2>
                <div class="puja-steps-grid">
                    <div class="step-card">
                        <div class="step-icon"><i class="fas fa-pray"></i></div>
                        <h3>नैतिकता और करुणा का पालन करें।</h3>
                        <p>अपने जीवन में सत्य, अहिंसा, करुणा और प्रेम का अनुसरण करें। इससे आपको दूसरों की भावनाओं का सम्मान करना सीखने को मिलता है</p>
                    </div>


                    <div class="step-card">
                        <div class="step-icon"><i class="fas fa-place-of-worship"></i></div>
                        <h3>गुरु की खोज</h3>
                        <p>सही मार्गदर्शन के लिए किसी गुरु या मार्गदर्शक की तलाश करें। गुरु की उपस्थिति हमें आध्यात्मिक जीवन में सही दिशा प्रदान करती है।</p>
                    </div>
                </div>
            </div><br><br>
        </div>




    </section>

    <?php include 'hindi/footer.php'; ?>