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
                                <h1 class="pbmit-tbar-title">वास्तुकला परीक्षा</h1>
                            </div>
                        </div>
                        <div class="pbmit-breadcrumb">
                            <div class="pbmit-breadcrumb-inner">
                                <span><a title="" href="index.php" class="home"><span>Home</span></a></span>
                                <span class="sep">-</span>
                                <span><span class="post-root post post-post current-item">वास्तुकला परीक्षा</span></span>
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
         

            <div class="mantra-ribbon-container">
                <div class="mantra-ribbon vastu-shanti-theme">
                    <div class="mantra-icon-left"><i class="fas fa-home"></i></div>
                    <div class="mantra-text-content">
                        <p class="sanskrit-shlok">
                            वास्तोष्पते प्रतिजानीह्यस्मान् त्स्वावेशो अनमीवो भवान: ।
                            यत् त्वेमहे प्रति तन्नो जुषस्व शं नो भव द्विपदे शं चतुष्पदे ॥
                        </p>
                        <div class="shlok-divider"></div>
                        <p class="shlok-meaning">
                            <strong>अर्थ:</strong> हे वास्तू देवते, आम्हाला सुखद आश्रय द्या आणि आमचे रोगव्याधींपासून रक्षण करा. या घरातील माणसे आणि पशू-प्राणी सर्वांना सुख-शांती लाभू दे.
                        </p>
                    </div>
                    <div class="mantra-icon-right"><i class="fas fa-om"></i></div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6  order-1">
                <img src="images/images/vastu-pari02.png" class="w-100" alt="">

            </div>
          <div class="col-md-6 col-lg-6">
    <div class="service-details">
        <h3 class="pbmit-title">वास्तु परीक्षण क्या है?</h3><br>
        <p>
            वास्तु परीक्षण किसी घर, कार्यालय, भवन या अन्य संरचना की बनावट, दिशा और ऊर्जा प्रवाह का विश्लेषण करने की प्रक्रिया है। वास्तु शास्त्र के सिद्धांतों के अनुसार प्रत्येक स्थान की संरचना, आकार, वास्तु दोष और ऊर्जा प्रवाह वहां रहने वाले लोगों के जीवन को प्रभावित करते हैं। <br><br>

            वास्तु परीक्षण भवन या स्थान की संरचना में मौजूद कमियों की पहचान करता है और उन्हें दूर करने के लिए उचित उपाय सुझाता है। इसमें घर या इमारत के प्रत्येक भाग की जांच की जाती है, जिसमें फर्नीचर, दरवाजे, खिड़कियां आदि शामिल होते हैं। <br><br>

            वास्तु परीक्षण के माध्यम से घर, कार्यालय, दुकान या अन्य स्थानों से नकारात्मक ऊर्जा को दूर कर सकारात्मक ऊर्जा बढ़ाने के उपाय बताए जाते हैं। इस प्रक्रिया द्वारा आंतरिक वातावरण की ऊर्जा को संतुलित किया जाता है, जिससे वहां रहने वाले लोगों का जीवन सुखमय, शांतिपूर्ण और समृद्ध बन सकता है।
        </p>
    </div>
</div>

        </div>
    </div>
</section>

<?php include'book-now-hindi.php'?>

