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
                                <h1 class="pbmit-tbar-title">Vastu Aura Scanner</h1>
                            </div>
                        </div>
                        <div class="pbmit-breadcrumb">
                            <div class="pbmit-breadcrumb-inner">
                                <span><a title="" href="index.php" class="home"><span>Home</span></a></span>
                                <span class="sep">-</span>
                                <span><span class="post-root post post-post current-item">Vastu Aura Scanner</span></span>
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
                <div class="mantra-ribbon">
                    <div class="mantra-icon-left"><i class="fas fa-om"></i></div>
                    <div class="mantra-text-content">
                        <p class="sanskrit-shlok">
                            अमीवहा वास्तोष्पते विश्वा रूपाण्याविशन । सखा सुशेव एधि न: ॥
                        </p>
                        <p class="shlok-meaning">
                            <strong>अर्थ:</strong> हे वास्तू देवते, तुम्ही सर्व रोगांचा आणि व्याधींचा नाश करणारे आहात. तुम्ही विश्वातील सर्व रूपांमध्ये व्यापून राहिलेले आहात. तुम्ही आमचे कल्याणकारी मित्र बना आणि आम्हास सदैव सुख व आनंद प्रदान करा.
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
        <h2 class="pbmit-title">What is a Vastu Aura Scanner?</h2>
        <div class="samagri-container">
            <b>The Vastu Aura Scanner is a state-of-the-art, technology-based tool used to analyze the energy flow and atmosphere of a home, office, or any other space. Its main purpose is to detect the positive and negative energies present in the environment. According to Vastu Shastra, every space has an aura that reflects its energy flow. The Vastu Aura Scanner measures this energy and evaluates whether the space’s energy is positive or negative.</b>
        </div>
    </div>
</div>

                        <div class="col-lg-6">
                            <div class="image-wrapper">
                                <img src="images/images/aura-scanner02.jpg" class="img-fluid main-ritual-img" alt="Vedic Ritual">
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
    <h2 class="pbmit-title">How Does the Vastu Aura Scanner Work?</h2>
    <div class="samagri-container">
        <b>The Vastu Aura Scanner uses cutting-edge technology to analyze the aura (energy field) of a space. It detects changes in electrical or polar energy to evaluate the overall energy of the area. The scanner studies the following:</b>
    </div><br>

    <div class="samagri-container">
        <span class="samagri-box"><b>Energy Field:</b> Measures and balances the energy of the environment, ensuring harmony in the space.</span>
        <span class="samagri-box"><b>Negative Energy:</b> Identifies negative energies in the space, such as bad emotions, Vastu defects, or other disturbances.</span>
    </div>
</div>

                </div>
            </div>
        </div>

        <hr class="section-divider">

       <div class="content-section mt-5">
    <h2 class="section-title text-center mb-5"><i class="fas fa-fire"></i> Yagna Process</h2>
    <div class="puja-steps-grid">

        <div class="step-card">
            <div class="step-icon"><i class="fas fa-bullseye"></i></div>
            <h3>Positive Energy:</h3>
            <p>Measures other forms of energy, such as good mindset, prosperity, and peace, which create a positive atmosphere similar to the aura of the space.</p>
        </div>

        <div class="step-card">
            <div class="step-icon"><i class="fas fa-igniting"></i></div>
            <h3>Energy Balance:</h3>
            <p>An important factor is the balance between positive and negative energies. The Vastu Aura Scanner checks this balance according to its parameters to see if it is appropriate.</p>
        </div>

        <div class="step-card">
            <div class="step-icon"><i class="fas fa-vihara"></i></div>
            <h3>Centers of Energy:</h3>
            <p>The centers of energy in the space are identified. Positive energy is higher at the correct centers, which helps create a good positive environment in that space.</p>
        </div>

    </div>
</div>


        <section class="ritual-elements-section">
            <div class="container">
                <div class="row align-items-center">

                 <div class="col-lg-6">
    <div class="ritual-info-group">
        <h2 class="pbmit-title"><i class="fas fa-fire-alt"></i> Beneficial Uses of Vastu Aura Scanner</h2>

        <div class="ritual-intro-text">
            <p>Vastu Aura Scanner is a sophisticated and effective tool that measures Vastu defects and the energy flow of a space. It can be used in the following ways:</p>
        </div>

        <div class="vows-container">
            <div class="element-tag">
                <span class="tag-title">Removing Negative Energy:</span>
                <span class="tag-desc">With the help of the scanner, negative energy in a house or building is detected and removed. This creates a positive and balanced atmosphere in the space.</span>
            </div>

            <div class="element-tag">
                <span class="tag-title">Balancing Energy Flow:</span>
                <span class="tag-desc">Necessary measures are determined to balance the energy in a home, office, or other space. When positive energy is higher and negative energy is lower, a good and positive environment is created.</span>
            </div>
        </div>
    </div>
</div>


                    <div class="col-lg-6">
                        <div class="ritual-image-frame">
                            <img src="images/images/aura-scanner06.png" class="img-fluid rounded-custom shadow-lg" alt="यज्ञाची प्रमुख अंगे">
                            <div class="frame-decoration"></div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

      <div class="content-section mt-5">
    <h2 class="section-title text-center mb-5"><i class="fas fa-fire"></i> Importance of Vastu Aura Scanner</h2>
    <div class="puja-steps-grid">

        <div class="step-card">
            <div class="step-icon"><i class="fas fa-bullseye"></i></div>
            <h3>Remedy for Vastu Defects:</h3>
            <p>There may be Vastu defects in the home or office. The scanner detects these defects and suggests appropriate solutions, helping to balance the energy flow in the space.</p>
        </div>

        <div class="step-card">
            <div class="step-icon"><i class="fas fa-igniting"></i></div>
            <h3>Personal and Mental Peace:</h3>
            <p>By generating positive energy, the occupants of the space experience peace of mind and happiness. This promotes mental development and spiritual growth.</p>
        </div>

        <div class="step-card">
            <div class="step-icon"><i class="fas fa-vihara"></i></div>
            <h3>When Starting a New Home or Business:</h3>
            <p>When starting a new home, office, or business, the energy of the space can be checked using a Vastu Aura Scanner. This ensures positive energy and a balanced environment from the very beginning.</p>
        </div>

    </div>
