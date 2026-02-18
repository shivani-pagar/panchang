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
<?php include 'hindi/header.php'; ?>
<!-- Title Bar -->
<div class="pbmit-title-bar-wrapper " style="background-image:url(images/guruji/ser-img/bgser.jpg);">
    <div class="container paddcon">
        <div class="row align-items-center">
            <div class="col-md-7 col-lg-7">
                <div class="pbmit-title-bar-content">
                    <div class="pbmit-title-bar-content-inner">
                        <div class="pbmit-tbar">
                            <div class="pbmit-tbar-inner container">
                                <h1 class="pbmit-tbar-title">पूजा</h1>
                            </div>
                        </div>
                        <div class="pbmit-breadcrumb">
                            <div class="pbmit-breadcrumb-inner">
                                <span><a title="" href="index1.php" class="home"><span>Home</span></a></span>
                                <span class="sep">-</span>
                                <span><span class="post-root post post-post current-item">पूजा</span></span>
                            </div>
                        </div>
                    </div>
                </div>

               <?php include 'sachin_guruji_hindi.php'; ?>
            </div>
            <?php include 'inner-form-hindi.php'; ?>
        </div>
    </div>
</div>
<!-- Title Bar End-->
<div class="mantra-ribbon-container">
    <div class="mantra-ribbon">
        <div class="mantra-icon-left"><i class="fas fa-om"></i></div>
        <div class="mantra-text-content">
            <p class="sanskrit-shlok">
                पुष्टिपते नमस्तुभ्य नमः शंकरसूनवे॥ ब्रह्मभूताय देवाय सर्वसिद्धिप्रदाय ते॥
            </p>

        </div>
        <div class="mantra-icon-right"><i class="fas fa-om"></i></div>
    </div>
</div>

