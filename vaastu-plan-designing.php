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
                                <h1 class="pbmit-tbar-title">Vastu Plan</h1>
                            </div>
                        </div>
                        <div class="pbmit-breadcrumb">
                            <div class="pbmit-breadcrumb-inner">
                                <span><a title="" href="index.php" class="home"><span>Home</span></a></span>
                                <span class="sep">-</span>
                                <span><span class="post-root post post-post current-item">Vastu Plan</span></span>
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
    <h2 class="pbmit-title">Vastu Plan Designing</h2>
    <div class="samagri-container">
        <b>According to Vastu Shastra, achieving energy balance is extremely important when designing houses, offices, and other buildings. A proper Vastu plan creates positive energy in the space, bringing happiness, prosperity, and peace of mind to the occupants. This ensures that the lives of the people living or working there become happier, more successful, and more prosperous.<br><br>
        Vastu plan designing involves careful planning of the structure and location of the building. It considers the geographical location of the property, balance among directions, adherence to Vastu Shastra principles, and the local environmental factors.</b>
    </div>
</div>

                        </div>
                        <div class="col-lg-6">
                            <div class="image-wrapper">
                                <img src="images/images/vastu-yojna01.jpeg" class="img-fluid main-ritual-img" alt="Vedic Ritual">
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
                        <img src="images/images/aura-scanner04.png" class="img-fluid main-ritual-img" alt="Vedic Ritual">
                    </div>
                </div>
                <div class="col-lg-6">
                   <div class="principle-content">
    <h2 class="pbmit-title">Importance of Vastu Plan Designing</h2>
    <div class="samagri-container">
        <b>Vastu Shastra is not just a structural design, but a scientific approach that focuses on energy balance and its impact on human life. If a proper Vastu plan is designed:</b>
    </div><br>

    <div class="samagri-container">
        <span class="samagri-box">Positive energy is generated.</span>
        <span class="samagri-box">Physical and mental health is improved.</span>
    </div>
    <div class="samagri-container">
        <span class="samagri-box">Success can be achieved in personal and professional life.</span>
        <span class="samagri-box">Financial prosperity and happiness can be attained.</span>
        <span class="samagri-box">A balanced lifestyle is created.</span>
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
        <h2 class="pbmit-title"><i class="fas fa-fire-alt"></i>Principles of Vastu Plan Designing</h2>

        <div class="ritual-intro-text">
            <p>There are some important principles and rules while designing a Vastu plan, as given in Vastu Shastra:</p>
        </div>

        <div class="vows-container">
            <div class="element-tag">
                <span class="tag-title">Direction matters:</span>
                The main entrance, rooms, offices, and other important spaces of a house or building need to be in the right direction. Each direction has special energy that influences the use of space in that direction.
                <ul>
                    <li>East direction – knowledge, intelligence, and prosperity.</li>
                    <li>West direction – courage and energy.</li>
                    <li>North direction – wealth, riches, and financial prosperity.</li>
                    <li>South direction – stability and longevity.</li>
                </ul>
            </div>

            <div class="element-tag">
                <span class="tag-title">Main Entrance:</span>
                <span class="tag-desc">The main entrance of the house should allow positive energy to enter. Energy flows into the house from the entrance, so its direction and location are important. A house with an entrance facing east or north is considered ideal.</span>
            </div>

            <div class="element-tag">
                <span class="tag-title">Corners and open spaces:</span>
                <span class="tag-desc">The design of corners and elevated areas in a home or office affects energy flow. It is important to keep these spaces open and uncluttered. Cluttered or closed corners can generate negative energy.</span>
            </div>

            <div class="element-tag">
                <span class="tag-title">Importance of colors:</span>
                <span class="tag-desc">Choosing colors in Vastu design is very important. Each color carries a specific energy and effect. Selecting the right colors positively influences mental and physical health.
                    <ul>
                        <li>High-energy colors: Red, Orange</li>
                        <li>Calming colors: Blue, Green</li>
                        <li>Positive and refreshing colors: Yellow, Pink</li>
                    </ul>
                </span>
            </div>

            <div class="element-tag">
                <span class="tag-title">Center and energy flow:</span>
                <span class="tag-desc">Unwanted items should not be placed in the center (Brahmasthan) of the house or building. This area should remain open and spacious to allow energy to circulate freely and create a positive impact.</span>
            </div>

        </div>
    </div>
