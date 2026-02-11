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
                                <h1 class="pbmit-tbar-title">वास्तु कन्सल्टिंग</h1>
                            </div>
                        </div>
                        <div class="pbmit-breadcrumb">
                            <div class="pbmit-breadcrumb-inner">
                                <span><a title="" href="index.php" class="home"><span>Home</span></a></span>
                                <span class="sep">-</span>
                                <span><span class="post-root post post-post current-item">वास्तु कन्सल्टिंग</span></span>
                            </div>
                        </div>
                    </div>
                </div>

                <?php include 'sachin_guruji.php'; ?>


            </div>
            <div class="col-md-5 col-lg-5">
                <div class="form-wrp">
                    <form method="post" id="contact-form">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="pbmit-titlee">MAKE AN ENQUIRY</h2>
                            </div>
                            <div class="col-md-12">
                                <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                            </div>
                            <div class="col-md-12">
                                <input type="text" name="transport-type" class="form-control" placeholder="Phone" required="">
                            </div>
                            <div class="col-md-12">
                                <input type="date" name="subject" class="form-control" placeholder="Email" required="">
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="pbmit-btn w-100">
                                    <i class="form-btn-loader fa fa-circle-o-notch fa-spin fa-fw margin-bottom d-none"></i>
                                    Book Your Puja
                                </button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
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
                            <h2 class="accent-title">वास्तु कन्सल्टिंग म्हणजे काय?</h2><br>
                            <p style="text-align: justify; font-size: 18px;">वास्तु कन्सल्टिंग हे एक व्यावसायिक सेवा आहे, ज्याद्वारे विशेषज्ञ आपल्याला आपल्या घर, कार्यालय, दुकान, किंवा इतर इमारतींच्या वास्तुशास्त्राच्या दृष्टीने योग्य मार्गदर्शन देतात. <br><br>
                                वास्तु कन्सल्टिंगमध्ये त्या वास्तुच्या स्थितीची आणि रचनेची तपासणी केली जाते, तसेच त्यात होणाऱ्या वास्तु दोषांची माहिती देऊन त्याचे निराकरण करण्यासाठी योग्य उपाय सुचवले जातात.<br><br>
                                वास्तु शास्त्रानुसार प्रत्येक घर, ऑफिस किंवा इमारतीची रचना आणि दिशा त्यातील लोकांच्या जीवनावर सकारात्मक किंवा नकारात्मक प्रभाव टाकू शकते. <br><br>
                                वास्तु कन्सल्टिंगमधून योग्य दिशा, रचना आणि उपायांची शिफारस केली जाते, ज्यामुळे घराच्या किंवा इमारतीतील उर्जा संतुलित होईल आणि त्यातील लोकांचे जीवन समृद्ध होईल.
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


<section class="py-5"
    style="background-image: url(images/guruji/ser-img/ctcbgg.jpg);
       height: 300px;
       width: 100%;
       background-size: cover;
       background-position: center;">

    <div class="container">
        <div class="row justify-content-end">
            <div class="col-md-6">
                <div>
                    <h2>तुमची पूजा आजच बुक करा</h2>
                    <p>तुमच्या पवित्र कार्यासाठी सुलभतेने नोंदणी करा आणि ईश्वरी आशीर्वादाचा लाभ घ्या.</p>
                    <a href="contact.php" class="pbmit-btnn pbmit-btn-lg">पूजेसाठी नोंदणी करा</a>
                </div>
            </div>
        </div>
    </div>