</div>


    </div>

    <div class="container">

        <div class="service-page-infobox">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="image-wrapper">
                        <img src="images/images/aura-scanner08.jpg" class="img-fluid main-ritual-img" alt="Vedic Ritual">
                    </div>
                </div>
              <div class="col-lg-6">
    <div class="principle-content">
        <h2 class="pbmit-title">Distinctive Features of Vastu Aura Scanner</h2>
        <div class="samagri-container">
            <b>The Vastu Aura Scanner uses cutting-edge technology to function. This tool analyzes the aura (energy field) of a space by detecting changes in electricity or polarity energy. The following aspects are studied:</b>
        </div><br>
        <div class="vows-container">
            <div class="element-tag">
                <span class="tag-title">Consistent Results:</span>
                <span class="tag-desc">Since the Vastu Aura Scanner is based on advanced technology, it provides 100% consistency and accuracy. The precision and reliability of each scan are ensured.</span>
            </div>
            <div class="element-tag">
                <span class="tag-title">Use for Various Spaces:</span>
                <span class="tag-desc">This scanner can be used in homes, offices, shops, factories, buildings, parks, and other types of spaces.</span>
            </div>

            <div class="element-tag">
                <span class="tag-title">Safe and Easy:</span>
                <span class="tag-desc">The Vastu Aura Scanner is very easy to use. It does not require any complex technology, and the process of using it is completely safe.</span>
            </div>
        </div>
    </div>
</div>

            </div>

          <div class="content-section mt-5">
    <h2 class="section-title text-center mb-5"><i class="fas fa-fire"></i>Vastu Scanning Process and Benefits</h2>
    <div class="puja-steps-grid">

        <div class="step-card">
            <div class="step-icon"><i class="fas fa-bullseye"></i></div>
            <h3>Fast Results:</h3>
            <p>Due to the fast scanning process, users can get a measurement and analysis of the energy of the space within minutes.</p>
        </div>

        <div class="step-card">
            <div class="step-icon"><i class="fas fa-igniting"></i></div>
            <h3>Solutions and Advice:</h3>
            <p>After scanning, if any negative energy is detected, immediate remedies and advice are provided. These solutions are essential to balance energy and eliminate negative influences.</p>
        </div>

        <div class="step-card">
            <div class="step-icon"><i class="fas fa-bullseye"></i></div>
            <h3>Accurate Analysis:</h3>
            <p>The scanning process provides precise results, helping users understand the energy flow in every part of the space.</p>
        </div>

    </div>
</div>


            <div class="service-page-infobox">
                <div class="row align-items-center">

                <div class="col-lg-6">
    <div class="principle-content">
        <h2 class="pbmit-title">Benefits of Vastu Aura Scanner</h2>
        <div class="samagri-container">
        </div><br>
        <div class="vows-container">
            <div class="element-tag">
                <span class="tag-title">Creating a Positive Environment:</span>
                <span class="tag-desc">With the help of a Vastu Aura Scanner, positive energy can be created in the home or office, keeping the members happy and mentally healthy.</span>
            </div>
            <div class="element-tag">
                <span class="tag-title">Solution to Vastu Defects:</span>
                <span class="tag-desc">It identifies and resolves Vastu defects in a house or building, which increases positive energy and reduces negative influences.</span>
            </div>

            <div class="element-tag">
                <span class="tag-title">Health and Prosperity:</span>
                <span class="tag-desc">Balancing energy improves the state of mind and body, leading to better physical and mental health.</span>
            </div>
        </div>
    </div>
</div>

                    <div class="col-lg-6">
                        <div class="image-wrapper">
                            <img src="images/images/aura-scanner08.jpg" class="img-fluid main-ritual-img" alt="Vedic Ritual">
                        </div>
                    </div>
                </div>

              <div class="content-section mt-5">
    <h2 class="section-title text-center mb-5"><i class="fas fa-fire"></i> Key Benefits of Vastu Scanning</h2>
    <div class="puja-steps-grid">

        <div class="step-card">
            <div class="step-icon"><i class="fas fa-bullseye"></i></div>
            <h3>Professional Progress:</h3>
            <p>Creating positive energy can lead to success, prosperity, and growth in business.</p>
        </div>

        <div class="step-card">
            <div class="step-icon"><i class="fas fa-igniting"></i></div>
            <h3>Sources of Clarity and Prosperity:</h3>
            <p>By analyzing the energy of each area in a home or workplace, the space can become more efficient and prosperous.</p>
        </div>

    </div>
</div>


              <div class="phi-content-col meaning-bg">
    <div class="content-padding">
        <h2 class="mini-title"><i class="fas fa-lightbulb"></i> Conclusion</h2>
        <div class="meaning-item d-flex justify-content-center">
            
            <p>Vastu Aura Scanner is a state-of-the-art tool that allows the examination of energy and atmosphere in a house, office, or any other space. It is highly effective in maintaining proper energy flow and balance. Using this tool, Vastu defects are identified and resolved, creating a positive environment that brings prosperity, success, and peace of mind.</p>
        </div>
        
    </div>
</div>


            </div>
        </div>
    </div>

</section>

<?php include 'footer.php'; ?>