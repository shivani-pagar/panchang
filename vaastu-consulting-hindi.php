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
                                <h1 class="pbmit-tbar-title">वास्तु परामर्श</h1>
                            </div>
                        </div>
                        <div class="pbmit-breadcrumb">
                            <div class="pbmit-breadcrumb-inner">
                                <span><a title="" href="index.php" class="home"><span>Home</span></a></span>
                                <span class="sep">-</span>
                                <span><span class="post-root post post-post current-item">वास्तु परामर्श</span></span>
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
        <h2 class="accent-title">वास्तु परामर्श क्या है?</h2><br>
        
        <p style="text-align: justify; font-size: 18px;">
            वास्तु परामर्श एक पेशेवर सेवा है, जिसके माध्यम से विशेषज्ञ आपके घर, कार्यालय, दुकान या अन्य भवनों के लिए वास्तु शास्त्र के अनुसार उचित मार्गदर्शन प्रदान करते हैं।
            <br><br>
            वास्तु परामर्श में भवन की स्थिति और संरचना की जांच करना, उसमें मौजूद वास्तु दोषों की पहचान करना और उन्हें दूर करने के लिए उपयुक्त समाधान सुझाना शामिल है।
            <br><br>
            वास्तु शास्त्र के अनुसार, प्रत्येक घर, कार्यालय या भवन की बनावट और दिशा का वहां रहने वाले लोगों के जीवन पर सकारात्मक या नकारात्मक प्रभाव पड़ सकता है।
            <br><br>
            वास्तु परामर्श सही दिशा, बनावट और प्रभावी समाधान सुझाता है, जिससे घर या भवन की ऊर्जा संतुलित हो और वहां रहने वाले लोगों का जीवन अधिक सुखी, समृद्ध और सफल बन सके।
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


