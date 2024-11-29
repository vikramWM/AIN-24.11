@extends('frontend-layouts.app')

@section('content')


<style>
		.text {
			color: #0c0d24;
			line-height: 1.8em;
			font-size: 16px;
		}
		.text-black{
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
		.header-section 
		{
			background: rgb(255,255,255);
			background: linear-gradient(170deg, rgba(255,255,255,1) 6%, rgba(135,166,219,0.4009978991596639) 72%, rgba(135,166,219,0.5690651260504201) 91%, rgba(126,137,221,0.865983893557423) 100%);
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
			color:black;
			text-align: justify;
		}
		.place-order 
		{
			background:#d7f0fd; 
			color:black;
			padding: 10px 20px;
			border-radius: 5%;
			margin: 10px;
		}
		.place-now
		{
			background:#77bfe5; 
			color:black;
			padding: 20px 80px;
			border-radius: 3%;
			margin: 10px;
			font-weight: 500;
			font-size: 20px;
		}
		.place-order:hover
		{
			background:#7e89dd;
			color:white ;

		}
		.place-now:hover
		{
			box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;			
			color: white;
			transition: box-shadow 0.4s ease-in-out, color 0.3s ease-in-out; /* Smooth transition */

		}
		.order-now		
		{
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
		.banner-stats-title
		{
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
			padding: 0 10px; /* Adjust the space between elements */
		}

		.banner-stats-text {
			font-size: 1em;
			margin-top: 5px;
		}
		
		ul 
		{
			font-size: 17px;
			color: black;
		}

		h3 
		{
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

		.current_offer
		{
			font-weight: bold;
			font-size: 35px;
		}

		.offer-container
		{
			background: rgb(221,245,245);
			background: -moz-linear-gradient(275deg, rgba(221,245,245,1) 0%, rgba(175,214,232,0.23012955182072825) 10%, rgba(155,205,231,0.43461134453781514) 68%, rgba(110,186,231,1) 100%);
			background: -webkit-linear-gradient(275deg, rgba(221,245,245,1) 0%, rgba(175,214,232,0.23012955182072825) 10%, rgba(155,205,231,0.43461134453781514) 68%, rgba(110,186,231,1) 100%);
			background: linear-gradient(275deg, rgba(221,245,245,1) 0%, rgba(175,214,232,0.23012955182072825) 10%, rgba(155,205,231,0.43461134453781514) 68%, rgba(110,186,231,1) 100%);
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#ddf5f5",endColorstr="#6ebae7",GradientType=1);
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
	.offer-badge-offer:hover{

		box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
				transition: box-shadow 0.4s ease-in-out, color 0.3s ease-in-out; /* Smooth transition */
	}

	.testimonial-section-three .owl-carousel .owl-stage-outer {
    padding: 0px 0px 0px;
}
       
	</style>
	<section class="banner-section-three header-section" >
		<div class="auto-container" style="margin-top: 100px;">
			<div style="text-align: center;">
				<ul class="page-breadcrumb">
					<!-- <li><a href="/">Home</a></li>
					<li>Chemistry Assignment</li> -->
				</ul>
            </div>
            <div class="row clearfix">
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<h1 class="text-center">Why Choose Our Assignment Writing Help Services?
						</h1>
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
						
						<div class="banner-stats-text"><i class="fa fa-graduation-cap"> </i> Report Better Grades</div>
					</div>
				</div>
			</div>

			
			<div class="mt-2" style="background-color: white; border-radius: 5px; box-shadow: 0 1rem 1rem 0 rgba(0, 0, 0, .08); padding: 20px;">
				<div style="display: flex; align-items: center;">
					<div style="width: 50px;">
						<img src="assets/media/avatars/assignment_logo.png" alt="Client Logo" style="max-width: 100%;">
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
									<i style="color:gold"class="fa fa-star"></i>
									<i style="color:gold"class="fa fa-star"></i>
									<i style="color:gold"class="fa fa-star"></i>
									<i style="color:gold"class="fa fa-star-half-o"></i> <!-- Half-active star -->
								</span>
								<!-- Rating Number -->
								<span style="font-size: 20px; font-weight: bold; color: #333;">4.5 / 5 Ratting</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
				
			<div class="image-column col-lg-6 col-md-12 col-sm-12">
				<div class="inner-column mr-0 pb-0 pl-0" style="background-color: white; border-radius: 10px;box-shadow: 10px;box-shadow: 0 1rem 1rem 0 rgba(0, 0, 0, .08)">
					@if ($errors->any())
						<div id="errorAlert" class="alert alert-danger mt-5">
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						<script>
							setTimeout(function() {
								document.getElementById('errorAlert').style.display = 'none';
							}, 10000); // Hide the error message after 10 seconds (10000 milliseconds)
						</script>
					@endif
					<div class="offer-badge"><img src="assets/media/avatars/offer.png" alt=""></div> 
					<form id="orderForm" action="/neworder-fromhome" method="POST" enctype="multipart/form-data">
							<div class="form-header text-center p-2">
								<h2 class="order-now">Get Assignment Instantly</h2>
							</div>
						@csrf
						<div class="contact-form p-4">
							@if(Auth::user() == '')
							<div class="row">
								<div class="col-md-6">
									<div class="form-group" >
									<label for="">Name</label>
										<input type="text" name="user_name" class="form-control input-color" placeholder="Your Full Name*" required="" style="background-color:#f1f1f1; height: 45px;">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="">Email</label>
										<input type="email" name="email" class="form-control" placeholder="Your Email Address*" required="" style="background-color:#f1f1f1; height: 45px;">
									</div>
								</div>
							</div>
							<input type="hidden" name="countrycode" id="country_c">
							<div class="row">
								<div class="col-md-6" style="width:100%">
									<div class="form-group">
										<label for="">Number</label>
										<input type="tel" name="mobile" class="form-control"  placeholder="Phone*" id="phone_number"  style="background-color:#f1f1f1;height: 45px;"/>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="">deadline</label>
										<input type="date" name="delivery_date" id="DeliveryDate" class="form-control" required="" placeholder="deadline" style="background-color:#f1f1f1;height: 45px;">
									</div>
								</div>
							</div>
							@else
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for="">deadline</label>
										<input type="date" name="delivery_date" id="DeliveryDate" class="form-control" required="" placeholder="deadline" style="background-color:#f1f1f1;height: 45px;">
									</div>
								</div>
							</div>


							@endif
							
							<div class="row">

							</div>
							
							<div class="policy_agree">
								<input type="checkbox" required="">&nbsp;I agree with Privacy Policy and Terms &amp; Conditions (Recommended) 
							</div>
							<div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.site_key') }}"></div>
							<div class="col-md-12 text-center" >
								<button class=" place-order" type="submit">Place Order</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			</section>
	
	

	<!-- Our Writer -->
	<section class="testimonial-section-three">
		<div class="color-layer" style="width:100%"></div>
		<div class="icon-layer-four" style="background-image:url(images2/icons/pattern-4.png)"></div>
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title text-center py-2" >
				<h2>Assignment In Need Expert Writers</h2>
			</div>
			<div class="testimonial-carousel-three owl-carousel owl-theme py-0">
				
				<!-- Testimonial Block Three -->
				<div class="testimonial-block-three">
					<div class="inner-box">
						<div class="image-outer">
							<div class="image">
								<img src="/assets/media/avatars/blank.png" alt="" />
							</div>
							<div class="quote flaticon-left-quote"></div>
						</div>6
						<h6>Michal dravid</h6>
						<div class="designation">English Literature: (Writer)</div>
						<div class="text " style="text-align: justify;">With a master's degree in English Literature from the University of London, I have assisted numerous college scholars in crafting compelling assignments, dissertations, and theses. My deep knowledge of literary analysis and critical theory  
                         <span style="color:blue"> <i>Continue...</i></span>
                        </div>
                        <div style="display:none">has been invaluable to students across various academic levels.</div>    
					</div>
				</div>
				
				<!-- Testimonial Block Three -->
				<div class="testimonial-block-three">
					<div class="inner-box">
						<div class="image-outer">
							<div class="image">
								<img src="/assets/media/avatars/blank.png" alt="" />
							</div>
							<div class="quote flaticon-left-quote"></div>
						</div>
						<h6>Mahfuz Riad</h6>
						<div class="designation">History (Writer)</div>
						<div class="text" style="text-align: justify;">I have effectively supported a wide range of students in mastering their History assignments. My proficiency includes Political History, Diplomatic History, Cultural History, and Social History, ensuring comprehensive and insightful work for 
                         <span style="color:blue"> <i>Continue...</i></span>
                        </div>
                        <div style="display:none">students tackling these complex subjects.</div>
					</div>
				</div>
				
				<!-- Testimonial Block Three -->
				<div class="testimonial-block-three">
					<div class="inner-box">
						<div class="image-outer">
							<div class="image">
								<img src="/assets/media/avatars/blank.png" alt="" />
							</div>
							<div class="quote flaticon-left-quote"></div>
						</div>
						<h6>Muhibbur Rashid</h6>
						<div class="designation">Law (Writer)</div>
						<div class="text" style="text-align: justify;">Having extensive experience in Legal Studies, I have aided numerous students in navigating their Law assignments with ease. My specialization includes Taxation Law, Labor Law, Criminal Law, and Civil Law, helping students produce 
                            <span style="color:blue"> <i>Continue...</i></span>
                        </div>
                        <div  style="display:none">well-researched and well-argued legal papers</div>
                    </div>
				</div>
				
				<!-- Testimonial Block Three -->
				<div class="testimonial-block-three">
					<div class="inner-box">
						<div class="image-outer">
							<div class="image">
								<img src="/assets/media/avatars/blank.png" alt="" />
							</div>
							<div class="quote flaticon-left-quote"></div>
						</div>
						<h6>Tamim Anj</h6>
						<div class="designation">Finance (writer)</div>
						<div class="text" style="text-align: justify;">I have guided many students in excelling at their Finance assignments, offering expertise in Corporate Finance, Investment Analysis, Financial Management, and Risk Assessment. My assistance ensures students can submit accurate 
                        <span style="color:blue"> <i>Continue...</i></span>
                        </div>
                        <div  style="display:none">and insightful financial reports and analyses.</div>
					</div>
				</div>
				
				<!-- Testimonial Block Three -->
				<div class="testimonial-block-three">
					<div class="inner-box">
						<div class="image-outer">
							<div class="image">
								<img src="/assets/media/avatars/blank.png" alt="" />
							</div>
							<div class="quote flaticon-left-quote"></div>
						</div>
						<h6>Ajay ravi</h6>
						<div class="designation">Engineering (Writer)</div>
						<div class="text" style="text-align: justify;">With a strong background in various engineering disciplines, I have helped numerous students tackle their Engineering assignments. From Electrical Engineering to Mechanical Engineering and Civil Engineering, my support covers 
                        <span style="color:blue"> <i>Continue...</i></span>

                        </div>
                        <div style="display:none">essential topics and complex problems to ensure academic success</div>
                    
                    </div>
				</div>
				
				<!-- Testimonial Block Three -->
				<div class="testimonial-block-three">
					<div class="inner-box">
						<div class="image-outer">
							<div class="image">
								<img src="/assets/media/avatars/blank.png" alt="" />
							</div>
							<div class="quote flaticon-left-quote"></div>
						</div>
						<h6>Daniel watson</h6>
						<div class="designation">Chemistry (writer)</div>
						<div class="text" style="text-align: justify;">I have effectively supported students in overcoming their Chemistry assignment challenges. My expertise includes Organic Chemistry, Inorganic Chemistry, Physical Chemistry, and Analytical Chemistry, providing detailed and
                        <span style="color:blue"> <i>Continue...</i></span>
                        </div>
                       
                        <div style="display:none"> precise assistance for all chemistry-related tasks.</div>

                    </div>
				</div>
				
			</div>
		</div>
	</section>

    <!-- Claim Your Offer -->
	<section  class=" pt-3 pb-3" >
		<div class="content-section-white">
			
			<div class="container" >
				
				<div class="offer-container row pb-0">
					
					<div class="col-md-4 col-xs-12 mb-3">
					</div>
					<div class="col-md-6 col-xs-12 mb-3 test">
						
						<h2 style="font-weight:500; font-size: 30px;; color:black">Claim Your Offer</h2>
					</div>
					<div class="col-md-4 col-xs-12">
						<div class="offer-badge-offer"><img src="assets/media/avatars/offer.png" alt=""></div> 
						<div style="heught:100px" class="offer-text hidden-xs"><img src="assets/media/avatars/fashionable-young-man-with-stubble-has-surprised-expression.png" alt=""></div>
					</div>
					<div class="col-md-6 col-xs-12 mt-3">

						<p class="offer-title">Type your whatsapp number to get an exclusive code. </p>
						<div class="clearfix"></div>
						<span id="offerWhatsappSuccessMsg2"></span>
						<div class="offer-input-box">
							<form class="onload-offer-form" id="offerWhatsappForm2" onkeydown="return event.key != 'Enter';">
								<div class="contact-right-container">
									<div class="form-group d-flex">
										<div class="col-sm-2" style="padding-left:0;padding-right:0">
											<input type="text" id="isdCode2" style="border-left: 2px solid #ccc;" placeholder="+1" class="form-control">
										</div>
										<div class="col-sm-10" style="padding-left:0;padding-right:0">
											<input type="text" name="offerWhatsappNumber" id="offerWhatsappNumber2" class="form-control" placeholder="Enter Your Whats App No.">
										</div>
										<button type="button" id="offerWhatsappBtn2" class="btn btn-secondary btn-bg-red" style="background:#33b533"><i class="fa fa-whatsapp"></i> </button>
									</div>
								</div>
							</form>
							<div style="text-center">
								<a href="/Offers"><button class=" place-now">View More Offer</button></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

    <!--Chemistry Assignment Help | Get Professional Assistance Today! -->
	<section class=" py-0">
		<div class="auto-container ">
			<div class="row clearfix">
				<div class="title-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title-box">
							<div class="section-color-layer"></div>
							<h2 style="font-weight:500; font-size: 30px;; color:black" class="  my-4">Why Students Choose Assignment in Need For Assignment Help</h2>
                              <p><a href="https://www.assignnmentinneed.com/"><b>Assignment In Need</b></a> knows that students juggle many challenges when dealing with assignments. Deadlines loom large, and complex topics add pressure. These issues can affect grades and health. Our mission is to offer reliable, tailored assignment writing help for students. We don’t just deliver work; we aim to build trust in your academic success. Choosing our service could be your smartest move regarding assignments.
							  </p>
							  <p>Our team prioritises students in the UK, Australia, Canada, UAE, Spain, Malaysia and more offering dependable and budget-friendly best assignment writing services Writers here are experts in various fields, ensuring they meet your needs. Every step reflects our commitment to privacy. Timeliness is not just a goal; it’s a promise. We strive for a seamless experience, so students can focus on what matters.
							  </p>
							
							 
							 
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
       <!-- order box -->
	<section class=" pt-3 pb-3">
		<div class="auto-container ">
			<div class="my-5 images-container" style="position: relative; border-radius: 5px; overflow: hidden; box-shadow: 0 1rem 1rem 0 rgba(0, 0, 0, 0.08);">
				<div style="background: linear-gradient(275deg, rgba(221,245,245,1) 0%, rgba(175,213,232,0.23012955182072825) 10%, rgba(155,205,231,0.43461134453781514) 21%, rgba(110,186,231,1) 100%); background-size: cover; background-position: center; height: 100%; width: 100%; position: absolute; top: 0; left: 0; z-index: 1;"></div>
				<div style="background: linear-gradient(to bottom, rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.9)); position: absolute; top: 0; left: 0; height: 100%; width: 100%; z-index: 2;"></div>
				<div class="container" style="position: relative; z-index: 3;">
					<div class="row">
						<div class="col-md-4">
							<img src="assets/media/avatars/books-with-graduation-cap-digital-art-style-education-day-removebg-preview.png" alt="Client Logo" class="img-fluid">
						</div>
						<div class="col-md-6 mt-4">
							<h2 style="font-size: 30px; font-weight: 600; color: black; margin-bottom: 10px; align-items:justify">Order our assignment service today and enjoy a special discount!</h2>
							<p>Get help with your assignments easily and stress-free with our expert helpers!</p>
							<div style="text-center">
								<a href="/upload-your-assignment"><button class=" place-now">Order Now</button></a>
							</div>
						</div>
					</div>
				</div>
				</div>
				</div>
	</section>
	<!-- Get Chemistry Assignment Help from Experts -->
	<section class=" py-0">
		<div class="auto-container ">
			<div class="row clearfix">
				<div class="title-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title-box">
							<div class="section-color-layer"></div>
							<h2 style="font-weight:500; font-size: 30px;; color:black" class="my-4">Experienced and Qualified Writers for All Types of Assignments
							</h2>
                           <div>
							<p>Here are some <a href="https://www.assignnmentinneed.com/benefits-of-assignments"><b>benefits to hiring Assignment in Need’s</b></a> expert writers for you all types of assignment help</p>
                           <ul> 
                                    <li>
                                        <div class="mb-2"><h3><b>Professional Writers Across All Fields</b></h3></div>
                                    <p>We have assembled a team of professional writers with expertise across various academic fields. Our writers hold advanced degrees and possess years of experience in their respective disciplines, ensuring they are equipped to handle assignments of any complexity. Whether you need online assignment help with a simple essay or a detailed dissertation, our team has the knowledge and skills to deliver outstanding results tailored to your requirements. </p>
                                    </li>
                                    <li>
                                        <div class="mb-2"><h3><b>Subject-Specific Experts</b></h3></div>
                                        <p>Our subject-specific experts are well-versed in the nuances of different academic domains. From engineering and healthcare to law and business management, our writers have the depth of knowledge needed to address specialized topics. This ensures that your assignments are handled by someone who truly understands the subject matter, giving you an edge in your academic pursuits.
										</p>  
                                    </li>
                            </ul>
                           </div>
                
               
							 
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
    <!--Topics We Cover Under Our Chemistry Assignment Help Online -->
	<section class=" py-0">
		<div class="auto-container ">
			<div class="row clearfix">
				<div class="title-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title-box">
							<div class="section-color-layer"></div>
							<h2 style="font-weight:500; font-size: 30px;; color:black" class="my-4">Guaranteed Quality and Accuracy in Every Assignment

                            </h2>

                            <div>
                           <ul> 
                                    <li>
                                        <div class="mb-2"><h3><b>Plagiarism-Free Contents
                                        </b></h3></div>
                                    <p>We understand the importance of originality in academic work. Every assignment we deliver is crafted from scratch, ensuring it is completely free from plagiarism. We use advanced plagiarism detection tools to double-check all content before submission, so you can be confident in the authenticity of the work you receive. Originality is our promise, and we never compromise on it.
                                    </p>
                                    </li>
                                    <li>
                                        <div class="mb-2"><h3><b>Strict Quality Control</b></h3></div>
                                      <p>Our strict quality control process ensures that every assignment meets the highest academic standards. From proofreading and editing to ensuring proper formatting and citation, our dedicated quality assurance team meticulously reviews each piece of work. This guarantees that your assignments are not only accurate but also polished to perfection.</p>   
                                    </li>

									<li>
                                        <div class="mb-2"><h3><b>AI-Free Content</b></h3></div>
                                      <p>At Assignment In Need, we take pride in providing human-crafted content that reflects critical thinking and academic rigor. Unlike AI-generated material, our assignments are thoughtfully researched and written by real experts. This ensures originality, creativity, and relevance in every piece of work, aligning with your academic requirements.
									  </p>   
                                    </li>
                            </ul>
                           </div>
                
  
							 
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

    <!-- Overcoming Common Chemistry Challenges -->
    <section class=" py-0">
		<div class="auto-container ">
			<div class="row clearfix">
				<div class="title-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title-box">
							<div class="section-color-layer"></div>
							<h2 style="font-weight:500; font-size: 30px;; color:black" class="  my-4">Timely Delivery and Meeting Deadlines According to Academic Needs</h2>

                            <div>
                           <ul> 
                                    <li>
                                        <div class="mb-2"><h3><b>On-Time Submission Guarantee</b></h3></div>
                                    <p>We understand that meeting deadlines is crucial for academic success. That’s why we guarantee the timely delivery of all assignments, no matter how tight the deadline may be. Our writers work efficiently to ensure you never have to worry about late submissions, giving you peace of mind and the time to review the work before submission.</p>
                                    </li>
                                    <li>
                                        <div class="mb-2"><h3><b>24/7 Availability</b></h3></div>
                                      <p>Say goodbye to last-minute panic with Assignment In Need. We are here to take the pressure off by handling your assignments with efficiency and expertise. Our team works diligently to ensure that even urgent tasks are completed without compromising quality. </p>   
                                    </li>
                            </ul>
                           </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
       
    <!-- Why Do Students Need Help with Chemistry Assignments? -->
    <section class=" py-0">
		<div class="auto-container ">
			<div class="row clearfix">
				<div class="title-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title-box">
							<div class="section-color-layer"></div>
							<h2 style="font-weight:500; font-size: 30px;; color:black" class="my-4">Clear and Transparent Communication for Every Student Worldwide</h2>

							<div>
                           <ul> 
                                    <li>
                                        <div class="mb-2"><h3><b>Easy Access to Writers and Support</b></h3></div>
                                    <p>We prioritize open communication between students and our team. Through our user-friendly platform, you can easily connect with writers and support staff to share your requirements, provide feedback, and track progress. This seamless access ensures that your needs are addressed quickly and effectively.
									</p>
                                    </li>
                                    <li>
                                        <div class="mb-2"><h3><b>Clear Order Process</b></h3></div>
                                      <p>Our order process is simple and transparent, designed to save you time and effort. From placing your order to receiving the final draft, every step is straightforward and hassle-free. We keep you informed throughout the process, so you know exactly what to expect and when to expect it.
									  </p>   
                                    </li>
                            </ul>
                           </div> 
							 
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

     <!--Having a tough time with your chemistry assignment? Try our assignment help -->
     <section class="py-0">
		<div class="auto-container ">
			<div class="row clearfix">
				<div class="title-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title-box">
							<div class="section-color-layer"></div>
							<h2 style="font-weight:500; font-size: 30px;; color:black" class="my-4">Affordable Assignment Help without Compromise Quality</h2>

                            <div>
                           <ul> 
                                    <li>
                                        <div class="mb-2"><h3><b>Competitive Pricing for All Budgets</b></h3></div>
                                    <p>We believe that academic assistance should be accessible to everyone, which is why we offer competitive pricing to suit all budgets. Our rates are fair and reflect the quality of service we provide, ensuring that you get exceptional value for your money without overspending.
									</p>
                                    </li>
                                    <li>
                                        <div class="mb-2"><h3><b>Discounts and Special Offers</b></h3></div>
                                      <p>To make our services even more affordable, we regularly offer discounts and special promotions. Whether you’re a new customer or a returning client, you can take advantage of these offers to save even more. We’re committed to providing quality assignment writing help at prices that won’t strain your budget.
									  </p>   
                                    </li>
                            </ul>
                           </div> 
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- new section -->

    <section class="py-0">
		<div class="auto-container ">
			<div class="row clearfix">
				<div class="title-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title-box">
							<div class="section-color-layer"></div>
							<h2 style="font-weight:500; font-size: 30px;; color:black" class="my-4">Commitment to Confidentiality and Privacy</h2>

                            <div>
                           <ul> 
                                    <li>
                                        <div class="mb-2"><h3><b>Privacy and Data Protection</b></h3></div>
										
                                    <p>Your privacy is of utmost importance to us. We use advanced security measures to protect your personal and academic information. Rest assured, your data is safe with us, and we never share it with third parties under any circumstances.
									</p>
                                    </li>
                                    <li>
                                        <div class="mb-2"><h3><b>Anonymous Service</b></h3></div>
										
                                      <p>We understand the need for discretion when seeking academic assistance. Our assignment writing website is designed to be completely anonymous, ensuring that your identity remains confidential. You can trust us to handle your assignments with the utmost professionalism and privacy.</p>   
                                    </li>
                            </ul>
                           </div> 
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


    <section class="py-0">
		<div class="auto-container ">
			<div class="row clearfix">
				<div class="title-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title-box">
							<div class="section-color-layer"></div>
							<h2 style="font-weight:500; font-size: 30px;; color:black" class="my-4">Enhanced Learning Experience and Skills for Students
							</h2>

                            <div>
                           <ul> 
                                    <li>
                                        <div class="mb-2"><h3><b>Supportive Learning Beyond Assignments</b></h3></div>
										
                                    <p>Our goal is not just to help you complete your assignments but also to enhance your learning experience. By providing well-researched and thoroughly explained content, we help you gain a deeper understanding of your subject matter, empowering you to excel in your studies.
									</p>
                                    </li>
                                    <li>
                                        <div class="mb-2"><h3><b>Learning Resources and References</b></h3></div>
                                      <p>Each assignment we deliver includes relevant references and resources that you can use to further your knowledge. These materials are carefully selected to complement your coursework, making our service a valuable tool for academic growth and skill development.</p>   
                                    </li>
                            </ul>
                           </div> 
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


    <section class="py-0">
		<div class="auto-container ">
			<div class="row clearfix">
				<div class="title-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title-box">
							<div class="section-color-layer"></div>
							<h2 style="font-weight:500; font-size: 30px;; color:black" class="my-4">Revision and Satisfaction Guarantee</h2>

                            <div>
                           <ul> 
                                    <li>
                                        <div class="mb-2"><h3><b>Unlimited Revisions</b></h3></div>
                                     <p>We are committed to your satisfaction, which is why we offer unlimited revisions at no extra cost. If you feel that any aspect of your assignment needs improvement, our writers will make the necessary adjustments until you are completely satisfied with the result.
									 </p>
									</li>
									<li>
                                        <div class="mb-2"><h3><b>Customer Satisfaction Commitment</b></h3></div>
                                  <p>Your success is our top priority, and we strive to exceed your expectations with every assignment. From quality and accuracy to timely delivery and support, we are dedicated to providing a service that leaves you fully satisfied. Your trust in us is what drives our commitment to excellence.
								  </p>   
									</li>
                                   
                            </ul>
                           </div> 
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>



    <section class="py-0">
		<div class="auto-container ">
			<div class="row clearfix">
				<div class="title-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title-box">
							<div class="section-color-layer"></div>
							<h2 style="font-weight:500; font-size: 30px;; color:black" class="my-4">Confidence in Meeting Deadlines and Academic Requirements</h2>

                            <div>
                           <ul> 
                                    <li>
                                        <div class="mb-2"><h3><b>Support for Every Deadline
                                        </b></h3></div>
                                    <p>No matter how tight your deadline is, we are here to help. Our team works efficiently to deliver assignments within your required timeframe without compromising quality. Trust us to handle your urgent tasks while you focus on other important academic responsibilities.</p>
                                    </li>
                                    <li>
                                        <div class="mb-2"><h3><b>Adhering to Specific University and Course Guidelines
                                        </b></h3></div>
                                      <p>We understand the importance of adhering to your university and course guidelines. Our writers meticulously follow instructions to ensure that every assignment meets your institution’s specific requirements.
                                      </p>   
                                    </li>
                            </ul>
                           </div> 
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

    <section class="py-0">
		<div class="auto-container ">
			<div class="row clearfix">
				<div class="title-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title-box">
							<div class="section-color-layer"></div>
							<h2 style="font-weight:500; font-size: 30px;; color:black" class="my-4">Step-by-Step Solution on Every Assignment</h2>

                            <div>
                         <p>A detailed, step-by-step approach is what we offer for each assignment. Writers on our team break down complex tasks into easy steps. This method makes sure that every requirement gets met accurately. Starting from initial research and going to the final draft, our careful process takes care of everything, making us a trusted choice for assignment writing help. </p>
                           </div> 
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

    <section class="py-0">
		<div class="auto-container ">
			<div class="row clearfix">
				<div class="title-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title-box">
							<div class="section-color-layer"></div>
							<h2 style="font-weight:500; font-size: 30px;; color:black" class="my-4">Custom Solutions for Every Subject</h2>

                            <div>
                         <p>At Assignment In Need, we know that each subject comes with different challenges. Engineering, literature, or business studies all require special attention. Custom solutions are what we offer to fit the needs of your specific subject. </p>
                           </div> 
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

		<section class="faq-section">
		<div class="auto-container">
			<div class="row clearfix">
				<div class="column col-lg-12 col-md-12 col-sm-12">
					<div class="title-box text-center">
					<h2 style="font-weight:500; font-size: 30px;; color:black" class="my-4"><b>Frequently Asked Questions For Assignment Writing Help</b></h2> 
					</div>
					<div class="row"> 
					 		 
				 <div class="column col-lg-6 col-md-6 col-sm-12 ">
					<ul class="accordion-box">
						<li class="accordion block">
							<div class="acc-btn">1.Why should I choose your Assignment writing service over others?<div class="icon fa fa-angle-down"></div></div>
							<div class="acc-content" style="display: none;">
								<div class="content">
									<div class="text">
										<p>Our service offers personalized support, a team of qualified experts, and a commitment to high-quality work. We tailor our assistance to meet your specific needs and ensure that you receive the best possible help for your academic tasks.</p>
									</div>
								</div>
							</div>
						</li>
						<li class="accordion block active-block">
							<div class="acc-btn active">2. How do you ensure the quality of the assignments? <div class="icon fa fa-angle-down"></div></div>
							<div class="acc-content current" style="display: block;">
								<div class="content">
									<div class="text">
										<p>We ensure quality through rigorous checks, including expert reviews and plagiarism detection. Each assignment is crafted to meet high standards and is reviewed to ensure it aligns with your academic requirements.</p>
									</div>
								</div>
							</div>
						</li>
						
						<li class="accordion block">
							<div class="acc-btn">3. What makes your experts qualified to help with my assignments?<div class="icon fa fa-angle-down"></div></div>
							<div class="acc-content" style="">
								<div class="content">
									<div class="text">
										<p>
									Our experts are selected based on their advanced degrees and extensive experience in their respective fields. They possess the knowledge and skills required to provide accurate and effective assistance for a variety of subjects.</p>
									</div>
								</div>
							</div>
						</li>

						<li class="accordion block">
							<div class="acc-btn">4. How do you handle urgent requests or last-minute assignments?<div class="icon fa fa-angle-down"></div></div>
							<div class="acc-content" style="">
								<div class="content">
									<div class="text">
										<p>
									We offer expedited services for urgent requests. If you have a tight deadline, let us know, and we will prioritize your assignment to ensure it is completed on time without compromising on quality.
										</p>
									</div>
								</div>
							</div>
						</li>
						</ul>
						</div>
						
						<div class="column col-lg-6 col-md-6 col-sm-12">
						<ul class="accordion-box"> 
						<li class="accordion block">
							<div class="acc-btn">5.What types of assignments can you help with?<div class="icon fa fa-angle-down"></div></div>
							<div class="acc-content" style="">
								<div class="content">
									<div class="text">
										<p>										
                                            We help with a wide range of assignments writing help, essay writing help, research papers writing help, homework writing help, and more. Our experts can assist if you need help with a specific topic or a complex project.
										</p>
									</div>
								</div>
							</div>
						</li>
						
						<li class="accordion block">
							<div class="acc-btn">6.Can I communicate with the expert working on my assignment?<div class="icon fa fa-angle-down"></div></div>
							<div class="acc-content" style="">
								<div class="content">
									<div class="text">
										<p>
										Communication with the expert is usually through our platform, where you can provide instructions and feedback. This ensures that all your requirements are met while maintaining a structured workflow.

										</p>
									</div>
								</div>
							</div>
						</li>
						
						<li class="accordion block">
							<div class="acc-btn">7.How do you handle feedback and requests for revisions?<div class="icon fa fa-angle-down"></div></div>
							<div class="acc-content" style="">
								<div class="content">
									<div class="text">
										<p>										
                                            We handle feedback by promptly addressing your concerns and making necessary revisions. You can request changes directly through our platform, and we’ll work to adjust the work according to your feedback.
										</p>
									</div>
								</div>
							</div>
						</li>
						
					
					
					</ul>
						</div>	
				</div>
				
			</div>
		</div>
	</section>

	<script>
		document.addEventListener('DOMContentLoaded', function() {
			const readMoreBtns = document.querySelectorAll('.read-more-btn');

			readMoreBtns.forEach(function(btn) {
				btn.addEventListener('click', function() {
					const textContainer = this.parentElement;
					const partialText = textContainer.querySelector('.partial-text');
					const fullText = textContainer.querySelector('.full-text');

					if (fullText.style.display === 'none') {
						fullText.style.display = 'block';
						partialText.style.display = 'none';
						this.innerText = 'Read Less';
					} else {
						fullText.style.display = 'none';
						partialText.style.display = 'block';
						this.innerText = 'Read More';
					}
				});
			});
		});
	</script>
@endsection