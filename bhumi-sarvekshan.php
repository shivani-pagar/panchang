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

    .element-subpoints {
        font-family: 'Sanskrit Text', 'Nirmala UI', serif;
        font-weight: 600;
        line-height: 0.8;
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
                                <h1 class="pbmit-tbar-title">भूमि सर्वेक्षण</h1>
                            </div>
                        </div>
                        <div class="pbmit-breadcrumb">
                            <div class="pbmit-breadcrumb-inner">
                                <span><a title="" href="index.php" class="home"><span>Home</span></a></span>
                                <span class="sep">-</span>
                                <span><span class="post-root post post-post current-item">भूमि सर्वेक्षण</span></span>
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
                <div class="mantra-ribbon land-testing-theme">
                    <div class="mantra-icon-left"><i class="fas fa-mountain"></i></div>
                    <div class="mantra-text-content">

                        <p class="sanskrit-shlok">
                            स्वर्णगन्धा सुरसा धनधान्यसुखा वहा ।
                            व्यत्यये व्यत्ययफला अतः कार्यं परीक्षणम् ॥
                        </p>
                        <div class="shlok-divider"></div>
                        <p class="shlok-meaning">
                            <strong>अर्थ:</strong> सुगंधी आणि सुपिक जमीन धन-धान्य व सुख प्रदान करते, तर दोषयुक्त जमीन संकट आणते. म्हणून वास्तू बांधण्यापूर्वी भूमीचे परीक्षण अवश्य करावे.
                        </p>
                    </div>
                    <div class="mantra-icon-right"><i class="fas fa-vihara"></i></div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6  order-1">
                <img src="images/images/bhumi-puja01.jpg" class="w-100" alt="">

            </div>
          <div class="col-md-6 col-lg-6">
    <div class="service-details">
        <h3 class="pbmit-title">भूमि सर्वेक्षण क्या है?</h3>
        <p>
            भूमि सर्वेक्षण, जिसे वास्तु शास्त्र भूमि सर्वेक्षण भी कहा जाता है, एक महत्वपूर्ण प्रक्रिया है जिसके माध्यम से किसी भूमि या भूखंड को खरीदने या निर्माण कार्य प्रारंभ करने से पहले उस स्थान की ऊर्जा, दिशाओं और स्थानीय कारकों का अध्ययन किया जाता है।
            <br><br>
            वास्तु शास्त्र के अनुसार, यह प्रक्रिया उस स्थान की सकारात्मक और नकारात्मक ऊर्जाओं की पहचान करने में सहायक होती है। इसमें विभिन्न तत्वों का विश्लेषण किया जाता है ताकि भविष्य में होने वाले संभावित लाभ या हानि को समझा जा सके।
            <br><br>
            उचित भूमि सर्वेक्षण से भविष्य के वास्तु दोषों से बचाव संभव होता है और निर्माण कार्य को अधिक सुरक्षित, संतुलित और शुभ बनाया जा सकता है।
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
                        <img src="images/images/img09.jpeg" class="img-fluid main-ritual-img" alt="Vedic Ritual">
                    </div>
                </div>
               <div class="col-lg-6">
    <div class="principle-content">
        <h2 class="pbmit-title">भूमि परीक्षण का महत्व</h2>

        <div class="samagri-container ritual-intro-text">
            <p class="ritual-intro-text">
                मिट्टी का विश्लेषण महत्वपूर्ण भूमिका निभाता है, क्योंकि उचित स्थल विश्लेषण घर, कार्यालय या अन्य भवन में सकारात्मक ऊर्जा लाने में सहायक होता है। यह जीवन के सभी क्षेत्रों में समृद्धि, सुख, शांति और सफलता प्राप्त करने के लिए आवश्यक है। इससे शारीरिक, मानसिक और आर्थिक स्थिति बेहतर हो सकती है।
            </p>
        </div><br>

        <h4>भूमि परीक्षण से निम्नलिखित लाभ प्राप्त होते हैं:</h4>

        <div class="samagri-container">
            <span class="samagri-box">सकारात्मक ऊर्जा का प्रवाह।</span>
            <span class="samagri-box">घर या कार्यालय के निर्माण की शुरुआत में उचित मार्गदर्शन।</span>
            <span class="samagri-box">वास्तु दोषों से बचाव और उनका निवारण।</span>
            <span class="samagri-box">घर में ऊर्जा का संतुलन बनाए रखना।</span>
            <span class="samagri-box">किसी भी नकारात्मक प्रभाव से सुरक्षा।</span>
            <span class="samagri-box">मानसिक शांति और शारीरिक स्वास्थ्य को बढ़ावा देना।</span>
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
        <h2 class="accent-title pbmit-title"><i class="fas fa-fire-alt"></i> भूमि सर्वेक्षण प्रक्रियाएँ</h2>

        <div class="ritual-intro-text">
            <p>भूमि सर्वेक्षण की प्रक्रिया कुछ महत्वपूर्ण चरणों में की जाती है। इस प्रक्रिया में निम्नलिखित पहलुओं का अध्ययन किया जाता है:</p>
        </div>

        <div class="vows-container">

            <div class="element-tag">
                <span class="tag-title">भूमि का सर्वेक्षण</span>
                <span class="tag-desc">
                    पहले चरण में भूखंड का स्थानीय सर्वेक्षण किया जाता है। इसमें भूखंड की आकृति, दिशा, हवा का प्रवाह, सूर्य की दिशा, जल विज्ञान, नदियाँ, बांध और अन्य भौगोलिक कारकों का अध्ययन शामिल होता है। सलाहकार स्थल पर जाकर भूमि के सभी पहलुओं की जांच करता है।
                </span>
            </div>

            <div class="element-tag">
                <span class="tag-title">दिशाओं का अध्ययन (दिशा विश्लेषण)</span>
                <span class="tag-desc">
                    वास्तु शास्त्र के अनुसार प्रत्येक दिशा और उससे संबंधित ग्रह या देवता उस दिशा की ऊर्जा को प्रभावित करते हैं। उत्तर, दक्षिण, पूर्व और पश्चिम दिशाओं का विशेष अध्ययन किया जाता है।
                    <span class="element-subpoints mantra-text">पूर्व दिशा: सूर्य का प्रवेश, समृद्धि और स्वास्थ्य।</span>
                    <span class="element-subpoints mantra-text">दक्षिण दिशा: स्थिरता, सुरक्षा और ऊर्जा।</span>
                    <span class="element-subpoints mantra-text">उत्तर दिशा: व्यापारिक सफलता और प्रगति।</span>
                    <span class="element-subpoints mantra-text">पश्चिम दिशा: चंद्रमा से संबंधित, मानसिक शांति के लिए शुभ।</span>
                </span>
            </div>

            <div class="element-tag">
                <span class="tag-title">ग्राउंड एनर्जी चेक (ऊर्जा विश्लेषण)</span>
                <span class="tag-desc">
                    भूमि की ऊर्जा की जांच करना अत्यंत महत्वपूर्ण है। यह देखा जाता है कि स्थान की ऊर्जा सकारात्मक है या नकारात्मक। इसके लिए रेडियोमीटर (पारंपरिक उपकरण), लैंडसैट छवियाँ या अन्य आधुनिक तकनीकों का उपयोग किया जा सकता है।
                </span>
            </div>

            <div class="element-tag">
                <span class="tag-title">वास्तु दोष विश्लेषण</span>
                <span class="tag-desc">
                    कभी-कभी भूमि या भूखंड में वास्तु दोष हो सकते हैं, जो निर्माण पर नकारात्मक प्रभाव डालते हैं। कुछ सामान्य दोष:
                </span>
                <span class="element-subpoints mantra-text">भूखंड की अनियमित या अप्रत्यक्ष दिशा।</span>
                <span class="element-subpoints mantra-text">अत्यधिक तेज हवाएं या सूर्य प्रकाश की कमी।</span>
                <span class="element-subpoints mantra-text">एक ही स्थान पर नकारात्मक ऊर्जा का केंद्र।</span>
                <span class="element-subpoints mantra-text">जमीन पर अनावश्यक दीवार या संरचना।</span>
            </div>

            <div class="element-tag">
                <span class="tag-title">सकारात्मक ऊर्जा प्रवाह</span>
                <span class="tag-desc">
                    भूमि का निरीक्षण कर सकारात्मक ऊर्जा प्रवाह सुनिश्चित करने के लिए उपयुक्त उपाय सुझाए जाते हैं। इसमें घर के निर्माण के लिए सही स्थान का चयन और प्रत्येक भाग का उचित निर्धारण शामिल है।
                </span>
            </div>

            <div class="element-tag">
                <span class="tag-title">नवीन समाधान (उपचार)</span>
                <span class="tag-desc">
                    जिन स्थानों पर दोष या नकारात्मक ऊर्जा होती है, उनके लिए उपाय सुझाए जाते हैं। इनमें वास्तु यंत्र, रुद्राक्ष, रत्न, हनुमान चालीसा या अन्य सरल उपाय शामिल हो सकते हैं, जिससे नकारात्मक ऊर्जा कम और सकारात्मक ऊर्जा बढ़ती है।
                </span>
            </div>

        </div>
    </div>
</div>



                    <div class="col-lg-6">
                        <div class="ritual-image-frame">
                            <img src="images/images/bhumi-puja04.jpg" class="img-fluid rounded-custom shadow-lg" alt="यज्ञाची प्रमुख अंगे">
                            <div class="frame-decoration"></div>
                        </div>
                        <div class="ritual-image-frame">
                            <img src="images/images/bhumi-puja05.jpeg" class="img-fluid rounded-custom shadow-lg" alt="यज्ञाची प्रमुख अंगे">
                            <div class="frame-decoration"></div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <div class="container">

            <div class="service-page-infobox">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="image-wrapper">
                            <img src="images/images/bhumi-puja06.jpg" class="img-fluid main-ritual-img" alt="Vedic Ritual">
                        </div>
                    </div>
                  <div class="col-lg-6">
    <div class="principle-content">
        <h2 class="pbmit-title">भूमि सर्वेक्षण संबंधी सुझाव</h2>

        <h4>भूमि सर्वेक्षण करते समय ध्यान रखने योग्य बातें:</h4>

        <div class="samagri-container">
            <span class="samagri-box">
                स्थान की पूर्व तैयारी: <br>
                परीक्षण से पहले जमीन पूरी तरह से साफ और अवरोध रहित होनी चाहिए।
            </span>

            <span class="samagri-box">
                नई जमीन खरीदते समय: <br>
                वास्तु शास्त्र के अनुसार सही दिशा, आकार और आसपास के वातावरण की जांच अवश्य कर लें।
            </span>
        </div>
    </div>
</div>

                </div>
            </div>

          <div class="content-section mt-5">
    <h2 class="section-title text-center mb-5">
        <i class="fas fa-fire"></i> भूमि सर्वेक्षण से जुड़ी विशेष बातें
    </h2>

    <div class="puja-steps-grid">

        <div class="step-card">
            <div class="step-icon"><i class="fas fa-bullseye"></i></div>
            <h3>आपकी कुंडली से संबंधित:</h3>
            <p>
                भूमि सर्वेक्षण करते समय अपनी जन्म कुंडली का अध्ययन करें, क्योंकि कुंडली में स्थित ग्रह और उनकी संरचना संबंधित क्षेत्र पर प्रभाव डाल सकती है।
            </p>
        </div>

        <div class="step-card">
            <div class="step-icon"><i class="fas fa-bullseye"></i></div>
            <h3>मन्नतों से संबंधित भूमि का निरीक्षण:</h3>
            <p>
                उस स्थान पर कुछ नकारात्मक ऊर्जाएं हो सकती हैं। इसके लिए स्थानीय रीति-रिवाजों, परंपराओं और पूजे जाने वाले देवी-देवताओं की जानकारी अवश्य प्राप्त करें।
            </p>
        </div>

    </div>
</div>


        </div>



      <div class="compact-section-wrapper">
    <div class="philosophy-card ritual-rules-card">
        <div class="philosophy-flex">

            <div class="phi-content-col rules-bg">
                <div class="content-padding">
                    <h2 class="mini-title"><i class="fas fa-seedling"></i> भूमि पूजन क्यों किया जाता है?</h2>
                    <ul class="ritual-list">
                        <li><i class="fas fa-check"></i> <strong>धरती माता का आशीर्वाद:</strong> किसी भी नए कार्य की शुरुआत करते समय भूमि का सम्मान करना और उसकी अनुमति लेना।</li>
                        <li><i class="fas fa-check"></i> <strong>वास्तुदोष निवारण:</strong> स्थान की नकारात्मक ऊर्जा दूर होकर वहाँ सात्विकता का निर्माण होता है।</li>
                        <li><i class="fas fa-check"></i> <strong>कार्य में निर्विघ्नता:</strong> निर्माण कार्य के दौरान कोई बाधा न आए और कार्य समय पर पूर्ण हो, इसके लिए प्रार्थना की जाती है।</li>
                        <li><i class="fas fa-check"></i> <strong>सुख-समृद्धि:</strong> उस भवन में रहने वाले लोगों को दीर्घायु, उत्तम स्वास्थ्य और धन-संपत्ति की प्राप्ति होती है।</li>
                    </ul>
                    <br>
                    <h2 class="mini-title"><i class="fas fa-vihara"></i> शास्त्रीय आधार</h2>
                    <ul class="ritual-list">
                        <li><i class="fas fa-check"></i> भूमि केवल मिट्टी नहीं है, बल्कि वह अनंत शक्तियों का केंद्र मानी जाती है।</li>
                        <li><i class="fas fa-check"></i> गृह निर्माण से पहले भूमि पूजन करना गृहस्थ का परम कर्तव्य माना गया है।</li>
                        <li><i class="fas fa-check"></i> पूजन से वास्तु पुरुष प्रसन्न होते हैं और घर को वास्तविक ‘घरपन’ प्राप्त होता है।</li>
                    </ul>
                </div>
            </div>

            <div class="phi-content-col meaning-bg">
                <div class="content-padding">
                    <h2 class="mini-title"><i class="fas fa-map-marked-alt"></i> पूजन के मुख्य विधि</h2>

                    <div class="meaning-item">
                        <h4>गणपति एवं कलश पूजन</h4>
                        <p>किसी भी शुभ कार्य की शुरुआत विघ्नहर्ता भगवान गणपति के आशीर्वाद और वरुण देव (कलश स्थापना) से की जाती है।</p>
                    </div>

                    <div class="meaning-item">
                        <h4>भूमि शुद्धिकरण एवं षट्कर्म</h4>
                        <p>मंत्रोच्चार द्वारा भूमि का शुद्धिकरण किया जाता है तथा वहाँ उपस्थित अदृश्य शक्तियों को संतुष्ट किया जाता है।</p>
                    </div>

                    <div class="meaning-item">
                        <h4>वास्तु पुरुष एवं नाग पूजन</h4>
                        <p>वास्तु पुरुष की प्रतिमा तथा चांदी का नाग भूमि में अर्पित किया जाता है, जिससे भवन की नींव मजबूत और सुरक्षित बनी रहे।</p>
                    </div>

                    <div class="meaning-item">
                        <h4>शिलान्यास (पहली ईंट रखना)</h4>
                        <p>शुभ मुहूर्त में निर्माण कार्य की पहली ईंट या पत्थर रखकर वास्तु की विधिवत नींव डाली जाती है।</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

</section>

<?php include 'hindi/footer.php'; ?>