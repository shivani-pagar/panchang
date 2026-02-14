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
                                <h1 class="pbmit-tbar-title">Architectural examination</h1>
                            </div>
                        </div>
                        <div class="pbmit-breadcrumb">
                            <div class="pbmit-breadcrumb-inner">
                                <span><a title="" href="index.php" class="home"><span>Home</span></a></span>
                                <span class="sep">-</span>
                                <span><span class="post-root post post-post current-item">Architectural examination</span></span>
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
                <div class="mantra-ribbon vastu-shanti-theme">
                    <div class="mantra-icon-left"><i class="fas fa-home"></i></div>
                    <div class="mantra-text-content">
                        <p class="sanskrit-shlok">
                            वास्तोष्पते प्रतिजानीह्यस्मान् त्स्वावेशो अनमीवो भवान: ।
                            यत् त्वेमहे प्रति तन्नो जुषस्व शं नो भव द्विपदे शं चतुष्पदे ॥
                        </p>
                        <div class="shlok-divider"></div>
                        <p class="shlok-meaning">
                            <strong>अर्थ:</strong> हे वास्तू देवते, आम्हाला सुखद आश्रय द्या आणि आमचे रोगव्याधींपासून रक्षण करा. या घरातील माणसे आणि पशू-प्राणी सर्वांना सुख-शांती लाभू दे.
                        </p>
                    </div>
                    <div class="mantra-icon-right"><i class="fas fa-om"></i></div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6  order-1">
                <img src="images/images/vastu-pari02.png" class="w-100" alt="">

            </div>
            <div class="col-md-6 col-lg-6">
                <div class="service-details">
    <h3 class="pbmit-title">What is a Vastu Review?</h3><br>
    <p>
        A Vastu review is the process of analyzing the structure, direction, and energy flow of a house, office, building, or any other property. According to the principles of Vastu Shastra, the design, shape, Vastu defects, and energy flow of a space have a direct impact on the lives of the people residing or working there. <br><br>

        The Vastu review process identifies structural imbalances or defects within a building or site and suggests appropriate remedies to correct them. It includes examining every part of the house or building, such as room placement, furniture arrangement, doors, windows, and overall layout. <br><br>

        Through Vastu analysis, remedies are provided to remove negative energy and enhance positive energy in a home, office, shop, or other premises. This process helps create a balanced and harmonious environment, promoting happiness, peace, prosperity, and overall well-being for the occupants.
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
                        <img src="images/images/vastu-pari01.jpg" class="img-fluid main-ritual-img" alt="Vedic Ritual">
                    </div> <br>
                    <div class="image-wrapper">
                        <img src="images/images/vastu-pari03.png" class="img-fluid main-ritual-img" alt="Vedic Ritual">
                    </div>
                </div>
             <div class="col-lg-6">
    <div class="principle-content">
        <h2 class="accent-title pbmit-title"><i class="fas fa-fire-alt"></i> Vastu Review Process</h2>
        <div class="vows-container">

            <div class="element-tag">
                <span class="tag-title">Site Survey :</span>
                <span class="tag-desc">
                    In the first stage, the Vastu consultant conducts a detailed survey of the site. This includes studying the shape of the plot, its direction, wind flow, sunlight exposure, water elements, nearby rivers or dams, and other geographical factors. The consultant carefully examines all aspects of the land and its surroundings.
                </span>
            </div>

            <div class="element-tag">
                <span class="tag-title">Direction and Location Analysis :</span>
                <span class="tag-desc">
                    According to Vastu Shastra, each direction and its associated planetary influences and energies affect our lives. By analyzing each direction of the house or building (East, West, North, and South), the positive and negative energies in those directions are identified.
                </span>
                <span class="element-subpoints mantra-text">East Direction: Associated with the Sun, prosperity, and good health.</span>
                <span class="element-subpoints mantra-text">South Direction: Represents stability, strength, and security.</span>
                <span class="element-subpoints mantra-text">North Direction: Linked to financial growth and business success.</span>
                <span class="element-subpoints mantra-text">West Direction: Connected with mental peace and emotional balance.</span>
            </div>

            <div class="element-tag">
                <span class="tag-title">Vastu Defect Analysis :</span>
                <span class="tag-desc">
                    The consultant identifies any Vastu defects present in the house or building and suggests corrective measures. Some common Vastu defects may include:
                </span>
                <span class="element-subpoints mantra-text">Incorrect Layout: The house or structure facing an unfavorable direction.</span>
                <span class="element-subpoints mantra-text">Improper Room Placement: Kitchen, bedrooms, or wardrobes positioned in unsuitable areas.</span>
                <span class="element-subpoints mantra-text">Northwest Corner Imbalance: Negative energy accumulation in that specific zone.</span>
                <span class="element-subpoints mantra-text">Disproportionate Structure: Extremely small or overly large or irregular building design.</span>
            </div>

            <div class="element-tag">
                <span class="tag-title">Energy Flow and Balance :</span>
                <span class="tag-desc">
                    In Vastu Shastra, monitoring and maintaining proper energy flow is essential. Correct placement of doors, windows, and furniture ensures smooth energy circulation throughout the house. Balanced energy flow positively influences the mental well-being and physical health of the occupants. The internal layout and structural elements are also reviewed to maintain harmony and balance within the space.
                </span>
            </div>

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
        <h3 class="accent-title pbmit-title"><i class="fas fa-fire-alt"></i> Remedies and Solutions</h3>

        <div class="vows-container">

            <div class="element-tag">
                <span class="tag-title">
                    Use of Vastu Yantras: Spiritual instruments such as Rudraksha, Kuber Yantra, and Hanuman Yantra are recommended to correct energy imbalances and remove Vastu defects.
                </span>
            </div>

            <div class="element-tag">
                <span class="tag-title">
                    Furniture Arrangement: Appropriate changes in furniture placement and interior décor are suggested according to Vastu principles to maintain harmony and balance.
                </span>
            </div>

            <div class="element-tag">
                <span class="tag-title">
                    Windows and Doors: Repositioning doors and windows to ensure proper energy flow within the house.
                </span>
            </div>

            <div class="element-tag">
                <span class="tag-title">
                    Color Scheme: Selecting suitable colors for each part of the house. For example, light and soothing colors may be used to neutralize negative energy, while fresh and vibrant colors enhance positive energy.
                </span>
            </div>

            <h3 class="pbmit-title">Creating a Positive Environment</h3>

            <div class="element-tag">
                <span class="tag-title">
                    To establish a positive atmosphere, special pujas, mantra chanting, and spiritual practices are performed to resolve Vastu defects. Such practices help create an environment that promotes mental peace, physical well-being, and spiritual growth.
                </span>
            </div>

        </div>
    </div>
