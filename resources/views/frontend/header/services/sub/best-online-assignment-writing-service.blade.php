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
					<li>Best Online Assignment Service</li>
				</ul>
            </div>
            <div class="row clearfix">
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<h1 class="text-center">Best Online Assignment Service By PhD Expert

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

    <!--Best Assignment Writing Help Services -->
	<section class=" py-0">
		<div class="auto-container ">
			<div class="row clearfix">
				<div class="title-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title-box">
							<div class="section-color-layer"></div>
							<h2 style="font-weight:500; font-size: 30px;; color:black" class="  my-4">Best Assignment Writing Help Services
                            </h2>
                            <p>University life can be an amazing experience, but let's be honest—it's also pretty demanding. Juggling classes, assignments, and everything else can sometimes feel like too much. The pressure to stay on top of your studies can make things stressful. That's why so many students turn to the best online assignment service to give them a hand. These best assignment and homework help services are a smart way to lighten the load, ensuring you can still maintain good grades without burning out. </p>
						    <p>Assignment in Need's best assignment help is one such service that can really make a difference, offering the guidance and expertise you need to breeze through your university journey.</p>
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
    <!-- Best Assignment Writing Services Around The World -->
       <section  >
        <div class="auto-container">
            <div class="row clearfix">
                <div class="title-column col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="title-box">
                            <div class="section-color-layer"></div>
                            <h2 style="font-weight:500; font-size: 30px;; color:black" class="my-4">Best Assignment Writing Services Around The World</h2>
                            <p>Struggling with assignments? No matter where you are or what time it is, our best online assignment service is always here for you! We know choosing the best homework services can feel like a big decision, especially if you're not sure what to expect. That's why we encourage you to check out the reviews from students who've already used our services. Take your time, read their experiences, and once you're confident, you can easily choose us for all your assignment needs!</p>
                           <p>Our best assignment writer and subject matter experts are top-tier professionals with years of experience in their fields. Whether you're looking for essay help, thesis guidance, dissertation support, or any other type of academic assistance, our platform has you covered. You can rely on our best homework help, no matter the topic or complexity.</p>
                        <p>One of the things we're proud of is how dedicated our team is. Our experts work around the clock to ensure that you get the best assignment writing services without any delays. We know how important deadlines are, and we're committed to helping you submit your work on time, every time. Plus, we're all about making things easy and stress-free for students. That's why our best assignment service is both dependable and super student-friendly.</p>
                        <p>Worried about the cost? Don't be! Our best homework help sites are affordable, and we've made sure our pricing is reasonable without ever compromising on quality. We understand student budgets, so you can get well-crafted assignments at a price that won't leave you stressed about your finances.</p>
                       <p>So, what's stopping you? The best assignment writing service from the best site for assignment is just a click away! With thousands of qualified academic experts ready to assist you, you'll find the support you need to tackle even your toughest assignments. Whether it's a last-minute essay or a complex dissertation, we're here to help you succeed!</p>  
                    </div>
                    </div>
                </div>
            </div>
        </div>
       </section>

       <!-- Assignment In Need Guarantees The Best Assignment Help Online -->
        <section  >
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="title-column col-lg-12 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="title-box">
                                <div class="section-color-leayer"></div>
                                <h2 style="font-weight:500; font-size: 30px;; color:black" class="my-4">Assignment In Need Guarantees The Best Assignment Help Online</h2>
                                <p>Assignment in Need has earned its place as the best online assignment service by being upfront and transparent about pricing. No hidden fees or surprises—you'll know exactly what you're paying and the quality you're getting. Plus, we are so confident in our work that we offer free samples to showcase our expertise.</p>
                                <p>Your happiness with the final product is our priority, so we offer unlimited revisions (with only a few small conditions). Our best assignment writer team is made up entirely of PhD and other experts who understand the challenges you face as a student.
                                </p>
                                <p>To ensure your paper is error-free, we also provide extra proofreading and editing services. And no matter where you are, we are available 24/7 to assist you. Best of all, we guarantee that all work is plagiarism-free, so you don't have to worry about your academic integrity.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Beat Academic Stress With Our Best Online Assignment Writing Help Service -->


        <section >
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="title-column col-lg-12 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="title-box">
                                <div class="section-color-layer"></div>
                                <h2 style="font-weight:500; font-size: 30px;; color:black" class="my-4">Beat Academic Stress With Our Best Online Assignment Writing Help Service</h2>   
                                <p>University life can be stressful, and it's not always the assignments that stress students out—it's meeting those high university standards. Our best assignment service knows how overwhelming it can be to finish your work on time while worrying about deadlines. That's why we offer reliable and best assignment writing help, designed to make things easier for you.</p>
                               <p>With us, you can expect the best assignment writing services that's tailored exactly to your needs. We follow university guidelines closely, so every assignment is crafted to meet the specific requirements of your course. Looking for a perfectly written, well-researched assignment? You've come to the right place! Our best homework services are made with students like you in mind, and our goal is to provide all the information and structure you need to excel in your assignments. Many students who have worked with us often choose Assignment in Need for the ease that comes along with the best homework help. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Our Subject Expert In Best Assignment Writing Services -->

        <section>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="title-column col-lg-12 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="title-box">
                                <div class="section-color-layer"></div>
                                <h2 style="font-weight:500; font-size: 30px;; color:black" class="my-4">Our Subject Expert In Best Assignment Writing Services</h2>
                                <p>At Assignment in Need, our team of best assignment writers are here to help with assignments across a wide range of subjects. Need help in a specific area? Our best websites for assignments have got you covered with experts in over 100 subjects, including: </p>
								<div class="subject-container card bg-light">
		                              <div class="row justify-content-center align-items-center">
										<div class="col-lg-12">
	                                      <div class="subject-list-box">
	                                        <div class="row">
													<div class="col-md-4">
				                                       <ul class="subject-list">
				                                        <li><i class="fas fa-caret-right"></i><a class="text-white"><b>Accounting</b></a></li>
							                    		<li><i class="fas fa-caret-right"></i><a class="text-white"><b>Biology</b></a></li>
							                    		<li><i class="fas fa-caret-right"></i><a class="text-white"><b>Chemistry</b></a></li>
							                    		<li><i class="fas fa-caret-right"></i><a class="text-white"><b>English</b></a></li>
							                    		<li><i class="fas fa-caret-right"></i><a class="text-white"><b>Physics</b></a></li>
							                    		 
									                  </ul>
													</div>
												<div class="col-md-4">
														<ul class="subject-list">
															<li><i class="fas fa-caret-right"></i><a class="text-white"><b>Economics</b></a></li>
															<li><i class="fas fa-caret-right"></i><a class="text-white"><b>History</b></a></li>
															<li><i class="fas fa-caret-right"></i><a class="text-white"><b>Psychology</b></a></li>
															<li><i class="fas fa-caret-right"></i><a class="text-white"><b>Business</b></a></li>
															<li><i class="fas fa-caret-right"></i><a class="text-white"><b>Political Science</b></a></li>
															 

														</ul>
			                                   </div>
			                                    <div class="col-md-4">
				                           	      <ul class="subject-list">
			                                      	<li><i class="fas fa-caret-right"></i><a class="text-white"><b>Sociology</b></a></li>
							            	    	<li><i class="fas fa-caret-right"></i><a class="text-white"><b>Environmental Science</b></a></li>
							            	    	<li><i class="fas fa-caret-right"></i><a class="text-white"><b>Philosophy</b></a></li>
							            	        <li><i class="fas fa-caret-right"></i><a class="text-white"><b>Agriculture</b></a></li>
							            	    	<li><i class="fas fa-caret-right"></i><a class="text-white"><b>And much more!</b></a></li>
							            	    	 
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


        <!-- Types Of Best Academic Assignment Writing Help Online -->
      <section  >
        <div class="auto-container">
            <div class="row clearfix">
                <div class="title-column col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="title-box">
                            <div class="section-color-layer"></div>
                            <h2 style="font-weight:500; font-size: 30px;; color:black" class="my-4" >Types Of Best Academic Assignment Writing Help Online</h2>
                            <p>Balancing multiple assignments with tight deadlines is no easy task. That's where the best online assignment service like Assignment in Need comes in handy. We offer expert help in a variety of areas to make sure you stay on track and submit top-quality work. Below are some of the best assignment writing services we offer:</p>
                           <h3>Assignment Writing Help</h3>
                           <p>Whether it's a basic homework task or a complex project, our best assignment help is always ready to assist. We handle all kinds of subjects, ensuring that every assignment is well-researched, properly structured, and meets academic standards. This way, you can feel confident when submitting your work, knowing it's up to par.</p>
                           <h3>Essay Writing Help</h3>
                           <p>Struggling to organize your thoughts into a clear, concise essay? Whether you need help with an argumentative, descriptive, or analytical essay, our writers can craft high-quality pieces that showcase strong arguments, evidence, and great writing, all tailored to your needs.</p>
                           <h3>Homework Writing Help</h3>
                           <p>Got homework piling up? No worries! Our best homework help is here to give you a hand. We'll help you complete your homework assignments on time with accurate and well-explained solutions, so you can keep your academic performance on track.</p>
                           <h3>Research Paper Writing Help</h3>
                           <p>Research papers take time, effort, and a deep understanding of the topic. If you need support, our experts can produce thoroughly researched and well-organized papers that follow all citation rules and maintain academic integrity. You'll get a polished final product that you can be proud of.</p>
                           <h3>Coursework Writing Help</h3>
                           <p>Managing coursework across different subjects can be overwhelming, but we're here to make it easier. From lab reports to essays, our coursework writing services ensure you stay on top of your studies with high-quality work that meets your university's requirements.</p>
                           <h3>Case Study Writing Help</h3>
                           <p>Case studies require a deep analysis of real-world situations, applying theory to practice. Our writers can help you create well-researched case studies that show your understanding of the subject, presenting your analysis clearly and effectively.</p>
                           <h3>Dissertation and Thesis Writing Help</h3>
                           <p>A dissertation or thesis is one of the biggest challenges students face. These projects involve months of research, writing, and revisions. But don't worry—we're here to guide you every step of the way. From selecting a topic to crafting the final draft, we'll ensure your dissertation or thesis meets the highest academic standards.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>

      <!-- Best Offer for Assignment Writing Help Services Online -->
       <section  >
        <div class="auto-container">
            <div class="row clearfix">
                <div class="title-column col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="title-box">
                            <div class="section-color-layer"></div>
                            <h2 style="font-weight:500; font-size: 30px;; color:black" class="my-4" >Best Offer for Assignment Writing Help Services Online</h2>
                             <p>With our best assignment writing help and best homework services you not only get great services but also great exclusive offers. Check out some of our best websites for assignments offers:
                                <ul>
                                    <li> Get up to 40% off based on your requirements!</li>
                                    <li>Get 1 assignment FREE of cost on ordering 5 assignments!</li>
                                    <li>Refer 4 friends and get a group project absolutely FREE!</li>
                                </ul>
                             </p>
                             <p>To know more about such offers, check out Assignment in Need— top assignment writing help service Offers. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       </section>

       <!-- Best Assignment Help For University Student -->

       <section  >
        <div class="auto-container">
            <div class="row clearfix">
                <div class="title-column col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="title-box">
                            <div class="section-color-layer"></div>
                            <h2 style="font-weight:500; font-size: 30px;; color:black" class="py-4">Best Assignment Help For University Student</h2>
                            <p>Many students who use the best homework help sites rely on us to meet tight deadlines, and that's a huge part of what we do. We understand that university life isn't just about assignments—students have a lot of responsibilities, and sometimes, the fear of missing deadlines or failing exams can be overwhelming.</p>
                            <p>That's where Assignment in Need— best assignment service steps in. We help students meet those tough deadlines, boost their grades, and relieve that constant pressure. With our expert support, students not only complete their assignments on time but also impress their professors with solid academic performance, putting them on track for success.</p>
                            <p>Our experts understand exactly what students need, and we're here to help you overcome the challenges you face in reaching your academic goals.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       </section>

       <!-- Benefits Of Best Assignment Writing Help -->

       <section  >
        <div class="auto-container">
            <div class="row clearfix">
                <div class="title-column col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="title-box">
                            <div class="section-color-layer"></div>
                            <h2 style="font-weight:500; font-size: 30px;; color:black;" class="my-4">Benefits Of Best Assignment Writing Help</h2>
                                <h3>1. Master Technical Topics and Concepts</h3>
                                <p>It's normal to struggle with certain topics when they're first introduced in class. But best assignment help gives you the chance to dive deeper. By working through these tasks, you'll get a better grasp of even the most complicated subjects, making you more confident and skilled.</p>
                                <h3>2. Improve Your Writing Skills</h3>
                                <p>Have you ever had great ideas but found it hard to put them into words? Online assignment writing services help with that! They teach you how to express your thoughts more clearly and effectively. Our experts have mastered the art of writing, and they're here to help you do the same.</p>
                                <h3>3. Boost Your Critical Thinking</h3>
                                <p>Every assignment challenges you to think critically and analyze information. This doesn't just help with your studies—it also sharpens your problem-solving skills in real life! The more assignments you tackle, the stronger your cognitive skills become.</p>
                                <h3>4. Learn to Research Like a Pro</h3>
                                <p>Finding reliable sources, best site for assignment and backing up your arguments with solid evidence can be tricky. But as you complete more university assignments, you'll learn how to separate trustworthy information from unreliable sources, improving your research skills and securing those top grades.</p>
                                <h3>5. Apply What You Learn to Real Life</h3>
                                <p>Assignments aren't just about theory—they help you see how your knowledge can be applied to real-world situations. This prepares you to handle future challenges with confidence, using what you've learned to solve problems both in and out of the classroom.</p>
                                <p>These are just some of the awesome benefits of tackling your assignments head-on with best websites for assignments. Sounds great, right? If you're feeling overwhelmed by your pending assignments, why not let best assignment writing services help? Assignment in Need has years of experience answering students' questions and guiding them through their toughest academic challenges. Ready to get started? Assignment in Need is happy to show you one of our assignment samples to give you a glimpse of how we handle different types of university tasks!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       </section>


        
       	 <!-- FAQs Question  section     -->
	     <section class="faq-section ">
			        <div class="auto-container">
			    	<div class="row clearfix">
					<div class="column col-lg-12 col-md-12 col-sm-12">
                       
					<div class="title-box">
						<h2 style="font-weight:500; font-size: 30px;; color:black" class=" my-4">Frequently asked questions</h2>
					</div>
                        <ul class="accordion-box">
							<li class="accordion block ">
								<div class="acc-btn">1.  Can I trust online assignment services with my personal information?
                                <div class="icon fa fa-angle-down"></div></div>
								<div class="acc-content">
									<div class="content">
										<div class="text">
											<p>Yes, reputable online assignment services prioritize client confidentiality and take strong measures to protect your personal information. They use secure encryption protocols and follow strict privacy policies to ensure that your data, such as your name, email, and payment details, are kept secure and never shared with third parties. It's important to check the service's privacy policy before placing an order to ensure your information is in safe hands.</p>
										</div>
									</div>
								</div>
							</li>
							<li class="accordion block active-block">
								<div class="acc-btn active">2. How do I know if the assignment will be plagiarism-free?
                         
                                    <div class="icon fa fa-angle-down"></div></div>
								<div class="acc-content current">
									<div class="content">
										<div class="text">
											<p>Most professional online assignment services guarantee 100% original work. They have strict anti-plagiarism policies and use advanced plagiarism detection software to ensure that every assignment is unique and properly referenced. You can also request a plagiarism report along with your order for extra peace of mind, ensuring the work is authentic and meets academic integrity standards. </p>
										</div>
									</div>
								</div>
							</li>
							<li class="accordion block">
								<div class="acc-btn">3.Can I get help with any type of assignment?
                                <div class="icon fa fa-angle-down"></div></div>
								<div class="acc-content">
									<div class="content">
										<div class="text">
											<p>Yes, online assignment services typically offer support for a wide variety of assignments, including essays, research papers, case studies, dissertations, lab reports, and more. They cover multiple subjects and academic levels, from high school to university. Whether you need help with technical assignments or creative projects, these services can provide the right expertise for your needs.</p>
										</div>
									</div>
								</div>
							</li>
							<li class="accordion block">
								<div class="acc-btn">4. Can online assignment services help with editing and proofreading?
                                <div class="icon fa fa-angle-down"></div></div>
								<div class="acc-content">
									<div class="content">
										<div class="text">
											<p> Absolutely! Many online assignment services offer specialized editing and proofreading services. These services help refine your work by correcting grammar, punctuation, sentence structure, and formatting issues. Professional editors also ensure that your content flows well and adheres to academic writing standards, improving the overall quality of your assignment.  </p>
										</div>
									</div>
								</div>
							</li>
                            <li class="accordion block">
								<div class="acc-btn">
                                    5. How do I place an order with an online assignment service?

                                    <div class="icon fa fa-angle-down">

                                    </div>
                                </div>
								<div class="acc-content">
									<div class="content">
										<div class="text">
											<p> Placing an order with an online assignment service is usually quick and easy. You start by filling out an order form on the website, where you’ll provide details about your assignment, such as the topic, length, academic level, deadline, and any specific requirements. Once you submit the form, you'll receive a price quote, and after making payment, the service will assign your task to a qualified writer. You can often track your order's progress and communicate with the writer if needed.</p>
										</div>
									</div>
								</div>
							</li>

                           

                           
						</ul>
					</div>
					
				 
			</div>
 </section>
      
@endsection