<?php include 'book-now-hindi.php'; ?>

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
    <h2 class="accent-title">वास्तु परामर्श सेवा कैसे काम करती है?</h2>
    <p>वास्तु परामर्श प्रक्रिया आम तौर पर निम्नलिखित चरणों में पूरी की जाती है:</p>

    <div class="samagri-container">

        <span style="display:block; background:#f8f9fa; padding:20px; border-left:5px solid #b48b3c; border-radius:8px; box-shadow:0 4px 12px rgba(0,0,0,0.08); margin-bottom:20px; font-family: 'Segoe UI', sans-serif; line-height:1.7;">
            <h5 style="margin:0 0 10px 0; font-size:18px; color:#b48b3c; font-weight:600;">
                सर्वेक्षण
            </h5>
            <p style="margin:0; font-size:15px; color:#333;">
                सलाहकार सबसे पहले घर, कार्यालय या इमारत का विस्तृत सर्वेक्षण करता है। इसमें बाहरी और आंतरिक संरचना की जांच शामिल होती है। दिशा, आकार, लेआउट, आंतरिक सज्जा, दरवाजे, खिड़कियां तथा संभावित वास्तु दोषों का सावधानीपूर्वक विश्लेषण किया जाता है।
            </p>
        </span>

        <span style="display:block; background:#f8f9fa; padding:20px; border-left:5px solid #b48b3c; border-radius:8px; box-shadow:0 4px 12px rgba(0,0,0,0.08); margin-bottom:20px; font-family:'Segoe UI', sans-serif; line-height:1.7;">
            <h5 style="margin:0 0 10px 0; font-size:18px; color:#b48b3c; font-weight:600;">
                जन्म कुंडली विश्लेषण
            </h5>
            <p style="margin:0; font-size:15px; color:#333;">
                सलाहकार व्यक्ति की कुंडली का अध्ययन करके ग्रहों की स्थिति और उनके जीवन पर पड़ने वाले प्रभावों को समझते हैं। इससे व्यक्ति की जीवन ऊर्जा और उसके घर या कार्यस्थल की ऊर्जा के बीच संबंध को समझने में सहायता मिलती है।
            </p>
        </span>

        <span style="display:block; background:#f8f9fa; padding:20px; border-left:5px solid #b48b3c; border-radius:8px; box-shadow:0 4px 12px rgba(0,0,0,0.08); margin-bottom:20px; font-family:'Segoe UI', sans-serif; line-height:1.7;">
            <h5 style="margin:0 0 10px 0; font-size:18px; color:#b48b3c; font-weight:600;">
                वास्तु दोष विश्लेषण
            </h5>
            <p style="margin:0; font-size:15px; color:#333;">
                हर घर या इमारत में कुछ डिज़ाइन संबंधी खामियाँ, दिशा संबंधी त्रुटियाँ या निर्माण संबंधी गलतियाँ हो सकती हैं। वास्तु सलाहकार इन दोषों की पहचान करता है और उन्हें दूर करने के लिए व्यावहारिक उपाय एवं मार्गदर्शन प्रदान करता है।
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
        <h2 class="accent-title">वास्तु परामर्श सेवा कैसे काम करती है?</h2>
        <p>वास्तु परामर्श में निम्नलिखित प्रमुख सेवाएं प्रदान की जाती हैं:</p>

        <div class="samagri-container">


  <span style="display:block; background:#f8f9fa; padding:20px; border-left:5px solid #b48b3c; border-radius:8px; box-shadow:0 4px 12px rgba(0,0,0,0.08); margin-bottom:20px; font-family:'Segoe UI', sans-serif; line-height:1.7;">
            <h5 style="margin:0 0 10px 0; font-size:18px; color:#b48b3c; font-weight:600;">
                सलाह और उपाय
            </h5>
            <p style="margin:0; font-size:15px; color:#333;">
                सलाहकार वास्तु दोषों को दूर करने के लिए उचित समाधान सुझाते हैं। इसमें फर्नीचर की सही व्यवस्था, रंग संयोजन, उपकरणों का उचित स्थान निर्धारण, पूजा-अर्चना, रुद्राक्ष, यंत्र, रत्नों का उपयोग आदि शामिल हो सकते हैं।
            </p>
        </span>

        <span style="display:block; background:#f8f9fa; padding:20px; border-left:5px solid #b48b3c; border-radius:8px; box-shadow:0 4px 12px rgba(0,0,0,0.08); margin-bottom:20px; font-family:'Segoe UI', sans-serif; line-height:1.7;">
            <h5 style="margin:0 0 10px 0; font-size:18px; color:#b48b3c; font-weight:600;">
                सुधार के सुझाव
            </h5>
            <p style="margin:0; font-size:15px; color:#333;">
                यदि कोई गंभीर वास्तु दोष पाया जाता है, तो उसके लिए विशेष सुधारात्मक सुझाव दिए जाते हैं। इनमें मुख्य द्वार का स्थान परिवर्तन, नए रंगों का प्रयोग, तकनीकी सुधार, विशेष पूजा-अर्चना, व्रत आदि शामिल हो सकते हैं।
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

                      <h2 class="accent-title">वास्तु परामर्श सेवा कैसे काम करती है?</h2>
    <p>वास्तु परामर्श में निम्नलिखित प्रमुख सेवाएं प्रदान की जाती हैं::</p>
                       <div class="samagri-container">
 <span style="display:block; background:#f8f9fa; padding:20px; border-left:5px solid #b48b3c; border-radius:8px; box-shadow:0 4px 12px rgba(0,0,0,0.08); margin-bottom:20px; font-family: 'Segoe UI', sans-serif; line-height:1.7;">
                <h5 style="margin:0 0 10px 0; font-size:18px; color:#b48b3c; font-weight:600;">
                    घर के लिए वास्तु सलाह
                </h5>
                <p style="margin:0; font-size:15px; color:#333;">
                    घर के वास्तु दोषों को दूर करना और उसकी ऊर्जा को संतुलित करना आवश्यक है। इसके लिए घर के प्रत्येक भाग की दिशा, डिजाइन और स्थान का सही विश्लेषण किया जाता है।
                </p>
            </span>

            <span style="display:block; background:#f8f9fa; padding:20px; border-left:5px solid #b48b3c; border-radius:8px; box-shadow:0 4px 12px rgba(0,0,0,0.08); margin-bottom:20px; font-family:'Segoe UI', sans-serif; line-height:1.7;">
                <h5 style="margin:0 0 10px 0; font-size:18px; color:#b48b3c; font-weight:600;">
                    कार्यालय और व्यवसाय के लिए वास्तु सलाह
                </h5>
                <p style="margin:0; font-size:15px; color:#333;">
                    कार्यालय के डिजाइन की खामियों को दूर करने और व्यावसायिक सफलता प्राप्त करने के लिए उचित वास्तु मार्गदर्शन प्रदान किया जाता है।
                </p>
            </span>

            <span style="display:block; background:#f8f9fa; padding:20px; border-left:5px solid #b48b3c; border-radius:8px; box-shadow:0 4px 12px rgba(0,0,0,0.08); margin-bottom:20px; font-family:'Segoe UI', sans-serif; line-height:1.7;">
                <h5 style="margin:0 0 10px 0; font-size:18px; color:#b48b3c; font-weight:600;">
                    नए निर्माण के लिए वास्तु सलाह
                </h5>
                <p style="margin:0; font-size:15px; color:#333;">
                    नए घर या इमारत के निर्माण के समय वास्तु शास्त्र के सिद्धांतों के अनुसार डिजाइन तैयार किया जाता है, ताकि भविष्य में किसी प्रकार का वास्तु दोष न हो।
                </p>
            </span>

            <span style="display:block; background:#f8f9fa; padding:20px; border-left:5px solid #b48b3c; border-radius:8px; box-shadow:0 4px 12px rgba(0,0,0,0.08); margin-bottom:20px; font-family:'Segoe UI', sans-serif; line-height:1.7;">
                <h5 style="margin:0 0 10px 0; font-size:18px; color:#b48b3c; font-weight:600;">
                    वास्तु उपाय
                </h5>
                <p style="margin:0; font-size:15px; color:#333;">
                    घर या कार्यालय में मौजूद वास्तु दोषों को दूर करने के लिए उपयुक्त उपाय सुझाए जाते हैं। इनमें वास्तु यंत्र, रुद्राक्ष, रत्न, पूजा-पाठ आदि का उपयोग शामिल हो सकता है।
                </p>
            </span>

            <span style="display:block; background:#f8f9fa; padding:20px; border-left:5px solid #b48b3c; border-radius:8px; box-shadow:0 4px 12px rgba(0,0,0,0.08); margin-bottom:20px; font-family:'Segoe UI', sans-serif; line-height:1.7;">
                <h5 style="margin:0 0 10px 0; font-size:18px; color:#b48b3c; font-weight:600;">
                    वास्तु पुनर्निर्माण
                </h5>
                <p style="margin:0; font-size:15px; color:#333;">
                    यदि घर की संरचना में गंभीर समस्याएं हों, तो वास्तु सलाहकार आवश्यक संरचनात्मक बदलावों के सुझाव देते हैं, ताकि दोषों को दूर कर ऊर्जा संतुलन स्थापित किया जा सके।
                </p>
            </span>

