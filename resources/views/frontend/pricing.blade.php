@extends('frontend-layouts.app')

@section('content')
<style>
	.featured-section .feature-block:nth-child(2n + 1) {
		margin-top: 0px;
	}

	.text {
		color: #0c0d24;
		line-height: 1.8em;
		font-size: 16px;
	}

	.text-black {
		color: black;

	}

	.banner-section-three .content-column .inner-column {
		padding-top: 5px;
	}
</style>
<style>
	.iti {
		position: relative;
		display: inline-block;
		width: 100%;
	}
</style>

<style>
	.header-section {
		background: rgb(255, 255, 255);
		background: linear-gradient(170deg, rgba(255, 255, 255, 1) 6%, rgba(135, 166, 219, 0.4009978991596639) 72%, rgba(135, 166, 219, 0.5690651260504201) 91%, rgba(126, 137, 221, 0.865983893557423) 100%);
	}

	h1 {
		font-size: 35px;
		font-weight: 600;
		color: black
	}

	p {
		position: relative;
		line-height: 1.8em;
		font-size: large;
		color: black;
		text-align: justify;
	}

	.place-order {
		background: #d7f0fd;
		color: black;
		padding: 10px 20px;
		border-radius: 5%;
		margin: 10px;
	}

	.place-now {
		background: #77bfe5;
		color: black;
		padding: 20px 80px;
		border-radius: 3%;
		margin: 10px;
		font-weight: 500;
		font-size: 20px;
	}

	.place-order:hover {
		background: #7e89dd;
		color: white;

	}

	.place-now:hover {
		box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
		color: white;
		transition: box-shadow 0.4s ease-in-out, color 0.3s ease-in-out;
		/* Smooth transition */

	}

	.order-now {
		font-size: 25px;
		font-weight: 500;
		color: black;
	}

	.offer-badge {
		position: absolute;
		top: -65px;
		right: -30px;
		color: white;
		font-weight: bold;
		border-radius: 10%;
		font-size: 17px;
		z-index: 0;
	}

	.banner-stats-title {
		font-size: 30px;
		font-weight: 600;
		color: black;
	}

	.banner-stats-container {
		display: flex;
		justify-content: space-between;
		text-align: center;
	}

	.banner-stat {
		flex: 1;
		padding: 0 10px;
		/* Adjust the space between elements */
	}

	.banner-stats-text {
		font-size: 1em;
		margin-top: 5px;
	}

	ul {
		font-size: 17px;
		color: black;
	}

	h3 {
		font-size: 21px;
		font-weight: 500;
		color: black;
	}

	@media (min-width: 768px) {
		.content {
			flex-direction: row;
			align-items: flex-start;
			justify-content: center;
			text-align: left;
		}

		.image-container {
			width: 50%;
		}

		.text-content {
			width: 50%;
			margin-left: 40px;
		}

		.text-content h2 {
			font-size: 2rem;
		}
	}

	.current_offer {
		font-weight: bold;
		font-size: 35px;
	}

	.offer-container {
		background: rgb(221, 245, 245);
		background: -moz-linear-gradient(275deg, rgba(221, 245, 245, 1) 0%, rgba(175, 214, 232, 0.23012955182072825) 10%, rgba(155, 205, 231, 0.43461134453781514) 68%, rgba(110, 186, 231, 1) 100%);
		background: -webkit-linear-gradient(275deg, rgba(221, 245, 245, 1) 0%, rgba(175, 214, 232, 0.23012955182072825) 10%, rgba(155, 205, 231, 0.43461134453781514) 68%, rgba(110, 186, 231, 1) 100%);
		background: linear-gradient(275deg, rgba(221, 245, 245, 1) 0%, rgba(175, 214, 232, 0.23012955182072825) 10%, rgba(155, 205, 231, 0.43461134453781514) 68%, rgba(110, 186, 231, 1) 100%);
		filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#ddf5f5", endColorstr="#6ebae7", GradientType=1);
		background-color: white;
		border-radius:
			5px;
		box-shadow: 0 1rem 1rem 0 rgba(0, 0, 0, .08);
		padding: 20px;
	}

	@media (min-width: 1200px) {
		.container {
			max-width: 1199px;
		}
	}

	.offer-badge-offer {
		position: absolute;
		top: -8px;
		right: 23px;
		color: white;
		font-weight: bold;
		border-radius: 10%;
		font-size: 17px;
		z-index: 0;
	}

	.offer-badge-offer:hover {

		box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
		transition: box-shadow 0.4s ease-in-out, color 0.3s ease-in-out;
		/* Smooth transition */
	}

	.testimonial-section-three .owl-carousel .owl-stage-outer {
		padding: 0px 0px 0px;
	}

	.feature-section-three .blocks-column .feature-block-five:nth-child(2n + 0) {
		transform: translateY(0px);
	}

	.news-section-two .blocks-column .column:nth-child(1) .news-block-four {
		margin-top: 0;

	}

	.bg-gradient-1.rounded-box {
		padding: 20px;
		background-color: white;
		border-radius: 20px;
	}

	/* Style the list items with more space and consistent padding */
	.custom-list li {
		margin-bottom: 15px;
		/* Increase space between list items */
		padding-left: 10px;
		color: white
	}

	/* Style the image with rounded corners */
	.rounded-image {
		border-radius: 20px;
	}

	.subject-container {
		background-color: #fff;
		box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;

		padding: 20px;
		border-radius: 10px;
	}

	.subject-image {
		border-radius: 50%;
		max-width: 100%;
		height: auto;
	}

	.subject-list-box {
		background: rgb(0, 127, 193);
		background: linear-gradient(281deg, rgba(0, 127, 193, 0.5718662464985995) 11%, rgba(71, 199, 204, 1) 60%, rgba(0, 127, 193, 1) 100%);
		box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
		padding: 20px;
		border-radius: 15px;

	}







	.subject-list {
		list-style: none;
		padding-left: 0;
	}

	.subject-list li {
		margin-bottom: 10px;
		font-size: 16px;
		color: white;
	}

	.subject-list li i {
		color: white;
		margin-right: 8px;
	}
