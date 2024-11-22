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

      
	</style>
	<section class="banner-section-three header-section" >
		<div class="auto-container" style="margin-top: 100px;">
			<div style="text-align: center;">
				<ul class="page-breadcrumb">
					<li><a href="/">Home</a></li>
					<li>Marketing</li>
				</ul>
            </div>
            <div class="row clearfix">
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<h1 class="text-center">Get the Best Marketing Assignment Help Services in UK and Canada
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

    <!-- Introduction -->
	<section class=" pt-3 pb-3">
		<div class="auto-container ">
			<div class="row clearfix">
				<div class="title-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title-box">
							<div class="section-color-layer"></div>
							<h2 style="font-weight:500; font-size: 30px;; color:black" class="  my-4">Introduction </h2>
 	                        <p>Before we talk about the importance of marketing assignment help, let's understand what marketing is all about. Marketing involves everything a company does to promote or sell its services. Mainly selling, advertising, and getting products to the right customers. A few of the best ways for a company to reach its audience is through social media marketing, affiliate marketing, and digital marketing. 
                             </p>
                            <p>While studying marketing can be a great career choice, doing its assignments can be a lot of work. But we are here for you, we at Assignment in Need can help in making things easier by writing assignments, participating in field work, and doing research for you to get good grades.
                            </p>
                            <p>We have a team of highly qualified experts who come from one of the best universities in the world. They will help you with your assignments so you understand every part of the subject. They know exactly what is needed for marketing assignments, so you can be sure your work will be high quality and won't be rejected.
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

    <!-- Best Marketing Assignment Help Services in UK -->
     <section class="py-0">
      <div class="auto-container">
        <div class="row clearfix">
         <div class="title-column col-lg-12 col-md-12 col-sm-12">
          <div class="inner-column">
            <div class="title-box">
                <div class="section-color-section"></div>
                <h2 style="font-weight:500; font-size:30px; color:black" class="my-4"> Best Marketing Assignment Help Services in UK
                </h2>
                <p>If you are a marketing student from one of the top colleges in the UK then you must be well aware about how important it is to submit your assignments on time in order to get good grades. But getting good grades can get tough with all the deadlines and guidelines you have to follow for your marketing assignment.</p>
                <p>So if you are ever stuck in a situation where you need help with your assignments then Assignment in Need's marketing assignment help services in the UK can be your savior. With us you can get services for leading universities in the UK like London Business School, University of Oxford, University of Warwick, University of Cambridge,  and many more.
                </p>
                <p>Don't worry if you are a student outside of the UK, you can get our services no matter where you are. Be it Canada, Australia, UAE, or Malaysia. 
                </p>
            </div>
          </div>
         </div>
        </div>
       </div>
     </section>
     
     <!-- Understanding the Importance of the 4Ps in Marketing -->
      <section class="py-0">
        <div class="auto-container">
            <div class="row clearfix" >
                <div class="title-column col-lg-12 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="title-box">
                        <div class="section-color-layer"></div>
                        <h2 style="font-weight:500; font-size:30px; color:black" class="my-4">Understanding the Importance of the 4Ps in Marketing
                        </h2>
                        <p>You need to focus on the 4 P's of marketing if you want to market a product or service successfully. This is also known as the marketing mix because these 4 P's help you figure out how to stand out from the competition and meet your customers' needs. Let's break down each one:
                            </p>
                            <h3>Product
                            </h3>
                            <p>What are you selling? This could be anything from physical items to services or even digital goods. Understanding your product, what makes it special, and who needs it helps you plan better and manage its different stages from launch to end of life.
                            </p>
                            <h3>Price</h3>
                            <p>How much will you charge for your product? The price should be just right. Not too low that it hurts your profits and not too high that it scares away customers. You need to consider  your cost, the product's value, if any discounts might apply, and what competitors are charging, and</p>
                            <h3>Place </h3>
                            <p>Where will your product be available? Will it be in a physical store, online, or both? You should promote your product where your target customers are most likely to see it. Choosing the right places to sell and promote helps you reach more people and make more sales.
                            </p>
                            <h3>Promotion</h3>
                            <p>How will people find out about your product? Think about where your audience gets their information and what kind of message will grab their attention. You need to decide the best way and time to promote your product to make sure people know about it and want to buy it. Often, combining promotion with where you sell the product can help attract the right customers, especially online.
                            </p>
                    </div>
                </div>
                </div>
            </div>
        </div>
      </section>
      

      <!-- Why do Students Need Help with Marketing Assignments? -->

      <section class="py-0">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="title-column col-lg-12 col-md-12 col-sm-12" >
                    <div class="inner-column">
                        <div class="title-box">
                            <div class="section-color-layer"></div>
                            <h2 style="font-weight:500; font-size:30px; color:black" class="my-4">Why do Students Need Help with Marketing Assignments?
                            </h2>
                            <p>Marketing is a great subject that lets you think on your feet and is highly creative. This is because it is very important to manage activities and resources of a business. And in order for students to understand its tricky concepts, universities give students loads of marketing assignments. 
                            </p>
                            <p>But let's face it, many students find it tough to complete these assignments on their own. This is why the need for marketing assignment help in the UK has skyrocketed. Professional writers are now more in demand than ever to help students get good grades in their marketing courses.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>
        
      <!-- Get online marketing assignment help with different types of marketing -->
       <section class="py-0">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="title-column col-lg-12 col-md-12 col-sm-12">
                   <div class="inner-column">
                    <div class="title-box">
                        <div class="section-color-layer"></div>
                        <h2 style="font-weight:500; font-size:30px; color:black" class="py-4">Get online marketing assignment help with different types of marketing
                        </h2>
                        <p>Marketing assignments can cover a wide range of topics, and each type requires its own research and expertise. At Assignment in Need, you can get help from a wide range of topics and different types of marketing management assignments. You can get help in your assignment on marketing research in various field including:
                       </p>
                        <p><b>Digital Marketing:</b> Almost all management universities include digital marketing in their curriculum. So if you want to increase your scores in your assignment then our experts are here and always up-to-date with the latest digital marketing strategies. So that they can help you ace your assignments.</p>
                        <p><b>Direct Marketing:</b>  In digital marketing you directly reach out to potential customers. This is very important to promote a company's products and services. We can assist you with assignment on marketing research, marketing management, different strategies, the marketing environment, and more.
                        </p>
                        <p><b>Industrial Marketing:</b>In marketing assignments industrial marketing is a relatively new area. This is the reason why not every student finds it easy. Our experts are here to provide the help you need with industrial marketing if you're struggling.
                        </p>
                        <p><b>Service Marketing:</b>If you've ever felt awkward asking someone to help you with your service marketing assignment then don't worry! Our experts are ready to help you with your service marketing assignments.
                        </p>
                        <p>Just reach out to Assignment in Need whenever you need marketing homework help and we'll be there to provide timely assistance, no matter how lengthy or complex your assignment is!
                        </p>
                        <p>This is not it. We also offer help with other types of marketing assignments, including:
                        </p>
                   <div class="subject-container">
		             	 <div class="row justify-content-center align-items-center">
				         <div class="col-lg-4 text-center">
					     <img src="https://bestclasshelpaustralia.com/assets/lp/images/img4.webp" alt="Happy Woman"
						  class="subject-image">
			                  	</div>
			 	         <div class="col-lg-8">
				         	<div class="subject-list-box">
						   <div class="row">
						     	<div class="col-md-4">
								<ul class="subject-list">
									<li><i class="fas fa-caret-right"></i>Online Marketing</li>
                                    <li><i class="fas fa-caret-right"></i>Content Marketing</li>
									<li><i class="fas fa-caret-right"></i>Event Marketing </li>
									<li><i class="fas fa-caret-right"></i>Personalized Marketing</li>
								 
								</ul>
							   </div>
							   <div class="col-md-4">
								<ul class="subject-list">
								    <li><i class="fas fa-caret-right"></i>B2B Marketing</li>
									<li><i class="fas fa-caret-right"></i>B2C Marketing</li>
									<li><i class="fas fa-caret-right"></i>Stealth Marketing</li>
									<li><i class="fas fa-caret-right"></i>Affiliate Marketing</li>
								</ul>
							   </div>
							   <div class="col-md-4">
								<ul class="subject-list">
								    <li><i class="fas fa-caret-right"></i>Email Marketing</li>
									<li><i class="fas fa-caret-right"></i>Interactive Marketing </li>
									<li><i class="fas fa-caret-right"></i>Social Media Marketing</li>
									<li><i class="fas fa-caret-right"></i>Brand Marketing</li>
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
        </div>
       </section>
         
       <!-- Avail Our Marketing Assignment Help to Earn Top Grades in Canada -->
       <section class="py-0">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="title-column col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="title-box">
                            <div class="section-color-layer"></div>
                            <h2 style="font-weight:500; font-size:30px; color:black" class="my-4">Avail Our Marketing Assignment Help to Earn Top Grades in Canada
                            </h2>
                            <p>With our top-notch marketing assignment help support, we're here to help you deal with your academic stress. We are sure you feel overwhelmed by the mountain of marketing assignments you get from your professors but don't worry we've got your back. Assignment in Needs main goal is to help you excel in your marketing management assignments and get great grades.
                            </p>
                            <p>When you choose us you get:
                                <ul>
                                    <li>We're here for you anytime, day or night with our 24/7 customer support: </li>
                                    <li>We guarantee original content with no copying with our 100% plagiarism-free work. </li>
                                    <li>We make sure you're happy with our work and guarantee 100% Satisfaction. </li>
                                    <li>You can get quality help without breaking the bank with our affordable prices.
                                    </li>
                                    <li>We'll make changes until you're completely satisfied and give unlimited free revisions.
                                    </li>
                                </ul>
                            </p>
                            <p>Feeling relieved? We're ready to take away your writing worries and provide exceptional assistance with your marketing assignments. Hire us now and take a step toward a career you'll be proud of for years to come!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       </section>

       <!-- What types of marketing assignments Do we offer? -->
        <section class="py-0">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="title-column col-lg-12 col-md-12 col-sm-12">
                      <div class="inner-column">
                        <div class="title-box">
                            <div class="section-color-layer"></div>
                            <h2 style="font-weight:500; font-size:30px; color:black">What types of marketing assignments Do we offer?
                            </h2>
                            <p>If you're a marketing student, you know that handling all those assignments can be a real challenge. Writing them isn't always a walk in the park. That's why we're here to help with our marketing assignment services. We'll make sure your assignments are completed correctly and neatly. Here's a list of the types of marketing homework help we can assist you with:
                            </p>
                            <div class="container ">
				            	 <div class="row  ">
						        <div class="col-12 col-md-6 bg-light  mb-2 card">
									
					           	<p class=" fs-5  text-align: justify;">
					               	<ul>
								<li><i class="fas fa-book-open"></i>Marketing Case Studies </li>
								<li><i class="fas fa-book-open"></i> Homework </li>
								<li><i class="fas fa-book-open"></i> Branding Projects  </li>
								<li><i class="fas fa-book-open"></i> Literature Reviews </li>
								<li><i class="fas fa-book-open"></i> Essays  </li>
								<li><i class="fas fa-book-open"></i> Coursework </li>
 
								         
						           </ul>
					                       </p>
					 
						         </div>
						               <div class="col-12 col-md-6 bg-light  mb-2 card ">
						              <p class="  fs-5  text-align: justify;">
						              <ul>
								           <li><i class="fas fa-book-open"></i>PowerPoint Presentations</li>
								           <li><i class="fas fa-book-open"></i>Portfolio Assessments </li>
								           <li><i class="fas fa-book-open"></i>Market Research Projects</li>
								           <li><i class="fas fa-book-open"></i>Marketing Plans </li>
								           <li><i class="fas fa-book-open"></i>Term Papers </li>
								           <li><i class="fas fa-book-open"></i>Theses and Dissertations </li>
								             </ul>
					                         </p>
						                   </div>
						    
					                           </div>
				                                  </div>

				                     </div>
                            <p> Our team of experts is here to handle all your marketing assignment needs and make your life a bit easier.
                            </p>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </section>
       
        <!-- Do You Need Urgent Help On Marketing Management Assignment Help? -->
        <section class="py-0">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="title-column col-lg-12 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="title-box">
                                <div class="section-color-layer"></div>
                                <h2 style="font-weight:500; font-size:30px; color:black" class="my-4">Do You Need Urgent Help On Marketing Management Assignment Help?
                                </h2>
                                <p>If you're an MBA student struggling with an assignment on marketing research, we're here to help! Our team offers expert assistance with all kinds of marketing assignments, including:
                               <ul>
                                <li>1. Marketing Management </li>
                                <li>2. Marketing Research</li>
                                <li>3. Marketing Mix </li>
                                <li>4. Service Marketing </li>
                               </ul>   
                            </p>
                              <h3>Affordable Prices</h3>
                              <p>Our prices won't surprise you. It doesn't matter if you are tackling digital marketing questions or exploring marketing opportunities. We believe in offering top-notch help at prices that won't break the bank.</p>
                              <h3>Great Offers</h3>
                              <p>Don't miss out on the exciting marketing assignment help offers and discounts. You can check out our offer at  <a href="https://www.assignnmentinneed.com/Offers"><b>Assignment in Need Offers</b></a>. If you order more than one assignment, well throw in an extra one for free!
                              </p>
                              <h3>Experienced Experts</h3>
                              <p>You get help from experienced professionals when you choose our services. Our writers are all Ph.D. qualified and have extensive experience in different areas of marketing, from industrial and digital marketing to service marketing.
                              </p>
                              <h3>On-Time Delivery </h3>
                              <p>Our writers are experts at meeting deadlines, so you'll get your assignment back on time, every time. We're proud of our reliable, timely service for all types of marketing assignments.
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
					<h2 class="py-3" style="font-weight:500; font-size: 30px; color:black">Get the Best All Types of Marketing Assignment Writing Help for Students Worldwide</h2>
					  <div class="text">
						 <p>Struggling with a marketing assignment? Assignment In Need is here to help! Offering comprehensive marketing assignment writing help, they cover a wide range of topics, including digital marketing, direct marketing, and industrial marketing. With a proven track record of 30,000+ happy clients and a team of 3,000+ PhD experts, they combine creativity with precision to deliver high-quality assignments. Students from the UK, Canada, UAE, Spain, Australia, and Malaysia rely on their expertise to tackle tight deadlines and complex topics. Their original work aligns with university requirements, ensuring top-notch results. With affordable pricing and 24/7 support, Assignment In Need prioritises student satisfaction. Let their experts guide you toward achieving top grades in marketing.</p>
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
						<h2 style="font-weight:500; font-size: 30px;; color:black" class="my-4"><b>Frequently Asked Questions For Marketing Assignment Writing Help</b></h2> 
					 </div>
					<div class="row"> 
					 		 
				<div class="column col-lg-6 col-md-6 col-sm-12 ">
					 
					<ul class="accordion-box ">
					       <li class="accordion block">
                                <div class="acc-btn bg-white border " style="font-weight:500; font-size: 20px;; color:black">1. Why Should I Get Marketing Assignment Help?<div class="icon fa fa-angle-down"></div></div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                        <P>Getting help with your marketing assignments can save you time and reduce stress. Experts can provide you with high-quality work, ensure it's done correctly, and help you understand complex topics better.</P>
									</div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn bg-white border " style="font-weight:500; font-size: 20px;; color:black">2. How Much Time You'll Need To Do My Marketing Assignment?<div class="icon fa fa-angle-down"></div></div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
										 <P>The time required depends on the assignment's complexity and length. Generally, we aim to complete assignments as quickly as possible while maintaining high quality. You'll get an estimated delivery time when you place your order.</P>
										</div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn bg-white border " style="font-weight:500; font-size: 20px;; color:black">3. What Is Marketing, And Why Is It Important? <div class="icon fa fa-angle-down"></div></div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
										 <P>Marketing is all about promoting and selling products or services. It's important because it helps businesses understand customer needs, stand out from competitors, and drive sales.</P>
										</div>
                                    </div>
                                </div>
                            </li>
							 
						 
                  	</ul>
					
				</div>
			
				<div class="column col-lg-6 col-md-6 col-sm-12">
					 
					<ul class="accordion-box">
					       <li class="accordion block"> 
                                <div class="acc-btn bg-white border " style="font-weight:500; font-size: 20px;; color:black">4. Are your services available to write my marketing assignment helper at all times?<div class="icon fa fa-angle-down"></div></div>
                                  <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                        <P>Yes, our services are available 24/7. You can reach out to us anytime for help with your marketing assignments, no matter the hour.</P>
									</div>
                                    </div>
                                  </div>
                            </li>
							<li class="accordion block">
                                <div class="acc-btn bg-white border " style="font-weight:500; font-size: 20px;; color:black">5. How Do I Check the Status of My Marketing Assignment?<div class="icon fa fa-angle-down"></div></div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                         <P>You can check the status of your assignment by contacting our support team or logging into your account on our website. We'll keep you updated on progress and notify you when your assignment is ready.</P>
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