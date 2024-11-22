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

	 /* endnewcode */
      /*Get The Best Law Assignment Help With Industry Experts */
	</style>
	<section class="banner-section-three header-section" >
		<div class="auto-container" style="margin-top: 100px;">
			<div style="text-align: center;">
				<ul class="page-breadcrumb">
					<li><a href="/">Home</a></li>
					<li>Law</li>
				</ul>
            </div>
            <div class="row clearfix">
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<h1 class="text-center">Get The Best Law Assignment Help With Industry Experts
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

    <!--Assignment Writing Help In Law -->
	<section class=" py-0">
		<div class="auto-container ">
			<div class="row clearfix">
				<div class="title-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title-box">
							<div class="section-color-layer"></div>
							<h2 style="font-weight:500; font-size: 30px;; color:black" class="  my-4">Assignment Writing Help In Law</h2>
                           <p>It's no brainer that even the smartest students struggle with submitting a perfect Law assignment when it comes to court cases, contracts, analyzing legislation, negotiations, and writing memos. It is completely normal to seek law assignment help considering all the reading and the time you spend in libraries.
                           </p>
							 <p>Law is an extensive field that covers a huge number of areas, this is one of the reasons that makes law assignment online challenging. We at Assignment in Need understand the complexity of these assignments, that's why we've provided affordable law assignment services including online assistance with essays, law dissertation services, papers, and various law homeworks.
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
	<!--Why Choose Our Law Assignment Services? -->
	<section class=" py-0">
		<div class="auto-container ">
			<div class="row clearfix">
				<div class="title-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title-box">
							<div class="section-color-layer"></div>
							<h2 style="font-weight:500; font-size: 30px;; color:black" class="my-4">Why Choose Our Law Assignment Services?</h2>
                            
                    <p>So why choose us? Primarily because for many students, law assignments can be challenging and we at Assignment in Need provide specialized law assignment help with our advanced law assignment writers who have advanced law degrees. Our law assignment writers strive to meet highest academic standards with each assignment they do including areas like business law writing assignment and Law Dissertation Services. Below are a few more reasons why you should choose our law assignment service:</p> 
                     <p><b>Top-Quality Law Assignments Tailored to Your Needs: </b> We at Assignment in Need are always here as your trusted business law assignment helper. We promise to deliver top quality law assignments that meet your specific needs and requirements. With our professional writers, you get error-free authentic law assignment services. </p>
                     <p><b>Expert Legal Writers with Extensive Experience: </b> With Assignment in Need you don't have to worry about getting anything less than what you paid for. Our law experts have expertise and deep knowledge in legal subjects which ensures each assignment meets academic standards and your specific needs.</p>
                     <p><b>Timely Delivery and 24/7 Customer Support: </b> Our customer support team is available round-the-clock anytime you need assistance from our law assignment writers. To quickly address any questions or concerns we guarantee timely delivery.</p>
                     <p><b>Get Our Service Worldwide: </b>Wherever you are, our assignment writing services are available to you. With primary hubs in London, UK, and Canada, we also cater to students in Malaysia, Australia, Spain, and the UAE. No matter your location, we're here to assist with your academic needs! </p>
                   
                      
                            </div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
    <!--Our Range of Law Assignment Help Services -->
	<section class=" py-0">
		<div class="auto-container ">
			<div class="row clearfix">
				<div class="title-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title-box">
							<div class="section-color-layer"></div>
							<h2 style="font-weight:500; font-size: 30px;; color:black" class="my-4">Our Range of Law Assignment Help Services</h2>
                           <p>Need law assignment service in different law fields? Check out some of the fields we cater to:</p>
                     <p><b>Criminal Law Assignment Help: </b>If you need help in criminal law assignments, our experts are here to help you understand diverse case studies on behaviors that affect society. Just fill out our online form to get started and our team of experts will help you understand different legal systems in places like the US, Australia, and the UK. </p>
                     <p><b>Contract Law Assignment Help: </b>Count on us for top-notch help whenever you need contract law assignment help because running a business means dealing with contracts and our team of law assignment writers ensures you understand contract law inside out, so your business agreements are rock-solid. </p>
                     <p><b>Constitutional Law Assignment Help: </b>Writing about constitutional law is all about diving into topics and building strong arguments. One great way to ace this field is by focusing on specific issues and backing up your points with legislative references.if you are confused about where to start then our law assignment service experts are here to help. </p>
                     <p><b>International Law Assignment Help: </b>Our international law understands the complexities of the area and can help you in doing international law assignment online that involve multiple countries. Whether it's a big research project or detailed analysis, we at Assignment in Need got your back! </p>
					<h3>These are just a few of the areas where you can get our expert's help, some other areas include business law writing assignment as well as:</h3> 
				   
                    <!-- newcode -->
                     <!-- <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-4">
                            <p class="p-3 fs-5 border bg-light text-strat">Real Estate Law</p>
                            </div>
                            <div class="col-12 col-md-4">
                            <p class="p-3 fs-5 border bg-light text-strat">Taxation Law</p>
                            </div>
                            <div class="col-12 col-md-4">
                            <p class="p-3 fs-5 border bg-light text-strat">Health Law</p>
                            </div>
                            <div class="col-12 col-md-4">
                            <p class="p-3 fs-5 border bg-light text-strat">Corporate Law</p>
                            </div>
                            <div class="col-12 col-md-4">
                            <p class="p-3 fs-5 border bg-light text-strat">Contract Law</p>
                            </div>
                            <div class="col-12 col-md-4">
                            <p class="p-3 fs-5 border bg-light text-strat">Company Law</p>
                            </div>
                            <div class="col-12 col-md-4">
                            <p class="p-3 fs-5 border bg-light text-strat">Environmental Law</p>
                            </div>
                            <div class="col-12 col-md-4">
                            <p class="p-3 fs-5 border bg-light text-strat">Labor Law</p>
                            </div>
                            <div class="col-12 col-md-4">
                            <p class="p-3 fs-5 border bg-light text-strat">Criminal Law</p>
                            </div>
                            <div class="col-12 col-md-4">
                            <p class="p-3 fs-5 border bg-light text-strat">Tort Law</p>
                            </div>
                            <div class="col-12 col-md-4">
                            <p class="p-3 fs-5 border bg-light text-strat">Common Law</p>
                            </div>
                            <div class="col-12 col-md-4">
                            <p class="p-3 fs-5 border bg-light text-strat">Immigration Law</p>
                            </div>
                            <div class="col-12 col-md-4">
                            <p class="p-3 fs-5 border bg-light text-strat"> International Law</p>
                            </div>
                            <div class="col-12 col-md-4">
                            <p class="p-3 fs-5 border bg-light text-strat">Administrative Law</p>
                            </div>
                            <div class="col-12 col-md-4">
                            <p class="p-3 fs-5 border bg-light text-strat">Commercial Law</p>
                            </div>
                            <div class="col-12 col-md-4">
                            <p class="p-3 fs-5 border bg-light text-strat">Employment Law</p>
                            </div>
                            <div class="col-12 col-md-4">
                            <p class="p-3 fs-5 border bg-light text-strat"> Civil Law</p>
                            </div>
                            <div class="col-12 col-md-4">
                            <p class="p-3 fs-5 border bg-light text-strat">Criminal Law</p>
                            </div>
                            <div class="col-12 col-md-4">
                            <p class="p-3 fs-5 border bg-light text-strat">Intellectual Property Law</p>
                            </div>
                            <div class="col-12 col-md-4">
                            <p class="p-3 fs-5 border bg-light text-strat">Family Law</p>
                            </div>
                            <div class="col-12 col-md-4">
                            <p class="p-3 fs-5 border bg-light text-strat">Insurance Law</p>
                            </div>
                        </div>
                     </div> -->

					 <!-- <div class="container"> -->
		<div class="row justify-content-center">
			<div class="col-lg-9">
				<div class="headingstyle-1 mb-5">
					<!-- <h2 style="font-weight:500; font-size: 30px; color:black">
					These are just a few of the areas where you can get our expert's help, some other areas include business law writing assignment as well as:	
				    </h2> -->
				</div>
				 
			</div>
		</div>
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
									 
									<li><i class="fas fa-caret-right"></i> Real Estate Law  </li>
									<li><i class="fas fa-caret-right"></i> Taxation Law </li>
									<li><i class="fas fa-caret-right"></i> Health Law </li>
									<li><i class="fas fa-caret-right"></i> Corporate Law  </li>
									<li><i class="fas fa-caret-right"></i> Contract Law  </li>
									<li><i class="fas fa-caret-right"></i> Company Law  </li>
									<li><i class="fas fa-caret-right"></i> Environmental Law  </li>
								</ul>
							</div>
							<div class="col-md-4">
								<ul class="subject-list">
								     
									<li><i class="fas fa-caret-right"></i> Labor Law  </li>
									<li><i class="fas fa-caret-right"></i> Criminal Law   </li>
									<li><i class="fas fa-caret-right"></i> Tort Law  </li>
									<li><i class="fas fa-caret-right"></i> Common Law  </li>
									<li><i class="fas fa-caret-right"></i> Immigration Law  </li>
									<li><i class="fas fa-caret-right"></i> International Law  </li>
									<li><i class="fas fa-caret-right"></i> Administrative Law  </li>

								</ul>
							</div>
							<div class="col-md-4">
								<ul class="subject-list">
								    
									<li><i class="fas fa-caret-right"></i> Commercial Law </li>
									<li><i class="fas fa-caret-right"></i> Employment Law  </li>
									<li><i class="fas fa-caret-right"></i> Civil Law  </li>
									<li><i class="fas fa-caret-right"></i> Criminal Law  </li>
									 <li><i class="fas fa-caret-right"></i> Family Law  </li>
									<li><i class="fas fa-caret-right"></i>  Insurance Law  </li>
									<li><i class="fas fa-caret-right"></i> Intellectual Property Law  </li>
									

								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<!-- </div> -->
                     <!-- endnewcode -->
                    <div></div>
                
                </div>
					</div>
				</div>
			</div>
		</div>
	</section>
   
    <!--How Our Law Assignment Help Works-->
    <section class=" py-0">
		<div class="auto-container ">
			<div class="row clearfix">
				<div class="title-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title-box">
							<div class="section-color-layer"></div>
							<h2 style="font-weight:500; font-size: 30px;; color:black" class="  my-4">How Our Law Assignment Help Works</h2>
                            <p>At Assignment in Need we have simplified the process to get law assignment help easily so you don't get stuck in the complex process of assignment ordering. All you have to do is follow the easy steps below:</p>
                            <h3>Easy Order Process</h3>
                            <p>
                            <ul>
                        <li>1. Fill out our simple online form with details about your assignment, including the topic, deadline, and any specific instructions.</li>
                        <li>2. After reviewing your requirements, we will provide you with a quote for the service.</li>
                        <li>3. Make a secure payment through our trusted payment gateway once you accept the quote.</li>
                        <li>4. We'll match you with a law assignment writer who specializes in your field.</li>
                    
                            </ul>
                        </p>
                            <h3>Customized Assignment Solutions</h3>
                            <p>
                            <ul>
                            <li>1. Based on your needs our experienced writers will craft custom solutions.</li>
                            <li>2. Each assignment then undergoes thorough checks to ensure accuracy and adherence to your instructions.</li>
                   
                            </ul>
                        </p>
                            <h3>Review and Revision Services</h3>
                            <p>
                            <ul>
                            <li>1. Receive your completed assignment and review it.</li>
                            <li>2. Request revisions if needed to ensure your satisfaction with the final product.</li>
                   
                            </ul>
                        </p>
                        <h3>Benefits of Our Law Assignment Help</h3>
                        <p>Discover unique assignments that are crafted by our experts and enjoy these benefits:</p>

                        <h3>Plagiarism-Free Assignments</h3>
                        <p>Every assignment we deliver undergoes thorough plagiarism checks. You'll receive a unique paper crafted by our experts. We respect other authors' work and ensure proper citations if we include external sources</p>

                        <h3>Affordable Pricing Plans</h3>
                        <p>Designed with students in mind Our prices are affordable so that you can Avoid costly services and opt for high-quality assignments at the best prices.</p>

                        <h3>Confidentiality and Security</h3>
                        <p>We ensure strict confidentiality and use secure systems to safeguard your information throughout our services because your privacy is our priority.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
       
    <!--Other Assignment Help Services We Offer -->
    <section class=" py-0">
		<div class="auto-container ">
			<div class="row clearfix">
				<div class="title-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title-box">
							<div class="section-color-layer"></div>
							<h2 style="font-weight:500; font-size: 30px;; color:black" class="my-4">Other Assignment Help Services We Offer</h2>
                            <p>Have more than one subject you need help in? Check out some of our other assignment help services </p>
                           
                            <p><b>Accounting Assignment Help:</b>At Assignment in Need, we understand how tough accounting homework can be without the right guidance. Our accounting experts can help you meet tight deadlines without compromising on quality.</p>
                            <p><b>Nursing Assignment Help:</b>Nurses play a crucial role in patient recovery, and their assignments require deep knowledge and careful research. At Assignment in Need, experienced nursing professionals are ready to help you excel in your nursing studies and prepare for a successful healthcare career.</p>
                            <p><b>Engineering Assignment Help: </b> Engineering assignments can be challenging, especially if you're not strong in math, statistics, or physics. But don't worry! The expert writers at Assignment in Need are here to provide top-notch engineering assignment help, no matter the subject.
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
					<h2 class="py-3" style="font-weight:500; font-size: 30px; color:black">Get the Best Online Law Assignment Writing Help Services Worldwide</h2>
					  <div class="text">
						 <p>At Assignment in Need, they offer law assignment writing help to students, with over 30,000 happy clients and 98.2% of orders arriving timely. Whether pursuing studies in Canada, Malaysia, Spain, Australia, the UAE, or the UK, students can rely on the expert team for support with every law assignment. Tackling complex legal topics can be challenging, and Assignment in Need is dedicated to providing reliable, affordable help. Experienced writers handle each assignment, with customer support available 24/7. Trusted payment methods offer extra security, and students can be confident that their assignments will be completed correctly and on time. For those seeking law assignment writing help, Assignment in Need ensures students achieve academic success while making their assignments less stressful.</p>
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
						<h2 style="font-weight:500; font-size: 30px;; color:black" class="my-4"><b>Frequently Asked Questions For Law Assignment Writing Help</b></h2> 
					 </div>
					<div class="row"> 
					 		 
				<div class="column col-lg-6 col-md-6 col-sm-12 ">
					 
					<ul class="accordion-box ">
					       <li class="accordion block">
                                <div class="acc-btn bg-white border " style="font-weight:500; font-size: 20px;; color:black">1. How do I submit my law assignment for help?<div class="icon fa fa-angle-down"></div></div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                        <P>You can submit your assignment either by clicking the submit button on our website or by emailing it with your specific requirements. In both cases, we'll respond to your assignment promptly.</P>
										</div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn bg-white border " style="font-weight:500; font-size: 20px;; color:black">2. What is Law Assignment Help?<div class="icon fa fa-angle-down"></div></div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                        <p>Law Assignment Help is a service where expert writers assist you with your law assignments. Whether it's criminal law, contract law, constitutional law, or international law, our professionals provide the guidance and support you need to excel.</p>
                                           
                                            
										</div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn bg-white border " style="font-weight:500; font-size: 20px;; color:black">3. How Can I Place an Order for Law Assignment Help?<div class="icon fa fa-angle-down"></div></div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                         <P>Placing an order is easy! Just fill out our online form with your assignment details, get a quote, make a secure payment, and we'll assign your task to a qualified law expert.</P>
									</div>
                                    </div>
                                </div>
                            </li>
							 
						 
                  	</ul>
					
				</div>
			
				<div class="column col-lg-6 col-md-6 col-sm-12">
					 
					<ul class="accordion-box">
					       <li class="accordion block"> 
                                <div class="acc-btn bg-white border " style="font-weight:500; font-size: 20px;; color:black">4. What Are the Qualifications of Your Law Assignment Writers?<div class="icon fa fa-angle-down"></div></div>
                                  <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                         <P>Our law assignment writers are highly qualified professionals with extensive knowledge and experience in various legal fields. They have advanced degrees in law and a track record of helping students succeed.</P>
										</div>
                                    </div>
                                  </div>
                            </li>
							<li class="accordion block">
                                <div class="acc-btn bg-white border " style="font-weight:500; font-size: 20px;; color:black">5. Do you offer help with legal research and writing?<div class="icon fa fa-angle-down"></div></div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                         <P>Yes, we do! Our experts can assist with both legal research and writing, ensuring your assignments are well-researched, clearly written, and properly cited.</P>
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