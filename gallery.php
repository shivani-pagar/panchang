<?php include'header.php';?>



       <div class="pbmit-title-bar-wrapper " style="background-image:url(images/guruji/ser-img/aboubg.jpg);">
            <div class="container paddcon"> 
              <div class="row align-items-center">
                  <div class="col-md-7 col-lg-7 order-md-2">
                       <div class="pbmit-title-bar-content">
                  <div class="pbmit-title-bar-content-inner">
                     <div class="pbmit-tbar">
                        <div class="pbmit-tbar-inner container">
                           <h1 class="pbmit-tbar-title">Gallery</h1> 
                        </div>
                     </div>
                     <div class="pbmit-breadcrumb">
                        <div class="pbmit-breadcrumb-inner">
                           <span><a title="" href="index.php" class="home"><span>Home</span></a></span>
                           <span class="sep">-</span>
                           <span><span class="post-root post post-post current-item">Gallery</span></span>
                        </div>
                     </div>
                  </div>
               </div>
               
               <?php include'rakeshguruji.php';?>
               
            
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
         
         
         
        <section class="" style="z-index:9999;">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-3">
					    <div class="pbmit-heading-subheading-style-1">
									<h4 class="pbmit-subtitle">Gallery</h4>
									<h2 class="pbmit-title">Our<strong>Gallery</strong></h2>
								</div>
					</div>
        </div>
        <div class="row gallery">
            
            
            <div class="col-md-4">
                <img src="images/guruji/gallery/g01.jpg" alt="Image 1" onclick="openLightbox(0)">
            </div>
            <div class="col-md-4">
                <img src="images/guruji/gallery/g02.jpg" alt="Image 2" onclick="openLightbox(1)">
            </div>
            <div class="col-md-4">
                <img src="images/guruji/gallery/g03.jpg" alt="Image 3" onclick="openLightbox(2)">
            </div>
            <div class="col-md-4">
                <img src="images/guruji/gallery/g04.jpg" alt="Image 4" onclick="openLightbox(3)">
            </div>
            <div class="col-md-4">
                <img src="images/guruji/gallery/g05.jpg" alt="Image 5" onclick="openLightbox(4)">
            </div>
             <div class="col-md-4">
                <img src="images/guruji/gallery/g06.jpg" alt="Image 6" onclick="openLightbox(4)">
            </div>
             <div class="col-md-4">
                <img src="images/guruji/gallery/g07.jpg" alt="Image 7" onclick="openLightbox(4)">
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


<?php include'footer.php';?>