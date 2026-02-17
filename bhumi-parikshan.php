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
                                <h1 class="pbmit-tbar-title">भूमि परिक्षण</h1>
                            </div>
                        </div>
                        <div class="pbmit-breadcrumb">
                            <div class="pbmit-breadcrumb-inner">
                                <span><a title="" href="index.php" class="home"><span>Home</span></a></span>
                                <span class="sep">-</span>
                                <span><span class="post-root post post-post current-item">भूमि परिक्षण</span></span>
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
            <!--					<li><a href="services-details.html">  Panchang VastuPuja </a></li>-->
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
                    <h3 class="pbmit-title">भूमि परिक्षण म्हणजे काय?</h3>
                    <p>भूमि परिक्षण, ही एक महत्त्वपूर्ण प्रक्रिया आहे. एखादी जमीन किंवा भूखंड विकत घेताना अथवा बांधकाम सुरू करण्यापूर्वी त्या जागेची ऊर्जा, दिशा, भौगोलिक स्थिती आणि आसपासचे वातावरण यांचा सखोल अभ्यास केला जातो. वास्तुशास्त्रानुसार या परीक्षणातून त्या भूमीतील सकारात्मक व नकारात्मक ऊर्जेची ओळख होते आणि भविष्यातील लाभ-हानीची शक्यता समजण्यास मदत मिळते. <br><br>
                        या प्रक्रियेत जमिनीचा आकार, उतार, मातीचा प्रकार, पाण्याचा स्रोत, रस्त्याची दिशा, आसपासची रचना आणि नैसर्गिक घटक यांचे निरीक्षण केले जाते. उत्तर-पूर्व (ईशान्य) दिशेची स्थिती, दक्षिण-पश्चिम भागाची उंची, तसेच सूर्यप्रकाश व वायुवीजन यांचा देखील विचार केला जातो. हे सर्व घटक एकत्रितपणे त्या जागेची ऊर्जा संतुलित आहे का, हे निश्चित करण्यास मदत करतात.<br><br>
                        योग्य भूमि परिक्षण केल्यास भविष्यातील वास्तु दोष टाळता येतात आणि आरोग्य, समृद्धी व मानसिक शांतता वाढीस लागते. घर, कार्यालय किंवा कोणतीही इमारत उभारताना मजबूत पाया आणि सकारात्मक ऊर्जा असलेली जमीन निवडणे अत्यंत आवश्यक असते. त्यामुळे भूमि परिक्षण ही केवळ परंपरा नसून, सुयोग्य आणि यशस्वी बांधकामासाठी एक शास्त्रीय व विचारपूर्वक केलेली प्रक्रिया मानली जाते.</p>
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
                        <img src="images/images/img09.jpeg" class="img-fluid main-ritual-img" alt="Vedic Ritual">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="principle-content">
                        <h2 class="pbmit-title ">भूमि परिक्षणाचे महत्त्व</h2>
                        <div class="samagri-container ritual-intro-text">
                            <p class="ritual-intro-text"> परिक्षणाची महत्त्वपूर्ण भूमिका आहे, कारण योग्य जागेचे विश्लेषण केल्याने घर, ऑफिस किंवा इतर इमारतीत सकारात्मक ऊर्जा प्रवाहित होते, जे जीवनाच्या सर्व क्षेत्रांत समृद्धी, सुख, शांती आणि यश मिळवण्यासाठी महत्त्वपूर्ण ठरते. यामुळे आपले शारीरिक, मानसिक आणि आर्थिक स्थिती सुधारू शकते.</p>
                        </div><br>
                        <h4 class="">भूमी परिक्षण हे खालील फायदे प्रदान करते:</h4>
                        <div class="samagri-container">
                            <span class="samagri-box">सकारात्मक ऊर्जा प्रवाहित होते</span>
                            <span class="samagri-box"> घरातील उर्जा संतुलित करणे.</span>
                            <span class="samagri-box">घर किंवा ऑफिसच्या बांधकामाच्या सुरुवातीस योग्य मार्गदर्शन.</span>
                            <span class="samagri-box"> वास्तु दोष टाळणे आणि ते दूर करणे.</span>
                            <span class="samagri-box">कोणत्याही नकारात्मक प्रभावापासून बचाव.</span>
                            <span class="samagri-box">मानसिक शांती आणि शारीरिक आरोग्य वृद्धिंगत करणे.</span>
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
                            <h2 class="accent-title pbmit-title"><i class="fas fa-fire-alt"></i> भूमि परिक्षणाच्या प्रक्रिया</h2>

                            <div class="ritual-intro-text">
                                <p>भूमि परिक्षणाची प्रक्रिया काही महत्त्वाच्या चरणांमध्ये केली जाते. या प्रक्रियेत खालील बाबींचा अभ्यास केला जातो:</p>
                            </div>

                            <div class="vows-container">
                                <div class="element-tag">
                                    <span class="tag-title">जागेचे स्थानिक सर्वेक्षण (Surveying the Land)</span>
                                    <span class="tag-desc">पहिल्या टप्प्यात, भूखंडाचे स्थानिक सर्वेक्षण केले जाते. यामध्ये भूखंडाच्या आकार, त्याची दिशा, वाऱ्याचा प्रवाह, सूर्याची दिशा, जलविज्ञान, नद्या, धरणे, आणि इतर भूगोलिक घटकांचा अभ्यास केला जातो. कन्सल्टंट जागेवर लक्ष केंद्रित करून त्या भूमीचे सर्व बाजू तपासतो.</span>
                                </div>

                                <div class="element-tag">
                                    <span class="tag-title">दिशांचा अभ्यास (Direction Analysis)</span>
                                    <span class="tag-desc">वास्तु शास्त्रानुसार, प्रत्येक दिशा आणि त्याच्याशी संबंधित ग्रह किंवा देवता त्यातल्या उर्जेवर प्रभाव टाकतात. यामध्ये उत्तर, दक्षिण, पूर्व आणि पश्चिम यांचा अभ्यास केला जातो. प्रत्येक दिशेची महत्त्वपूर्ण भूमिका असते, आणि कोणत्या दिशेचे महत्त्व जास्त आहे हे समजून घेतले जाते.
                                        <span class="element-subpoints mantra-text">पूर्व दिशा: सूर्याचा प्रवेश, समृद्धी आणि आरोग्य.</span>
                                        <span class="element-subpoints mantra-text">दक्षिण दिशा: स्थैर्य, सुरक्षा आणि उर्जा.</span>
                                        <span class="element-subpoints mantra-text">उत्तर दिशा: व्यापारी यश आणि प्रगती.</span>
                                        <span class="element-subpoints mantra-text">पश्चिम दिशा: चंद्राशी संबंधित आणि मानसिक शांतीसाठी.</span>
                                    </span>
                                </div>

                                <div class="element-tag">
                                    <span class="tag-title">जमिनीची उर्जा तपासणी (Energy Analysis)</span>
                                    <span class="tag-desc">भूमीच्या उर्जेचा तपासणी करणे अत्यंत महत्त्वाचे असते. जागेची उर्जा चांगली आहे का, ती सकारात्मक आहे की नकारात्मक, हे तपासले जाते. यासाठी इतर शास्त्रांचा वापर होतो, जसे की रेडिओमीटर (पारंपरिक यंत्र), लँडसेट इमेज किंवा इतर आधुनिक तंत्रांचा वापर केला जातो.</span>
                                </div>

                                <div class="element-tag">
                                    <span class="tag-title">वास्तु दोष विश्लेषण (Vastu Defects Analysis)</span>
                                    <span class="tag-desc">कधी कधी, जमीन किंवा भूखंडावर काही वास्तु दोष असू शकतात. हे दोष त्या स्थानाच्या बांधकामावर नकारात्मक प्रभाव टाकू शकतात. यामध्ये काही सामान्य दोष आहेत:</span>
                                    <span class="element-subpoints mantra-text">जागेची अप्रत्यक्ष दिशा.</span>
                                    <span class="element-subpoints mantra-text">जास्त तीव्र वारे किंवा सूर्यमालेचे अपूर्णता.</span>
                                    <span class="element-subpoints mantra-text">एका ठिकाणी अनेक नकारात्मक उर्जांचे केंद्र.</span>
                                    <span class="element-subpoints mantra-text">भूमीवर अनावश्यक वॉल किंवा संरचना.</span>
                                </div>
                                <div class="element-tag">
                                    <span class="tag-title">सकारात्मक ऊर्जा प्रवाह (Positive Energy Flow)</span>
                                    <span class="tag-desc">भूमीचा परिक्षण करून, सकारात्मक ऊर्जा प्रवाह सुनिश्चित करण्यासाठी योग्य उपाय सुचवले जातात. यामध्ये घराच्या बांधकामासाठी योग्य स्थानाची निवड, घरातील प्रत्येक विभागाचे योग्य स्थान निश्चित करणे यांचा समावेश आहे.</span>
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
                            <h2 class="pbmit-title ">भूमि परिक्षणाच्या टिप्स</h2>

                            <h4 class="">भूमी परिक्षण हे खालील फायदे प्रदान करते:</h4>
                            <div class="samagri-container">
                                <span class="samagri-box">ठिकाणाची पूर्व तयारी: <br> परिक्षण करण्याआधी जमीन पूर्णपणे स्वच्छ असावी.</span>
                                <span class="samagri-box"> नवीन जमीन खरेदी करताना: <br> वास्तु शास्त्रानुसार योग्य दिशा आणि आकार तपासा.</span>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content-section mt-5">
                <h2 class="section-title text-center mb-5"><i class="fas fa-fire"></i> यज्ञ विधीची प्रक्रिया आणि क्रम (Yagna Process)</h2>
                <div class="puja-steps-grid">

                    <div class="step-card">
                        <div class="step-icon"><i class="fas fa-bullseye"></i></div>
                        <h3>आपल्या कुंडलीशी संबंधित:</h3>
                        <p>भूमी परिक्षण करताना आपल्या जन्मकुंडलीचा अभ्यास करा, कारण कुंडलीतील ग्रह आणि रचना संबंधित जागेवर प्रभाव टाकू शकतात.</p>
                    </div>

                    <div class="step-card">
                        <div class="step-icon"><i class="fas fa-bullseye"></i></div>
                        <h3>भूमीची व्रतांशी संबंधित तपासणी:</h3>
                        <p>काही ठिकाणी जागेवर अनिष्ट शक्ती असू शकतात. त्यासाठी स्थानिक व्रत आणि उपास्य देवते तपासा.</p>
                    </div>
                </div>
            </div>

        </div>



        <div class="compact-section-wrapper">
            <div class="philosophy-card ritual-rules-card">
                <div class="philosophy-flex">

                    <div class="phi-content-col rules-bg">
                        <div class="content-padding">
                            <h2 class="mini-title"><i class="fas fa-seedling"></i> भूमीपूजन का करावे?</h2>
                            <ul class="ritual-list">
                                <li><i class="fas fa-check"></i> <strong>धरती मातेचा आशीर्वाद:</strong> नवीन कामाची सुरुवात करताना जमिनीचा सन्मान करणे आणि तिची अनुमती घेणे.</li>
                                <li><i class="fas fa-check"></i> <strong>वास्तुदोष निवारण:</strong> जागेतील नकारात्मक ऊर्जा दूर होऊन तिथे सात्विकता निर्माण होते.</li>
                                <li><i class="fas fa-check"></i> <strong>कामात निर्विघ्नता:</strong> बांधकामादरम्यान कोणतेही संकट येऊ नये आणि काम वेळेत पूर्ण व्हावे यासाठी प्रार्थना.</li>
                                <li><i class="fas fa-check"></i> <strong>सुख-समृद्धी:</strong> त्या वास्तूत राहणाऱ्या लोकांना दीर्घायुष्य, आरोग्य आणि धनसंपदा लाभते.</li>
                            </ul>
                            <br>
                            <h2 class="mini-title"><i class="fas fa-vihara"></i> शास्त्राधार</h2>
                            <ul class="ritual-list">
                                <li><i class="fas fa-check"></i> जमीन ही केवळ माती नसून ती 'अनंत' शक्तीचे केंद्र आहे.</li>
                                <li><i class="fas fa-check"></i> गृहनिर्माण करण्यापूर्वी भूमीचे पूजन करणे हे गृहस्थाचे परम कर्तव्य मानले जाते.</li>
                                <li><i class="fas fa-check"></i> पूजनामुळे वास्तू पुरुष प्रसन्न होतात आणि घराला 'घरपण' लाभते.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="phi-content-col meaning-bg">
                        <div class="content-padding">
                            <h2 class="mini-title"><i class="fas fa-map-marked-alt"></i> पूजनाचे मुख्य विधी</h2>

                            <div class="meaning-item">
                                <h4>गणपती व कलश पूजन</h4>
                                <p>कोणत्याही मंगल कार्याची सुरुवात विघ्नहर्ता गणपतीच्या आशीर्वादाने आणि वरुण देवाच्या (कलश) स्थापनेने होते.</p>
                            </div>

                            <div class="meaning-item">
                                <h4>भूमी शुद्धीकरण व षडकर्म</h4>
                                <p>मंत्रोच्चाराद्वारे जमिनीचे शुद्धीकरण करून तिथल्या अदृश्य शक्तींना तृप्त केले जाते.</p>
                            </div>

                            <div class="meaning-item">
                                <h4>वास्तुपुरुष व नाग पूजन</h4>
                                <p>वास्तू पुरुषाची प्रतिमा आणि चांदीचा नाग भूमीत अर्पण केला जातो, जेणेकरून वास्तूचा पाया मजबूत आणि सुरक्षित राहील.</p>
                            </div>

                            <div class="meaning-item">
                                <h4>शिलान्यास (पहिली वीट ठेवणे)</h4>
                                <p>शुभ मुहूर्तावर बांधकामाची पहिली वीट किंवा दगड ठेवून खऱ्या अर्थाने वास्तूची पायाभरणी केली जाते.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<?php include 'footer.php'; ?>