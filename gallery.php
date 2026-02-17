<?php include 'header.php'; ?>
<div class="pbmit-title-bar-wrapper" style="background-image:url(images/guruji/ser-img/aboubg.jpg);">
    <div class="container paddcon">
        <div class="row align-items-center">
            <div class="col-md-7 col-lg-7 order-md-2">
                <div class="pbmit-title-bar-content">
                    <div class="pbmit-title-bar-content-inner">
                        <div class="pbmit-tbar">
                            <div class="pbmit-tbar-inner container">
                                <h1 class="pbmit-tbar-title">चित्र व चित्रफीत</h1>
                            </div>
                        </div>
                        <div class="pbmit-breadcrumb">
                            <div class="pbmit-breadcrumb-inner">
                                <span><a title="" href="index.php" class="home"><span>मुख्यपृष्ठ</span></a></span>
                                <span class="sep">-</span>
                                <span><span class="post-root post post-post current-item">चित्र व चित्रफीत</span></span>
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

<section class="" style="z-index:9999;">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-3">
                <div class="pbmit-heading-subheading-style-1">
                    <h4 class="pbmit-subtitle">आमची गॅलरी</h4>
                    <h2 class="pbmit-title">आमची <strong>वैदिक कार्ये</strong></h2>
                </div>
            </div>
        </div>
        <div class="row gallery">
            <div class="col-md-4 mb-4">
                <img src="images/images/img01.jpg" alt="श्री. सचिन जोशी गुरुजी - वैदिक यज्ञ" onclick="openLightbox(0)" class="img-fluid gallery-img" style="height: 300px; object-fit: cover;">
            </div>
            <div class="col-md-4 mb-4">
                <img src="images/images/img02.jpeg" alt="नवचंडी यज्ञ कर्म" onclick="openLightbox(1)" class="img-fluid gallery-img" style="height: 300px; object-fit: cover;">
            </div>
            <div class="col-md-4 mb-4">
                <img src="images/images/img03.jpg" alt="वास्तू शांती पूजा" onclick="openLightbox(2)" class="img-fluid gallery-img" style="height: 300px; object-fit: cover;">
            </div>
            <div class="col-md-4 mb-4">
                <img src="images/images/img04.png" alt="मंगल कार्ये" onclick="openLightbox(3)" class="img-fluid gallery-img" style="height: 300px; object-fit: cover;">
            </div>
            <div class="col-md-4 mb-4">
                <img src="images/images/img05.png" alt="ज्योतिष सल्लामसलत" onclick="openLightbox(4)" class="img-fluid gallery-img" style="height: 300px; object-fit: cover;">
            </div>
            <div class="col-md-4 mb-4">
                <img src="images/images/img06.png" alt="वैदिक कर्मकांड" onclick="openLightbox(5)" class="img-fluid gallery-img" style="height: 300px; object-fit: cover;">
            </div>
            <div class="col-md-4 mb-4">
                <img src="images/images/img07.png" alt="विवाह संस्कार" onclick="openLightbox(6)" class="img-fluid gallery-img" style="height: 300px; object-fit: cover;">
            </div>
            <div class="col-md-4 mb-4">
                <img src="images/images/img08.png" alt="हवन यज्ञ" onclick="openLightbox(7)" class="img-fluid gallery-img" style="height: 300px; object-fit: cover;">
            </div>
            <div class="col-md-4 mb-4">
                <img src="images/images/img09.jpeg" alt="ग्रह शांती पूजा" onclick="openLightbox(8)" class="img-fluid gallery-img" style="height: 300px; object-fit: cover;">
            </div>
            <div class="col-md-4 mb-4">
                <img src="images/images/img10.png" alt="पितृ शांती पूजा" onclick="openLightbox(9)" class="img-fluid gallery-img" style="height: 300px; object-fit: cover;">
            </div>
            <div class="col-md-4 mb-4">
                <img src="images/images/img11.png" alt="रुद्राभिषेक पूजा" onclick="openLightbox(10)" class="img-fluid gallery-img" style="height: 300px; object-fit: cover;">
            </div>
            <div class="col-md-4 mb-4">
                <img src="images/images/img12.jpeg" alt="रुद्राभिषेक पूजा" onclick="openLightbox(10)" class="img-fluid gallery-img" style="height: 300px; object-fit: cover;">
            </div>
        </div>
    </div>
</section>

<!-- Lightbox (Popup Modal) -->
<div id="lightbox" class="lightbox">
    <span class="close" onclick="closeLightbox()">&times;</span>
    <img id="lightbox-img" class="lightbox-img">
    <button class="prev" onclick="changeImage(-1)">&#10094;</button>
    <button class="next" onclick="changeImage(1)">&#10095;</button>
</div>

<script>
    // JavaScript for Lightbox functionality
    const images = [{
            src: "images/images/img01.jpg",
            alt: "श्री. सचिन जोशी गुरुजी - वैदिक यज्ञ"
        },
        {
            src: "images/images/img02.jpeg",
            alt: "नवचंडी यज्ञ कर्म"
        },
        {
            src: "images/images/img03.jpg",
            alt: "वास्तू शांती पूजा"
        },
        {
            src: "images/images/img04.png",
            alt: "मंगल कार्ये"
        },
        {
            src: "images/images/img05.png",
            alt: "ज्योतिष सल्लामसलत"
        },
        {
            src: "images/images/img06.png",
            alt: "वैदिक कर्मकांड"
        },
        {
            src: "images/images/img07.png",
            alt: "विवाह संस्कार"
        },
        {
            src: "images/images/img08.png",
            alt: "हवन यज्ञ"
        },
        {
            src: "images/images/img09.jpeg",
            alt: "ग्रह शांती पूजा"
        },
        {
            src: "images/images/img10.png",
            alt: "पितृ शांती पूजा"
        },
        {
            src: "images/images/img11.png",
            alt: "रुद्राभिषेक पूजा"
        },
        {
            src: "images/images/img12.jpeg",
            alt: "रुद्राभिषेक पूजा"
        }
    ];

    let currentIndex = 0;

    function openLightbox(index) {
        currentIndex = index;
        document.getElementById("lightbox").style.display = "block";
        updateLightboxImage();
    }

    function closeLightbox() {
        document.getElementById("lightbox").style.display = "none";
    }

    function changeImage(direction) {
        currentIndex += direction;
        if (currentIndex < 0) {
            currentIndex = images.length - 1;
        } else if (currentIndex >= images.length) {
            currentIndex = 0;
        }
        updateLightboxImage();
    }

    function updateLightboxImage() {
        const lightboxImg = document.getElementById("lightbox-img");
        lightboxImg.src = images[currentIndex].src;
        lightboxImg.alt = images[currentIndex].alt;
    }

    // Close lightbox when clicking outside the image
    document.getElementById("lightbox").addEventListener("click", function(e) {
        if (e.target !== document.getElementById("lightbox-img") &&
            !e.target.classList.contains("prev") &&
            !e.target.classList.contains("next")) {
            closeLightbox();
        }
    });

    // Keyboard navigation
    document.addEventListener("keydown", function(e) {
        if (document.getElementById("lightbox").style.display === "block") {
            if (e.key === "Escape") {
                closeLightbox();
            } else if (e.key === "ArrowLeft") {
                changeImage(-1);
            } else if (e.key === "ArrowRight") {
                changeImage(1);
            }
        }
    });
</script>

<?php include 'footer.php'; ?>