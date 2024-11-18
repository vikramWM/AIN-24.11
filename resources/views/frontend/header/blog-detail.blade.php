@extends('frontend-layouts.app')

@section('content')
	<style>
	
	.blog-detail-banner-section {
    position: relative;
    overflow: hidden;
    padding-bottom: 34px;
    background-color: #f3fef9;
}
		.banner-section-three .content-column .inner-column {
			padding-top: 0px;
		}
	h1, h2, h3 {
        font-weight: 500;
        color: black;
    }
    h1 {
        font-size: 50px  ;
    }
    
  
    
    .sidebar-page-container.style-two {
    padding-top: 35px;
}

@media only screen and (max-width: 479px) {
    h1 {
        font-size: 24px !important;
        line-height: 1.4em;
    }
}
  h2 span {
    font-size: 25px;
    font-weight: 500;
    margin: 20px 0px 20px 0px;
    color:blue;
}
    h2 span {
        font-size: 25px;
    }
    h3 {
        font-size: 20px  !important;
    }
    h3 span {
        font-size: 20px  !important;
    }
	.place-order {
		background: #d7f0fd;
		color: black;
		padding: 10px 20px;
		border-radius: 5%;
		margin: 10px;
	}
	

	.place-order:hover {
		background: #7e89dd;
		color: white;

	}
	
	.section h2 {
		font-size: 24px;
		color: #333;
		margin-bottom: 15px;
	}

	.links {
		display: flex;
		flex-wrap: wrap;
		gap: 5px;
	}

	.links a {
		background: #007bff;
		color: #fff;
		text-decoration: none;
		padding: 5px 10px;
		border-radius: 5px;
		font-size: 16px;
		transition: background 0.3s, transform 0.3s;
	}

	.links a:hover {
		background: #0056b3;
		transform: translateY(-2px);
	}

	.links a:active {
		background: #004080;
		transform: translateY(0);
	}
	.image {
		width: 100%;
		height: 100%;
		overflow: hidden;
		display: flex;
		justify-content: center;
		align-items: center;
	}

	.image img {
		width: 100%;
		height: 100%;
		object-fit: cover; 
		display: block;
	}
	
	p {
	    text-align: justify; 
	}
   
   .blog-detail-banner-section .content-box {
    position: relative;
    max-width: 100%;
}

