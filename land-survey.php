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
                                <h1 class="pbmit-tbar-title">Land Survey</h1>
                            </div>
                        </div>
                        <div class="pbmit-breadcrumb">
                            <div class="pbmit-breadcrumb-inner">
                                <span><a title="" href="index.php" class="home"><span>Home</span></a></span>
                                <span class="sep">-</span>
                                <span><span class="post-root post post-post current-item">Land Survey</span></span>
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
        <h3 class="pbmit-title">What is a Land Survey?</h3>
        <p>
            A land survey, also known as a “Vastu Shastra land survey,” is an important process conducted before purchasing a plot or starting construction. It involves a detailed study of the land’s energy, direction, geographical condition, and surrounding environment. According to Vastu Shastra, this evaluation helps identify the positive and negative energies present on the land and provides insight into potential future gains or losses. <br><br>

            During this process, various factors are examined, including the shape and slope of the land, soil type, water sources, road direction, nearby structures, and natural elements. Special attention is given to the position of the north-east (Ishan) direction, the height of the south-west area, as well as sunlight exposure and ventilation. All these elements together help determine whether the land has balanced and positive energy. <br><br>

            Proper land survey helps prevent future Vastu defects and promotes health, prosperity, and mental peace. When constructing a house, office, or any building, choosing land with a strong foundation and positive energy is essential. Therefore, a land survey is not just a traditional practice but a thoughtful and systematic process for ensuring successful and harmonious construction.
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
                        <img src="images/images/img09.jpeg" class="img-fluid main-ritual-img" alt="Vedic Ritual">
                    </div>
                </div>
             <div class="col-lg-6">
    <div class="principle-content">
        <h2 class="pbmit-title">Importance of Soil Testing</h2>

        <div class="samagri-container ritual-intro-text">
            <p class="ritual-intro-text">
                Soil analysis plays an important role, as proper site evaluation helps bring positive energy into a home, office, or other building. This is crucial for achieving prosperity, happiness, peace, and success in all areas of life. It can significantly improve physical, mental, and financial well-being.
            </p>
        </div>
        <br>

        <h4>Soil Testing Provides the Following Benefits:</h4>

        <div class="samagri-container">
            <span class="samagri-box">Positive energy flow.</span>
            <span class="samagri-box">Balancing the energy in the home.</span>
            <span class="samagri-box">Proper guidance at the beginning of house or office construction.</span>
            <span class="samagri-box">Avoiding and eliminating Vastu defects.</span>
            <span class="samagri-box">Protection from negative influences.</span>
            <span class="samagri-box">Enhancing mental peace and physical health.</span>
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
        <h2 class="accent-title pbmit-title"><i class="fas fa-fire-alt"></i> Land Survey Process</h2>

        <div class="ritual-intro-text">
            <p>
                The land survey process is carried out in several important stages. The following aspects are studied during this process:
            </p>
        </div>

        <div class="vows-container">

            <div class="element-tag">
                <span class="tag-title">Site Survey (Surveying the Land)</span>
                <span class="tag-desc">
                    In the first stage, a detailed site survey of the plot is conducted. This includes studying the shape of the land, its direction, wind flow, sun path, water sources, nearby rivers, dams, and other geographical factors. The consultant carefully examines all aspects of the land on-site.
                </span>
            </div>

            <div class="element-tag">
                <span class="tag-title">Direction Analysis</span>
                <span class="tag-desc">
                    According to Vastu Shastra, each direction and its associated planetary or divine influence affect the energy of a place. The north, south, east, and west directions are carefully analyzed. Each direction plays a significant role, and its importance is evaluated accordingly.
                    <span class="element-subpoints mantra-text">East Direction: Entry of sunlight, prosperity, and health.</span>
                    <span class="element-subpoints mantra-text">South Direction: Stability, security, and strength.</span>
                    <span class="element-subpoints mantra-text">North Direction: Business success and growth.</span>
                    <span class="element-subpoints mantra-text">West Direction: Associated with the moon and mental peace.</span>
                </span>
            </div>

            <div class="element-tag">
                <span class="tag-title">Land Energy Analysis</span>
                <span class="tag-desc">
                    Examining the energy of the land is extremely important. It is assessed whether the land’s energy is positive or negative. Various traditional and modern methods may be used for this evaluation, such as radiometers (traditional instruments), satellite imagery, or other advanced techniques.
                </span>
            </div>

            <div class="element-tag">
                <span class="tag-title">Vastu Defects Analysis</span>
                <span class="tag-desc">
                    Sometimes, land or plots may have certain Vastu defects that can negatively impact future construction. Some common defects include:
                </span>
                <span class="element-subpoints mantra-text">Improper orientation of the land.</span>
                <span class="element-subpoints mantra-text">Excessive strong winds or improper sunlight exposure.</span>
                <span class="element-subpoints mantra-text">Presence of concentrated negative energy in a specific area.</span>
                <span class="element-subpoints mantra-text">Unnecessary walls or structures on the land.</span>
            </div>

            <div class="element-tag">
                <span class="tag-title">Positive Energy Flow</span>
                <span class="tag-desc">
                    After evaluating the land, appropriate measures are suggested to ensure positive energy flow. This includes selecting the correct location for construction and determining the proper placement of different sections within the building.
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
        <h2 class="pbmit-title">Soil Testing Tips</h2>

        <h4>Soil Testing Includes the Following Tips:</h4>

        <div class="samagri-container">
            <span class="samagri-box">
                Pre-preparation of the Site: <br>
                The land should be completely clean before conducting the soil test.
            </span>

            <span class="samagri-box">
                When Purchasing New Land: <br>
                Check the correct direction and size according to Vastu Shastra principles.
            </span>
        </div>
    </div>
