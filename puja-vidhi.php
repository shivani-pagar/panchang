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
        gap: 10px;
        /* Space between boxes */
        margin-top: 15px;
    }

    .samagri-box {
        background-color: #fff8f0;
        /* Soft saffron/cream tint */
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

    /* NEW Ritual Grid */
    .ritual-steps-grid-new {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 25px;
        margin-top: 30px;
    }

    /* NEW Card */
    .ritual-step-card {
        background: #fff;
        border: 1px solid #e0e0e0;
        border-top: 4px solid #8B4513;
        border-radius: 12px;
        padding: 30px;
        text-align: center;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
    }

    .ritual-step-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 25px rgba(139, 69, 19, 0.15);
        border-top-color: #FF9800;
    }

    /* NEW Icon */
    .ritual-step-icon {
        font-size: 2.5rem;
        color: #8B4513;
        margin-bottom: 20px;
    }

    .ritual-step-card h3 {
        font-size: 1.4rem;
        color: #5D4037;
        margin-bottom: 15px;
        font-weight: 700;
    }

    .ritual-step-card p {
        font-size: 0.95rem;
        color: #666;
        line-height: 1.6;
    }

    /* Responsive */
    @media (max-width: 992px) {
        .ritual-steps-grid-new {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 600px) {
        .ritual-steps-grid-new {
            grid-template-columns: 1fr;
        }
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
                                <h1 class="pbmit-tbar-title">पूजा विधी</h1>
                            </div>
                        </div>
                        <div class="pbmit-breadcrumb">
                            <div class="pbmit-breadcrumb-inner">
                                <span><a title="" href="index.php" class="home"><span>Home</span></a></span>
                                <span class="sep">-</span>
                                <span><span class="post-root post post-post current-item">Puja Vidhi</span></span>
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
<!-- Title Bar End-->
<div class="mantra-ribbon-container">
    <div class="mantra-ribbon">
        <div class="mantra-icon-left"><i class="fas fa-om"></i></div>
        <div class="mantra-text-content">
            <p class="sanskrit-shlok">
                पुष्टिपते नमस्तुभ्यं नमः शंकरसूनवे ॥ ब्रम्हभूताय देवाय सर्वसिद्धिप्रदाय ते ॥
            </p>

        </div>
        <div class="mantra-icon-right"><i class="fas fa-om"></i></div>
    </div>
</div>

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
            <div class="col-lg-6 col-md-6  order-1">
                <img src="images/images/pujavidhi01.jpg" class="w-100" alt="">

            </div>
            <div class="col-md-6 col-lg-6">
                <div class="service-details">
                    <h3 class="pbmit-title">पूजा विधी – वैदिक शास्त्रानुसार सविस्तर माहिती</h3>
                    <p>वैदिक परंपरेमध्ये पूजा ही फक्त एक धार्मिक विधी नसून, ती परमेश्वराशी नाते जोडण्याचा, आपल्या कर्तव्यातून ऋत (सृष्टीसमतोल) राखण्याचा आणि आत्मशुद्धी साधण्याचा मार्ग आहे. आधुनिक उपासनांपेक्षा वैदिक पूजेमध्ये मंत्र, होम, यज्ञ, आणि अग्निसंस्कार यांना फार मोठे महत्त्व दिले गेले आहे. वैदिक पूजेचा उद्देश केवळ मूर्तीपूजेत नव्हे, तर मंत्रशक्ती, यज्ञकर्म, आणि अग्निहोत्र या मार्फत दैवी शक्तींना आवाहन करणे, त्यांना अर्पण करणे, आणि अखेरीस त्यांचे विसर्जन करणे असा असतो. प्रत्येक कृती विशिष्ट मंत्रांच्या पाठासह केली जाते..</p>


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
                        <h3 class="accent-title">पूजा विधीचे मुख्य तत्त्व</h3>
                        <p>वैदिक पूजेचा उद्देश केवळ मूर्तीपूजेत नव्हे, तर मंत्रशक्ती, यज्ञकर्म, आणि अग्निहोत्र या मार्फत दैवी शक्तींना आवाहन करणे, त्यांना अर्पण करणे, आणि अखेरीस त्यांचे विसर्जन करणे असा असतो. प्रत्येक कृती विशिष्ट मंत्रांच्या पाठासह केली जाते.</p>
                    </div>
                </div>
            </div>
        </div>

        <hr class="section-divider">

        <div class="row">
            <div class="col-lg-5">
                <div class="ritual-info-group">
                    <h2 class="ritual-header"><i class="fas fa-clipboard-list"></i> पूजेची पूर्वतयारी</h2>

                    <div class="info-item">
                        <div class="info-icon"><i class="fas fa-check-circle"></i></div>
                        <div class="info-text">
                            <h4>शरीर आणि स्थानाची शुद्धता</h4>
                            <p>स्नान करून शुद्ध वस्त्रे परिधान करणे, पूजेचे स्थान (मंडप किंवा यज्ञशाळा) गंगाजल किंवा शुद्ध पाण्याने शुद्ध करणे.</p>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon"><i class="fas fa-check-circle"></i></div>
                        <div class="info-text">
                            <h4>पूजा सामग्री (Puja Samagri)</h4>
                            <div class="samagri-container">
                                <span class="samagri-box">पुष्प</span>
                                <span class="samagri-box">अक्षता</span>
                                <span class="samagri-box">कुंकू</span>
                                <span class="samagri-box">तिळ</span>
                                <span class="samagri-box">दुर्वा</span>
                                <span class="samagri-box">जल</span>
                                <span class="samagri-box">गंध</span>
                                <span class="samagri-box">दीप</span>
                                <span class="samagri-box">धूप</span>
                                <span class="samagri-box">नैवेद्य</span>
                                <span class="samagri-box">समिधा</span>
                                <span class="samagri-box">घृत</span>
                                <span class="samagri-box">यज्ञकुंड</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="ritual-info-group">
                    <h2 class="ritual-header"><i class="fas fa-vihara"></i> मुख्य विधी प्रक्रिया</h2>

                    <div class="process-step">
                        <span class="step-num">०१</span>
                        <div class="step-body">
                            <h4>संकल्प (संकल्प घेणे)</h4>
                            <p>पूजेचा हेतू स्पष्ट करणे. <span class="mantra-text">"मम सर्वकार्यसिद्ध्यर्थं श्रीपरमेश्वर प्रीत्यर्थं संकल्पमाहे"</span></p>
                        </div>
                    </div>

                    <div class="process-step">
                        <span class="step-num">०२</span>
                        <div class="step-body">
                            <h4>आवाहन व आसन प्रदान</h4>
                            <p>देवतेस आवाहन करणे. <span class="mantra-text">"आवाहयामि, स्थापयामि, आसनं समर्पयामि"</span></p>
                        </div>
                    </div>

                    <div class="process-step">
                        <span class="step-num">०३</span>
                        <div class="step-body">
                            <h4>पाद्य, अर्घ्य, आचमन</h4>
                            <p>पाद्य (पाय धुणे), अर्घ्य (हस्तपाद धुणे) आणि आचमन (मुख शुद्धी) अर्पण करणे.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="ritual-steps-section mt-5">
            <h2 class="ritual-section-title text-center mb-5">
                <i class="fas fa-dharmachakra"></i> पूजा विधीचे टप्पे (Ritual Steps)
            </h2>

            <div class="ritual-steps-grid-new">

                <div class="ritual-step-card">
                    <div class="ritual-step-icon"><i class="fas fa-bath"></i></div>
                    <h3>स्नान व वस्त्र अलंकार</h3>
                    <p>देवतेस स्नान घालणे (मंत्रात्मक पाण्याने) आणि वस्त्र व अलंकार अर्पण करणे.</p>
                </div>

                <div class="ritual-step-card">
                    <div class="ritual-step-icon"><i class="fas fa-spa"></i></div>
                    <h3>गंध, पुष्प, धूप, दीप</h3>
                    <p>गंध (चंदन), पुष्प (फुले), धूप (अगरबत्ती), दीप (दिवा) अर्पण करणे.</p>
                </div>

                <div class="ritual-step-card">
                    <div class="ritual-step-icon"><i class="fas fa-apple-alt"></i></div>
                    <h3>नैवेद्य व तांबूल अर्पण</h3>
                    <p>अन्न, फळे, मिठाई (नैवेद्य) अर्पण करणे, नंतर पानसुपारी (तांबूल) देणे.</p>
                </div>

                <div class="ritual-step-card">
                    <div class="ritual-step-icon"><i class="fas fa-om"></i></div>
                    <h3>मंत्रजप आणि स्तुती</h3>
                    <p>देवतेच्या मंत्रांचे जप, स्तोत्रे, ऋचांचे पठण.</p>
                </div>

                <div class="ritual-step-card">
                    <div class="ritual-step-icon"><i class="fas fa-fire"></i></div>
                    <h3>होम / यज्ञकर्म</h3>
                    <p>अग्निहोत्राच्या वेळी वैदिक मंत्र म्हणत घृत व समिधा आहुती (स्वाहा) देणे.</p>
                </div>

                <div class="ritual-step-card">
                    <div class="ritual-step-icon"><i class="fas fa-hands-praying"></i></div>
                    <h3>आरती व प्रार्थना</h3>
                    <p>दिवा फिरवून आरती करणे व अखेरीस भक्तिपूर्वक प्रार्थना करणे.</p>
                </div>

                <div class="ritual-step-card">
                    <div class="ritual-step-icon"><i class="fas fa-sync"></i></div>
                    <h3>परिक्रमा व नमस्कार</h3>
                    <p>देवतेच्या भोवती प्रदक्षिणा (परिक्रमा) करणे आणि दंडवत नमस्कार घालणे.</p>
                </div>

                <div class="ritual-step-card">
                    <div class="ritual-step-icon"><i class="fas fa-leaf"></i></div>
                    <h3>क्षमा याचना व विसर्जन</h3>
                    <p>पूजेतील त्रुटींसाठी क्षमा मागणे आणि देवतेस शांतीपूर्वक विसर्जित करणे.</p>
                </div>

            </div>
        </div>




        <div class="compact-section-wrapper">
            <div class="philosophy-card">
                <div class="philosophy-flex">
                    <div class="phi-img-col">
                        <img src="images/images/mantrache-mahtv.png" alt="Vedic Ritual">
                    </div>

                    <div class="phi-content-col">
                        <div class="content-padding">
                            <h2 class="mini-title"><i class="fas fa-om"></i> मंत्रांचे महत्त्व</h2>
                            <p class="phi-desc">
                                वैदिक पूजेमध्ये मंत्रोच्चारण ही सर्वात महत्त्वाची गोष्ट आहे. हे मंत्र दैवतांना उद्देशून उच्चारले जातात.
                                <strong>मंत्र हे ध्वनीच्या स्वरूपातील कंपन आहेत</strong>, ज्यामुळे विश्व आणि आपल्यातील संबंध गहिरा होतो.
                            </p>

                            <h2 class="mini-title mt-4"><i class="fas fa-scroll"></i> तत्त्वज्ञान</h2>
                            <div class="phi-steps">
                                <div class="phi-step">
                                    <span class="step-bullet"><i class="fas fa-fire-alt"></i></span>
                                    <div>
                                        <h4>यज्ञ म्हणजेच पूजाशुद्धी</h4>
                                        <p>ही एक सखोल प्रक्रिया आहे जी ब्रह्मांडाच्या ऊर्जेशी आपल्याला जोडते.</p>
                                    </div>
                                </div>
                                <div class="phi-step">
                                    <span class="step-bullet"><i class="fas fa-balance-scale"></i></span>
                                    <div>
                                        <h4>सृष्टीच्या ऋताचा जतन</h4>
                                        <p>अर्पण व विधी यामार्फत विश्वातील नैसर्गिक समतोल राखला जातो.</p>
                                    </div>
                                </div>
                                <div class="phi-step">
                                    <span class="step-bullet"><i class="fas fa-heart"></i></span>
                                    <div>
                                        <h4>देवत्वाचा आदर</h4>
                                        <p>प्रत्येक अर्पण म्हणजे आपल्या अहंकाराचा त्याग.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</section>

<?php include 'footer.php'; ?>