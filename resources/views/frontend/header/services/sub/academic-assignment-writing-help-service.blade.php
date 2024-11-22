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
      /* Get 24*7 Help With Assignment Online at Assignment in Need! */
	</style>

	<style>
		/* newcode */
         /* Style the image with rounded corners */
	  /* .rounded-image {
		border-radius: 20px;
	} */

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

	/* end new code */

	</style>
	<section class="banner-section-three header-section" >
		<div class="auto-container" style="margin-top: 100px;">
			<div style="text-align: center;">
				<ul class="page-breadcrumb">
					<li><a href="/">Home</a></li>
					<li>Get Academic Assignment Writing Help</li>
				</ul>
            </div>
            <div class="row clearfix">
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<h1 class="text-center"> Get Academic Assignment Writing Help to Enhance Your Academic Skills
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

    <!--Academic Assignment Writing Help Services Online -->
	<section class=" py-0">
		<div class="auto-container ">
			<div class="row clearfix">
				<div class="title-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title-box">
							<div class="section-color-layer"></div>
							<h2 style="font-weight:500; font-size: 30px;; color:black" class="  my-4"> Academic Assignment Writing Help Services Online
                            </h2>
                           <p>Are you feeling overwhelmed by assignments? Don't worry! Assignment in Need is here to help. Many students from universities, graduates, and postgraduates are searching for support to turn in their work on time. With so many assignments piling up, it can be tough to keep up. That's why getting the best academic assignment writing help from trusted writing services is a great solution. </p>
                           <p>For nearly ten years, Assignment in Need's academic assignment Services has been assisting students with everything from online courses to essays and research papers. Our academic writing assignments help you to focus on what matters most to you, beyond just academics. Join the happy students who rely on us every day for their cheap academic writing help needs!</p>
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

    <!-- What are Academic Assignments help? -->
     <section>
        <div class="auto-container">
            <div class="row cleafix">
                <div class="title-column  col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                         <div class="title-box">
                            <div class="section-color-layer"></div>
                            <h2 style="font-weight:500; font-size: 30px;; color:black" class="  my-4">What are Academic Assignments help?</h2>
                            <p>Think of online academic assignment help as your personal support system for tackling academic tasks. We at Assignment in Need offer a range of academic writing support to assist students who might be struggling to finish their assignments. Whether it's essays, research papers, presentations, or even dissertations, we've got your back across various subjects and academic levels, all you have to do is to ask us to "do my academic writing help."</p>
                         </div>
                    </div>
                </div>
            </div>
        </div>
     </section>

     <!-- Steps to Writing a Successful Academic Assignment -->

       <section>
        <div class="auto-container">
            <div class="row cleafix">
                <div class="title-column col-lg-12 col-md-12 col-sm-12 ">
                    <div class="inner-column">
                        <div class="title-box">
                            <div class="section-color-layer"></div>
                            <h2 style="font-weight:500; font-size: 30px;; color:black" class="  my-4">Steps to Writing a Successful Academic Assignment</h2>
                             <p>No matter if you're in university, you'll encounter writing assignments sooner or later. Here are some straightforward steps for your "help me academic writing help":</p>
                             <h3>Know What's Expected</h3>
                             <p>First things first: make sure you understand what your teacher wants. Check the content, formatting, and structure requirements. Don't forget to note the due date! Starting early is key, and if anything is unclear, reach out to your instructor for help.</p>
                             <h3>Do Your Research</h3>
                             <p>Gather the information you need by doing some research. Keep track of your sources and note down the publication details—it'll save you time later!</p>
                             <h3>Get Writing!</h3>
                             <p>Now it's time to dive into writing. Some folks prefer starting with the introduction to set the stage for their topic, while others jump straight into the main content. If you're unsure where to start, give the introduction a shot first, but don't hesitate to switch gears if you feel stuck!</p>
                             <h3>Edit and Polish </h3>
                             <p>Before you hit "submit," take a moment to proofread and edit your work. Look for any typos or unclear sentences. It's always a good idea to have a friend review it too—they might catch things you missed!</p>
                         
                            </div>
                    </div>
                </div>
            </div>
        </div>
       </section>

       <!-- Why Our Academic Help is Your Best Choice -->
       <section>
        <div class="auto-container">
            <div class="row cleafix">
                <div class="title-column col-lg-12 col-md-12 col-sm-12 ">
                    <div class="inner-column">
                        <div class="title-box">
                            <div class="section-color-layer"></div>
                            <h2 style="font-weight:500; font-size: 30px;; color:black" class="  my-4">Why Our Academic Help is Your Best Choice</h2>
                            <p>Assignment in Need's fantastic "write my academic writing help" is available Monday to Saturday, and our customer support is here for you 24/7. We know that assignments can be time-sensitive, and we're all about getting you the assignment writing help you need, when you need it. Our dedicated in-house academic writing helper is committed to ensuring you get your work on time, every time. This means you can trust us to deliver, which keeps our clients coming back to our academic writing website for more!</p>
                            <p>Over the years, we've seen how important it is to work efficiently and professionally. Our academic research and writing assignment team knows how to handle everything from assignments to academic essay help and dissertations with care. We work closely with you to make sure you get high-quality results and useful feedback. Plus, our assignment helpers collaborate to share ideas and insights, so you're always getting the best academic writing support. We take the time needed for thorough research whenever you ask us to "help me assignment", no matter the assignment's complexity.</p>
                           <p>When it comes to academic writing assignments, we pay attention to every detail to meet your specific requirements. Assignment in Need's rigorous quality checks ensure your work is original and top-notch. By working together, we can brainstorm effectively, meet deadlines, and tackle any challenges that come our way.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       </section>

       <!-- Specialized Help for Different Student Levels -->
      <section>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="title-column col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="title-box">
                            <div class="section-color-layer"></div>
                            <h2 style="font-weight:500; font-size: 30px;; color:black" class="  my-4">Specialized Help for Different Student Levels</h2>
                             <h3>University Students </h3>
                             <p>University can be a whirlwind of assignments, projects, and exams, and it's easy to feel overwhelmed. That's where Assignment in Need's assignment help come in! Our specialized academic assignment Services are designed just for you, helping college students tackle everything from tricky research papers to essays and case studies. We understand the unique pressures you face, like tight deadlines and high academic standards. With our tailored "do my academic writing help" support, you can stay on top of your workload and achieve the success you're aiming for!</p>
                             <h3>Graduate Students</h3>
                             <p>As a graduate student, you're diving into more complex topics that require a deeper understanding. Our best academic assignment writing help is here to guide you through those advanced assignments, whether it's a thesis proposal, literature review, or capstone project. Our knowledgeable academic essay help writers are equipped to provide the expert assistance you need to navigate your studies. We aim to enrich your learning experience while helping you get those assignments done.</p>
                             <h3>PhD Candidates</h3>
                             <p>Pursuing a PhD is no walk in the park! It involves extensive research and numerous writing tasks that can take up all your time. Our academic assignment Services for PhD candidates focus on high-level writing, including dissertation chapters and research papers. We know how crucial originality and thorough research are to your work. Our experienced writers are ready to offer tailored academic research and writing assignment support that streamlines your writing process, allowing you to concentrate on making significant contributions to your field.</p>
                             <h3>Other Students</h3>
                             <p>It is a crucial time as you gear up for your future academic journey. Our academic writing website is here to support students like you, making it easier to manage your assignments while improving your writing skills. Whether it's a book report, research paper, or creative writing project, Assignment in Need's online academic assignment help will guide you every step of the way. We're here to help you build confidence and develop a love for learning whenever you ask us for "write my academic writing help"!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>

      <!-- Benefits of Seeking Academic Assignment Writing Help -->
      <section>
        <div class="auto-container">
            <div class="row cleafix">
                <div class="title-column col-lg-12 col-md-12 col-sm-12 ">
                    <div class="inner-column">
                        <div class="title-box">
                            <div class="section-color-layer"></div>
                            <h2 style="font-weight:500; font-size: 30px;; color:black" class="  my-4">Benefits of Seeking Academic Assignment Writing Help</h2>
                           <h3>Boost Your Learning</h3>
                           <p>Getting the best academic assignment writing help with your assignments can provide fresh insights and different perspectives, making complex concepts easier to understand.</p>
                           <h3>Save Time</h3>
                           <p>By outsourcing your assignments to other academic writing websites like Assignment in Need, you'll free up time to focus on other important activities, hobbies, or studying for exams—without the stress!</p>
                           <h3>Achieve Better Grades</h3>
                           <p>With a professional academic writing helper on your side, you can significantly enhance your assignments, leading to improved grades and academic success.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>

      <!-- How to Choose the Right Academic Writing Service -->
      <section>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="title-column col-lg-12 col-md-12 col-sm-12 ">
                    <div class="inner-column">
                        <div class="inner-box">
                            <div class="section-color-layer"></div>
                            <h2 style="font-weight:500; font-size: 30px;; color:black" class="  my-4">How to Choose the Right Academic Writing Service</h2>
                             <p>With so many academic assignment services popping up, finding the right one can be overwhelming. Here are some tips to help you choose the best online academic assignment help wisely:</p>
                            <h3>Check the Expertise</h3>
                            <p>Academic writing is a specialized skill, so look for academic writing support with qualified writers. A solid academic research and writing assignment service will have native English speakers with expertise in various fields. If your term paper is written by someone with a PhD in your area, you can trust that you'll get top-notch quality!</p>
                            <h3>Evaluate the Pricing</h3>
                            <p>While affordability is important, be cautious of the cheapest options. Low prices often come with inexperienced writers or poor-quality academic essay help. Avoid cutting corners; instead, plan your budget carefully to ensure you're investing in quality.</p>
                            <h3>Look for Guarantees</h3>
                            <p>A reliable assignment writing help should guarantee that your papers are original and not pre-written. You deserve 100% plagiarism-free work that's thoroughly researched!</p>
                     
                            </div>
                    </div>
                </div>
            </div>
        </div>
      </section>

      <!-- Types of Academic Writing Global Assignment Help -->
        <section>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="title-column col-lg-12 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="title-box">
                                <div class="section-color-layer"></div>
                                <h2 style="font-weight:500; font-size: 30px;; color:black" class="my-4">Types of Academic Writing Global Assignment Help</h2>
                                 <h3>Essay Writing Help</h3>
                                 <p>Assignment in Need's expert academic essay help can help you craft engaging essays that meet your specific needs, whether they're argumentative, descriptive, or analytical.</p>
                                 <h3>Coursework Writing Help</h3>
                                 <p>From lab reports to comprehensive research projects, we at Assignment in Need provide all-encompassing academic writing support to ensure you meet your deadlines with high-quality submissions.</p>
                                 <h3>Proofreading and Editing</h3>
                                 <p>Our proofreading and editing academic writing helpers will polish your work, catching errors and ensuring clarity, so it's ready for submission.</p>
                                 <h3>Homework Help</h3>
                                 <p>Stuck on homework? Our team can assist you with any subject, ensuring you understand the material and meet your deadlines.</p>
                                 <h3>Research Paper Writing Help</h3>
                                 <p>We offer in-depth guidance on research papers, helping you select credible sources and develop strong arguments.</p>
                                 <h3>Dissertation Writing Help</h3>
                                 <p>Our specialized dissertation services cater to your unique research needs, helping you create a comprehensive and well-structured dissertation.</p>
                                 <h3>Assignment Writing Help</h3>
                                 <p>Whether it's a brief assignment or an extensive project, our writers are equipped to deliver original and well-researched content.</p>
                                 <h3>Case Study Writing Help</h3>
                                 <p>We'll help you create insightful case studies that analyze real-world situations and provide well-researched solutions.</p>
                                 <h3>University Writing Help</h3>
                                 <p>Navigating university-level writing can be tricky. We're here to support you through essays, reports, and other academic tasks to enhance your performance.</p>
                                 <h3>Thesis Writing Help</h3>
                                 <p>Our thesis writing support helps you create a well-researched, coherent thesis that stands out, guiding you in structuring your arguments and conducting thorough research.</p>
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
					<h2 class="py-3" style="font-weight:500; font-size: 30px; color:black">Online Academic Assignment Writing Help Services Worldwide- All Types Assignment Help for Academic Students</h2>
					<div class="text">
						 <p>We provide academic assignment writing help for students in the UK, Malaysia, Spain, Australia, Canada, and the UAE. Online writing services aim to support students at all levels with different types of assignments. Need assistance with essays, research papers, dissertations, or other academic tasks? Our 3000+ PhD skilled experts are here to provide the support you need. Assignment in Need takes pride in delivering original content that meets students' needs, with 98% recurring clients reflecting their reliability and quality. Focusing on student success, every assignment is thoroughly researched and meticulously crafted. No matter the academic requirements, support is readily available to help students achieve their goals.</p>
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

     <!-- FAQs Question  section for Expert Pay For Assignment Help -->
 
	        
	 <section class="faq-section bg-light">
	    	<div class="auto-container">
			<div class="row ">
				<div class="titel-column col-lg-12 col-md-12 col-sm-12">
				    <div class="title-box text-center">
						<h2 style="font-weight:500; font-size: 30px;; color:black" class="my-4"><b>Frequently Asked Questions For Academic Assignment Writing Help Service</b></h2>  
					 </div>
					<div class="row"> 
					 		 
				<div class="column col-lg-6 col-md-6 col-sm-12 ">
					 
					<ul class="accordion-box ">
					       <li class="accordion block">
                                <div class="acc-btn bg-white border " style="font-weight:500; font-size: 20px;; color:black">1. What Types of Assignments Can You Help With?<div class="icon fa fa-angle-down"></div></div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                        <P>We assist with a wide variety of academic assignments across different subjects and educational levels, including essays, research papers, dissertations, case studies, and lab reports. Our experienced professionals are equipped to handle diverse assignment types and provide tailored support to ensure high-quality results that meet your specific requirements.</P>
									</div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn bg-white border " style="font-weight:500; font-size: 20px;; color:black">2. How Do I Place an Order for Academic Assignment Help?<div class="icon fa fa-angle-down"></div></div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                          <P>Placing an order is simple. First, visit our website and fill out the “Order Now” form with details about your assignment, including type, subject, deadline, and specific instructions. After submitting the form, you'll make a secure payment, and then receive a confirmation with assignment details and estimated delivery time. You can track your order and communicate with your assigned writer through your account. Once completed, your assignment will be delivered via email or through your account for your review.</P>
										</div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn bg-white border " style="font-weight:500; font-size: 20px;; color:black">3. Do You Offer Assistance with Academic Editing and Proofreading?<div class="icon fa fa-angle-down"></div></div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                         <P>Yes, we provide editing and proofreading services to enhance your writing's quality. Our experienced editors will review your work for clarity, coherence, grammar, punctuation, and adherence to academic standards. We aim to help you produce polished, professional writing that meets your instructors' expectations, ensuring your final submission is error-free and well-structured.</P>
										</div>
                                    </div>
                                </div>
                            </li>
						 
                  	</ul>
					
				</div>
			
				<div class="column col-lg-6 col-md-6 col-sm-12">
					 
					<ul class="accordion-box">
					 
						
					<li class="accordion block"> 
                                <div class="acc-btn bg-white border " style="font-weight:500; font-size: 20px;; color:black">4. Do You Offer Help with Group Projects or Collaborative Assignments?<div class="icon fa fa-angle-down"></div></div>
                                  <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                          <P>Absolutely! We understand that group projects can be challenging due to the need for collaboration. Our team can assist with research, writing individual sections, and compiling the final document. By providing the guidelines and your group's input, we can ensure that the final submission reflects all members' contributions while maintaining a cohesive and professional presentation.</P>
										</div>
                                    </div>
                                  </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn bg-white border " style="font-weight:500; font-size: 20px;; color:black">5. What Are Some Effective Time Management Strategies for Students?<div class="icon fa fa-angle-down"></div></div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                         <P>Effective time management is vital for academic success. Students can prioritize tasks by identifying urgent assignments, set specific goals, and break larger projects into manageable tasks. Creating a detailed schedule with a planner can help allocate study time effectively. Minimizing distractions and using techniques like the Pomodoro Technique-studying for 25 minutes followed by a 5-minute break—can improve focus. Regularly reviewing and adjusting schedules as needed is also crucial for staying on track. Implementing these strategies can enhance productivity, reduce stress, and lead to better academic outcomes.</P>
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