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
    /* and new code */
      /* Assignment Writing */
	</style>
	<section class="banner-section-three header-section" >
		<div class="auto-container" style="margin-top: 100px;">
			<div style="text-align: center;">
				<ul class="page-breadcrumb">
					<li><a href="/">Home</a></li>
					<li>Dissertation Writing</li>
				</ul>
            </div>
            <div class="row clearfix">
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<h1 class="text-center">Get Affordable Dissertation Writing Service Today from Expert Writers
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

    <!-- Get the best Dissertation Writing Services -->
	<section class=" py-0">
		<div class="auto-container ">
			<div class="row clearfix">
				<div class="title-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title-box">
							<div class="section-color-layer"></div>
							<h2 style="font-weight:500; font-size: 30px;; color:black" class="  my-4">Get the best Dissertation Writing Services
							</h2>
                            <p>After wrapping up your coursework, exams, and other academic hurdles, you reach the "ABD" (All But Dissertation) phase. Essentially, you're just one step away from completing your academic journey—your dissertation.
							</p>
							<p>If you're on the hunt for reliable dissertation writing help, look no further than Assignment in Needs. Our skilled Dissertation Helpers from Words Doctorate are dedicated to providing top-notch support across all subjects. With a wealth of experience aiding 3,000 PhD researchers, our experts offer not just guidance but also tutoring and assistance with publishing in 47 leading journals.
							</p>
							<p>Why Choose Our Professional Dissertation Help Services?
						    <!-- <ul>
								<li>1. Over 15 years of experience</li>
								<li>2. Round-the-clock support</li>
								<li>3. Proven track record of success</li>
								<li>4. Global reach</li>
							</ul>	 -->
						    
						<!-- new code -->
						<div class="container">
					   <div class="row  ">
					   <div class="col-12 col-md-6">
						<p class="p-3 fs-5 border bg-light text-start">Global reach </p>
						</div>
						<div class="col-12 col-md-6">
						<p class="p-3 fs-5 border bg-light text-start ">Round-the-clock support</p>
						</div>
						<div class="col-12 col-md-6 ">
						<p class="p-3 fs-5 border bg-light text-start">Over 15 years of experience </p>
					    </div>
						<div class="col-12 col-md-6">
						<p class="p-3 fs-5 border bg-light text-start">Proven track record of success </p>
						</div>
						 
						
					 </div>
 	 
           </div>
		   </p>
						<!-- end new code -->
						<p>Reach out to us today if you are ready to elevate your academic performance with outstanding dissertation assistance.</p>
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

    <!-- Get Help with Your Dissertation Writing With Professional Help -->
	  <section class="py-0">
       <div class="auto-container">
		<div class="row clearfix">
			<div class="title-column col-lg-12 col-md-12 col-sm-12">
               <div class="inner-column">
				<div class="title-box">
					<div class="section-color-layer"></div>
					<h2 style="font-weight:500; font-size:30px; color:black" class="py-4">Get Help with Your Dissertation Writing With Professional Help</h2>
			      <p>At Assignment in Need, we're here to make writing your master's dissertation easier with our dissertation help services. Our experts can guide you through all the important dissertation writing steps:
				  </p>
				  <h3>Starting Your Dissertation
				  </h3>
				  <p>The introduction is the first step in your dissertation. It sets the scene by explaining what your research is about and why it's important. Our expert dissertation writing help will help you clearly define your goals and build a strong foundation for the rest of your work.
				  </p>
				  <h3>Reviewing the Literature
				  </h3>
				  <p>Next you'll look at existing research on your topic. Our experienced team will provide dissertation assistance to find the best sources, making sure your review covers both recent studies and important older works. Our expert writers will guide you in understanding the gaps and debates in the research as soon as you ask them to “write my dissertation for me” so your review is comprehensive and insightful.
				  </p>
				  <h3>Planning Your Research Method
				  </h3>
				  <p>Your research method is the blueprint for your study. Whether you're doing qualitative, quantitative, or mixed-methods research, our experts' dissertation help online will help you choose the right approach. They will ensure that your research plan is solid, ethical, and designed to answer your research questions effectively.
				  </p>
				  <h3>Analyzing Your Data
				  </h3>
				  <p>This is where your research comes to life. Our dissertation writing help will assist you with data analysis, using tools like SPSS, and help you understand what your data is telling you. Our goal is to make sure you can draw meaningful conclusions from your research.
				  </p>
				  <h3>Wrapping It All Up
				  </h3>
				  <p>In conclusion, you'll pull everything together. We'll help you summarize your findings, highlight the importance of your research, and suggest areas for future study. Our aim is to make sure your dissertation ends on a strong note.
                    </p>
				</div>
			   </div>
			</div>
		</div>
	   </div>
	  </section>

	  <!-- Why Trust Assignment in Need for Your Dissertation Writing Needs -->
      <section class="py-0">
		<div class="auto-container">
			<div class="row clearfix">
				<div class="title-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title-box">
							<div class="section color-layer"></div>
							<h2 style="font-weight:500; font-size:30px; color:black" class="py-4">Why Trust Assignment in Need for Your Dissertation Writing Needs
							</h2>
							<p>Finding a reliable dissertation help services for your dissertation can be challenging with so many options out there. But don't worry—you're in good hands with Assignment in Need. We're one of the top dissertation writing services in the world, dedicated to supporting your academic journey. Choose us for trustworthy, high-quality help with your dissertation and rest easy knowing you're in expert hands.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	  </section>
 
	  <!-- Why is Assignment in Need the Best Dissertation Writing Service Provider? -->
       <section class="py-0">
		<div class="auto-container">
			<div class="row clearfix">
				<div class="title-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title-box">
							<div class="section-color-layer"></div>
							<h2 style="font-weight:500; font-size:30px; color:black" class="py-4">Why is Assignment in Need the Best Dissertation Writing Service Provider?
							</h2>
							<p>Ordering academic papers online can feel like a bit of a challenge when you feel like you want to  “pay someone to do my dissertation' right? With so many websites out there, it's tough to know which ones are the real deal. No one wants to fall for a scam or end up with work that's less than stellar. But don't worry—doing some research and chatting with other students can help you figure out the best dissertation writing services. And guess what? You've already made a smart move by checking out Assignment in Need. We are one of the top dissertation writing services across the world, perfect for anyone looking to get some extra academic support.
							</p>
							<p>So, what makes our phd dissertation help stand out from the crowd? We're glad you asked! Here's a little peek at what we offer to make your experience with us something special.
							</p>
							<h3>Best Dissertation Writers
							</h3>
							<p>We've got a team of expert dissertation writers who are highly skilled and qualified. Our expert writers are always ready to help with your dissertation whenever you feel like you need someone to “help me write my dissertation”. When you ask Assignment in Need to “pay someone to do my dissertation,” you can relax knowing your project is in expert hands. Our writers are all degree holders in various fields and are native English speakers, so you can count on their know-how and top-notch writing.
							</p>
							<h3>Original content
							</h3>
							<p>Our writers start every project from scratch, making sure your content is tailored just for you. At Assignment in Need, we don't do generic or reused papers. Your dissertation help online will be completely unique and 100% free of plagiarism. We even use plagiarism detection tools to double-check, so you can trust that your paper is truly one-of-a-kind.
							</p>
							<h3>Help with Any Subject
							</h3>
							<p>No matter what you're studying—Psychology, Economics, Literature, Engineering, or something else—our expert writers are ready to jump in and help. We cover a wide range of subjects and topics, so you’ll always find the support you need. You can get help like dissertation proposal help, masters dissertation help, and PHD dissertation writing service.
							</p>
							<h3>Adherence to academic integrity</h3>
							<p>We at Assignment in Need take academic integrity seriously. Every dissertation we write meets the strict guidelines set by academic institutions. Our team of expert writers are dedicated to delivering well-researched and properly cited dissertation writing help. You can trust us to provide honest, reliable, and ethically sound dissertation assistance.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	   </section>

	   <!-- What Makes Us Special as a PHD dissertation help? -->
		<section class="py-0">
			<div class="auto-container">
				<div class="row clearfix">
					<div class="title-column col-lg-12 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="title-box">
								<div class="section-color-layer"></div>
								<h2 style="font-weight:500; font-size:30px; color:black" class="py-4">What Makes Us Special as a PHD dissertation help?
								</h2>
								<p>Ready to get started on your dissertation? Great! When you place an order with Assignment in Need and ask for “help me write my dissertation”, one of our dissertation help services support team members will jump in to help you in the following ways:
								</p>
								<h3>Picking the Perfect Topic
								</h3>
								<p>Our experts will help you find the best topic for your dissertation, tailored to your subject area and interests. If you have any specific ideas or requirements, just let us know! We'll work together to choose the ideal topic. Our experts will suggest 3-4 topics, complete with explanations and insights to help you make a well-informed choice.
								</p>
								<h3>Creating a Solid Outline</h3>
								<p>We'll map out a clear plan for your dissertation, ensuring you understand every part of the process. This includes:
								 <ul>
									<li>1. Justifying your selected topic</li>
									<li>2. Conducting a thorough literature review
									</li>
									<li>3. Identifying and addressing research gaps
									</li>
									<li>4. Defining the objectives of your study
									</li>
									<li>5. Choosing the most effective data collection methods
									</li>
									<li>6. Analyzing the collected data
									</li>
									<li>7. Predicting potential outcomes
									</li>
									<li>8. Providing comprehensive references for your work
									</li>
								 </ul>	
								</p>
								<p>If you're still uncertain, we can draft a short proposal to give you a more detailed understanding of how we'll proceed and provide cheap dissertation writing services.
								</p>
								<h3>Developing Your Dissertation Proposal
								</h3>
								<p>A strong dissertation proposal help is really important to kickstart your project. Assignment in Need's experts dissertation writers will ensure that your proposal includes all the necessary information to motivate and prepare you for the entire dissertation process. Crafting a thorough proposal is crucial, and our experts will ensure yours is well-prepared so you can present it with confidence with our dissertation proposal help

                             We promise that all content will be original, properly referenced, and formatted according to your university's guidelines, leaving you completely satisfied with the final product.

                                </p>
								<h3>Partial or Full Dissertation Assistance
								</h3>
								<p>Whether you need help finishing your dissertation or starting from scratch, we're here to support you. If you're struggling with your current work, we can step in to complete it or help you develop a new topic. Our team is committed to making sure your dissertation is completed smoothly and on time, no matter where you are in the process.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
          
		<!-- There are the some subjects that we cater are given below: -->
          <section class="py-0">
			<div class="auto-container">
				<div class="row clearfix">
					<div class="title-column col-lg-12 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="title-box">
								<div class="section-color-layer"></div>
								<h2 style="font-weight:500; font-size:30px; color:black" class="py-4">There are the some subjects that we cater are given below:
								</h2>
								<p>At Assignment in Need, we offer expert and cheap dissertation writing services across a wide range of subjects. Here are some of the key areas we cover:
                                <ul>
									<li><b>Business and Management: </b> From strategic planning to organizational behavior, get tailored assistance with all your business and management assignments.
									</li>
									<li><b>Computer Science: </b> Whether it's programming, algorithms, or data structures, our experts can help with every aspect of computer science.
									</li>
									<li><b>Engineering: </b> Get support for various engineering fields, including mechanical, electrical, and civil engineering.
									</li>
									<li><b>Mathematics: </b> Need help with calculus, algebra, or statistics? Our math specialists are here to assist you.</li>
									<li><b>Psychology: </b>  From research methods to psychological theories, we offer comprehensive help in psychology.</li>
									<li><b>Law: </b>  Get expert guidance on legal principles, case studies, and more.
									</li>
									<li><b>Economics: </b> Whether it's microeconomics, macroeconomics, or econometrics, we have you covered.
									</li>
									<li><b>Biology: </b> Get help with genetics, molecular biology, and other biological sciences.</li>
									<li><b>History: </b> Explore historical events, analyze primary sources, and more with our history experts.
									</li>
									<li><b>English Literature: </b> Dive into literary analysis, critical essays, and more with our literature specialists.</li>
								</ul>     
							</p>
							<p>No matter your subject, our team is ready to provide the best dissertation writing services so you excel. If you don't see your subject listed, just ask—we're here to help with a wide array of academic topics!
							</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		  </section>
		  <!-- Our Promises to You -->
		   <section class="py-0">
			<div class="auto-container">
				<div class="row clearfix">
					<div class="title-column col-lg-12 col-md-12 col-lg-12">
						<div class="inner-column">
							<div class="title-box">
								<div class="section-color-layer"></div>
								<h2 style="font-weight:500; font-size:30px; color:black" class="py-4">Our Promises to You
								</h2>
								<h3>Budget-Friendly Dissertation Help
								</h3>
								<p>At Assignment in Need, we understand that being a student can be tough on the wallet, so we've made sure to provide cheap dissertation writing services. We believe that top-notch academic support shouldn't come with a hefty price tag, making it easier for you to achieve academic success without breaking the bank.
								</p>
								<h3>Your Privacy Matters
								</h3>
								<p>When you choose to get PHD dissertation help from Assignment in Need, your privacy is our top priority. We go the extra mile to protect your personal and academic information. Every client signs a non-disclosure agreement with us, ensuring that your details and work stay completely confidential.
								</p>
								<h3>On-Time Every Time
								</h3>
								<p>We know how important deadlines are, which is why we guarantee that your dissertation will be delivered on time, every time. Whether you've got weeks or just hours to spare, we're here to help you meet your academic deadlines without stress.
								</p>
								<h3>Excellence in Every Page
								</h3>
								<p>At Assignment in Need, we take pride in delivering high-quality dissertations across all disciplines. Our commitment to academic excellence drives us to help you achieve success in your studies. With our support, you're not just getting a service—you're getting a partner in your academic journey.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		  </section>
		   <!-- Types of Dissertation Writing Services We Offer -->
              <section class="py-0">
				<div class="auto-container">
					<div class="row clearfix">
						<div class="title-column col-lg-12 col-md-12 col-sm-12">
							<div class="inner-column">
								<div class="title-box">
									<div class="section-color-layer"></div>
									<h2 style="font-weight:500; font-size:30px; color:black" class="py-4">Types of Dissertation Writing Services We Offer
									</h2>
									<p>At Assignment in Need, we understand that every dissertation is unique, and so are your needs. That's why we offer a wide range of dissertation writing services tailored to meet your specific requirements. Whether you're just starting or need help polishing the final draft, we have you covered with the best dissertation writing services available. Here's a breakdown of the services we offer:
									</p>
									<h3>Full Dissertation Writing Service
									</h3>
									<p>Our Full Dissertation Writing Services is perfect for students who need assistance from start to finish. We provide comprehensive support throughout the entire dissertation process, from selecting a topic to finalizing the conclusions. Our team of expert dissertation writers ensures that your dissertation is thoroughly researched, well-structured, and professionally written to meet academic standards.
									</p>
									<h3>Custom Writing
									</h3>
									<p>If you need help with specific parts of your dissertation, then at Assignment in need, our Custom Writing service is designed for you. Whether it's the introduction, a particular chapter, or the conclusion, we can craft the sections you need while maintaining the overall coherence of your dissertation. Our writers are skilled at adapting to your style and requirements to deliver a personalized piece of work.</p>
									<h3>Structuring and Formatting
									</h3>
									<p>A well-structured dissertation is really important for clarity and flow. Our Structuring and Formatting service ensures that your dissertation is organized logically and formatted according to your university's guidelines. From setting up the table of contents to ensuring consistent citation styles, our expert writers make sure every detail is in place, giving your dissertation a professional finish.
									</p>
									<h3>Proposal Writing Services
									</h3>
									<p>The dissertation proposal is a critical step in your research journey, and it's essential to get it right. Our Proposal Writing Services help you create a compelling proposal that outlines your research objectives, methodology, and significance. We work with you to ensure that your proposal meets the expectations of your academic committee and sets a strong foundation for your dissertation.
									</p>
									<h3>Literature Review Writing
									</h3>
									<p>A thorough literature review is the backbone of a solid dissertation. Our Literature Review Writing service provides an in-depth analysis of the existing research in your field, identifying gaps and setting the context for your study. We ensure that your literature review is comprehensive, relevant, and well-integrated into your dissertation.
									</p>
									<h3>Methodology Development
									</h3>
									<p>Choosing the right methodology is crucial for the success of your research. Our Methodology Development service at Assignment in Need helps you design a robust research plan that aligns with your objectives. Whether you need guidance on qualitative, quantitative, or mixed methods, our experts provide clear, detailed, and justified methodologies to ensure your research is scientifically sound.
									</p>
									<h3>Data Analysis Help
									</h3>
									<p>Interpreting data can be one of the most challenging parts of dissertation writing. Our Data Analysis Help service offers expert support in analyzing both qualitative and quantitative data. We assist you in applying the right statistical tools, interpreting results accurately, and presenting your findings clearly. Whether you're struggling with SPSS, NVivo, or another software, our team is here to help you make sense of your data.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			  </section>
			  <!-- Cheap Dissertation Writing Help Services Online at Assignment In Need -->
              <section class="py-0">
				<div class="auto-container">
					<div class="row clearfix">
						<div class="title-column col-lg-12 col-md-12 col-sm-12">
							<div class="inner-column">
								<div class="title-box">
									<div class="section-color-color"></div>
									<h2 style="font-weight:500; font-size:30px; color:black" class="py-4">Cheap Dissertation Writing Help Services Online at Assignment In Need
									</h2>
									<p>When you choose us for your dissertation needs, we're confident you'll return for more. At Assignment In Need, we promise top-quality work at a price that won't break the bank, all delivered on time. Our skilled writers are experts in crafting English dissertations and have years of experience in the field.</p>
								    <p>Our writers are not only highly qualified but also passionate about their subjects. They dive deep into research, gathering data from online and offline sources, articles, and journals. Their dedication ensures that your dissertation is both comprehensive and impressive, helping you achieve top grades.
									</p>
									<p>We understand that sometimes you might start your work late and face tight deadlines. No worries—Assignment In Need is here to help. We can deliver high-quality dissertations quickly, and we can even assist you in choosing the right topic.
									</p>
									<p>We're also known for our excellent service, including proofreading and paraphrasing to make sure your dissertation shines. Here's how our experts handle your dissertation:
									 <ul>
										<li><b>Review the Question: </b> We carefully examine the question to outline the key areas.
										</li>
										<li><b>Identify Main Issues: </b> We pinpoint the main issues that need addressing.
										</li>
										<li><b>Gather Reliable Information: </b> We search for relevant and trustworthy information.
										</li>
										<li><b>Evaluate Evidence: </b> We analyze the evidence and different viewpoints.
										</li>
										<li><b>Draw Conclusions: </b> We summarize the findings and conclusions.
										</li>
										<li><b>Present Findings: </b> We present your results clearly, effectively, and critically.
										</li>
									 </ul>
									</p>
									<p>With Assignment In Need, you get reliable support and a well-crafted dissertation that meets your needs.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			  </section>
			  <!-- Looking for dissertation Writing help online? Assignment In Need is the best solution! -->
            <section class="py-0">
				<div class="auto-container">
					<div class="row clearfix">
						<div class="title-column col-lg-12 col-md-12 col-sm-12">
							<div class="inner-column">
								<div class="title-box">
									<div class="section-color-layer"></div>
									<h2 style="font-weight:500; font-size:30px; color:black" class="py-4">Looking for dissertation Writing help online? Assignment In Need is the best solution!
									</h2>
									<p>Writing a dissertation is a breeze with Assignment in Need! Our team of top-notch dissertation writers are here to help you craft a dissertation that's guaranteed to earn you an A+. Each paper is expertly written by our talented professionals, ensuring you get high-quality results.
									</p>
									<p>But that's not all we offer. When you choose us for your Ph.D. dissertation help, you get access to a range of fantastic features:
									 <ul>
										<li><b>On-Time Delivery: </b>  We ensure your dissertation is delivered right on schedule.
										</li>
										<li><b>Professional Service: </b> Experience top-tier, professional support from start to finish.
										</li>
										<li><b>Free Plagiarism Reports: </b> We provide free reports to confirm your work is original.
										</li>
										<li><b>Unlimited Revisions: </b> If you need changes, we offer unlimited revisions at no extra cost.</li>
										<li><b>Free Editing and Proofreading: </b>  Our editing and proofreading services come at no additional charge.
										</li>
										<li><b>Free Online Academic Tools: </b> Get access to useful tools to enhance your work.
										</li>
										<li><b>Affordable Rates: </b> Enjoy budget-friendly rates for each page of your dissertation.
										</li>
										<li><b>Free Updates: </b> Stay informed with updates via SMS and email.
										</li>
										<li><b>Direct Writer Contact: </b> Communicate directly with your writer for better results.
										</li>
										<li><b>24/7 Support: </b> Our support team is available around the clock to assist you.
										</li>
									 </ul>	
									</p>
									<p>Dissertation writing has never been easier. Get a custom dissertation from one of our top professionals at the best rates. Reach out to us via call, email, or our live chat portal to share your needs with our support team today.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- Our Track Record: -->
			 <section class="py-0">
				<div class="auto-container">
					<div class="row clearfix">
						<div class="title-column col-lg-12 col-md-12 col-sm-12">
							<div class="inner-column">
								<div class="title-box">
									<div class="section-color-layer"></div>
									<h2 style="font-weight:500; font-size:30px; color:black" class="py-4">Our Track Record:
									</h2>
									 <p>
									 <ul>
										<li>10K+ orders completed each month</li>
										<li>86% of our customers see improved grades</li>
										<li>9/10 orders are delivered ahead of deadlines</li>
									</ul>
									 </p>
									 
									 <p>With Assignment in Need you're in good hands for top-quality dissertation writing!
									 </p>
									  
									 
								</div>
							</div>
						</div>
					</div>
				</div>
			 </section>

			 <!-- Explore Our Wide Range of Services -->
	  <section class="py-0">
				<div class="auto-container">
					<div class="row clearfix">
						<div class="title-column col-lg-12 col-md-12 col-sm-12">
							<div class="inner-column">
								<div class="title-box">
									<div class="section-color-layer"></div>
									<h2 style="font-weight:500; font-size:30px; color:black" class="py-4">Explore Our Wide Range of Services</h2>
								   <p>Unlock your academic potential with our cheap dissertation writing services Here's what we offer:</p>
							  <!-- <div class="container">
									<div class="row">
										<div class="col-md-4 card bg-light ">
											<p>Academic assignment writing services</p>
											<p>Dissertation Writing Services</p>
											<p>Assignment writing services</p>
										</div>
										<div class="col-md-4 card bg-light">
											<p>Thesis Writing Services</p>
											<p>Coursework Writing Service</p>
											<p>Term Paper Writing Services</p>
										</div>
										<div class="col-md-4 card bg-light">
											<p>Case Study Writing Services
											</p>
											<p>Editing and Proofreading Services
											</p>
											<p>Essay Writing Services
											</p>
									</div>
									</div>
							</div> -->
										<!-- new code -->
					<div class="subject-container card bg-light">
				  <div class="row justify-container-center align-item-center">
				            <!-- <div class="col-lg-4 text.center">
					           <img src="https://bestclasshelpaustralia.com/assets/lp/images/img4.webp" alt="Happy Woman" class="subject-image">
				             </div> -->
		                        <div class="col-lg-12  ">
	                        <div class="subject-list-box ">
		                   <div class="row ">
				       <div class="col-md-4  ">
					     <ul class="subject-list">
                          <li><i class="fas fa-book-open"></i>Academic assignment writing services</li>
					      <li><i class="fas fa-book-open"></i>Dissertation Writing Services</li>
					      <li><i class="fas fa-book-open"></i>Assignment writing services</li>
					       
					   </ul>
			      </div>

		        	<div class="col-md-4">
		        		 <ul class="subject-list  ">
						 <li><i class="fas fa-book-open"></i>Thesis Writing Services</li>
						  <li><i class="fas fa-book-open"></i>Coursework Writing Service </li>
					     
		        		  <li><i class="fas fa-book-open"></i>Term Paper Writing Services </li>
		        		   </ul>
		         </div>

				 <div class="col-md-4">
		        		 <ul class="subject-list  ">
                          
		        		   <li><i class="fas fa-book-open"></i>Case Study Writing Services </li>
						  <li><i class="fas fa-book-open"></i>Editing and Proofreading Services </li> 
		        		  <li><i class="fas fa-book-open"></i>Essay Writing Services</li>
		        	   </ul>
		         </div>
			       </div>
		         </div>
	              </div>
	             </div>
                 </div>

										<!-- end new code -->
									 
								</div>
							</div>
						</div>
					</div>
				</div>
	 </section>
			  
              
			  <!-- How It Works -->
             <section class="py-0">
				<div class="auto-container">
					<div class="row clearfix">
						<div class="title-column col-lg-12 col-md-12 col-sm-12">
							<div class="inner-column">
								<div class="title-box">
									<div class="section-color-layer"></div>
									<h2 style="font-weight:500; font-size:30px; color:black">How It Works
									</h2>
									<p>Getting your dissertation written with Assignment in Need is easy and straightforward. Here's a quick look at our process:
									 <ul>
										<li><b>Place Your Order:</b> Let us know what you need and the grade you're aiming for.
										</li>
										<li><b>Get Matched with an Expert: </b>  We'll connect you with an academic professional who will get started on your dissertation.
										</li>
										<li><b>Receive and Use Your Dissertation: </b>  Download your completed dissertation and use it to boost your grades.
										</li>
									 </ul>
									</p>
									<p> It's that simple! Just order online, and we'll handle the rest, delivering your work by the deadline you specify.
                                     </p>
								</div>
							</div>
						</div>
					</div>
				</div>
			 </section>


	 
       	 <!-- FAQs Question  section for canada -->
 
	        <section class="faq-section">
		     <div class="auto-container">
			  <div class="row clearfix">
				<div class="column col-lg-12 col-md-12 col-sm-12">
					<div class="title-box">
						<h2 style="font-weight:500; font-size: 30px;; color:black" class="  my-4">Frequently asked questions</h2>
					</div>
					<ul class="accordion-box">
					<li class="accordion block">
							<div class="acc-btn">1. How can your service help me with my dissertation? <div class="icon fa fa-angle-down"></div></div>
							<div class="acc-content" style="display: none;">
								<div class="content">
									<div class="text">
										<p>Our service can help you with every stage of your dissertation, from selecting a topic and conducting research to writing, editing, and formatting. Our experts provide guidance and support to ensure your dissertation meets academic standards and helps you achieve your academic goals.</p>
									</div>
								</div>
							</div>
						</li>
						<li class="accordion block active-block">
							<div class="acc-btn active">2. Do you have experts in my field of study to assist with my dissertation? <div class="icon fa fa-angle-down"></div></div>
							<div class="acc-content current" style="display: block;">
								<div class="content">
									<div class="text">
										<p>Yes, we have experts across a wide range of fields and disciplines. Our team includes professionals with advanced degrees who are well-versed in various subjects, ensuring that we can match you with an expert in your specific field of study.</p>
									</div>
								</div>
							</div>
						</li>
						
						<li class="accordion block">
							<div class="acc-btn">3. What if I need revisions for my dissertation?<div class="icon fa fa-angle-down"></div></div>
							<div class="acc-content" style="">
								<div class="content">
									<div class="text">
										<p>
								We offer a revision policy that allows you to request changes to your dissertation if it does not meet your expectations. Our experts will make the necessary adjustments based on your feedback to ensure you are satisfied with the final product.</p>
									</div>
								</div>
							</div>
						</li>

						<li class="accordion block">
							<div class="acc-btn">4. Can you get help writing a dissertation?<div class="icon fa fa-angle-down"></div></div>
							<div class="acc-content" style="">
								<div class="content">
									<div class="text">
										<p>
									Yes, you can get comprehensive help with writing your dissertation from our expert team. We assist with everything from topic selection and research to writing, editing, and formatting to ensure your dissertation meets academic standards.
										</p>
									</div>
								</div>
							</div>
						</li>
						
						<li class="accordion block">
							<div class="acc-btn">5. Can I get someone to write my dissertation?<div class="icon fa fa-angle-down"></div></div>
							<div class="acc-content" style="">
								<div class="content">
									<div class="text">
										<p>										
                                            Yes, our professional writers can help write your dissertation. We have experienced experts in various fields who can craft a high-quality dissertation tailored to your specific requirements and academic guidelines.
										</p>
									</div>
								</div>
							</div>
						</li>
						
						<li class="accordion block">
							<div class="acc-btn">6. What is the best dissertation help website?<div class="icon fa fa-angle-down"></div></div>
							<div class="acc-content" style="">
								<div class="content">
									<div class="text">
										<p>
									While we believe our website offers top-notch dissertation help, it's important to choose a service that meets your specific needs. Look for features such as qualified experts, originality guarantees, timely delivery, and positive reviews to determine the best fit for you.
										</p>
									</div>
								</div>
							</div>
						</li>
						
						<li class="accordion block">
							<div class="acc-btn">7. I wil already written my dissertation – can you help me with proofreading?<div class="icon fa fa-angle-down"></div></div>
							<div class="acc-content" style="">
								<div class="content">
									<div class="text">
										<p>										
                                            Absolutely! We offer proofreading and editing services to help refine your dissertation. Our experts will review your work for grammatical errors, coherence, and adherence to academic standards to ensure it is polished and ready for submission.
										</p>
									</div>
								</div>
							</div>
						   </li>
						
					 
					       </ul>
					
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