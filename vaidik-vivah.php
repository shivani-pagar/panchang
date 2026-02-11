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
    gap: 20px; /* Increased from 12px to 20px for more breathing room */
    margin-bottom: 30px;
}

    .samagri-box{ display: inline-flex;
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
                                <h1 class="pbmit-tbar-title">वैदिक विवाह संस्कार</h1>
                            </div>
                        </div>
                        <div class="pbmit-breadcrumb">
                            <div class="pbmit-breadcrumb-inner">
                                <span><a title="" href="index.php" class="home"><span>Home</span></a></span>
                                <span class="sep">-</span>
                                <span><span class="post-root post post-post current-item">वैदिक विवाह संस्कार</span></span>
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
            <div class="col-lg-6 col-md-6  order-1">
                <img src="images/images/pujavidhi01.jpg" class="w-100" alt="">

            </div>
            <div class="col-md-6 col-lg-6">
                <div class="service-details">
                    <h3 class="pbmit-title">वैदिक विवाह संस्कार – सविस्तर माहिती</h3>
                    <p>विवाह संस्कार हा हिंदू धर्मातील सोळा संस्कारांपैकी (षोडश संस्कार) एक महत्त्वाचा संस्कार आहे. वैदिक परंपरेनुसार विवाह केवळ दोन व्यक्तींचा संसार सुरू करण्याचा करार नसून, तो एक धार्मिक, सामाजिक आणि आध्यात्मिक बंध आहे. यामध्ये यज्ञ, मंत्र, आणि विधींच्या माध्यमातून वर, वधू आणि त्यांच्या कुटुंबांची देवांसमोर प्रतिज्ञा घालून एक नवा जीवनसंस्कार सुरू केला जातो.</p>
                </div>
                <div class="service-details">
                    <h3 class="pbmit-title">विवाह संस्काराचा उद्देश</h3>
                    <p>दोन व्यक्तींना, त्यांच्या शरीर, मन आणि आत्म्याला पवित्र बंधनात बांधणे. धर्म, अर्थ, काम आणि मोक्ष या चार पुरुषार्थांपैकी तीन (धर्म, अर्थ, काम) पूर्ण करण्याचा प्रारंभ. पुढील पिढी (संतती) घडवून वंशाचा आणि संस्कृतीचा विस्तार.</p>
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
                        <h2 class="accent-title">विवाह संस्काराची मुख्य रचना</h2>
                        <p>वैदिक विवाह संस्कारात अनेक पद्धती आहेत (उदा. ब्रह्मविवाह, गंधर्वविवाह), पण ब्राह्मणधर्मप्रणीत विवाहात यज्ञ आणि सप्तपदी हे मुख्य भाग आहेत.</p>
                        <div class="samagri-container">
                            <span class="samagri-box">सीमान्त पूजन</span>
                            <span class="samagri-box">मधुपर्क</span>
                            <span class="samagri-box">कन्यादान</span>
                            <span class="samagri-box">सप्तपदी (सात फेऱ्या)</span>
                            <span class="samagri-box">अग्निपरिक्रमा</span>
                            <span class="samagri-box">मंगलाष्टक आणि आशीर्वाद</span>
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
                            <h2 class="accent-title">विवाह संस्काराची मुख्य रचना</h2>

                            <div class="saptpadi-intro-text">
                                <p>सप्तपदी हा हिंदू विवाहाचा सर्वात पवित्र आणि कायदेशीरदृष्ट्या महत्त्वाचा विधी आहे. अग्निसाक्षीत वर-वधू सात पावले चालतात आणि प्रत्येक पावलावर संसाराच्या समृद्धीसाठी विशिष्ट संकल्प करतात:</p>
                            </div>

                            <div class="vows-container">
                                <span class="samagri-box"><i class="fas fa-leaf"></i> अन्नसमृद्धी</span>
                                <span class="samagri-box"><i class="fas fa-heartbeat"></i> आरोग्य</span>
                                <span class="samagri-box"><i class="fas fa-coins"></i> संपत्ती</span>
                                <span class="samagri-box"><i class="fas fa-smile-beam"></i> सुख</span>
                                <span class="samagri-box"><i class="fas fa-baby"></i> संतती</span>
                                <span class="samagri-box"><i class="fas fa-handshake"></i> मैत्री</span>
                                <span class="samagri-box"><i class="fas fa-unity"></i> एकता</span>
                            </div>

                            <div class="vow-conclusion">
                                <div class="info-icon-box">
                                    <i class="fas fa-check-circle"></i>
                                    <span>या सात पावलांनी आणि सात वचनांनीच विवाह विधी पूर्ण मानला जातो.</span>
                                </div>
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
            <h2 class="section-title text-center mb-5"><i class="fas fa-gopuram"></i> विवाह विधीचे टप्पे (Wedding Rituals)</h2>
            <div class="puja-steps-grid">

                <div class="step-card">
                    <div class="step-icon"><i class="fas fa-home"></i></div>
                    <h3>मांगलिक कार्यांची तयारी</h3>
                    <p>विवाहापूर्वी वर आणि वधूच्या घरी मंगलकार्य: हल्दी, वरात स्वागत आणि कुलदेवता पूजन.</p>
                </div>

                <div class="step-card">
                    <div class="step-icon"><i class="fas fa-place-of-worship"></i></div>
                    <h3>विवाहमंडप शुद्धी</h3>
                    <p>मंडप आणि विवाहपीठ शुद्ध करून, कुंभ, मंगलकलश आणि यज्ञकुंड विधीवत सजवणे.</p>
                </div>

                <div class="step-card">
                    <div class="step-icon"><i class="fas fa-user-check"></i></div>
                    <h3>वर पूजन आणि स्वागत</h3>
                    <p>वराला विष्णूरूप (देववत) मानून त्याचे पूजन आणि फुलांनी उत्साहात स्वागत करणे.</p>
                </div>

                <div class="step-card">
                    <div class="step-icon"><i class="fas fa-hands-holding"></i></div>
                    <h3>कन्यादान</h3>
                    <p>वडील किंवा पालकांमार्फत कन्येचा हात अग्नी आणि देवाच्या उपस्थितीत वराला सोपवणे.</p>
                </div>

                <div class="step-card">
                    <div class="step-icon"><i class="fas fa-fire-alt"></i></div>
                    <h3>अग्निपरिक्रमा</h3>
                    <p>यज्ञकुंडात अग्निस्थापन करून होम करणे, समिधा आणि पवित्र आहुती देऊन सप्तपदी पूर्ण करणे.</p>
                </div>

                <div class="step-card">
                    <div class="step-icon"><i class="fas fa-heart"></i></div>
                    <h3>मंगलसूत्र व सिंदूरधारण</h3>
                    <p>वर वधूच्या गळ्यात मंगलसूत्र घालतो आणि सौभाग्यवतीचे प्रतीक म्हणून मस्तकावर कुंकू लावतो.</p>
                </div>

                <div class="step-card">
                    <div class="step-icon"><i class="fas fa-users"></i></div>
                    <h3>मंगलाष्टक</h3>
                    <p>उपस्थित पुरोहित आणि मंडळी मंगलाष्टक म्हणतात आणि नवदांपत्यावर अक्षता टाकून शुभ आशीर्वाद देतात.</p>
                </div>

                <div class="step-card">
                    <div class="step-icon"><i class="fas fa-praying-hands"></i></div>
                    <h3>आशीर्वाद आणि विसर्जन</h3>
                    <p>वडिलधाऱ्यांचे आशीर्वाद घेणे आणि विधीची सांगता करून देवतेस शांतीपूर्वक विसर्जित करणे.</p>
                </div>

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
                        <h2 class="mini-title"><i class=""></i> मंत्र आणि यज्ञाचे महत्त्व</h2>
                        <p class="phi-desc">
                            वैदिक विवाहात सर्व विधी यजुर्वेद व ऋग्वेद यांतील मंत्रांनी केले जातात. यज्ञाच्या साक्षीने हे कर्म पार पडल्यामुळे विवाह केवळ सामाजिक करार न राहता धार्मिक संलग्नता प्राप्त करतो. अग्नीला साक्षी मानून नवदांपत्याने आयुष्यभर एकमेकांचे सहचर होण्याचा संकल्प करणे हे मुख्य आहे.
                            आज अनेक विवाह सोहळे थोडक्यात केले जातात, परंतु पारंपरिक वैदिक विवाह विधी अजूनही खूप मोठ्या प्रमाणावर ब्राह्मण, वैश्य, क्षत्रिय आणि अन्य हिंदू समाजांत पाहायला मिळतात, विशेषतः मोठ्या धार्मिक कुटुंबांत आणि गावांमध्ये.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<?php include 'footer.php'; ?>