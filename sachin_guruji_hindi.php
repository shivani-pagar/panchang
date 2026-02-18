<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
	jQuery(document).ready(function($) {
		$('.numinate').each(function() {
			var $this = $(this),
				countTo = $this.attr('data-to');

			$({
				countNum: $this.text()
			}).animate({
				countNum: countTo
			}, {
				duration: 2000, // Duration of animation
				easing: 'swing',
				step: function() {
					$this.text(Math.floor(this.countNum));
				},
				complete: function() {
					$this.text(this.countNum);
				}
			});
		});
	});
</script>

<div class="bgcounter mt-3">
	<div class="row g-0 justify-content-center" style="padding: 15px; border-radius: 20px; background-image: linear-gradient(1deg, #fdfcf7bf 50%, transparent); border: 1px solid #ffffff;">
		<div class="col-12">
			<div>
				<h2>श्री. सचिन जोशी गुरुजी</h2>
				<p>अधिक जानकारी के लिए, <strong>Call: <a href="tel:+919552095159;">(+९१) ९५५२० ९५१५९</a></strong></p>
			</div>
		</div>
		<div class="col-6 col-md-4">
			<div class="pbminfotech-fidbox-style-7">
				<div class="pbminfotech-fld-contents">
					<div class="pbminfotech-fid-inner">
						<span data-appear-animation="animateDigits" data-from="0" data-to="25" data-interval="5" class="numinate completed">25</span>
						<sub>+</sub>
					</div>
					<h3 class="pbminfotech-fid-title"><span>वर्षों का अनुभव</span></h3>
				</div>
			</div>
		</div>
		<div class="col-6 col-md-4">
			<div class="pbminfotech-fidbox-style-7">
				<div class="pbminfotech-fld-contents">
					<div class="pbminfotech-fid-inner">
						<span data-appear-animation="animateDigits" data-from="0" data-to="1000" data-interval="5" class="numinate completed">1000</span>
						<sub>+</sub>
					</div>
					<h3 class="pbminfotech-fid-title"><span>फ़ोन पर सलाह</span></h3>
				</div>
			</div>
		</div>
		<div class="col-6 col-md-4">
			<div class="pbminfotech-fidbox-style-7">
				<div class="pbminfotech-fld-contents">
					<div class="pbminfotech-fid-inner">
						<span data-appear-animation="animateDigits" data-from="0" data-to="5000" data-interval="5" class="numinate completed">5000</span>
						<sub>+</sub>
					</div>
					<h3 class="pbminfotech-fid-title"><span>साक्षरता अध्ययन</span></h3>
				</div>
			</div>
		</div>
		<div class="col-6 col-md-4">
			<div class="pbminfotech-fidbox-style-7">
				<div class="pbminfotech-fld-contents">
					<div class="pbminfotech-fid-inner">
						<span data-appear-animation="animateDigits" data-from="0" data-to="100" data-interval="5" class="numinate completed">100</span>
						<sub>+</sub>
					</div>
					<h3 class="pbminfotech-fid-title"><span>वस्तु पूजा</span></h3>
				</div>
			</div>
		</div>
		<div class="col-6 col-md-4">
			<div class="pbminfotech-fidbox-style-7">
				<div class="pbminfotech-fld-contents">
					<div class="pbminfotech-fid-inner">
						<span data-appear-animation="animateDigits" data-from="0" data-to="50" data-interval="5" class="numinate completed">50</span>
						<sub>+</sub>
					</div>
					<h3 class="pbminfotech-fid-title"><span>अंतरराज्यीय पूजा</span></h3>
				</div>
			</div>
		</div>
		<div class="col-6 col-md-4">
			<div class="pbminfotech-fidbox-style-7">
				<div class="pbminfotech-fld-contents">
					<div class="pbminfotech-fid-inner">
						<span data-appear-animation="animateDigits" data-from="0" data-to="15" data-interval="5" class="numinate completed">15</span>
						<sub>+</sub>
					</div>
					<h3 class="pbminfotech-fid-title"><span>देशव्यापी पूजा</span></h3>
				</div>
			</div>
		</div>
	</div>
</div>