<section class="puja-details-section">
    <div class="container">

        <div class="service-page-infobox">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="image-wrapper">
                        <img src="images/images/vastu-pari01.jpg" class="img-fluid main-ritual-img" alt="Vedic Ritual">
                    </div> <br>
                    <div class="image-wrapper">
                        <img src="images/images/vastu-pari03.png" class="img-fluid main-ritual-img" alt="Vedic Ritual">
                    </div>
                </div>
               <div class="col-lg-6">
    <div class="principle-content">
        <h2 class="accent-title pbmit-title">
            <i class="fas fa-fire-alt"></i> वास्तु परीक्षण की प्रक्रिया
        </h2>

        <div class="vows-container">

            <div class="element-tag">
                <span class="tag-title">साइट सर्वेक्षण :</span>
                <span class="tag-desc">
                    पहले चरण में वास्तु सलाहकार स्थल का सर्वेक्षण करता है। इसमें भूमि के आकार, दिशा, हवा का प्रवाह, सूर्य की स्थिति तथा अन्य भौगोलिक कारकों का अध्ययन शामिल होता है। इससे भूमि में ऊर्जा प्रवाह का अनुमान लगाया जाता है। साथ ही आसपास की इमारतों और पर्यावरण का भी निरीक्षण किया जाता है।
                </span>
            </div>

            <div class="element-tag">
                <span class="tag-title">दिशा एवं स्थान विश्लेषण :</span>
                <span class="tag-desc">
                    वास्तु शास्त्र के अनुसार प्रत्येक दिशा और उससे संबंधित ग्रह, देवता एवं ऊर्जा का हमारे जीवन पर प्रभाव पड़ता है। घर या भवन की प्रत्येक दिशा (पूर्व, पश्चिम, उत्तर, दक्षिण) का अध्ययन कर सकारात्मक और नकारात्मक ऊर्जाओं की पहचान की जाती है।
                </span>
                <span class="element-subpoints mantra-text">पूर्व दिशा: सूर्य का सकारात्मक प्रभाव और उत्तम स्वास्थ्य।</span>
                <span class="element-subpoints mantra-text">दक्षिण दिशा: स्थिरता और सुरक्षा।</span>
                <span class="element-subpoints mantra-text">उत्तर दिशा: आर्थिक प्रगति और समृद्धि।</span>
                <span class="element-subpoints mantra-text">पश्चिम दिशा: मानसिक शांति और व्यक्तिगत विकास।</span>
            </div>

            <div class="element-tag">
                <span class="tag-title">वास्तु दोष निरीक्षण (वास्तु दोष विश्लेषण) :</span>
                <span class="tag-desc">
                    सलाहकार घर या इमारत में मौजूद वास्तु दोषों की पहचान कर उनके निवारण के उपाय सुझाता है। कुछ सामान्य वास्तु दोष इस प्रकार हो सकते हैं:
                </span>
                <span class="element-subpoints mantra-text">स्थान का गलत लेआउट या दिशा।</span>
                <span class="element-subpoints mantra-text">रसोई, कमरा या अलमारी का अनुचित स्थान।</span>
                <span class="element-subpoints mantra-text">उत्तर-पश्चिम या अन्य कोनों में नकारात्मक ऊर्जा की उपस्थिति।</span>
                <span class="element-subpoints mantra-text">घर का अत्यधिक छोटा या असंतुलित बड़ा आकार।</span>
            </div>

            <div class="element-tag">
                <span class="tag-title">ऊर्जा प्रवाह और संतुलन :</span>
                <span class="tag-desc">
                    वास्तु शास्त्र में ऊर्जा के संतुलित प्रवाह को अत्यंत महत्वपूर्ण माना गया है। घर के सभी भागों में उचित ऊर्जा प्रवाह के लिए दरवाजों, खिड़कियों और फर्नीचर की सही स्थिति आवश्यक है। संतुलित ऊर्जा प्रवाह मानसिक शांति प्रदान करता है और शारीरिक स्वास्थ्य के लिए भी लाभकारी होता है। साथ ही प्रत्येक भाग की आंतरिक संरचना को उचित स्थिति में बनाए रखने पर भी विशेष ध्यान दिया जाता है।
                </span>
            </div>

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
                    <h3 class="accent-title pbmit-title">
                        <i class="fas fa-fire-alt"></i> सुधार और समाधान (उपचार और समाधान)
                    </h3>

                    <div class="vows-container">

                        <div class="element-tag">
                            <span class="tag-title">
                                वास्तु शास्त्र के अनुसार किसी स्थान में मौजूद दोषों या ऊर्जा असंतुलन को दूर करने के लिए विभिन्न उपाय किए जाते हैं। ये उपाय स्थान की ऊर्जा और संरचना के आधार पर सुझाए जाते हैं।
                            </span>
                        </div>

                        <div class="element-tag">
                            <span class="tag-title">
                                वास्तु यंत्र का उपयोग: रुद्राक्ष, कुबेर यंत्र, हनुमान यंत्र जैसे यांत्रिक उपकरणों का उपयोग किया जाता है।
                            </span>
                        </div>

                        <div class="element-tag">
                            <span class="tag-title">
                                रंग संयोजन: घर के प्रत्येक क्षेत्र के लिए उपयुक्त रंगों का चयन किया जाता है। उदाहरण के लिए, नकारात्मक ऊर्जा को कम करने हेतु हल्के रंग और सकारात्मक ऊर्जा बढ़ाने के लिए चमकीले रंग उपयोग किए जाते हैं।
                            </span>
                        </div>

                        <div class="element-tag">
                            <span class="tag-title">
                                खिड़कियाँ और दरवाजे: आवश्यकतानुसार दरवाजों या खिड़कियों का स्थान बदला जाता है।
                            </span>
                        </div>

                        <div class="element-tag">
                            <span class="tag-title">
                                फर्नीचर: घर में फर्नीचर और सजावट की वस्तुओं की वास्तु अनुसार उचित व्यवस्था की सलाह दी जाती है।
                            </span>
                        </div>

                        <h3 class="pbmit-title">सकारात्मक वातावरण का निर्माण</h3>

                        <div class="element-tag">
                            <span class="tag-title">
                                वास्तु दोषों को दूर कर घर में सकारात्मक वातावरण बनाने के लिए विशेष पूजा-अर्चना, मंत्रोच्चार और अन्य आध्यात्मिक उपाय किए जाते हैं। यह वातावरण मानसिक शांति, शारीरिक स्वास्थ्य और आध्यात्मिक उन्नति के लिए अत्यंत महत्वपूर्ण होता है।
                            </span>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="ritual-image-frame">
                    <img src="images/images/vastu-consulting05.png" class="img-fluid rounded-custom shadow-lg" alt="वास्तु सुधार और समाधान">
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
                            <img src="images/images/vastu-pari04.jpg" class="img-fluid main-ritual-img" alt="Vedic Ritual">
                        </div>
                    </div>
                 <div class="col-lg-6">
    <div class="principle-content">
        <h2 class="pbmit-title">वास्तु परीक्षा के लाभ</h2>

        <h4>सकारात्मक ऊर्जा वृद्धि</h4>
        <div class="samagri-container">
            <span class="samagri-box">
                वास्तु शास्त्र के अनुसार उचित जांच-पड़ताल से घर में सकारात्मक ऊर्जा बढ़ती है। इससे घर के सदस्य सुखी और संतुलित रहते हैं।
            </span>
        </div><br>

        <h4>व्यक्तिगत और व्यावसायिक सफलता</h4>
        <div class="samagri-container">
            <span class="samagri-box">
                घर का उचित डिजाइन और संतुलन व्यक्तित्व, कार्यकुशलता और व्यवसाय में सफलता दिलाने में सहायक होता है।
            </span>
        </div><br>

        <h4>वित्तीय समृद्धि</h4>
        <div class="samagri-container">
            <span class="samagri-box">
                वास्तु शास्त्र का सही पालन करने से आर्थिक उन्नति संभव है। इससे व्यावसायिक स्थिरता और समृद्धि प्राप्त की जा सकती है।
            </span>
        </div><br>

        <h4>स्वास्थ्य और मन की शांति</h4>
        <div class="samagri-container">
            <span class="samagri-box">
                घर में ऊर्जा का संतुलित प्रवाह शारीरिक स्वास्थ्य के लिए लाभकारी होता है। इससे मनोबल बढ़ता है और मानसिक शांति प्राप्त होती है।
            </span>
        </div><br>

        <h4>पारिवारिक सामंजस्य</h4>
        <div class="samagri-container">
            <span class="samagri-box">
                वास्तु शास्त्र का सही ज्ञान परिवार के सदस्यों के बीच प्रेम, सद्भाव और सहयोग को बढ़ावा देता है। घर में प्रत्येक सदस्य को सकारात्मक ऊर्जा प्राप्त होती है।
            </span>
        </div>

    </div>
