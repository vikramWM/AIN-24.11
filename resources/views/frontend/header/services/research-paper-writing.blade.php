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
					<li>Research Paper Writing</li>
				</ul>
            </div>
            <div class="row clearfix">
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<h1 class="text-center">Get the Best Research Paper writing Help Now @ 40% OFF!

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

    <!--Ace Your Research with Our Expert Writers! -->
	<section class=" py-0">
		<div class="auto-container ">
			<div class="row clearfix">
				<div class="title-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title-box">
							<div class="section-color-layer"></div>
							<h2 style="font-weight:500; font-size: 30px;; color:black" class="  my-4">Ace Your Research with Our Expert Writers! 
							</h2>
                            <p>Get tailor-made, confidential research papers that exceed expectations—guaranteed!
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

	<!-- What is a Research Paper? -->
       <section class="py-0">
		<div class="auto-container">
			<div class="row clearfix">
				<div class="title-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title-box">
							<div class="section-color-layer"></div>
							<h2 style="font-weight:500; font-size:30px; color:black" class="py-4">What is a Research Paper?
							</h2>
							<p>Before you use any research paper writing services, let’s understand what a research paper is. It is a type of academic writing where you explore a topic in depth, using research and analysis to back up your argument. Unlike essays, which might be based on personal opinions, research papers are all about facts and evidence. The main goal of a research paper is to show how you can contribute to the academic conversation by evaluating different sources, forming your own opinions, and learning to use resources effectively.
							</p>
							<p>If you're gearing up to write a research paper, here are some steps to guide you:
						    <ul>
								<li>1. Choose something that interests you and is worth exploring.</li>
								<li>2. Develop a research question or hypothesis. Ask questions like, What are you trying to find out or prove?
								</li>
								<li>3. Read widely and take detailed notes.
								</li>
								<li>4. Sum up your conclusions and guide the reader on what your paper is about. It usually appears at the end of your introduction and is typically a sentence or two.
								</li>
								<li>5. Create an outline or a mind map to structure your paper.
								</li>
								<li>6. Revisit your research and tweak your thesis if needed.</li>
								<li>7. This is where you present your arguments and evidence.
								</li>
							</ul>	
						</p>
						<p>You also have to understand that writing a research paper can be one of the toughest forms of academic writing mainly because it involves:
						 <ul>
							<li>1. Analyzing data or information and taking a clear stance on the topic.
							</li>
							<li>2. Providing evidence to back up your position.
							</li>
						 </ul>
						</p>

						  <p>
						  Some courses may even require you to conduct original research, analyze the results, and interpret your findings. Other times, you might be asked to review and critique the work of others. But tackling all this on your own can be overwhelming. That's where Assignment in Need comes in! Our research paper writers are here to provide you with unique and top-quality research paper writing help, tailored to your needs.

						  </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	   </section>

	   <!-- Why Choose Us? Here’s What Sets Us Apart: -->
       <!-- <section class="py-0">
		<div class="auto-container">
			<div class="row clearfix">
				<div class="title-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title-box">
							<div class="section color-layer"></div>
							<h2 style="font-weight:500; font-size:30px; color:black" class="py-4">Why Choose Us? Here's What Sets Us Apart:
							</h2>
							<p>
								<ul>
									<li>10,000+ Orders Monthly: Join a thriving community of satisfied students!
									</li>
									<li>86% Grade Improvement: Our clients see real results with their academic performance.
									</li>
									<li>90% On-Time Delivery: We beat deadlines, ensuring you get your work when you need it.
									</li>
								</ul>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	   </section> -->
              <!-- new code -->
	 <section class="goal-section py-4">
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
						<h2 style="font-weight:500; font-size:30px; color:black" class="  my-4">Why Choose Us? Here's What Sets Us Apart:</h2>
						<p>
								<ul>
									<li>10,000+ Orders Monthly: Join a thriving community of satisfied students!
									</li>
									<li>86% Grade Improvement: Our clients see real results with their academic performance.
									</li>
									<li>90% On-Time Delivery: We beat deadlines, ensuring you get your work when you need it.
									</li>
								</ul>
							</p>
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

	   <!-- Custom Research Paper Writing Service by Assignment in Need! -->
               <section class="py-0">
				<div class="auto-container">
					<div class="row clearfix">
						<div class="title-column col-lg-12 col-md-12 col-sm-12">
							<div class="inner-column">
								<div class="title-box">
									<div class="section-color-layer"></div>
									<h2 style="font-weight:500; font-size:30px; color:black" class="py-4">Custom Research Paper Writing Service by Assignment in Need!
									</h2>
									<p>Looking for a trustworthy place to get your research paper done? You've found it! At Assignment in Need, we're here to take care of all your academic challenges. Our expert writers are ready to tackle even the toughest assignments, ensuring you get nothing but the best.
                                     </p>
									 <p>When you use our research paper writing services, you have the option to pick a writer from our talented team or let our smart system match you with the ideal expert. Either way, you'll receive a high-quality paper that meets all your deadlines—because we know how important it is to deliver on time.
									 </p>
									 <p>Our team of 67 seasoned Research Paper Writers can craft papers based on experimentation, implementation, and analysis in 28 different fields. With years of experience under their belts, they've successfully delivered top-notch reviews and empirical studies to students from over 1,600 top universities around the globe.
									 </p>
								</div>
							</div>
						</div>
					</div>
				</div>
			   </section>
 
			   <!-- Discover the Art of Human-Crafted Writing! -->

            <section class="py-0">
				<div class="auto-container">
					<div class="row clearfix">
						<div class="title-column col-lg-12 col-md-12 col-sm-12">
							<div class="inner-column">
								<div class="title-box">
									<div class="section-color-layer"></div>
									<h2 style="font-weight:500; font-size:30px; color:black" class="py-4">Discover the Art of Human-Crafted Writing!
									</h2>
									<!-- <p>
										<ul>
											<li>1. Your instructions, perfectly executed
											</li>
											<li>2. Pay only when you're delighted with the result
											</li>
											<li>3. Deadlines are our promise—always met
											</li>
											<li>4. Your privacy is safeguarded with the utmost care
											</li>
										</ul>
									</p> -->
							 
                                <!-- new code -->
	        <div class="container">
					 <div class="row ">
						<div class="col-12 col-md-6 ">
						<p class="p-3 fs-5 border bg-light text-center">Your instructions, perfectly executed</p>
					    </div>
						<div class="col-12 col-md-6">
						<p class="p-3 fs-5 border bg-light text-center ">Pay only when you're delighted with the result </p>
						</div>
						<div class="col-12 col-md-6">
						<p class="p-3 fs-5 border bg-light text-center">Deadlines are our promise—always met </p>
						</div>
						<div class="col-12 col-md-6">
						<p class="p-3 fs-5 border bg-light text-center">Your privacy is safeguarded with the utmost care </p>
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
 
			<!-- Hire Experts to write the research paper -->

              <section class="py-0">
				<div class="auto-container">
					<div class="row clearfix">
						<div class="title-column col-lg-12 col-md-12 col-sm-12">
							<div class="inner-column">
								<div class="title-box">
									<div class="section-color-layer"></div>
									<h2 style="font-weight:500; font-size:30px; color:black" class="py-4">Hire Experts to write the research paper
									</h2>
									<p>If you're looking for top-notch research paper writing help then Assignment in Need is here for you. So, what exactly is a research paper? It's an in-depth piece of writing that involves original research, detailed analysis, and clear explanations on a specific topic. It's a key part of academic writing, and to aim for that A+ grade, having a positive attitude and confidence in your content is crucial.
									</p>
									<p>Our team of professional research paper writers is highly skilled and ready to tackle any type of college research paper, whether it's a term paper, thesis, or dissertation. We dive into trustworthy sources and use them to craft papers that are not just good but exceptional. We're committed to delivering top-quality work and helping you succeed in your exams, making your educational journey smoother.
									</p>
							<p>Here are a few tips to help you write a great research paper:
								 <ul>
									<li><b>1. Pick a Topic You Know Well: </b>  Choose a topic that you're familiar with and feel comfortable exploring. Your interest and knowledge will shine through in your work.
									</li>
									<li><b>2. Get Your Topic Approved: </b>  Once you have your topic, discuss it with your teacher to make sure it's on the right track. If you're unsure about your choice, take some time to refine it before presenting it for approval.
									</li>
									<li><b>3. Select a Manageable Subject: </b>  Opt for a subject that isn't too technical or specialized. Aim for topics where you can easily find and manage source materials.
									</li>
								 </ul>	
							</p>
							<p>With these tips and the support from Assignment in Need, you'll be well on your way to writing a successful research paper. Let us help you make the process easier and achieve those top grades!
							</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			  </section>

			  <!-- Easy Tips for Crafting a Great Research Paper -->

              <section class="py-0">
				<div class="auto-container">
					<div class="row clearfix">
						<div class="title-column col-lg-12 col-md-12 col-sm-12">
                           <div class="inner-column">
							<div class="title-box">
								<div class="section-color-layer"></div>
								<h2 style="font-weight:500; font-size:30px; color:black" class="py-4">Easy Tips for Crafting a Great Research Paper
								</h2>
								<p>Writing a research paper doesn't have to be overwhelming. With these simple tips, you can make the process easier and more enjoyable. Plus, if you need extra help, Assignment in Need's research writing services are here for you!
									<ul>
										 
										<li><b>1. Choose a Clear Topic:</b> Pick a topic that interests you and is specific enough to explore in depth. A well-defined topic makes your research more focused and manageable.
										</li>
										<li><b>2. Do Your Research:</b> Collect information from reliable sources like books, academic journals, and reputable websites. Take notes and organize your findings for easy reference.
										</li>
										<li><b>3. Develop a Strong Thesis Statement:</b> Your thesis statement should clearly state the main argument or point of your paper. It's usually one or two sentences long and guides the direction of your research.
										</li>
										<li><b>4. Create an Outline:</b>  Plan out your paper by organizing your ideas and research into a logical structure. An outline helps you see how your paper will flow and ensures you cover all key points.
										</li>
										<li><b>5. Write a Compelling Introduction:</b>  Start with an engaging introduction that provides background on your topic and ends with your thesis statement. It sets the stage for your paper and grabs the reader's attention.
										</li>
										<li><b>6. Craft the Body with Care:</b> Focus each section of the body on a specific point related to your thesis. Use evidence and examples to support your arguments and make your points clear.
										</li>
										<li><b>7. Conclude Effectively:</b> Summarize your main findings and reinforce your thesis in the conclusion. It's your chance to leave a strong impression and tie everything together.
										</li>
										<li><b>8. Revise and Proofread: </b> Review your paper for clarity, coherence, and accuracy. Check for spelling and grammar mistakes, and make sure all sources are properly cited.
										</li>
										<li><b>9. Seek Feedback:</b> Get feedback from a peer, teacher, or tutor. Fresh eyes can help spot errors and provide valuable suggestions.
										</li>
									</ul>
								</p>
								<p>Need a little extra help with your research paper? Assignment in Need offers expert research writing assistance to make sure your paper is top-notch. Whether you need help with researching, writing, or editing, our team is here to support you every step of the way.
								</p>
							
							</div>
						   </div>
						</div>
					</div>
				</div>
			  </section>
			  <!-- Your Satisfaction, Our Promise -->
			   <section class="py-0">
				<div class="auto-container">
					<div class="row clearfix">
						<div class="title-column col-lg-12 col-md-12 col-sm-12">
							<div class="inner-column">
								<div class="title-box">
									<div class="section-color-layer"></div>
									<h2 style="font-weight:500; font-size:30px; color:black" class="py-4">Your Satisfaction, Our Promise
									</h2>
									<p>With our dedicated writers and responsive support team, we'll go above and beyond to ensure you're thrilled with your order. Your happiness is 100% guaranteed!
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			   </section>

			   <!-- Research Paper Writing help -->
             <section class="py-0">
				<div class="auto-container">
					<div class="row clearfix">
						<div class="title-column col-lg-12 col-md-12 col-sm-12">
							<div class="inner-column">
								<div class="title-box">
									<div class="section-color-layer"></div>
									<h2 style="font-weight:500; font-size:30px; color:black" class="py-4">Research Paper Writing help
									</h2>
									<p>At AssignmentInNeed, we're here to help you with your research paper! Our expert writers are highly qualified and can handle any kind of research paper you need.</p>
								    <p>When working on your research paper, you might need a thesis statement. It's the main idea that ties your paper together. You can place it right at the beginning, usually in the introduction. But don't worry if you're not sure where to start—our team can guide you through it, or you can chat with your teacher for advice.
                                    </p>
									<p>Remember, your thesis statement should be interesting and informative. Avoid using general or unclear arguments; instead, make sure your statement and argument are engaging and well-thought-out. That way, your paper will be a great read!
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			 </section>

			 <!-- Types Of Research Paper Writing We Help in! -->
              <section class="py-0">
				<div class="auto-container">
					<div class="row clearfix">
						<div class="title-column col-lg-12 col-md-12 col-sm-12">
							<div class="inner-column">
								<div class="title-box">
									<div class="section-color-layer"></div>
									<h2 style="font-weight:500; font-size:30px; color:black" class="py-4">Types Of Research Paper Writing We Help in!
									</h2>
									<p>At Assignment in Need, we're here to assist you with every step of your research paper. Here's how we can make the process easier for you:
										</p>
										<h3>Custom Research Paper Writing</h3>
										<p> Need a research paper that's made just for you? Our talented writers can craft a custom paper based on your specific needs. Whether you need a brand-new paper or help with a certain section, just tell us what you need, and we'll get it done exactly how you want!</p>
										<h3> Research Paper Editing and Proofreading
                                        </h3>
										<p>Already have a draft but want to make sure it's perfect? Our editing and proofreading team will check your paper for any mistakes and help polish it up. We'll look for errors in spelling, grammar, and clarity to make sure your paper is clear and professional.
										</p>
										<h3>Formatting and Citation Help
										</h3>
										<p>Struggling with how to format your paper or cite your sources? We've got you covered. Whether you're using APA, MLA, or any other citation style, we'll make sure your paper is formatted correctly and that all your references are in order. From the title page to the reference list, we'll make sure everything looks just right.
										</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			  </section>
             
			  <!-- Simple Steps to Write a Perfect Research Paper -->
                 <section class="py-0">
					<div class="auto-container">
						<div class="row celarix">
							<div class="title-column col-lg-12 col-md-12 col-sm-12">
								<div class="inner-column">
									<div class="title-box">
										<div class="section-color-layer"></div>
										<h2 style="font-weight:500; font-size:30px; color:black" class="py-4">Simple Steps to Write a Perfect Research Paper
										</h2>
										<p>Writing a research paper can be easier if you break it down into simple steps. Here's a friendly guide to help you get it right:
                                        </p>
										<h3>Choosing the Right Topic
										</h3>
										<p>Start by picking a topic that interests you and is suitable for your assignment. A great topic is specific enough to explore in depth but broad enough to find plenty of information. Choose something that excites you—it'll make your research and writing process much more enjoyable!
										</p>
										<h3>Conducting Effective Research
										</h3>
										<p>Next, dive into your research. Look for reliable sources such as books, academic journals, and reputable websites. Take detailed notes and keep track of your sources. Good research is key to a strong paper, so the more thorough you are, the better your paper will be.
										</p>
										<h3>Organizing Your Paper
										</h3>
										<p>A well-organized paper is easier to write and read. Start with an outline that includes an introduction, body sections, and a conclusion. Organize your notes according to this outline to keep your paper on track and make sure it flows smoothly.
										</p>
										<h3>Avoiding Common Mistakes
										</h3>
										<p>Watch out for these common pitfalls to ensure your paper is top-notch:
										 <ul>
											<li><b>1. Spelling and Grammar Errors: </b> Proofread your paper to catch any mistakes.
											</li>
											<li><b>2. Lack of Structure: </b> Follow your outline to ensure your paper has a clear introduction, detailed body sections, and a strong conclusion.
											</li>
											<li><b>3. Incorrect Citations: </b> Make sure you cite all your sources correctly to avoid plagiarism.
											</li>
										 </ul>
										</p>
										<h3>Need Extra Help?
										</h3>
										<p>If you need a bit more assistance, Assignment in Need is here for you! Our research paper writing services can help you with every step of the process. Whether you need help choosing a topic, conducting research, organizing your paper, or avoiding common mistakes, our expert writers are ready to support you.
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				 </section>
                
				 <!-- Assignment In Need is the Best Research Paper Writing Help Service In the World -->
                 <section class="py-0">
					<div class="auto-container">
						<div class="row clearfix">
							<div class="title-column col-lg-12 col-md-12 col-sm-12">
								<div class="inner-column">
									<div class="title-box">
										<div class="section-layer-column"></div>
										<h2 style="font-weight:500; font-size:30px; color:black" class="py-4">Assignment In Need is the Best Research Paper Writing Help Service In the World
										</h2>
										<p>We understand how challenging academic papers can be, and research papers are no exception. The stakes are high, and getting top grades is crucial.
										</p>
										<p>It is common to feel “i need someone to do my research paper” but you have to make sure that while hiring professional writers can sometimes be pricey, we at Assignment in Need offer great value with our affordable rates and cheap research paper writers, plus extra perks like discounts, sign-up bonuses, referral deals, seasonal offers, and bulk order savings. You can combine these offers to get our research paper writing services at a fantastic price. And don’t forget, our app gives you an extra cashback on all orders!
										</p>
										 <p>When juggling multiple academic tasks, Assignment in Need can be a real lifesaver. Here’s why we stand out:
											</p> 
										<!-- <ul>
											<li><b>1. We Follow Your Guidelines: </b> Your paper will stick to the guidelines you provide.
											</li>
											<li><b>2. 100% Authentic and Error-Free: </b> We ensure every paper is original and polished.
											</li>
											<li><b>3. Thorough Quality Checks: </b> We review every paper carefully before it reaches you.</li>
											<li><b>4. Zero Plagiarism: </b> Your work will always be unique.
											</li>
										</ul> -->
										<div class="container">
						             <div class="row ">
							          <div class="col-lg-12 col-md-12 col-sm-12 card bg-light shadow-sm   mb-2">
						                <p class=" fs-5 text-align: justify;"> 
								        <ul> 
										   <li><b>1. We Follow Your Guidelines: </b> Your paper will stick to the guidelines you provide.
											</li>
											<li><b>2. 100% Authentic and Error-Free: </b> We ensure every paper is original and polished.
											</li>
											<li><b>3. Thorough Quality Checks: </b> We review every paper carefully before it reaches you.</li>
											<li><b>4. Zero Plagiarism: </b> Your work will always be unique.
											</li>	
								     </ul>
								      </p>
							          </div>
						           </div>
					         </div>
										</p>
									  <p>We also take your privacy seriously. Our dedicated IT team uses top-notch security to protect your data from breaches and malware whenever you ask us to “write my research paper”. We never share your information with third parties, including our writers. We connect you with highly qualified MPhil and PhD research paper writer online, who are knowledgeable and punctual. They follow your instructions precisely to deliver outstanding results.
									  </p>	
									  <p>If you're looking for cheap research paper writer, we’re here for you. Place an order today and let our expert writers bring their knowledge and experience to your paper, making it shine!
									  </p> 
									</div>
								</div>
							</div>
						</div>
					</div>
				 </section>
                
				 <!-- Hesitating About Your Order? -->

                 <section class="py-0">
					<div class="auto-container">
						<div class="row clearfix">
							<div class="title-column col-lg-12 col-md-12 col-md-12">
								<div class="inner-column">
									<div class="title-box">
										<div class="section-color-layer"></div>
										<h2 style="font-weight:500; font-size:30px; color:black" class="py-4">Hesitating About Your Order?
										</h2>
										<p>Got questions or doubts? We're here to clear everything up and make your decision easy and confident!
                                       </p>
									   <p>
										<ul>
											<li><b>1. Transparent Process: </b> We'll walk you through every step of your order, so you know exactly what to expect.
											</li>
											<li><b>2. Clear Communication: </b> Our team is here to answer any questions and address any concerns you might have.
											</li>
											<li><b>3. No Hidden Fees: </b> What you see is what you get—no surprises, just honest service.
											</li>
											<li><b>4. Customer Support: </b> Reach out anytime for assistance or clarification; we're always here to help.
											</li>
											<li><b>5. Risk-Free Trial: </b> Explore our services with confidence and see the quality for yourself before making a final commitment.
											</li>
										</ul>
									   </p>
									</div>
								</div>
							</div>
						</div>
					</div>
				 </section>

				 <!-- There are the some subjects that we cater are given below -->
                   <section class="py-0">
					<div class="auto-container">
						<div class="row clearfix">
							<div class="title-column col-lg-12 col-md-12 col-sm-12">
								<div class="inner-column">
									<div class="title-box">
										<div class="section-color-layer"></div>
										<h2 style="font-weight:500; font-size:30px; color:black" class="py-4">There are the some subjects that we cater are given below
										</h2>
										<p>We're excited to show you how we can help with a variety of subjects! Whether you need help with management, law, nursing, finance, or anything else, we've got you covered. You can trust us for all your research writing needs. Here's a look at what we offer:
										</p>
										<h3>Business and Management Research Writing Help
										</h3>
										<p>Having trouble with business and management topics? Our experts can make these tricky concepts easier to understand. Whether you need help with case studies, strategic analysis, or writing a research paper, we're here to simplify things and help you do well.
										</p>
										<h3>Law Research Writing Help
										</h3>
										<p>Law can be a lot to handle, with topics like trade laws, contract law, and intellectual property. If you're finding it hard to keep up, our team of experienced helpers is ready to assist. Just let us know what you need, and we'll help you with your law research writings and aim to boost your grades.
										</p>
										<h3>Computer Science Research Writing Help
										</h3>
										<p>Computer science can be complex, even if you're good with computers. Whether it's computer architecture, databases, AI, or other subjects, our computer science experts are here to help you get through the tough parts and understand your research writings better.
										</p>
										<h3>Engineering Research Writing Help
										</h3>
										<p>Studying engineering, whether it's civil, electrical, mechanical, or another type, can be demanding. Don't stress about your research writings—our skilled writers can handle them for you and get your work done well and on time.
                                        </p>
                                         <h3>Check Out Other Subjects for Homework Help:
										</h3>
										<p>We cover a wide range of subjects, so feel free to explore the other areas we can help with. We're here to support you with any research writing, anytime!</p>


                                <div class="subject-container card bg-light">
										<div class="row justify-container-center align-item-center">
											<!-- <div class="col-lg-4 text.center">
												<img src="https://bestclasshelpaustralia.com/assets/lp/images/img4.webp" alt="Happy Woman" class="subject-image">
											</div> -->
											<div class="col-lg-12">
												<div class="subject-list-box">
													<div class="row">
														<div class="col-md-6">
															<ul class="subject-list">
																<li><i class="fas fa-book-open"></i>Database research writing help
																</li>
																<li><i class="fas fa-book-open"></i>Medical Science research writing help
																</li>
																<li><i class="fas fa-book-open"></i>Nursing research writing help</li>
																<li><i class="fas fa-book-open"></i>Marketing research writing help</li>
															    <li><i class="fas fa-book-open"></i>Finance research writing help
																</li>
																<li><i class="fas fa-book-open"></i>Statistics research writing help
																</li>
																<li><i class="fas fa-book-open"></i>Accounting research writing help</li>
																<li><i class="fas fa-book-open"></i>Mathematics research writing help
																</li>
																<li><i class="fas fa-book-open"></i>Psychology research writing help
																</li>
																<li><i class="fas fa-book-open"></i>Media research writing help</li>
															
															</ul>
														</div>
													<div class="col-md-6">
															<ul class="subject-list">
															 
																<li><i class="fas fa-book-open"></i>English research writing help
																</li>
																<li><i class="fas fa-book-open"></i>Agriculture research writing help
																</li>
																<li><i class="fas fa-book-open"></i>Health research writing help</li>
																<li><i class="fas fa-book-open"></i>Science research writing help
																</li>
																<li><i class="fas fa-book-open"></i>Econometrics research writing help</li>
																<li><i class="fas fa-book-open"></i>Social Science research writing help</li>
															    <li><i class="fas fa-book-open"></i>Business research writing help</li>
																<li><i class="fas fa-book-open"></i>Economics research writing help
																</li>
																<li><i class="fas fa-book-open"></i>Programming research writing help</li>
																<li><i class="fas fa-book-open"></i>Arts and Humanities research writing help</li>
															
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
					  </div>
		    </section>
               
            <!-- Help for PhD Research Papers & Publishing -->
            <section class="py-0">
				<div class="auto-container">
					<div class="row clearfix">
						<div class="title-column col-lg-12 col-md-12 col-sm-12">
							<div class="inner-column">
								<div class="title-box">
									<div class="section-color-layer"></div>
									<h2 style="font-weight:500; font-size:30px; color:black" class="py-4">Help for PhD Research Papers & Publishing
									</h2>
									<p>Writing and publishing your PhD research paper can be tough, but Assignment in Need is here to make it easier!
									</p>
							<p><b>PhD Research Paper Support
									</b>
								<!-- <ul>
									<li><b>1. Strong Thesis: </b> We help you craft a clear and compelling thesis.
									</li>
									<li><b>2. Research Assistance: </b> Get help with gathering and analyzing data.
									</li>
									<li><b>3. Paper Organization: </b> We'll ensure your paper is well-structured and polished.
									</li>
									<li><b>4. Editing & Proofreading: </b> We make sure your paper is error-free and professional.
									</li>
								</ul> -->
								<div class="container">
						             <div class="row ">
							          <div class="col-lg-12 col-md-12 col-sm-12 card bg-light shadow-sm   mb-2">
						                <p class=" fs-5 text-align: justify;"> 
								        <ul>
									<li><b>1. Strong Thesis: </b> We help you craft a clear and compelling thesis.
									</li>
									<li><b>2. Research Assistance: </b> Get help with gathering and analyzing data.
									</li>
									<li><b>3. Paper Organization: </b> We'll ensure your paper is well-structured and polished.
									</li>
									<li><b>4. Editing & Proofreading: </b> We make sure your paper is error-free and professional.
									</li>
								</ul>
								      </p>
							          </div>
						           </div>
					         </div>
							</p>
							<p><b>Publishing Help
							</b>
						<!-- <ul>
							<li><b>1. Journal Selection:</b> Find the right journal for your work.
							</li>
							<li><b>2. Manuscript Preparation:</b> We assist with formatting and meeting journal guidelines.
							</li>
							<li><b>3. Submission Guidance:</b> Navigate the submission process with ease.
							</li>
						</ul> -->
						<div class="container">
						             <div class="row ">
							          <div class="col-lg-12 col-md-12 col-sm-12 card bg-light shadow-sm   mb-2">
						                <p class=" fs-5 text-align: justify;"> 
										<ul>
							<li><b>1. Journal Selection:</b> Find the right journal for your work.
							</li>
							<li><b>2. Manuscript Preparation:</b> We assist with formatting and meeting journal guidelines.
							</li>
							<li><b>3. Submission Guidance:</b> Navigate the submission process with ease.
							</li>
						    </ul>
								      </p>
							          </div>
						           </div>
					         </div>
					</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

            <!-- Customer's Belief in us Provides the Utmost Quality Work -->
              <section class="py-0">
				<div class="auto-container">
					<div class="row clearfix">
						<div class="title-column col-lg-12 col-md-12 col-sm-12">
							<div class="inner-column">
								<div class="title-box">
									<div class="section-color-layer"></div>
									<h2 style="font-weight:500; font-size:30px; color:black" class="py-4">Customer's Belief in us Provides the Utmost Quality Work</h2>
								  <p>At research writing in Need, we use the latest Turnitin software to make sure your research paper is free from any unoriginal content. You can trust that all the materials we use are authentic and never taken from publicly available sources.
								  </p>
								  <p>We're skilled in various writing styles and can handle any referencing format you need, whether it's APA, Harvard, MLA, Turabian, OSCOLA, or others. Our goal is to help you with your research paper, anytime you need it, 24/7.
								  </p>
								  <p>Let us take care of the details so you can focus on achieving your best grades!
								  </p>
								</div>
							</div>
						</div>
					</div>
				</div>
			  </section>
               
			  <!-- Reduce Research Paper Rejections with Our Top Writing Strategies -->
                <section class="py-0">
					<div class="auto-container">
						<div class="row clearfix">
							<div class="title-column col-lg-12 col-md-12 col-sm-12">
								<div class="inner-column">
									<div class="title-box">
										<div class="section-color-layer"></div>
										<h2 style="font-weight:500; font-size:30px; color:black" class="py-4">Reduce Research Paper Rejections with Our Top Writing Strategies
										</h2>
										<p>Avoid common pitfalls and improve your chances of acceptance with our expert research paper writing strategies. From crafting a strong thesis to perfecting your paper's structure and adhering to submission guidelines, we provide the tools you need to make your research stand out and reduce rejections. Let us help you refine your paper for success!</p>
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
					<h2 class="py-3" style="font-weight:500; font-size: 30px; color:black">Expert Research Paper Writing Help Services for Students Worldwide</h2>
					<div class="text">
					 <p>At Assignment in Need, expert research paper writing services help students in Malaysia, UAE, Spain, the UK, Australia, and Canada in achieving their academic goals. Backed by a 4.5 rating and with 9/10 users reporting better grades, the platform ensures quality and reliability. Our skilled writers craft original research papers on any topic, providing thorough research, clear analysis, and detailed explanations. Understanding the pressures of academic life, Assignment in Need lightens the load with custom-written papers, meticulous editing, and proofreading, as well as reliable assistance with formatting and citations. This dependable support makes it a trusted partner for students aiming for success in their research paper goals.</p>
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
 
 <!-- FAQs Question  section for research paper -->
 
	        
 <section class="faq-section bg-light">
	    	<div class="auto-container">
			<div class="row ">
				<div class="titel-column col-lg-12 col-md-12 col-sm-12">
				    <div class="title-box text-center">
						<h2 style="font-weight:500; font-size: 30px;; color:black" class="my-4"><b>Frequently Asked Questions For Research Paper Writing Help Services</b></h2> 
					 </div>
					<div class="row"> 
					 		 
				<div class="column col-lg-6 col-md-6 col-sm-12 ">
					 
					<ul class="accordion-box ">
						<li class="accordion block ">
							<div class="acc-btn bg-white border " style="font-weight:500; font-size: 20px;; color:black" >1. What is research paper writing?<div class="icon fa fa-angle-down"></div></div>
							<div class="acc-content" style="display: none;">
								<div class="content">
									<div class="text">
										 <P>Research paper writing involves creating an in-depth, scholarly document that investigates a specific topic through thorough research, analysis, and critical thinking. It typically includes a clear thesis, structured sections (such as introduction, literature review, methodology, results, and conclusion), and proper citations to support and present findings in a formal academic format.</P>
										</div>
								</div>
							</div>
						</li>
						<li class="accordion block ">
							<div class="acc-btn  bg-white  border" style="font-weight:500; font-size: 20px;; color:black">2. How many words is a research paper?<div class="icon fa fa-angle-down"></div></div>
							<div class="acc-content"  >
								<div class="content">
									<div class="text">
										<P>The length of a research paper varies depending on the level of study and the specific requirements of the assignment. Typically, a research paper ranges from 3,000 to 7,000 words, but it can be shorter or longer depending on the scope and depth of the research. Always check your assignment guidelines for specific word count requirements.</P>
										</div>
								</div>
							</div>
						</li>
						
						<li class="accordion block">
							<div class="acc-btn bg-white  border" style="font-weight:500; font-size: 20px;; color:black" >3. How can your service help with writing a research paper?<div class="icon fa fa-angle-down"></div></div>
							<div class="acc-content" style="">
								<div class="content">
									<div class="text">
										 <P>We assist with all stages of research paper writing, including topic selection, research, writing, and editing. Our experts ensure that your paper is well-structured, thoroughly researched, and meets academic standards</P>
									</div>
								</div>
							</div>
						</li>
						<li class="accordion block">
							<div class="acc-btn bg-white  border" style="font-weight:500; font-size: 20px;; color:black" >4. What should I provide to get help with my research paper?<div class="icon fa fa-angle-down"></div></div>
							<div class="acc-content" style="">
								<div class="content">
									<div class="text">
										 <P>Provide us with your research paper topic, requirements, guidelines, and deadline. Any</P>
										</div>
								</div>
							</div>
						</li>
                  	</ul>
					
				</div>
			
				<div class="column col-lg-6 col-md-6 col-sm-12">
					 
					<ul class="accordion-box">
					 
						
						<li class="accordion block">
							<div class="acc-btn bg-white  border" style="font-weight:500; font-size: 20px;; color:black">5. Can you help with specific sections of my research paper, like the literature review or methodology?<div class="icon fa fa-angle-down"></div></div>
							<div class="acc-content" style="">
								<div class="content">
									<div class="text">
										 <P>Yes, we can assist with specific sections such as the literature review, methodology, data analysis, and conclusion, ensuring each part meets academic standards.</P>
									</div>
								</div>
							</div>
						</li>
						
						<li class="accordion block">
							<div class="acc-btn bg-white  border" style="font-weight:500; font-size: 20px;; color:black">6. How do you handle complex research topics or interdisciplinary papers?<div class="icon fa fa-angle-down"></div></div>
							<div class="acc-content" style="">
								<div class="content">
									<div class="text">
										<P>For complex or interdisciplinary topics, we assign writers with relevant expertise who conduct in-depth research and provide comprehensive analysis to address the topic effectively.</P>
									</div>
								</div>
							</div>
						</li>
						
						<li class="accordion block">
							<div class="acc-btn bg-white  border" style="font-weight:500; font-size: 20px;; color:black">7. What if I need revisions for my research paper?<div class="icon fa fa-angle-down"></div></div>
							<div class="acc-content" style="">
								<div class="content">
									<div class="text">
										<P>You can request revisions if needed. We offer revision services to make necessary adjustments based on your feedback and ensure the paper meets your expectations.</P>
										</div>
								</div>
							</div>
						</li>

						<li class="accordion block">
							<div class="acc-btn bg-white  border" style="font-weight:500; font-size: 20px;; color:black">8. How do you ensure the timely delivery of my research paper?<div class="icon fa fa-angle-down"></div></div>
							<div class="acc-content" style="">
								<div class="content">
									<div class="text">
										<P>We manage deadlines effectively by prioritizing your research paper and working efficiently to ensure it is delivered on time, without compromising on quality.</P>
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