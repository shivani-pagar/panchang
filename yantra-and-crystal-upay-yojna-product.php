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

    .step-card img {
        width: 50%;
        height: 180px;
        object-fit: cover;
        border-radius: 10px;
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

    .content-section {
        padding: 60px 0;
        background-color: #fffaf5;
        /* हलका सात्विक बॅकग्राउंड */
    }

    /* Section Styling */
    .wedding-ritual-section {
        padding: 60px 20px;
        background: #fffaf5;
    }

    .wedding-section-title {
        font-size: 32px;
        font-weight: 700;
        color: #8b0000;
        position: relative;
    }

    .wedding-section-title i {
        color: #ff6f00;
    }

    /* Grid Layout */
    .wedding-steps-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
        gap: 30px;
        max-width: 1200px;
        margin: 0 auto;
    }

    /* Card Design */
    .wedding-step-card {
        background: #ffffff;
        padding: 30px 20px;
        border-radius: 15px;
        text-align: center;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .wedding-step-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
    }

    /* Image Styling */
    .wedding-step-icon {
        margin-bottom: 20px;
    }

    .wedding-yantra-img {
        width: 120px;
        height: 120px;
        object-fit: cover;
        border-radius: 50%;
        border: 4px solid #ff6f00;
        padding: 5px;
        background: #fff;
        transition: 0.3s;
    }

    .wedding-step-card:hover .wedding-yantra-img {
        transform: scale(1.08);
    }

    /* Card Title */
    .wedding-step-card h3 {
        font-size: 20px;
        color: #8b0000;
        margin-bottom: 15px;
        font-weight: 600;
    }

    /* Card Paragraph */
    .wedding-step-card p {
        font-size: 15px;
        color: #555;
        line-height: 1.6;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .wedding-section-title {
            font-size: 24px;
        }

        .wedding-step-card {
            padding: 20px 15px;
        }

        .wedding-yantra-img {
            width: 100px;
            height: 100px;
        }
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
                                <h1 class="pbmit-tbar-title">Yantra and crystal remedies</h1>
                            </div>
                        </div>
                        <div class="pbmit-breadcrumb">
                            <div class="pbmit-breadcrumb-inner">
                                <span><a title="" href="index.php" class="home"><span>Home</span></a></span>
                                <span class="sep">-</span>
                                <span><span class="post-root post post-post current-item">Yantra and crystal remedies</span></span>
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
                <div class="mantra-ribbon puja-initiation-theme">
                    <div class="mantra-icon-left"><i class="fas fa-gopuram"></i></div>
                    <div class="mantra-text-content">

                        <p class="sanskrit-shlok">
                            परीक्षितायां भुवि विघ्नराजं । समर्चयेच्चण्डिकया समेतम् ।
                            क्षेत्राधिपं चाष्टदिगीशदेवान् पुष्यैश्च धूपैर्बलिभि: सुखाय ॥
                        </p>
                        <div class="shlok-divider"></div>
                        <p class="shlok-meaning">
                            <strong>अर्थ:</strong> भूमी परीक्षणांनंतर गणपती, चंडिका माता, क्षेत्रपाल आणि अष्टदिक्पाल यांचे पूजन करावे. यामुळे वास्तूमध्ये कायमस्वरूपी सुख आणि शांती नांदते.
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
    <h2 class="pbmit-title">Yantra and Crystal Remedies</h2>
    <div class="samagri-container">
        <b>Yantras and Crystals are ancient spiritual tools that work on subtle energies. A Yantra is based on specific geometric patterns and mantras, which attract and stabilize the energy of a particular deity or planet. When properly consecrated and installed in a home, office, or prayer space, Yantras help reduce negativity in the environment and increase positive energy. <br><br>
        Crystals are natural minerals with the ability to absorb, store, and transmit energy. For example, Clear Quartz is used for mental peace, Amethyst for mental balance, and Citrine for financial prosperity. When placed or worn correctly, crystals have a positive effect on a person’s aura. <br>
        </b>
    </div>
</div>

                        </div>
                        <div class="col-lg-6">
                            <div class="image-wrapper">
                                <img src="images/images/vastu-yantra01.jpg" class="img-fluid main-ritual-img" alt="Vedic Ritual">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include 'book-now.php'; ?>


<section class="puja-details-section">
    <div class="container">

        <div class="service-page-infobox">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="image-wrapper">
                        <img src="images/images/vastu-yantra02.jpg" class="img-fluid main-ritual-img" alt="Vedic Ritual">
                    </div>
                </div>
               <div class="col-lg-6">
    <div class="principle-content">
        <h2 class="pbmit-title">What is a Yantra?</h2>
        <div class="samagri-container">
            <b>A Yantra is a piece of metal or paper of a specific shape or structure that represents a refined form of energy from a particular perspective. The Yantra usually depicts images of deities or special powers, which help channel energy positively.</b>
        </div><br>

        <div class="element-tag">
            <span class="tag-title">Symbol of Power:</span>
            <span class="tag-desc">Yantras are high-energy tools that attract the influence of divine power. From the perspective of a Yantra, deities or higher energies provide blessings and positive influence.</span>
        </div>

        <div class="element-tag">
            <span class="tag-title">Uses:</span>
            <span class="tag-desc">Yantras are used to address various challenges, such as resolving disputes, overcoming financial difficulties, correcting planetary defects, improving health, and achieving overall well-being.</span>
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
        <h2 class="pbmit-title"><i class="fas fa-fire-alt"></i>What is a Crystal?</h2>

        <div class="ritual-intro-text">
            <p>Crystals are natural minerals that come in various forms, and each type has a unique energy effect. Each crystal helps address different kinds of problems. Crystallography or <em>crystal healing</em> is an ancient science that applies the therapeutic effects of crystals on the body's energy centers (chakras).</p>
        </div>

        <div class="vows-container">
            <div class="element-tag">
                <span class="tag-title">Types:</span>
                <span class="tag-desc">Crystals are available in several types, such as Amethyst, Rose Quartz, Citrine, Tiger Eye, Earth Crystal, and others.</span>
            </div>

            <div class="element-tag">
                <span class="tag-title">Uses:</span>
                <span class="tag-desc">Crystals are used to bring mental peace, improve physical health, remove negative energy, and attract positive vibrations.</span>
            </div>

        </div>
    </div>
</div>


                    <div class="col-lg-6">
                        <div class="ritual-image-frame">
                            <img src="images/images/vastu-yantra03.jpg" class="img-fluid rounded-custom shadow-lg" alt="यज्ञाची प्रमुख अंगे">
                            <div class="frame-decoration"></div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>

    <div class="container">



        <div class="service-page-infobox">
            <div class="row align-items-center">

                <div class="col-lg-6">
                    <div class="image-wrapper">
                        <img src="images/images/vastu-yojna04.jpg" class="img-fluid main-ritual-img" alt="Vedic Ritual">
                    </div>
                </div>
               <div class="col-lg-6">
    <div class="principle-content">
        <h2 class="pbmit-title">Remedies Used in Vastu Plan Designing</h2>
        <div class="samagri-container">
        </div><br>
        <div class="vows-container">
            <div class="element-tag">
                <span class="tag-title">Use of Vastu Yantras:</span>
                <span class="tag-desc">Vastu Yantras, such as the “Vastu Pyramid” and “Vastu Dravya,” are placed in every corner of the house. This removes negative energy and balances the energy within the home.</span>
            </div>
            <div class="element-tag">
                <span class="tag-title">Planetary Peace Remedies:</span>
                <span class="tag-desc">Sometimes, remedies are performed to remove planetary defects and energy imbalances. These may include special pujas, havans, and wearing specific gemstones.</span>
            </div>
        </div>
    </div>
</div>


            </div>

        <div class="wedding-ritual-section mt-5">

    <h2 class="wedding-section-title text-center mb-5">
        <i class="fas fa-fire me-2"></i> Importance of Yantras
    </h2>

    <div class="wedding-steps-grid">

        <!-- Card 1 -->
        <div class="wedding-step-card">
            <div class="wedding-step-icon">
                <img src="images/images/vastu-yantra04.jpeg" alt="Shri Yantra" class="wedding-yantra-img">
            </div>
            <h3>Shri Yantra</h3>
            <p>
                One of the most powerful Yantras, the Shri Yantra is highly effective for receiving the blessings of Goddess Lakshmi and enhancing wealth and prosperity.
            </p>
        </div>

        <!-- Card 2 -->
        <div class="wedding-step-card">
            <div class="wedding-step-icon">
                <img src="images/images/vastu-yantra05.webp" alt="Financial Prosperity Yantra" class="wedding-yantra-img">
            </div>
            <h3>Financial Prosperity Yantra</h3>
            <p>
                By allowing positive energy to enter the home, this Yantra helps increase financial prosperity and happiness. It is useful for achieving stability and success in business.
            </p>
        </div>

        <!-- Card 3 -->
        <div class="wedding-step-card">
            <div class="wedding-step-icon">
                <img src="images/images/vastu-yantra06.jpg" alt="Positive Impact Yantra" class="wedding-yantra-img">
            </div>
            <h3>Yantra for Positive Personality Impact</h3>
            <p>
                The positive energy in the home influences the personality positively, enhancing confidence, stability, and overall positivity.
            </p>
        </div>

        <!-- Card 4 -->
        <div class="wedding-step-card">
            <div class="wedding-step-icon">
                <img src="images/images/vastu-yantra07.jpg" alt="Peace and Happiness Yantra" class="wedding-yantra-img">
            </div>
            <h3>Yantra for Happiness and Peace</h3>
            <p>
                Proper Vastu planning and installation of Yantras create an atmosphere of peace, harmony, and joy in the home.
            </p>
        </div>

    </div>

</div>



         <div class="wedding-ritual-section mt-5">

    <h2 class="wedding-section-title text-center mb-5">
        <i class="fas fa-gem me-2"></i> Importance of Crystals
    </h2>

    <div class="wedding-steps-grid">

        <!-- Card 1 -->
        <div class="wedding-step-card">
            <div class="wedding-step-icon">
                <img src="images/images/vastu-yantra08.jpg" alt="Amethyst Crystal" class="wedding-yantra-img">
            </div>
            <h3>Amethyst Crystal</h3>
            <p>
                Amethyst crystal is useful for achieving mental peace and balance. It helps relieve anxiety, stress, and confusion.
            </p>
        </div>

        <!-- Card 2 -->
        <div class="wedding-step-card">
            <div class="wedding-step-icon">
                <img src="images/images/vastu-yantra09.jpg" alt="Rose Quartz Crystal" class="wedding-yantra-img">
            </div>
            <h3>Rose Quartz Crystal</h3>
            <p>
                Rose Quartz crystal is highly effective in enhancing love and friendship. It eliminates negative energy and creates an atmosphere of love and peace.
            </p>
        </div>

        <!-- Card 3 -->
        <div class="wedding-step-card">
            <div class="wedding-step-icon">
                <img src="images/images/vastu-yantra10.jpg" alt="Citrine Crystal" class="wedding-yantra-img">
            </div>
            <h3>Citrine Crystal</h3>
            <p>
                Citrine crystal helps increase financial prosperity, happiness, and self-confidence. It is useful for achieving success in one’s work.
            </p>
        </div>

        <!-- Card 4 -->
        <div class="wedding-step-card">
            <div class="wedding-step-icon">
                <img src="images/images/vastu-yantra11.jpg" alt="Tiger Eye Crystal" class="wedding-yantra-img">
            </div>
            <h3>Tiger Eye Crystal</h3>
            <p>
                Tiger Eye crystal is highly effective for mental stability, improving decision-making ability, and boosting self-confidence.
            </p>
        </div>

        <!-- Card 5 -->
        <div class="wedding-step-card">
            <div class="wedding-step-icon">
                <img src="images/images/vastu-yantra12.jpg" alt="Halite Crystal" class="wedding-yantra-img">
            </div>
            <h3>Halite Crystal</h3>
            <p>
                Halite crystal removes negative energy and transmits positive energy. It is used to enhance mental and physical health.
            </p>
        </div>

    </div>

</div>



            <section class="ritual-elements-section">
                <div class="container">
                    <div class="row align-items-center">

                     <div class="col-lg-6">
    <div class="ritual-info-group">
        <h2 class="pbmit-title"><i class="fas fa-fire-alt"></i>Combined Use of Yantra and Crystal</h2>

        <div class="ritual-intro-text">
            <p>
                A method is created by using a Yantra and a crystal together, through which a person can remove negative energy from their life and attract positive energy. Yantras and crystals work in harmony: Yantras attract the power of deities or planets, and crystals absorb that energy, creating positive changes in the person's life.
            </p>
        </div>

        <div class="vows-container">
            <div class="element-tag">
                <span class="tag-title">Primary Remedies:</span>
                <span class="tag-desc">
                    By keeping a Yantra and a crystal together, immediate remedies can be applied. For example, placing the “Shri Yantra” together with an “Amethyst Crystal” can bring mental and financial peace.
                </span>
            </div>

            <div class="element-tag">
                <span class="tag-title">Special Measures:</span>
                <span class="tag-desc">
                    The effectiveness of Yantras and crystals can be enhanced through regular incense burning, flower worship, and meditation practices. This ensures the energy flow is balanced optimally.
                </span>
            </div>

        </div>
    </div>
</div>


                        <div class="col-lg-6">
                            <div class="ritual-image-frame">
                                <img src="images/images/vastu-yantra13.jpg" class="img-fluid rounded-custom shadow-lg" alt="यज्ञाची प्रमुख अंगे">
                                <div class="frame-decoration"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


         <div class="wedding-ritual-section mt-5">
    <h2 class="wedding-section-title text-center mb-5">
        <i class="fas fa-fire"></i>Benefits of Yantra and Crystal Remedies
    </h2>

    <div class="wedding-steps-grid">

        <div class="wedding-step-card">
            <div class="wedding-step-icon">
                <i class="fas fa-star fa-3x" style="color:#ff6f00;"></i>
            </div>
            <h3>Attracting Positive Energy</h3>
            <p>
                The combined use of Yantras and crystals helps attract positive energy into the home and office environment.
            </p>
        </div>

        <div class="wedding-step-card">
            <div class="wedding-step-icon">
                <i class="fas fa-globe fa-3x" style="color:#ff6f00;"></i>
            </div>
            <h3>Removal of Planetary Defects</h3>
            <p>
                According to astrology, using Yantras and crystals helps reduce planetary defects, especially mitigating the negative effects of Rahu, Ketu, and Saturn.
            </p>
        </div>

        <div class="wedding-step-card">
            <div class="wedding-step-icon">
                <i class="fas fa-heartbeat fa-3x" style="color:#ff6f00;"></i>
            </div>
            <h3>Improving Health</h3>
            <p>
                Yantras and crystals are used to enhance mental, physical, and spiritual health.
            </p>
        </div>

        <div class="wedding-step-card">
            <div class="wedding-step-icon">
                <i class="fas fa-coins fa-3x" style="color:#ff6f00;"></i>
            </div>
            <h3>Financial Prosperity</h3>
            <p>
                Special Yantras can help overcome financial difficulties. Yantras and crystal remedies support the achievement of wealth and prosperity.
            </p>
        </div>

        <div class="wedding-step-card">
            <div class="wedding-step-icon">
                <i class="fas fa-handshake fa-3x" style="color:#ff6f00;"></i>
            </div>
            <h3>Dispute Resolution</h3>
            <p>
                Using Yantras and crystals can help reduce conflicts at home or in the office, bringing peace and harmony to the environment.
            </p>
        </div>

    </div>
</div>



            <div class="phi-content-col meaning-bg">
                <div class="content-padding">
                    <h2 class="mini-title"><i class="fas fa-lightbulb"></i> Conclusion</h2>
                    <div class="meaning-item d-flex justify-content-center">

                        <p>A person's life can be improved by using both powerful tools, Yantra and Crystal Remedies. Yantras provide planetary dosha removal, financial prosperity and mental peace, while crystals have a positive effect on the health of the body and mind. When both tools are used together, one can achieve stability, prosperity and success in one's life.</p>
                    </div>

                </div>
            </div>

        </div>
    </div>
    </div>

</section>

<?php include 'footer.php'; ?>