</div>

                </div>
            </div>

      <div class="content-section mt-5">
    <h2 class="section-title text-center mb-5">
        <i class="fas fa-fire"></i> Yagna Process and Procedure
    </h2>

    <div class="puja-steps-grid">

        <div class="step-card">
            <div class="step-icon"><i class="fas fa-bullseye"></i></div>
            <h3>Related to Your Horoscope:</h3>
            <p>
                While conducting a land survey, study your birth chart, as the planetary positions and combinations in the horoscope may influence the selected place.
            </p>
        </div>

        <div class="step-card">
            <div class="step-icon"><i class="fas fa-bullseye"></i></div>
            <h3>Land Examination Related to Ritual Observances:</h3>
            <p>
                In some places, there may be negative energies present. Therefore, it is important to examine local religious observances and the presiding deity of the area.
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
                    <h2 class="mini-title"><i class="fas fa-seedling"></i> Why Perform Bhoomi Pujan?</h2>
                    <ul class="ritual-list">
                        <li><i class="fas fa-check"></i> <strong>Blessings of Mother Earth:</strong> Showing respect to the land and seeking permission before beginning any new construction or project.</li>
                        <li><i class="fas fa-check"></i> <strong>Removal of Vastu Defects:</strong> Eliminating negative energy from the site and creating a pure and positive atmosphere.</li>
                        <li><i class="fas fa-check"></i> <strong>Obstacle-Free Work:</strong> Praying for smooth construction without difficulties and timely completion of the work.</li>
                        <li><i class="fas fa-check"></i> <strong>Happiness and Prosperity:</strong> Seeking long life, good health, and wealth for the people who will reside in the building.</li>
                    </ul>
                    <br>

                    <h2 class="mini-title"><i class="fas fa-vihara"></i> Scriptural Significance</h2>
                    <ul class="ritual-list">
                        <li><i class="fas fa-check"></i> The land is not merely soil; it is considered a center of infinite divine energy.</li>
                        <li><i class="fas fa-check"></i> Performing Bhoomi Pujan before house construction is regarded as a sacred duty of a householder.</li>
                        <li><i class="fas fa-check"></i> The ritual pleases Vastu Purusha and brings spiritual essence and harmony to the home.</li>
                    </ul>
                </div>
            </div>

            <div class="phi-content-col meaning-bg">
                <div class="content-padding">
                    <h2 class="mini-title"><i class="fas fa-map-marked-alt"></i> Main Ritual Procedures</h2>

                    <div class="meaning-item">
                        <h4>Ganapati and Kalash Pujan</h4>
                        <p>Every auspicious ceremony begins with seeking the blessings of Lord Ganesha, the remover of obstacles, and establishing the sacred Kalash symbolizing Lord Varuna.</p>
                    </div>

                    <div class="meaning-item">
                        <h4>Land Purification and Shatkarma</h4>
                        <p>The land is purified through sacred chants and rituals, and unseen energies are respectfully appeased.</p>
                    </div>

                    <div class="meaning-item">
                        <h4>Vastu Purusha and Naga Pujan</h4>
                        <p>An offering is made to Vastu Purusha, and a silver serpent symbol is placed in the foundation to ensure strength, protection, and stability of the structure.</p>
                    </div>

                    <div class="meaning-item">
                        <h4>Shilanyas (Foundation Laying Ceremony)</h4>
                        <p>On an auspicious time, the first brick or stone is laid, marking the formal beginning and foundation of the construction.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

</section>

<?php include 'footer.php'; ?>