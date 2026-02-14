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
                                <h1 class="pbmit-tbar-title">Geo-energy stress</h1>
                            </div>
                        </div>
                        <div class="pbmit-breadcrumb">
                            <div class="pbmit-breadcrumb-inner">
                                <span><a title="" href="index.php" class="home"><span>Home</span></a></span>
                                <span class="sep">-</span>
                                <span><span class="post-root post post-post current-item">Geo-energy stress</span></span>
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
                <div class="mantra-ribbon plot-shape-theme">
                    <div class="mantra-icon-left"><i class="fas fa-shapes"></i></div>
                    <div class="mantra-text-content">
                        
                        <p class="sanskrit-shlok">
                            चतुरस्त्रा द्वीप्याकाराम सिंहोक्षाश्वेभरूपिणीम् ।
                            वृत्तच्च भद्र पीठच्च त्रिशूलम लिंग सन्निभम् ॥<br>
                            प्रासादध्वजकुम्भादि देवानामपि दुर्लभम ।
                        </p>
                        <div class="shlok-divider"></div>
                        <p class="shlok-meaning">
                            <strong>अर्थ:</strong> चौरस, हत्ती किंवा सिंहासारखे शुभ आकार असलेले भूखंड, तसेच ध्वज, कलश किंवा त्रिशूळ सदृश भूमी अत्यंत भाग्यवान आणि देवांनाही दुर्मिळ मानली जाते.
                        </p>
                    </div>
                    <div class="mantra-icon-right"><i class="fas fa-gem"></i></div>
                </div>
            </div>

            <div class="container">
                <div class="service-page-infobox">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                           <div class="principle-content">
    <h2 class="pbmit-title">Geopathic Stress and Astrology</h2>
    <div class="samagri-container">
        <b>According to astrology, the energy fields on the earth are extremely important. Their influence affects not only objects and the environment, but also the life of the people in that space. Geopathic Stress refers to an unbalanced energy field in a location, which directly impacts a person's body, mind, and behavior. Astrology provides analysis of these energy imbalances and suggests remedies to correct them.</b>
    </div>
</div>

                        </div>
                        <div class="col-lg-6">
                            <div class="image-wrapper">
                                <img src="images/images/bhu-urja01.jpg" class="img-fluid main-ritual-img" alt="Vedic Ritual">
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
                    <div class="image-wrapper">
                        <img src="images/images/bhu-urja02.png" class="img-fluid main-ritual-img" alt="Vedic Ritual">
                    </div>
                </div>
                
          <div class="col-lg-6">
    <div class="principle-content">
        <h2 class="pbmit-title">Impact of Geo-Energy Stress and Astrology</h2>
        <div class="vows-container">

            <div class="element-tag">
                <span class="tag-title">Energy Field:</span>
                <span class="tag-desc">According to astrology, every place, building, or house on Earth has its own energy field (aura). If there are discrepancies or negative effects in these energy fields, it can adversely affect the lives of people in that space. In locations with geo-energy stress, the energy balance is disrupted, which can negatively impact both mental and physical health.</span>
            </div>

            <div class="element-tag">
                <span class="tag-title">Moon’s Influence:</span>
                <span class="tag-desc">The Moon has a significant role in astrology. Its changing positions can further disturb the energy in the Earth’s energy field. During special lunar phases, such as the full moon or new moon, the effects of geo-energy stress can become more pronounced.</span>
            </div>

            <div class="element-tag">
                <span class="tag-title">Rahu and Ketu’s Influence:</span>
                <span class="tag-desc">The planets Rahu and Ketu significantly affect the Earth's magnetic field. Astrology suggests that these planets also influence the energy flow within a house according to Vastu. Their imbalance can intensify geo-energy stress.</span>
            </div>

            <div class="element-tag">
                <span class="tag-title">Vastu Dosh:</span>
                <span class="tag-desc">In astrology, Vastu Dosh is considered a major factor. In places where Vastu Shastra is not properly followed, geo-energy stress can arise. This imbalance affects the energy in the house and, consequently, the lives of its residents, potentially causing physical ailments, mental stress, and life challenges.</span>
            </div>

        </div>
    </div>
