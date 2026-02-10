<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
			<script>
			    jQuery(document).ready(function ($) {
    $('.numinate').each(function () {
        var $this = $(this),
            countTo = $this.attr('data-to');

        $({ countNum: $this.text() }).animate(
            { countNum: countTo },
            {
                duration: 2000, // Duration of animation
                easing: 'swing',
                step: function () {
                    $this.text(Math.floor(this.countNum));
                },
                complete: function () {
                    $this.text(this.countNum);
                }
            }
        );
    });
});

			</script>
		
						<div class="bgcounter mt-3">
			<div class="row g-0 justify-content-center" style="padding: 15px;
    border-radius: 20px;
    background-image: linear-gradient(1deg, #fdfcf7bf 50%, transparent);
    border: 1px solid #ffffff;">
			    <div class="col-12">
			        <div>
			            <h2>Pandit Rakesh Tripathi</h2>
			            <p>For more details <strong>call us: <a href="tel:+91 9890702222;">+91 9890702222</a></strong></p>
			        </div> 
			    </div>
							<div class=" col-6 col-md-4">
								<div class="pbminfotech-fidbox-style-7">
									<div class="pbminfotech-fld-contents">
										<div class="pbminfotech-fid-inner">
											<span data-appear-animation="animateDigits" data-from="0" data-to="12" data-interval="5" class="numinate completed">12</span>
										</div>
										<h3 class="pbminfotech-fid-title"><span>Experience.</span></h3>
									</div>
								</div>
							</div>
							<div class=" col-6 col-md-4"> 
								<div class="pbminfotech-fidbox-style-7">
									<div class="pbminfotech-fld-contents">
										<div class="pbminfotech-fid-inner">
											<span data-appear-animation="animateDigits" data-from="0" data-to="2000" data-interval="5" class="numinate completed">2000</span>
											<sub>+</sub>
										</div>
										<h3 class="pbminfotech-fid-title"><span>Best Cosultation on Phone</span></h3>
									</div>
								</div>
							</div>
							<div class=" col-6 col-md-4">
								<div class="pbminfotech-fidbox-style-7">
									<div class="pbminfotech-fld-contents">
										<div class="pbminfotech-fid-inner">
											<span data-appear-animation="animateDigits" data-from="0" data-to="12" data-interval="5" class="numinate completed">12</span>
											<sub>+</sub>
										</div>
										<h3 class="pbminfotech-fid-title"><span> Years of Experience.<br></span></h3>
									</div>
								</div>
							</div>
							<div class=" col-6 col-md-4">
								<div class="pbminfotech-fidbox-style-7">
									<div class="pbminfotech-fld-contents">
										<div class="pbminfotech-fid-inner">
											<span data-appear-animation="animateDigits" data-from="0" data-to="500" data-interval="5" class="numinate completed">500</span>
										</div>
										<h3 class="pbminfotech-fid-title"><span>Pooja as per Shastras.</span></h3>
									</div>
								</div>
							</div>
								<div class=" col-6 col-md-4">
								<div class="pbminfotech-fidbox-style-7">
									<div class="pbminfotech-fld-contents">
										<div class="pbminfotech-fid-inner">
											<span data-appear-animation="animateDigits" data-from="0" data-to="1000" data-interval="5" class="numinate completed">1000</span>
										</div>
										<h3 class="pbminfotech-fid-title"><span>Seperate Pooja<br></span></h3>
									</div>
								</div>
							</div>
								<div class=" col-6 col-md-4">
								<div class="pbminfotech-fidbox-style-7">
									<div class="pbminfotech-fld-contents">
										<div class="pbminfotech-fid-inner">
											<span data-appear-animation="animateDigits" data-from="0" data-to="10" data-interval="5" class="numinate completed">10</span>
										</div>
										<h3 class="pbminfotech-fid-title"><span>Expert Guruji in all Puja.</span></h3>
									</div>
								</div>
							</div>
						</div>
						</div>
			