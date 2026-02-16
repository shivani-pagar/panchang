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
<?php include 'english/header.php'; ?>
<!-- Title Bar -->
<div class="pbmit-title-bar-wrapper " style="background-image:url(images/guruji/ser-img/bgser.jpg);">
    <div class="container paddcon">
        <div class="row align-items-center">
            <div class="col-md-7 col-lg-7">
                <div class="pbmit-title-bar-content">
                    <div class="pbmit-title-bar-content-inner">
                        <div class="pbmit-tbar">
                            <div class="pbmit-tbar-inner container">
                                <h1 class="pbmit-tbar-title">Worship</h1>
                            </div>
                        </div>
                        <div class="pbmit-breadcrumb">
                            <div class="pbmit-breadcrumb-inner">
                                <span><a title="" href="index.php" class="home"><span>Home</span></a></span>
                                <span class="sep">-</span>
                                <span><span class="post-root post post-post current-item">Worship</span></span>
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
<div class="mantra-ribbon-container">
    <div class="mantra-ribbon">
        <div class="mantra-icon-left"><i class="fas fa-om"></i></div>
        <div class="mantra-text-content">
            <p class="sanskrit-shlok">
                Pushtipate Namastubhya Namah Shankarasoonve ॥ Brahmabhutaya Devaya Sarvasiddhipradaya to ॥
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
                    <h3 class="pbmit-title">Puja Rituals – Detailed information according to Vedic scriptures</h3>
                    <p>In the Vedic tradition, worship is not just a religious ritual, but a way to connect with God,
                        maintain the rhythm (balance of creation) through one's duties, and achieve self-purification.
                        Mantras, sacrifices, yagnas, and fire rituals are given much greater importance in Vedic worship
                        than in modern worship.
                        <br><br>
                        The purpose of Vedic worship is not only to worship idols, but also to invoke divine powers through mantras,
                        yajnakarma, and agnihotra, to offer them, and finally to immerse them. Each act is accompanied by the recitation
                        of specific mantras.
                    </p>


                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'book-now.php'; ?>

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
                        <h3 class="accent-title">Main Principle of Puja Ritual</h3>
                        <p>The purpose of Vedic worship is not only to worship idols, but also to
                            invoke divine powers through mantras, yajnakarma, and agnihotra, to offer
                            them, and finally to immerse them. Each act is accompanied by the recitation
                            of specific mantras.</p>
                    </div>
                </div>
            </div>
        </div>

        <hr class="section-divider">

        <div class="row">
            <div class="col-lg-5">
                <div class="ritual-info-group">
                    <h2 class="ritual-header"><i class="fas fa-clipboard-list"></i>Preparations for worship</h2>

                    <div class="info-item">
                        <div class="info-icon"><i class="fas fa-check-circle"></i></div>
                        <div class="info-text">
                            <h4>Purity of body and location:</h4>
                            <p>Bathing and wearing clean clothes, purifying the place of worship (mandap or yajnashala)
                                with Ganga water or pure water.</p>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon"><i class="fas fa-check-circle"></i></div>
                        <div class="info-text">
                            <h4>Pooja Content:</h4>
                            <div class="samagri-container">
                                <span class="samagri-box">flowers</span>
                                <span class="samagri-box">akshata</span>
                                <span class="samagri-box">kumkum</span>
                                <span class="samagri-box">sesame</span>
                                <span class="samagri-box">durva</span>
                                <span class="samagri-box">water</span>
                                <span class="samagri-box">fragrance</span>
                                <span class="samagri-box">lamp</span>
                                <span class="samagri-box">incense</span>
                                <span class="samagri-box">offerings</span>
                                <span class="samagri-box">samidha </span>
                                <span class="samagri-box">ghee </span>
                                <span class="samagri-box">yajna kund</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="ritual-info-group">
                    <h2 class="ritual-header"><i class="fas fa-vihara"></i>Main Ritual Process</h2>

                    <div class="process-step">
                        <span class="step-num">०1</span>
                        <div class="step-body">
                            <h4>Resolution (making a resolution)</h4>
                            <p>Explaining the purpose of worship.<span class="mantra-text">"I resolve to please Sri Parameshwara for the accomplishment of all my works"</span></p>
                        </div>
                    </div>

                    <div class="process-step">
                        <span class="step-num">०2</span>
                        <div class="step-body">
                            <h4>Invocation and provision of seats</h4>
                            <p>Invoking the deity.<span class="mantra-text">"I invoke, I place, I offer the seat"</span></p>
                        </div>
                    </div>

                    <div class="process-step">
                        <span class="step-num">०3</span>
                        <div class="step-body">
                            <h4>Padya, Arghya, Achamana</h4>
                            <p>Offering Padya (foot washing), Arghya (hand and foot washing) and Achaman (mouth cleansing).</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="ritual-steps-section mt-5">
            <h2 class="ritual-section-title text-center mb-5">
                <i class="fas fa-dharmachakra"></i>Process of worship
            </h2>

            <div class="ritual-steps-grid-new">

                <div class="ritual-step-card">
                    <div class="ritual-step-icon"><i class="fas fa-bath"></i></div>
                    <h3>Bath and Garment Ornaments —</h3>
                    <p>Bathing the deity (with mantra water) and offering clothes and ornaments.</p>
                </div>

                <div class="ritual-step-card">
                    <div class="ritual-step-icon"><i class="fas fa-spa"></i></div>
                    <h3>Offerings of odors, flowers, incense, lamps —</h3>
                    <p>Carrying incense (sandalwood), flowers (flowers), incense sticks (incense sticks), and lamps (lamps).</p>
                </div>

                <div class="ritual-step-card">
                    <div class="ritual-step-icon"><i class="fas fa-apple-alt"></i></div>
                    <h3>Sacrifice and tambul offering —</h3>
                    <p>Offering food, fruits, sweets (naivedya), then giving betel leaves (tambul).</p>
                </div>

                <div class="ritual-step-card">
                    <div class="ritual-step-icon"><i class="fas fa-om"></i></div>
                    <h3>Chanting and praise —</h3>
                    <p>Chanting of deity's mantras, hymns, recitation of Richas. E.g.
                        “Om Namo Bhagvate Vasudevai” or “Om Trimbakam Yajamhe”.</p>
                </div>

                <div class="ritual-step-card">
                    <div class="ritual-step-icon"><i class="fas fa-fire"></i></div>
                    <h3>Home / Yagya Karma —</h3>
                    <p>During Agnihotra, offer ghrita and samidha offerings while chanting Vedic mantras.
                        For each offering: It is important to say “Swaha”.</p>
                </div>

                <div class="ritual-step-card">
                    <div class="ritual-step-icon"><i class="fas fa-hands-praying"></i></div>
                    <h3>Aarti and prayer —</h3>
                    <p>Perform aarti by lighting the lamp and finally pray with devotion.</p>
                </div>

                <div class="ritual-step-card">
                    <div class="ritual-step-icon"><i class="fas fa-sync"></i></div>
                    <h3>Parikrama and Salutation —</h3>
                    <p>To circumambulate (circumambulate) around the deity and offer obeisance.</p>
                </div>

                <div class="ritual-step-card">
                    <div class="ritual-step-icon"><i class="fas fa-leaf"></i></div>
                    <h3>Apology and Absolution —</h3>
                    <p>Asking for forgiveness for any mistakes made during worship and peacefully disposing of the deity.</p>
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
                            <h2 class="mini-title"><i class="fas fa-om"></i>Importance of mantras</h2>
                            <p class="phi-desc">
                                Mantracharan is the most important thing in Vedic worship. These mantras
                                are chanted to gods like Agni, Vayu, Surya, Indra, Varuna, because it is
                                through fire that offerings reach the gods. Mantras are vibrations in the
                                form of sound, which deepen the connection between the worshipper and the universe.
                            </p>

                            <h2 class="mini-title mt-4"><i class="fas fa-scroll"></i> Philosophy behind Vedic worship</h2>
                            <div class="phi-steps">
                                <div class="phi-step">
                                    <span class="step-bullet"><i class="fas fa-fire-alt"></i></span>
                                    <div>
                                        <h4>Sacrifice means purification of worship —</h4>
                                        <p>This is not just a belief, but a deep process that connects us
                                            to the energy of the universe.</p>
                                    </div>
                                </div>
                                <div class="phi-step">
                                    <span class="step-bullet"><i class="fas fa-balance-scale"></i></span>
                                    <div>
                                        <h4>Preserving the seasons of creation —</h4>
                                        <p>The natural balance in the universe is maintained through offerings, mantras, and rituals.</p>
                                    </div>
                                </div>
                                <div class="phi-step">
                                    <span class="step-bullet"><i class="fas fa-heart"></i></span>
                                    <div>
                                        <h4>Respect for divinity —</h4>
                                        <p>Every offering is a sacrifice of our ego.</p>
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