</style>
<section class="banner-section-three header-section">
	<div class="auto-container" style="margin-top: 100px;">
		<div style="text-align: center;">
			<ul class="page-breadcrumb">
				<!-- <li><a href="/">Home</a></li>
					<li>Assignment In Need Australia</li> -->
			</ul>
		</div>
		<div class="row clearfix">
			<div class="content-column col-lg-6 col-md-12 col-sm-12">
				<div class="inner-column">
					<h1>Quate Your Assignment</h1>
				</div>
				<div>
				</div>
				<div class="mt-2" style="padding: 20px;">
					<div class="banner-stats-container">
						<div class="banner-stat">
							<div class="banner-stats-title">98.2%</div>

							<div class="banner-stats-text"><i class="fa fa-star"></i> Orders Arrive Timely</div>
						</div>
						<div class="banner-stat">
							<div class="banner-stats-title">9/10</div>

							<div class="banner-stats-text"><i class="fa fa-graduation-cap"> </i> Report Better Grades
							</div>
						</div>
					</div>
				</div>


				<div class="mt-2"
					style="background-color: white; border-radius: 5px; box-shadow: 0 1rem 1rem 0 rgba(0, 0, 0, .08); padding: 20px;">
					<div style="display: flex; align-items: center;">
						<div style="width: 50px;">
							<img src="assets/media/avatars/assignment_logo.png" alt="Client Logo"
								style="max-width: 100%;">
						</div>
						<!-- Second Section: Review Banner -->
						<div style="flex-grow: 1; margin-left: 20px;">
							<div style="display: flex; align-items: center;">
								<div style="flex-grow: 1;">
									<span style="font-size: 20px; font-weight: bold;">Client Reviews </span>
								</div>
								<div style="display: flex; align-items: center;">
									<!-- Star Rating -->
									<span style="font-size:20px; margin-right: 10px;">
										<i style="color:gold" class="fa fa-star"></i>
										<i style="color:gold" class="fa fa-star"></i>
										<i style="color:gold" class="fa fa-star"></i>
										<i style="color:gold" class="fa fa-star"></i>
										<i style="color:gold" class="fa fa-star-half-o"></i> <!-- Half-active star -->
									</span>
									<!-- Rating Number -->
									<span style="font-size: 20px; font-weight: bold; color: #333;">4.5 / 5
										Ratting</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="image-column col-lg-6 col-md-12 col-sm-12">
				<div class="inner-column mr-0 pb-0 pl-0"
					style="background-color: white; border-radius: 10px;box-shadow: 10px;box-shadow: 0 1rem 1rem 0 rgba(0, 0, 0, .08)">
					@if ($errors->any())
						<div id="errorAlert" class="alert alert-danger mt-5">
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						<script>
							setTimeout(function () {
								document.getElementById('errorAlert').style.display = 'none';
							}, 10000); // Hide the error message after 10 seconds (10000 milliseconds)
						</script>
					@endif
					<div class="offer-badge"><img src="assets/media/avatars/offer.png" alt=""></div>
					<form id="orderForm" enctype="multipart/form-data">
						<div class="form-header text-center p-2">
							<h2 class="order-now">Pricing</h2>
						</div>
						@csrf
						<div class="contact-form p-4">
								
							<div class="row">
								<div class="col-md-6">
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
								<div class="col-md-6">
									<div class="form-group">
										<label for="workTypeSelect">Work Type</label>
										<select required id="workTypeSelect" style="background-color:#f1f1f1; height: 45px;" class="form-control">
											<option value="">Select Work Type</option>
											<option value="Standard">Standard</option>
											<option value="FirstClass">First Class Work</option>
										</select>
									</div>
								</div>
								<div class="col-md-6" id="subjectContainer">
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
							<div class="col-md-12 text-center">
								<button class=" place-order" type="submit">Place Order</button>
							</div>
						</div>
					</form>
				</div>
			</div>
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




</section>

@endsection