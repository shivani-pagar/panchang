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
                                <h1 class="pbmit-tbar-title">Spirituality</h1>
                            </div>
                        </div>
                        <div class="pbmit-breadcrumb">
                            <div class="pbmit-breadcrumb-inner">
                                <span><a title="" href="index.php" class="home"><span>Home</span></a></span>
                                <span class="sep">-</span>
                                <span><span class="post-root post post-post current-item">Spirituality</span></span>
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
            <!--<div class="col-lg-4 service-left-col order-2 order-lg-1">-->
            <!--	<aside class="service-sidebar">-->
            <!--		<aside class="widget post-list">-->
            <!--			<div class="all-post-list">-->
            <!--				<ul>-->
            <!--					<li><a href="services-details.html">  Kalsarp Yog Puja </a></li>-->
            <!--					<li class="post-active"><a href="services-details.html"> Rudrabhisek </a></li>-->
            <!--					<li><a href="services-details.html">  Mahamrityunjay  pooja  </a></li>-->
            <!--					<li><a href="services-details.html"> Pitru dosh  </a></li>-->
            <!--					<li><a href="services-details.html"> Navgrah shaanti  </a></li>-->
            <!--				</ul>-->
            <!--			</div>-->
            <!--		</aside>-->
            <!--		<aside class="widget post-list">-->
            <!--			<div class="textwidget">-->
            <!--				<div class="single-service-contact">-->
            <!--					<div class="single-service-contact-inner">-->
            <!--						<span><i class="pbmit-moversco-business-icon-headset"></i></span>-->
            <!--						<h3>For More Details<br> Call Us</h3>-->
            <!--						<ul class="ctc">-->
            <!--							<li>-->
            <!--								<i class="pbmit-base-icon-phone"></i> <a href="tel:+91 9890702222">-->
            <!--								    +91 9890702222-->
            <!--								</a> -->
            <!--							</li>-->

            <!--						</ul>-->
            <!--					</div>-->
            <!--				</div>-->
            <!--			</div>-->
            <!--		</aside>-->
            <!--	</aside>-->
            <!--</div>-->
            <div class="mantra-ribbon-container">
                <div class="mantra-ribbon">
                    <div class="mantra-icon-left"><i class="fas fa-om"></i></div>
                    <div class="mantra-text-content">
                        <p class="sanskrit-shlok">
                            अनन्तं कृष्णगोपालं जपतो नास्ति पातकम् ।
                            गवां कोटिप्रदानस्य अश्वमेधशतस्य च ॥ ५॥
                            कन्यादानसहस्राणां फलं प्राप्नोति मानवः ।
                        </p>
                        <p class="shlok-meaning">
                            अर्थ: अनंत अशा भगवान श्रीकृष्ण-गोपालाच्या नामाचा जप करणाऱ्या मनुष्याला कोणत्याही पापाची बाधा होत नाही. केवळ या नामाच्या जपाने मनुष्याला एक कोटी गायींचे दान, शंभर अश्वमेध यज्ञ आणि हजारो कन्यादान केल्याने जे महापुण्य मिळते, ते सर्व फळ प्राप्त होते.
                        </p>
                    </div>
                    <div class="mantra-icon-right"><i class="fas fa-om"></i></div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6  order-1">
                <img src="images/images/adhyatm01.webp" class="w-100" alt="">

            </div>
            <div class="col-md-6 col-lg-6">
                <div class="service-details">
                    <h2 style="font-size: 34px" class="sanskrit-shlok">What is spiritual life?</h2>

                    <div style="line-height: 1.9; font-size: 17px" class="ritual-intro-text  ">
                        <p>Spiritual life is a deep process of connecting with our inner self, soul and Brahman.
                            This life is not only about religious behavior, worship or ethics, but its main goal
                            is to live with peace, love, courage and understanding in every aspect of our life.
                            Spiritual life shows a person the direction of his inner peace, mental clarity and higher purpose.
                        </p>
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
                        <img src="images/images/upay02.webp" class="img-fluid main-ritual-img" alt="Vedic Ritual">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="principle-content">
                        <h2 class="accent-title">The importance of spiritual life</h2>
                        <p>Spiritual life is very important for our physical, mental and emotional health. Every person needs spiritual guidance to achieve a higher purpose in life, to awaken their inner power. This life is not just about chasing moments of happiness, but an eternal turn towards the mystery of the essence, the divine and the truth of life.</p>
                        <div class="samagri-container">
                            <span class="samagri-box"> 🧘‍♂️ Awareness of inner power: Spiritual life achieves self-development by awakening the inner power of a person.</span>
                            <span class="samagri-box">🧠 Mental and emotional balance: Spirituality brings peace of mind and reduces stress and negativity.</span>
                            <span class="samagri-box">🌱 The higher purpose of life: This life is not limited to just happiness but helps in understanding truth, philosophy and divine meaning.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr class="section-divider">

        <section class="saptpadi-dynamic-section">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-6">
                        <div class="ritual-info-group">
                            <h2 class="accent-title">Main principles of spiritual life</h2>

                            <div class="saptpadi-intro-text">
                                <h3>Self-research and self-knowledge</h3>
                            </div>

                            <div class="vows-container">
                                <span class=""><i class=""></i>The first step in spiritual life is self-inquiry. In this,
                                    a person examines his thoughts, feelings, and behavior. To achieve self-knowledge,
                                    he practices meditation, spiritual development, and insight.</span>
                                <span class=""><i class="fas fa-smile-beam"></i>This gives him a chance to free himself
                                    from his other thoughts.</span>
                            </div>

                            <div class="saptpadi-intro-text">
                                <h3>Meditation and Sadhana</h3>
                            </div>

                            <div class="vows-container">
                                <span class=""><i class=""></i>Meditation and sadhana are the main practices of spiritual life.
                                    Meditation is sitting quietly in a certain posture, controlling the mind, and experiencing
                                    inner peace.</span>
                                <span class=""><i class="fas fa-smile-beam"></i>Sadhana is regular spiritual practice
                                    such as prayer, mantra chanting, meditation, etc., which improves a person's state of mind
                                    and attains philosophical knowledge.</span>
                            </div>

                            <div class="saptpadi-intro-text">
                                <h3>Ethics and philanthropy</h3>
                            </div>

                            <div class="vows-container">
                                <span class=""><i class=""></i>Moral values ​​play an important role in spiritual life. Truth, non-violence, love,
                                    compassion and other sacred qualities must be fully manifested in a person's life.</span>
                                <span class=""><i class="fas fa-smile-beam"></i>Dedicating your life to charity and service to humanity is a highly spiritual process.</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="saptpadi-image-frame">
                            <img src="images/images/adhyatm03.jpg" class="img-fluid rounded-custom shadow-lg" alt="सप्तपदी विधी">
                            <div class="frame-decoration"></div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <div class="content-section mt-5">
            <h2 class="section-title text-center mb-5"><i class="fas fa-scroll"></i>Spiritual path and faith</h2>
            <div class="puja-steps-grid">

                <div class="step-card">
                    <div class="step-icon"><i class="fas fa-pray"></i></div>
                    <h3>Guidance of seekers</h3>
                    <p>A Guru or guide is important for seekers. A Guru provides spiritual guidance, practice, and the
                        highest meaning of life to that person. Their spiritual knowledge and perspective provide a deeper
                        experience of life for the seeker.</p>
                </div>

                <div class="step-card">
                    <div class="step-icon"><i class="fas fa-place-of-worship"></i></div>
                    <h3>Devotion and faith</h3>
                    <p>Devotion is an important aspect of spiritual life. When we believe in a higher power, a deity or Brahman,
                        and connect with it with the sweetness of our heart, life can become more peaceful and stable.</p>
                </div>


            </div>
        </div>

        <br><br>
        <section class="saptpadi-dynamic-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="saptpadi-image-frame">
                            <img src="images/images/adhyatm02.webp" class="img-fluid rounded-custom shadow-lg" alt="आध्यात्मिक जीवन">
                            <div class="frame-decoration"></div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="ritual-info-group">
                            <h2 class="accent-title">Benefits of spiritual life</h2>

                            <div class="saptpadi-intro-text">
                                <h3>Spiritual peace and contentment</h3>
                            </div>

                            <div class="vows-container">
                                <span><i class="fas fa-fire-alt me-2"></i>
                                    Spiritual life provides a person with inner peace. When we understand the highest purpose of life, we are free from unnecessary worries and daily stresses.
                                </span>

                            </div>

                            <div class="saptpadi-intro-text">
                                <h3>Mental clarity and positive attitude</h3>
                            </div>

                            <div class="vows-container">
                                <span><i class="fas fa-balance-scale me-2"></i>
                                    Regular practice and meditation can help you gain mental clarity and a positive outlook.
                                    You can also think about difficult situations in life in a calm and civilized way.
                                </span>

                            </div>

                            <div class="saptpadi-intro-text">
                                <h3>positive energy</h3>
                            </div>

                            <div class="vows-container">
                                <span><i class="fas fa-heart me-2"></i>
                                    A person living a spiritual life experiences positive energy and spiritual power.
                                    This also affects the people around him.
                                </span>

                            </div>

                        </div>
                    </div>



                </div>
            </div>
        </section>

        <div class="content-section mt-5">
            <h2 class="section-title text-center mb-5"><i class="fas fa-scroll"></i> Health</h2>
            <div class="puja-steps-grid">

                <div class="step-card">
                    <div class="step-icon"><i class="fas fa-pray"></i></div>
                    <h3>Health</h3>
                    <p>Spiritual life plays a significant role in improving mental and physical
                        health. Proper meditation, yoga, and sadhana improve the state of the body and mind.</p>
                </div>

                <div class="step-card">
                    <div class="step-icon"><i class="fas fa-place-of-worship"></i></div>
                    <h3>Relationship improvement</h3>
                    <p>Gaining a positive outlook through spiritual life improves our relationships.
                        Peace of mind and spirit helps us to develop love and cooperation with other people.</p>
                </div>
            </div>
        </div>
    </div>
    <br><br>

    <section class="saptpadi-dynamic-section">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6">
                    <div class="ritual-info-group">
                        <h2 class="accent-title">How to start a spiritual life?</h2>

                        <div class="saptpadi-intro-text">
                            <h3>Practice meditation.</h3>
                        </div>

                        <div class="vows-container">
                            <span class=""><i class=""></i>Sit quietly and meditate for a few minutes every day. Focus on your breathing. The mind will calm down and the process of introspection will begin.</span>
                            <span class=""><i></i> Spiritual life is a deep process of connecting with our inner self,
                                soul and Brahman. This life is not only about religious behavior, worship or ethics,
                                but its main goal is to live with peace, love, courage and understanding in every
                                aspect of our life. Spiritual life shows a person the direction of his inner peace,
                                mental clarity and higher purpose.</span>
                        </div>

                        <div class="saptpadi-intro-text">
                            <h3>Worship and pray.</h3>
                        </div>

                        <div class="vows-container">
                            <span class=""><i class=""></i>Practice your religious puja or prayer throughout the day. Worship the deity according to your faith and fill your mind with peace.</span>
                        </div>

                        <div class="saptpadi-intro-text">
                            <h3>Study books.</h3>
                        </div>

                        <div class="vows-container">
                            <span class=""><i class=""></i>Study spiritual texts. Bhagavad Gita, Upanishads, Vedas, Bible, Quran, etc. These texts contain the philosophical purpose and guidance of life.</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="saptpadi-image-frame">
                        <img src="images/images/upay02.webp" class="img-fluid rounded-custom shadow-lg" alt="सप्तपदी विधी">
                        <div class="frame-decoration"></div>
                    </div>
                </div>

            </div>
            <div class="content-section mt-5">
                <h2 class="section-title text-center mb-5"><i class="fas fa-scroll"></i>Spiritual ethics and the search for a guru</h2>
                <div class="puja-steps-grid">
                    <div class="step-card">
                        <div class="step-icon"><i class="fas fa-pray"></i></div>
                        <h3>Follow morality and compassion.</h3>
                        <p>Follow truth, non-violence, compassion and love in your life. This teaches you to respect the feelings of others.</p>
                    </div>

                    <div class="step-card">
                        <div class="step-icon"><i class="fas fa-place-of-worship"></i></div>
                        <h3>The search for a guru</h3>
                        <p>Find a guru or mentor for proper guidance. The presence of a guru gives us direction in spiritual life.</p>
                    </div>
                </div>
            </div><br><br>
        </div>




    </section>

<?php include 'english/footer.php'; ?>