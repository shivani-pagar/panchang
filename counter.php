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

<section>
	<div class="container-fluid counter-six-box">
		<div class="counter-six">
			<div class="row g-0 justify-content-center">

				<div class="col-md-2">
					<div class="pbminfotech-fidbox-style-7">
						<div class="pbminfotech-fld-contents">
							<div class="pbminfotech-fid-inner">
								<span data-appear-animation="animateDigits" data-from="0" data-to="1500" data-interval="5" class="numinate completed">1500</span>
							</div>
							<h3 class="pbminfotech-fid-title">
								<span>कालसर्प योग पूजा</span>
							</h3>
						</div>
					</div>
				</div>

				<div class="col-md-2">
					<div class="pbminfotech-fidbox-style-7">
						<div class="pbminfotech-fld-contents">
							<div class="pbminfotech-fid-inner">
								<span data-appear-animation="animateDigits" data-from="0" data-to="800" data-interval="5" class="numinate completed">800</span>
							</div>
							<h3 class="pbminfotech-fid-title">
								<span>पितृ दोष</span>
							</h3>
						</div>
					</div>
				</div>

				<div class="col-md-2">
					<div class="pbminfotech-fidbox-style-7">
						<div class="pbminfotech-fld-contents">
							<div class="pbminfotech-fid-inner">
								<span data-appear-animation="animateDigits" data-from="0" data-to="1200" data-interval="5" class="numinate completed">1200</span>
							</div>
							<h3 class="pbminfotech-fid-title">
								<span>महामृत्युंजय पूजा</span>
							</h3>
						</div>
					</div>
				</div>

				<div class="col-md-2">
					<div class="pbminfotech-fidbox-style-7">
						<div class="pbminfotech-fld-contents">
							<div class="pbminfotech-fid-inner">
								<span data-appear-animation="animateDigits" data-from="0" data-to="500" data-interval="5" class="numinate completed">500</span>
							</div>
							<h3 class="pbminfotech-fid-title">
								<span>रुद्राभिषेक</span>
							</h3>
						</div>
					</div>
				</div>

				<div class="col-md-2">
					<div class="pbminfotech-fidbox-style-7">
						<div class="pbminfotech-fld-contents">
							<div class="pbminfotech-fid-inner">
								<span data-appear-animation="animateDigits" data-from="0" data-to="900" data-interval="5" class="numinate completed">900</span>
							</div>
							<h3 class="pbminfotech-fid-title">
								<span>नवग्रह शांती</span>
							</h3>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>