</style>
<!-- Page Breadcrumb -->
			<div style="text-align: center;">
            <ul class="page-breadcrumb">
			
			</ul>
            </div>
            <div class="row clearfix">
				
				<!-- Content Column -->
				<div class="content-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<!-- <div class="pattern-layer-one" style="background-image: url(images/main-slider/pattern-1.png)"></div> -->
						<div class="icon-layer" style="background-image: url(images/icons/icon-2.png)"></div>
						<!-- <div class="icon-layer-two" style="background-image: url(images/icons/icon-5.png)"></div> -->
						<section class="event-section-two py-0 my-0" style="background-image:url(images2/background/pattern-18.png)">
							
							<!-- Blog Detail Banner Section -->
							<section class="blog-detail-banner-section">
							
								<div class="auto-container">
									
									<div class="content-box pt-5">
										<!--<div class="title">Education</div>-->
										<h1>{{$data['blog']['tittle']}}</h1>
										
									</div>
								</div>
							</section>
							<!-- End Blog Detail Banner Section -->
							
							<!--Sidebar Page Container-->
							<div class="sidebar-page-container style-two mb-0 pb-0">
								<div class="auto-container">
									<div class="row clearfix">
										
										<!-- Content Side -->
										<div class="content-side col-lg-8 col-md-12 col-sm-12">
											<div class="blog-detail">
												<div class="inner-box">
													
													<div class="blockquote-box mt-0">
														<div class="row clearfix">
															<!--<div class="blockquote-column col-lg-6 col-md-6 col-sm-12">-->
															<!--	<div class="inner-column">-->
															<!--		<span class="quote-icon"><img src="images/icons/quote-icon-1.png" alt="" /></span>-->
															<!--		<p>{{$data['blog']['tittle']}} </p>-->
															<!--		<span class="quote-icon-two"><img src="images/icons/quote-icon-2.png" alt="" /></span>-->
															<!--	</div>-->
															<!--</div>-->
															<div class="col-lg-12 col-md-12 col-sm-12">
																<div class="inner-column">
																	<div class="image">
																		<img src="{{$data['blog']['images']}}" alt="" />
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="bold-text"><div class="bold-text">{!! $data['blog']['content'] !!}</div></div>
													
													<!--<div class="post-share-options">-->
													<!--	<ul class="tags">-->
													<!--		<li><span class="icon fa fa-tag"></span></li>-->
													<!--		<li><a href="#">Education</a></li>-->
													<!--		<li><a href="#">Course</a></li>-->
													<!--	</ul>-->
													<!--</div>-->
													
													<!-- Related Projects -->
												
													
												
													
												</div>
											</div>
										</div>
										
										<!-- Sidebar Side -->
										<div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
											<aside class="sidebar sticky-top">
												
												<!-- Search -->
												<div class="sidebar-widget search-box" style="background-color: aliceblue;">
													<form id="orderForm"  enctype="multipart/form-data">
														<div class="form-header text-center p-2">
															<h2 class="order-now">Pricing</h2>
														</div>
														@csrf
														<div class="contact-form p-4">
																
															<div class="row">
																<div class="col-md-12">
																	<div class="form-group">
																		<label for="serviceSelect">Services</label>
																		<select required id="serviceSelect" style="background-color:#f1f1f1; height: 45px;" class="form-control">
																			<option value="">Select Services</option>
																			<option value="Assignment">Assignment</option>
																			<option value="Dissertation">Dissertation</option>
																			<option value="Thesis">Thesis</option>
																			<option value="Research Project">Research Project</option>
																		</select>
																	</div>
																</div>
																<div class="col-md-12 d-none">
																	<div class="form-group">
																		<label for="workTypeSelect">Work Type</label>
																		<select id="workTypeSelect" style="background-color:#f1f1f1; height: 45px;" class="form-control">
																			<option value="">Select Work Type</option>
																			<option selected value="Standard">Standard</option>
																			<option value="FirstClass">First Class Work</option>
																		</select>
																	</div>
																</div>
																<div class="col-md-12" id="subjectContainer">
																	<div class="form-group">
																		<label for="subjectSelect">Subject</label>
																		<select required id="subjectSelect" style="background-color:#f1f1f1; height: 45px;" class="form-control">
																			<option value="">Select Subject</option>
																			<option value="Matlab">Matlab</option>
																			<option value="Data Science">Data Science</option>
																			<option value="Engineering">Engineering</option>
																			<option value="App Development">App Development</option>
																			<option value="Web Development">Web Development</option>
																			<option value="Exam">Exam</option>
																			<option value="Public Health">Public Health</option>
																			<option value="Presentation">Presentation (PPT)</option>
																			<option value="Portfolio">Portfolio</option>
																			<option value="Research Report">Research Report</option>
																			<option value="Business Management">Business Management</option>
																			<option value="Project Management">Project Management</option>
																			<option value="Essay">Essay</option>
																			<option value="HRM">HRM</option>
																			<option value="Economic">Economic</option>
																			<option value="Other">Other</option>
																		</select>
																	</div>
																</div>
																
																<div class="col-md-6" id="selectUrgency">
																	<div class="form-group">
																		<label for="urgencySelect">Select Urgency</label>
																		<select required id="urgencySelect" style="background-color:#f1f1f1; height: 45px;" class="form-control">
																			<option value="">Select Urgency</option>
																			<option value="1">1 Day</option>
																			<option value="2">2 Days</option>
																			<option value="3">3 Days</option>
																			<option value="4">4 Days</option>
																			<option value="5">5 Days</option>
																			<option value="6">6 Days</option>
																			<option value="7">7 Days</option>
																			<option value="8">8 Days</option>
																			<option value="9">9 Days</option>
																			<option value="10">10 Days</option>
																			<option value="11">11 Days</option>
																			<option value="12">12 Days</option>
																			<option value="13">13 Days</option>
																			<option value="14">14 Days</option>
																			<option value="15">15 Days</option>
																			<option value="16 to 20">16-20 Days</option>
																			<option value="21+">21+ Days</option>
																		</select>
																	</div>
																</div>
																<div class="col-md-6" id="wordCountContainer">
																	<div class="form-group">
																		<label id="wordLabel" for="wordCount">Word Count</label>
																		<input required type="number" id="wordCount" min="250" value="250" style="background-color:#f1f1f1; height: 45px;" class="form-control" placeholder="Enter Count">
																	</div>
																</div>
																<div class="col-md-12">
																	<div class="Estimate-price" style="text-align: center; position: relative; z-index: 1;">
																		<label style="font-size: 16px; line-height: 18px; color: #434343;">Estimated Price</label>
																		<span class="basePrice" style="text-decoration: line-through; color: #616161; font-size: 18px; line-height: 20px; margin: 0 10px;">£ 100</span>
																		<span class="priceoff" style="font-size: 18px; font-family: robotomedium; text-transform: uppercase; background: #5c7a36; border-radius: 3px; padding: 3px; color: #fff;">40% OFF</span>
																		<p class="symbole text-center" style="color: #f58e0e; font-size: 36px; line-height: 40px; font-family: robotomedium; margin: 8px 0 15px;">£ <span style="color: #f58e0e; font-size: 36px; line-height: 40px; font-family: robotomedium; padding: 8px 0 15px;" class="value offerPrice">75</span></p>
																	</div>
																</div>
															</div>

															<script>
																$(document).ready(function() {
																	function calculatePrice() {
																		var service = $('#serviceSelect').val();
																		var type = $('#workTypeSelect').val();
																		var urgency = $('#urgencySelect').val();
																		var wordCount = Math.max($('#wordCount').val(), 250);

																		var basePricePerWord = 0.03;
																		var basePrice = basePricePerWord * wordCount;
																		// Apply word count multipliers
                                										if (wordCount >= 250 && wordCount < 500) {
                                											basePrice *= 2.67;
                                										} else if (wordCount >= 500 && wordCount < 1000) {
                                											basePrice *= 2.22;
                                										} else if (wordCount >= 1000 && wordCount < 2000) {
                                											basePrice *= 1.94;
                                										} else if (wordCount >= 2000 && wordCount < 3000) {
                                											basePrice *= 1.67;
                                										} else if (wordCount >= 3000 && wordCount < 4000) {
                                											basePrice *= 1.30;
                                										} else if (wordCount >= 4000 && wordCount < 5000) {
                                											basePrice *= 1.13;
                                										} else if (wordCount >= 5000) {
                                											basePrice *= 1.17;
                                										}

																		var serviceMultiplier = service === 'Dissertation' || service === 'Thesis' || service == 'Research Project' ? 1.1 : 1;
																		var typeMultiplier = type === 'FirstClass' ? 1.3 : 1;
																		var urgencyMultiplier = 1; 

																		switch (urgency) {
																			case '1': urgencyMultiplier = 2.0; break;
																			case '2': urgencyMultiplier = 1.5; break;
																			case '3': urgencyMultiplier = 1.4; break;
																			case '4': urgencyMultiplier = 1.3; break;
																			case '5': urgencyMultiplier = 1.2; break;
																			case '6': urgencyMultiplier = 1.15; break;
																			case '7': urgencyMultiplier = 1.1; break;
																			case '8': urgencyMultiplier = 1.09; break;
																			case '9': urgencyMultiplier = 1.07; break;
																			case '10': urgencyMultiplier = 1.05; break;
																			case '11': urgencyMultiplier = 1.04; break;
																			case '12': urgencyMultiplier = 1.03; break;
																			case '13': urgencyMultiplier = 1.02; break;
																			case '14': urgencyMultiplier = 1.01; break;
																			case '15': urgencyMultiplier = 1.0; break;
																			case '16 to 20': urgencyMultiplier = 0.95; break;
																			case '21+': urgencyMultiplier = 0.9; break;
																		}

																		basePrice *= serviceMultiplier * typeMultiplier * urgencyMultiplier;

																		var discountPercentage = parseFloat($('.priceoff').text().replace('% OFF', '').trim()) / 100;
																		var discount = basePrice * discountPercentage;

																		var finalPrice = basePrice - discount;

																		// Update the price quotation and estimated price
																		$('.offerPrice').text(finalPrice.toFixed(2));
																		$('.basePrice').text('£ ' + basePrice.toFixed(2));
																	}

																	// Trigger price calculation when any input changes
																	$('#serviceSelect, #workTypeSelect, #urgencySelect, #wordCount').on('change keyup', function() {
																		calculatePrice();
																	});

																	// Trigger initial calculation
																	calculatePrice();
																});
															</script>
															

															<!--<div class="policy_agree">-->
															<!--	<input type="checkbox" required="">&nbsp;I agree with Privacy Policy and Terms &amp;-->
															<!--	Conditions (Recommended)-->
															<!--</div>-->
															<!--<div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.site_key') }}"></div>-->
															<div class="col-md-12 text-center mt-2">
																 <button class=" place-order" type="submit">Place Order</button> 
																<!--<a class=" place-order" href="/upload-your-assignment" class="place-order">Place Order</a>-->
															</div>
														</div>
													</form>
													<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/crypto-js.min.js"></script>
													<script>
														document.getElementById('orderForm').addEventListener('submit', function(event) {
															event.preventDefault();

															// Define encryption key and initialization vector
															var encryptionKey = "your-encryption-key"; // Replace with a strong key
															var iv = CryptoJS.enc.Hex.parse('1234567890123456'); // Example IV

															// Collect form data
															var service = document.getElementById('serviceSelect').value;
															var workType = document.getElementById('workTypeSelect').value;
															var subject = document.getElementById('subjectSelect').value;
															var urgency = document.getElementById('urgencySelect').value;
															var wordCount = document.getElementById('wordCount').value;
															var offerPrice = document.querySelector('.offerPrice').innerText.replace('£', '').trim();
															var basePrice = document.querySelector('.basePrice').innerText.replace('£', '').trim();

															// Extract discount percentage
															var discountPercentageText = document.querySelector('.priceoff').innerText.replace('% OFF', '').trim();
															var discountPercentage = parseFloat(discountPercentageText); // Discount percentage as a number

															// Encrypt each parameter
															var encryptedParams = {
																service: CryptoJS.AES.encrypt(service, encryptionKey, { iv: iv }).toString(),
																workType: CryptoJS.AES.encrypt(workType, encryptionKey, { iv: iv }).toString(),
																subject: CryptoJS.AES.encrypt(subject, encryptionKey, { iv: iv }).toString(),
																urgency: CryptoJS.AES.encrypt(urgency, encryptionKey, { iv: iv }).toString(),
																wordCount: CryptoJS.AES.encrypt(wordCount, encryptionKey, { iv: iv }).toString(),
																price: CryptoJS.AES.encrypt(offerPrice, encryptionKey, { iv: iv }).toString(),
																basePrice: CryptoJS.AES.encrypt(basePrice, encryptionKey, { iv: iv }).toString(),
																discount: CryptoJS.AES.encrypt(discountPercentage.toString(), encryptionKey, { iv: iv }).toString(), // Encrypt discount percentage
															};

															// Log encrypted data
															console.log('Encrypted Params:', encryptedParams);

															// Construct query parameters
															var queryParams = new URLSearchParams(encryptedParams);

															// Redirect to the new order page with the encrypted data
															window.location.href = '/upload-your-assignment?' + queryParams.toString();
														});
													</script>
												</div>
												
												<!-- Popular Post Widget -->
												<div class="sidebar-widget popular-posts">
													<div class="sidebar-title">
														<h4>Recent Post</h4>
													</div>
													<div class="widget-content">
														@foreach( $data['recent_post'] as $post)
														<article class="post">
															<figure class="post-thumb"><img src="{{$post['images']}}" alt=""><a href="blog/{{$post['slug']}}" class="overlay-box"><span class="icon fa fa-link"></span></a></figure>
															<div class="post-info">{{ \Carbon\Carbon::parse($post['updated_at'])->format('M d, Y') }}</div>
															<div class="text"><a href="blog/{{$post['slug']}}">{{ Illuminate\Support\Str::limit($post['tittle'], 35) }}</a></div>
														</article>
														@endforeach
														
													</div>
												</div>
												
												
												<!-- Links Widget -->
												<!--<div class="sidebar-widget links-widget">-->
												<!--	<div class="sidebar-title">-->
												<!--		<h4>Recent Post</h4>-->
												<!--	</div>-->
												<!--	<div class="widget-content">-->
												<!--		<ul class="blog-cat">-->
												<!--			<li><a href="#">Business (3)</a></li>-->
												<!--			<li><a href="#">Education  (03)</a></li>-->
												<!--			<li><a href="#">Technology (12)</a></li>-->
												<!--			<li><a href="#">News (6)</a></li>-->
												<!--			<li><a href="#">Design (4)</a></li>-->
												<!--			<li><a href="#">Lifestyle  News (6)</a></li>-->
												<!--		</ul>-->
												<!--	</div>-->
												<!--</div>-->
												
												<!-- Archive Widget -->
												<!--<div class="sidebar-widget archive-widget">-->
												<!--	<div class="sidebar-title">-->
												<!--		<h4>Archives Post</h4>-->
												<!--	</div>-->
												<!--	<div class="widget-content">-->
														<!-- Form Group -->
												<!--		<div class="form-group">-->
												<!--			<select name="country" class="custom-select-box">-->
												<!--				<option>February 2020</option>-->
												<!--				<option>February 2019</option>-->
												<!--				<option>February 2018</option>-->
												<!--				<option>February 2017</option>-->
												<!--				<option>February 2016</option>-->
												<!--			</select>-->
												<!--		</div>-->
														<!-- Form Group -->
												<!--		<div class="form-group">-->
												<!--			<select name="country" class="custom-select-box">-->
												<!--				<option>February 2019</option>-->
												<!--				<option>February 2018</option>-->
												<!--				<option>February 2017</option>-->
												<!--				<option>February 2016</option>-->
												<!--			</select>-->
												<!--		</div>-->
												<!--	</div>-->
												<!--</div>-->
												
												<!-- Popular Posts -->
												<!--<div class="sidebar-widget popular-tags">-->
												<!--	<div class="sidebar-title">-->
												<!--		<h4>Tags</h4>-->
												<!--	</div>-->
												<!--	<div class="widget-content">-->
												<!--		<a href="#">seafood</a>-->
												<!--		<a href="#">gyros</a>-->
												<!--		<a href="#">chicken</a>-->
												<!--		<a href="#">pizza</a>-->
												<!--		<a href="#">ecommerce</a>-->
												<!--		<a href="#">food</a>-->
												<!--	</div>-->
												<!--</div>-->
												
											</aside>
										</div>
										
									</div>
								</div>
							</div>
						</section>
					</div>
				</div>
				
				
				
			</div>
			<div class="row">
				<div class="container">
					<!-- Our Trending Services Section -->
					<div class="section">
						<h2>Our Trending Services</h2>
						<div class="links">
							<a href="/homework-writing-help-services">Homework Help</a>
							<a href="/assignment-writing-help-services">Assignment Help</a>
							<a href="/essay-writing-help-services">Essay Writing Help</a>
							<a href="/research-paper-writing-services">Research Paper Writing Help</a>
							<a href="/dissertation-writing-help-services">Dissertation Writing Help</a>
						</div>
					</div>

					<!-- Our Popular Subjects Section -->
					<div class="section">
						<h2>Our Popular Subjects</h2>
						<div class="links">
							<a href="/math-assignment-help">Math Homework</a>
							<a href="/economic-assignment-writing-help">Homework Help Economic Assignment Help</a>
							<a href="/english-assignment-writing-help">English Assignment Help</a>
							<a href="/history-assignment-writing-help">History Assignment Help</a>
							<a href="/geography-assignment-writing-help">Geography Assignment Help</a>
							<a href="/law-assignment-writing-help">Law Assignment Help</a>
							<a href="/linguistic-assignment-writing-help">Linguistic Assignment Help</a>
							<a href="/physics-assignment-writing-help">Physics Assignment Help</a>
							<a href="/sociology-assignment-writing-help">Sociology Assignment Help</a>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</section>
@endsection