</div>


                </div>
            </div>

            <div class="service-page-infobox">
                <div class="row align-items-center">

                    <div class="col-lg-6">

                        <<div class="principle-content">
    <h2 class="pbmit-title">वास्तुकला परीक्षा में पूछे जाने वाले मुद्दे</h2>

    <h4>वास्तु परीक्षण करते समय निम्नलिखित बातों पर ध्यान दिया जाता है:</h4>

    <div class="samagri-container">
        <span class="samagri-box">घर की दिशा और आकार।</span>
    </div>

    <div class="samagri-container">
        <span class="samagri-box">घर में मुख्य कमरे का स्थान।</span>
    </div>

    <div class="samagri-container">
        <span class="samagri-box">घर में ऊर्जा का प्रवाह और स्थान।</span>
    </div>

    <div class="samagri-container">
        <span class="samagri-box">दरवाजों और खिड़कियों की स्थिति।</span>
    </div>

    <div class="samagri-container">
        <span class="samagri-box">रंग संयोजन, फर्नीचर और अन्य तत्वों का स्थान।</span>
    </div>

    <div class="samagri-container">
        <span class="samagri-box">आध्यात्मिक, शारीरिक, मानसिक और आर्थिक विकास के लिए आवश्यक उपाय।</span>
    </div>
