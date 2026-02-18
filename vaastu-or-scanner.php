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
                                <h1 class="pbmit-tbar-title">वास्तु आभा स्कैनर</h1>
                            </div>
                        </div>
                        <div class="pbmit-breadcrumb">
                            <div class="pbmit-breadcrumb-inner">
                                <span><a title="" href="index.php" class="home"><span>Home</span></a></span>
                                <span class="sep">-</span>
                                <span><span class="post-root post post-post current-item">वास्तु आभा स्कैनर</span></span>
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
                                <h2 class="pbmit-title">वास्तु आभा स्कैनर क्या है?</h2>
                                <div class="samagri-container">
                                    <b>वास्तु ऑरा स्कैनर अत्याधुनिक तकनीक पर आधारित एक उपकरण है, जिसका उपयोग घर, कार्यालय या किसी भी अन्य स्थान के ऊर्जा प्रवाह और वातावरण का विश्लेषण करने के लिए किया जाता है। इसका मुख्य उद्देश्य उस स्थान के वातावरण में सकारात्मक और नकारात्मक ऊर्जा की जाँच करना है। वास्तु शास्त्र के अनुसार, प्रत्येक स्थान का एक ऑरा होता है, जो उस स्थान में ऊर्जा के प्रवाह को दर्शाता है। वास्तु ऑरा स्कैनर इस ऊर्जा प्रवाह को मापता है और यह अध्ययन करता है कि उस स्थान की ऊर्जा सकारात्मक है या नकारात्मक।</b>
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


