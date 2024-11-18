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
					<li>Top Assignment Writing Help</li>
				</ul>
            </div>
            <div class="row clearfix">
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<h1 class="text-center"> Top Assignment Writing Help | Top Assignment Help From Experts!
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

    <!--Top Assignment Writing Help Services Online -->
	<section class=" py-0">
		<div class="auto-container ">
			<div class="row clearfix">
				<div class="title-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title-box">
							<div class="section-color-layer"></div>
							<h2 style="font-weight:500; font-size: 30px;; color:black" class="  my-4"> Top Assignment Writing Help Services Online  </h2>
                            <p>Feeling overwhelmed by assignments or worried about tight deadlines? Don't stress! With top assignment writing help, you can lighten your load and get top-notch results without the hassle. From complex essays, research papers and other types of assignments to tricky projects, top assignment experts can help you succeed on time!</p>
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

    <!-- Top Assignment Writing Help Services Online -->
     <section>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="title-column col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="title-box">
                            <div class="section-color-layer"></div>
                            <h2 style="font-weight:500; font-size: 30px;; color:black" class="  my-4">Top Assignment Writing Help Services Online</h2>
                            <p>Assignment in Need has helped thousands of students achieve better grades with less stress. Here's why so many students trust us:</p>
                           <p><b>Expert Writers Across All Subjects:</b> No matter what you're studying, we have top assignment help specialists who can handle it. They'll listen to your needs and create assignments that hit the mark.
                           </p>
                           <p><b>Highly Qualified Professionals:</b> Our top assignment writers hold advanced degrees (Master's or Ph.D.), so they bring deep knowledge and research skills to the table.</p>
                           <p><b>Top-Quality Assignments:</b> Looking to improve your grades? We'll deliver well-researched and professionally written assignments that help you stand out.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section>

     <!-- Understanding the Need for Top Assignment Writing Help -->
      <section>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="title-column col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="title-box">
                            <div class="section-color-layer"></div>
                            <h2 style="font-weight:500; font-size: 30px;; color:black" class="  my-4">Understanding the Need for Top Assignment Writing Help</h2>
                            <p>There are plenty of reasons why students might need a little extra help with their assignments from top assignment writing services. Let's break it down:</p>
                           <h3>Struggling with the Subject? No Problem!</h3>
                           <p>Picture this: you're an engineering major, but you're asked to write a long essay about a famous author in your English class. If the topic feels completely out of your comfort zone, it's easy to get stuck. Rather than risk missing the deadline, why not let a top assignment help specialists who know the subject take over? You'll get a well-written paper on time, and your grades will thank you!</p>
                           <h3>Running Short on Time? We've Got Your Back!</h3>
                           <p>Sometimes assignments pile up, and suddenly that deadline is just around the corner. In situations like this, using top assignment support services can be a lifesaver. Many companies can even complete your assignment in just a few hours! At Assignment in Need, we offer fast, reliable help, ensuring your work is done quickly and without sacrificing quality.</p>
                           <h3>Dreading a Boring Assignment? Let Us Handle It!</h3>
                           <p>We all have those assignments that feel like a chore. If you're finding it hard to get started because the topic is just not exciting, don't worry! What seems boring to you could be interesting to one of our top assignment writers. Let them take care of it while you focus on something else. You'll get a well-done paper, and you won't have to suffer through the boring bits!
                           </p>
                           <h3>Not Sure What the Assignment Wants? No Worries!</h3>
                           <p>Sometimes assignments can be confusing, especially when they're technical or require a lot of detail. When you're not sure where to start, it's easy to procrastinate. Instead of waiting until the last minute and feeling the pressure, you can get top assignment writing help from experts who understand exactly what's needed. And guess what? There's no shame in getting the help you need to succeed!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>

      <!-- Hire Top Assignment Writers Online at Assignment In Need -->

      <section>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="title-column col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="title-box">
                            <div class="section-color-layer"></div>
                            <h2 style="font-weight:500; font-size: 30px;; color:black" class="  my-4">Hire Top Assignment Writers Online at Assignment In Need</h2>
                            <p>Need help with an assignment? No problem! Our team of top assignment experts are here to assist you, no matter what subject you're working on. Whether it's law, programming, economics, psychology, or nursing, we've got professionals in every field ready to help you out. Whatever academic assistance you need, we guarantee you'll get top-quality support from us.</p>
                            <p>At Assignment in Need, we understand that price is important for students. That's why we offer affordable top assignment writing services without breaking the bank. You can get top-notch assistance without spending a fortune!</p>
                            <p>Whether you need help with essays, dissertations, term papers, or even homework, we've got experts in every subject area. Our services are designed to make your academic life easier.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>

      <!-- What Makes Our Top Assignment Writing Services Unique? -->
       <section>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="title-column col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="title-box">
                            <div class="section-color-layer"></div>
                            <h2 style="font-weight:500; font-size: 30px;; color:black" class="  my-4">What Makes Our Top Assignment Writing Services Unique?</h2>
                            <p>Here's what makes us the best online assignment writing help service:
                                <ul>
                                    <li><b>1. Well-Organized Solutions:</b> Every assignment is carefully structured to ensure it meets your requirements.</li>
                                    <li><b>2. Earn with Referrals:</b> Recommend us to a friend, and you can earn money while helping them out!
                                    </li>
                                    <li><b>3. Correct Citations & References:</b> We make sure your work follows the right citation style.
                                    </li>
                                    <li><b>4. One-on-One Sessions:</b> Need personal guidance? You can get direct help from your chosen expert.
                                    </li>
                                    <li><b>5. Affordable Pricing:</b>No hidden costs! You get quality service at a student-friendly price.
                                    </li>
                                    <li><b>6. Special Discounts</b>Enjoy bundle offers or seasonal deals when placing multiple orders!</li>
                                    <li><b>7. Confidentiality Guaranteed:</b>Your information is safe with us. We keep everything private.
                                    </li>
                                    <li><b>8. Tailored Writing Services:</b>Whether it's an essay, research paper, or any academic work, we customize it for your needs.</li>
                                    <li><b>9. Secure Payments:</b> Pay with confidence through our secure transaction system.</li>
                                    <li><b>10. Sign-Up Bonus:</b>Get a special bonus just for signing up with us!</li>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       </section>
       
       <!-- Benefits of Professional Top Assignment Writing Services -->
        <section>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="title-column col-lg-12 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="title-box">
                                <div class="section-color-layer"></div>
                                <h2 style="font-weight:500; font-size: 30px;; color:black" class="  my-4">Benefits of Professional Top Assignment Writing Services</h2>
                                <h3>High-Quality, Customized Content</h3>
                                <p>When you hire a professional top assignment writing services, you'll receive custom-written work that fits your needs perfectly. These experts follow specific guidelines and tackle even the toughest topics, ensuring your assignments meet all the requirements. And since they're available 24/7, you can get help whenever you need it!.</p>
                                <h3>Time Management and Stress Reduction</h3>
                                <p>Juggling assignments, classes, and life can be overwhelming. With top assignment writing help, you'll get your work done on time without the stress. You'll work with experts who know your subject well, giving you the chance to focus on other things while they take care of your assignments.</p>
                                <h3>Expert Insights and Enhanced Learning</h3>
                                <p>Not everyone is born a great writer, and that's okay! By hiring top assignment support services, you'll not only get a great paper, but you'll also learn how to write better. These experts can provide tips and guidance that will help you improve your writing skills in the long run.</p>
                                <h3>Free Revisions</h3>
                                <p>Worried about getting your work just right? When you hire top assignment writing services, they'll make sure everything is well-researched, well-written, and formatted correctly. Plus, if you ever need changes, they offer free revisions to ensure you're 100% happy with the final product.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
        <!-- Exploring Different Types of Top Assignment Writing Services -->
         <section>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="title-column col-lg-12 col-md-12 col-sm-12 ">
                        <div class="inner-column">
                            <div class="title-box">
                                <div class="section-color-layer"></div>
                                <h2 style="font-weight:500; font-size: 30px;; color:black" class="  my-4">Exploring Different Types of Top Assignment Writing Services</h2>
                                <p>Academic success can be a challenge, but having the right support makes all the difference. Let's explore some of the top assignment writing help available that can help you tackle your studies and boost your grade</p>
                                <h3>Top Essay Writing Help Services</h3>
                                <p>Essays are a big part of student life, but they can be tough to get just right. Whether you're writing an argumentative essay, descriptive piece, or analytical paper, essay writing services can guide you every step of the way. From brainstorming ideas to polishing your final draft, professional writers ensure that your essay is well-structured, thoroughly researched, and engaging, while still reflecting your unique voice.</p>
                                <h3>Top Coursework Writing Help Services</h3>
                                <p>Managing coursework over an entire semester can be overwhelming, especially when there are multiple assignments to juggle. Coursework writing services provide support for all your projects, whether it's lab reports, essays, or anything else. With help from these services, you'll stay organized, meet your deadlines, and turn in polished assignments that meet your course requirements.</p>
                                <h3>Proofreading and Editing Writing Help Services</h3>
                                <p>Even the best papers can benefit from a second set of eyes. Proofreading and editing services are perfect for ensuring your work is free of errors and flows smoothly. These services check for grammar, punctuation, and sentence structure, while also focusing on clarity and consistency. They'll take your assignment from good to great by making sure it's clear, polished, and ready for submission.</p>
                                <h3>Top Homework Help</h3>
                                <p>Homework can pile up fast, especially when you're dealing with multiple subjects. Homework help services offer quick, reliable assistance across a range of subjects, like math, science, literature, and history. These services can help you stay on top of your daily assignments and make sure you fully understand the material, without feeling overwhelmed.</p>
                                <h3>Top Research Paper Writing Help</h3>
                                <p>Writing a research paper requires a lot of time, effort, and attention to detail. If you're struggling to gather sources or organize your ideas, research paper writing services can help. They assist with finding credible sources, building strong arguments, and using proper citation styles. These services ensure your paper is well-researched, clearly written, and meets all academic standards, making it easier for you to score top grades.</p>
                                <h3>Top Dissertation Writing Help Services </h3>
                                <p>Dissertations are one of the most challenging tasks students face, but you don't have to go it alone. Our team of expert dissertation writers is always ready to help. When you ask “Can someone help me with my dissertation?”, you can relax knowing your project is in good hands. Our writers have advanced degrees and years of experience, so you can trust them to deliver a high-quality dissertation that meets your needs.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </section>

         <!-- Why Student Get Our Top Assignment Help From Assignment In Need -->
          <section>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="title-column col-lg-12 col-md-12 col-sm-12">
                        <div class="inner-clumn">
                            <div class="title-box">
                                <div class="section-color-layer"></div>
                                <h2 style="font-weight:500; font-size: 30px;; color:black" class="  my-4">Why Student Get Our Top Assignment Help From Assignment In Need</h2>
                                <p>At Assignment in Need, we don't believe in a one-size-fits-all approach. Every assignment is carefully reviewed by a specialist who creates a unique plan to meet your professor's expectations. Plus, we never rely on AI to generate content—our experts craft each assignment by hand to ensure quality and originality.</p>
                               <p>We also understand that price is a major concern for students, especially those juggling studies and part-time jobs. That's why we offer high-quality top assignment writing help at prices that are affordable for students around the world.</p>
                              <p><b>What Makes Us Stand Out?</b>
                              <ul>
                                <li><b>1. Affordable Prices:</b>We offer assignment help that fits within the budget of students across India.</li>
                                <li><b>2. No Hidden Fees:</b>We provide transparent pricing with no unexpected costs.</li>
                                <li><b>3. Discounts and Bonuses:</b> First-time users get access to special discounts, bonus offers, and even free add-ons.</li>
                                <li><b>4. Fair and Honest Pricing:</b>Before confirming your order, we give you a clear price estimate so you know exactly what you're paying for.</li>
                              </ul>
                              </p>
                              <p>Ready to get started? Request a price estimate today and see for yourself how affordable our services are!</p>
                           
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </section>







     <!-- FAQs Question  section     -->
     <section class="faq-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="column col-lg-12 col-md-12 col-sm-12">
                        <div class="title-box">
                            <h2 style="font-weight:500; font-size: 30px;; color:black" class="  my-4">Frequently asked questions</h2>
                        </div>

                   <ul class="accordion-box">
                            <li class="accordion block">
                        <div class="acc-btn">1. Which is the best assignment writing service? <div class="icon fa fa-angle-down"></div></div>
                          <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                     <p>The best assignment writing service is one that delivers high-quality, original work tailored to your specific needs. Look for services that offer a team of qualified subject experts, timely delivery, and strong customer support. A reliable service will also provide plagiarism-free guarantees and revisions to ensure your satisfaction. Some top options include platforms like Write Right, AcademicExperts, and GradeMiners, which are known for their professionalism, expertise, and student-friendly pricing.</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="accordion block">
                        <div class="acc-btn">2.  Who offers the top assignment writing help for students? <div class="icon fa fa-angle-down"></div></div>
                        <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                       <p>Several services are known for offering top assignment help to students worldwide. Some of the leading names include Write Right for its personalized approach, EssayPro for its flexibility, and PaperHelp for its excellent customer service. These platforms offer comprehensive academic support for all levels, whether it's a simple essay or an in-depth dissertation, ensuring students get the assistance they need to meet their academic goals.</p>
                                    </div>
                            </div>
                        </div>
                    </li>
                    <li class="accordion block">
                        <div class="acc-btn">3. Do you offer discounts or special offers?<div class="icon fa fa-angle-down"></div></div>
                        <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                     <p>Yes, we often run exclusive offers and discounts to make our services even more affordable for students! These can include seasonal discounts, bulk order offers like getting a free assignment when you order multiple, and referral bonuses when you introduce friends to our services. Be sure to check our website regularly for the latest promotions and offers!</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="accordion block">
                        <div class="acc-btn">4.  Is my personal information safe with you? <div class="icon fa fa-angle-down"></div></div>
                        <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                    <p> Absolutely! We take your privacy and confidentiality very seriously. All personal information you share with us is kept secure and is never shared with third parties. We use encrypted systems to protect your data, and all interactions are strictly confidential. Your safety and trust are our top priorities.</p>
                              
                                </div>
                            </div>
                        </div>
                    </li>
                    
                  </ul>
                </div>
            </div>
        </div>
      </section>


 
        
      
	 
@endsection