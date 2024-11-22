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
	  /* newcode */
      
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
					<li>Homework Writing</li>
				</ul>
            </div>
            <div class="row clearfix">
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<h1 class="text-center"> Get Homework Writing Help from Experts Now at 40% OFF
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

    <!-- Ace Your Homework with Expert Help, Fast and Affordable!  -->
	<section class=" py-0">
		<div class="auto-container ">
			<div class="row clearfix">
				<div class="title-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title-box">
							<div class="section-color-layer"></div>
							<h2 style="font-weight:500; font-size: 30px;; color:black" class="  my-4">Ace Your Homework with Expert Help, Fast and Affordable! </h2>
                            
						   
							 <p>Get top-notch homework assistance from professionals, delivered quickly and at a price that won't break the bank.
							 </p>
							 
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
    
	<!-- AssignmentInNeed: Your Go-To Homework Writing Service for Hiring Best Homework Help Writers -->

	 <section class="py-0">
		<div class="auto-container">
			<div class="row clearfix">
				<div class="title-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title-box">
							<div class="section-color-layer"></div>
							<h2 style="font-weight:500; font-size:30px; color:black" class="py-4">AssignmentInNeed: Your Go-To Homework Writing Service for Hiring Best Homework Help Writers
							</h2>
							<p>Getting your homework done on time can be one of the toughest things as a student, especially when you are juggling multiple things at a time. If you are also one of those students who find himself juggling academic work with part time jobs and other responsibilities then finding a good homework writing service which provides affordable homework writing help can be a lifesaver for you. </p>
						   <p>These pro writers aren't just good at what they do, they also provide homework writing help that's tailored exactly to what you need. So where can you find such help? 
						   </p>
						   <p>At Assignment in Need you can get the support and homework help you need and deserve. If you want to pay someone to do my homework then you can trust our writers with confidence, so when your homework feels overwhelming, our expert writers will give you the boost you need to stay on track and succeed.
						   </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	 </section>

	 <!-- Why Get Homework Writing Help? -->
       <section class="py-0">
		<div class="auto-container">
			<div class="row clearfix">
				<div class="title-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title-box">
							<div class="section-color-layer"></div>
							<h2 style="font-weight:500; font-size:30px; color:black" class="py-4">Why Get Homework Writing Help?
							</h2>
							<p>Homework is supposed to help you remember what you've learned in class, but sometimes it can be a real hassle. Maybe you're not interested in the subject, or perhaps you've got more important things to do. And let's be honest—getting homework over the weekend can be the worst! Weekends should be about relaxing and hanging out with friends, not stressing over assignments. That's where Assignment In Need's homework writing service can help you. All you have to do is to share your homework details, the deadline with us and say “do my homework for me”, and before you know it, your homework will be handled. Our expert writers will create unique, high-quality homework for students from scratch that is made just for you.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	   </section>
	   <!-- Expert Homework Help Writers Across All Academic Subjects -->
        <section class="py-0">
			<div class="auto-container">
				<div class="row clearfix">
					<div class="title-column col-lg-12 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="title-box">
			<div class="section-color-layer"></div>
			<h2 style="font-weight:500; font-size:30px; color:black" class="py-4">Expert Homework Help Writers Across All Academic Subjects
			</h2>
			<p>Is it getting tough for you to find online homework help in the subject you need? And you feel like you need someone to “help me with my homework?” With Assignment in Need it doesn't matter what subject you're struggling with. Our expert homework for student service has got you covered. From Engineering and Geography to Law and Database Management—we have experts in every field.
			</p>
			<p><b>Engineering: </b> Stuck on tricky concepts like Computer Aided Design or Aerospace Engineering? Don't worry—our homework writer online can break down even the most complicated topics into something easy to understand.
			</p>
			<p><b>English: </b> Whether you need help analyzing Shakespeare or working on literary devices, our team can handle every part of your English homework, from writing to editing and proofreading.
			</p>
			<p><b>Geography: </b> Need assistance with a Geography exam or a paper? Our experts know exactly how to include the right examples, diagrams, and details to make your work shine.
            </p>
			<p><b>Law: </b> Whether it's Business Law, Constitutional Law, or any other legal subject, our online homework help is here to help. If you need a custom essay or just some guidance with a Law assignment, we're ready to assist.
			</p>
			<p><b>Management: </b> Struggling with project management, supply chain, or operations homework? Our experts can help you understand and complete your assignments with ease.
			</p>
			<p>But that's not all! We also offer help in Nursing, Sports, Music, Sociology, Statistics, Graphic Design, and many more subjects. Check out our other homework for student services:
			</p>
             
	<div class="subject-container card bg-light">
				<div class="row justify-container-center align-item-center">
					<!-- <div class="col-lg-4 text.center">
					<img src="https://bestclasshelpaustralia.com/assets/lp/images/img4.webp" alt="Happy Woman" class="subject-image">
				   </div> -->
		 <div class="col-lg-12 ">
	              <div class="subject-list-box ">
		         <div class="row ">
				   <div class="col-md-4">
					     <ul class="subject-list">
                          <li><i class="fas fa-book-open"></i>Architecture Homework Help </li>
					      <li><i class="fas fa-book-open"></i>Economics Homework Help 
					      </li>
					     <li><i class="fas fa-book-open"></i>Marketing Homework Help </li>
					      <li><i class="fas fa-book-open"></i>Business Homework Help 
					      </li>
					     <li><i class="fas fa-book-open"></i>English Homework Help</li>
					      
						</ul>
			      </div>

		        	<div class="col-md-4">
		        		 <ul class="subject-list">
						 <li><i class="fas fa-book-open"></i>Primary Homework Help
					     </li>
					     <li><i class="fas fa-book-open"></i>History Homework Help</li>
					   
                       <li><i class="fas fa-book-open"></i>School Homework Help 
		        		 </li>
		        		 <li><i class="fas fa-book-open"></i>Maths Homework Help 
		        		  </li>
		        		 <li><i class="fas fa-book-open"></i>Probability Homework Help 
		        		  </li>
		        		 
		        		  
		                </ul>
		           </div>
				   <div class="col-md-4">
		        		 <ul class="subject-list">
						 <li><i class="fas fa-book-open"></i>College Homework Help 
		        		  </li>
		        		 <li><i class="fas fa-book-open"></i>Science Homework Help 
		        		  </li>
		        		 <li><i class="fas fa-book-open"></i>Nursing Homework help 
		        		  </li>
		        		 <li><i class="fas fa-book-open"></i>Sociology Homework help
		        		  </li>
		     			 <li><i class="fas fa-book-open"></i>Engineering Homework help
		        		  </li>
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
			</div>
    	</section>

	<!-- Make Time for What Matters—We’ll Handle the Homework! -->

     <section class="py-0">
		<div class="auto-container">
			<div class="row clearfix">
				<div class="title-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title-box">
							<div class="section-color-layer"></div>
							<h2 style="font-weight:500; font-size:30px; color:black" class="py-4">Make Time for What Matters—We'll Handle the Homework!
							</h2>
							<p>Don't let homework take over your time—let our Ph.D. writers handle it so you can focus on what really matters!
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	 </section>
	 <!-- Why Our Homework Writing Help Is Best Home Work Writing Services In the world -->
      <section class="py-0">
		<div class="auto-container">
			<div class="row clearfix">
				<div class="title-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title-box">
							<div class="section-color-layer"></div>
							<h2 style="font-weight:500; font-size:30px; color:black" class="py-4">Why Our Homework Writing Help Is Best Home Work Writing Services In the world
							</h2>
							<p>Our expert homework writing service is always here to make things easier whenever you need to pay someone to do my homework. With Assignment in Need's homework writing help all you have to do is ask our expert homework writers to “help me with my homework.” At Assignment in Need, we understand how challenging it can be to balance schoolwork with other aspects of life. Our team of expert professionals is here to provide guidance and support across a wide range of subjects and assignments, turning tough situations into valuable learning experiences.
							</p>
							<p>Here's what you can expect when you choose Assignment in Need and ask them to “do my homework”:
							<ul>
								<li><b>1. Expert Guidance: </b> Access help from highly educated experts across various fields with Assignment in Need the best homework writing website.
								</li>
								<li><b>2. Customized Support: </b> Receive assistance tailored to your specific study needs and goals.
								</li>
								<li><b>3. Original Work: </b> We guarantee plagiarism-free work and ensure everything is uniquely yours.
								</li>
								<li><b>4. Timely Delivery: </b> We adhere to your deadlines, making sure your work is completed on time.
								</li>
								<li><b>5. Privacy Protection: </b> Your personal and payment information is kept secure and confidential.
								</li>
								<li><b>6. 24/7 Support: </b> Our online homework help is available whenever you need it, day or night.
								</li>
								<li><b>7. Free Revisions: </b> If something doesn't meet your expectations, you can request changes until you're satisfied.
								</li>
								<li><b>8. Satisfaction Guarantee: </b> We're committed to delivering work that meets and exceeds your academic goals.
								</li>
							</ul>
						</p>
						<p>When you choose Assignment in Need, you choose a team that is dedicated to your academic success. With our all-in-one approach, you can handle everything from complex research projects to detailed case studies.
						</p>
						</div>
					</div>
				</div>
			</div>
		 </div>
	  </section>

	  <!-- Need Someone to Handle Your Holiday Homework? Assignment In Need Has You Covered -->
        <section class="py-0">
			<div class="auto-container">
				<div class="row clearfix">
					<div class="title-column col-lg-12 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="title-box">
								<div class="section-color-layer"></div>
								<h2 style="font-weight:500; font-size:30px; color:black" class="py-4">Need Someone to Handle Your Holiday Homework? Assignment In Need Has You Covered
								</h2>
								<p>Don't let holiday homework spoil your break! Assignment In Need's cheap homework help service is here to take the load off your shoulders. Our expert writers can handle any holiday assignment, giving you the freedom to enjoy your time off. From essays to projects, we've got you covered so you can relax and make the most of your holidays. Trust us to take care of your homework while you unwind.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
          
		<!-- Why Students Need Help Top Homework Writers for Success -->
      <section class="py-0">
		<div class="auto-container">
			<div class="row clearfix">
				<div class="title-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title-box">
							<div class="section-color-layer"></div>
							<h2 style="font-weight:500; font-size:30px; color:black" class="py-4">Why Students Need Help Top Homework Writers for Success</h2>
							 <p>If you are still on edge about getting online homework help then below are just a few reasons why students across the world ask our expert writers to “do my homework” and consider Assignment in Need as one of the best homework writing websites:
							 </p>
							 <p>What We Offer: </p>
							  <p><b>Helpful Resources: </b> Our team provides access to a variety of academic resources, including blogs, sample assignments, and useful tools.
							  </p>
							  <p><b>Detailed Proofreading: </b> We make sure your work is error-free by following thorough proofreading guidelines.
							  </p>
							  <p><b>Secure Payments: </b> Pay safely with trusted methods like PayPal, Apple Pay, and credit/debit cards.
							  </p>
							  <p><b>Confidentiality: </b> Your personal information stays private—no details are shared with anyone else.
							  </p>
							  <p><b>Expert Guidance: </b> Our writers bring industry insights and academic expertise to help you get the best results.
							  </p>
							  <p>We understand that crafting a perfect homework can be overwhelming, but you always have the option to hire someone to do my homework. And with just one click you can get guidance from expert writers.
							  </p>
							  <p>So, make a smart move and let Assignment in Need's experts assist with your homework. We're only a few clicks away from making your academic life smoother and more manageable. 
							  </p>
						</div>
					</div>
				</div>
			</div>
		 </div>
  </section>
  <!-- Hire Online Homework Experts for Every Type of Paper -->
   <section class="py-0">
	<div class="auto-container">
		<div class="row clearfix">
			<div class="title-column col-lg-12 col-md-12 col-sm-12">
              <div class="inner-column">
				<div class="title-box">
					<div class="section-color-layer"></div>
					<h2 style="font-weight:500; font-size:30px; color:black" class="py-4">Hire Online Homework Experts for Every Type of Paper
					</h2>
					<p>Struggling with your homework? Our team of experienced online homework help experts at Assignment in Need are here to assist you with any type of academic paper. Whether you need help with essays, research papers, case studies, lab reports, term papers, dissertations, book reviews, presentations, or any other assignment, we've got you covered. If you want Assignment in Need's professional homework writers to “write my homework for me” then don't worry, we will  deliver high-quality, original work that is tailored to your specific requirements, ensuring you meet your deadlines and achieve the grades you desire. 
					</p>
				</div>
			  </div>
			</div>
		</div>
	</div>
   </section>
   <!-- Get Best Homework Proofreading and Editing Services -->
       <section class="py-0">
		<div class="auto-container">
			<div class="row clearfix">
				<div class="title-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title-box">
							<div class="section-color-layer"></div>
							<h2 style="font-weight:500; font-size:30px; color:black" class="py-4">Get Best Homework Proofreading and Editing Services
							</h2>
							<p>If you are feeling worn out, not in the mood to proofread your homework, and feel like you want to “pay someone to do my homework” then you can get Assignment in Need's professional proofreading and editing services. It doesn't matter whether you are in a rush to meet a deadline or just need someone to go through your homework and review it. Our online homework writing help is perfect for catching errors and offering quick fixes. If you've got the time, our professional proofreaders can take a deeper dive into your paper, correcting any grammar and spelling mistakes and refining the overall readability.
							</p>
							<p>Here's what you can look forward to with Assignment in Need's online homework help when you ask us to “do my homework for me”:
                            </p>
							<p><b>Perfect Formatting and Structure: </b> Your ideas deserve to be presented clearly, and that starts with a well-structured assignment. Our free homework for student service thoroughly checks your work's format and structure to make sure everything flows smoothly.
							</p>
							<p><b>Proper Citations and Referencing: </b> Avoid the hassle of plagiarism worries with our service's citation and referencing assistance. We ensure every source is correctly cited and that your references are formatted properly.
							</p>
							<p><b>Grammar Cleanup: </b> Our proofreader tool addresses common grammar slip-ups like run-on sentences, incorrect pronouns, subject-verb disagreements, sentence fragments, misplaced modifiers, and excessive passive voice. By polishing these issues, we help you raise the quality of your assignment and increase your chances of top grades.
							</p>
							<p><b>Free Plagiarism Scans: </b> Along with our proofreading services, we offer free plagiarism checks at Assignment in Need. Our advanced plagiarism detection tools identify and correct any copied content, and we even provide a complimentary Turnitin report to guarantee the originality of your paper.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	   </section>
 
       <!-- Unbeatable Discounts on Professional Homework Writing Services -->
             <section class="py-0">
				<div class="auto-container">
					<div class="row clearfix">
						<div class="title-column col-lg-12 col-md-12 col-sm-2">
							<div class="inner-column">
								<div class="title-box">
									<div class="section-color-layer"></div>
									<h2 style="font-weight:500; font-size:30px; color:black" class="py-4">Unbeatable Discounts on Professional Homework Writing Services
									</h2>
									<p>Looking for great deals on online homework help? Assignment in Need got you covered with unbeatable discounts and cheap homework help service that make getting top-notch academic assistance more affordable than ever whenever you feel like you want to “pay someone to do my homework.”
									</p>
									<p><b>Refer 4 Friends, Get a Group Project for FREE: </b> Need help with a group project? Refer 4 friends to our service, and we'll take care of it at no cost to you!
									</p>
									<p><b>Place 5 Orders, Get 1 FREE: </b> Got multiple assignments? Place 5 orders with us, and we'll throw in an additional one for free. It's the perfect way to save while staying on top of your coursework.
                                      </p>
									<p><b>Flat 40% Off Every Order: </b> Enjoy a flat 40% discount on every order you place. No strings attached—just great savings every time you need homework help.
                                    </p>
									<p><b>Recommend and Earn: </b> Love our homework writing service? Share it with others and earn money for every successful recommendation. It's a win-win!
									</p>
									<p><b>Refer a Friend, Get 10% Off Their First Order: </b>  Help a friend out by referring them to our service, and they'll get 10% off their first order. Plus, you'll get the satisfaction of knowing you've helped them save!
									</p>
									<p>Don't miss out on these incredible offers—take advantage of our discounts and get the homework writing help you need at unbeatable prices!
									</p>
								</div>
							</div>
						</div>
					</div>
				 </div>
		 </section>
		 <!-- Looking for an Online Homework Writer? Get Affordable Experts at Assignment In Need -->
        <section class="py-0">
			<div class="auto-container">
				<div class="row clearfix">
					<div class="title-column col-lg-12 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="title-box">
								<div class="section-color-layer"></div>
								<h2 style="font-weight:500; font-size:30px; color:black" class="py-4">Looking for an Online Homework Writer? Get Affordable Experts at Assignment In Need
								</h2>
								<p>Struggling with your homework? Look no further! At Assignment In Need you can “pay someone to do my homework”, we connect you with affordable, experienced homework writer online who are ready to help you succeed. Whether it's an essay, research paper, or any other assignment, our experts are here to make your life easier. Quality work doesn't have to break the bank—get top-notch homework assistance at prices that fit your budget. Don't let homework stress you out—get the help you need today with Assignment In Need!
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
         
		<!-- Why Choose Assignment Help from Our Experts? -->
         <section class="py-0">
			<div class="auto-container">
				<div class="row clearfix">
					<div class="title-column col-lg-12 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="title-box">
								<div class="section-color-layer"></div>
								<h2 style="font-weight:500; font-size:30px; color:black" class="py-4">Why Choose Assignment Help from Our Experts?
								</h2>
								<p>At Assignment in Need, we offer you the unique opportunity to work with top-tier experts across a wide range of academic fields. Whether you're struggling with a complex project or simply need guidance to perfect your assignment, our professionals are here to help. By collaborating with our experts and asking them to “do my homework for me”, you can be confident that your work will be completed on time and to the highest standards.</p>
							
								<h3>Extensive Expertise Across All Subjects
							   </h3>
							   <p>No assignment is too challenging for our experts. We have specialists in every academic discipline, ready to provide you with clear and effective solutions to any problem you might face. Whether you're searching for strong arguments and reliable sources for your essay or need homework writing help in untangling a complicated polynomial equation in algebra, our Assignment in Need's homework writing experts have the knowledge and experience to guide you. They are well-versed in their respective fields and can assist with everything from research papers to technical assignments, ensuring that you receive the help you need to succeed.
							   </p>
							   <h3>Personalized Communication with Experts
							   </h3>
							   <p>We believe that communication is key to getting the best results. That's why we allow you to chat directly with our experts before you ask them to “help me with my homework”. This gives you the chance to ask questions, gauge their expertise, and decide who you feel most comfortable working with. It's not just about reviews and ratings—your own impression matters too. Once you've selected the perfect professional for your assignment, you can stay in touch with them throughout the process. This means you can discuss your project in detail, request updates, and make sure everything is on track. Our experts are approachable and responsive, ensuring that your needs are met every step of the way.
							   </p>
							   <h3>Thoroughly Verified Professionals
							   </h3>
							   <p>We know how important it is to trust the person handling your assignment. That's why we rigorously verify every homework writer online. Before we bring them on board, we check their identity through social media and other means to ensure they are who they say they are. We only work with professionals who meet our high standards, so you can have peace of mind knowing that your assignment is in good hands.
							   </p>
							   <h3>Proven Skills Through Rigorous Testing
							   </h3>
							   <p>Quality is our top priority, and we take every measure to ensure that our experts are up to the task. Each candidate undergoes a series of skill assessments and examinations to test their knowledge and capabilities across various academic fields. We at Assignment in Need don't just take their word for it—we thoroughly evaluate their education and work experience to ensure it aligns with their claims. This rigorous process ensures that when you pay someone to do my homework, an expert from Assignment in Need, you're getting someone who truly knows their stuff and can deliver high-quality work.
							   </p>
							   <h3>Ongoing Quality Assurance
							   </h3>
							   <p>To maintain the highest standards and keep being the homework writing website, we've developed an AI-based system that continuously monitors the performance of our experts. This system analyzes the quality of their work, taking into account data and client reviews to create a reliable rating system. You can trust that the expert you choose is not only skilled but also consistently delivers excellent homework writing service. We also go the extra mile to verify the authenticity of each review, ensuring that you're getting accurate feedback when making your decision.
							   </p>
							   <h3>Qualified Assistance from Top Graduates
							   </h3>
							   <p>Our experts are graduates from some of the world's most prestigious universities, bringing a wealth of knowledge and experience to the table. We meticulously verify their diplomas and credentials to ensure they are legitimate and reflect the education level they claim. This means that when you choose Assignment in Need, you're not just getting homework writing help—you're getting guidance from someone who has proven themselves at the highest academic levels.
							   </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		 </section>

		 <!-- Can You Help Me with My Homework? Absolutely, We’re Here to Serve You -->
         <section class="py-0">
			<div class="auto-container">
				<div class="row clearfix">
					<div class="title-column col-lg-12 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="title-box">
								<div class="section-color-layer"></div>
								<h2 style="font-weight:500; font-size:30px; color:black" class="py-4">Can You Help Me with My Homework? Absolutely, We're Here to Serve You
								</h2>
								<p>Overwhelmed by your homework? And want our expert writers to “help me with my homework?” Don't worry, we've got your back! At Assignment In Need, we're dedicated to helping you tackle any homework challenge. Our team of skilled writers is ready to provide the support you need to succeed. Whether it's a tight deadline or a tricky assignment, we're here to ensure you get the homework writing help you deserve. Your success is our priority—let us help you achieve it!
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		 </section>
 
		 <!-- How Assignment in Need’s Homework Writing Help Works -->
             <section class="py-0">
				<div class="auto-container">
					<div class="row clearfix">
						<div class="title-column col-lg-12 col-md-12 col-sm-12">
							<div class="inner-column">
								<div class="title-box">
									<div class="section-color-layer"></div>
									<h2 style="font-weight:500; font-size:30px; color:black" class="py-4">How Assignment in Need's Homework Writing Help Works
									</h2>
									<p>Curious about what happens when you use Assignment in Need and ask our expert writers to “do my homework?”3 Here's a simple overview of how our homework writing service operates and why we are the top choice for students who need online homework help:</p>
								        <h3>Reviewing Your Instructions
										</h3>
										<p>When you ask us to “help me with my homework,” our expert homework helper carefully goes through your instructions. Be sure to include detailed guidelines, your preferred sources, and any study materials. The more information you share, the better your homework will fit your needs.
										</p>
										<h3>Clarifying Details
										</h3>
										<p>If your writer has any questions, they'll reach out to you directly. This keeps the communication open, allowing you to request updates and make any necessary changes along the way.
										</p>
										<h3>Researching Your Topic
										</h3>
										<p>Your writer will dive into thorough research, exploring all relevant sources to create a strong foundation for your homework. They may even access exclusive databases to ensure your essay is of the highest quality.
										</p>
										<h3>Crafting and Finalizing Your Essay
										</h3>
										<p>Once the research is done, your writer will start crafting your homework from scratch, making sure to incorporate any feedback you provide. After writing, they'll proofread the homework and check for plagiarism before sending it to you. If you need any revisions, just let your homework writer online know—they're happy to make changes for free, even weeks after the homework is delivered.
										</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			 </section>
        
			 <!-- Why we are the Best -->
              <section class="py-0">
				<div class="auto-container">
					<div class="row clearfix">
						<div class="title-column col-lg-12 col-md-12 col-sm-12">
							<div class="inner-column">
								<div class="title-box">
									<div class="section-color-layer"></div>
									<h2 style="font-weight:500; font-size:30px; color:black" class="py-4">Why we are the Best
									</h2>
									<p>Assignment In Need offers to do any kind of homework accurately at a cheap price. You can choose our homework writing service any time (day or night). We work 24/7. We complete the homework with proper referencing and citations. Having completed the work if you want any changes we will do it for free as we provide unlimited modifications. Our work is 100% original. Working with Master's or PhD graduates ensures you have quality work.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			  </section>
        
			  <!-- Will You Complete My Homework for Me? Secure the Best Homework Writer Here -->
             <section class="py-0">
				<div class="auto-container">
					<div class="row clearfix" >
						<div class="title-column col-lg-12 col-md-12 col-sm-12">
							<div class="inner-column">
								<div class="title-box">
									<div class="section-color-layer"></div>
									<h2 style="font-weight:500; font-size:30px; color:black" class="py-4">Will You Complete My Homework for Me? Secure the Best Homework Writer Here
									</h2>
									<p>Looking for someone to “do my homework for me?” You've come to the right place! At Assignment In Need, we connect you with the best homework writers who are ready to take on your assignments. Our experts deliver top-quality work that meets your academic needs, so you can focus on what matters most to you. Secure your success with the best homework assistance available—right here at Assignment In Need!
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
					<h2 class="py-3" style="font-weight:500; font-size: 30px; color:black">Quick & Affordable Online Homework Help Services around the World</h2>
					<div class="text">
					  <p>At Assignment in Need, fast and affordable online homework writing help services support students in the UAE, Spain, the UK, Australia, Canada, and Malaysia. With over 45,000 assignments delivered and an impressive 98% recurring client rate, the platform is a trusted choice for academic assistance. Balancing academic work with personal life can be challenging, which is why their expert team is dedicated to lightening the load. Skilled writers cover a wide range of subjects, providing custom assignments tailored to individual needs. Whether facing tight deadlines or complex topics, Assignment in Need ensures timely, high-quality homework solutions that keep students aligned with their academic goals.</p>
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
 
 <!-- FAQs Question  section for homework writing -->
 
	        
 <section class="faq-section bg-light">
	    	<div class="auto-container">
			<div class="row ">
				<div class="titel-column col-lg-12 col-md-12 col-sm-12">
				    <div class="title-box text-center">
						<h2 style="font-weight:500; font-size: 30px;; color:black" class="my-4"><b>Frequently Asked Questions For Homework Writing Help Services</b></h2> 
					 </div>
					<div class="row"> 
					 		 
				<div class="column col-lg-6 col-md-6 col-sm-12 ">
					 
					<ul class="accordion-box ">
						<li class="accordion block ">
							<div class="acc-btn bg-white border " style="font-weight:500; font-size: 20px;; color:black" >1. How can you assist with my homework?<div class="icon fa fa-angle-down"></div></div>
							<div class="acc-content" style="display: none;">
								<div class="content">
									<div class="text">
										 <P>We provide assistance with various types of homework by offering help with understanding the assignment, completing tasks, and providing detailed explanations. Our experts ensure that your homework meets the required standards and deadlines.</P>
										</div>
								</div>
							</div>
						</li>
						<li class="accordion block ">
							<div class="acc-btn  bg-white  border" style="font-weight:500; font-size: 20px;; color:black">2. What types of homework can you help with?<div class="icon fa fa-angle-down"></div></div>
							<div class="acc-content"  >
								<div class="content">
									<div class="text">
										 <P>We can help with a wide range of homework, including math problems, essays, research assignments, science projects, and more. Our experts are skilled in various subjects and academic levels.</P>
									</div>
								</div>
							</div>
						</li>
						
						<li class="accordion block">
							<div class="acc-btn bg-white  border" style="font-weight:500; font-size: 20px;; color:black" >3. Can I get help with homework on a tight deadline?<div class="icon fa fa-angle-down"></div></div>
							<div class="acc-content" style="">
								<div class="content">
									<div class="text">
										 <P>Yes, we offer urgent homework help services. Specify your deadline when placing an order, and we will prioritize your request to ensure timely completion without sacrificing quality</P>
									</div>
								</div>
							</div>
						</li>
						<li class="accordion block">
							<div class="acc-btn bg-white  border" style="font-weight:500; font-size: 20px;; color:black" >4. How do you ensure that my homework is original and free from plagiarism?<div class="icon fa fa-angle-down"></div></div>
							<div class="acc-content" style="">
								<div class="content">
									<div class="text">
										 <P>We guarantee originality by completing your homework from scratch and using plagiarism detection tools to verify that the work is unique. We also provide a plagiarism report if needed.</P>
										</div>
								</div>
							</div>
						</li>
                  	</ul>
					
				</div>
			
				<div class="column col-lg-6 col-md-6 col-sm-12">
					 
					<ul class="accordion-box">
					 
						
						<li class="accordion block">
							<div class="acc-btn bg-white  border" style="font-weight:500; font-size: 20px;; color:black">5. Can I request revisions if the homework doesn't meet my expectations?<div class="icon fa fa-angle-down"></div></div>
							<div class="acc-content" style="">
								<div class="content">
									<div class="text">
										 <P>Yes, you can request revisions if the homework does not meet your expectations. We offer revision services to make necessary adjustments based on your feedback.</P>
									</div>
								</div>
							</div>
						</li>
						
						<li class="accordion block">
							<div class="acc-btn bg-white  border" style="font-weight:500; font-size: 20px;; color:black">6. How do you match me with a homework helper?<div class="icon fa fa-angle-down"></div></div>
							<div class="acc-content" style="">
								<div class="content">
									<div class="text">
										<P>We match you with a homework helper based on the subject, academic level, and specific requirements of your assignment. Our team reviews your request to ensure you are paired with an expert suited to your needs</P>
									</div>
								</div>
							</div>
						</li>
						
						<li class="accordion block">
							<div class="acc-btn bg-white  border" style="font-weight:500; font-size: 20px;; color:black">7. What should I provide to get help with my homework?<div class="icon fa fa-angle-down"></div></div>
							<div class="acc-content" style="">
								<div class="content">
									<div class="text">
										<P>Provide details about your homework assignment, including the topic, instructions, and deadline. Any additional materials or notes will help our experts complete the task effectively </P>
										</div>
								</div>
							</div>
						</li>

						<li class="accordion block">
							<div class="acc-btn bg-white  border" style="font-weight:500; font-size: 20px;; color:black">8. Can I communicate with the person helping with my homework?<div class="icon fa fa-angle-down"></div></div>
							<div class="acc-content" style="">
								<div class="content">
									<div class="text">
										<P>Yes, you can communicate with your homework helper through our platform. This allows you to provide updates, ask questions, and discuss any specific requirements.</P>
										</div>
								</div>
							</div>
						</li>
							 
						<li class="accordion block">
							<div class="acc-btn bg-white  border" style="font-weight:500; font-size: 20px;; color:black">9. What if I need help with multiple subjects or assignments?<div class="icon fa fa-angle-down"></div></div>
							<div class="acc-content" style="">
								<div class="content">
									<div class="text">
										<P>We can assist with multiple subjects or assignments. Just specify your needs for each task, and we will ensure you receive support from experts in the relevant fields.</P>
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