<?php include 'book-now-hindi.php'; ?>


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
                        <h2 class="pbmit-title">वास्तु आभा स्कैनर कैसे काम करता है?</h2>
                        <div class="samagri-container">
                            <b>वास्तु ऑरा स्कैनर अत्याधुनिक तकनीक का उपयोग करता है। यह उपकरण विद्युत या ध्रुवीय ऊर्जा की मात्रा में परिवर्तन का पता लगाकर किसी स्थान के ऑरा (ऊर्जा क्षेत्र) का विश्लेषण करता है। यह निम्नलिखित का अध्ययन करता है:</b>
                        </div><br>

                        <div class="samagri-container">
                            <span class="samagri-box"><b>ऊर्जा क्षेत्र:</b> यह स्कैनर आसपास के क्षेत्र में ऊर्जा क्षेत्र को मापता है। इससे क्षेत्र में ऊर्जा के आकार, शक्ति और प्रवाह की जांच होती है।</span>
                            <span class="samagri-box"><b>नकारात्मक ऊर्जा:</b> स्थान में नकारात्मक ऊर्जा की पहचान करता है, जैसे खराब भावनाएँ, वास्तु की कमियाँ या अन्य अवरोध।</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <hr class="section-divider">

        <div class="content-section mt-5">
            <h2 class="section-title text-center mb-5"><i class="fas fa-fire"></i> यज्ञ प्रक्रिया</h2>
            <div class="puja-steps-grid">

                <div class="step-card">
                    <div class="step-icon"><i class="fas fa-bullseye"></i></div>
                    <h3>सकारात्मक ऊर्जा:</h3>
                    <p>अन्य ऊर्जाओं (जैसे कि अच्छी मानसिकता, समृद्धि, शांति) का भी मापन किया जाता है, जो उस स्थान की आभा के समान एक सकारात्मक वातावरण का निर्माण करती हैं।</p>
                </div>

                <div class="step-card">
                    <div class="step-icon"><i class="fas fa-vihara"></i></div>
                    <h3>ऊर्जा संतुलन:</h3>
                    <p>एक महत्वपूर्ण कारक यह है कि सकारात्मक और नकारात्मक ऊर्जाओं के बीच संतुलन हो। वास्तु ऑरा स्कैनर इस संतुलन की जांच करता है, जिसे अपने पैरामीटरों के अनुसार प्रदर्शित किया जाता है।</p>
                </div>

                <div class="step-card">
                    <div class="step-icon"><i class="fas fa-vihara"></i></div>
                    <h3>ऊर्जा केंद्र:</h3>
                    <p>स्थान में ऊर्जा केंद्रों की पहचान की जाती है। सही केंद्रों पर सकारात्मक ऊर्जा अधिक होती है, जिससे स्थान में सकारात्मक परिवेश का निर्माण होता है।</p>
                </div>

            </div>
        </div>


        <section class="ritual-elements-section">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-6">
                        <div class="ritual-info-group">
                            <h2 class="pbmit-title"><i class="fas fa-fire-alt"></i>वास्तु आभा स्कैनर के लाभकारी उपयोग</h2>

                            <div class="ritual-intro-text">
                                <p>वास्तु आभा स्कैनर एक परिष्कृत और प्रभावी उपकरण है जो वास्तु दोषों और ऊर्जा प्रवाह की स्थिति को मापता है। इसका उपयोग कई तरीकों से किया जा सकता है:</p>
                            </div>

                            <div class="vows-container">
                                <div class="element-tag">
                                    <span class="tag-title">नकारात्मक ऊर्जा को दूर करना:</span>
                                    <span class="tag-desc">स्कैनर की मदद से घर या इमारत में मौजूद नकारात्मक ऊर्जा का पता लगाया जाता है और उसे दूर किया जाता है। इससे घर में सकारात्मक वातावरण बनता है।</span>
                                </div>

                                <div class="element-tag">
                                    <span class="tag-title">संतुलित विद्युत प्रवाह:</span>
                                    <span class="tag-desc">घर, दफ्तर या अन्य स्थान में ऊर्जा संतुलन बनाए रखने के लिए वास्तु आभा स्कैनर की सहायता से आवश्यक उपाय निर्धारित किए जाते हैं। जब सकारात्मक ऊर्जा अधिक और नकारात्मक ऊर्जा कम होती है, तो एक अच्छा वातावरण बनता है।</span>
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
            <h2 class="section-title text-center mb-5"><i class="fas fa-fire"></i>वास्तु ऑरा स्कैनर का महत्व</h2>
            <div class="puja-steps-grid">

                <div class="step-card">
                    <div class="step-icon"><i class="fas fa-bullseye"></i></div>
                    <h3>वास्तु दोषों के निवारण:</h3>
                    <p>घर या दफ्तर में वास्तु दोष हो सकते हैं। स्कैनर इन दोषों का पता लगाता है और उचित समाधान सुझाता है, जिससे उस स्थान में ऊर्जा का संतुलन बना रहता है।</p>
                </div>

                <div class="step-card">
                    <div class="step-icon"><i class="fas fa-igniting"></i></div>
                    <h3>व्यक्तिगत और मानसिक शांति:</h3>
                    <p>सकारात्मक ऊर्जा का सृजन करके, उस स्थान में उपस्थित लोगों को मन की शांति और सुख का अनुभव होता है। इससे उनका मानसिक विकास और आध्यात्मिक उत्थान होता है।</p>
                </div>

                <div class="step-card">
                    <div class="step-icon"><i class="fas fa-vihara"></i></div>
                    <h3>नया घर या व्यवसाय शुरू करते समय:</h3>
                    <p>जब आप कोई नया घर, दफ्तर या व्यवसाय शुरू करते हैं, तो वास्तु आभा स्कैनर का उपयोग करके उस स्थान की ऊर्जा की जांच की जा सकती है। इससे सकारात्मक ऊर्जा लाने और शुरुआत से ही ऊर्जा को संतुलित करने में मदद मिलती है।</p>
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
                        <h2 class="pbmit-title">वास्तु आभा स्कैनर की विशिष्ट विशेषताएं</h2>
                        <div class="samagri-container">
                            <b>वास्तु ऑरा स्कैनर काम करने के लिए लेटेस्ट टेक्नोलॉजी का इस्तेमाल करता है। यह टूल बिजली या पोलैरिटी एनर्जी में बदलाव का पता लगाकर किसी जगह के ऑरा (एनर्जी फील्ड) को एनालाइज़ करता है। इसमें नीचे दी गई बातों की स्टडी की जाती है:</b>
                        </div><br>
                        <div class="vows-container">
                            <div class="element-tag">
                                <span class="tag-title">लगातार परिणाम:</span>
                                <span class="tag-desc">वास्तु ऑरा स्कैनर अत्याधुनिक तकनीक पर आधारित है, इसलिए इसके परिणाम 100% सटीक और सुसंगत होते हैं। प्रत्येक स्कैनिंग के परिणामों की सटीकता और विश्वसनीयता सुनिश्चित की जाती है।</span>
                            </div>
                            <div class="element-tag">
                                <span class="tag-title">विभिन्न स्थानों के लिए उपयोग करें:</span>
                                <span class="tag-desc">इस स्कैनर का उपयोग घरों, कार्यालयों, दुकानों, कारखानों, इमारतों, पार्कों आदि सहित विभिन्न स्थानों पर किया जा सकता है।</span>
                            </div>

                            <div class="element-tag">
                                <span class="tag-title">सुरक्षित और आसान:</span>
                                <span class="tag-desc">वास्तु आभा स्कैनर का उपयोग करना बहुत आसान है। इसके लिए किसी जटिल तकनीक की आवश्यकता नहीं होती और इसका उपयोग करने की प्रक्रिया सुरक्षित है।</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="content-section mt-5">
                <h2 class="section-title text-center mb-5"><i class="fas fa-fire"></i>वास्तु स्कैनिंग प्रक्रिया और लाभ</h2>
                <div class="puja-steps-grid">

                    <div class="step-card">
                        <div class="step-icon"><i class="fas fa-bullseye"></i></div>
                        <h3>तेज़ परिणाम:</h3>
                        <p>तेज़ स्कैनिंग प्रक्रिया के कारण, उपयोगकर्ता कुछ ही मिनटों में उस स्थान की ऊर्जा का मापन और विश्लेषण प्राप्त कर सकता है।</p>
                    </div>

                    <div class="step-card">
                        <div class="step-icon"><i class="fas fa-igniting"></i></div>
                        <h3>समाधान और सलाह:</h3>
                        <p>स्कैनिंग के बाद, यदि कोई नकारात्मक ऊर्जा पाई जाती है, तो तुरंत उपाय और सलाह दी जाती है। ऊर्जा संतुलन प्राप्त करने और नकारात्मक प्रभावों को दूर करने के लिए ये उपाय महत्वपूर्ण हैं।</p>
                    </div>

                    <div class="step-card">
                        <div class="step-icon"><i class="fas fa-bullseye"></i></div>
                        <h3>सटीक विश्लेषण:</h3>
                        <p>स्कैनिंग प्रोसेस सटीक नतीजे देता है, जिससे यूज़र्स को जगह के हर हिस्से में एनर्जी फ्लो को समझने में मदद मिलती है।</p>
                    </div>

                </div>
            </div>


            <div class="service-page-infobox">
                <div class="row align-items-center">

                    <div class="col-lg-6">
                        <div class="principle-content">
                            <h2 class="pbmit-title">वास्तु आभा स्कैनर के लाभ</h2>
                            <div class="samagri-container">
                            </div><br>
                            <div class="vows-container">
                                <div class="element-tag">
                                    <span class="tag-title">सकारात्मक वातावरण का निर्माण करना:</span>
                                    <span class="tag-desc">वास्तु आभा स्कैनर की मदद से घर या कार्यालय में सकारात्मक ऊर्जा का निर्माण किया जा सकता है, जिससे सदस्यों को सुखी और मानसिक रूप से स्वस्थ रहने में मदद मिलती है।</span>
                                </div>
                                <div class="element-tag">
                                    <span class="tag-title">वास्तु दोषों का समाधान:</span>
                                    <span class="tag-desc">वास्तु आभा स्कैनर एक घर या इमारत में वास्तु दोषों की पहचान करता है और उन्हें समाधान करता है, जिससे सकारात्मक ऊर्जा में वृद्धि होती है और नकारात्मक प्रभावों को कम किया जा सकता है।</span>
                                </div>

                                <div class="element-tag">
                                    <span class="tag-title">स्वास्थ्य और समृद्धि:</span>
                                    <span class="tag-desc">ऊर्जा के संतुलन से मानसिक और शारीरिक स्वास्थ्य में सुधार होता है, जिससे बेहतर शारीरिक और मानसिक स्वास्थ्य प्राप्त होता है।</span>
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
                    <h2 class="section-title text-center mb-5"><i class="fas fa-fire"></i>वास्तु स्कैनिंग के मुख्य लाभ</h2>
                    <div class="puja-steps-grid">

                        <div class="step-card">
                            <div class="step-icon"><i class="fas fa-bullseye"></i></div>
                            <h3>व्यावसायिक प्रगति:</h3>
                            <p>सकारात्मक ऊर्जा के निर्माण से व्यवसाय में सफलता, समृद्धि और वृद्धि होती है।</p>
                        </div>

                        <div class="step-card">
                            <div class="step-icon"><i class="fas fa-igniting"></i></div>
                            <h3>स्पष्टता और समृद्धि के स्रोत:</h3>
                            <p>घर या कार्यालय में प्रत्येक क्षेत्र की ऊर्जा का विश्लेषण करके, स्थान अधिक प्रभावी और समृद्ध हो सकता है।</p>
                        </div>

                    </div>
                </div>


                <div class="phi-content-col meaning-bg">
                    <div class="content-padding">
                        <h2 class="mini-title"><i class="fas fa-lightbulb"></i> निष्कर्ष</h2>
                        <div class="meaning-item d-flex justify-content-center">

                            <p>वास्तु आभा स्कैनर एक अत्याधुनिक उपकरण है जिसकी सहायता से घर, कार्यालय या अन्य स्थान की ऊर्जा और वातावरण का विश्लेषण किया जा सकता है। यह उपकरण ऊर्जा के उचित प्रवाह और संतुलन को बनाए रखने में अत्यंत प्रभावी है। इस उपकरण की सहायता से वास्तु दोष दूर होते हैं और सकारात्मक वातावरण बनता है, जिससे जीवन में समृद्धि, सफलता और मन की शांति प्राप्त होती है।</p>
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </div>

</section>
<?php include 'hindi/footer.php'; ?>