</div>

                    </div>

                    <div class="col-lg-6">
                        <div class="image-wrapper">
                            <img src="images/images/vastu-pari05.png" class="img-fluid main-ritual-img" alt="Vedic Ritual">
                        </div>
                    </div>
                </div>
            </div>

           <div class="content-section mt-5">
    <h2 class="section-title text-center mb-5"><i class="fas fa-fire"></i> वास्तु परीक्षण के लिए विशेषज्ञ का चयन</h2>
    <div class="puja-steps-grid">

        <div class="step-card">
            <div class="step-icon"><i class="fas fa-bullseye"></i></div>
            <h3>अनुभव:</h3>
            <p>सही विशेषज्ञता और अधिक अनुभव वाले सलाहकार का चयन करें।</p>
        </div>

        <div class="step-card">
            <div class="step-icon"><i class="fas fa-bullseye"></i></div>
            <h3>शिक्षा और प्रमाणन:</h3>
            <p>वास्तु शास्त्र के विद्वानों से प्रमाण पत्र प्राप्त होना अनिवार्य है।</p>
        </div>

        <div class="step-card">
            <div class="step-icon"><i class="fas fa-bullseye"></i></div>
            <h3>ग्राहक प्रतिक्रिया:</h3>
            <p>विशेषज्ञ के काम और उनके द्वारा प्रदान की गई सेवाओं पर प्रतिक्रिया देखें।</p>
        </div>

        <div class="step-card">
            <div class="step-icon"><i class="fas fa-bullseye"></i></div>
            <h3>उचित शुल्क:</h3>
            <p>उचित, तर्कसंगत और ईमानदार शुल्क लेने वाले सलाहकार का चयन करें।</p>
        </div>

    </div>
</div>


        </div>
        <div class="compact-section-wrapper mt-5">
            <div class="philosophy-card ritual-rules-card shadow-lg" style="border-radius: 20px; overflow: hidden;">
                <div class="philosophy-flex">

             


                </div>
            </div>
        </div>
</section>

<?php include 'hindi/footer.php'; ?>