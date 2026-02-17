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
        gap: 10px;
        /* Space between boxes */

    }

    .vows-container {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        /* Increased from 12px to 20px for more breathing room */
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
        justify-content: center;
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
        justify-content: center;
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
                                <h1 class="pbmit-tbar-title">वैदिक विज्ञान</h1>
                            </div>
                        </div>
                        <div class="pbmit-breadcrumb">
                            <div class="pbmit-breadcrumb-inner">
                                <span><a title="" href="index1.php" class="home"><span>Home</span></a></span>
                                <span class="sep">-</span>
                                <span><span class="post-root post post-post current-item">वैदिक विज्ञान</span></span>
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
                <div class="mantra-ribbon vedic-wisdom-theme">
                    <div class="mantra-icon-left"><i class="fas fa-scroll"></i></div>
                    <div class="mantra-text-content">

                        <p class="sanskrit-shlok">
                            वेदोऽखिलो धर्ममूलं स्मृतिशीले च तद्विदाम् ।
                            आचारश्चैव साधूनामात्मनस्तुष्टिरेव च ॥
                        </p>
                        <div class="shlok-divider"></div>
                        <p class="shlok-meaning">
                            <strong>अर्थ:</strong> संपूर्ण वेद हे जगातील सर्व सत्य ज्ञानाचे आणि धर्माचे मूळ आहेत. हे शास्त्र आपल्याला केवळ भौतिक प्रगतीच नाही, तर आत्मिक समाधान मिळवण्याचा मार्ग दाखवते.
                        </p>
                    </div>
                    <div class="mantra-icon-right"><i class="fas fa-om"></i></div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6  order-1">
                <img src="images/images/vaidik-shastra01.jpg" class="w-100" alt="">

            </div>
            <div class="col-md-6 col-lg-6">
                <div class="service-details">
                    <h3 class="pbmit-title">वैदिक शास्त्रों के बारे में विस्तृत जानकारी:</h3>
                    <p>
                        वैदिक साहित्य सिर्फ़ एक धार्मिक रस्म नहीं है, बल्कि एक पुराना और गहरा विज्ञान है जो इंसानी ज़िंदगी
                        के हर तरह के विकास को बढ़ावा देता है। इसमें मुख्य रूप से वेद, उपनिषद और षड्दर्शन शामिल हैं,
                        जो दुनिया की रचना, प्रकृति के नियम और इंसान के होने का मकसद समझाते हैं। यह साहित्य सिर्फ़
                        आध्यात्मिकता तक ही सीमित नहीं है, बल्कि आयुर्वेद (हेल्थ), एस्ट्रोनॉमी (ज्योतिष), वास्तु शास्त्र (आर्किटेक्चर)
                        और योग शास्त्र जैसे प्रैक्टिकल विषयों पर भी गहराई से गाइडेंस देता है।<br><br>
                        इस साइंस का मुख्य सार है प्रकृति के साथ तालमेल बिठाकर रहना और अपने अंदर की शक्ति को पहचानना।
                        'यथा ब्रह्मांडे तथा पिंडे' के सिद्धांत के अनुसार, वैदिक साइंस हमें यकीन दिलाता है कि जो कुछ भी पूरे ब्रह्मांड में है,
                        वही हमारे शरीर में भी है। इस साइंस का एक ज़रूरी हिस्सा है जप, ध्यान और यज्ञ जैसे तरीकों से माहौल से नेगेटिविटी
                        को दूर करना और पॉजिटिव एनर्जी पाना। संक्षेप में, वैदिक साइंस जीवन जीने का एक खुशहाल तरीका है जो भौतिक
                        तरक्की और आध्यात्मिक शांति के बीच बैलेंस बनाता है।
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
                        <img src="images/images/vaidik-shastra02.webp" class="img-fluid main-ritual-img" alt="Vedic Ritual">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="principle-content">
                        <h1 class="pbmit-title">वेदों की संरचना</h1>
                        <div class="samagri-container">
                            <h3>चार प्रमुख वेद हैं:</h3>
                        </div>
                        <div class="samagri-container">
                            <span class="samagri-box">
                                ऋग्वेद — विभिन्न देवताओं की स्तुति और मंत्र, जैसे अग्नि, इंद्र, वरुण।
                            </span>
                            <span class="samagri-box">
                                यजुर्वेद — यज्ञों और अनुष्ठानों के लिए आवश्यक प्रक्रियाएं और मंत्र।
                            </span>
                            <span class="samagri-box">
                                सामवेद — ऋग्वेद के मंत्रों पर आधारित गीतात्मक (गायन) मंत्र।
                            </span>
                            <span class="samagri-box">
                                अथर्ववेद — छल-कपट, पूजा-पाठ, जड़ी-बूटियों का ज्ञान, नैतिकता।
                            </span>
                        </div>



                        <br>

                        <div class="samagri-container">
                            <h3>प्रत्येक वेद के चार भाग हैं:</h3>
                        </div>
                        <div class="samagri-container">
                            <span class="samagri-box">संहिता: मंत्रों का संग्रह।</span>
                            <span class="samagri-box">ब्राह्मण: अनुष्ठानों और समारोहों की व्याख्या।</span>
                            <span class="samagri-box">आरण्यक: वन में साधना करने वालों के लिए ध्यान और चिंतन संबंधी ग्रंथ।</span><br>
                            <span class="samagri-box">उपनिषद: दर्शन, आत्मा, ब्रह्म और मोक्ष पर गहन चिंतन।</span>
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
                            <h2 class=""><i class="fas fa-fire-alt"></i>वैदिक शास्त्र का दर्शन</h2>

                            <div class="ritual-intro-text">
                                <p>आरंभ में अनुष्ठानिक माने जाने वाले वेदों का बाद में उपनिषदों में गहन दर्शन के रूप में विकास हुआ।</p>
                            </div>

                            <div class="samagri-container">
                                <span class="samagri-box">ब्रह्म: परम, अनंत, निर्गुण सत्य।</span>
                                <span class="samagri-box">आत्मा: व्यक्तिगत आत्मा, जो अंततः ब्रह्म के साथ एक है।</span>
                                <span class="samagri-box">मोक्ष: पुनर्जन्म के चक्र से मुक्ति।</span><br>
                                <span class="samagri-box">कर्म: कर्म और उसके फल, या परिणामी नियम।</span>
                                <div class="ritual-intro-text">
                                    <p>इस दर्शन ने वेदांत, सांख्य, योग और मीमांसा जैसे बाद के दर्शनों को दिशा प्रदान की।</p>
                                </div>
                            </div>



                            <h2 class=""><i class="fas fa-fire-alt"></i>परंपरा और संरक्षण</h2>
                            <div class="samagri-container">
                                <span class="samagri-box">वैदिक ग्रंथों को गुरुओं की पीढ़ियों द्वारा शिष्यों को श्रुति (सुने हुए शब्द) के रूप में मौखिक रूप से पढ़ाया जाता था।</span>
                                <span class="samagri-box">विभिन्न शाखाएँ बनाई गईं, जिनमें से प्रत्येक ने अपना-अपना संस्करण संरक्षित रखा।</span>
                                <span class="samagri-box">ये ग्रंथ बाद में लिखित रूप में आए, लेकिन आज भी मौखिक परंपरा को श्रेष्ठ माना जाता है।</span><br>
                            </div><br>

                            <h2 class=""><i class="fas fa-fire-alt"></i>आज का महत्व</h2>
                            <div class="ritual-intro-text">
                                <p>वैदिक ग्रंथों का प्रभाव आज भी बरकरार है:</p>
                            </div>

                            <div class="samagri-container">
                                <span class="samagri-box">धार्मिक अनुष्ठानों और पूजा पद्धतियों में।</span>
                                <span class="samagri-box">संस्कृत भाषा और पारंपरिक ज्ञान (आयुर्वेद, ज्योतिष, वास्तुकला) में।</span>
                                <span class="samagri-box">नैतिक मूल्यों, सामाजिक कर्तव्यों और आध्यात्मिक जीवन पथों को निर्धारित करने में।</span><br>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="ritual-image-frame">
                            <img src="images/images/vaidik-shastra04.jpg" class="img-fluid rounded-custom shadow-lg" alt="यज्ञाची प्रमुख अंगे">
                            <div class="frame-decoration"></div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <div class="wedding-ritual-section mt-5">
            <h2 class="wedding-section-title text-center mb-5">
                <i class="fas fa-fire"></i> वैदिक ग्रंथों के मुख्य सिद्धांत
            </h2>

            <div class="wedding-steps-grid">

                <div class="wedding-step-card">
                    <div class="wedding-step-icon"><i class="fas fa-bullseye"></i></div>
                    <h3>धर्म (कर्तव्य):</h3>
                    <p>वैदिक शिक्षाएं व्यक्तिगत और सामाजिक कर्तव्यों पर मार्गदर्शन प्रदान करती हैं।</p>
                </div>

                <div class="wedding-step-card">
                    <div class="wedding-step-icon"><i class="fas fa-igniting"></i></div>
                    <h3>ऋत (सृष्टि का संतुलन):</h3>
                    <p>अनुष्ठानों और नैतिक जीवन शैली के माध्यम से ब्रह्मांड का संतुलन बनाए रखना।</p>
                </div>

                <div class="wedding-step-card">
                    <div class="wedding-step-icon"><i class="fas fa-vihara"></i></div>
                    <h3>यज्ञ (होम, बलिदान):</h3>
                    <p>वे अनुष्ठान जो ईश्वर और मनुष्य के बीच संबंध को मजबूत करते हैं।</p>
                </div>

                <div class="wedding-step-card">
                    <div class="wedding-step-icon"><i class="fas fa-mortar-pestle"></i></div>
                    <h3>मंत्रों और ध्वनि की शक्ति: </h3>
                    <p>मंत्रों का शुद्ध पाठ शक्तिशाली और परिवर्तनकारी माना जाता है।</p>
                </div>

                <div class="wedding-step-card">
                    <div class="wedding-step-icon"><i class="fas fa-dove"></i></div>
                    <h3>प्रकृति में दैवीयता</h3>
                    <p>अग्नि, वायु, सूर्य, नदियाँ दैवीय शक्तियों से युक्त मानी जाती हैं।</p>
                </div>

            </div>
        </div>

        <div class="compact-section-wrapper">
            <div class="philosophy-card ritual-rules-card">
                <div class="philosophy-flex">

                    <div class="phi-content-col rules-bg">
    <div class="content-padding">
        <h2 class="mini-title"><i class="fas fa-hand-holding-water"></i>यज्ञ के फायदे (वैदिक दृष्टि से)</h2>
        <ul class="ritual-list">
            <li><i class="fas fa-check"></i> आध्यात्मिक प्रगति और मोक्ष का मार्ग।</li>
            <li><i class="fas fa-check"></i> वातावरण की अशुद्धता समाप्त होती है।</li>
            <li><i class="fas fa-check"></i> जीवों के कल्याण के लिए ऊर्जा का प्रक्षेपण।</li>
            <li><i class="fas fa-check"></i> मानसिक और शारीरिक स्वास्थ्य में वृद्धि।</li>
            <li><i class="fas fa-check"></i> कर्मशुद्धि और ऋणमोचन।</li>
        </ul><br>
        <h2 class="mini-title"><i class="fas fa-hand-holding-water"></i>वैदिक महत्त्व</h2>
        <ul class="ritual-list">
            <li><i class="fas fa-check"></i>यज्ञो वै श्रेष्ठतमं कर्म — यज्ञ श्रेष्ठ कर्म है (भगवद्गीता ४.२३)।</li>
            <li><i class="fas fa-check"></i> यज्ञ के बिना देवता संतुष्ट नहीं होते।</li>
            <li><i class="fas fa-check"></i> यज्ञ से वर्षा, अन्न वृद्धि और सृष्टि चक्र चलता है (गीता ३.१४)।</li>
        </ul>
    </div>
</div>


                  <div class="phi-content-col meaning-bg">
    <div class="content-padding">
        <h2 class="mini-title"><i class="fas fa-lightbulb"></i> यज्ञ के प्रकार (वैदिक काल में)</h2>
        <div class="meaning-item">
            <h4>नित्य यज्ञ —</h4>
            <p>प्रतिदिन किए जाने वाले यज्ञ (अग्निहोत्र, दर्शपूर्णिमा, अग्रायण)।</p>
        </div>
        <div class="meaning-item">
            <h4>काम्य यज्ञ —</h4>
            <p>विशेष फल प्राप्ति के लिए (पुत्रकामेष्टी, सर्वकामेष्टी, राजसूय, अश्वमेध)।</p>
        </div>
        <div class="meaning-item">
            <h4>प्रायश्चित्त यज्ञ —</h4>
            <p>पापों के प्रायश्चित के लिए।</p>
        </div>
        <div class="meaning-item">
            <h4>सामाजिक यज्ञ —</h4>
            <p>जनकल्याण के लिए (सार्वजनिक सत्यनारायण यज्ञ, रुद्रयज्ञ, दुर्गायज्ञ)।</p>
        </div>
    </div>
</div>

                </div>
            </div>
        </div>

</section>

<?php include 'hindi/footer.php'; ?>