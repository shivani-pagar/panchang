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

        color: #5f5d5d;
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

    /* Wedding Grid */
    .wedding-steps-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 25px;
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

    /* Table Wrapper */
    .vedic-table-wrapper {
        background: #ffffff;
        border-radius: 15px;
        padding: 10px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
    }

    .vedic-no-border-table {
        width: 100%;
        border-collapse: collapse;
        border: none;
        /* Borders Removed */
    }

    /* Header Styling */
    .vedic-no-border-table thead th {
        background-color: #FFF3E0;
        color: #8B4513;
        padding: 15px;
        text-align: left;
        font-size: 1.1rem;
        font-weight: 800;
        border-radius: 8px;
        border: none;
    }

    .vedic-no-border-table thead th i {
        margin-right: 8px;
        color: #FF9800;
    }

    /* Rows Styling */
    .vedic-no-border-table tbody td {
        padding: 12px 15px;
        color: #444;
        font-size: 1rem;
        border-bottom: 1px solid #f1f1f1;
        /* Subtle divider instead of border */
    }

    .vedic-no-border-table tbody tr:last-child td {
        border-bottom: none;
    }

    .vedic-no-border-table tbody td strong {
        color: #E65100;
        font-weight: 700;
    }

    /* Hover Effect for Professional Feel */
    .vedic-no-border-table tbody tr {
        transition: all 0.2s ease;
    }

    .vedic-no-border-table tbody tr:hover {
        background-color: #fdf5e6;
        transform: scale(1.01);
    }

    /* Adjustments for Image Frame on Left */
    .rounded-custom {
        border-radius: 20px;
        border-left: 8px solid #FF9800;
    }

    /* Mobile Responsive */
    @media (max-width: 991px) {
        .ritual-info-group {
            margin-top: 40px;
            padding-left: 0 !important;
        }
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
                                <h1 class="pbmit-tbar-title">Vastu Consulting</h1>
                            </div>
                        </div>
                        <div class="pbmit-breadcrumb">
                            <div class="pbmit-breadcrumb-inner">
                                <span><a title="" href="index.php" class="home"><span>Home</span></a></span>
                                <span class="sep">-</span>
                                <span><span class="post-root post post-post current-item">Vastu Consulting</span></span>
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
                <div class="mantra-ribbon vastu-theme">
                    <div class="mantra-icon-left"><i class="fas fa-house-user"></i></div>
                    <div class="mantra-text-content">
                        <p class="sanskrit-shlok">
                            वास्तोष्पते प्रतरणो न एधि गयस्फानो गोभिरश्वेभिरन्दो ||
                            अजरासस्ते सख्ये स्याम पितवे पुत्रान्प्रति नो जुषस्व ||
                        </p>
                        <div class="shlok-divider"></div>
                        <p class="shlok-meaning">
                            <strong>अर्थ:</strong> हे वास्तू देवते, आमच्या वास्तूत सुख-समृद्धीची वृद्धी करा. पिता ज्याप्रमाणे पुत्राचे रक्षण करतो, त्याप्रमाणे आमचे रक्षण करा आणि आम्हास सदैव सुख-शांती प्रदान करा.
                        </p>
                    </div>
                    <div class="mantra-icon-right"><i class="fas fa-om"></i></div>
                </div>
            </div>
            <div class="service-page-infobox">
                <div class="row align-items-center">

                  <div class="col-lg-6">
    <div class="principle-content">
        <h2 class="accent-title">What is Vastu Consulting?</h2><br>
        
        <p style="text-align: justify; font-size: 18px;">
            Vastu Consulting is a professional service through which experts provide proper guidance based on the principles of Vastu Shastra for your home, office, shop, or other buildings. <br><br>
            
            Vastu Consulting involves examining the condition and structure of the property, identifying any Vastu defects present, and suggesting appropriate remedies to resolve them. <br><br>
            
            According to Vastu Shastra, the design and direction of every house, office, or building can have a positive or negative impact on the lives of the people inside. <br><br>
            
            Vastu Consulting recommends the right direction, design, and corrective solutions to balance the energy of the space and enhance prosperity, harmony, and overall well-being of the people living or working there.
        </p>

        <div class="samagri-container">
        </div>

    </div>
</div>

                    <div class="col-lg-6">
                        <div class="image-wrapper">
                            <img src="images/images/vastu-consulting.jpeg" class="img-fluid main-ritual-img" alt="Vedic Ritual">
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
                        <img src="images/images/vastu-consulting02.jpeg" class="img-fluid main-ritual-img" alt="Vedic Ritual">
                    </div>
                </div>
             <div class="col-lg-6">
    <div class="principle-content">
        <h2 class="accent-title">How Does the Vastu Consulting Service Work?</h2>
        <p>The Vastu consulting process is generally done in the following steps:</p>

        <div class="samagri-container">

            <span style="display:block; background:#f8f9fa; padding:20px; border-left:5px solid #b48b3c; border-radius:8px; box-shadow:0 4px 12px rgba(0,0,0,0.08); margin-bottom:20px; font-family: 'Segoe UI', sans-serif; line-height:1.7;">
                <h5 style="margin:0 0 10px 0; font-size:18px; color:#b48b3c; font-weight:600;">
                    Survey
                </h5>
                <p style="margin:0; font-size:15px; color:#333;">
                    The consultant first conducts a detailed survey of the house, office, or building. This includes examining both the exterior and interior structure. The direction, size, layout, interior design, doors, windows, and any potential Vastu defects are carefully analyzed.
                </p>
            </span>

            <span style="display:block; background:#f8f9fa; padding:20px; border-left:5px solid #b48b3c; border-radius:8px; box-shadow:0 4px 12px rgba(0,0,0,0.08); margin-bottom:20px; font-family:'Segoe UI', sans-serif; line-height:1.7;">
                <h5 style="margin:0 0 10px 0; font-size:18px; color:#b48b3c; font-weight:600;">
                    Horoscope / Natal Chart Analysis
                </h5>
                <p style="margin:0; font-size:15px; color:#333;">
                    The consultant examines the person’s horoscope to understand the planetary positions and their influences on life. This helps in identifying the relationship between the individual’s life energy and the energy of their home or workplace.
                </p>
            </span>

            <span style="display:block; background:#f8f9fa; padding:20px; border-left:5px solid #b48b3c; border-radius:8px; box-shadow:0 4px 12px rgba(0,0,0,0.08); margin-bottom:20px; font-family:'Segoe UI', sans-serif; line-height:1.7;">
                <h5 style="margin:0 0 10px 0; font-size:18px; color:#b48b3c; font-weight:600;">
                    Vastu Defects Analysis
                </h5>
                <p style="margin:0; font-size:15px; color:#333;">
                    Every house or building may have certain design flaws, directional issues, or construction errors. A Vastu consultant identifies these defects and provides practical remedies and guidance to correct them and enhance positive energy.
                </p>
            </span>

        </div>
    </div>
</div>

            </div>
        </div>

        <hr class="section-divider">

        <div class="service-page-infobox">
            <div class="row align-items-center">

                <div class="col-lg-6">
                    <div class="principle-content">
                        <h2 class="accent-title">How Does the Vastu Consulting Service Work?</h2>
                         <p>The Vastu consulting process is generally done in the following steps:</p>
                       <div class="samagri-container">

    <span style="display:block; background:#f8f9fa; padding:20px; border-left:5px solid #b48b3c; border-radius:8px; box-shadow:0 4px 12px rgba(0,0,0,0.08); margin-bottom:20px; font-family: 'Segoe UI', sans-serif; line-height:1.7;">
        <h5 style="margin:0 0 10px 0; font-size:18px; color:#b48b3c; font-weight:600;">
            Advice and Remedies:
        </h5>
        <p style="margin:0; font-size:15px; color:#333;">
            The consultant suggests solutions to resolve Vastu defects. This includes advice and remedies based on the Vastu defects of the house or building. It may involve proper furniture arrangement, Rangoli designs, suitable color schemes, systematic placement, and the correct use of appliances.
        </p>
    </span>

    <span style="display:block; background:#f8f9fa; padding:20px; border-left:5px solid #b48b3c; border-radius:8px; box-shadow:0 4px 12px rgba(0,0,0,0.08); margin-bottom:20px; font-family:'Segoe UI', sans-serif; line-height:1.7;">
        <h5 style="margin:0 0 10px 0; font-size:18px; color:#b48b3c; font-weight:600;">
            Remediation Suggestions:
        </h5>
        <p style="margin:0; font-size:15px; color:#333;">
            If there is a Vastu defect, specific remedies are recommended. These may include changing the location of the main door, using new colors, applying technical devices, organizing special pujas at home, or using Rudraksha, Yantras, Gemstones, or observing Vrats.
        </p>
    </span>

</div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="image-wrapper">
                        <img src="images/images/vastu-consulting03.jpeg" class="img-fluid main-ritual-img" alt="Vedic Ritual">
                    </div>
                </div>
            </div>
        </div>

        <hr class="section-divider">

        <div class="service-page-infobox">
            <div class="row align-items-center">

                <div class="col-lg-6">
                    <div class="image-wrapper">
                        <img src="images/images/vastu-consulting04.png" class="img-fluid main-ritual-img" alt="Vedic Ritual">
                    </div><br>
                    <div class="image-wrapper">
                        <img src="images/images/vastu-consulting05.png" class="img-fluid main-ritual-img" alt="Vedic Ritual">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="principle-content">

                        <h2 class="accent-title">How does the Vastu Consulting service work?</h2>
                        <p>The following major services are provided in Vastu Consulting:</p>
                       <div class="samagri-container">

    <span style="display:block; background:#f8f9fa; padding:20px; border-left:5px solid #b48b3c; border-radius:8px; box-shadow:0 4px 12px rgba(0,0,0,0.08); margin-bottom:20px; font-family:'Segoe UI', sans-serif; line-height:1.7;">
        <h5 style="margin:0 0 8px 0; font-size:18px; color:#b48b3c; font-weight:600;">
            Vastu Advice for Home
        </h5>
        <p style="margin:0; font-size:15px; color:#333;">
            It is advised to resolve the Vastu defects of the house and balance the energy within the home. In this process, the direction, design, and location of each part of the house are considered important.
        </p>
    </span>

    <span style="display:block; background:#f8f9fa; padding:20px; border-left:5px solid #b48b3c; border-radius:8px; box-shadow:0 4px 12px rgba(0,0,0,0.08); margin-bottom:20px; font-family:'Segoe UI', sans-serif; line-height:1.7;">
        <h5 style="margin:0 0 8px 0; font-size:18px; color:#b48b3c; font-weight:600;">
            Vastu Advice for Office and Business
        </h5>
        <p style="margin:0; font-size:15px; color:#333;">
            Vastu advice is provided to resolve office design flaws and to offer proper guidance for business success and growth.
        </p>
    </span>

    <span style="display:block; background:#f8f9fa; padding:20px; border-left:5px solid #b48b3c; border-radius:8px; box-shadow:0 4px 12px rgba(0,0,0,0.08); margin-bottom:20px; font-family:'Segoe UI', sans-serif; line-height:1.7;">
        <h5 style="margin:0 0 8px 0; font-size:18px; color:#b48b3c; font-weight:600;">
            Vastu Advice for New Construction
        </h5>
        <p style="margin:0; font-size:15px; color:#333;">
            When constructing a new house or building, the design is developed using the principles of Vastu Shastra to ensure harmony, balance, and positive energy.
        </p>
    </span>

    <span style="display:block; background:#f8f9fa; padding:20px; border-left:5px solid #b48b3c; border-radius:8px; box-shadow:0 4px 12px rgba(0,0,0,0.08); margin-bottom:20px; font-family:'Segoe UI', sans-serif; line-height:1.7;">
        <h5 style="margin:0 0 8px 0; font-size:18px; color:#b48b3c; font-weight:600;">
            Vastu Remedies
        </h5>
        <p style="margin:0; font-size:15px; color:#333;">
            Appropriate measures are suggested to reduce Vastu defects in the house or office. This may include the use of Vastu Yantras, Rudraksha, Gemstones, Puja rituals, and other spiritual remedies.
        </p>
    </span>

    <span style="display:block; background:#f8f9fa; padding:20px; border-left:5px solid #b48b3c; border-radius:8px; box-shadow:0 4px 12px rgba(0,0,0,0.08); margin-bottom:20px; font-family:'Segoe UI', sans-serif; line-height:1.7;">
        <h5 style="margin:0 0 8px 0; font-size:18px; color:#b48b3c; font-weight:600;">
            Vastu Reconstruction
        </h5>
        <p style="margin:0; font-size:15px; color:#333;">
            Sometimes there may be structural problems in a house that create Vastu defects. A Vastu consultant suggests necessary modifications in the design and structure of the house to remove those issues and restore balance.
        </p>
    </span>

</div>

                    </div>
                </div>

            </div>
        </div>


     <div class="wedding-ritual-section mt-5">
    <h2 class="wedding-section-title text-center mb-5">
        <i class="fas fa-scroll"></i> Benefits of Vastu Consulting
    </h2>

    <div class="wedding-steps-grid">

        <div class="wedding-step-card">
            <div class="wedding-step-icon"><i class="fas fa-sun"></i></div>
            <h3>Positive Energy is Generated</h3>
            <p>
                Taking proper Vastu advice removes negative energy from the home or office and allows positive energy to enter.
            </p>
        </div>

        <div class="wedding-step-card">
            <div class="wedding-step-icon"><i class="fas fa-balance-scale"></i></div>
            <h3>Peace of Mind and Balance</h3>
            <p>
                Properly designing each area of the house brings peace of mind and balance. This makes the people in the house more peaceful and happy.
            </p>
        </div>

        <div class="wedding-step-card">
            <div class="wedding-step-icon"><i class="fas fa-coins"></i></div>
            <h3>Financial Prosperity and Success</h3>
            <p>
                Following proper Vastu Shastra can lead to financial progress, business success, and prosperity.
            </p>
        </div>

        <div class="wedding-step-card">
            <div class="wedding-step-icon"><i class="fas fa-tools"></i></div>
            <h3>Remediation Suggestions</h3>
            <p>
                If there is a Vastu defect, remedies are suggested. These may include changing the location of the main door, using a new color, applying new technical devices, organizing special pujas in the house, or using Rudraksha, Yantras, Gemstones, or observing Vrats.
            </p>
        </div>

        <div class="wedding-step-card">
            <div class="wedding-step-icon"><i class="fas fa-heartbeat"></i></div>
            <h3>Health and Material Well-being</h3>
            <p>
                Through Vastu Shastra, the energy in the home is balanced, improving people's physical and mental health.
            </p>
        </div>

        <div class="wedding-step-card">
            <div class="wedding-step-icon"><i class="fas fa-home"></i></div>
            <h3>Love and Harmony in the Family</h3>
            <p>
                The balance and proper direction of the house design enhances love and harmony among family members.
            </p>
        </div>

    </div>
</div>


        <br><br>
        <section class="saptpadi-dynamic-section">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-5">
                        <div class="saptpadi-image-frame">
                            <img src="images/images/vastu-consulting07.jpg" class="img-fluid rounded-custom shadow-lg" alt="आध्यात्मिक जीवन">
                            <div class="frame-decoration"></div>
                        </div>
                    </div>

                    <div class="col-lg-7">
                    <div class="ritual-info-group ps-lg-4">
    <h2 class="accent-title mb-4">Vastu Consulting Process</h2>

    <div style="max-width:100%; overflow-x:auto; background:#ffffff; padding:30px; border-radius:12px; box-shadow:0 8px 25px rgba(0,0,0,0.08); margin:30px 0; font-family:'Segoe UI', sans-serif;">

        <table style="width:100%; border-collapse:collapse; font-size:16px; line-height:1.8;">

            <tbody>

                <tr style="border-bottom:1px solid #e5e5e5;">
                    <td style="width:25%; padding:18px; font-weight:600; color:#b48b3c; font-size:17px;">
                        Inspection:
                    </td>
                    <td style="padding:18px; color:#333;">
                        The location and structure of your home or office are carefully examined.
                    </td>
                </tr>

                <tr style="border-bottom:1px solid #e5e5e5; background:#fafafa;">
                    <td style="padding:18px; font-weight:600; color:#b48b3c; font-size:17px;">
                        Analysis:
                    </td>
                    <td style="padding:18px; color:#333;">
                        Vastu defects and negative energy within the house are identified.
                    </td>
                </tr>

                <tr style="border-bottom:1px solid #e5e5e5;">
                    <td style="padding:18px; font-weight:600; color:#b48b3c; font-size:17px;">
                        Suggestions:
                    </td>
                    <td style="padding:18px; color:#333;">
                        Appropriate remedies and improvements are recommended.
                    </td>
                </tr>

                <tr style="background:#fafafa;">
                    <td style="padding:18px; font-weight:600; color:#b48b3c; font-size:17px;">
                        Implementation:
                    </td>
                    <td style="padding:18px; color:#333;">
                        The suggested remedies and advice are implemented.
                    </td>
                </tr>

            </tbody>

        </table>

    </div>
</div>


                    </div>
                </div>
        </section>
</section>

<?php include 'footer.php'; ?>