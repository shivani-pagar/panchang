<?php include 'english/header.php'; ?>
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
</style>
<div class="pbmit-title-bar-wrapper" style="background-image:url(images/guruji/ser-img/aboubg.jpg);">
    <div class="container paddcon">
        <div class="row align-items-center">
            <div class="col-md-7 col-lg-7 order-md-2">
                <div class="pbmit-title-bar-content">
                    <div class="pbmit-title-bar-content-inner">
                        <div class="pbmit-tbar">
                            <div class="pbmit-tbar-inner container">
                                <h1 class="pbmit-tbar-title">About us</h1>
                            </div>
                        </div>
                        <div class="pbmit-breadcrumb">
                            <div class="pbmit-breadcrumb-inner">
                                <span><a title="" href="index.php" class="home"><span>Home</span></a></span>
                                <span class="sep">-</span>
                                <span><span class="post-root post post-post current-item">About us</span></span>
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
                        <span class="text">years <br> Experience</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-7 col-md-12">
                <div class="ps-lg-5">
                    <div class="about-header mb-4">
                        <span class="subtitle-top text-saffron fw-bold ls-2">Experience and Tradition</span>
                        <h2 class="display-5 fw-bold text-navy mt-2">|| About Us ||</h2>
                        <div class="ornament-divider">
                            <i class="fas fa-om text-gold"></i>
                        </div>
                    </div>

                    <div class="about-description-box">
                        <p class="intro-lead mb-4">
                            I, <strong>Shri Sachin Kashinath Joshi</strong>, have been working for the past 25 years as an experienced Vedic ritual expert, astrologer, Vastu consultant, and numerologist.
                        </p>

                        <div class="main-bio text-secondary">
                            <p>My work is centered in Nashik, and through online services, people from across India and abroad also benefit from my services. I received my education at <strong>Shri Guruganggeshwar Vedshala</strong> in Nashik, as well as at renowned Vedic Gurukuls in Varanasi and Karnataka.</p>

                            <p>There, I deeply studied the Vedas, ritual practices, traditional astrology, and Vastu Shastra. By following the Vedic tradition, we provide remedies and guidance that are aligned with the modern era.</p>
                        </div>
                    </div>


                    <div class="row mt-4 g-3">
                        <div class="col-sm-4">
                            <div class="trust-badge">
                                <i class="fas fa-university"></i>
                                <span>Vedic education</span>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="trust-badge">
                                <i class="fas fa-globe"></i>
                                <span>Global Service</span>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="trust-badge">
                                <i class="fas fa-certificate"></i>
                                <span>Scientific solutions</span>
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
                        <div class="experience-badge">25+ years of experience</div>
                    </div>

                    <div class="motto-box">
                        "Achievement in Resolution"
                    </div>
                </div>
            </div>

            <!-- RIGHT CONTENT SIDE -->
            <div class="col-lg-7">
                <div class="profile-content">

                    <span class="section-subtitle">Vastu Consultant and Astrologer</span>
                    <h2 class="">Shri Sachin Joshi Guruji</h2>
                    <div class="section-line"></div>

                    <p>
                        <strong>Sachin Joshi Panchnag Vastu Associates</strong> has been working in all three fields of Vedic work, astrology and Vastu Shastra for the last
                        25 years. Through various types of Yajnakarma, marriage,
                        Navchandi, Vastu Shanti as well as accurate astrology and Vastu guidance,
                        they have helped many families in India and abroad overcome physical, mental and
                        financial difficulties.
                    </p>

                    <p>
                        He studied Vedas at <strong>Gurugangeshwar Veda Mandir</strong> in Nashik
                        and also acquired Vastu and Astrology knowledge from Nashik, Kashi and Karnataka (Dharwad).
                        He is continuously engaged in the work of imparting knowledge so that the ancient Indian knowledge tradition is propagated and the society gets the benefit of this knowledge
                    </p>

                    <h4 class="mini-title">Vastu Shastra and Solutions</h4>

                    <p>
                        Shri Sachin Joshi Guruji is an experienced Vastu consultant who provides accurate guidance to create positive energy in homes, offices and commercial spaces and achieve
                        happiness, peace and prosperity. Due to his experience, many have experienced positive transformation in their lives.
                    </p>

                    <div class="mantra-ribbon-container">
                        <div class="mantra-ribbon-slim">
                            <div class="mantra-inner-wrap">
                                <div class="mantra-icon"><i class="fas fa-om"></i></div>
                                <div class="mantra-content">
                                    <p class="sanskrit-shlok-small">
                                        “I do not desire a kingdom nor heaven nor rebirth I desire the destruction of the sufferings of living beings tormented by misery
                                    </p>
                                    <p class="shlok-meaning-small">
                                        <strong>Meaning:</strong> "I have no desire for the kingdom, nor for heaven nor for rebirth (salvation). I have only one desire – to remove the suffering of all human beings who are suffering."
                                    </p>
                                </div>
                                <div class="mantra-icon"><i class="fas fa-om"></i></div>
                            </div>
                        </div>
                    </div>

                    <p>
                        According to this ideology, Shri Sachin Joshi Guruji is working for human welfare. They are dedicated to creating positivity, success and satisfaction in people’s lives through their knowledge and experience.
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
                    <h4 class="pbmit-subtitle">Our Gallery</h4>
                    <h2 class="pbmit-title">Guruji's <strong>Workshops and sacrifices</strong></h2>
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
        <h1 class="display-4 fw-bold text-navy mb-3">What is Panchang Vastu?</h1>
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
                        <span class="text-saffron fw-bold">
                            Panchang Vastu is a holistic science based on Vastu Shastra, Astrology, and the Pancha Tattva,
                            which works to make human life balanced and positive. The word “Panchang” refers to five important
                            elements (Tattva) – Tithi, Var, Nakshatra, Yoga, and Karana. By properly studying Vastu Shastra,
                            Astrology, and spiritual remedies based on these five elements, Panchang Vastu helps in removing
                            life’s difficulties and balancing energy.
                        </span>
                    </p>

                    <div class="importance-box p-4 mb-4 rounded-3" style="background: #fff; border: 1px solid #eee;">
                        <h4 class="text-gold fw-bold mb-3"><i class="fas fa-balance-scale me-2"></i>Significance of Panchang Vastu</h4>
                        <p class="text-secondary small-text">
                            The entire creation is based on the five elements – fire, earth, air, water, and sky. If these elements are not balanced, negative energy is created in the home or workplace, and various problems arise in life. Through Panchang Vastu, these five elements can be balanced, making life more positive, healthy, and prosperous.
                        </p>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-12">
                            <h4 class="h5 fw-bold text-navy mb-3">Who is Panchang Vastu Used For?</h4>
                            <ul class="custom-list-grid">
                                <li><i class="fas fa-check-circle text-gold"></i> To create positive energy by removing Vastu defects in the house</li>
                                <li><i class="fas fa-check-circle text-gold"></i> For advancement in business and office</li>
                                <li><i class="fas fa-check-circle text-gold"></i> To improve mental and physical health</li>
                                <li><i class="fas fa-check-circle text-gold"></i> For removing planetary defects and achieving auspicious results</li>
                                <li><i class="fas fa-check-circle text-gold"></i> For spiritual progress and peace</li>
                            </ul>
                        </div>
                    </div>


                    <h4 class="h5 fw-bold text-navy mb-3">Elements Included:</h4>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <div class="component-pill"><i class="fas fa-university text-gold me-2"></i> <strong>Vastu Shastra:</strong> For proper design and energy balance of houses, shops, and offices</div>
                        </div>
                        <div class="col-sm-6">
                            <div class="component-pill"><i class="fas fa-star-and-crescent text-gold me-2"></i> <strong>Astrology:</strong> Planetary defects, horoscope analysis, and remedies</div>
                        </div>
                        <div class="col-sm-6">
                            <div class="component-pill"><i class="fas fa-hands text-gold me-2"></i> <strong>Spiritual Practices:</strong> Pooja, Havan, Yagya, Upasana, Sadhana</div>
                        </div>
                        <div class="col-sm-6">
                            <div class="component-pill"><i class="fas fa-gem text-gold me-2"></i> <strong>Energy Healing:</strong> Reiki, Crystal Healing, Dowsing Pendulum</div>
                        </div>
                        <div class="col-sm-12">
                            <div class="component-pill"><i class="fas fa-scroll text-gold me-2"></i> <strong>Vedic Remedies:</strong> Rudraksha, Yantra-Tantra, Mantra Remedies</div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
<?php include 'counter_en.php'; ?>

<?php include 'english/footer.php'; ?>