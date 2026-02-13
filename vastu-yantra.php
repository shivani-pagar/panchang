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

    .step-card img {
        width: 50%;
        height: 180px;
        object-fit: cover;
        border-radius: 10px;
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

    .content-section {
        padding: 60px 0;
        background-color: #fffaf5;
        /* हलका सात्विक बॅकग्राउंड */
    }

    /* Section Styling */
    .wedding-ritual-section {
        padding: 60px 20px;
        background: #fffaf5;
    }

    .wedding-section-title {
        font-size: 32px;
        font-weight: 700;
        color: #8b0000;
        position: relative;
    }

    .wedding-section-title i {
        color: #ff6f00;
    }

    /* Grid Layout */
    .wedding-steps-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
        gap: 30px;
        max-width: 1200px;
        margin: 0 auto;
    }

    /* Card Design */
    .wedding-step-card {
        background: #ffffff;
        padding: 30px 20px;
        border-radius: 15px;
        text-align: center;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .wedding-step-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
    }

    /* Image Styling */
    .wedding-step-icon {
        margin-bottom: 20px;
    }

    .wedding-yantra-img {
        width: 120px;
        height: 120px;
        object-fit: cover;
        border-radius: 50%;
        border: 4px solid #ff6f00;
        padding: 5px;
        background: #fff;
        transition: 0.3s;
    }

    .wedding-step-card:hover .wedding-yantra-img {
        transform: scale(1.08);
    }

    /* Card Title */
    .wedding-step-card h3 {
        font-size: 20px;
        color: #8b0000;
        margin-bottom: 15px;
        font-weight: 600;
    }

    /* Card Paragraph */
    .wedding-step-card p {
        font-size: 15px;
        color: #555;
        line-height: 1.6;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .wedding-section-title {
            font-size: 24px;
        }

        .wedding-step-card {
            padding: 20px 15px;
        }

        .wedding-yantra-img {
            width: 100px;
            height: 100px;
        }
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
                                <h1 class="pbmit-tbar-title">यंत्र आणि क्रिस्टल उपाय योजना</h1>
                            </div>
                        </div>
                        <div class="pbmit-breadcrumb">
                            <div class="pbmit-breadcrumb-inner">
                                <span><a title="" href="index.php" class="home"><span>Home</span></a></span>
                                <span class="sep">-</span>
                                <span><span class="post-root post post-post current-item">यंत्र आणि क्रिस्टल उपाय योजना</span></span>
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
                <div class="mantra-ribbon puja-initiation-theme">
                    <div class="mantra-icon-left"><i class="fas fa-gopuram"></i></div>
                    <div class="mantra-text-content">

                        <p class="sanskrit-shlok">
                            परीक्षितायां भुवि विघ्नराजं । समर्चयेच्चण्डिकया समेतम् ।
                            क्षेत्राधिपं चाष्टदिगीशदेवान् पुष्यैश्च धूपैर्बलिभि: सुखाय ॥
                        </p>
                        <div class="shlok-divider"></div>
                        <p class="shlok-meaning">
                            <strong>अर्थ:</strong> भूमी परीक्षणांनंतर गणपती, चंडिका माता, क्षेत्रपाल आणि अष्टदिक्पाल यांचे पूजन करावे. यामुळे वास्तूमध्ये कायमस्वरूपी सुख आणि शांती नांदते.
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
                                <h2 class="pbmit-title">यंत्र आणि क्रिस्टल उपाय योजना</h2>
                                <div class="samagri-container">
                                    <b>यंत्र (Yantra) आणि क्रिस्टल (Crystal) ही प्राचीन आध्यात्मिक साधने मानली जातात जी सूक्ष्म ऊर्जांवर कार्य करतात. यंत्र हे विशिष्ट भूमितीय आकृती आणि मंत्रशक्तीवर आधारित असते, ज्यामुळे ते विशिष्ट देवता किंवा ग्रहांच्या ऊर्जेला आकर्षित करून स्थिर करते. योग्य विधीने प्राणप्रतिष्ठा केलेले यंत्र घर, कार्यालय किंवा पूजास्थानी स्थापित केल्यास वातावरणातील नकारात्मकता कमी होऊन सकारात्मक ऊर्जा वाढते. <br><br>
                                        क्रिस्टल हे नैसर्गिक खनिज असून त्यामध्ये ऊर्जा शोषून घेण्याची, साठवण्याची आणि प्रसारित करण्याची क्षमता असते. उदाहरणार्थ, स्फटिक (Crystal Quartz) मन:शांतीसाठी, अॅमेथिस्ट मानसिक संतुलनासाठी, तर सिट्रीन आर्थिक प्रगतीसाठी उपयुक्त मानले जाते. योग्य क्रिस्टल योग्य ठिकाणी ठेवले किंवा धारण केले तर व्यक्तीच्या आभामंडलावर (Aura) सकारात्मक परिणाम होतो. <br>
                                    </b>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="image-wrapper">
                                <img src="images/images/vastu-yantra01.jpg" class="img-fluid main-ritual-img" alt="Vedic Ritual">
                            </div>
                        </div>
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
                        <img src="images/images/vastu-yantra02.jpg" class="img-fluid main-ritual-img" alt="Vedic Ritual">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="principle-content">
                        <h2 class="pbmit-title">यंत्र (Yantra) म्हणजे काय?</h2>
                        <div class="samagri-container">
                            <b>यंत्र म्हणजे एक विशिष्ट आकाराची किंवा संरचनेची धातू किंवा पत्राची चिठ्ठी जी उर्जेचे एक विशेष दृषटिकोनातून परिष्कृत रूप असते. यंत्राच्या रूपात देवतेच्या किंवा विशेष शक्तींच्या आकृतीचा संकलन असतो, ज्यामुळे त्या उर्जेच्या प्रभावांचा आपल्यावर सकारात्मक परिणाम होतो.</b>
                        </div><br>

                        <div class="element-tag">
                            <span class="tag-title">शक्तीचे प्रतीक:</span>
                            <span class="tag-desc">यंत्रे एक प्रकारे उच्च उर्जा साधने असतात, ज्यामुळे शक्तीचे प्रभाव आकर्षित केले जातात. यंत्राच्या दृषटिकोनातून देवता किंवा उच्च शक्ति आपल्याला आशीर्वाद देतात.</span>
                        </div>

                        <div class="element-tag">
                            <span class="tag-title">उपयोग:</span>
                            <span class="tag-desc">यंत्रांचा उपयोग विविध समस्यांवर उपाय म्हणून केला जातो, जसे की वाद-विवाद, आर्थिक समस्यांवर विजय मिळवणे, ग्रह दोष निवारण, आरोग्य समस्यांचे समाधान इत्यादी.</span>
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
                            <h2 class="pbmit-title"><i class="fas fa-fire-alt"></i>क्रिस्टल (Crystal) म्हणजे काय?</h2>

                            <div class="ritual-intro-text">
                                <p>क्रिस्टल हे नैसर्गिक खनिज असतात ज्यांचे विविध प्रकार असतात आणि त्यांचे प्रत्येक प्रकाराचे विशेष उर्जा प्रभाव असतो. प्रत्येक क्रिस्टल आपल्याला वेगवेगळ्या प्रकारच्या समस्यांचे निवारण करण्यास मदत करतो. क्रिस्टलशास्त्र किंवा *क्रिस्टल हिलिंग* हे एक पुरातन शास्त्र आहे, जे शरीराच्या उर्जा सेंटर्स (चक्र) वर क्रिस्टलचे उपचारात्मक प्रभाव टाकते.</p>
                            </div>

                            <div class="vows-container">
                                <div class="element-tag">
                                    <span class="tag-title">प्रकार:</span>
                                    क्रिस्टल विविध प्रकारांमध्ये उपलब्ध असतात, जसे की आमथिस्ट, रोझ क्वार्ट्ज, सिट्रीन, टाईगर आय, पृथ्वी क्रिस्टल, इत्यादी.</span>
                                </div>

                                <div class="element-tag">
                                    <span class="tag-title">उपयोग:</span>
                                    <span class="tag-desc">क्रिस्टल्सचा उपयोग मानसिक शांती, शारीरिक आरोग्य सुधारण्यासाठी, नकारात्मक उर्जा दूर करण्यासाठी, आणि आकर्षक आकर्षण निर्माण करण्यासाठी केला जातो.</span>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="ritual-image-frame">
                            <img src="images/images/vastu-yantra03.jpg" class="img-fluid rounded-custom shadow-lg" alt="यज्ञाची प्रमुख अंगे">
                            <div class="frame-decoration"></div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>

    <div class="container">



        <div class="service-page-infobox">
            <div class="row align-items-center">

                <div class="col-lg-6">
                    <div class="image-wrapper">
                        <img src="images/images/vastu-yojna04.jpg" class="img-fluid main-ritual-img" alt="Vedic Ritual">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="principle-content">
                        <h2 class="pbmit-title">वास्तु योजना डिझाइनिंग मध्ये वापरण्याचे उपाय</h2>
                        <div class="samagri-container">
                        </div><br>
                        <div class="vows-container">
                            <div class="element-tag">
                                <span class="tag-title">वास्तु यंत्रांचा वापर::</span>
                                <span class="tag-desc">वास्तु यंत्रे जसे की “वास्तु पिरामिड” आणि “वास्तु द्रव्य” घराच्या प्रत्येक कोपऱ्यात ठेवले जातात, ज्यामुळे नकारात्मक उर्जा दूर केली जाते. यामुळे घरातील उर्जा संतुलित होते.</span>
                            </div>
                            <div class="element-tag">
                                <span class="tag-title">ग्रह शांती उपाय:</span>
                                <span class="tag-desc">काही वेळा ग्रह दोष आणि उर्जा असंतुलन दूर करण्यासाठी ग्रह शांती उपाय केले जातात. यामध्ये विशेष पूजा, हवन, आणि रत्न धारण करण्याचे उपाय सुचवले जातात.</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="wedding-ritual-section mt-5">

                <h2 class="wedding-section-title text-center mb-5">
                    <i class="fas fa-fire me-2"></i> यंत्रांचे महत्त्व
                </h2>

                <div class="wedding-steps-grid">

                    <!-- Card 1 -->
                    <div class="wedding-step-card">
                        <div class="wedding-step-icon">
                            <img src="images/images/vastu-yantra04.jpeg" alt="श्री यंत्र" class="wedding-yantra-img">
                        </div>
                        <h3>श्री यंत्र</h3>
                        <p>
                            सर्वश्रेष्ठ यंत्रांपैकी एक श्री यंत्र देवी लक्ष्मीची कृपा प्राप्त करण्यासाठी
                            आणि धनधान्याची वृद्धी करण्यासाठी अत्यंत प्रभावी मानले जाते.
                        </p>
                    </div>

                    <!-- Card 2 -->
                    <div class="wedding-step-card">
                        <div class="wedding-step-icon">
                            <img src="images/images/vastu-yantra05.webp" alt="आर्थिक समृद्धी यंत्र" class="wedding-yantra-img">
                        </div>
                        <h3>आर्थिक समृद्धी</h3>
                        <p>
                            सकारात्मक ऊर्जा घरात प्रवेश केल्यामुळे आर्थिक समृद्धी आणि सुखप्राप्ती
                            वाढते. व्यवसायात स्थैर्य आणि यश मिळवण्यासाठी हे उपयुक्त ठरते.
                        </p>
                    </div>

                    <!-- Card 3 -->
                    <div class="wedding-step-card">
                        <div class="wedding-step-icon">
                            <img src="images/images/vastu-yantra06.jpg" alt="सकारात्मक प्रभाव" class="wedding-yantra-img">
                        </div>
                        <h3>व्यक्तिमत्वावर सकारात्मक प्रभाव</h3>
                        <p>
                            घरातील सकारात्मक ऊर्जा व्यक्तिमत्वावर चांगला प्रभाव टाकते,
                            ज्यामुळे आत्मविश्वास, स्थैर्य आणि सकारात्मकता वाढते.
                        </p>
                    </div>

                    <!-- Card 4 -->
                    <div class="wedding-step-card">
                        <div class="wedding-step-icon">
                            <img src="images/images/vastu-yantra07.jpg" alt="सुख-शांती" class="wedding-yantra-img">
                        </div>
                        <h3>संपूर्ण जीवनात सुख-शांती</h3>
                        <p>
                            योग्य वास्तु योजना आणि यंत्र स्थापनेमुळे घरात शांती, सौहार्द
                            आणि आनंदाचे वातावरण निर्माण होते.
                        </p>
                    </div>

                </div>

            </div>


            <div class="wedding-ritual-section mt-5">

                <h2 class="wedding-section-title text-center mb-5">
                    <i class="fas fa-gem me-2"></i> क्रिस्टल्सचे महत्व
                </h2>

                <div class="wedding-steps-grid">

                    <!-- Card 1 -->
                    <div class="wedding-step-card">
                        <div class="wedding-step-icon">
                            <img src="images/images/vastu-yantra08.jpg" alt="ॲमॅथिस्ट क्रिस्टल" class="wedding-yantra-img">
                        </div>
                        <h3>ॲमॅथिस्ट क्रिस्टल</h3>
                        <p>
                            ॲमॅथिस्ट क्रिस्टल मानसिक शांती आणि संतुलन साधण्यासाठी उपयोगी आहे.
                            त्याच्या मदतीने चिंता, तणाव आणि गोंधळ दूर केला जातो.
                        </p>
                    </div>

                    <!-- Card 2 -->
                    <div class="wedding-step-card">
                        <div class="wedding-step-icon">
                            <img src="images/images/vastu-yantra09.jpg" alt="रोझ क्वार्ट्ज क्रिस्टल" class="wedding-yantra-img">
                        </div>
                        <h3>रोझ क्वार्ट्ज क्रिस्टल</h3>
                        <p>
                            प्रेम आणि मैत्री वाढवण्यासाठी रोझ क्वार्ट्ज क्रिस्टल अत्यंत प्रभावी आहे.
                            तो नकारात्मक उर्जा नष्ट करून प्रेम व शांतता निर्माण करतो.
                        </p>
                    </div>

                    <!-- Card 3 -->
                    <div class="wedding-step-card">
                        <div class="wedding-step-icon">
                            <img src="images/images/vastu-yantra10.jpg" alt="सिट्रीन क्रिस्टल" class="wedding-yantra-img">
                        </div>
                        <h3>सिट्रीन क्रिस्टल</h3>
                        <p>
                            सिट्रीन क्रिस्टल आर्थिक समृद्धी, खुशी आणि आत्मविश्वास वाढवण्यास मदत करते.
                            तो एखाद्या व्यक्तीच्या कामामध्ये यश मिळवण्यासाठी उपयोगी आहे.
                        </p>
                    </div>

                    <!-- Card 4 -->
                    <div class="wedding-step-card">
                        <div class="wedding-step-icon">
                            <img src="images/images/vastu-yantra11.jpg" alt="टाईगर आय क्रिस्टल" class="wedding-yantra-img">
                        </div>
                        <h3>टाईगर आय क्रिस्टल</h3>
                        <p>
                            टाईगर आय क्रिस्टल मानसिक स्थिरता, निर्णय क्षमतेतील सुधारणा
                            आणि आत्मविश्वासासाठी अत्यंत प्रभावी आहे.
                        </p>
                    </div>

                    <!-- Card 5 -->
                    <div class="wedding-step-card">
                        <div class="wedding-step-icon">
                            <img src="images/images/vastu-yantra12.jpg" alt="हॅलाइट क्रिस्टल" class="wedding-yantra-img">
                        </div>
                        <h3>हॅलाइट क्रिस्टल</h3>
                        <p>
                            हॅलाइट क्रिस्टल नकारात्मक उर्जा नष्ट करून सकारात्मक उर्जा संचारित करतो.
                            याचा उपयोग मानसिक आणि शारीरिक आरोग्य सुधारण्यासाठी केला जातो.
                        </p>
                    </div>

                </div>

            </div>


            <section class="ritual-elements-section">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-lg-6">
                            <div class="ritual-info-group">
                                <h2 class="pbmit-title"><i class="fas fa-fire-alt"></i>यंत्र आणि क्रिस्टलचा एकत्रित उपयोग:</h2>

                                <div class="ritual-intro-text">
                                    <p>यंत्र आणि क्रिस्टल यांचा एकत्रित उपयोग करून एक पद्धत तयार केली जाते, ज्यामुळे एखादी व्यक्ती आपल्या जीवनातील नकारात्मक उर्जा दूर करून सकारात्मक उर्जा आकर्षित करू शकते. यंत्र आणि क्रिस्टल हे एकमेकांसोबत एकत्रित कार्य करतात. यंत्रे देवतेच्या किंवा ग्रहांच्या शक्तीला आकर्षित करतात, आणि क्रिस्टल त्या उर्जेला धारण करून त्याच्या प्रभावाने व्यक्तीच्या जीवनात सकारात्मक बदल घडवतात.</p>
                                </div>

                                <div class="vows-container">
                                    <div class="element-tag">
                                        <span class="tag-title">प्राथमिक उपाय:</span>
                                        यंत्र आणि क्रिस्टल एकत्र ठेवून, त्वरित उपाय योजले जाऊ शकतात. उदाहरणार्थ, “श्री यंत्र” व “आमथिस्ट क्रिस्टल” एकत्र ठेवून मानसिक आणि आर्थिक शांती मिळवता येते.</span>
                                    </div>

                                    <div class="element-tag">
                                        <span class="tag-title">प्राथमिक उपाय:</span>
                                        <span class="tag-desc">यंत्र आणि क्रिस्टल एकत्र ठेवून, त्वरित उपाय योजले जाऊ शकतात. उदाहरणार्थ, “श्री यंत्र” व “आमथिस्ट क्रिस्टल” एकत्र ठेवून मानसिक आणि आर्थिक शांती मिळवता येते.</span>
                                    </div>

                                    <div class="element-tag">
                                        <span class="tag-title">विशेष उपाय:</span>
                                        <span class="tag-desc">यंत्र आणि क्रिस्टल वापरण्याच्या वेळी त्यांचा नियमित धूप, फुलांच्या पूजा, आणि ध्यान प्रक्रियेद्वारे अधिक प्रभावी बनवता येतो. यामुळे उर्जा प्रवाह उत्तम प्रकारे संतुलित होतो.</span>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="ritual-image-frame">
                                <img src="images/images/vastu-yantra13.jpg" class="img-fluid rounded-custom shadow-lg" alt="यज्ञाची प्रमुख अंगे">
                                <div class="frame-decoration"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <div class="wedding-ritual-section mt-5">
                <h2 class="wedding-section-title text-center mb-5">
                    <i class="fas fa-fire"></i> यंत्र आणि क्रिस्टल उपाय योजनेचे फायदे
                </h2>

                <div class="wedding-steps-grid">

                    <div class="wedding-step-card">
                        <div class="wedding-step-icon">
                            <i class="fas fa-star fa-3x" style="color:#ff6f00;"></i>
                        </div>
                        <h3>सकारात्मक उर्जा आकर्षित होणे</h3>
                        <p>
                            यंत्र आणि क्रिस्टल यांचा एकत्रित उपयोग घर आणि कार्यालयाच्या वातावरणात
                            सकारात्मक उर्जा आकर्षित करण्यास मदत करतो.
                        </p>
                    </div>

                    <div class="wedding-step-card">
                        <div class="wedding-step-icon">
                            <i class="fas fa-globe fa-3x" style="color:#ff6f00;"></i>
                        </div>
                        <h3>ग्रह दोष निवारण</h3>
                        <p>
                            ज्योतिष शास्त्रानुसार, यंत्र आणि क्रिस्टल वापरून ग्रह दोष कमी केले जातात.
                            विशेषतः राहू, केतू आणि शनी यांचे नकारात्मक प्रभाव कमी होतात.
                        </p>
                    </div>

                    <div class="wedding-step-card">
                        <div class="wedding-step-icon">
                            <i class="fas fa-heartbeat fa-3x" style="color:#ff6f00;"></i>
                        </div>
                        <h3>आरोग्य सुधारणे</h3>
                        <p>
                            क्रिस्टल्स आणि यंत्रांचा उपयोग मानसिक, शारीरिक आणि आत्मिक
                            आरोग्य सुधारण्यासाठी केला जातो.
                        </p>
                    </div>

                    <div class="wedding-step-card">
                        <div class="wedding-step-icon">
                            <i class="fas fa-coins fa-3x" style="color:#ff6f00;"></i>
                        </div>
                        <h3>आर्थिक समृद्धी</h3>
                        <p>
                            विशेष यंत्रांद्वारे आर्थिक समस्यांवर विजय मिळवता येतो.
                            यंत्र आणि क्रिस्टल्सचे उपाय धन आणि समृद्धी प्राप्त करण्यात मदत करतात.
                        </p>
                    </div>

                    <div class="wedding-step-card">
                        <div class="wedding-step-icon">
                            <i class="fas fa-handshake fa-3x" style="color:#ff6f00;"></i>
                        </div>
                        <h3>विवाद निवारण</h3>
                        <p>
                            यंत्र आणि क्रिस्टल वापरून घरातील किंवा कार्यालयातील वाद-प्रतिवाद कमी करता येतात.
                            ते वातावरणात शांतता आणि समृद्धी आणतात.
                        </p>
                    </div>

                </div>
            </div>



            <div class="phi-content-col meaning-bg">
                <div class="content-padding">
                    <h2 class="mini-title"><i class="fas fa-lightbulb"></i> निष्कर्ष</h2>
                    <div class="meaning-item d-flex justify-content-center">

                        <p>यंत्र आणि क्रिस्टल उपाय योजना ह्या दोन्ही शक्तिशाली साधनांचा उपयोग करून व्यक्तीचे जीवन सुधारले जाऊ शकते. यंत्र आपल्याला ग्रह दोष निवारण, आर्थिक समृद्धी आणि मानसिक शांती देतात, तर क्रिस्टल शरीर आणि मनाच्या आरोग्यावर सकारात्मक परिणाम करतात. दोन्ही साधनांचा संयुक्त उपयोग केल्यास व्यक्तीच्या जीवनात स्थिरता, समृद्धी, आणि यश मिळवता येते.</p>
                    </div>

                </div>
            </div>

        </div>
    </div>
    </div>

</section>

<?php include 'footer.php'; ?>