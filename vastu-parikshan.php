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
                                <h1 class="pbmit-tbar-title">वास्तु परीक्षण</h1>
                            </div>
                        </div>
                        <div class="pbmit-breadcrumb">
                            <div class="pbmit-breadcrumb-inner">
                                <span><a title="" href="index.php" class="home"><span>Home</span></a></span>
                                <span class="sep">-</span>
                                <span><span class="post-root post post-post current-item">वास्तु परीक्षण</span></span>
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
                    <h3 class="pbmit-title">वास्तु परीक्षण म्हणजे काय?</h3><br>
                    <p>वास्तु परीक्षण म्हणजे घर, कार्यालय, इमारत, किंवा इतर वास्तूंच्या रचनेचे, त्या जागेच्या दिशेच्या आणि उर्जेच्या प्रवाहाचे विश्लेषण करणं. वास्तु शास्त्राच्या सिद्धांतांनुसार, प्रत्येक जागेची रचना, आकार, वासु दोष, आणि उर्जेचे प्रवाह त्या जागेत राहणाऱ्या लोकांच्या जीवनावर प्रभाव टाकतात. <br><br>
                        वास्तु परीक्षण प्रक्रिया इमारतीच्या किंवा जागेच्या संरचनेतील चुकांची ओळख करून त्यांचे निराकरण करण्यासाठी उपाय सुचवते. यामध्ये घराच्या किंवा इमारतीच्या प्रत्येक भागाचा, घरातील फर्निचर, दरवाजे, खिडक्या, इत्यादींचा तपास केला जातो. <br><br>
                        वास्तु परीक्षणाच्या माध्यमातून घर, कार्यालय, दुकान किंवा इतर जागेतील नकारात्मक उर्जा दूर करून सकारात्मक उर्जा निर्माण करण्यासाठी उपाय दिले जातात. या प्रक्रियेद्वारे घरातील वातावरणाची उर्जा योग्य आणि संतुलित केली जाते, ज्यामुळे त्या जागेतील लोकांचे जीवन सुखमय, शांत आणि समृद्ध होऊ शकते.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'book-now-marathi.php'; ?>

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
                        <h2 class="accent-title pbmit-title"><i class="fas fa-fire-alt"></i> वास्तु परीक्षणाची प्रक्रिया</h2>
                        <div class="vows-container">
                            <div class="element-tag">
                                <span class="tag-title">जागेचे स्थानिक सर्वेक्षण (Surveying the Land) : </span>
                                <span class="tag-desc">पहिल्या टप्प्यात, भूखंडाचे स्थानिक सर्वेक्षण केले जाते. यामध्ये भूखंडाच्या आकार, त्याची दिशा, वाऱ्याचा प्रवाह, सूर्याची दिशा, जलविज्ञान, नद्या, धरणे, आणि इतर भूगोलिक घटकांचा अभ्यास केला जातो. कन्सल्टंट जागेवर लक्ष केंद्रित करून त्या भूमीचे सर्व बाजू तपासतो.</span>
                            </div>

                            <div class="element-tag">
                                <span class="tag-title">दिशांचा अभ्यास आणि स्थानांचे विश्लेषण (Direction and Location Analysis) :</span>
                                <span class="tag-desc">वास्तु शास्त्रानुसार, प्रत्येक दिशा आणि त्याशी संबंधित ग्रह, देवता, आणि उर्जा आपल्यावर प्रभाव टाकतात. घरातील किंवा इमारतीच्या प्रत्येक दिशा (पूर्व, पश्चिम, उत्तर, दक्षिण) यांचा अभ्यास करून त्या दिशेतील सकारात्मक आणि नकारात्मक उर्जा ओळखली जाते..</span>
                                <span class="element-subpoints mantra-text">पूर्व दिशा: सूर्याचा प्रवेश, समृद्धी आणि आरोग्य.</span>
                                <span class="element-subpoints mantra-text">दक्षिण दिशा: स्थैर्य, सुरक्षा आणि उर्जा.</span>
                                <span class="element-subpoints mantra-text">उत्तर दिशा: व्यापारी यश आणि प्रगती.</span>
                                <span class="element-subpoints mantra-text">पश्चिम दिशा: चंद्राशी संबंधित आणि मानसिक शांतीसाठी.</span>
                            </div>

                            <div class="element-tag">
                                <span class="tag-title">वास्तु दोष तपासणी (Vastu Defect Analysis) :</span>
                                <span class="tag-desc">कन्सल्टंट त्या घरात किंवा इमारतीत असलेल्या वास्तु दोषांची ओळख करून त्याचे निराकरण करतो. काही सामान्य वास्तु दोष हे असू शकतात.</span>
                                <span class="element-subpoints mantra-text">जागेची रचना : घराची स्थिती चुकीच्या दिशेत असणे.</span>
                                <span class="element-subpoints mantra-text">वास्तु दोष: घरातील कचेरी, रुम किंवा वॉर्डरोब चुकीच्या ठिकाणी असणे.</span>
                                <span class="element-subpoints mantra-text">वायव्य कोपरा : घराच्या त्या क्षेत्रातील नकारात्मक उर्जा, जे दिशेतील दोष असू शकतात.</span>
                                <span class="element-subpoints mantra-text">अत्यंत लहान किंवा मोठा आकार: घराच्या संरचनेचा असंतुलित आकार.</span>
                            </div>

                            <div class="element-tag">
                                <span class="tag-title">उर्जा प्रवाह (Energy Flow) आणि संतुलन (Balance) :</span>
                                <span class="tag-desc">वास्तु शास्त्रात, उर्जा प्रवाहाची निगराणी महत्वाची आहे. घराच्या सर्व भागांमधून योग्य ऊर्जा प्रवाहित होण्यासाठी, दरवाजे, खिडक्या, आणि फर्निचरची योग्य स्थिती आवश्यक आहे. योग्य उर्जा प्रवाह घरातील लोकांच्या मानसिक स्थितीला उत्तेजन देतो आणि त्यांच्या शारीरिक आरोग्यालाही फायदेशीर ठरतो. त्याचप्रमाणे, प्रत्येक घटकाच्या आंतरिक रचनेला कसे योग्य स्थितीत ठेवता येईल, याचे देखील निरीक्षण केले जाते.</span>
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
                            <h3 class="accent-title pbmit-title"><i class="fas fa-fire-alt"></i> सुधारणा आणि उपाय (Remedies and Solutions)</h3>

                            <div class="vows-container">
                                <div class="element-tag">
                                    <span class="tag-title">वास्तु यंत्राचा वापर: यांत्रिक उपकरणे जसे की रुद्राक्ष, कुबेर यंत्र, हनुमान यंत्र यांचा वापर.</span>
                                </div>

                                <div class="element-tag">
                                    <span class="tag-title">फर्निचर: घरातील फर्निचर आणि इतर सजावटीसाठी वास्तुशास्त्राच्या दृष्टिकोनातून योग्य बदल सुचवणे.</span>
                                </div>

                                <div class="element-tag">
                                    <span class="tag-title">खिडक्या आणि दरवाजे: दरवाजाचे किंवा खिडक्यांचे स्थान बदलणे.</span>
                                </div>

                                <div class="element-tag">
                                    <span class="tag-title">रंग योजना: घरातील प्रत्येक भागासाठी योग्य रंग निवडणे. उदा. नकारात्मक उर्जेसाठी हलके रंग आणि सकारात्मक उर्जेसाठी ताजे रंग वापरणे..</span>
                                </div>

                                <h3 class="pbmit-title ">सकारात्मक वातावरण निर्माण करणे (Creating Positive Environment)</h3>
                                <div class="element-tag">
                                    <span class="tag-title">वास्तु दोषांचे निराकरण करून सकारात्मक वातावरण निर्माण करण्यासाठी घरात विशेष पूजा, मंत्र उच्चारण, आणि तंत्राचा वापर केला जातो. हे वातावरण मानसिक शांती, शारीरिक आरोग्य, आणि आध्यात्मिक उन्नतीसाठी महत्त्वाचे ठरते.</span>
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
                            <h2 class="pbmit-title ">वास्तु परीक्षणाचे फायदे</h2>

                            <h4 class="">सकारात्मक उर्जा वर्धन</h4>
                            <div class="samagri-container">
                                <span class="samagri-box">वास्तु शास्त्रानुसार, योग्य परीक्षणामुळे घरातील सकारात्मक उर्जा वाढते. यामुळे घरातील सदस्य आनंदी आणि संतुलित राहतात.</span>
                            </div> <br>

                            <h4 class="">व्यक्तिगत आणि व्यावसायिक यश</h4>
                            <div class="samagri-container">
                                <span class="samagri-box">घराची योग्य रचना आणि संतुलनामुळे व्यक्तिमत्व, कार्यक्षमता आणि व्यवसायातील यश मिळवता येते.</span>
                            </div> <br>

                            <h4 class="">आर्थिक समृद्धी</h4>
                            <div class="samagri-container">
                                <span class="samagri-box">योग्य वास्तु शास्त्राच्या पालनाने आर्थिक प्रगती होऊ शकते. त्यामुळे व्यावसायिक स्थैर्य आणि समृद्धी मिळवणे शक्य होते.</span>
                            </div> <br>

                            <h4 class="">सकारात्मक उर्जा वर्धन</h4>
                            <div class="samagri-container">
                                <span class="samagri-box">वास्तु शास्त्रानुसार, योग्य परीक्षणामुळे घरातील सकारात्मक उर्जा वाढते. यामुळे घरातील सदस्य आनंदी आणि संतुलित राहतात.</span>
                            </div> <br>

                            <h4 class="">आरोग्य आणि मानसिक शांती</h4>
                            <div class="samagri-container">
                                <span class="samagri-box">घरातील उर्जा प्रवाह योग्य ठेवला जातो, जे शारीरिक आरोग्यासाठी फायदेशीर असते. यामुळे मनोबल वाढते आणि मानसिक शांती मिळते.</span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="service-page-infobox">
                <div class="row align-items-center">

                    <div class="col-lg-6">

                        <div class="principle-content">
                            <h2 class="pbmit-title ">वास्तु परीक्षणामध्ये विचारले जाणारे मुद्दे</h2>

                            <h4 class="">वास्तु परीक्षण करतांना खालील मुद्द्यांचा विचार केला जातो:</h4>
                            <div class="samagri-container">
                                <span class="samagri-box">घराची दिशा आणि आकार.</span>
                            </div>

                            <div class="samagri-container">
                                <span class="samagri-box">घरातील प्रमुख कक्षेचे स्थान.</span>
                            </div>

                            <div class="samagri-container">
                                <span class="samagri-box">घरातील उर्जा प्रवाह आणि स्थान.</span>
                            </div>

                            <div class="samagri-container">
                                <span class="samagri-box">दरवाजे आणि खिडक्यांचे स्थान.</span>
                            </div>

                            <div class="samagri-container">
                                <span class="samagri-box">रंग योजना, फर्निचर आणि इतर घटकांचे स्थान.</span>
                            </div>

                            <div class="samagri-container">
                                <span class="samagri-box">आध्यात्मिक, शारीरिक, मानसिक व आर्थिक विकासासाठी आवश्यक उपाय.</span>
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
                <h2 class="section-title text-center mb-5"><i class="fas fa-fire"></i> वास्तु परीक्षणासाठी तज्ञाची निवड</h2>
                <div class="puja-steps-grid">

                    <div class="step-card">
                        <div class="step-icon"><i class="fas fa-bullseye"></i></div>
                        <h3>अनुभव:</h3>
                        <p>योग्य तज्ञ आणि अधिक अनुभव असलेल्या कन्सल्टंटची निवड करा.</p>
                    </div>

                    <div class="step-card">
                        <div class="step-icon"><i class="fas fa-bullseye"></i></div>
                        <h3>शिक्षण आणि प्रमाणपत्र:</h3>
                        <p>वास्तु शास्त्राच्या शास्त्रज्ञांकडून प्रमाणपत्र प्राप्त असावा..</p>
                    </div>

                    <div class="step-card">
                        <div class="step-icon"><i class="fas fa-bullseye"></i></div>
                        <h3>ग्राहक प्रतिक्रिया:</h3>
                        <p>तज्ञाचे कार्य आणि त्या तज्ञाने दिलेल्या सेवा बाबतचे फीडबॅक पहा.</p>
                    </div>

                    <div class="step-card">
                        <div class="step-icon"><i class="fas fa-bullseye"></i></div>
                        <h3>प्रामाणिक शुल्क:</h3>
                        <p>योग्य, वाजवी आणि प्रामाणिक शुल्कासाठी कन्सल्टंटची निवड करा.</p>
                    </div>
                </div>
            </div>

        </div>
        <div class="compact-section-wrapper mt-5">
            <div class="philosophy-card ritual-rules-card shadow-lg" style="border-radius: 20px; overflow: hidden;">
                <div class="philosophy-flex">

             

                

                </div>
            </div>
        </div>
</section>

<?php include 'footer.php'; ?>