</section>

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
                        <h2 class="accent-title">वास्तु कन्सल्टिंग सेवा कशी कार्य करते?</h2>
                        <p>वास्तु कन्सल्टिंग प्रक्रिया सामान्यत खालील चरणांमध्ये केली जाते:</p>
                        <div class="samagri-container">
                            <span style="display:block; background:#f8f9fa; padding:20px; border-left:5px solid #b48b3c; border-radius:8px; box-shadow:0 4px 12px rgba(0,0,0,0.08); margin-bottom:20px; font-family: 'Segoe UI', sans-serif; line-height:1.7;">
                                <h5 style="margin:0 0 10px 0; font-size:18px; color:#b48b3c; font-weight:600;">
                                    सर्वेक्षण (Survey)
                                </h5>
                                <p style="margin:0; font-size:15px; color:#333;">
                                    कन्सल्टंट सर्वप्रथम घर, कार्यालय किंवा इमारतीचे सविस्तर सर्वेक्षण करतो. यामध्ये बाह्य व अंतर्गत रचनेची तपासणी करून दिशा, आकार, इंटिरिअर, दरवाजे, खिडक्या आणि संभाव्य वास्तुदोष यांचे सखोल विश्लेषण केले जाते.
                                </p>
                            </span>

                            <span style="display:block; background:#f8f9fa; padding:20px; border-left:5px solid #b48b3c; border-radius:8px; box-shadow:0 4px 12px rgba(0,0,0,0.08); margin-bottom:20px; font-family:'Segoe UI', sans-serif; line-height:1.7;">
                                <h5 style="margin:0 0 10px 0; font-size:18px; color:#b48b3c; font-weight:600;">
                                    कुंडली किंवा नक्षत्रांचा अभ्यास (Horoscope/Natal Chart Analysis)
                                </h5>
                                <p style="margin:0; font-size:15px; color:#333;">
                                    कन्सल्टंट व्यक्तीची जन्मकुंडली तपासून ग्रहांची स्थिती व त्यांचे जीवनावर होणारे परिणाम समजावतो. यामुळे व्यक्तीचे जीवन आणि घरातील ऊर्जेतील संबंध स्पष्ट होतात.
                                </p>
                            </span>

                            <span style="display:block; background:#f8f9fa; padding:20px; border-left:5px solid #b48b3c; border-radius:8px; box-shadow:0 4px 12px rgba(0,0,0,0.08); margin-bottom:20px; font-family:'Segoe UI', sans-serif; line-height:1.7;">
                                <h5 style="margin:0 0 10px 0; font-size:18px; color:#b48b3c; font-weight:600;">
                                    वास्तु दोष विश्लेषण (Vastu Defects Analysis)
                                </h5>
                                <p style="margin:0; font-size:15px; color:#333;">
                                    घर किंवा इमारतीतील रचना, दिशा किंवा बांधकामातील त्रुटी ओळखून त्यांचे सखोल विश्लेषण केले जाते. कन्सल्टंट योग्य उपाय सुचवून सकारात्मक ऊर्जा वाढवण्यास मदत करतो.
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
                        <h2 class="accent-title">वास्तु कन्सल्टिंग सेवा कशी कार्य करते?</h2>
                        <p>वास्तु कन्सल्टिंग प्रक्रिया सामान्यत खालील चरणांमध्ये केली जाते:</p>
                        <div class="samagri-container">
                            <span style="display:block; background:#f8f9fa; padding:20px; border-left:5px solid #b48b3c; border-radius:8px; box-shadow:0 4px 12px rgba(0,0,0,0.08); margin-bottom:20px; font-family: 'Segoe UI', sans-serif; line-height:1.7;">
                                <h5 style="margin:0 0 10px 0; font-size:18px; color:#b48b3c; font-weight:600;">
                                    सल्ला आणि उपाय(Advice and Remedies):
                                </h5>
                                <p style="margin:0; font-size:15px; color:#333;">
                                    वास्तु दोषांचा निराकरण करण्यासाठी कन्सल्टंट उपाय सुचवतो. यामध्ये घराच्या व इमारतीच्या वासु दोषांवर आधारित काही सल्ले आणि उपाय दिले जातात. यामध्ये योग्य फर्निचर व्यवस्था, रांगोळीचे डिझाईन्स, रंग योजना, पद्धतशीर स्थान आणि यंत्रांचा वापर समाविष्ट असतो.
                                </p>
                            </span>

                            <span style="display:block; background:#f8f9fa; padding:20px; border-left:5px solid #b48b3c; border-radius:8px; box-shadow:0 4px 12px rgba(0,0,0,0.08); margin-bottom:20px; font-family:'Segoe UI', sans-serif; line-height:1.7;">
                                <h5 style="margin:0 0 10px 0; font-size:18px; color:#b48b3c; font-weight:600;">
                                    सुधारणा सुचना (Remediation Suggestions):
                                </h5>
                                <p style="margin:0; font-size:15px; color:#333;">
                                    जर वास्तु दोष असेल तर त्याचे उपाय सुचवले जातात. यामध्ये मुख्य दरवाजाचे स्थान बदलणे, नवा रंग वापरणे, नवीन तंत्र यंत्रांचा वापर करणे, घरात विशेष पूजेचा आयोजन करणे, किंवा त्यात रुद्राक्ष, यंत्रे, रत्न किंवा व्रतांचे पालन करणे यासारख्या उपायांचा समावेश होतो.
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
                        <h2 class="accent-title">वास्तु कन्सल्टिंग सेवा कशी कार्य करते?</h2>
                        <p>वास्तु कन्सल्टिंग प्रक्रिया सामान्यत खालील चरणांमध्ये केली जाते:</p>
                        <div class="samagri-container">
                            <span style="display:block; background:#f8f9fa; padding:20px; border-left:5px solid #b48b3c; border-radius:8px; box-shadow:0 4px 12px rgba(0,0,0,0.08); margin-bottom:20px; font-family:'Segoe UI', sans-serif; line-height:1.7;">
                                <h5 style="margin:0 0 8px 0; font-size:18px; color:#b48b3c; font-weight:600;">
                                    घरासाठी वास्तु सल्ला (Vastu Advice for Home)
                                </h5>
                                <p style="margin:0; font-size:15px; color:#333;">
                                    घराच्या वास्तु दोषांचे निराकरण आणि घरातील उर्जा संतुलित करण्यासाठी सल्ला दिला जातो. यामध्ये घराच्या प्रत्येक भागाची दिशा, रचना आणि स्थान महत्त्वाचे असतात.
                                </p>
                            </span>


                            <span style="display:block; background:#f8f9fa; padding:20px; border-left:5px solid #b48b3c; border-radius:8px; box-shadow:0 4px 12px rgba(0,0,0,0.08); margin-bottom:20px; font-family:'Segoe UI', sans-serif; line-height:1.7;">
                                <h5 style="margin:0 0 8px 0; font-size:18px; color:#b48b3c; font-weight:600;">
                                    ऑफिस व व्यापारासाठी वास्तु सल्ला (Vastu Advice for Office and Business)
                                </h5>
                                <p style="margin:0; font-size:15px; color:#333;">
                                    व्यवसायाच्या यशासाठी, कार्यालयाच्या रचनेतील दोषांचे निराकरण आणि योग्य मार्गदर्शन मिळवण्यासाठी वास्तु सल्ला दिला जातो.
                                </p>
                            </span>


                            <span style="display:block; background:#f8f9fa; padding:20px; border-left:5px solid #b48b3c; border-radius:8px; box-shadow:0 4px 12px rgba(0,0,0,0.08); margin-bottom:20px; font-family:'Segoe UI', sans-serif; line-height:1.7;">
                                <h5 style="margin:0 0 8px 0; font-size:18px; color:#b48b3c; font-weight:600;">
                                    नवनिर्मित इमारतीसाठी वास्तु सल्ला (Vastu for New Construction)
                                </h5>
                                <p style="margin:0; font-size:15px; color:#333;">
                                    नवीन घर किंवा इमारत बांधताना वास्तु शास्त्राच्या सिद्धांतांचा वापर करून इमारतीचा डिज़ाईन तयार केला जातो.
                                </p>
                            </span>


                            <span style="display:block; background:#f8f9fa; padding:20px; border-left:5px solid #b48b3c; border-radius:8px; box-shadow:0 4px 12px rgba(0,0,0,0.08); margin-bottom:20px; font-family:'Segoe UI', sans-serif; line-height:1.7;">
                                <h5 style="margin:0 0 8px 0; font-size:18px; color:#b48b3c; font-weight:600;">
                                    वास्तु शास्त्राचे उपाय (Vastu Remedies)
                                </h5>
                                <p style="margin:0; font-size:15px; color:#333;">
                                    घर किंवा कार्यालयातील वास्तु दोष कमी करण्यासाठी योग्य उपाय सुचवले जातात. यामध्ये वास्तु यंत्र, रुद्राक्ष, रत्न, पूजा विधी इत्यादींचा वापर केला जातो.
                                </p>
                            </span>


                            <span style="display:block; background:#f8f9fa; padding:20px; border-left:5px solid #b48b3c; border-radius:8px; box-shadow:0 4px 12px rgba(0,0,0,0.08); margin-bottom:20px; font-family:'Segoe UI', sans-serif; line-height:1.7;">
                                <h5 style="margin:0 0 8px 0; font-size:18px; color:#b48b3c; font-weight:600;">
                                    वास्तु पुनर्निर्माण (Vastu Reconstruction)
                                </h5>
                                <p style="margin:0; font-size:15px; color:#333;">
                                    काही वेळा घराच्या रचनेमध्ये अडचणी असू शकतात, ज्यामुळे त्या घराचा वास्तु दोष दूर करणे आवश्यक असते. वास्तु कन्सल्टंट त्या अडचणी दूर करण्यासाठी घराच्या रचनेमध्ये आवश्यक बदल सुचवतो.
                                </p>
                            </span>

                        </div>
                    </div>
                </div>

            </div>
        </div>


        <div class="content-section mt-5">
            <h2 class="section-title text-center mb-5"><i class="fas fa-scroll"></i> वास्तु कन्सल्टिंगचे फायदे <br></h2>
            </i>
            <div class="puja-steps-grid">

                <div class="step-card">
                    <div class="step-icon"><i class="fas fa-sun"></i></div>
                    <h3>सकारात्मक ऊर्जा निर्माण होते</h3>
                    <p>
                        योग्य वास्तु सल्ला घेतल्याने घरातील किंवा कार्यालयातील नकारात्मक ऊर्जा दूर होऊन सकारात्मक ऊर्जा प्रवेश करते.
                    </p>
                </div>

                <div class="step-card">
                    <div class="step-icon"><i class="fas fa-balance-scale"></i></div>
                    <h3>मानसिक शांती आणि संतुलन</h3>
                    <p>
                        घरातील प्रत्येक क्षेत्राची योग्य रचना केल्याने मानसिक शांती आणि संतुलन मिळते. यामुळे घरातील लोक अधिक शांत आणि आनंदी राहतात.
                    </p>
                </div>

                <div class="step-card">
                    <div class="step-icon"><i class="fas fa-coins"></i></div>
                    <h3>आर्थिक समृद्धी आणि यश</h3>
                    <p>
                        योग्य वास्तु शास्त्राचे पालन केल्यामुळे आर्थिक प्रगती, व्यवसायात यश आणि समृद्धी प्राप्त होऊ शकते.
                    </p>
                </div>

                <div class="step-card">
                    <div class="step-icon"><i class="fas fa-tools"></i></div>
                    <h3>सुधारणा सुचना</h3>
                    <p>
                        जर वास्तु दोष असेल तर त्याचे उपाय सुचवले जातात. यामध्ये मुख्य दरवाजाचे स्थान बदलणे, नवा रंग वापरणे, नवीन तंत्र यंत्रांचा वापर करणे, घरात विशेष पूजेचा आयोजन करणे, किंवा त्यात रुद्राक्ष, यंत्रे, रत्न किंवा व्रतांचे पालन करणे यासारख्या उपायांचा समावेश होतो.
                    </p>
                </div>

                <div class="step-card">
                    <div class="step-icon"><i class="fas fa-heartbeat"></i></div>
                    <h3>आरोग्य आणि भौतिक सुख</h3>
                    <p>
                        वास्तु शास्त्राच्या माध्यमातून घरातील उर्जा संतुलित होऊन लोकांचे शारीरिक आणि मानसिक आरोग्य सुधरते.
                    </p>
                </div>

                <div class="step-card">
                    <div class="step-icon"><i class="fas fa-home"></i></div>
                    <h3>कुटुंबामध्ये प्रेम आणि सौहार्द</h3>
                    <p>
                        घराच्या रचनेचे संतुलन आणि योग्य दिशा कुटुंबातील सदस्यांमधील प्रेम आणि सौहार्द वाढवते.
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
                            <h2 class="accent-title mb-4">वास्तु कन्सल्टिंगची प्रक्रिया</h2>

                            <div style="max-width:100%; overflow-x:auto; background:#ffffff; padding:30px; border-radius:12px; box-shadow:0 8px 25px rgba(0,0,0,0.08); margin:30px 0; font-family:'Segoe UI', sans-serif;">

                                <table style="width:100%; border-collapse:collapse; font-size:16px; line-height:1.8;">

                                    <tbody>

                                        <tr style="border-bottom:1px solid #e5e5e5;">
                                            <td style="width:25%; padding:18px; font-weight:600; color:#b48b3c; font-size:17px;">
                                                तपासणी:
                                            </td>
                                            <td style="padding:18px; color:#333;">
                                                आपल्या घराची किंवा कार्यालयाची स्थानिकता आणि संरचना तपासली जाते.
                                            </td>
                                        </tr>

                                        <tr style="border-bottom:1px solid #e5e5e5; background:#fafafa;">
                                            <td style="padding:18px; font-weight:600; color:#b48b3c; font-size:17px;">
                                                विश्लेषण:
                                            </td>
                                            <td style="padding:18px; color:#333;">
                                                घरातले वास्तु दोष आणि नकारात्मक ऊर्जा शोधली जाते.
                                            </td>
                                        </tr>

                                        <tr style="border-bottom:1px solid #e5e5e5;">
                                            <td style="padding:18px; font-weight:600; color:#b48b3c; font-size:17px;">
                                                उपाय सुचवणे:
                                            </td>
                                            <td style="padding:18px; color:#333;">
                                                योग्य उपाय आणि सुधारणा सुचवली जातात.
                                            </td>
                                        </tr>

                                        <tr style="background:#fafafa;">
                                            <td style="padding:18px; font-weight:600; color:#b48b3c; font-size:17px;">
                                                अंमलबजावणी:
                                            </td>
                                            <td style="padding:18px; color:#333;">
                                                सुचवलेले उपाय आणि सल्ले राबवले जातात.
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