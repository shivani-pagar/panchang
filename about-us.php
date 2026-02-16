<?php include 'hindi/header.php'; ?>
<style>
    /* Styling variables */
    :root {
        --ivory: #F6F3EE;
        --gold: #C9A24D;
        --saffron: #E38B29;
        --navy: #1a2b48;
    }

    .text-gold {
        color: var(--gold) !important;
    }

    .text-saffron {
        color: var(--saffron) !important;
    }

    .text-navy {
        color: var(--navy);
    }

    /* Custom Divider */
    .custom-divider {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }

    .custom-divider .line {
        height: 1.5px;
        width: 60px;
        background: var(--gold);
    }

    /* Image Box Effects */
    .image-box-premium {
        padding: 10px;
    }

    .image-border-decoration {
        position: absolute;
        top: -10px;
        left: -10px;
        width: 60%;
        height: 60%;
        border-top: 5px solid var(--gold);
        border-left: 5px solid var(--gold);
        z-index: 0;
    }

    .floating-info-card {
        position: absolute;
        bottom: 20px;
        right: -10px;
        border-radius: 5px;
        min-width: 160px;
    }

    /* List Styling */
    .custom-list-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 10px;
        list-style: none;
        padding: 0;
    }

    .custom-list-grid li {
        font-size: 0.95rem;
        color: #444;
    }

    /* Component Pills */
    .component-pill {
        background: #fdfcf9;
        padding: 12px;
        border-radius: 8px;
        border: 1px solid #f1ece2;
        font-size: 0.9rem;
        height: 100%;
        transition: 0.3s;
    }

    .component-pill:hover {
        border-color: var(--gold);
        background: #fff;
    }

    .highlight-underline {
        border-bottom: 2px solid var(--gold);
        padding-bottom: 2px;
    }

    /* Color Palette */
    :root {
        --ivory-light: #F6F3EE;
        --soft-gold: #C9A24D;
        --saffron: #E38B29;
        --navy-dark: #1A1A1A;
        --white: #FFFFFF;
    }


    .guruji-full-profile {
        padding: 100px 0;
        background: linear-gradient(to bottom, #fffaf5, #ffffff);
        font-family: 'Mukta', sans-serif;
    }

    /* Image Side */
    .profile-image-box {
        position: relative;
        text-align: center;
    }

    .image-wrapper {
        position: relative;
        border-radius: 25px;
        overflow: hidden;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
    }

    .image-wrapper img {
        width: 100%;
        border-radius: 25px;
    }

    .experience-badge {
        position: absolute;
        bottom: 20px;
        right: 20px;
        background: #D32F2F;
        color: #fff;
        padding: 10px 20px;
        font-weight: 700;
        border-radius: 30px;
        font-size: 14px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }

    .motto-box {
        margin-top: 25px;
        padding: 12px;
        border: 2px dashed #D32F2F;
        border-radius: 12px;
        font-weight: 700;
        color: #D32F2F;
        background: #fff;
    }

    /* Content Side */
    .section-subtitle {
        color: #E65100;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .guruji-name {
        font-size: 2.4rem;
        font-weight: 800;
        margin-top: 10px;
    }

    .section-line {
        width: 70px;
        height: 4px;
        background: #D32F2F;
        margin: 15px 0 30px;
    }

    .profile-content p {
        color: #555;
        line-height: 1.9;
        margin-bottom: 20px;
        text-align: justify;
    }

    .mini-title {
        font-weight: 700;
        margin-top: 40px;
        color: #3E2723;
    }

    /* Container to control width */
    .mantra-ribbon-container {
        max-width: 950px;
        /* रुंदी कमी केली */
        margin: 20px auto;
        padding: 0 15px;
    }

    /* Slim Ribbon Styling */
    .mantra-ribbon-slim {
        background: linear-gradient(45deg, #ffddab, #ffd6a7);
        /* सात्विक लाल रंग */
        color: #ffffff;
        border-radius: 12px;
        padding: 12px 25px;
        /* उंची कमी केली */
        box-shadow: 0 4px 15px rgba(211, 47, 47, 0.2);
        border: 2px solid #FFD700;
        /* सोनेरी बॉर्डर */
    }

    .mantra-inner-wrap {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 15px;
    }

    /* Icon Size */
    .mantra-icon {
        font-size: 1.5rem;
        color: #FFD700;
    }

    /* Text Content Alignment */
    .mantra-content {
        text-align: center;
        flex: 1;
    }

    /* Sanskrit Text - Smaller & Bold */
    .sanskrit-shlok-small {
        font-size: 1.1rem;
        font-weight: 700;
        margin-bottom: 3px;
        /* अंतर कमी केले */

        color: #FFF9C4;
    }

    /* Meaning Text - Smaller */
    .shlok-meaning-small {
        font-size: 0.85rem;
        margin-bottom: 0;
        opacity: 0.9;
        line-height: 1.4;
    }

    /* Mobile Responsive */
    @media (max-width: 768px) {
        .mantra-inner-wrap {
            flex-direction: column;
            gap: 8px;
        }

        .mantra-icon {
            display: none;
            /* मोबाईलवर आयकॉन लपवले जेणेकरून उंची वाचेल */
        }

        .sanskrit-shlok-small {
            font-size: 1rem;
        }
    }

    /* Responsive */
    @media (max-width: 991px) {
        .guruji-full-profile {
            padding: 60px 0;
        }

        .guruji-name {
            font-size: 1.8rem;
        }
    }


    /* Sacred Quote */
    .sacred-quote {
        background: #fff;
        border-radius: 15px;
        border: 1px solid #FFE0B2;
    }

    .sanskrit-text {
        font-size: 1.1rem;
        font-weight: 700;
        color: #D32F2F;
    }

    .marathi-meaning {
        font-size: 0.9rem;
        color: #5D4037;
        font-weight: 600;
    }

    /* Responsive */
    @media (max-width: 991px) {
        .profile-image-frame {
            min-height: 400px;
            margin-bottom: 30px;
        }

        .profile-main-title {
            font-size: 2.2rem;
        }
    }

    /* Section Background */
    .about-profile-section {
        background-color: var(--ivory-light);
        padding: 80px 0;
        font-family: 'Mukta', sans-serif;
        /* Best Professional Marathi Font */
    }

    /* Image Styling */
    .profile-image-container {
        position: relative;
        padding: 20px;
    }

    .image-inner {
        border-radius: 8px;
        overflow: hidden;
        position: relative;
        z-index: 2;
        border: 5px solid var(--white);
    }

    .gold-accent-frame {
        position: absolute;
        top: 0;
        left: 0;
        width: 90%;
        height: 95%;
        background-color: var(--soft-gold);
        z-index: 1;
        opacity: 0.2;
        border-radius: 8px;
    }

    .experience-seal {
        position: absolute;
        bottom: -15px;
        right: -15px;
        background: var(--soft-gold);
        color: white;
        padding: 15px 25px;
        border-radius: 50px 0 50px 50px;
        z-index: 3;
        text-align: center;
        box-shadow: 0 10px 30px rgba(201, 162, 77, 0.4);
    }

    .experience-seal .count {
        font-size: 1.8rem;
        font-weight: 800;
        display: block;
        line-height: 1;
    }

    .experience-seal .text {
        font-size: 0.8rem;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    /* Text Content Styling */
    .subtitle-top {
        font-size: 0.9rem;
        letter-spacing: 3px;
        display: block;
    }

    .text-navy {
        color: var(--navy-dark);
    }

    .text-saffron {
        color: var(--saffron);
    }

    .ls-2 {
        letter-spacing: 2px;
    }

    .ornament-divider {
        display: flex;
        align-items: center;
        margin: 15px 0;
    }

    .ornament-divider::before,
    .ornament-divider::after {
        content: "";
        flex: 0 1 50px;
        height: 1px;
        background: var(--soft-gold);
    }

    .ornament-divider i {
        padding: 0 15px;
    }

    .intro-lead {
        font-size: 1.25rem;
        color: var(--navy-dark);
        border-left: 4px solid var(--soft-gold);
        padding-left: 20px;
    }

    .main-bio p {
        line-height: 1.8;
        margin-bottom: 20px;
        text-align: justify;
    }

    /* Trust Badges */
    .trust-badge {
        text-align: center;
        padding: 15px;
        background: var(--white);
        border-radius: 8px;
        border: 1px solid rgba(201, 162, 77, 0.1);
        transition: 0.3s ease;
    }

    .trust-badge:hover {
        transform: translateY(-5px);
        border-color: var(--soft-gold);
    }

    .trust-badge i {
        display: block;
        font-size: 1.5rem;
        color: var(--soft-gold);
        margin-bottom: 8px;
    }

    .trust-badge span {
        font-size: 0.85rem;
        font-weight: 700;
        color: var(--navy-dark);
    }
    .premium-counter-section {
    background-color: #fff9f2; /* Light Vedic Cream */
    font-family: 'Mukta', sans-serif;
}

/* Container Box */
.counter-wrapper {
    background: #ffffff;
    border-radius: 15px;
    border: 1px solid #ffe0b2;
    overflow: hidden;
}

/* Individual Item Box */
.counter-item-box {
    transition: all 0.3s ease;
    position: relative;
}

.counter-item-box:hover {
    background-color: #fff3e0;
}

/* Custom Border between columns */
.border-end-custom {
    border-right: 1px solid #eee;
}

/* Icons */
.counter-icon {
    font-size: 2.5rem;
    color: #D32F2F; /* Sacred Red */
    margin-bottom: 15px;
}

/* Numbers */
.counter-number {
    font-size: 3rem;
    font-weight: 800;
    color: #3E2723; /* Dark Chocolate Brown */
    line-height: 1;
    margin-bottom: 10px;
}

.counter-number .plus {
    color: #FFB300; /* Golden Yellow */
    margin-left: 5px;
}

/* Titles */
.counter-title {
    font-size: 1.4rem;
    font-weight: 700;
    color: #D32F2F;
    margin-bottom: 8px;
    letter-spacing: 1px;
}

/* Description */
.counter-desc {
    font-size: 1rem;
    color: #777;
    margin-bottom: 0;
}

/* Responsive */
@media (max-width: 767px) {
    .border-end-custom {
        border-right: none;
        border-bottom: 1px solid #eee;
    }
}
</style>
<div class="pbmit-title-bar-wrapper" style="background-image:url(images/guruji/ser-img/aboubg.jpg);">
    <div class="container paddcon">
        <div class="row align-items-center">
            <div class="col-md-7 col-lg-7 order-md-2">
                <div class="pbmit-title-bar-content">
                    <div class="pbmit-title-bar-content-inner">
                        <div class="pbmit-tbar">
                            <div class="pbmit-tbar-inner container">
                                <h1 class="pbmit-tbar-title">हमारे बारे में</h1>
                            </div>
                        </div>
                        <div class="pbmit-breadcrumb">
                            <div class="pbmit-breadcrumb-inner">
                                <span><a title="" href="index.php" class="home"><span>मुख्यपृष्ठ</span></a></span>
                                <span class="sep">-</span>
                                <span><span class="post-root post post-post current-item">हमारे बारे में</span></span>
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


<section class="about-profile-section py-6">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-5 col-md-12 mb-5 mb-lg-0">
                <div class="profile-image-container">
                    <div class="gold-accent-frame"></div>
                    <div class="image-inner shadow-2xl">
                        <img src="images/About images/img01.avif"
                            class="img-fluid profile-main-img"
                            alt="श्री सचिन काशीनाथ जोशी">
                    </div>
                    <div class="experience-seal bg-gold">
                        <span class="count">२५+</span>
                        <span class="text">सालों का <br> समृद्ध अनुभव</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-7 col-md-12">
                <div class="ps-lg-5">
                    <div class="about-header mb-4">
                        <span class="subtitle-top text-saffron fw-bold ls-2">अनुभव और परंपरा</span>
                        <h2 class="display-5 fw-bold text-navy mt-2">|| हमारे बारे में ||</h2>
                        <div class="ornament-divider">
                            <i class="fas fa-om text-gold"></i>
                        </div>
                    </div>

                    <div class="about-description-box">
                        <p class="intro-lead mb-4">
                            मैं, <strong>श्री सचिन काशीनाथ जोशी</strong>, पिछले 25 सालों से एक अनुभवी वैदिक कर्मकांडी, ज्योतिषी, वास्तु कंसल्टेंट और न्यूमेरोलॉजिस्ट के तौर पर काम कर रहा हूँ। </p>

                        <div class="main-bio text-secondary">
                            <p>मेरा काम नासिक से सेंटर्ड है, और ऑनलाइन सर्विसेज़ के ज़रिए देश-विदेश के लोग भी मेरी सर्विसेज़ का फ़ायदा उठाते हैं। मैंने नासिक में <strong>श्री गुरुगंगेश्वर वेदशाला</strong> और वाराणसी और कर्नाटक के मशहूर वैदिक गुरुकुलों में पढ़ाई की।</p>
                            <p>वहाँ मैंने वेदों, रीति-रिवाजों, पारंपरिक ज्योतिष और वास्तु शास्त्र की गहराई से पढ़ाई की है। हम वैदिक परंपरा को मानते हैं और ऐसे समाधान और मार्गदर्शन देते हैं जो आज के समय के हिसाब से सही हैं।</p>
                        </div>
                    </div>

                    <div class="row mt-4 g-3">
                        <div class="col-sm-4">
                            <div class="trust-badge">
                                <i class="fas fa-university"></i>
                                <span>वैदिक शिक्षा</span>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="trust-badge">
                                <i class="fas fa-globe"></i>
                                <span>विश्व सेवा</span>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="trust-badge">
                                <i class="fas fa-certificate"></i>
                                <span>वैज्ञानिक समाधान</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="guruji-full-profile">
    <div class="container">
        <div class="row align-items-center g-5">

            <!-- LEFT IMAGE SIDE -->
            <div class="col-lg-5">
                <div class="profile-image-box">
                    <div class="image-wrapper">
                        <img src="images/About images/img02.png" alt="श्री सचिन जोशी गुरुजी">
                        <div class="experience-badge">२५+ वर्षों का अनुभव</div>
                    </div>

                    <div class="motto-box">
                        "संकल्प में उपलब्धि"
                    </div>
                </div>
            </div>

            <!-- RIGHT CONTENT SIDE -->
            <div class="col-lg-7">
                <div class="profile-content">

                    <span class="section-subtitle">वास्तुकार और ज्योतिषीय गाइड</span>
                    <h2 class="">श्री सचिन जोशी गुरुजी</h2>
                    <div class="section-line"></div>

                    <p>
                        <strong>सचिन जोशी पंचांग वास्तु एसोसिएट्स</strong> पिछले 25 सालों से वैदिक काम, ज्योतिष और वास्तु शास्त्र,
                        तीनों फील्ड में काम कर रहे हैं। अलग-अलग तरह के यज्ञकर्म, शादी, नवचंडी, वास्तु शांति के साथ-साथ सटीक ज्योतिष
                        और वास्तु गाइडेंस के ज़रिए, उन्होंने भारत और विदेश में कई परिवारों को शारीरिक, मानसिक और पैसे की मुश्किलों से
                        उबरने में मदद की है।
                    </p>

                    <p>
                        उन्होंने नासिक में <strong>गुरुगंगेश्वर वेद मंदिर</strong> में वेदों की पढ़ाई की
                        और नासिक, काशी और कर्नाटक (धारवाड़) से वास्तु और ज्योतिष का ज्ञान भी हासिल किया।
                        वे लगातार ज्ञान देने के काम में लगे हुए हैं ताकि प्राचीन भारतीय ज्ञान परंपरा को बढ़ावा दिया जा सके और समाज
                        को इस ज्ञान से फायदा हो सके।
                    </p>

                    <h4 class="mini-title">वास्तूशास्त्र आणि समाधान</h4>

                    <p>
                        श्री सचिन जोशी गुरुजी एक अनुभवी वास्तु कंसल्टेंट हैं जो घरों, ऑफिस और कमर्शियल जगहों में
                        पॉजिटिव एनर्जी बनाने के लिए सही गाइडेंस देते हैं ताकि खुशी, शांति और खुशहाली मिल सके।
                        उनके अनुभव से कई लोगों ने अपनी ज़िंदगी में पॉजिटिव बदलाव महसूस किए हैं।
                    </p>

                    <div class="mantra-ribbon-container">
                        <div class="mantra-ribbon-slim">
                            <div class="mantra-inner-wrap">
                                <div class="mantra-icon"><i class="fas fa-om"></i></div>
                                <div class="mantra-content">
                                    <p class="sanskrit-shlok-small">
                                        “न त्वहं कामये राज्यम्। न स्वर्ग न पुनर्भवम् ।।
                                        कामये दुःखतप्तानाम् । प्राणिनाम् आर्तिनाशनम् ।।
                                    </p>
                                    <p class="shlok-meaning-small">
                                        <strong>मतलब:</strong> “मुझे न तो राज्य की इच्छा है, न स्वर्ग की, और न ही पुनर्जन्म (मुक्ति) की। मेरी बस एक ही इच्छा है – सभी दुखियों के दुख दूर करना।”
                                    </p>
                                </div>
                                <div class="mantra-icon"><i class="fas fa-om"></i></div>
                            </div>
                        </div>
                    </div>

                    <p>
                        इसी सोच के हिसाब से, श्री सचिन जोशी गुरुजी इंसानियत की भलाई के लिए काम करते हैं।
                        वे अपने ज्ञान और अनुभव का इस्तेमाल करके लोगों की ज़िंदगी में पॉजिटिविटी, सफलता और संतुष्टि लाने के लिए समर्पित हैं।
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="section-md">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <div class="pbmit-heading-subheading-style-1">
                    <h4 class="pbmit-subtitle">हमारी गैलरी</h4>
                    <h2 class="pbmit-title">गुरुजी की <strong>कार्यशाला और बलिदान</strong></h2>
                </div>
            </div>

            <!-- Image Gallery - Add your 9 images here -->
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="gallery-item">
                    <img src="images/About images/img03.png" class="img-fluid w-100 rounded shadow" alt="गुरुजीची कार्यशाळा">
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="gallery-item">
                    <img src="images/About images/img04.png" class="img-fluid w-100 rounded shadow" alt="यज्ञ कार्यक्रम">
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="gallery-item">
                    <img src="images/About images/img05.png" class="img-fluid w-100 rounded shadow" alt="वैदिक कर्मकांड">
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="gallery-item">
                    <img src="images/About images/img06.png" class="img-fluid w-100 rounded shadow" alt="पूजा विधी">
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="gallery-item">
                    <img src="images/About images/img07.png" class="img-fluid w-100 rounded shadow" alt="गुरुजी सोबत शिष्य">
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="gallery-item">
                    <img src="images/About images/img08.png" class="img-fluid w-100 rounded shadow" alt="वास्तू सल्लागारी">
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="gallery-item">
                    <img src="images/About images/img09.jpg" class="img-fluid w-100 rounded shadow" alt="ज्योतिष मार्गदर्शन">
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="gallery-item">
                    <img src="images/About images/img10.png" class="img-fluid w-100 rounded shadow" alt="यज्ञ समारोप">
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="gallery-item">
                    <img src="images/About images/img11.png" class="img-fluid w-100 rounded shadow" alt="शुभेच्छा कार्यक्रम">
                </div>
            </div>
            <!-- End Image Gallery -->

        </div>
    </div>
</section>

<section class="hero-mini py-5" style="background-color: #F6F3EE; border-bottom: 2px solid #C9A24D;">
    <div class="container text-center">
        <h1 class="display-4 fw-bold text-navy mb-3">पंचांग वास्तु क्या है?</h1>
        <div class="custom-divider justify-content-center">
            <span class="line"></span>
            <i class="fas fa-om mx-3 text-gold"></i>
            <span class="line"></span>
        </div>
    </div>
</section>

<section class="content-body py-5">
    <div class="container">
        <div class="row align-items-start">

            <div class="col-lg-5 mb-5 mb-lg-0">
                <div class="image-box-premium position-relative">
                    <div class="image-border-decoration"></div>
                    <img src="images/About images/img12.png" alt="Panchang Vastu" class="img-fluid rounded shadow-lg">
                </div>
            </div>

            <div class="col-lg-7">
                <div class="ps-lg-4">
                    <p class="lead fw-medium text-dark mb-4" style="line-height: 1.8;">
                        <span class="text-saffron fw-bold">पंचांग वास्तु, वास्तु शास्त्र, ज्योतिष और पंच तत्व पर आधारित एक होलिस्टिक साइंस है, जो इंसान की ज़िंदगी को बैलेंस्ड और पॉजिटिव बनाने का काम करता है। “पंचांग” शब्द का मतलब पाँच ज़रूरी एलिमेंट्स (तत्व) – तिथि, वार, नक्षत्र, योग और करण से है। इन पाँच एलिमेंट्स पर आधारित वास्तु शास्त्र, ज्योतिष और आध्यात्मिक उपायों की ठीक से स्टडी करके, पंचांग वास्तु ज़िंदगी की परेशानियों को दूर करने और एनर्जी को बैलेंस करने में मदद करता है।
                    </p>

                    <div class="importance-box p-4 mb-4 rounded-3" style="background: #fff; border: 1px solid #eee;">
                        <h4 class="text-gold fw-bold mb-3"><i class="fas fa-balance-scale me-2"></i>पंचांग वास्तुचे महत्त्व</h4>
                        <p class="text-secondary small-text">
                            पूरी सृष्टि पांच तत्वों – आग, धरती, हवा, पानी और आसमान – पर आधारित है। अगर ये तत्व बैलेंस नहीं हैं, तो घर या काम की जगह पर नेगेटिव एनर्जी बनती है और ज़िंदगी में कई तरह की परेशानियां आती हैं। पंचांग वास्तु के ज़रिए इन पांच तत्वों को बैलेंस किया जा सकता है, जिससे ज़िंदगी ज़्यादा पॉजिटिव, हेल्दी और खुशहाल बनती है। </p>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-12">
                            <h4 class="h5 fw-bold text-navy mb-3">पंचांग वास्तु का उपयोग किसके लिए है?</h4>
                            <ul class="custom-list-grid">
                                <li><i class="fas fa-check-circle text-gold"></i> घर में वास्तु दोष दूर करके पॉजिटिव एनर्जी बनाने के लिए</li>
                                <li><i class="fas fa-check-circle text-gold"></i> बिज़नेस और ऑफिस में तरक्की के लिए</li>
                                <li><i class="fas fa-check-circle text-gold"></i> मेंटल और फिजिकल हेल्थ को बेहतर बनाने के लिए</li>
                                <li><i class="fas fa-check-circle text-gold"></i> ग्रह दोष दूर करने और शुभ फल पाने के लिए</li>
                                <li><i class="fas fa-check-circle text-gold"></i> आध्यात्मिक तरक्की और शांति के लिए</li>
                            </ul>
                        </div>
                    </div>

                    <h4 class="h5 fw-bold text-navy mb-3">शामिल किए गए तत्व:</h4>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <div class="component-pill"><i class="fas fa-university text-gold me-2"></i> <strong>आर्किटेक्चर:</strong> घरों, दुकानों, ऑफिस के सही डिज़ाइन और एनर्जी बैलेंस के लिए</div>
                        </div>
                        <div class="col-sm-6">
                            <div class="component-pill"><i class="fas fa-star-and-crescent text-gold me-2"></i> <strong>ज्योतिष:</strong> ग्रह दोष, कुंडली विश्लेषण और उपाय</div>
                        </div>
                        <div class="col-sm-6">
                            <div class="component-pill"><i class="fas fa-hands text-gold me-2"></i> <strong>अध्यात्मिक:</strong> पूजा, हवन, यज्ञ, उपासना, साधना</div>
                        </div>
                        <div class="col-sm-6">
                            <div class="component-pill"><i class="fas fa-gem text-gold me-2"></i> <strong>एनर्जी हीलिंग:</strong> रेकी, क्रिस्टल हीलिंग, डाउसिंग पेंडुलम</div>
                        </div>
                        <div class="col-sm-12">
                            <div class="component-pill"><i class="fas fa-scroll text-gold me-2"></i> <strong>वैदिक:</strong> रुद्राक्ष, यंत्र-तंत्र, मंत्र उपाय</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="premium-counter-section py-5">
    <div class="container">
        <div class="counter-wrapper shadow-sm">
            <div class="row g-0">
                
                <div class="col-md-4 border-end-custom">
                    <div class="counter-item-box text-center p-4">
                        <div class="counter-icon">
                            <i class="fas fa-dharmachakra"></i>
                        </div>
                        <div class="counter-number">
                            <span class="numinate" data-to="2500">0</span><span class="plus">+</span>
                        </div>
                        <h3 class="counter-title">|| वैदिक विज्ञान||</h3>
                        <p class="counter-desc">Accurate horoscope analysis and guidance</p>
                    </div>
                </div>

                <div class="col-md-4 border-end-custom">
                    <div class="counter-item-box text-center p-4">
                        <div class="counter-icon">
                            <i class="fas fa-om"></i>
                        </div>
                        <div class="counter-number">
                            <span class="numinate" data-to="1800">0</span><span class="plus">+</span>
                        </div>
                        <h3 class="counter-title">|| ज्योतिष शास्त्र ||</h3>
                        <p class="counter-desc">शास्त्रीय अनुष्ठान और पूजा मार्गदर्शन</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="counter-item-box text-center p-4">
                        <div class="counter-icon">
                            <i class="fas fa-kaaba"></i>
                        </div>
                        <div class="counter-number">
                            <span class="numinate" data-to="1200">0</span><span class="plus">+</span>
                        </div>
                        <h3 class="counter-title">|| वास्तु शास्त्र ||</h3>
                        <p class="counter-desc">समृद्धि के लिए पवित्र वास्तु उपाय</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    jQuery(document).ready(function($) {
        var a = 0;
        $(window).scroll(function() {
            var oTop = $('.premium-counter-section').offset().top - window.innerHeight;
            if (a == 0 && $(window).scrollTop() > oTop) {
                $('.numinate').each(function() {
                    var $this = $(this),
                        countTo = $this.attr('data-to');
                    $({
                        countNum: $this.text()
                    }).animate({
                        countNum: countTo
                    }, {
                        duration: 3000,
                        easing: 'swing',
                        step: function() {
                            $this.text(Math.floor(this.countNum));
                        },
                        complete: function() {
                            $this.text(this.countNum);
                        }
                    });
                });
                a = 1;
            }
        });
    });
</script>

<?php include 'hindi/footer.php'; ?>