</div>

                    </div>
                </div>

            </div>
        </div>


<div class="wedding-ritual-section mt-5">
    <h2 class="wedding-section-title text-center mb-5">
        <i class="fas fa-scroll"></i> वास्तु परामर्श के लाभ
    </h2>

    <div class="wedding-steps-grid">

        <div class="wedding-step-card">
            <div class="wedding-step-icon"><i class="fas fa-sun"></i></div>
            <h3>सकारात्मक ऊर्जा उत्पन्न होती है</h3>
            <p>
                वास्तु शास्त्र की उचित सलाह लेने से घर या कार्यालय से नकारात्मक ऊर्जा दूर हो जाती है और सकारात्मक ऊर्जा का प्रवेश संभव हो पाता है।
            </p>
        </div>

        <div class="wedding-step-card">
            <div class="wedding-step-icon"><i class="fas fa-balance-scale"></i></div>
            <h3>मन की शांति और संतुलन</h3>
            <p>
                घर के प्रत्येक क्षेत्र को उचित रूप से डिजाइन करने से मन को शांति और संतुलन मिलता है। इससे घर के लोग अधिक शांत और खुश रहते हैं।
            </p>
        </div>

        <div class="wedding-step-card">
            <div class="wedding-step-icon"><i class="fas fa-coins"></i></div>
            <h3>आर्थिक समृद्धि और सफलता</h3>
            <p>
                वास्तु शास्त्र का सही ढंग से पालन करने से आर्थिक प्रगति, व्यापारिक सफलता और समृद्धि प्राप्त हो सकती है।
            </p>
        </div>

        <div class="wedding-step-card">
            <div class="wedding-step-icon"><i class="fas fa-tools"></i></div>
            <h3>सुधार के सुझाव</h3>
            <p>
                यदि वास्तु दोष है, तो उसके उपाय सुझाए जाते हैं। इनमें मुख्य द्वार का स्थान बदलना, नए रंग का प्रयोग करना, नए तकनीकी उपकरणों का उपयोग करना, घर में विशेष पूजा-अर्चना करना, रुद्राक्ष, यंत्र, रत्न का उपयोग या व्रत रखना शामिल हैं।
            </p>
        </div>

        <div class="wedding-step-card">
            <div class="wedding-step-icon"><i class="fas fa-heartbeat"></i></div>
            <h3>स्वास्थ्य और भौतिक खुशहाली</h3>
            <p>
                वास्तु शास्त्र के माध्यम से घर की ऊर्जा को संतुलित किया जाता है, जिससे लोगों के शारीरिक और मानसिक स्वास्थ्य में सुधार होता है।
            </p>
        </div>

        <div class="wedding-step-card">
            <div class="wedding-step-icon"><i class="fas fa-home"></i></div>
            <h3>परिवार में प्रेम और सद्भाव</h3>
            <p>
                घर के डिजाइन में संतुलन और उचित दिशा परिवार के सदस्यों के बीच प्रेम और सद्भाव को बढ़ाती है।
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
    <h2 class="accent-title mb-4">वास्तु परामर्श की प्रक्रिया</h2>

    <div style="max-width:100%; overflow-x:auto; background:#ffffff; padding:30px; border-radius:12px; box-shadow:0 8px 25px rgba(0,0,0,0.08); margin:30px 0; font-family:'Segoe UI', sans-serif;">

        <table style="width:100%; border-collapse:collapse; font-size:16px; line-height:1.8;">

            <tbody>

                <tr style="border-bottom:1px solid #e5e5e5;">
                    <td style="width:25%; padding:18px; font-weight:600; color:#b48b3c; font-size:17px;">
                        निरीक्षण:
                    </td>
                    <td style="padding:18px; color:#333;">
                        आपके घर या कार्यालय के स्थान और संरचना की सावधानीपूर्वक जांच की जाती है।
                    </td>
                </tr>

                <tr style="border-bottom:1px solid #e5e5e5; background:#fafafa;">
                    <td style="padding:18px; font-weight:600; color:#b48b3c; font-size:17px;">
                        विश्लेषण:
                    </td>
                    <td style="padding:18px; color:#333;">
                        घर में मौजूद वास्तु दोष और नकारात्मक ऊर्जा की पहचान की जाती है।
                    </td>
                </tr>

                <tr style="border-bottom:1px solid #e5e5e5;">
                    <td style="padding:18px; font-weight:600; color:#b48b3c; font-size:17px;">
                        सुझाव:
                    </td>
                    <td style="padding:18px; color:#333;">
                        उचित उपाय और सुधार की सिफारिश की जाती है।
                    </td>
                </tr>

                <tr style="background:#fafafa;">
                    <td style="padding:18px; font-weight:600; color:#b48b3c; font-size:17px;">
                        कार्यान्वयन:
                    </td>
                    <td style="padding:18px; color:#333;">
                        सुझाए गए उपाय और सलाह को लागू किया जाता है।
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

<?php include 'hindi/footer.php'; ?>