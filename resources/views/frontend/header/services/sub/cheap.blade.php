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
       
	</style>
	<section class="banner-section-three header-section" >
		<div class="auto-container" style="margin-top: 100px;">
			<div style="text-align: center;">
				<ul class="page-breadcrumb">
					<li><a href="/">Home</a></li>
					<li>cheap</li>
				</ul>
            </div>
            <div class="row clearfix">
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<h1 class="text-center"> Reliable and Cheap Assignment Writing Help from Assignment In Need 
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
							<h2 style="font-weight:500; font-size: 30px;; color:black" class="  my-4">Introduction
                            </h2>
                             <p>At Assignment In Need, we get it—school assignments are a nightmare. Handling schoolwork, activities, and a personal life simultaneously? Impossible. That's why we offer help that costs less than your daily coffee. Students need high-quality  <b>cheap assignment writing help</b>, and we make sure everyone can access it without losing their shirt. Financial worries shouldn't hold students back from getting the assistance they need.
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

    <!-- Affordable Assignment Writing Help: Quality Solutions on a Budget -->
     <section class="my-0">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="title-column col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="title-box">
                            <div class="section-color-layer"></div>
                            <h2 style="font-weight:500; font-size:30px; color:black" class="my-4">Affordable Assignment Writing Help: Quality Solutions on a Budget
                            </h2>
                         <p>Every student deserves top-notch  <b>cheap assignment writing help</b> without draining their wallet. We designed our  <b>best cheap assignment writing services</b> to be affordable yet maintain top quality. With prices so low, anyone, regardless of financial status, can tap into our expertise. We make sure every student gets necessary academic support, regardless of their financial situation. Ensuring access to quality writing help is our mission, guaranteeing every student the chance to excel in their studies.
                         </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section>
      
     <!-- Why Smart Students Choose Us for Cheap Assignment Writing Help? -->
        <section class="my-0">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="title-column col-lg-12 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="title-box">
                                <div class="section-color-layer"></div>
                                <h2 style="font-weight:500; font-size:30px; color:black" class="my-4" >Why Smart Students Choose Us for Cheap Assignment Writing Help?
                                </h2>
                                <h3>Achieve Excellence without Breaking the Bank</h3>
                                <p>Smart students recognize the value in our  <b>best cheap assignment writing services</b>. They understand that with our  <b>cheapest assignment helper</b>, academic success doesn't have to break the bank. We provide well-researched and meticulously crafted assignments that meet rigorous academic standards. Students trust us to ensure experienced professionals handle their work. By focusing on quality and affordability, we make sure financial stress isn't part of the equation. Our goal is to be the go-to choice for students aiming for top grades and success in their studies.</p>
                               <h3>Budget-Friendly Academic Solutions
                               </h3>
                               <p>Affordability sets us apart. Offering various pricing options enables students to find a plan that fits their budget. We frequently review and adjust our rates to remain competitive and accessible. By doing so, we provide excellent value without compromising service quality. Our mission is to make superior academic  <b>cheap essay writing help</b> available to as many students as possible. Recognizing many students face financial stress, our flexible pricing aims to meet those needs effectively.
                               </p>
                               <h3>Engaging Learning Experience
                               </h3> 
                               <p>We offer more than just assignment writing. We aim to create a fun and helpful learning experience for our clients. By providing clear, organised, and informative content, we help students grasp difficult concepts and improve writing skills. Our mission extends beyond assisting with current schoolwork; we focus on supporting long-term learning. Through our efforts, we encourage critical thinking and deeper understanding. We help students become confident and capable of tackling the assignment. You gain knowledge and skills for independent academic success with our support. We believe in empowering students on their academic journeys.
                               </p>                          
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- What to Look for in Affordable Assignment Writing Services? -->
       <section class="my-0">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="title-column col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="title-box">
                            <div class="section-color-layer"></div>
                            <h2 style="font-weight:500; font-size:30px; color:black" class="my-4" >What to Look for in Affordable Assignment Writing Services?
                            </h2>
                         <p>When seeking the  <b>best cheap assignment writing services</b> with the  <b>cheapest assignment helper</b>, several factors come into play. These considerations ensure you receive top-notch assistance without compromising quality.
                         </p>
                         <h3>Quality You Can Trust
                         </h3>
                         <p>At Assignment In Need, we prioritise quality above all else. Employing an experienced  <b>cheap assignment writer</b> who is domain experts is our cornerstone. Each assignment undergoes thorough research, careful writing, and rigorous review to meet our standards. Our commitment is to deliver top-notch content that surpasses expectations. We maintain a strict quality control process to ensure accuracy, clarity, and zero errors in every assignment. By focusing on quality, we provide superior academic support. You achieve your educational goals with confidence and success through our assistance. Our approach ensures that clients reach these targets effectively.
                         </p>
                         <h3>Custom Written Assignments
                         </h3>
                         <p>We understand every assignment's uniqueness. Custom-written assignments tailored to your needs are our specialty. Our writers invest time in understanding your specific requirements. They deliver personalised solutions aligned with your academic goals. By focusing on provided details, we ensure each assignment mirrors your style and standards. This method ensures top-notch content suited to your studies. We focus on offering customised assistance. Our purpose is to boost your educational journey and assist you in achieving academic success.
                         </p>
                         <h3>Free Unlimited Modifications
                         </h3>
                         <p>We dedicate ourselves to your satisfaction. Not happy with the final product? We offer free unlimited revisions. Your assignment will match your expectations and guidelines precisely. We ensure this alignment through careful attention to detail. Our aim is to deliver a final product that makes you proud and meets your academic requirements. Delivering work that exceeds standards is our belief, highlighted by our revision policy. Providing unlimited revisions ensures you get exactly what you need. This gives you the confidence and support to excel in your academic endeavours.
                         </p>
                         <h3>24/7 Customer Support
                         </h3>
                         <p>Our customer support team and  <b>cheapest assignment helper</b> works around the clock to assist you. Whether you have questions or need assignment updates, we're available. We intend to provide a smooth and hassle-free process. Acknowledging the pressure of academic timelines and the need for dependable help, we make resolving your issues promptly our focus. This creates a sense of continual support for you. We strive to provide exceptional customer service, making your experience gratifying.
                         </p>
                         <p><b>Contact: </b> +44 2037695831</p>
                         <p><b>WhatsApp: </b> +44 7435256433</p>
                         <p><b>Email: </b> info@assignnmentinneed.com
                         </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       </section>
 
       <!-- Benefits of Using Affordable Assignment Writing Services -->
         <section class="my-0">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="title-column col-lg-12 col-md-12 col-sm-12">
                         <div class="inner-column">
                            <div class="title-box">
                                <div class="section-color-layer"></div>
                                <h2 style="font-weight:500; font-size:30px; color:black" class="my-4">Benefits of Using Affordable Assignment Writing Services
                                </h2>
                                <p>Choosing affordable assignment writing services has many benefits that can greatly improve your academic journey.</p>
                               <h3>Enhances Learning
                               </h3>
                               <p>Our <b>best cheap assignment writing services</b> support your learning. By providing well-researched, informative assignments, we help you understand subjects better. This boosts your grades and overall academic performance. Delivering thorough and insightful content is our focus. You can grasp complex ideas with greater ease through our assistance. Our main goal is to assist you in your studies with top-quality assignments. These assignments act as valuable learning tools, boosting academic achievement and enhancing your grasp of the coursework.
                               </p>
                               <h3>Cheap Assignment Writing Help
                               </h3>
                               <p>Affordability drives our services. Everyone deserves quality educational help, regardless of financial status. Our affordable assignment assistance provides necessary support without financial strain. Recognizing student budget constraints, we offer high-quality  <b>cheap assignment writing help</b> at fair, competitive prices. Keeping costs reasonable ensures excellent academic support for all students. We assist you in achieving educational goals while managing finances efficiently.
                               </p>
                               <h3>Reduces Stress
                               </h3>
                               <p>Academic pressure can feel overwhelming. We provide relief by taking assignments off your hands. This support lets you focus on studying for exams or engaging in extracurricular activities. Managing your assignments is our job, allowing you to better handle academic workload. It offers you more freedom to balance your responsibilities. With our help, the pressure eases, leading to a more productive life. Reducing stress is our goal, supporting both your academic and personal endeavours.
                               </p>
                               <h3>Saves Time</h3>
                               <p>Time holds great value for students. Allowing us to handle your assignments saves precious hours for other tasks. You can then focus on academic or personal activities. Our efficient writers ensure assignments are completed on time, never missing deadlines. This frees up time for studying, joining extracurriculars, or enjoying a break. Meeting deadlines and managing time well are critical. You receive timely and reliable support from us. We focus on meeting your needs efficiently. Our  <b>cheapest assignment helper</b> aims to help you achieve a balanced and successful academic experience.
                               </p>
                            </div>
                         </div>
                    </div>
                </div>
            </div>
         </section>

         <!-- We Provide Affordable Assignment Help Across All Subjects -->
        <section class="my-0">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="title-column col-lg-12 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="title-box">
                                <div class="section-color-layer"></div>
                                <h2 style="font-weight:500; font-size:30px; color:black" class="my-4">We Provide Affordable Assignment Help Across All Subjects
                                </h2>
                                <p>Regardless of your subject or academic level, we can assist. Our <b> assignment helper team </b> boasts expertise in various areas, such as humanities, social sciences, natural sciences, and engineering. We provide thorough  <b>cheap assignment writing help</b> for each subject to ensure you receive the needed support. Your academic focus doesn't limit our ability to help. We cover a wide range of disciplines with our knowledgeable writers. Our assistance spans many fields, making sure you get comprehensive support.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
      
            <!-- FAQs Question  section for cheap -->
             <section class="faq-section">
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="column col-lg-12 col-md-12 col-sm-12">
                            <div class="title-box">
                                <h2 style="font-weight:500; font-size:30px; color:black;" class="my-4">Frequently asked questions</h2>
                              <ul class="accordion-box">
                              <li class="accordion block">
                                  <div class="acc-btn">1. How Can I Confirm My Assignment Is Original and AI-Free?
                                  <div class="icon fa fa-angle-down"></div></div>
                                  <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                            <p>Originality matters to us the most. Our professional writers create every assignment from scratch. Using advanced tools, we rigorously check for plagiarism. Each piece of content remains completely original and free from AI. Trust that your assignment will be unique. We customise it to suit your unique requirements. Guaranteeing originality stands as our highest priority. You receive personalised content you can trust.
                                            </p>
                                        </div>
                                    </div>
                                 </div>
                           </li>
                           <li class="accordion block">
                                  <div class="acc-btn">2. Can I Get Custom Assignment at Cheap Prices?
                                  <div class="icon fa fa-angle-down"></div></div>
                                  <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                            <p>Absolutely, yes! We design our  <b>cheap assignment writing services</b> to offer custom assignments at affordable prices. Whether you're looking for a way to  <b>write my assignment in cheap</b> or need something more specific, our writers specialise in providing personalised solutions. We ensure your requirements are met without exceeding your budget.
                                            </p>
                                            <p>Refer 4 friends and receive a free group project. Place 5 orders, and earn 1 free. Our 120% money-back guarantee stands firm. If we miss the delivery deadline, even the shortest one, and you get 120% of your money back. Our special offers make our services even more appealing. We aim to provide both quality and value.
                                            </p>
                                        </div>
                                    </div>
                                 </div>
                           </li>
                           <li class="accordion block">
                                  <div class="acc-btn">3. Are Your Services Really Cheap?
                                  <div class="icon fa fa-angle-down"></div></div>
                                  <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                            <p>Absolutely, our services are budget-friendly. If you need someone to  <b>do my assignment cheap</b>, we strive to deliver the best value with high-quality assignment help at competitive prices. Constantly, we review our pricing to remain accessible to all students, regardless of their financial status.
                                            </p>
                                            <p>Avail a flat 40% discount on every order. Your discount could even increase based on specific needs. Offering significant savings is key to our approach. We aim to maintain affordability without compromising quality. Providing high value at a low cost is our promise.</p>
                                        </div>
                                    </div>
                                 </div>
                           </li>
                           <li class="accordion block">
                                  <div class="acc-btn">4. I Need Affordable Assignment Help, Can You Help Me?
                                  <div class="icon fa fa-angle-down"></div></div>
                                  <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                            <p>Of course! At Assignment In Need, our goal is to provide affordable assignment help to students. Complex or urgent, we manage it all. Just inform us of your requirements, and we'll take care of everything. We handle every detail, ensuring your assignment needs are met. Your academic success is our mission, no matter the challenge or deadline. We’re here to support you at every stage. Just share your requirements with us, and rest assured while we handle the task.
                                            </p>
                                        </div>
                                    </div>
                                 </div>
                           </li>
                           <li class="accordion block">
                                  <div class="acc-btn">5. How Do You Ensure Quality Despite Low Prices? <div class="icon fa fa-angle-down"></div></div>
                                  <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                            <p>We keep prices affordable and maintain quality by enhancing our processes. Leveraging the skills of our writers, we ensure efficiency. Our team consists of experienced professionals in academic writing. This helps us uphold high standards without inflating costs.
                                            </p>
                                            <p>A strict quality control process is in place. This ensures every assignment meets our rigorous criteria. High standards are maintained consistently. We focus on delivering value without compromise. Our methods balance affordability with quality. We aim to provide exceptional academic support at reasonable rates.
                                            </p>
                                        </div>
                                    </div>
                                 </div>
                           </li>
                              </ul>
                            </div>
                        </div>
                    </div>
                </div>
             </section>
       	 
 
@endsection