</div>


                    <div class="col-lg-6">
                        <div class="ritual-image-frame">
                            <img src="images/images/vastu-yojna02.jpg" class="img-fluid rounded-custom shadow-lg" alt="यज्ञाची प्रमुख अंगे">
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
                        <img src="images/images/vastu-yojna03.jpg" class="img-fluid main-ritual-img" alt="Vedic Ritual">
                    </div>
                </div>
               <div class="col-lg-6">
    <div class="principle-content">
        <h2 class="pbmit-title">Tools Used in Vastu Plan Design</h2>

        <div class="vows-container">
            <div class="element-tag">
                <span class="tag-title">Mathematics and Numerology:</span>
                <span class="tag-desc">Mathematics and numerology play an important role in Vastu planning. While designing a house, the length, width, and height of each area must be kept in proper proportion using mathematical calculations. This helps maintain energy balance.</span>
            </div>

            <div class="element-tag">
                <span class="tag-title">Alignment and Layout:</span>
                <span class="tag-desc">According to Vastu principles, every corner and room in the house should be aligned properly with the correct orientation. Considering this ensures that energy flows smoothly throughout the space.</span>
            </div>

            <div class="element-tag">
                <span class="tag-title">Planets and Gemstones:</span>
                <span class="tag-desc">In Vastu Shastra, the influence of planets is sometimes considered. Based on the auspicious and inauspicious effects of planets, the house design and energy flow are adjusted. At times, suitable gemstones are chosen to remedy planetary defects.</span>
            </div>
        </div>
    </div>
</div>

            </div>

            <div class="service-page-infobox">
                <div class="row align-items-center">

                   <div class="col-lg-6">
    <div class="principle-content">
        <h2 class="pbmit-title">Solutions to Use in Vastu Plan Designing</h2>
        <div class="samagri-container">
        </div><br>
        <div class="vows-container">
            <div class="element-tag">
                <span class="tag-title">Use of Vastu Yantras:</span>
                <span class="tag-desc">Vastu Yantras, such as “Vastu Pyramid” and “Vastu Dravya,” are placed in each corner of the house to remove negative energy. This helps maintain a balanced energy flow throughout the house.</span>
            </div>
            <div class="element-tag">
                <span class="tag-title">Planetary Peace Remedies:</span>
                <span class="tag-desc">Sometimes, planetary remedies are performed to correct planetary defects and energy imbalances. These may include special pujas, havans, and wearing specific gemstones to harmonize the energy.</span>
            </div>
        </div>
    </div>
</div>

                    <div class="col-lg-6">
                        <div class="image-wrapper">
                            <img src="images/images/vastu-yojna04.jpg" class="img-fluid main-ritual-img" alt="Vedic Ritual">
                        </div>
                    </div>
                </div>

               <div class="content-section mt-5">
    <h2 class="section-title text-center mb-5"><i class="fas fa-fire"></i> Benefits of Vastu Plan  </h2>
    <div class="puja-steps-grid">

        <div class="step-card">
            <div class="step-icon"><i class="fas fa-bullseye"></i></div>
            <h3>Physical and Mental Health:</h3>
            <p>Proper Vastu design improves physical and mental health. Keeping the energy in the house balanced makes the person feel refreshed.</p>
        </div>

        <div class="step-card">
            <div class="step-icon"><i class="fas fa-igniting"></i></div>
            <h3>Financial Prosperity:</h3>
            <p>Positive energy entering the house can lead to financial prosperity and happiness. Success in business can be achieved.</p>
        </div>

        <div class="step-card">
            <div class="step-icon"><i class="fas fa-bullseye"></i></div>
            <h3>Positive Impact on Personality:</h3>
            <p>Positive energy in the home has a positive impact on personality, increasing a person's confidence and positivity.</p>
        </div>

        <div class="step-card">
            <div class="step-icon"><i class="fas fa-bullseye"></i></div>
            <h3>Happiness and Peace Throughout Life:</h3>
            <p>A proper Vastu plan design ensures peace and harmony in the house. This keeps the family members calm, loving, and happy.</p>
        </div>

    </div>
</div>


                <div class="phi-content-col meaning-bg">
                    <div class="content-padding">
                        <h2 class="mini-title"><i class="fas fa-lightbulb"></i> Conclusion</h2>
                        <div class="meaning-item d-flex justify-content-center">

                            <p>Vastu design not only emphasizes the structural aspects of a house, but also focuses on balancing the energy flow in the space. A proper Vastu design creates positive energy by balancing the energy in the house, which can make a person's life happier, more prosperous, and more successful.</p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

</section>

<?php include 'footer.php'; ?>