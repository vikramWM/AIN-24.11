@extends('frontend-layouts.app')

@section('content')
	<style>
		.banner-section-three {		
			padding-bottom: 0px;
			box-shadow: none;
		}
		.bgcolor{
			background-color: #b5d7fd !important;
		}
		.iti {
			position: relative;
			display: inline-block;
			width: 100%;
		}

		.floating-effect {
			animation: floatUpDown 1500ms ease-in-out infinite;
			margin-bottom: -113px;
			margin-top: -103px;
			z-index: 4;

			
		}

		@keyframes floatUpDown 
		{
			0%, 100% 
			{
				transform: translateY(0);
			}
			50% 
			{
				transform: translateY(-20px);
			}
		} 
		.event-detail-banner-section .content-box 
		{
			position: relative;
			max-width: 700px;
			margin-top: 100px;
		} 

	</style>
	<style>
		.main-header.header-style-three {
			background-color: #ffffff;
		}
		#placeOrderBtn:hover {
		background-color: #e07b00;
		color: #fff;
		transform: translateY(-2px);
		box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
		}
		.iti {
			width: -webkit-fill-available;
		}
		
		
		/* Hide the mobile image by default */
		.order-mobile {
			display: none;
		}

		/* Show the web image and hide the mobile image on larger screens */
		@media (min-width: 992px) {
			.order-web {
				display: block;
			}
			.order-mobile {
				display: none;
			}
		}

		/* Show the mobile image and hide the web image on small screens */
		@media (max-width: 991.98px) {
			.order-web {
				display: none;
			}
			.order-mobile {
				display: block;
			}
		}

		/* Hide the default file input */
		.file-input {
			display: none;
		}

		/* Style the custom file upload button */
		.custom-file-upload {
			display: inline-flex;
			align-items: center;
			cursor: pointer;
			background-color: #f1f1f1;
			border: 1px solid #ccc;
			border-radius: 4px;
			padding: 10px 15px;
			height: 80px;
			width: 100%;
			font-size: 16px;
			color: #333;
			transition: background-color 0.3s, border-color 0.3s;
			justify-content: center;
		}

		.custom-file-upload:hover {
			background-color: #e0e0e0;
			border-color: #999;
		}

		.custom-file-upload svg {
			margin-right: 10px;
			color: #555;
		}

		/* Style the text inside the custom button */
		.upload-text {
			font-weight: bold;
		}

		/* Optional: Adjust label size */
		.custom-file-upload span {
			display: inline-block;
		}
	</style>
	<section class="banner-section-three">
		<div class="pattern-layer-two" style="background-image: url(images/background/pattern-21.png)"></div>
		<div class="auto-container" style="margin-top: 100px;">
			<!-- Page Breadcrumb -->
			<div style="text-align: center;">
				<ul class="page-breadcrumb mb-0">
					<li><a href="/">Home</a></li>
					<li>Order Now</li>
				</ul>
            </div>
            
		</div>
	</section>

	

	<section style="padding-top: 20px;">
		<div class="container py-4">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="cristmas" style="box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.10); background-color: #ffffff;">
						<a href="#">
							<img src="/images/order-strip-GAH.svg?v=6" width="100%" height="100%" alt="login-popup" class="order-web">
							<img src="/images/order-strip-mobile-GAH.svg?v=6" width="100%" height="100%" alt="login-popup" class="order-mobile">
						</a>
					</div>
				</div>
				
			</div>
			<div class="row mt-3">
				<div class="col-lg-8 col-md-12 col-sm-12">
					<div class="card" style="box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.10); background-color: #ffffff;">
						<form id="placeOrder" action="/placeNewOrder" method="POST" enctype="multipart/form-data">						
							@csrf
							<div class="contact-form p-4">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label for="serviceSelect">Services</label>
											<select required id="serviceSelect" name="service" style="background-color:#f1f1f1; height: 45px;" class="form-control">
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
											<select required id="workTypeSelect" name="workType" style="background-color:#f1f1f1; height: 45px;" class="form-control">
												<option value="">Select Work Type</option>
												<option value="Standard">Standard</option>
												<option value="FirstClass">First Class Work</option>
											</select>
										</div>
									</div>
									<div class="col-md-6" id="subjectContainer">
										<div class="form-group">
											<label for="subjectSelect">Subject</label>
											<select required id="subjectSelect" name="subject" style="background-color:#f1f1f1; height: 45px;" class="form-control">
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
											<select required id="urgencySelect" name="urgency" style="background-color:#f1f1f1; height: 45px;" class="form-control">
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
											<input required type="number" name="wordCount" id="wordCount" min="250" value="250" style="background-color:#f1f1f1; height: 45px;" class="form-control" placeholder="Enter Count">
										</div>
									</div>
									@if(Auth::user() == '')
										<div class="col-md-6">
											<div class="form-group">
												<label for="email">Enter Your Email Here</label>
												<input type="email" name="email" style="background-color:#f1f1f1; height: 45px;" class="form-control" placeholder="Your Email Address*" required>
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label for="contact">Enter Your Contact Details Here</label>
												<input type="hidden" name="countrycode" id="hidden_country_code">
												<input type="tel" name="mobile" style="background-color:#f1f1f1; height: 45px;" class="form-control" placeholder="Phone*" id="phone_number_input" required>
												<input type="hidden" name="full_phone_number" id="hidden_phone_number">
											</div>
										</div>									
									@endif

									<div class="col-md-12">
										<div class="form-group">
											<label for="enterTopic">Enter Topic</label>
											<input type="text" name="topic" id="enterTopic" class="form-control" style="background-color:#f1f1f1; height: 45px;" placeholder="Enter Topic" required>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label for="requirements">Specify Your Requirements Here</label>
											<textarea name="requirements" id="requirements" class="form-control" style="background-color:#f1f1f1; height: 100px;" placeholder="The more instructions you provide, the better our writers can craft a paper that meets your needs." required></textarea>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label for="fileUpload" class="custom-file-upload">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-upload">
													<path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
													<polyline points="17 8 12 3 7 8"></polyline>
													<line x1="12" y1="3" x2="12" y2="15"></line>
												</svg>
												<span class="upload-text">Drop file here or Click to upload</span>
											</label>
											<input type="file" name="fileUpload[]" id="fileUpload" class="file-input" multiple>
										</div>
									</div>
									
									<script>
										document.getElementById('fileUpload').addEventListener('change', function(event) {
											var fileName = event.target.files[0] ? event.target.files[0].name : 'Drop file here or Click to upload';
											document.querySelector('.upload-text').textContent = fileName;
										});
									</script>

									
								</div>

								


								<input type="hidden" name="estimatedPrice" id="estimatedPrice" value="">
								<input type="hidden" name="discount" id="discount" value="">
								<input type="hidden" name="finalPrice" id="finalPrice" value="">


								<div class="policy_agree">
									<input type="checkbox" id="agreeCheckbox" required="">&nbsp;I agree with Privacy Policy and Terms &amp;
									Conditions (Recommended)
								</div>
								<div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.site_key') }}"></div>
								<button id="placeOrderBtn" class="place-order mt-2" type="submit" style="background-color: #f58e0e; padding: 15px;">Place Order</button>
								
							</div>
						</form>
					</div>
					
				</div>
				<div class="col-lg-4 col-md-12 col-sm-12">
					<div class="card py-3" style="box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.10); background-color: #ffffff;">
						<div class="Estimate-price" style="text-align: center; position: relative; z-index: 1;">
							<label style="font-size: 16px; line-height: 18px; color: #434343;">Estimated Price</label>
							<span class="basePrice" style="text-decoration: line-through; color: #616161; font-size: 18px; line-height: 20px; margin: 0 10px;">£ 100</span>
							<span class="priceoff" style="font-size: 18px; font-family: robotomedium; text-transform: uppercase; background: #5c7a36; border-radius: 3px; padding: 3px; color: #fff;">40% OFF</span>
							<p class="symbole text-center" style="color: #f58e0e; font-size: 36px; line-height: 40px; font-family: robotomedium; margin: 8px 0 15px;">£ <span style="color: #f58e0e; font-size: 36px; line-height: 40px; font-family: robotomedium; padding: 8px 0 15px;" class="value offerPrice">75</span></p>
						</div>
					</div>
					<div class="card my-3 p-2" style="box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.10); background-color: #ffffff;">					
						<h6 class="text-center" style="background-color: #f58e0e; color: aliceblue; padding: 10px;">Order Summary</h6>
						<div id="orderSummary" style="padding: 10px; background-color: aliceblue;">
							<!-- Summary details will be dynamically added here -->
						</div>
					</div>
					<div>
						<div class="cristmas" style="box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.10); background-color: #ffffff;">
							<a href="#">
								<!-- <img src="/images/order-strip-GAH.svg?v=6" width="100%" height="100%" alt="login-popup" class="order-mobile"> -->
								<img src="/images/order-strip-mobile-GAH.svg?v=6" width="100%" height="100%" alt="login-popup" class="order-web">
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-8 col-md-12 col-sm-12 pt-4">
					
					<div class="order-feature pt-4" style="padding: 20px; box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.10); background-color: #ffffff;">
						<label style="font-size: 1.2em; font-weight: bold; color: #333; display: block; margin-bottom: 15px;">
							With Every Order, You Will Receive These Benefits:
						</label>
						<ul style="list-style: none; padding-left: 20px; font-size: 1em; color: #555;">
							<li style="margin-bottom: 10px; position: relative; padding-left: 25px;">
								<span style="color: #4caf50; font-weight: bold; position: absolute; left: 0;">✔</span> 
								120% money-back guarantee if we fail to deliver.
							</li>
							<li style="margin-bottom: 10px; position: relative; padding-left: 25px;">
								<span style="color: #4caf50; font-weight: bold; position: absolute; left: 0;">✔</span> 
								On-time delivery guaranteed.
							</li>
							<li style="margin-bottom: 10px; position: relative; padding-left: 25px;">
								<span style="color: #4caf50; font-weight: bold; position: absolute; left: 0;">✔</span> 
								Free plagiarism report with every order.
							</li>
							<li style="margin-bottom: 10px; position: relative; padding-left: 25px;">
								<span style="color: #4caf50; font-weight: bold; position: absolute; left: 0;">✔</span> 
								24/7 customer support for any queries.
							</li>
							<li style="margin-bottom: 10px; position: relative; padding-left: 25px;">
								<span style="color: #4caf50; font-weight: bold; position: absolute; left: 0;">✔</span> 
								Complete ownership of your work.
							</li>
							<li style="margin-bottom: 10px; position: relative; padding-left: 25px;">
								<span style="color: #4caf50; font-weight: bold; position: absolute; left: 0;">✔</span> 
								Privacy of your confidential information.
							</li>
							<li style="margin-bottom: 10px; position: relative; padding-left: 25px;">
								<span style="color: #4caf50; font-weight: bold; position: absolute; left: 0;">✔</span> 
								Unlimited free revisions if needed.
							</li>
							<li style="margin-bottom: 10px; position: relative; padding-left: 25px;">
								<span style="color: #4caf50; font-weight: bold; position: absolute; left: 0;">✔</span> 
								Exclusive offers and discounts for clients.
							</li>
						</ul>
					</div>

				</div>
			</div>
		</div>
	</section>

	
	<section class="courses-section-three pt-4">
		<div class="auto-container">
			<div class="row clearfix">
				<div class="feature-block-six col-lg-12 col-md-12 col-sm-12">
					<div class="inner-box">
						<a  class="overlay-box"></a>
						<h4>Why Students Love Us</h4>
						<div class="text">My Assignment Services is dedicated towards Making Assignments Simpler for students. <br> Our PhD experts ensure HD Quality work within  <br>deadline for higher grades.</div>
					</div>
				</div>
				<!-- Feature Block Six -->
				<div class="feature-block-six col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box">
						<a  class="overlay-box"></a>
						<div class="icon fa fa-comments"></div>
						<h4>Customer  <br> Feedback</h4>
					</div>
				</div>
				
				<!-- Feature Block Six -->
				<div class="feature-block-six col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box">
						<a  class="overlay-box"></a>
						<div class="icon flaticon-team"></div>
						<h4>200+ <br> Ph.d Experts </h4>
					</div>
				</div>
				
				<!-- Feature Block Six -->
				<div class="feature-block-six col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box">
						<a  class="overlay-box"></a>
						<div class="icon fa fa-clock-o"></div>
						<h4>Delivery Before <br> The Deadline</h4>
					</div>
				</div>
				
				<!-- Feature Block Six -->
				<div class="feature-block-six col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box">
						<a  class="overlay-box"></a>
						<div class="icon fa fa-edit"></div>
						<h4>Unlimited <br> Modification</h4>
					</div>
				</div>
				
				<!-- Feature Block Six -->
				<div class="feature-block-six col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box">
						<a  class="overlay-box"></a>
						<div class="icon fa fa-lock" style="color: #0f52b4;"></div>
						<h4>Privacy <br> Protection</h4>
					</div>
				</div>
				
				<!-- Feature Block Six -->
				<div class="feature-block-six col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box">
						<a  class="overlay-box"></a>
						<div class="icon flaticon-check" style="color: #00ddb7;"></div>
						<h4>Plagiarism <br> Free Work</h4>
					</div>
				</div>
				
				<!-- Feature Block Six -->
				<div class="feature-block-six col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box">
						<a  class="overlay-box"></a>
						<div class="icon fa fa-money" style="color: #d500ff;"></div>
						<h4>Easy <br> Refunds</h4>
					</div>
				</div>
				
				<!-- Feature Block Six -->
				<div class="feature-block-six col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box">
						<a  class="overlay-box"></a>
						<div class="icon fa fa-key" style="color: #ff0000;"></div>
						<h4>Authentic <br> Resources</h4>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/css/intlTelInput.min.css" rel="stylesheet"/>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/intlTelInput.min.js"></script>

	<script>
		document.addEventListener('DOMContentLoaded', function() {
			var phoneInput = document.querySelector("#phone_number_input");
			var phoneInputInstance = window.intlTelInput(phoneInput, {
				separateDialCode: true,
				preferredCountries: ["gb"], 
				utilsScript: "//cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/utils.js"
			});

			function updatePhoneNumber() {
				var fullNumber = phoneInputInstance.getNumber(); 
				var countryData = phoneInputInstance.getSelectedCountryData();
				var countryCode = countryData.dialCode; 

				document.querySelector("#hidden_phone_number").value = fullNumber;
				document.querySelector("#hidden_country_code").value = countryCode;
			}

			updatePhoneNumber();

			phoneInput.addEventListener('input', function() {
				updatePhoneNumber();
			});

			phoneInput.addEventListener('countrychange', function() {
				updatePhoneNumber();
			});
		});
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/crypto-js.min.js"></script>
	<script>
		document.addEventListener('DOMContentLoaded', function() {
			var encryptionKey = "your-encryption-key"; // Replace with a strong key
			var iv = CryptoJS.enc.Hex.parse('1234567890123456'); // Example IV

			function decryptData(encryptedData) {
				try {
					var bytes = CryptoJS.AES.decrypt(encryptedData, encryptionKey, {
						iv: iv,
						mode: CryptoJS.mode.CBC,
						padding: CryptoJS.pad.Pkcs7
					});
					return bytes.toString(CryptoJS.enc.Utf8);
				} catch (error) {
					console.error('Decryption failed:', error);
					return 'Decryption error';
				}
			}

			// Retrieve encrypted data from query parameters
			var urlParams = new URLSearchParams(window.location.search);
			var encryptedService = urlParams.get('service');
			var encryptedWorkType = urlParams.get('workType');
			var encryptedSubject = urlParams.get('subject');
			var encryptedUrgency = urlParams.get('urgency');
			var encryptedWordCount = urlParams.get('wordCount');
			var encryptedPrice = urlParams.get('price');
			var encryptedBasePrice = urlParams.get('basePrice');
			var encryptedDiscount = urlParams.get('discount');

			// Check if any query parameters are present
			if (encryptedService || encryptedWorkType || encryptedSubject || encryptedUrgency || encryptedWordCount || encryptedPrice || encryptedBasePrice || encryptedDiscount) {
				// Decrypt data
				var decryptedService = decryptData(encryptedService);
				var decryptedWorkType = decryptData(encryptedWorkType);
				var decryptedSubject = decryptData(encryptedSubject);
				var decryptedUrgency = decryptData(encryptedUrgency);
				var decryptedWordCount = decryptData(encryptedWordCount);
				var decryptedPrice = decryptData(encryptedPrice);
				var decryptedBasePrice = decryptData(encryptedBasePrice);
				var decryptedDiscount = decryptData(encryptedDiscount);

				// Populate form with decrypted data
				function populateFormWithDecryptedData() {
					$('#serviceSelect').val(decryptedService);
					$('#workTypeSelect').val(decryptedWorkType);
					$('#subjectSelect').val(decryptedSubject);
					$('#urgencySelect').val(decryptedUrgency);
					$('#wordCount').val(decryptedWordCount);
					$('#enterTopic').val(decryptedTopic);
					$('#requirements').val(decryptedRequirements);
				}

				populateFormWithDecryptedData();
			} else {
				// If no query parameters, clear the form or set placeholders
				function clearForm() {
					$('#serviceSelect').val('').attr('placeholder', 'Please select');
					$('#workTypeSelect').val('').attr('placeholder', 'Please select');
					$('#subjectSelect').val('').attr('placeholder', 'Please select');
					$('#urgencySelect').val('').attr('placeholder', 'Please select');
					$('#wordCount').val('').attr('placeholder', 'Please enter');
					$('#enterTopic').val('');
					$('#requirements').val('');
				}

				clearForm();
			}
		});
	</script>
	<script>
		$(document).ready(function() {
		function calculatePrice() {
			var service = $('#serviceSelect').val();
			var type = $('#workTypeSelect').val();
			var urgency = $('#urgencySelect').val();
			var wordCount = Math.max($('#wordCount').val(), 250);
			var subject = $('#subjectSelect').val();

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
			var serviceMultiplier = (service === 'Dissertation' || service === 'Thesis' || service === 'Research Project') ? 1.1 : 1;
			var typeMultiplier = (type === 'FirstClass') ? 1.3 : 1;
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

			var estimatedPrice = basePrice * serviceMultiplier * typeMultiplier * urgencyMultiplier;

			var discountPercentage = parseFloat($('.priceoff').text().replace('% OFF', '').trim()) / 100;
			var discount = estimatedPrice * discountPercentage;

			var finalPrice = estimatedPrice - discount;

			// Update the price quotation and estimated price
			$('.offerPrice').text(finalPrice.toFixed(2));
			$('.basePrice').text('£ ' + estimatedPrice.toFixed(2));

			updateSummary(service, type, subject, urgency, wordCount, estimatedPrice, finalPrice, discountPercentage, discount);
		}

		function updateSummary(service, type, subject, urgency, wordCount, estimatedPrice, finalPrice, discountPercentage, discount) {
			var summaryHtml = `
				<p><strong>Service:</strong> ${service}</p>
				<p><strong>Work Type:</strong> ${type}</p>
				<p><strong>Subject:</strong> ${subject || 'N/A'}</p>
				<p><strong>Urgency:</strong> ${urgency} Days</p>
				<p><strong>Word Count:</strong> ${wordCount}</p>
				<p><strong>Estimated Price (Before Discount):</strong> £${estimatedPrice.toFixed(2)}</p>
				<p><strong>Discount:</strong> ${(discountPercentage * 100).toFixed(0)}%(£${discount.toFixed(2)})</p>
				<p><strong>Final Price (After Discount):</strong> £${finalPrice.toFixed(2)}</p>
			`;
			$('#orderSummary').html(summaryHtml);
			
			// Update the hidden input fields
			$('#estimatedPrice').val(estimatedPrice.toFixed(2));
			$('#discount').val(`${(discountPercentage * 100).toFixed(0)}% (£${discount.toFixed(2)})`);
			$('#finalPrice').val(finalPrice.toFixed(2));
		}

		// Trigger price calculation and summary update when any input changes
		$('#serviceSelect, #workTypeSelect, #subjectSelect, #urgencySelect, #wordCount').on('change keyup', function() {
			calculatePrice();
		});

		// Trigger initial calculation and summary update
		calculatePrice();
		
	});

	</script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script>
		document.addEventListener('DOMContentLoaded', function() {
			const form = document.getElementById('placeOrder');

			form.addEventListener('submit', function(event) {
				@guest
				// Prevent form submission
				event.preventDefault();

				// Show SweetAlert message
				Swal.fire({
					title: 'Login Required',
					html: 'If you don\'t already have an account, you can use the password <b style="color: #d33;">"user@123"</b> to log in for the first time.<br><br>' +
					'After logging in, you can update your password in the profile section for better security.',
					icon: 'info',
					confirmButtonText: 'OK'
				}).then((result) => {
					if (result.isConfirmed) {
						// Submit the form after the alert is closed
						form.submit();
					}
				});
				@endguest
			});
		});
	</script>
@endsection