</div>


                    <div class="col-lg-6">
                        <div class="ritual-image-frame">
                            <img src="images/images/vastu-consulting05.png" class="img-fluid rounded-custom shadow-lg" alt="यज्ञाची प्रमुख अंगे">
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
                            <img src="images/images/vastu-pari04.jpg" class="img-fluid main-ritual-img" alt="Vedic Ritual">
                        </div>
                    </div>
                   <div class="col-lg-6">
    <div class="principle-content">
        <h2 class="pbmit-title">Benefits of Vastu Examination</h2>

        <h4>Positive Energy Enhancement</h4>
        <div class="samagri-container">
            <span class="samagri-box">
                According to Vastu Shastra, a proper examination increases the positive energy in the home, keeping all family members happy and balanced.
            </span>
        </div><br>

        <h4>Personal and Professional Success</h4>
        <div class="samagri-container">
            <span class="samagri-box">
                A well-designed and balanced home can enhance personality, efficiency, and success in personal and professional endeavors.
            </span>
        </div><br>

        <h4>Financial Prosperity</h4>
        <div class="samagri-container">
            <span class="samagri-box">
                Following Vastu principles can promote financial growth, professional stability, and long-term prosperity.
            </span>
        </div><br>

        <h4>Health and Peace of Mind</h4>
        <div class="samagri-container">
            <span class="samagri-box">
                Maintaining proper energy flow in the home benefits physical health, boosts morale, and promotes mental peace.
            </span>
        </div><br>

        <h4>Family Harmony</h4>
        <div class="samagri-container">
            <span class="samagri-box">
                Proper application of Vastu principles encourages love, harmony, and cooperation among family members, ensuring everyone receives the right energy in the home.
            </span>
        </div>
    </div>
</div>

                </div>
            </div>

            <div class="service-page-infobox">
                <div class="row align-items-center">

                   <div class="col-lg-6">
    <div class="principle-content">
        <h2 class="pbmit-title">Questions Considered in a Vastu Examination</h2>

        <h4>During a Vastu examination, the following aspects are evaluated:</h4>

        <div class="samagri-container">
            <span class="samagri-box">Direction and size of the house.</span>
        </div>

        <div class="samagri-container">
            <span class="samagri-box">Location of the main rooms in the house.</span>
        </div>

        <div class="samagri-container">
            <span class="samagri-box">Energy flow and placement within the home.</span>
        </div>

        <div class="samagri-container">
            <span class="samagri-box">Positioning of doors and windows.</span>
        </div>

        <div class="samagri-container">
            <span class="samagri-box">Color schemes, furniture placement, and arrangement of other elements.</span>
        </div>

        <div class="samagri-container">
            <span class="samagri-box">Necessary measures for spiritual, physical, mental, and financial well-being.</span>
        </div>
    </div>
</div>


                    <div class="col-lg-6">
                        <div class="image-wrapper">
                            <img src="images/images/vastu-pari05.png" class="img-fluid main-ritual-img" alt="Vedic Ritual">
                        </div>
                    </div>
                </div>
            </div>

      <div class="content-section mt-5">
    <h2 class="section-title text-center mb-5"><i class="fas fa-fire"></i> Choosing an Expert for Vastu Examination</h2>
    <div class="puja-steps-grid">

        <div class="step-card">
            <div class="step-icon"><i class="fas fa-bullseye"></i></div>
            <h3>Experience:</h3>
            <p>Choose a consultant with the right expertise and ample experience.</p>
        </div>

        <div class="step-card">
            <div class="step-icon"><i class="fas fa-bullseye"></i></div>
            <h3>Education and Certification:</h3>
            <p>The consultant should have certification from a recognized Vastu Shastra scholar.</p>
        </div>

        <div class="step-card">
            <div class="step-icon"><i class="fas fa-bullseye"></i></div>
            <h3>Customer Feedback:</h3>
            <p>Check reviews and feedback about the expert’s work and services provided.</p>
        </div>

        <div class="step-card">
            <div class="step-icon"><i class="fas fa-bullseye"></i></div>
            <h3>Fair Fees:</h3>
            <p>Select a consultant who charges a reasonable, fair, and transparent fee.</p>
        </div>

    </div>
</div>


        </div>
     
</section>

<?php include 'footer.php'; ?>