<section class="mainsection">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6 col-md-6  order-1">
                <img src="images/images/pujavidhi01.jpg" class="w-100" alt="">

            </div>
            <div class="col-md-6 col-lg-6">
                <div class="service-details">
                    <h3 class="pbmit-title">पूजा विधि – वैदिक ग्रंथों के अनुसार विस्तृत जानकारी</h3>
                    <p>वैदिक परंपरा में, पूजा केवल एक धार्मिक अनुष्ठान नहीं है, बल्कि ईश्वर से जुड़ने, अपने कर्तव्यों के माध्यम से सृष्टि के संतुलन को बनाए रखने और आत्म-शुद्धि प्राप्त करने का एक तरीका है। मंत्र, यज्ञ, यज्ञ और अग्नि अनुष्ठानों को आधुनिक पूजा की तुलना में वैदिक पूजा में कहीं अधिक महत्व दिया जाता है।
                        <br><br>
                        वैदिक पूजा का उद्देश्य केवल मूर्तियों की पूजा करना ही नहीं है, बल्कि मंत्रों, यज्ञकर्म और अग्निहोत्र के माध्यम से दिव्य शक्तियों का आह्वान करना, उन्हें अर्पित करना और अंत में उनका विसर्जन करना भी है। प्रत्येक क्रिया के साथ विशिष्ट मंत्रों का पाठ किया जाता है।
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'book-now-hindi.php'; ?>

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
                        <h3 class="accent-title">पूजा अनुष्ठान का मुख्य सिद्धांत</h3>
                        <p>वैदिक पूजा का उद्देश्य केवल मूर्तियों की पूजा करना ही नहीं है, बल्कि मंत्रों, यज्ञकर्म और अग्निहोत्र के माध्यम से दिव्य शक्तियों का आह्वान करना, उन्हें अर्पित करना और अंत में उनका विसर्जन करना भी है। प्रत्येक क्रिया के साथ विशिष्ट मंत्रों का पाठ किया जाता है।</p>
                    </div>
                </div>
            </div>
        </div>

        <hr class="section-divider">

        <div class="row">
            <div class="col-lg-5">
                <div class="ritual-info-group">
                    <h2 class="ritual-header"><i class="fas fa-clipboard-list"></i>पूजा की तैयारियाँ</h2>

                    <div class="info-item">
                        <div class="info-icon"><i class="fas fa-check-circle"></i></div>
                        <div class="info-text">
                            <h4>शरीर और स्थान की पवित्रता:</h4>
                            <p>स्नान करना और स्वच्छ वस्त्र पहनना, पूजा स्थल (मंडप या यज्ञशाला) को गंगाजल या शुद्ध जल से शुद्ध करना।</p>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon"><i class="fas fa-check-circle"></i></div>
                        <div class="info-text">
                            <h4>पूजा सामग्री:</h4>
                            <div class="samagri-container">
                                <span class="samagri-box">फूल</span>
                                <span class="samagri-box">अक्षत</span>
                                <span class="samagri-box">कुमकुम</span>
                                <span class="samagri-box">तिल</span>
                                <span class="samagri-box">दूर्वा</span>
                                <span class="samagri-box">जल</span>
                                <span class="samagri-box">धूप</span>
                                <span class="samagri-box">दीप</span>
                                <span class="samagri-box">अगरबत्ती</span>
                                <span class="samagri-box">प्रसाद</span>
                                <span class="samagri-box">समिधा (बलि के लिए लकड़ी)</span>
                                <span class="samagri-box">घी (शुद्ध घी)</span>
                                <span class="samagri-box">यज्ञ कुंड</span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="ritual-info-group">
                    <h2 class="ritual-header"><i class="fas fa-vihara"></i>पूजा की प्रक्रिया</h2>

                    <div class="process-step">
                        <span class="step-num">०1</span>
                        <div class="step-body">
                            <h4>संकल्प (संकल्प लेना)</h4>
                            <p>पूजा के उद्देश्य को स्पष्ट करना, यह बताना कि किसकी, किस वस्तु की और किस देवता की पूजा की जा रही है।
                                <span class="mantra-text">"मम सर्वकार्यसिद्धयर्थं श्रीपरमेश्वर प्रीत्यर्थं संकल्पमहे"</span>
                            </p>
                        </div>
                    </div>

                    <div class="process-step">
                        <span class="step-num">०2</span>
                        <div class="step-body">
                            <h4>प्रार्थना और सीटों की व्यवस्था</h4>
                            <p>देवता का आह्वान करना और उनकी पीठ पर बैठने की प्रार्थना करना।
                                <span class="mantra-text">"अवाहयामि, स्थापयामि, आसनम समर्पयामि"</span>
                            </p>
                        </div>
                    </div>

                    <div class="process-step">
                        <span class="step-num">०3</span>
                        <div class="step-body">
                            <h4>पद्य, अर्घ्य, आचमन</h4>
                            <p>पद्य (पैर धोने के लिए जल), अर्घ्य (हाथ और पैर धोना) और आचमन (मुंह धोना) अर्पित करना।</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="ritual-steps-section mt-5">
            <h2 class="ritual-section-title text-center mb-5">
                <i class="fas fa-dharmachakra"></i>पूजा की प्रक्रिया
            </h2>

            <div class="ritual-steps-grid-new">

                <div class="ritual-step-card">
                    <div class="ritual-step-icon"><i class="fas fa-bath"></i></div>
                    <h3>स्नान और वस्त्र अलंकरण</h3>
                    <p>देवता को मंत्रों से युक्त जल से स्नान कराना और वस्त्र एवं आभूषण अर्पित करना।</p>
                </div>

                <div class="ritual-step-card">
                    <div class="ritual-step-icon"><i class="fas fa-spa"></i></div>
                    <h3>सुगंध, फूल, धूप और दीपक की भेंट</h3>
                    <p>चंदन, फूल, अगरबत्ती और दीपक अर्पित करना।</p>
                </div>

                <div class="ritual-step-card">
                    <div class="ritual-step-icon"><i class="fas fa-apple-alt"></i></div>
                    <h3>नैवेद्य और ताम्बुल अर्पण</h3>
                    <p>भोजन, फल, मिठाई (नैवेद्य) अर्पित करना और फिर पान के पत्ते (ताम्बुल) देना।</p>
                </div>

                <div class="ritual-step-card">
                    <div class="ritual-step-icon"><i class="fas fa-om"></i></div>
                    <h3>मंत्रोच्चारण और स्तुति</h3>
                    <p>देवी-देवताओं के मंत्रों का जाप, स्तोत्र और ऋचाओं का पाठ। जैसे "ओम नमो भगवते वासुदेवाय" या "ओम त्र्यंबकम यजामहे"।</p>
                </div>

                <div class="ritual-step-card">
                    <div class="ritual-step-icon"><i class="fas fa-fire"></i></div>
                    <h3>मुखपृष्ठ / यज्ञ कर्म</h3>
                    <p>अग्निहोत्र के दौरान वैदिक मंत्रों का उच्चारण करते हुए घी और समिधा अर्पित करें। प्रत्येक आहुति के लिए "स्वाहा" कहना आवश्यक है।</p>
                </div>

                <div class="ritual-step-card">
                    <div class="ritual-step-icon"><i class="fas fa-hands-praying"></i></div>
                    <h3>आरती और प्रार्थना</h3>
                    <p>दीपक जलाकर आरती करें और अंत में श्रद्धापूर्वक प्रार्थना करें।</p>
                </div>

                <div class="ritual-step-card">
                    <div class="ritual-step-icon"><i class="fas fa-sync"></i></div>
                    <h3>परिक्रमा एवं नमस्कार</h3>
                    <p>देवता की परिक्रमा करना और उन्हें प्रणाम करना।</p>
                </div>

                <div class="ritual-step-card">
                    <div class="ritual-step-icon"><i class="fas fa-leaf"></i></div>
                    <h3>क्षमा और दोषमुक्ति</h3>
                    <p>पूजा के दौरान हुई किसी भी गलती के लिए क्षमा मांगें और शांतिपूर्वक देवता को विसर्जित करें।</p>
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
                            <h2 class="mini-title"><i class="fas fa-om"></i>मंत्रों का महत्व</h2>
                            <p class="phi-desc">
                                वैदिक उपासना में मंत्रचरण सबसे महत्वपूर्ण है। अग्नि, वायु, सूर्य, इंद्र, वरुण जैसे देवताओं को इन मंत्रों का उच्चारण किया जाता है, क्योंकि अग्नि के माध्यम से ही आहुति देवताओं तक पहुँचती है। मंत्र ध्वनि के रूप में कंपन होते हैं, जो उपासक और ब्रह्मांड के बीच संबंध को गहरा करते हैं।
                            </p>

                            <h2 class="mini-title mt-4"><i class="fas fa-scroll"></i>वैदिक उपासना के पीछे का दर्शन</h2>
                            <div class="phi-steps">
                                <div class="phi-step">
                                    <span class="step-bullet"><i class="fas fa-fire-alt"></i></span>
                                    <div>
                                        <h4>बलिदान का अर्थ है उपासना का शुद्धिकरण —</h4>
                                        <p>यह महज एक विश्वास नहीं है, बल्कि एक गहरी प्रक्रिया है जो हमें ब्रह्मांड की ऊर्जा से जोड़ती है।</p>
                                    </div>
                                </div>
                                <div class="phi-step">
                                    <span class="step-bullet"><i class="fas fa-balance-scale"></i></span>
                                    <div>
                                        <h4>सृष्टि के ऋतुओं का संरक्षण करना —</h4>
                                        <p>ब्रह्मांड में प्राकृतिक संतुलन को चढ़ावों, मंत्रों और अनुष्ठानों के माध्यम से बनाए रखा जाता है।</p>
                                    </div>
                                </div>
                                <div class="phi-step">
                                    <span class="step-bullet"><i class="fas fa-heart"></i></span>
                                    <div>
                                        <h4>ईश्वर के प्रति सम्मान —</h4>
                                        <p>हर भेंट हमारे अहंकार का बलिदान है।</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<?php include 'hindi/footer.php'; ?>