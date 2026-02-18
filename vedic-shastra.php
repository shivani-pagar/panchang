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
                                <h1 class="pbmit-tbar-title">वैदिक शास्त्र</h1>
                            </div>
                        </div>
                        <div class="pbmit-breadcrumb">
                            <div class="pbmit-breadcrumb-inner">
                                <span><a title="" href="index.php" class="home"><span>Home</span></a></span>
                                <span class="sep">-</span>
                                <span><span class="post-root post post-post current-item">वैदिक शास्त्र</span></span>
                            </div>
                        </div>
                    </div>
                </div>

                <?php include 'sachin_guruji_marathi.php'; ?>


            </div>
            <?php include 'inner-form-marathi.php'; ?>
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
                    <h3 class="pbmit-title">वैदिक शास्त्राची सविस्तर माहिती :</h3>
                    <p>
                        वैदिक शास्त्र हे केवळ धार्मिक कर्मकांड नसून ते मानवी जीवनाचा सर्वांगीण विकास साधणारे एक प्राचीन आणि प्रगल्भ विज्ञान आहे. यामध्ये प्रामुख्याने वेद, उपनिषदे आणि षड्दर्शनांचा समावेश होतो, जे सृष्टीची निर्मिती, निसर्गाचे नियम आणि मानवी अस्तित्वाचा उद्देश स्पष्ट करतात. हे शास्त्र केवळ अध्यात्मावर न थांबता आयुर्वेद (आरोग्य), खगोलशास्त्र (ज्योतिष), वास्तुशास्त्र (स्थापत्य) आणि योगशास्त्र यांसारख्या व्यावहारिक विषयांचेही सखोल मार्गदर्शन करते. <br><br>
                        या शास्त्राचा मुख्य गाभा म्हणजे निसर्गाशी सुसंगत जीवन जगणे आणि आपल्या अंतर्मनातील शक्तीला ओळखणे होय. 'यथा ब्रह्माण्डे तथा पिण्डे' या सिद्धांतानुसार, जे संपूर्ण विश्वात आहे तेच आपल्या शरीरात आहे, हे वैदिक शास्त्र आपल्याला पटवून देते. मंत्रोच्चार, ध्यान आणि यज्ञ यांसारख्या माध्यमांतून वातावरणातील नकारात्मकता दूर करून सकारात्मक ऊर्जा मिळवणे, हा या शास्त्राचा महत्त्वाचा भाग आहे. थोडक्यात सांगायचे तर, वैदिक शास्त्र म्हणजे भौतिक प्रगती आणि आत्मिक शांती यांचा समतोल साधणारी एक समृद्ध जीवनपद्धती आहे.</p>
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
                        <img src="images/images/vaidik-shastra02.webp" class="img-fluid main-ritual-img" alt="Vedic Ritual">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="principle-content">
                        <h1 class="pbmit-title">वेदांची रचना</h1>
                        <div class="samagri-container">
                            <h3>चार प्रमुख वेद आहेत:</h3>
                        </div>
                        <div class="samagri-container">
                            <span class="samagri-box"> ऋग्वेद — विविध देवतांवर स्तुती आणि मंत्र, उदा. अग्नि, इंद्र, वरुण.</span>
                            <span class="samagri-box">यजुर्वेद — यज्ञ व विधींसाठी लागणाऱ्या प्रक्रिया व मंत्र.</span>
                            <span class="samagri-box"> सामवेद — ऋग्वेदातील मंत्रांवर आधारित गेय (गाण्याचे) मंत्र.</span>
                            <span class="samagri-box"> अथर्ववेद — टोटके, उपासना, जडीबुटी ज्ञान, लोकाचार.</span>
                        </div>

                        <br>

                        <div class="samagri-container">
                            <h3>प्रत्येक वेदाचे चार भाग असतात:</h3>
                        </div>
                        <div class="samagri-container">
                            <span class="samagri-box">ब्राह्मण: विधी आणि समारंभांचे स्पष्टीकरण.</span>
                            <span class="samagri-box"> आरण्यक: अरण्यातील साधकांसाठी ध्यान व चिंतनशील मजकूर.</span>
                            <span class="samagri-box"> संहिता: मंत्रसंग्रह.</span><br>
                            <span class="samagri-box"> उपनिषद: तत्त्वज्ञान, आत्मा, ब्रह्म, मोक्ष या विषयांवर सखोल विचार.</span>

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
                            <h2 class=""><i class="fas fa-fire-alt"></i> वैदिक शास्त्राचे तत्त्वज्ञान</h2>

                            <div class="ritual-intro-text">
                                <p>सुरुवातीला विधीप्रधान असलेल्या वेदांमध्ये उपनिषदांमध्ये पुढे सखोल तत्त्वज्ञान विकसित झाले:</p>
                            </div>

                            <div class="samagri-container">
                                <span class="samagri-box">ब्रह्म:जिथे पवित्र अग्नी प्रज्वलित केला जातो </span>
                                <span class="samagri-box"> आत्मा:गार्हपत्य, आहवनीय आणि दक्षिणाग्नि हे तीन मुख्य प्रकार.</span>
                                <span class="samagri-box"> मोक्ष:साजूक तूप, समिधा, धान्य आणि औषधी वनस्पतींचे अर्पण.</span><br>
                                <span class="samagri-box"> कर्म : ऋग्वेद, यजुर्वेद आणि सामवेदातील पवित्र मंत्रांचे पठण.</span>
                                <div class="ritual-intro-text">
                                    <p>या तत्त्वज्ञानाने वेदान्त, सांख्य, योग, मीमांसा अशा पुढील तत्त्वशास्त्राला दिशा दिली.</p>
                                </div>
                            </div>

                            <h2 class=""><i class="fas fa-fire-alt"></i> परंपरा व जतन:</h2>
                            <div class="samagri-container">
                                <span class="samagri-box">वैदिक शास्त्र श्रुती (ऐकलेली गोष्ट) म्हणून पिढ्यानपिढ्या गुरूंनी शिष्यांना तोंडी शिकवले.</span>
                                <span class="samagri-box"> विविध शाखा (शाखा) निर्माण झाल्या, प्रत्येकाची स्वतःची आवृत्ती जतन केली गेली..</span>
                                <span class="samagri-box"> हे ग्रंथ नंतर लिखित स्वरूपात आले, पण आजही मौखिक परंपरेला श्रेष्ठ मानले जाते.</span><br>
                            </div> <br>


                             <h2 class=""><i class="fas fa-fire-alt"></i> आजचे महत्त्व</h2>

                            <div class="ritual-intro-text">
                                <p>आजही वैदिक शास्त्राचा प्रभाव आहे:</p>
                            </div>

                            <div class="samagri-container">
                                <span class="samagri-box">धार्मिक विधी व उपासना पद्धतींमध्ये.</span>
                                <span class="samagri-box"> संस्कृत भाषा आणि पारंपरिक ज्ञानशाखा (आयुर्वेद, ज्योतिष, शिल्पशास्त्र) मध्ये.</span>
                                <span class="samagri-box"> नैतिक मूल्ये, सामाजिक कर्तव्ये, आणि अध्यात्मिक जीवनमार्ग ठरवताना.</span><br>
                              
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
                <i class="fas fa-fire"></i> वैदिक शास्त्राचे मुख्य तत्त्व
            </h2>

            <div class="wedding-steps-grid">

                <div class="wedding-step-card">
                    <div class="wedding-step-icon"><i class="fas fa-bullseye"></i></div>
                    <h3>धर्म (कर्तव्य):</h3>
                    <p>वैदिक शिकवणीत वैयक्तिक व सामाजिक कर्तव्यांचे मार्गदर्शन दिले जाते.</p>
                </div>

                <div class="wedding-step-card">
                    <div class="wedding-step-icon"><i class="fas fa-igniting"></i></div>
                    <h3>ऋत (सृष्टीचा समतोल):</h3>
                    <p>विधी व नैतिक जीवनाने विश्वसमतोल राखणे..</p>
                </div>

                <div class="wedding-step-card">
                    <div class="wedding-step-icon"><i class="fas fa-vihara"></i></div>
                    <h3>यज्ञ (होम, बलिदान):</h3>
                    <p>देव आणि माणसामधील नाते मजबूत करणारे विधी.</p>
                </div>

                <div class="wedding-step-card">
                    <div class="wedding-step-icon"><i class="fas fa-mortar-pestle"></i></div>
                    <h3>मंत्र व ध्वनीची शक्ती: </h3>
                    <p>मंत्रांचे शुद्ध उच्चारण हे शक्तिशाली व परिवर्तनशील मानले जाते.</p>
                </div>

                <div class="wedding-step-card">
                    <div class="wedding-step-icon"><i class="fas fa-dove"></i></div>
                    <h3>शांतिपाठ</h3>
                    <p>अग्नि, वायु, सूर्य, नद्यांमध्ये दैवी शक्ती मानली जाते.</p>
                </div>

            </div>
        </div>




        <div class="compact-section-wrapper">
            <div class="philosophy-card ritual-rules-card">
                <div class="philosophy-flex">

                    <div class="phi-content-col rules-bg">
                        <div class="content-padding">
                            <h2 class="mini-title"><i class="fas fa-hand-holding-water"></i>यज्ञाचे फायदे (वैदिक दृष्टीने)</h2>
                            <ul class="ritual-list">
                                <li><i class="fas fa-check"></i> आध्यात्मिक प्रगती व मोक्षमार्ग.</li>
                                <li><i class="fas fa-check"></i> वातावरणातील दूषितता नष्ट होते.</li>
                                <li><i class="fas fa-check"></i>सजीवांच्या कल्याणासाठी ऊर्जेचे प्रक्षेपण.</li>
                                <li><i class="fas fa-check"></i> मानसिक, शारीरिक स्वास्थ्याची वृद्धी.</li>
                                <li><i class="fas fa-check"></i> कर्मशुद्धी व ऋणमोचन.</li>
                            </ul><br>
                            <h2 class="mini-title"><i class="fas fa-hand-holding-water"></i>वैदिक महत्त्व</h2>
                            <ul class="ritual-list">
                                <li><i class="fas fa-check"></i>यज्ञो वै श्रेष्ठतमं कर्म — यज्ञ हे श्रेष्ठ कर्म आहे (भगवद्गीता ४.२३).</li>
                                <li><i class="fas fa-check"></i> यज्ञाशिवाय देवता संतुष्ट होत नाहीत.</li>
                                <li><i class="fas fa-check"></i>यज्ञातूनच वर्षा, अन्नवृद्धी, सृष्टीचक्र चालते (गीता ३.१४).</li>
                            </ul>
                        </div>
                    </div>

                    <div class="phi-content-col meaning-bg">
                        <div class="content-padding">
                            <h2 class="mini-title"><i class="fas fa-lightbulb"></i> यज्ञांचे प्रकार (वैदिक काळातील)</h2>
                            <div class="meaning-item">
                                <h4>नित्य यज्ञ—</h4>
                                <p>दररोज करायचे यज्ञ (अग्निहोत्र, दर्शपौर्णमास, आग्रयण).</p>
                            </div>
                            <div class="meaning-item">
                                <h4>काम्य यज्ञ —</h4>
                                <p>विशिष्ट फलासाठी (पुत्रकामेष्ठी, सर्वकामेष्टी, राजसूय, अश्वमेध).</p>
                            </div>
                            <div class="meaning-item">
                                <h4>प्रायश्चित्त यज्ञ —</h4>
                                <p>पापपरिहारासाठी.</p>
                            </div>
                            <div class="meaning-item">
                                <h4>सामाजिक यज्ञ —</h4>
                                <p>जनकल्याणासाठी (सार्वजनिक सत्यनारायण यज्ञ, रुद्रयज्ञ, दुर्गायज्ञ).</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

</section>

<?php include 'footer.php'; ?>