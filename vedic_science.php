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
<?php include 'english/header.php'; ?>
<!-- Title Bar -->
<div class="pbmit-title-bar-wrapper " style="background-image:url(images/guruji/ser-img/bgser.jpg);">
    <div class="container paddcon">
        <div class="row align-items-center">
            <div class="col-md-7 col-lg-7">
                <div class="pbmit-title-bar-content">
                    <div class="pbmit-title-bar-content-inner">
                        <div class="pbmit-tbar">
                            <div class="pbmit-tbar-inner container">
                                <h1 class="pbmit-tbar-title">Vedic science</h1>
                            </div>
                        </div>
                        <div class="pbmit-breadcrumb">
                            <div class="pbmit-breadcrumb-inner">
                                <span><a title="" href="index.php" class="home"><span>Home</span></a></span>
                                <span class="sep">-</span>
                                <span><span class="post-root post post-post current-item">Vedic science</span></span>
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
                    <h3 class="pbmit-title">Detailed information on Vedic scriptures:</h3>
                    <p>
                        Vedic science is not only religious rituals but also an ancient and profound science that aims at the holistic development of human life. These include the Vedas, Upanishads and the Six Philosophies, which explain the creation of creation, the laws of nature, and the purpose of human existence. These disciplines do not stop at spirituality but also provide in-depth guidance on practical subjects such as Ayurveda (health), astronomy (astrology), Vastushastra (architecture) and yoga. <br><br>
                        The main thrust of this discipline is to live in harmony with nature and to recognize the power within oneself. According to the principle of 'yatha brahmande tatha pinde', what is in the entire universe is in our body, as the Vedic scriptures convince us. An important part of this discipline is to remove negativity from the environment and provide positive energy through chanting, meditation and sacrifice. In short, Vedic science is a rich way of life that strikes a balance between material progress and spiritual peace.</p>
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
                        <img src="images/images/vaidik-shastra02.webp" class="img-fluid main-ritual-img" alt="Vedic Ritual">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="principle-content">
                        <h1 class="pbmit-title">Structure of the Vedas</h1>
                        <div class="samagri-container">
                            <h3>There are Four Major Vedas:</h3>
                        </div>
                        <div class="samagri-container">
                            <span class="samagri-box">Rigveda — Praises and mantras dedicated to various deities such as Agni, Indra, and Varuna.</span>
                            <span class="samagri-box">Yajurveda — Procedures and mantras required for yajnas and rituals.</span>
                            <span class="samagri-box">Samaveda — Melodic (chanting) mantras derived from the Rigveda.</span>
                            <span class="samagri-box">Atharvaveda — Practices, worship methods, herbal knowledge, and traditional customs.</span>
                        </div>


                        <br>

                        <div class="samagri-container">
                            <h3>Each Veda has four parts:</h3>
                        </div>
                        <div class="samagri-container">
                            <span class="samagri-box">Sanhita: Collection of Mantras.</span>
                            <span class="samagri-box">Brahman: Explanation of rituals and ceremonies.</span>
                            <span class="samagri-box">Aranyaka: Meditation and contemplative texts for seekers in the forest.</span><br>
                            <span class="samagri-box">Upanishads: Deep thoughts on philosophy, soul, Brahman, salvation.</span>
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
                            <h2 class=""><i class="fas fa-fire-alt"></i> Philosophy of Vedic Scriptures</h2>

                            <div class="ritual-intro-text">
                                <p>Initially ritualistic, the Vedas later developed into deeper philosophy in the Upanishads:</p>
                            </div>

                            <div class="samagri-container">
                                <span class="samagri-box">Brahman: Absolute, Infinite, Nirguna Truth.</span>
                                <span class="samagri-box">Soul: The individual soul, which is ultimately one with Brahman.</span>
                                <span class="samagri-box">Moksha: Liberation from the cycle of rebirth.</span><br>
                                <span class="samagri-box">Karma: Action and its fruits, or consequential law.</span>
                                <div class="ritual-intro-text">
                                    <p>This philosophy gave direction to subsequent philosophies such as Vedanta, Samkhya, Yoga, and Mimamsa.</p>
                                </div>
                            </div>

                            <h2 class=""><i class="fas fa-fire-alt"></i> Tradition and Preservation:</h2>
                            <div class="samagri-container">
                                <span class="samagri-box">Vedic scriptures were taught orally to disciples by generations of gurus as Shruti (heard word).</span>
                                <span class="samagri-box">Various branches were created, each preserving its own version.</span>
                                <span class="samagri-box">These texts later came in written form, but even today the oral tradition is considered superior.</span><br>
                            </div>
                            <br>

                            <h2 class=""><i class="fas fa-fire-alt"></i> Today's Importance</h2>

                            <div class="ritual-intro-text">
                                <p>Vedic scriptures still have an influence today:</p>
                            </div>

                            <div class="samagri-container">
                                <span class="samagri-box">In religious rituals and worship practices.</span>
                                <span class="samagri-box">In Sanskrit language and traditional knowledge (Ayurveda, Astrology, Architecture).</span>
                                <span class="samagri-box">In determining moral values, social duties, and spiritual life paths.</span><br>
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
                <i class="fas fa-fire"></i> Main principles of Vedic scriptures
            </h2>

            <div class="wedding-steps-grid">

                <div class="wedding-step-card">
                    <div class="wedding-step-icon"><i class="fas fa-bullseye"></i></div>
                    <h3>Dharma (Duty):</h3>
                    <p>Vedic teachings provide guidance on personal and social duties.</p>
                </div>

                <div class="wedding-step-card">
                    <div class="wedding-step-icon"><i class="fas fa-igniting"></i></div>
                    <h3>Rit (Balance of Creation):</h3>
                    <p>Maintaining the balance of the universe through rituals and ethical living.</p>
                </div>

                <div class="wedding-step-card">
                    <div class="wedding-step-icon"><i class="fas fa-vihara"></i></div>
                    <h3>Yajna (hom, sacrifice):</h3>
                    <p>Rituals that strengthen the relationship between God and man.</p>
                </div>

                <div class="wedding-step-card">
                    <div class="wedding-step-icon"><i class="fas fa-mortar-pestle"></i></div>
                    <h3>The Power of Mantras and Sound: </h3>
                    <p>The pure recitation of mantras is considered powerful and transformative.</p>
                </div>

                <div class="wedding-step-card">
                    <div class="wedding-step-icon"><i class="fas fa-dove"></i></div>
                    <h3>Divinity in nature:</h3>
                    <p>अFire, wind, sun, rivers are considered to have divine powers.</p>
                </div>

            </div>
        </div>




        <div class="compact-section-wrapper">
            <div class="philosophy-card ritual-rules-card">
                <div class="philosophy-flex">

                    <div class="phi-content-col rules-bg">
    <div class="content-padding">
        <h2 class="mini-title"><i class="fas fa-hand-holding-water"></i> Benefits of Yajna (From Vedic Perspective)</h2>
        <ul class="ritual-list">
            <li><i class="fas fa-check"></i> Spiritual progress and the path to Moksha (liberation).</li>
            <li><i class="fas fa-check"></i> Purification of the environment from impurities.</li>
            <li><i class="fas fa-check"></i> Projection of energy for the welfare of living beings.</li>
            <li><i class="fas fa-check"></i> Enhancement of mental and physical health.</li>
            <li><i class="fas fa-check"></i> Purification of actions and liberation from debts.</li>
        </ul><br>
        <h2 class="mini-title"><i class="fas fa-hand-holding-water"></i> Vedic Significance</h2>
        <ul class="ritual-list">
            <li><i class="fas fa-check"></i> “Yajna is the highest of all actions” — the supreme act of virtue (Bhagavad Gita 4.23).</li>
            <li><i class="fas fa-check"></i> Without Yajna, the deities are not pleased.</li>
            <li><i class="fas fa-check"></i> Through Yajna, rain, food growth, and the cycle of creation are sustained (Gita 3.14).</li>
        </ul>
    </div>
</div>


                   <div class="phi-content-col meaning-bg">
    <div class="content-padding">
        <h2 class="mini-title"><i class="fas fa-lightbulb"></i> Types of Yajnas (Vedic Period)</h2>

        <div class="meaning-item">
            <h4>Nitya Yajna —</h4>
            <p>Daily Yajnas such as Agnihotra, Darshapournima, and Agrayan.</p>
        </div>

        <div class="meaning-item">
            <h4>Kamya Yajna —</h4>
            <p>Performed for specific results (Putrakameshti, Sarvakameshti, Rajasuya, Ashvamedha).</p>
        </div>

        <div class="meaning-item">
            <h4>Prayaschitta Yajna —</h4>
            <p>Performed for atonement of sins.</p>
        </div>

        <div class="meaning-item">
            <h4>Social Yajna —</h4>
            <p>Performed for public welfare (Satyavishnu/Yajna, Rudra Yajna, Durga Yajna).</p>
        </div>
    </div>
</div>


                </div>
            </div>
        </div>

</section>

<?php include 'english/footer.php'; ?>