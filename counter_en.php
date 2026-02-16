
<style>
	/* Section Background */
.premium-counter-section {
    background-color: #fff9f2; /* Light Vedic Cream */
    font-family: 'Mukta', sans-serif;
}

/* Container Box */
.counter-wrapper {
    background: #ffffff;
    border-radius: 15px;
    border: 1px solid #ffe0b2;
    overflow: hidden;
}

/* Individual Item Box */
.counter-item-box {
    transition: all 0.3s ease;
    position: relative;
}

.counter-item-box:hover {
    background-color: #fff3e0;
}

/* Custom Border between columns */
.border-end-custom {
    border-right: 1px solid #eee;
}

/* Icons */
.counter-icon {
    font-size: 2.5rem;
    color: #D32F2F; /* Sacred Red */
    margin-bottom: 15px;
}

/* Numbers */
.counter-number {
    font-size: 3rem;
    font-weight: 800;
    color: #3E2723; /* Dark Chocolate Brown */
    line-height: 1;
    margin-bottom: 10px;
}

.counter-number .plus {
    color: #FFB300; /* Golden Yellow */
    margin-left: 5px;
}

/* Titles */
.counter-title {
    font-size: 1.4rem;
    font-weight: 700;
    color: #D32F2F;
    margin-bottom: 8px;
    letter-spacing: 1px;
}

/* Description */
.counter-desc {
    font-size: 1rem;
    color: #777;
    margin-bottom: 0;
}

/* Responsive */
@media (max-width: 767px) {
    .border-end-custom {
        border-right: none;
        border-bottom: 1px solid #eee;
    }
}
</style>


<section class="premium-counter-section py-5">
    <div class="container">
        <div class="counter-wrapper shadow-sm">
            <div class="row g-0">
                
                <div class="col-md-4 border-end-custom">
                    <div class="counter-item-box text-center p-4">
                        <div class="counter-icon">
                            <i class="fas fa-dharmachakra"></i>
                        </div>
                        <div class="counter-number">
                            <span class="numinate" data-to="2500">0</span><span class="plus">+</span>
                        </div>
                        <h3 class="counter-title">|| Vedic Science ||</h3>
                        <p class="counter-desc">Accurate horoscope analysis and guidance</p>
                    </div>
                </div>

                <div class="col-md-4 border-end-custom">
                    <div class="counter-item-box text-center p-4">
                        <div class="counter-icon">
                            <i class="fas fa-om"></i>
                        </div>
                        <div class="counter-number">
                            <span class="numinate" data-to="1800">0</span><span class="plus">+</span>
                        </div>
                        <h3 class="counter-title">|| Astrology ||</h3>
                        <p class="counter-desc">Vedic guidelines and puja guidance</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="counter-item-box text-center p-4">
                        <div class="counter-icon">
                            <i class="fas fa-kaaba"></i>
                        </div>
                        <div class="counter-number">
                            <span class="numinate" data-to="1200">0</span><span class="plus">+</span>
                        </div>
                        <h3 class="counter-title">|| Vastu Consulting ||</h3>
                        <p class="counter-desc">Sacred Vastu remedies for prosperity</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>



<!-- This script is used to animate the counter section -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    jQuery(document).ready(function($) {
        var a = 0;
        $(window).scroll(function() {
            var oTop = $('.premium-counter-section').offset().top - window.innerHeight;
            if (a == 0 && $(window).scrollTop() > oTop) {
                $('.numinate').each(function() {
                    var $this = $(this),
                        countTo = $this.attr('data-to');
                    $({
                        countNum: $this.text()
                    }).animate({
                        countNum: countTo
                    }, {
                        duration: 3000,
                        easing: 'swing',
                        step: function() {
                            $this.text(Math.floor(this.countNum));
                        },
                        complete: function() {
                            $this.text(this.countNum);
                        }
                    });
                });
                a = 1;
            }
        });
    });
</script>