</div>

            </div>
        </div>

        <hr class="section-divider">

     <div class="content-section mt-5">
    <h2 class="section-title text-center mb-5"><i class="fas fa-fire"></i>Astrological Analysis of the Effects of Geo-Energetic Stress</h2>
    <div class="puja-steps-grid">

        <div class="step-card">
            <div class="step-icon"><i class="fas fa-bullseye"></i></div>
            <h3>Physical Health Issues:</h3>
            <p>According to astrology, a person living in a location with geo-energetic stress may develop various physical health problems. Examples include back pain, headaches, infections, bone disorders, and increased risk of heart-related issues.</p>
        </div>

        <div class="step-card">
            <div class="step-icon"><i class="fas fa-igniting"></i></div>
            <h3>Mental Stress and Anxiety:</h3>
            <p>Geo-energy stress can increase mental tension, anxiety, irritability, and a tendency to make wrong decisions. Astrology indicates that disturbances in the energy field directly impact mental balance and stability.</p>
        </div>

        <div class="step-card">
            <div class="step-icon"><i class="fas fa-vihara"></i></div>
            <h3>Failures and Challenges in Life:</h3>
            <p>Geo-energy stress in a home or office can lead to financial difficulties, business challenges, family disputes, and professional setbacks.</p>
        </div>

    </div>
</div>


        <section class="ritual-elements-section">
            <div class="container">
                <div class="row align-items-center">

                  <div class="col-lg-6">
    <div class="ritual-info-group">
        <h2 class="pbmit-title"><i class="fas fa-fire-alt"></i>Astrological Remedies for Geo-Energetic Stress</h2>

        <div class="vows-container">
            <div class="element-tag">
                <span class="tag-title">Adherence to Vastu Shastra:</span>
                <span class="tag-desc">In astrology, the design of a house is very important. The house’s direction, entrance, and the position of each corner influence its energy balance. Geo-energetic stress can be alleviated by following proper Vastu Shastra guidelines.</span>
            </div>

            <div class="element-tag">
                <span class="tag-title">Use of Rudraksha and Sacred Substances:</span>
                <span class="tag-desc">According to astrology, Rudraksha beads, specific mantras, and certain sacred substances are used to remove negative energy. Wearing Rudraksha can help maintain energy balance in the space.</span>
            </div>

            <div class="element-tag">
                <span class="tag-title">Removal of Planetary Defects:</span>
                <span class="tag-desc">Planetary defects, especially from Rahu, Ketu, and Saturn, can increase geo-energy stress. Astrologers recommend planetary pacification rituals, worship of deities, and wearing special gemstones to reduce this stress.</span>
            </div>

            <div class="element-tag">
                <span class="tag-title">Remembrance and Meditation:</span>
                <span class="tag-desc">Meditation and sadhana are effective methods to achieve mental balance. They purify the energy flow and help relieve mental stress.</span>
            </div>

            <div class="element-tag">
                <span class="tag-title">Energy Purification Tools:</span>
                <span class="tag-desc">One of the most effective remedies for geo-energy stress is cleansing the energy of the space. This can be done using energy purification devices, crystals, or meditation practices.</span>
            </div>

        </div>
    </div>
</div>


                    <div class="col-lg-6">
                        <div class="ritual-image-frame">
                            <img src="images/images/bhu-urja03.jpeg" class="img-fluid rounded-custom shadow-lg" alt="यज्ञाची प्रमुख अंगे">
                            <div class="frame-decoration"></div>
                        </div>
                         <div class="ritual-image-frame">
                            <img src="images/images/bhu-urja04.jpg" class="img-fluid rounded-custom shadow-lg" alt="यज्ञाची प्रमुख अंगे">
                            <div class="frame-decoration"></div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        

                <div class="phi-content-col meaning-bg">
                    <div class="content-padding">
                        <h2 class="mini-title"><i class="fas fa-lightbulb"></i> Conclusion</h2>
                        <div class="meaning-item d-flex justify-content-center">

                            <p>According to astrology, geo-energy stress is caused by an imbalance of natural energy on the earth, which affects the physical and mental health of a person. Various techniques are used to check this, such as Vastu Shastra, planetary defect removal, and Rudraksha Dharan. Geo-energy stress can be removed by taking appropriate measures, which can lead to happiness, peace, and prosperity in life.</p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

</section>

<?php include 'footer.php'; ?>