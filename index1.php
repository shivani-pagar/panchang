<?php include 'hindi/header.php'; ?>
<!-- Page Content -->
<div class="page-content demo-five">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <section class="hero-static-wrp position-relative">
        <div class="swiper-container main-hero-slider">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="hero-slide-bg-clean slide-one">
                        <div class="container">
                            <div class="row align-items-center min-vh-85">
                                <div class="col-12 col-md-8 col-lg-7">
                                    <div class="hero-content">
                                        <span class="badge mb-3 custom-badge animate__animated animate__fadeInDown">प्राचीन भारतीय ज्ञान</span>
                                        <h1 class="hero-title-clean animate__animated animate__fadeInLeft">सनातन वैदिक <br><span class="highlight-text">परंपराएँ और आशीर्वाद</span></h1>
                                        <p class="hero-desc-clean animate__animated animate__fadeInLeft animate__delay-1s"> प्राचीन वैदिक रीति-रिवाजों से अपने जीवन की समस्याओं का समाधान करें। अपने घर में दिव्य चेतना का अनुभव करें।</p>
                                        <div class="hero-btns-clean animate__animated animate__fadeInUp animate__delay-1s">
                                            <a href="#book" class="btn-orange">एक अनुष्ठान बुक करें</a>
                                            <a href="tel:+91XXXXXXXXXX" class="btn-outline-orange ml-md-3">चर्चा करना</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 col-lg-5 d-none d-md-block text-center">
                                    <div class="image-frame-gold animate__animated animate__zoomIn animate__delay-1s">
                                        <img src="images/homepage-1/hero-img.png" class="img-fluid main-img-clean" alt="Vedic Guru">
                                        <div class="exp-badge-white">
                                            <span class="num">१५+</span>
                                            <span class="txt">वर्षों का अनुभव</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="hero-slide-bg-clean slide-two">
                        <div class="container">
                            <div class="row align-items-center min-vh-85">
                                <div class="col-12 col-md-8 col-lg-7">
                                    <div class="hero-content">
                                        <span class="badge mb-3 custom-badge">ज्योतिष और वास्तु शास्त्र</span>
                                        <h1 class="hero-title-clean">ज्योतिष और वास्तु<br><span class="highlight-text">से अपना जीवन बदलें</span></h1>
                                        <p class="hero-desc-clean">ग्रहों और वास्तु दोषों के लिए सटीक, साइंस-बेस्ड समाधान। खुशी, समृद्धि और तरक्की का नया रास्ता खोजें।</p>
                                        <div class="hero-btns-clean">
                                            <a href="contact.php" class="btn-orange">संपर्क में रहो</a>
                                            <a href="#services" class="btn-outline-orange ml-md-3">हमारी सेवाएँ</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 col-lg-5 d-none d-md-block text-center">
                                    <div class="image-frame-gold">
                                        <img src="images/homepage-1/hero-img.png" class="img-fluid main-img-clean" alt="Astrology Expert">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="swiper-pagination custom-hero-dots-gold"></div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".main-hero-slider", {
            slidesPerView: 1,
            loop: true,
            effect: "fade",
            fadeEffect: {
                crossFade: true
            },
            speed: 1500,
            autoplay: {
                delay: 6000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".custom-hero-dots-gold",
                clickable: true,
            },
        });
    </script>


    <!-- About Start -->
    <section class="about-section-premium py-5">
        <div class="container">

            <div class="row mb-5">
                <div class="col-12 text-center">
                    <div class="heading-wrapper">

                        <h2 class="display-6 fw-bold text-dark">हमारे बारे में</h2>
                        <div class="title-line mx-auto"></div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">

                <div class="col-md-12 col-lg-6 mb-5 mb-lg-0 animate__animated animate__fadeInLeft">
                    <div class="about-img-wrapper">
                        <img src="images/About images/img02.png" class="img-fluid about-img" alt="सचिन जोशी">
                    </div>
                </div>

                <div class="col-md-12 col-lg-6 animate__animated animate__fadeInRight">
                    <div class="about-content-box ps-lg-4">

                        <div class="about-header mb-4">
                            <h4 class="about-subtitle"></h4>
                            <h2 class="about-main-title">
                                पञ्चाङ्ग वास्तु – <span class="highlight">सचिन जोशी</span>
                            </h2>
                            <div class="accent-line"></div>
                        </div>
                        <p class="intro-para">
                            इंसानी ज़िंदगी की नींव और प्रकृति का बैलेंस <strong>पंचतत्व</strong> पर आधारित है। ज़िंदगी में आग, धरती, हवा, पानी और आसमान के पांचों तत्वों का सही बैलेंस होना बहुत ज़रूरी है। अगर पांचों तत्वों में कमी या ज़्यादा होती है, तो ज़िंदगी में कई तरह की परेशानियां आती हैं। </p>

                        <div class="focus-box">
                            <p>
                                हमारे <strong>पंचांग वास्तु एसोसिएट्स</strong> पुराने ग्रंथों के आधार पर पंचतत्व को बैलेंस करने की सच्ची कोशिश करते हैं। उस क्लासिकल गाइडेंस की मदद से, हम इंसानी ज़िंदगी को ज़्यादा पॉज़िटिव, बैलेंस्ड और खुशहाल बनाने के लिए काम करते हैं। </p>
                        </div>

                        <p class="guruji-note">
                            <strong>सचिन जोशी</strong> के मार्गदर्शन में, हमारा लक्ष्य वास्तु शास्त्र और जीवन के अन्य महत्वपूर्ण तत्वों के बीच सही संतुलन बनाना और आपके जीवन में सकारात्मक बदलाव लाना है।
                        </p>

                        <div class="quote-box">
                            <p>“संकल्पत जायते सिद्धि” — सफलता पक्के इरादे से पैदा होती है। हम आपके जीवन के हर पहलू में सद्भाव, शांति और सफलता के रास्ते पर आपका मार्गदर्शन करने के लिए पूरी तरह समर्पित हैं।</p>
                        </div>

                        <a href="about.php" class="btn-modern-about">
                            और पढ़ें<i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Service Start -->

    <section class="service-slider-section py-5" id="book" style="background-color: #fdfdfd; font-family: 'Mukta', sans-serif;">
        <div class="container">

            <div class="row align-items-center mb-5">
                <div class="col-lg-5">
                    <div class="section-title-area">
                        <h4 class="text-uppercase fw-bold mb-2" style="color: #c39b2e; letter-spacing: 1px; font-size: 0.9rem;">प्रामाणिक व वैदिक सेवा</h4>
                        <h2 class="display-6 fw-bold text-dark">हमारी पूजा सेवाएँ – <span style="color: #c39b2e;">सचिन जोशी</span></h2>
                        <div style="width: 50px; height: 3px; background: #c39b2e; margin-top: 10px;"></div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <p class="text-muted fs-5 mb-0" style="border-left: 3px solid #c39b2e; padding-left: 20px;">
                        काल सर्प दोष, पितृ दोष या ग्रह दोष जीवन में मुश्किलें, देरी और मानसिक तनाव पैदा कर सकते हैं। महामृत्युंजय जप, नवग्रह शांति, रुद्राभिषेक जैसी सही तरीके से की गई पूजा जीवन में अच्छे बदलाव, शांति और स्थिरता लाती है। </p>
                </div>
            </div>

            <div class="row g-4">

                <div class="col-md-4">
                    <div class="premium-service-card">
                        <div class="service-img-box">
                            <img src="images/images/vastu.jpg" alt="वास्तुशास्त्र" class="w-100">
                            <div class="service-overlay"></div>
                            <span class="service-tag">वास्तु संबंधी बाधाएं</span>
                        </div>

                        <div class="service-info text-center p-4">
                            <h3 class="fw-bold h4 mb-3">|| वास्तुशास्त्र ||</h3>
                            <p class="text-muted mb-4" style="font-size: 0.95rem; line-height: 1.6;">किसी बिल्डिंग की अंदरूनी और बाहरी बनावट, साथ ही उसके अंदर के वाइब्रेशन का हमारी ज़िंदगी पर बहुत बड़ा असर पड़ता है। ये वाइब्रेशन बिल्डिंग में अच्छे या बुरे बदलाव ला सकते हैं।</p>
                            <a href="contact.php" class="service-link-btn">और पढ़ें<i class="fas fa-arrow-right ms-2"></i></a>

                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="premium-service-card">
                        <div class="service-img-box">
                            <img src="images/images/ved.jpg" alt="वैदिक शास्त्र" class="w-100">
                            <div class="service-overlay"></div>
                            <span class="service-tag">आरोग्य व दीर्घायुष्यासाठी</span>
                        </div>
                        <div class="service-info text-center p-4">
                            <h3 class="fw-bold h4 mb-3">|| वैदिक विज्ञान ||</h3>
                            <p class="text-muted mb-4" style="font-size: 0.95rem; line-height: 1.6;">इंसान के जन्म का मकसद पाने के लिए, सच्चे मन से भगवान की पूजा करने या मंत्रों का जाप करने से भगवान का आशीर्वाद मिलता है।</p>
                            <a href="contact.php" class="service-link-btn">और पढ़ें<i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="premium-service-card">
                        <div class="service-img-box">
                            <img src="images/images/jyoti.jpg" alt="ज्योतिष शास्त्र" class="w-100">
                            <div class="service-overlay"></div>
                            <span class="service-tag">शांती व यशासाठी</span>
                        </div>
                        <div class="service-info text-center p-4">
                            <h3 class="fw-bold h4 mb-3">|| ज्योतिष शास्त्र ||</h3>
                            <p class="text-muted mb-4" style="font-size: 0.95rem; line-height: 1.6;">जन्म की तारीख और समय के अनुसार तैयार की गई कुंडली जीवन में पॉजिटिव और नेगेटिव स्थितियों को बैलेंस करने में मदद करती है।</p>
                            <a href="contact.php" class="service-link-btn">और पढ़ें<i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Service End -->

    <!-- Testimonial Start -->
    <section class="testimonial-contact-section py-5" style="background-color: #fffaf5; font-family: 'Mukta', sans-serif;">
        <div class="container">
            <div class="row g-5 align-items-center">

                <div class="col-lg-6">
                    <div class="testimonial-side pe-lg-4">
                        <h4 class="text-orange fw-bold text-uppercase mb-2" style="color: #ff8c00; letter-spacing: 2px;">प्रतिक्रिया</h4>
                        <h2 class="display-6 fw-bold mb-4"><br><span style="color: #ff8c00;">संतुष्ट ग्राहक जो हम पर भरोसा करते हैं</span></h2>
                        <div class="swiper testimonial-swiper-mini">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial-mini-card p-4 bg-white shadow-sm" style="border-radius: 15px; border-left: 5px solid #ff8c00;">
                                        <div class="star-rating mb-2" style="color: #ffc107; font-size: 0.8rem;">
                                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                        </div>
                                        <p class="fs-6 italic" style="color: #555;">"सचिन गुरुजी द्वारा सुझाए गए वास्तु बदलावों से हमारे घर में बहुत पॉजिटिविटी आई है। नॉन-डिस्ट्रक्टिव उपाय बहुत असरदार रहे हैं।"</p>
                                        <div class="d-flex align-items-center mt-3">
                                            <img src="images/homepage-1/avatar/img-01.png" class="rounded-circle me-3" width="110" height="100">
                                            <h3 class="fw-bold mb-0">अमोल सोनवणे, <span class="fw-normal text-muted">पुणे</span></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-mini-card p-4 bg-white shadow-sm" style="border-radius: 15px; border-left: 5px solid #ff8c00;">
                                        <div class="star-rating mb-2" style="color: #ffc107; font-size: 0.8rem;">
                                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                        </div>
                                        <p class="fs-6 italic" style="color: #555;">"गुरुजी ने लड़की की शादी की सभी रस्में बहुत ही साइंटिफिक तरीके से कीं। उन्होंने मंत्रों के जाप और रस्मों का महत्व बहुत अच्छे से समझाया।"</p>
                                        <div class="d-flex align-items-center mt-3">
                                            <img src="images/homepage-1/avatar/img-02.png" class="rounded-circle me-3" width="110" height="100">
                                            <h3 class="fw-bold mb-0">श्रीमती. आशालता पाटील, <span class="fw-normal text-muted">नाशिक</span></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination mt-4 position-relative"></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="contact-form-card p-5 bg-white shadow-lg" style="border-radius: 25px; border-top: 8px solid #ff8c00;">
                        <h3 class="fw-bold mb-2">चर्चा के लिए संपर्क करें।</h3>
                        <p class="text-muted mb-4">अपनी समस्याओं को हल करने के लिए आज ही हमसे संपर्क करें।</p>
                        <form action="contact-process.php" method="POST">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">नाम</label>
                                    <input type="text" name="name" class="form-control custom-input" placeholder="अपना नाम" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">मोबाइल नंबर</label>
                                    <input type="tel" name="phone" class="form-control custom-input" placeholder="९१XXXXXXXX" required>
                                </div>
                                <div class="col-12">
                                    <label class="form-label fw-bold">सेवा का प्रकार</label>
                                    <select name="service" class="form-select custom-input">
                                        <option selected>चुनना...</option>
                                        <option>वास्तु शास्त्र</option>
                                        <option>ज्योतिष शास्त्र</option>
                                        <option>वैदिक विज्ञान</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label fw-bold">संदेश</label>
                                    <textarea name="message" class="form-control custom-input" rows="3" placeholder="तुमची समस्या थोडक्यात लिहा..."></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-orange w-100 py-3 mt-2 fw-bold text-uppercase">जानकारी भेजें</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Testimonial End -->

</div>
<!-- Page Content End -->

<script>
    var testimonialSwiperMini = new Swiper(".testimonial-swiper-mini", {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        autoplay: {
            delay: 4500,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
</script>
<?php include 'hindi/footer.php'; ?>