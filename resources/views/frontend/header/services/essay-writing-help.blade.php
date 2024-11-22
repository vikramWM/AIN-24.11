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
            <!-- new code of conclusion -->
       <style>
		.conclsn{
			padding: 70px 0px ;
            
		}
	   </style>
	  <!-- end new code of conclusion -->
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
  
    /* newcode */
      
	.subject-container {
		background-color: #fff;
		box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;

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
		padding: 40px;
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

	 /* endnewcode */
       
	</style>
	<section class="banner-section-three header-section" >
		<div class="auto-container" style="margin-top: 100px;">
			<div style="text-align: center;">
				<ul class="page-breadcrumb">
					<li><a href="/">Home</a></li>
					<li>Essay Writing</li>
				</ul>
            </div>
            <div class="row clearfix">
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<h1 class="text-center"> Get Best Essay Writing Services With Assignment in Need </h1>
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
					<h2 style="font-weight:500; font-size: 30px;; color:black" class="text-center my-4">Our Procedure</h2>
					<p class="textCommon text-center">How Our Quality Assignment Writing Services Work  in Assignment ?</p>
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
				<h2>Our Writer</h2>
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

    <!--Master Your Essays with Expert Writing Help – From Ideas to A+ Essay -->
	<section class=" py-0">
		<div class="auto-container ">
			<div class="row clearfix">
				<div class="title-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title-box">
							<div class="section-color-layer"></div>
							<h2 style="font-weight:500; font-size: 30px;; color:black" class="  my-4">Master Your Essays with Expert Writing Help - From Ideas to A+ Essay</h2>
                            <p>Trust our expert essay writing help with your assignments and experience lightning-fast delivery of 100% original content. Since 2019, we've helped over 50,000 students achieve top grades - now it's your turn!</p>
							<p>Join 1.5M+ satisfied students who've trusted our US and Canada-based writers for over 10 years. With expertise in 200+ subjects, we deliver highly unique essays with lightning-fast turnaround - no assignment is too tough!</p>			
							 
							 
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
       <!-- order box -->
	<section class=" py-0">
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

	<!-- Discover Human Writing at its Finest -->
     <section class="py-0">
		<div class="auto-container">
			<div class="row clearfix">
				<div class="title-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title-box">
							<div class="section-color-layer"></div>
							<h2 style="font-weight:500; font-size:30px; color:black;" class="py-4">Discover Human Writing at its Finest
							</h2>
							<p>Get real results with professional writers who follow your instructions to the letter. No AI - just expert human writers ready to meet your deadlines and help you succeed!
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	 </section>
 
	 <!-- Assignment In Need – The Best Essay Writing Services -->

        <section class="py-0">
			<div class="auto-container">
				<div class="row clearfix">
					<div class="title-column col-lg-12 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="title-box">
								<div class="section-color-layer"></div>
								<h2 style="font-weight:500; font-size:30px; color:black" class="py-4">Assignment In Need - The Best Essay Writing Services</h2>
                                 <p>If you need a trustworthy cheap essay writing help that also provides the best essay helpers then Assignment in Need is the perfect place for you! At Assignment in Need we have a team of best essay helpers who are always there for you whenever you want to find someone who can “write my essay for me.”  You can choose your own writer or let our smart system match you with the right expert. Either way, you'll get excellent papers on time, and our secure platform makes sure everything is up to standard.
								 </p>							
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
     
		<!-- Why Choose Our Essay Writing Service? -->

        <section class="py-0">
			<div class="auto-container">
				<div class="row clearfix">
					<div class="title-column col-lg-12 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="title-box">
								<div class="section-color-layer"></div>
								<h2 style="font-weight:500; font-size:30px; color:black" class="py-4">Why Choose Our Essay Writing Service?
								</h2>
								<h3>100% Original Work
								</h3>
								<p>Assignment in Need is one of the best essay websites because when you choose our essay writing services, you can count on receiving a truly unique paper. Our skilled writers create every assignment from scratch, based on your specific instructions. You can expect original content with over 96% uniqueness!
								</p>
								<h3>Around-the-Clock Support
								</h3>
								<p>Our customer service team is available 24/7 to handle any "write my essay" requests. With our reliable support, you'll always have help when you need it.
								</p>
								<h3>Secure Personal Data
								</h3>
								<p>Rest easy knowing your personal information is safe with us. We use secure payment methods and protect your data according to our strict Privacy Policy whenever you trust us and say “make an essay for me.”
								</p>
								<h3>Free Unlimited Revisions
								</h3>
								<p>At Assignment in Need we try to provide cheapest essay writing help. You can request as many revisions as you need at no extra cost, within 14 or 30 days depending on your order. Our expert writers are here to make sure you're completely satisfied with your paper.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Stress-Free Essay Writing help -->
		 <section class="py-0">
			<div class="auto-container">
				<div class="row clearfix">
					<div class="title-column col-lg-12 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="title-box">
								<div class="section-color-layer"></div>
								<h2 style="font-weight:500; font-size:30px; color:black" class="py-4">Stress-Free Essay Writing help</h2>
							   <p>Getting help with your essay is super easy with us! We keep everything confidential, so there's nothing to worry about. Just send us your topic, deadline, and say “write my essay for me” and we'll take care of the rest, delivering results that will make your essay shine.
							   </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		 </section>

		 <!-- How Assignment in Need’s Essay Writing Help Works -->
       <section class="py-0">
		<div class="auto-container">
			<div class="row clearfix">
				<div class="title-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title-box">
							<div class="section-color-layer"></div>
							<h2 style="font-weight:500; font-size:30px; color:black" class="py-4">How Assignment in Need's Essay Writing Help Works</h2>
						   <p>Wondering how things go behind the scenes when you use Assignment in Need? Here's a simple breakdown on how our essay writing services work and why we are the best website to pay for an essay:
							</p>
							<h3>Checking Your Instructions
							</h3>
							<p>When you request us to “help me with my essay”, our best essay helper carefully reviews your instructions. Make sure to include detailed guidelines, your preferred sources, and any study materials. The more information you provide, the better your paper will match your needs.
							</p>
							<h3>Clarifying Details
							</h3>
							<p>If your writer has any questions, they'll reach out to you directly. This way, you can stay in touch, request updates, and ask to write my essay for me with your required changes as needed.
							</p>
							<h3>Researching the Topic
							</h3>
							<p>Your writer will dive into research to provide the best essay writing services, examining all relevant sources to build a strong foundation for your paper. They may even access exclusive databases to ensure top-notch quality.
							</p>
							<h3>Finalizing Your Paper
							</h3>
							<p>After researching, your essay paper writer will create your essay from scratch, incorporating your feedback along the way. They'll proofread and check for plagiarism before sending it to you. If you need any changes, just let your writer know. They're happy to make revisions for free, even weeks after your paper is completed.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	   </section>

	   <!-- How to Get our Essay Writing Services -->
       <section class="py-0">
		<div class="auto-container">
			<div class="row clearfix">
				<div class="title-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title-box">
							<div class="section-color-layer"></div>
							<h2 style="font-weight:500; font-size:30px; color:black" class="py-4">How to Get our Essay Writing Services
							</h2>
							<p><b>Place Your Order: </b> Tell us what you need, specify your desired essay grade and ask to write a essay for me. Just provide the details, and we'll take care of the rest.
							</p>
							<p><b>Get Matched with an Expert: </b>  We'll connect you with the best essay helper and experienced academic writer who will start crafting your custom essay according to your requirements.</p>
							<p><b>Receive and Review: </b>  Download your finished essay and use it as a model to inspire your own work and enhance your grades.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	   </section>
	   <!-- Get More than What you Paid For at Assignment in Need -->
     <section class="py-0">
		<div class="auto-container">
			<div class="row clearfix">
				<div class="title-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title-box">
							<div class="section-color-layer"></div>
							<h2 style="font-weight:500; font-size:30px; color:black" class="py-4">Get More than What you Paid For at Assignment in Need</h2>
						    <h3>Affordable Pricing
							</h3>
							<p>We provide the best essay writing services at a budget-friendly price, starting at just $10.80 per page. Use our handy calculator on the homepage to see the total cost upfront—no surprises or stress about pricing.
							</p>
							<h3>Top-Notch Security
							</h3>
							<p>At Assignment in Need, your safety is our priority. We follow a strict Privacy Policy to ensure your personal information is always securely stored.
							</p>
							<h3>On-Time Delivery
							</h3>
							<p>Need your essay done before the deadline? Just give us the date when you ask us to “write my essay for me” and our skilled writers will be committed to meeting deadlines and delivering your work with plenty of time to spare.
							</p>
							<h3>Free Plagiarism Report
							</h3>
							<p>One thing that makes us the best essay writing services is that we stand by our commitment to originality. You can request a free plagiarism report with your order to ensure your essay is completely unique.
							</p>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	 </section>

	 <!-- Our success is our customer's happy faces: -->
       <section class="py-0">
		<div class="auto-container">
			<div class="row clearfix">
				<div class="titie-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title-box">
							<div class="section-color-layer"></div>
							<h2 style="font-weight:500; font-size:30px; color:black" class="py-4">Our success is our customer's happy faces:
							</h2>
							<p>Our success is reflected in the smiles and satisfaction of our customers. Every happy face is a testament to the quality and dedication we put into every essay we write. Your success and happiness drive us to continually exceed expectations and deliver exceptional results!</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	   </section>
	   <!-- Why Hiring an Expert Essay Writer help me? -->
       <section class="py-0">
		<div class="auto-container">
			<div class="row clearfix" >
				<div class="title-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-box">
						<div class="title-box">
							<div class="section-color-layer"></div>
							<h2 style="font-weight:500; font-size:30px; color:black" class="py-4" >Why Hiring an Expert Essay Writer help me?
							</h2>
							<p>If you are wondering why to get help from essay writing services and pay someone to write a essay for me. Then you might wanna go through our below points to understand exactly how Assignment in Need's cheap essay writing help is better than doing your essay yourself:
							</p>
							<h3>Reduce Your Essay Stress with Assignment in Need
							</h3>
							<p>Writing essays can be stressful with tight deadlines and complex topics. You can ask our expert writers to “help me with my essay”. If you're feeling overwhelmed by your academic workload, you're not alone. Many students find it tough to manage everything, which can affect their well-being and grades.
							</p>
							<h3>Easy Help with Any Subject
							</h3>
							<p>Assignment in Need's essay writing help makes essay writing easy for any topic. Whether you need help with a literature review, a research paper, or a history essay, our experienced writers are ready to assist with any subject.
							</p>
							<h3>Support from Start to Finish
							</h3>
							<p>WithAssignmnt in Need, you get help throughout the entire writing process. From brainstorming ideas to polishing your final draft, our team is there to guide you and ensure your essay meets high standards.
							</p>
							<h3>Expert Help to Ease Your Stress
							</h3>
							<p>No student should have to tackle academic challenges alone. Assignment in Need provides expert help to reduce your stress, so you can focus on your education and future success.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	   </section>

	   <!-- Samples of Our Work -->
         <section class="py-0">
			<div class="auto-container">
				<div class="row clearfix">
					<div class="title-column col-lg-12 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="title-box">
								<div class="section-color-layer"></div>
								<h2 style="font-weight:500; font-size:30px; color:black" class="py-4">Samples of Our Work
								</h2>
								<p>We've prepared a selection of sample essays to showcase the high quality and academic focus of our writing services. Here's what you can expect from our work:
                               </p>
							   <p><b>Sample Essays: </b> Explore various examples of essays we've completed to see the standard of writing we deliver.</p>
							   <p><b>Quality Reports: </b> Each sample comes with a detailed quality report, highlighting the key aspects of our work and ensuring it meets academic standards.
							   </p>
							   <p><b>Plagiarism Reports: </b> We include a plagiarism report with every sample to demonstrate the originality of our content and our commitment to providing unique, custom-written essays.
							   </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		 </section>
  
         <!-- Quick and Easy Solutions to Write Your Essay by Assignment In Need -->
            <section class="py-0">
				<div class="auto-container">
					<div class="row clearfix">
						<div class="title-column col-lg-12 col-md-12 col-sm-12">
							<div class="inner-column">
								<div class="title-box">
									<div class="section-color-layer"></div>
									<h2 style="font-weight:500; font-size:30px; color:black" class="py-4">Quick and Easy Solutions to Write Your Essay by Assignment In Need
									</h2>
									<p>At Assignment In Need, we not only turn essay writing from a daunting task into a seamless experience but also provide the best essay proofreading service. So if you are looking for the best website to pay for an essay. Here's how our cheap essay writing help can make it simple:
									</p>
									<p><b>Effortless Essay Creation: </b> Share your essay topic and objectives with us, and watch as our essay paper writer transforms your ideas into a compelling essay. You provide the vision; we handle the details.
									</p>
									<p><b>Tailored Assistance for Every Need: </b> Whether you're juggling multiple assignments or just need a boost, our team is equipped to handle any essay challenge, you just have to ask us to “help me with my essay”. From creative brainstorming to precise editing, we offer a full range of services to meet your needs.
									</p>
									<p><b>Quick Turnaround with a Personal Touch:</b>  We value your time and aim to deliver the best essay writing services quickly without sacrificing quality. Our writers work efficiently while ensuring that each essay reflects your unique voice and requirements.</p>
									<p><b>Real-Time Collaboration: </b>  Stay involved in the process with our real-time updates and feedback system. From the moment you ask us to “write a essay for me”, you can communicate directly with your writer to make adjustments and ensure the final product aligns perfectly with your vision.
									</p>
									<p><b>Beyond the Basics: </b>  We go beyond standard essay writing to offer additional resources like research tips, formatting guidance, and citation help. Our goal is to not only provide great essay writing help but also empower you with skills for future success.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- Get Help with a Professional Essay Writer Now -->
          <section class="py-0">
			<div class="auto-container">
				<div class="row clearfix">
					<div class="title-column col-lg-12 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="title-box">
								<div class="section-color-layer"></div>
								<h2 style="font-weight:500; font-size:30px; color:black" class="py-4">Get Help with a Professional Essay Writer Now
								</h2>
								<p>At Assignment in Need, we have a team of over 500+ essay writing experts who are dedicated to provide the best essay writing services possible. Each of our best essay helpers is dedicated to providing you with top-quality work and cheap essay writing help. Here's how we choose our writers to ensure you get the best help:
                               <ul>
								<li><b>1. Educational Background:</b> We look for writers with strong academic credentials to make sure they have the knowledge needed for your assignments.
								</li>
								<li><b>2. Commitment to Excellence: </b> We value writers who are dedicated to delivering the highest standard of work and are passionate about what they do.
								</li>
								<li><b>3. Writing Skills: </b> We test their writing abilities to ensure they can craft clear, effective, and well-organized papers.
								</li>
								 
							   </ul>     
						 	</p>
									<p>Our writers have a wealth of experience in many different subjects and fields, so they're well-equipped to handle any academic task you might need help with. Whether you're working on an essay, a research paper, or a dissertation, you can count on our team to provide results that not only meet but exceed your expectations. We're here to make your academic journey smoother and more successful with our essay writing help.
									</p> 
							</div>
						</div>
					</div>
				</div>
			</div>
		  </section>

		  <!-- Cheap Essay Writing Services for Every Budget -->
           <section class="py-0">
			<div class="auto-container">
				<div class="row clearfix">
					<div class="title-column col-lg-12 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="title-box">
								<div class="section-color-layer"></div>
								<h2 style="font-weight:500; font-size:30px; color:black" class="py-4">Cheap Essay Writing Services for Every Budget
								</h2>
								<p>Finding quality essay writing help that fits your budget can be a challenge, but it's essential for managing your academic workload without breaking the bank. At Assignment in need, we offer affordable and cheapest essay writing services designed to meet every budget without compromising on quality.
                                </p>
								<p>Why Choose Our Cheap Essay Writing Help ?</p>
								<p><b>Cost-Effective Pricing:</b> We understand that students often have tight budgets, so we offer competitive prices starting at just $10.80 per page. Our pricing is clear and straightforward, so you know exactly what you're paying for with no hidden costs.
								</p>
								<p><b>High-Quality Work: </b> Just because our services are affordable doesn't mean you have to sacrifice quality. Our skilled writers and best essay paper writers deliver well-researched, original papers that meet high academic standards.
								</p>
								<p><b>Flexible Options: </b> Whether you need a quick turnaround or more time for a complex assignment, we have flexible options to suit your needs and budget. You can choose the level of help you need, from basic assistance to comprehensive support.
								</p>
								<p><b>Transparent Pricing: </b> Use our easy-to-use price calculator on the homepage to estimate your costs before placing an order. This way, you can budget for your essay help with confidence and find the cheapest essay help.
								</p>
								<p><b>Support for All Types of Essays: </b> From essays and research papers to theses and dissertations, we provide cheap essay writing help across a range of academic tasks. No matter what you need, we're here to support you every step of the way.
                                  </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		   </section>

		   <!-- Get Started Today -->
           <!-- <section class="py-0">
			<div class="auto-container">
				<div class="row clearfix">
					<div class="title-column col-lg-12 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="title-box">
								<div class="section-color-layer"></div>
								<h2 style="font-weight:500; font-size:30px; color:black" class="py-4">Get Started Today
								</h2>
								<p>Don't let a tight budget hold you back from getting the help you need. Explore our affordable essay writing services today and see how we can assist you with high-quality work that fits your budget.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		   </section> -->
		   <!-- new code -->
		   <section class="goal-section py-5">
	<div class="auto-container">
		<div class="row clearfix">

			<!-- Images Column -->
			<div class="images-column col-lg-6 col-md-12 col-sm-12">
				<div class="color-layer"></div>
				<div class="inner-column">
					<div class="image">
						<img src="images/resource/goal-1.jpg" alt="" />
					</div>
					<div class="image-two">
						<img src="images/resource/goal-2.jpg" alt="" />
					</div>
				</div>
			</div>

			<!-- Content Column -->
			<div class="content-column col-lg-6 col-md-12 col-sm-12">
				<div class="inner-column">
					<div class="pattern-layer-three" style="background-image:url(images/background/pattern-13.png)">
					</div>
					<div class="sec-title">
						<h2 style="font-weight:500; font-size: 30px;; color:black" class="  my-4">Get Started Today</h2>
					    <p>Don't let a tight budget hold you back from getting the help you need. Explore our affordable essay writing services today and see how we can assist you with high-quality work that fits your budget.</p>
						</div>

					<!-- Fact Counter -->
					<div class="fact-counter">
						<div class="row clearfix">

							<!-- Column -->
							<div class="column counter-column col-lg-6 col-md-6 col-sm-12">
								<div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
									<div class="content">
										<div class="count-outer count-box">
											<span class="count-text" data-speed="3000" data-stop="45000">0</span>+
										</div>
										<h4 class="counter-title">Assignments Delivered</h4>
									</div>
								</div>
							</div>

							<!-- Column -->
							<div class="column counter-column col-lg-6 col-md-6 col-sm-12">
								<div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
									<div class="content">
										<div class="count-outer count-box alternate">
											<span class="count-text" data-speed="5000" data-stop="30000">0</span>
										</div>
										<h4 class="counter-title">Happy Clients</h4>
									</div>
								</div>
							</div>

							<!-- Column -->
							<div class="column counter-column col-lg-6 col-md-6 col-sm-12">
								<div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
									<div class="content">
										<div class="count-outer count-box">
											<span class="count-text" data-speed="2000" data-stop="98">0</span>%
										</div>
										<h4 class="counter-title">Recurring Clients:</h4>
									</div>
								</div>
							</div>

							<!-- Column -->
							<div class="column counter-column col-lg-6 col-md-6 col-sm-12">
								<div class="inner wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
									<div class="content">
										<div class="count-outer count-box">
											<span class="count-text" data-speed="3500" data-stop="3000">0</span>
										</div>
										<h4 class="counter-title">3,000+ PhD Experts:</h4>
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
		    <!-- end new code -->
		   <!-- Types of Essay Writing Help Services We Offer -->
           <section class="py-0">
			<div class="auto-container">
				<div class="row clearfix">
					<div class="title-column col-lg-12 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="title-box">
								<div class="section-color-layer"></div>
								<h2 style="font-weight:500; font-size:30px; color:black" class="py-4">Types of Essay Writing Help Services We Offer
								</h2>
								<p>At Assignment in Need, we provide a wide range of essay writing services to meet your academic needs whenever you ask us to “write my essay for me”. Whether you're facing a challenging topic or a tight deadline, our expert essay paper writer is here to support you. Here's a breakdown of the types of essay writing services we offer:
								</p>
								<h3>Custom Essay Writing
								</h3>
								<p>Need a unique essay tailored to your specific requirements? Our writers craft essays from scratch based on your instructions, ensuring originality and relevance. Whether it's a narrative essay, descriptive essay, or argumentative essay, we've got you covered.
								</p>
								<h3>Research Papers
								</h3>
								<p>Research papers require thorough investigation and detailed analysis. If you want our experienced writers to “help me with my essay” then they can help you create well-organized and insightful research papers, complete with accurate citations and a solid argument.
								</p>
								<h3>Term Papers
								</h3>
								<p>Term papers often involve extensive research and a deep understanding of your subject. Our team can assist with every stage of writing your term paper, from researching and outlining to drafting and revising.
								</p>
								<h3>Descriptive Essays
								</h3>
								<p>Descriptive essays focus on painting a vivid picture through detailed descriptions. We can help you craft engaging and sensory-rich essays that bring your topics to life.
								</p>
								<h3>Persuasive Essays
								</h3>
								<p>Need to convince your readers of a particular viewpoint? Our writers specialize in persuasive essays, using strong arguments and effective writing techniques to support your position.
								</p>
								<h3>Analytical Essays
								</h3>
								<p>Analytical essays require you to analyze and interpret various aspects of a topic. Our experts can help you break down complex subjects and present a clear and thoughtful analysis.
                                   </p>
								<h3>Essay Proofreading Service
								</h3>
								<p>Already have a draft but need a final polish? Our editing and best essay proofreading service ensure your essay is free from errors, well-structured, and ready for submission.
								</p>
								<h3>Formatting and Citation Help
								</h3>
								<p>Proper formatting and citation are crucial for academic papers. We provide formatting services in various styles (APA, MLA, Chicago) and ensure your citations are accurate and complete.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		   </section>

		   <!-- Easy Steps to Connect with Your Ideal Writer -->
             <section class="py-0">
				<div class="auto-container">
					<div class="row clearfix">
						<div class="title-column col-lg-12 col-md-12 col-sm-12">
							<div class="inner-column">
								<div class="title-box">
									<div class="section-color-layer"></div>
									<h2 style="font-weight:500; font-size:30px; color:black" class="py-4">Easy Steps to Connect with Your Ideal Writer
									</h2>
									<p>If you need help with your essay and want to find the perfect writer for your project, Assignment in Need makes it simple. Here's how you can easily connect with the right expert:</p>
								       <p><b>Log In to Your Account: </b> To keep track of your assignment and monitor progress, start by logging into your account.
                                        </p>
									   <p><b>Order Placement and Matching: </b>  After placing your order, our advanced AI technology will quickly find the best writer for your specific needs. This ensures you get a writer who is well-suited to your task.
									   </p>
									   <p><b>Choose Your Writer: </b> From the list of recommended writers provided by the system, select the one who fits your preferences and requirements.
									   </p>
									   <p><b>Direct Communication: </b> Use our direct chat feature to communicate with your chosen writer. You can discuss any extra details or specific needs for your assignment.
									   </p>
									   <p><b>Add Funds and Start Writing: </b> Once you've made your choice, add funds to your account. This will start the writing process with your selected writer. Your payment is securely held until your paper is completed to your satisfaction.
									   </p>
								</div>
							</div>
						</div>
					</div>
				</div>
	 </section>
          
	 <!-- Who Motivates Us to Be One of the Best Essay Writing Services? -->
        <section class="py-0">
			<div class="auto-container">
				<div class="row clearfix">
					<div class="title-column col-lg-12 col-md-12 col-sm-12" >
						<div class="inner-column">
							<div class="title-box">
								<div class="section-color-layer"></div>
								<h2 style="font-weight:500; font-size:30px; color:black" class="py-4">Who Motivates Us to Be One of the Best Essay Writing Services?
								</h2>
								<p>At Assignment in Need, our commitment to providing exceptional essay writing help is driven by our dedication to your success. What motivates us to be the best essay writing services in the world? It's simple:
								</p>
								<p><b>Your Academic Success: </b> We are passionate about helping students achieve their academic goals. Your success is our top priority, and we strive to deliver essays that not only meet but exceed your expectations.
								</p>
								<p><b>Our Skilled Writers: </b> Our team of top essay writers is the heart of our service. Their expertise, dedication, and commitment to quality inspire us to continually improve and provide the best possible support.
								</p>
								<p><b>Our Reputation: </b> We're motivated by the trust and positive feedback from our clients. Your satisfaction and the reputation we've built drive us to maintain high standards and deliver reliable, top-notch essay writing help.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Experience Top-Quality Essay Writing Help -->

          <section class="py-0">
			<div class="auto-container">
				<div class="row clearfix">
					<div class="title-column col-lg-12 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="title-box">
								<div class="section-color-layer"></div>
								<h2 style="font-weight:500; font-size:30px; color:black" class="py-4">Experience Top-Quality Essay Writing Help</h2>
						      <p>Trust our dedicated team of expert writers to provide you with reliable and high-quality essay writing help. At Assignment in Need, we are committed to making your academic journey easier and more successful. Reach out to us today and let us assist you with effortless essay writing for any subject.

                                 </p>
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
					<h2 class="py-3" style="font-weight:500; font-size: 30px; color:black">Affordable Essay Writing Help Services across the Globe</h2>
					<div class="text">
						 <p>Students worldwide strive for academic success, and Assignment In Need supports this journey by offering reliable essay writing help services to students in Canada, Malaysia, UAE, Spain, the UK, and Australia. With affordable prices, it provides a global solution for students seeking quality assistance. The platform boasts an impressive record, with 98.2% of orders arriving timely and 9/10 users reporting improved grades. No matter the location, expert writers are ready to assist with essay tasks, allowing students to focus on their studies and achieve their academic goals with confidence.</p>
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
     <!-- FAQs Question  section for essay -->
 
	        
 <section class="faq-section bg-light">
	    	<div class="auto-container">
			<div class="row ">
				<div class="titel-column col-lg-12 col-md-12 col-sm-12">
				    <div class="title-box text-center">
						<h2 style="font-weight:500; font-size: 30px;; color:black" class="my-4"><b>Frequently Asked Questions For Essay Writing Help Services</b></h2> 
					 </div>
					<div class="row"> 
					 		 
				<div class="column col-lg-6 col-md-6 col-sm-12 ">
					 
					<ul class="accordion-box ">
						<li class="accordion block ">
							<div class="acc-btn bg-white border " style="font-weight:500; font-size: 20px;; color:black" >1. Can you help with writing essays for specific academic disciplines, like literature or science?<div class="icon fa fa-angle-down"></div></div>
							<div class="acc-content" style="display: none;">
								<div class="content">
									<div class="text">
										 <P>Yes, we provide specialized essay writing help across various academic disciplines, including literature, science, social sciences, and more. Our writers have expertise in a wide range of subjects to meet your academic needs.</P>
									</div>
								</div>
							</div>
						</li>
						<li class="accordion block ">
							<div class="acc-btn  bg-white  border" style="font-weight:500; font-size: 20px;; color:black">2. Can you help with understanding and implementing specific essay requirements from my professor?<div class="icon fa fa-angle-down"></div></div>
							<div class="acc-content"  >
								<div class="content">
									<div class="text">
										 <P>Yes, we can help you understand and implement specific essay requirements from your professor. Provide us with the details and guidelines given by your professor, and our writers will ensure that your essay meets those requirements precisely.</P>
									</div>
								</div>
							</div>
						</li>
						
						<li class="accordion block">
							<div class="acc-btn bg-white  border" style="font-weight:500; font-size: 20px;; color:black" >3. Can I pay someone to do my essay?<div class="icon fa fa-angle-down"></div></div>
							<div class="acc-content" style="">
								<div class="content">
									<div class="text">
										 <P>Yes, you can pay for professional essay writing services. Our team of experienced writers can assist you with crafting high-quality essays based on your specific requirements. Simply provide details about your essay, and we will handle the writing process for you.</P>
									</div>
								</div>
							</div>
						</li>
                  	</ul>
					
				</div>
			
				<div class="column col-lg-6 col-md-6 col-sm-12">
					 
					<ul class="accordion-box">
					 
						
						<li class="accordion block">
							<div class="acc-btn bg-white  border" style="font-weight:500; font-size: 20px;; color:black">4. What helps you write an essay?<div class="icon fa fa-angle-down"></div></div>
							<div class="acc-content" style="">
								<div class="content">
									<div class="text">
										 <P>Key factors include a clear understanding of the topic, a structured outline, a strong thesis statement, thorough research, and effective writing tools.</P>
									</div>
								</div>
							</div>
						</li>
						
						<li class="accordion block">
							<div class="acc-btn bg-white  border" style="font-weight:500; font-size: 20px;; color:black">5. What if I need assistance with multiple revisions?<div class="icon fa fa-angle-down"></div></div>
							<div class="acc-content" style="">
								<div class="content">
									<div class="text">
										 <P>If you need multiple revisions, we provide ongoing support to make the necessary changes. You can request as many revisions as needed to ensure your essay meets your requirements and academic expectations</P>
									</div>
								</div>
							</div>
						</li>
						
						<li class="accordion block">
							<div class="acc-btn bg-white  border" style="font-weight:500; font-size: 20px;; color:black">6. What steps do you take to ensure the essay is well-researched?<div class="icon fa fa-angle-down"></div></div>
							<div class="acc-content" style="">
								<div class="content">
									<div class="text">
										 <P>Our writers conduct thorough research using credible sources relevant to your topic. We ensure that all necessary information is gathered and integrated into the essay to support your arguments and meet academic standards.</P>
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
       
   <!-- as it is -->
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