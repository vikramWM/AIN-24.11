 
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
         /* new code */

		 
	.subject-container {
		background-color: #fff;
		/* box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; */

		padding: 20px;
		border-radius: 10px;
		margin-bottom: 20px;
		 
	}

	.subject-image {
		border-radius: 50%;
		max-width: 100%;
		height: auto;
	}

	.subject-list-box {
		background: rgb(0, 127, 193);
		background: linear-gradient(281deg, rgba(0, 127, 193, 0.5718662464985995) 11%, rgba(71, 199, 204, 1) 60%, rgba(0, 127, 193, 1) 100%);
		/* box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; */
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

	  /* endcode */
	</style>
       
	 
	<section class="banner-section-three header-section" >
		<div class="auto-container" style="margin-top: 10px;">
			<div style="text-align: center;">
				<ul class="page-breadcrumb">
					<!-- <li><a href="/">Home</a></li>
					<li>Math Assignment</li> -->
				</ul>
            </div>
            <div class="row clearfix">
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<h1 class="text-start">Get Online PhD Thesis Writing Help | Thesis Dissertation and Research Paper Writing Help
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
			<section class="news-section-two py-3 mt-3">
		<div class="auto-container">
			<div class="row clearfix">
				<div class="col-md-12 col-md-offset-2">
					<h2 style="font-weight:500; font-size: 30px;; color:black" class="text-center my-4">How Our Thesis Writing Help Work?</h2>
					 
				</div>
				<div class="blocks-column col-lg-12 col-md-12 col-sm-12 mt-2">
					<div class="inner-column">
						<div class="row clearfix p-2">
							<div class="column col-lg-4 col-md-4 col-sm-12 ">
								<div class="news-block-four mt-0">
									<div class="inner-box wow fadeInUp animated animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
										<span style="display: inline-block; width: auto; height: 150px;">
											<img src="images/shopping-list.png" alt="" style="width: 100%; height: 100%;">
										</span>
										<h3><a>Submit Your Order</a></h3>
										<div class="text">Fill in the 'order now' form, mention your basic information and specific requirements that you want us to meet.</div>
										
									</div>
								</div>
							</div>
							<div class="column col-lg-4 col-md-4 col-sm-12">
								<div class="news-block-four">
									<div class="inner-box wow fadeInUp animated animated" data-wow-delay="150ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 150ms; animation-name: fadeInUp;">
										<span style="display: inline-block; width: auto; height: 150px;">
											<img src="images/secure-payment.png" alt="" style="width: 100%; height: 100%;">
										</span>
										<h3><a>Make Secure Payment</a></h3>
										<div class="text">Pay an affordable price for the assignment help provided to you via our secure payment gateway that is fully protected from privacy infringements.</div>
									</div>
								</div>
								
							</div>
							<div class="column col-lg-4 col-md-4 col-sm-12">
								<div class="news-block-four">
									<div class="inner-box wow fadeInUp animated animated" data-wow-delay="300ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: fadeInUp;">
										<span style="display: inline-block; width: auto; height: 150px;">
											<img src="images/sharing.png" alt="" style="width: 100%; height: 100%;">
										</span>
										<h3><a>Receive Your Paper</a></h3>
										<div class="text">
											Get a high-quality assignment writing services by our expert writers within the given deadline and score better than your expectations.
										</div>
									</div>
								</div>
							</div>
						</div>
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

	<!-- Our Writer -->
	<section class="testimonial-section-three">
		<div class="color-layer" style="width:100%"></div>
		<div class="icon-layer-four" style="background-image:url(images2/icons/pattern-4.png)"></div>
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title text-center py-2" >
				<h2>Our Writer For Thesis Writing Help</h2>
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

    <!-- Online Thesis Writing Help Services  -->
	<section class=" py-0">
		<div class="auto-container ">
			<div class="row clearfix">
				<div class="title-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title-box">
							<div class="section-color-layer"></div>
							<h2 style="font-weight:500; font-size: 30px;; color:black" class="  my-4">Online Thesis Writing Help Services </h2>
                             <p>Are you struggling with your thesis and looking for expert thesis writing help? At Assignment in Need, we offer professional thesis writing services tailored to your needs, no matter your field of study. Our master thesis writing service is affordable, and our experienced writers are here to help you every step of the way.</p>
                            <p>For over 7 years, we’ve built a team of skilled thesis writers online, many of whom hold Ph.D. degrees. Our writers are dedicated to maintaining high academic standards and personalizing each thesis to meet exact requirements. With our master thesis help, students worldwide can achieve success in their academic journeys.</p>
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
							<h2 style="font-size: 30px; font-weight: 600; color: black; margin-bottom: 10px; align-items:justify">Order our Thesis Writing Help today and enjoy a special discount!</h2>
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
 
    <!-- Online Thesis Writing Help Services -->
    <section>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="title-column col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="title-box">
                            <div class="section-color-layer"></div>
                            <h2 style="font-weight:500; font-size: 30px;; color:black" class="  my-4" >Online Thesis Writing Help Services</h2>
                            <p>Are you struggling with your thesis and looking for expert thesis writing help? At Assignment in Need, we offer professional thesis writing services tailored to your needs, no matter your field of study. Our master thesis writing service is affordable, and our experienced writers are here to help you every step of the way.</p>
                            <p>For over 7 years, we’ve built a team of skilled thesis writers online, many of whom hold Ph.D. degrees. Our writers are dedicated to maintaining high academic standards and personalizing each thesis to meet exact requirements. With our master thesis help, students worldwide can achieve success in their academic journeys.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- What Makes Thesis Writing So Challenging for Students? -->
    <section>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="title-column col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="title-box">
                            <div class="section-color-layer"></div>
                            <h2 style="font-weight:500; font-size: 30px;; color:black" class="my-4" >What Makes Thesis Writing So Challenging for Students?</h2>
                            <p>When you write a thesis statement or in general any thesis writing, it can be both demanding and rewarding. A thesis is often the longest, most detailed project you’ll tackle as a student, and it requires intense focus, discipline, and motivation. From analyzing data and interpreting complex research to compile a literature review and preparing for a defence, the work involved can be daunting. One reason it’s so challenging is that the average thesis is 100 to 300 pages long, and it needs to be virtually error-free. The high standards and expectations make this a difficult task.</p>
                            <h3>Thesis Success Rates</h3>
                            <p>Many students find the path to completing a thesis overwhelming. Research from the Council of Graduate Schools shows that just over 50% of Ph.D. students earn their degrees after completing their thesis. While this can be intimidating, it should inspire you to be part of the 56.6% who successfully finish their programs!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Save Your Time and Money with Professional Thesis Writing Help -->
    <section>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="title-column col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="title-box">
                            <div class="section-color-layer"></div>
                            <h2 style="font-weight:500; font-size: 30px;; color:black" class="my-4" >Save Your Time and Money with Professional Thesis Writing Help</h2>
                            <p>Using a professional thesis writer for your thesis can save you valuable time. <a href="https://www.assignnmentinneed.com/assignment-writing-help-services"><b>Writing assignments</b></a> requires a lot of time, effort, and thesis assistance, especially when faced with tough questions or tight deadlines. Sometimes, students end up submitting work that doesn’t meet the expected quality due to time constraints.</p>
                            <p>Why risk submitting a rushed or incomplete thesis when there are options to help you succeed and you can ask someone to “write my thesis paper for me.” Services like <a href="https://www.assignnmentinneed.com"><b>Assignment in Need</b></a> can provide quality, custom-written assignments that follow your specific guidelines and deadlines and can help you save both money and time. We always recommend that students review their assignments to ensure they meet all requirements. Not only does this improve your assignment quality, but it also helps you understand the content better.</p>
                                <p>Let us help you succeed, so you can focus on what matters most and save time and money with our affordable thesis assignment writing help.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Our Thesis Statement Writing Services? Here Are 5 Compelling Reasons -->
    <section>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="title-column col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="title-box">
                            <div class="section-color-layer"></div>
                            <h2 style="font-weight:500; font-size: 30px;; color:black" class="my-4" >Why Choose Our Thesis Statement Writing Services? Here Are 5 Compelling Reasons</h2>
                            <p>A strong thesis statement is essential for any successful academic paper. At Assignment in Need, we know how important it is to have a clear, compelling thesis, and we’re here to help you help writing a thesis statement, and create one that lays a solid foundation for your academic success. Here are five reasons why our thesis statement writing services stand out when you ask us to “write my thesis statement”:</p>
                            <h3>Expert Writers</h3>
                            <p>Our team consists of skilled professional thesis writer with advanced degrees across various fields. Their expertise ensures your thesis statement is crafted with precision, helping you achieve top grades and setting you up for success.</p>
                            <h3>Affordable Pricing</h3>
                            <p>We believe that quality <a href="https://www.assignnmentinneed.com/homework-writing-help-services"><b>thesis homework help</b></a> should be affordable for everyone. That’s why we offer competitive rates, allowing you to receive high-quality help without overspending.</p>
                            <h3>Strict Privacy Policies</h3>
                            <p>Your privacy is our priority. We follow strict confidentiality guidelines with our thesis statement help to protect your personal and academic information, so you can trust us with your work without any worries about data security.</p>
                            <h3>Secure Payment Options</h3>
                            <p>Our secure payment gateway protects your financial information, allowing you to make payments with complete peace of mind for your thesis statement for your research paper.</p>
                            <h3>Guaranteed Satisfaction</h3>
                            <p>Your satisfaction is our success metric. With Assignment in Need, you can expect high-quality, professional help writing a thesis statement that is designed to meet your needs.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How Our Thesis Essay Writing Service Works: A Simple Guide -->
    <section>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="title-column col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="title-box">
                            <div class="section-color-layer"></div>
                            <h2 style="font-weight:500; font-size: 30px;; color:black" class="my-4" >How Our Thesis Essay Writing Service Works: A Simple Guide</h2>
                            <p>The toughest part of a doctoral course is writing a thesis. Since timely submission of thesis and its quality is so critical to getting the degree, it is highly recommended that scholars avail <a href="https://www.assignnmentinneed.com/research-paper-writing-services"><b>thesis research paper writing help</b></a> . We at Thesis India offer the best in class thesis writing assistance in the most ethical manner. 
                            </p>
                            <p>Our writers offering PhD thesis writing help across the globe, guide the scholars to prepare the framework flawlessly for thesis chapters. Then the scholars develop the chapters, taking regular feedback from the writers. Hence, it is the researchers’ ideas and thoughts that go into preparing the thesis. Some of the guidelines that we follow in our thesis writing services for PhD thesis writing are as follows:</p>
                            <p><b>Formatting Excellence:</b> Our professional thesis writers are well-versed in the intricacies of various formatting guidelines. They meticulously adhere to university-specific requirements, ensuring that font styles, sizes, margins, and spacing are precisely as per the rules. Additionally, they skillfully place illustrations, tables, and graphs, providing accurate references for each within the text. The result? A professionally formatted thesis that leaves a lasting impression.</p>
                            <p><b>Language and Grammar Precision:</b> When you ask us to “help me write my thesis paper,” We understand the significance of maintaining perfect academic language in your thesis. Our writers pay meticulous attention to detail, double-checking technical terms for spelling accuracy, and ensuring that the language adheres to the highest university standards. The seamless flow of ideas and appropriate tense usage add finesse to your thesis, making it an exemplary piece of thesis essay writing help.</p>
                            <p><b>Uncompromising Authenticity:</b> Originality is the cornerstone of our PhD <a href="https://www.assignnmentinneed.com/essay-writing-help-services"><b>thesis essay writing help</b></a> . Our thesis writers online meticulously verify every fact and figure used in the thesis, guaranteeing accuracy and credibility. We take pride in presenting only the scholars' original ideas, lending a unique perspective to their thesis research paper writing help. By diligently checking the authenticity of all statements and results, we ensure that your thesis stands out as an authoritative piece of scholarly work.</p>
                            <p><b>Citations:</b> Plagiarism has no place in our master thesis writing service. Our expert team ensures that all writing is entirely original, devoid of any unattributed content from external sources. In our master thesis help, we acknowledge the contribution of others by providing appropriate and accurate citations, adhering to the editorial style prescribed by your university. This meticulous approach underscores the integrity of your research and strengthens its credibility.</p>
                            <p><b>Punctuality and Efficiency:</b> We understand the value of time in the realm of PhD research. As thesis are extensive and time-sensitive projects, our writers follow a strategic and planned thesis assistance, ensuring both speed and accuracy. We at Assignment in Need take pride in delivering top-quality thesis assignment writing help within stipulated timelines, enabling scholars to meet their academic milestones effectively. Writing a thesis is one of the toughest parts of a doctoral program. Since both the quality and timely submission of your thesis are crucial for graduation, we recommend expert guidance. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Achieve Good Grades in Thesis Research Papers at Affordable Prices -->
    <section>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="title-column col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="title-box">
                            <div class="section-color-layer"></div>
                            <h2 style="font-weight:500; font-size: 30px;; color:black" class="  my-4" >Achieve Good Grades in Thesis Research Papers at Affordable Prices</h2>
                            <p>We provide high-quality help writing a thesis statement at prices that won’t break the bank. Whether you’re in college or working on a different level of education, we’re here to make your academic life easier.</p>
                            <p>We know that thesis papers take time, and ensuring your citations are correct can be stressful. That’s why we aim to offer <a href="https://www.assignnmentinneed.com/cheap-assignment-writing-help"><b>affordable thesis statement help</b></a> and thesis assignment writing help, so you don’t have to choose between your grades and your social life. We want to make sure you get the assistance you need, even if you’re on a tight budget.</p>
                            <h3>Is a Low-Priced Paper Still Written Just for Me?</h3>
                            <p>There are other sites that reuse papers and sell the same content to multiple students. That’s not how we operate. At Assignment in Need’s <a href="https://www.assignnmentinneed.com/dissertation-writing-help-services"><b>online thesis dissertation writing help</b></a> , every paper we create is 100% original and tailored to your specific needs. We guarantee it’s plagiarism-free and unique to you.</p>
                            <h3>Who Are the Writers Behind These Affordable Papers?</h3>
                            <p>Assignment in Need’s thesis essay writing help consists of qualified writers who specialize in various fields. We carefully check their credentials before bringing them on board for thesis homework help support, ensuring you’re paired with someone who knows your topic and has the right qualifications. They also take rigorous tests to prove their ability to write quickly and accurately.</p>
                            <p>On top of that, all our writers are native English speakers, so you won’t have to worry about awkward phrasing or unclear sentences. Many other services hire writers who speak English as a second language, which can lead to papers that sound unnatural or have citation mistakes that might cost you points.</p>
                             
                            <h3>Why Choose Us for Your Thesis Research Paper?</h3>
                            <p>Just because online thesis writing services are cheap doesn’t mean the quality has to suffer. We know that some sites offer rock-bottom prices but deliver disappointing results. Others charge way too much for work that’s not worth it.</p>
                             <p>We aim to provide a fair price that fits your budget, while still offering high-quality papers that will help you earn the grades you deserve.</p>
                             <p>Order your research paper today and see for yourself that when we say affordable, we mean it-without compromising on quality or service!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Whatever Your Topic, We’ve Got You Covered in All Types Of Thesis Writing Help -->
    <section>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="title-column col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="title-box">
                            <div class="section-color-layer"></div>
                            <h2 style="font-weight:500; font-size: 30px;; color:black" class="my-4" >Whatever Your Topic, We’ve Got You Covered in All Types Of Thesis Writing Help</h2>
                            <p>Feeling overwhelmed by your thesis? Assignment in Need offers specialized thesis writing help tailored to help you succeed, whatever the topic or type. Whether you’re diving into historical analysis, scientific theory, or crafting persuasive arguments, Our thesis writers online have the expertise to support you every step of the way.</p>
                            <h3>Analytical Thesis Writing Help</h3>
                            <p>Is your thesis all about breaking down complex ideas? Our analytical write a thesis statement service helps you explore each component of your topic in detail, providing a deep analysis that highlights critical thinking and precision.</p>
                            <h3>Argumentative Thesis Writing Help</h3>
                            <p>If your goal is to make a strong case and thesis statement for a research paper, we’ll help you build persuasive arguments supported by credible evidence, creating a powerful thesis that’s convincing and academically sound.</p>
                            <h3>Expository Thesis Writing Help</h3>
                            <p>Expository theses need clarity and organization. We at Assignment in Need ensure your thesis presents information in a structured, easy-to-understand way, perfect for topics that require explaining rather than debating with our write my thesis paper for me to support.</p>
                            <h3>Comparative Thesis Writing Help</h3>
                            <p>For theses that involve comparing and contrasting, our experts guide you through creating a balanced and insightful comparative analysis, showcasing well-researched similarities and differences for a comprehensive view.</p>
                            <h3>Cause and Effect Thesis Writing Help</h3>
                            <p>Cause and effect can be complex to capture. We help you to write my thesis statement that demonstrates how one event or idea impacts another, strengthening your argument with clear connections.</p>
                            <h3>Persuasive Thesis Writing Help</h3>
                            <p>Have a strong stance? Our persuasive thesis statement helps you refine your arguments, making them compelling and backed by solid evidence, ideal for a thesis that aims to sway the reader.</p>
                            <h3>Experimental Research Thesis Writing Help</h3>
                            <p>For research-based or experimental theses, precision is key. Our master thesis writing service supports you with experimental design, data analysis, and interpretation, ensuring your thesis is methodical, credible, and impactful.</p>
                            <h3>Historical Thesis Writing Help</h3>
                            <p>If you’re working on a <a href="https://www.assignnmentinneed.com/history-assignment-writing-help"><b>history thesis</b></a> , we can help. From ancient civilizations to modern-day movements, we’ll support you with thoroughly researched historical content and insights that add depth to your work.</p>
                            <h3>Interpretive Thesis Writing Help</h3>
                            <p>Need someone to help me write my thesis paper? We assist with interpretive theses by helping you present a thoughtful, reflective analysis that showcases your unique perspective on the subject.</p>
                            <h3>Scientific Thesis Writing Help</h3>
                            <p>Scientific theses require clarity and accuracy. We at Assignment in Need help organize your data, methods, and findings to meet high academic standards, providing clear explanations and professional formatting.</p>
                            <h3>Case Study-Based Thesis Writing Help</h3>
                            <p>Working with case studies and need thesis homework help? Our case study thesis service helps you analyze individual or multiple cases, delivering focused insights that highlight significant findings and applications.</p>
                            <p>Whatever your thesis needs, Assignment in Need is here to help you create an exceptional thesis that meets your academic requirements, be it thesis essay writing help or thesis essay writing help. No matter the type, topic, or format, we’re ready to support your success!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Let Us Handle Your Thesis Worries—Get Online Help Today! -->
    <section>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="title-column col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="title-box">
                            <div class="section-color-layer"></div>
                            <h2 style="font-weight:500; font-size: 30px;; color:black" class="my-4" >Let Us Handle Your Thesis Worries-Get Online Help Today!</h2>
                            <p>Our online thesis writing services set a high standard in academic thesis writing, providing students around the world with professional thesis assignment writing help. Here’s a look at how Assignment in Need’s streamlined process ensures smooth collaboration and timely delivery.</p>
                            <h3>Ensuring a High-Quality Thesis</h3>
                             
                                <p><b>Thorough Research:</b>Our experts dive deep into your topic to create a solid foundation.</p>
                                <p><b>Proper Formatting:</b> We make sure your thesis follows all academic guidelines perfectly.</p>
                                <p><b>Polished Content:</b>Every thesis is carefully proofread to ensure it's error-free and ready to impress.</p>
                            
                            <h3>Supporting You Until the Finish Line</h3>
                             
                                <p><b>Work Directly with Your Writer:</b> Stay connected with your writer to share ideas and feedback</p>
                                <p><b>Unlimited Revisions:</b>Need changes? We’re happy to tweak your thesis until you’re 100% satisfied.</p>  
                                <p><b>On-Time Delivery:</b>No need to stress-your thesis will always be ready before the deadline.</p>  
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	 
	<!-- Types of Subjects We Cover For Thesis Writing Help -->
    <section class="py-0">
		<div class="auto-container">
			<div class="row clearfix">
				<div class="title-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title-box">
							<div class="section-color-layer"></div>
							<h2 style="font-weight:500; font-size:30px; color:black" class="py-4">Types of Subjects We Cover For Thesis Writing Help</h2>
						<div class="subject-container card bg-light">
		                     <div class="row justify-content-center align-items-center">
		                        <div class="col-lg-12 col-md-12 col-sm-12">
	                                <div class="subject-list-box">
		                                 <div class="row">
			                                   <div class="col-lg-4 col-md-4 col-sm-12">
				                                  <ul class="subject-list">
		                                            	<li><i class="fas fa-book-open"></i><a class="text-white" href="https://www.assignnmentinneed.com/philosophy-assignment-writing-help"><b> Philosophy Thesis Writing Help</b></a></li>
		                                            	<li><i class="fas fa-book-open"></i><a class="text-white" href="https://www.assignnmentinneed.com/sociology-assignment-writing-help"><b> Sociology Thesis Writing Help</b></a></li>
		                                            	<li><i class="fas fa-book-open"></i><a class="text-white" href="https://www.assignnmentinneed.com/nursing-assignment-writing-help"><b> Nursing Thesis Writing Help</b></a></li>
		                                            	<li><i class="fas fa-book-open"></i><a class="text-white" href="https://www.assignnmentinneed.com/marketing-assignment-writing-help"><b> Marketing Thesis Writing Help</b></a></li>
		                                            	<li><i class="fas fa-book-open"></i><a class="text-white" href="https://www.assignnmentinneed.com/finance-assignment-writing-help"><b> Finance Thesis Writing Help</b></a></li>
		                                            	<li><i class="fas fa-book-open"></i><a class="text-white" href="https://www.assignnmentinneed.com/statistics-assignment-writing-help"><b> Statistics Thesis Writing Help</b></a></li>
		                                            	<li><i class="fas fa-book-open"></i><a class="text-white" href="https://www.assignnmentinneed.com/accounting-assignment-writing-help"><b> Accounting Thesis Writing Help</b></a></li>
		                                            	<li><i class="fas fa-book-open"></i><a class="text-white" href="https://www.assignnmentinneed.com/math-assignment-help"><b> Mathematics Thesis Writing Help</b></a></li>
				                                  </ul>
			                                  </div>
			                                   <div class="col-lg-4 col-md-4 col-sm-12">
				                                      <ul class="subject-list">
		                                                 	<li><i class="fas fa-book-open"></i><a class="text-white" href="https://www.assignnmentinneed.com/english-assignment-writing-help"><b> English Thesis Writing Help</b></a></li>
		                                                 	<li><i class="fas fa-book-open"></i><a class="text-white" href="https://www.assignnmentinneed.com/linguistic-assignment-writing-help"><b> Linguistic Thesis Writing Help</b></a></li>
		                                                 	<li><i class="fas fa-book-open"></i><a class="text-white" href="https://www.assignnmentinneed.com/physics-assignment-writing-help"><b> Physics Thesis Writing Help</b></a></li>
		                                                 	<li><i class="fas fa-book-open"></i><a class="text-white" href="https://www.assignnmentinneed.com/management-assignment-writing-help"><b> Management Thesis Writing Help</b></a></li>
		                                                 	<li><i class="fas fa-book-open"></i><a class="text-white" href="https://www.assignnmentinneed.com/history-assignment-writing-help"><b> History Thesis Writing Help</b></a></li>
		                                                 	<li><i class="fas fa-book-open"></i><a class="text-white" href="https://www.assignnmentinneed.com/economic-assignment-writing-help"><b> Economics Thesis Writing Help</b></a></li>
		                                                 	<li><i class="fas fa-book-open"></i><a class="text-white" href="https://www.assignnmentinneed.com/geography-assignment-writing-help"><b> Geography Thesis Writing Help</b></a></li>
		                                                 	<li><i class="fas fa-book-open"></i><a class="text-white" href="https://www.assignnmentinneed.com/chemistry-assignment-writing-help"><b> Chemistry Thesis Writing Help</b></a></li>
				                                      </ul>
			                                   </div>
			                                   <div class="col-lg-4 col-md-4 col-sm-12">
				                                   <ul class="subject-list">
		                                               	<li><i class="fas fa-book-open"></i><a class="text-white" href="https://www.assignnmentinneed.com/programming-assignment-writing-help"><b> Programming Thesis Writing Help</b></a></li>
		                                               	<li><i class="fas fa-book-open"></i><a class="text-white" href="https://www.assignnmentinneed.com/law-assignment-writing-help"><b> Law Thesis Writing Help</b></a></li>
		                                               	<li><i class="fas fa-book-open"></i><a class="text-white" href="https://www.assignnmentinneed.com/engineering-assignment-writing-help"><b> Engineering Thesis Writing Help</b></a></li>
		                                               	<li><i class="fas fa-book-open"></i><a class="text-white" href="https://www.assignnmentinneed.com/computer-science-assignment-writing-help"><b> Computer Science Thesis Writing Help</b></a></li>
		                                               	<li><i class="fas fa-book-open"></i> <b> Supply Chain Thesis Writing Help</b></a></li>
		                                               	<li><i class="fas fa-book-open"></i> <b> Coding Thesis Writing Help</b></a> </li>
		                                               	<li><i class="fas fa-book-open"></i> <b> MBA Thesis Writing Help</b> </a></li>
		                                               	<li><i class="fas fa-book-open"></i><a class="text-white" href="https://www.assignnmentinneed.com/business-assignment-writing-help"><b> Business Thesis Writing Help</b> </a></li>
				                                     </ul>
			                                     </div>
		                                    </div>
										</div>
	                               </div>
                                </div>
                           </div>
						 
					</div>
				</div>
			</div>
		</div>
	</section>

    <!-- Discover a Stress-Free Thesis Research Paper Writing Help -->
    <section>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="title-column col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="title-box">
                            <div class="section-color-layer"></div>
                            <h2 style="font-weight:500; font-size: 30px;; color:black" class="my-4" >Discover a Stress-Free Thesis Research Paper Writing Help</h2>
                            <p>When you ask us to “help me write my thesis paper.” Assignment in Need’s premium research team is dedicated to providing top-quality thesis support for Master’s and Ph.D. students across all subjects, ensuring you achieve your academic goals with ease.</p>
                            <h3>Expert Team</h3>
                            <p>Our experienced team of writers is committed to delivering personalized thesis writing help for each student. We’ve helped thousands of students succeed with their academic research, and we’re here to help you, too.</p>
                            <h3>Customized Support</h3>
                            <p>We know that every student’s needs are unique. That’s why our thesis writers online tailor our services to fit your specific goals and expectations, providing a truly personalized experience.</p>
                            <h3>Proven Success</h3>
                            <p>With a track record of helping students publish in respected journals and achieve academic milestones, Assignment in Need is a trusted partner for students worldwide. Let us help you reach your academic potential!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
               <!-- new section -->

	 <section class="py-4" style="background-color:#BFECFF;"  >
	            <div class="auto-container">
                    <div class="row clearfix">

			<!-- Content Column -->
			  <div class="content-column col-lg-6 col-md-12 col-sm-12">
				 <div class="inner-column">
					<h2 class="py-3" style="font-weight:500; font-size: 30px; color:black">Assignment in Need Provide All Subjects and Any Types of Thesis Writing Help For Students Around the Global</h2>
					  <div class="text">
						 <p>Writing a thesis can be tough, but with Assignment in Need, you’re not alone! With over 7 years of expertise and a 4.5-star rating, our expert team helps you tackle every step—from research to defence—ensuring your work is thorough, well-organized, and error-free. Our services are available in the UK, Australia, Canada, Malaysia, Spain, UAE, and more. Let us help you achieve thesis success and join the students who finish strong</p>
						</div>
					 
			          <a href="/upload-your-assignment"> <button style="background: #37AFE1;  color:black; padding: 20px 80px; border-radius: 50px; margin: 10px; font-weight: 500; 	font-size: 20px;  " >Order Now</button> </a>	 
			     </div>
			 </div>

			<!-- Image Column -->
			<div class="image-column col-lg-6 col-md-12 col-sm-12">
				<div class="inner-column">
					 <div class="image titlt"  style="mix-blend-mode: multiply;">
						<img src="images2\resource\unnamed (5).png  " alt="">  
					</div>        
				</div>
			</div>

		</div>
	</div>
            </section>

            <!-- end new section -->
 
	    <!-- FAQs Question  section for Expert Assignment Writing Help -->
 
	        
		<section class="faq-section bg-light">
	    	<div class="auto-container">
			<div class="row ">
				<div class="titel-column col-lg-12 col-md-12 col-sm-12">
				    <div class="title-box text-center">
						<h2 style="font-weight:500; font-size: 30px;; color:black" class="my-4"><b>Frequently Asked Questions For  Thesis Writing Help</b></h2> 
					 </div>
					<div class="row"> 
					 		 
				<div class="column col-lg-6 col-md-6 col-sm-12 ">
					 
					<ul class="accordion-box ">
					       <li class="accordion block">
                                <div class="acc-btn bg-white border " style="font-weight:500; font-size: 20px;; color:black">1. Can I pay someone to write my thesis?<div class="icon fa fa-angle-down"></div></div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                          <p>Yes, you can! Many professional writing services, like Assignment in Need, offer thesis writing assistance. By working with a reliable service, you’ll have access to qualified writers who can help you create a high-quality, custom thesis that meets your academic requirements.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn bg-white border " style="font-weight:500; font-size: 20px;; color:black">2. How to get better at writing a thesis?<div class="icon fa fa-angle-down"></div></div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                          <p>Improving your thesis-writing skills takes practice, planning, and learning how to structure your ideas effectively. Start by outlining your thesis and breaking it into manageable sections. Regularly reading academic papers in your field can also give you insight into the structure and style used. If you need extra guidance, consider seeking feedback from your advisor or using a professional thesis writing service like Assignment in Need to refine your work.</p>
										</div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn bg-white border " style="font-weight:500; font-size: 20px;; color:black">3. How many hours a day should you write a thesis?<div class="icon fa fa-angle-down"></div></div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                          <p>The ideal amount of time varies based on your schedule and goals. However, many successful thesis writers recommend dedicating 2-4 hours a day to focused, uninterrupted writing. Breaking your work into daily goals helps prevent burnout and ensures consistent progress.</p>
										</div>
                                    </div>
                                </div>
                            </li>
						 
                  	</ul>
					
				</div>
			
				<div class="column col-lg-6 col-md-6 col-sm-12">
					 
					<ul class="accordion-box">
					       
                    <li class="accordion block">
                                <div class="acc-btn bg-white border " style="font-weight:500; font-size: 20px;; color:black">4. Who is the best thesis paper writing help website?<div class="icon fa fa-angle-down"></div></div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                           <p>While there are many writing services available, Assignment in Need is known for its high-quality support, specialized thesis writers, and affordable prices. We focus on providing well-researched, custom-written theses tailored to each client’s academic needs, making us a top choice for students looking for reliable thesis help.</p>
										</div>
                                    </div>
                                </div>
                            </li>
							<li class="accordion block"> 
                                <div class="acc-btn bg-white border " style="font-weight:500; font-size: 20px;; color:black">5. Can I hire someone to write my thesis?<div class="icon fa fa-angle-down"></div></div>
                                  <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                            <p>Absolutely, you can hire a professional writer or service to help with your thesis. Many reputable companies, like Assignment in Need, offer qualified writers who understand academic standards and know how to create original, well-researched thesis papers.</p>
											</div>
                                    </div>
                                  </div>
                            </li>
                            <li class="accordion block"> 
                                <div class="acc-btn bg-white border " style="font-weight:500; font-size: 20px;; color:black">6. Can you pay someone to do your thesis?<div class="icon fa fa-angle-down"></div></div>
                                  <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                            <p>Yes, paying someone to assist with your thesis is a common solution for students facing time constraints or difficulties with specific sections. Assignment in Need offers comprehensive thesis writing services, allowing you to pay for expert support that can save you time, reduce stress, and help you achieve the academic results you’re aiming for.</p>
											</div>
                                    </div>
                                  </div>
                            </li>
					
					</ul>
					
				</div>
				 
				 
			     </div>
				   <div class="title-box text-center">
				   <button style="background: #37AFE1;  color:white; padding: 20px 80px; border-radius: 50px; margin: 10px; font-weight: 500; 	font-size: 20px;  " >View More FAQs</button>
				   </div> 

				</div> 
				 
 			</div>
			  
		</div>
		 
   </section> 

@endsection