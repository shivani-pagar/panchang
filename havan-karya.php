<style>
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
                                <h1 class="pbmit-tbar-title">हवन कार्य</h1>
                            </div>
                        </div>
                        <div class="pbmit-breadcrumb">
                            <div class="pbmit-breadcrumb-inner">
                                <span><a title="" href="index.php" class="home"><span>Home</span></a></span>
                                <span class="sep">-</span>
                                <span><span class="post-root post post-post current-item">हवन कार्य</span></span>
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
                <div class="mantra-ribbon">
                    <div class="mantra-icon-left"><i class="fas fa-om"></i></div>
                    <div class="mantra-text-content">
                        <p class="sanskrit-shlok">
                            ॐ अग्निमीळे पुरोहितं यज्ञस्य देवमृत्विजम् । होतारं रत्नधातमम्"
                        </p>
                        <p class="shlok-meaning">
                            <strong>अर्थ:</strong> यज्ञाचे मार्गदर्शक, दिव्य प्रकाशमय आणि रत्नांना धारण करणाऱ्या अग्नी देवतेची मी स्तुती करतो.
                        </p>
                    </div>
                    <div class="mantra-icon-right"><i class="fas fa-om"></i></div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6  order-1">
                <img src="images/images/pujavidhi01.jpg" class="w-100" alt="">

            </div>
            <div class="col-md-6 col-lg-6">
                <div class="service-details">
                    <h3 class="pbmit-title">हवन (होम) कार्य म्हणजे काय?</h3>
                    <p>हवन हा वैदिक संस्कारांमधील महत्त्वाचा विधी आहे, ज्यामध्ये अग्निदेवतेसमोर आहुती अर्पण केली जाते. यामध्ये विशिष्ट मंत्र, आहुती व पवित्र अग्नीचा वापर केला जातो. हवन केल्याने वातावरण शुद्ध होते, नकारात्मक ऊर्जा निघून जाते, आणि मानसिक व आध्यात्मिक शांती प्राप्त होते.</p>
                </div>
                <div class="service-details">
                    <h3 class="pbmit-title">हवन कार्याची वैदिक पार्श्वभूमी</h3>
                    <p>‘यज्ञ’ हा व्यापक अर्थ आहे; हवन हा यज्ञाचा मुख्य भाग आहे.</p>
                    <p>ऋग्वेद, यजुर्वेद, सामवेद यामध्ये अग्निचा महिमा वर्णन केला आहे.</p>
                    <p>अग्निहोत्र, पुष्पहोम, लक्षचंडी होम, नवचंडी होम, महालक्ष्मी होम, संपुटित पाठात्मक होम यांसारख्या विविध हवन प्रकारांमध्ये विशिष्ट देवतेसाठी आहुती दिली जाते.</p>
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
                        <img src="images/images/pujavidhi02.jpeg" class="img-fluid main-ritual-img" alt="Vedic Ritual">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="principle-content">
                        <h2 class="accent-title">हवनाची मुख्य उद्दिष्टे</h2>
                        <p>हवनाचे मुख्य उद्दिष्ट निसर्गातील शक्तींचे पूजन करून पर्यावरणाची शुद्धी करणे, मंत्रोच्चाराद्वारे आध्यात्मिक ऊर्जा मिळवणे आणि विश्वाच्या कल्याणासाठी देवाला आहुती अर्पण करणे हे आहे.</p>
                        <div class="samagri-container">
                            <span class="samagri-box">आध्यात्मिक प्रगती</span>
                            <span class="samagri-box">ध्यात्मिक प्रगती</span>
                            <span class="samagri-box">वातावरण शुद्धीकरण</span>
                            <span class="samagri-box">वास्तुशांती</span>
                            <span class="samagri-box">इच्छित फळप्राप्ती (आरोग्य, समृद्धी, शांती)</span>
                            <span class="samagri-box">पापनाश</span>
                        </div><br>
                        <h3 class="accent-title">हवनाची आवश्यक सामग्री</h3>
                        <div class="samagri-container">

                            <span class="samagri-box">समिधा (समिधा = विशिष्ट लाकडाच्या काड्या, उदा. पळस, उंबर, आंबा, शमी)</span>
                            <span class="samagri-box">हविष्य (साजूक तूप, तिळ, जव, नवीन तांदूळ, मध)</span>
                            <span class="samagri-box">अग्निकुंड (होमकुंड)</span>
                            <span class="samagri-box">दुर्वा, बेल, हवन सामग्री, लोबान, कपूर</span>
                            <span class="samagri-box">पाणी, अक्षता, फुले, सुपारी, नैवेद्य</span>

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
                            <h2 class="accent-title">हवनाचे फायदे</h2>
                            <div class="vows-container">
                                <span class="samagri-box"><i class="fas fa-leaf"></i> मनाची एकाग्रता वाढते.</span>
                                <span class="samagri-box"><i class="fas fa-heartbeat"></i> वास्तुमधील दोष दूर होतो.</span>
                                <span class="samagri-box"><i class="fas fa-coins"></i> सकारात्मक ऊर्जा वाढते.</span>
                                <span class="samagri-box"><i class="fas fa-smile-beam"></i> पर्यावरणातील जंतू नष्ट होतात.</span>
                                <span class="samagri-box"><i class="fas fa-baby"></i> आंतरिक व बाह्य शुद्धी मिळते.</span>
                            </div>
                            <h2 class="accent-title">महत्त्वाचे मंत्र</h2>
                            <div class="vows-container">
                                <h4>स्वाहा मंत्र —</h4><span class="samagri-box"><i class="fas fa-leaf"></i> प्रत्येक आहुती देताना शेवटी “स्वाहा” म्हणायचे.</span>
                                <h4>शांतिमंत्र, पूर्णाहुती मंत्र, कल्याणमंत्र —</h4><span class="samagri-box"><i class="fas fa-heartbeat"></i> पूर्णाहुतीवेळी</span>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="saptpadi-image-frame">
                            <img src="images/images/saptpadi.webp" class="img-fluid rounded-custom shadow-lg" alt="सप्तपदी विधी">
                            <div class="frame-decoration"></div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <div class="content-section mt-5">
            <h2 class="section-title text-center mb-5"><i class="fas fa-fire"></i> हवन विधीचे टप्पे (Havan Ritual Steps)</h2>
            <div class="puja-steps-grid">

                <div class="step-card">
                    <div class="step-icon"><i class="fas fa-hand-sparkles"></i></div>
                    <h3>शुद्धीकरण</h3>
                    <p>मंडप, हवनकुंड, पुरोहित आणि सहभागी व्यक्तींचे पवित्र मंत्रोच्चाराने आणि प्रोक्षणाने शुद्धीकरण करणे.</p>
                </div>

                <div class="step-card">
                    <div class="step-icon"><i class="fas fa-bullseye"></i></div>
                    <h3>संकल्प</h3>
                    <p>हवन कोणत्या विशिष्ट हेतूने किंवा कार्यासाठी केले जात आहे, त्याचे विधीपूर्वक देवापुढे उच्चार करणे.</p>
                </div>

                <div class="step-card">
                    <div class="step-icon"><i class="fas fa-vihara"></i></div>
                    <h3>देवता आवाहन व पूजन</h3>
                    <p>यज्ञाच्या मुख्य देवतांचे आवाहन करून त्यांना हवनकुंडात विराजमान होण्यासाठी विधीवत पूजन करणे.</p>
                </div>

                <div class="step-card">
                    <div class="step-icon"><i class="fas fa-igniting"></i></div>
                    <h3>अग्निप्रज्वलन</h3>
                    <p>विशिष्ट मंत्रांच्या पाठासह आणि शुद्ध साहित्याने हवनाच्या अग्नीची विधीपूर्वक स्थापना व प्रज्वलन करणे.</p>
                </div>

                <div class="step-card">
                    <div class="step-icon"><i class="fas fa-mortar-pestle"></i></div>
                    <h3>आहुती</h3>
                    <p>मंत्रोच्चारासह हविष्याचे (साजूक तूप, समिधा, औषधी वनस्पती) अग्नीमध्ये भक्तिपूर्वक अर्पण करणे.</p>
                </div>

                <div class="step-card">
                    <div class="step-icon"><i class="fas fa-sun"></i></div>
                    <h3>पूर्णाहुती</h3>
                    <p>यज्ञाची अंतिम मोठी आहुती देणे आणि संकलित कार्याची सिद्धी होण्यासाठी ईश्वराकडे प्रार्थना करणे.</p>
                </div>

                <div class="step-card">
                    <div class="step-icon"><i class="fas fa-hands-praying"></i></div>
                    <h3>आरती व मंत्रपुष्पांजली</h3>
                    <p>मुख्य देवतांची आरती करणे आणि विधीच्या सांगतेसाठी मंत्रपुष्पांजली अर्पण करून आशीर्वाद घेणे.</p>
                </div>

                <div class="step-card">
                    <div class="step-icon"><i class="fas fa-box-open"></i></div>
                    <h3>प्रसाद वितरण</h3>
                    <p>यज्ञाचा पवित्र विभूती-प्रसाद कपाळाला लावणे आणि उपस्थित सर्वांना महाप्रसादाचे वाटप करणे.</p>
                </div>

            </div>
        </div>

    </div>

</section>

<?php include 'footer.php'; ?>