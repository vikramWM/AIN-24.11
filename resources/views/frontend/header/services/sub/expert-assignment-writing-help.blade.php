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
	<section class="banner-section-three header-section" >
		<div class="auto-container" style="margin-top: 100px;">
			<div style="text-align: center;">
				<ul class="page-breadcrumb">
					<li><a href="/">Home</a></li>
					<li>Expert Assignment Online</li>
				</ul>
            </div>
            <div class="row clearfix">
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<h1 class="text-center"> Online Assignment Expert | Get Assignment Writer Service at 40% OFF!

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
    <!-- Expert Assignment Writers Help -->
       <section class="py-0">
         <div class="auto-container">
            <div class="row clearfix">
                <div class="title-column col-lg-12 col-md-12 col-sm-12">
                     <div class="inner-column">
                        <div class="title-box">
                            <div class="section-color-layer"></div>
                            <h2 style="font-weight:500; font-size:30px; color:black;" class="my-4">Expert Assignment Writers Help</h2>
                            <p>If you're looking for an online assignment expert and a dependable assignment writing service then you'[re in the right place! Since 2014, Assignment in Need has been working with students from across the world and helping them succeed in their academic journeys. Whether it's an essay, research paper, or project, we provide tailored assistance that meets your unique needs, ensuring you receive the best possible results.
                            </p>
                            <p>As one of the top assignment writer service, we assign your assignments to skilled professionals who have a deep understanding of your subject. With years of experience under their belts, Assignment in Need's experts can handle even the most challenging tasks with ease. We pride ourselves on delivering 100% original work, crafted according to the exact guidelines of your course, ensuring high-quality, fully customized solutions every time.</p>
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
    <!-- Who Are Expert Assignment Writers? -->
    <section class="py-0">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="title-column col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="title-box">
                            <div class="section-color-layer"></div>
                            <h2 style="font-weight:500; font-size:30px; color:black" class="my-4">Who Are Expert Assignment Writers?</h2>
                              <p>At Assignment in Need, our exceptional reputation is built on the expertise of our expert assignment writers. These assignment writers are highly qualified professionals with advanced degrees and years of experience in their respective fields. We make sure to carefully choose only the best assignment writers to join our writing team, ensuring that they not only excel at writing but also possess deep subject matter expertise.</p>
                              <p>What sets our assignment helper apart is their ability to handle a wide range of assignments. From detailed research papers to analytical essays and complex problem-solving, they excel at making even the most complicated tasks seem manageable. They're not just focused on facts and figures - they bring critical thinking, creativity, and a unique approach to every assignment. And, of course, originality is a key priority, with every piece of work carefully researched and tailored to meet your individual needs.</p>
                              <p>Choosing Assignment in Need means you're partnering with a team that truly cares about your academic success. Our expert assignment writers are passionate about delivering high-quality work, and we're dedicated to giving you the support you need to excel. Whether you're working on a challenging project, tackling a tricky essay, or just need a little extra help, our expert writers are here to guide you every step of the way.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- How Expert Assignment Writers Work -->
     <section class="py-0">
        <div class="auto-container">
            <div class="row clearfix">
               <div class="title-column col-lg-12 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="title-box">
                        <div class="section-color-layer"></div>
                        <h2 style="font-size:30px; color:black; font-weight:500;" class="my-4">How Expert Assignment Writers Work</h2>
                        <p>When it comes to crafting high-quality assignments, Assignment in Need's online assignment expert follow a well-organized and thoughtful approach. Here's a glimpse into how they work to deliver top-notch results:</p>
                       
                        <h3>  Understanding Your Needs  </h3> 
                        <p> The journey starts with a conversation. The writer will get to know exactly what you're looking for by discussing the assignment topic, your specific instructions, and any preferences you might have. This initial chat helps the writer grasp the scope of your project so they can deliver a piece that's tailored just for you.</p>
                        <h3>  In-Depth Research </h3>
                        <p> After understanding your requirements, the assignment expert writers get to work on gathering relevant information. They dive into reliable sources, collect up-to-date data, and make sure everything aligns with your assignment's objectives. This research phase is key because it sets the stage for a well-informed and insightful paper.
                        </p>
                        <h3>Crafting Your Assignment</h3>
                        <p> With all the research in hand, the writer at Assignment in Need then begins the writing process. They carefully organize the information into a clear and structured format, following all academic standards. Whether it's an essay, a report, or a project, the writer ensures that each part flows smoothly and effectively communicates the key points.</p>
                        <h3> Fine-Tuning the Final Piece</h3>
                        <p> Before the assignment is considered complete, it goes through an extensive review. The writer checks for consistency, clarity, and accuracy, making any necessary adjustments along the way. At Assignment in Need, your satisfaction is our top priority, so we offer revisions to ensure the final product is exactly what you envisioned.</p>
                    </div>
                </div>
               </div>
            </div>
        </div>
     </section>


     <!-- How to Choose the Right Expert Assignment Writer -->
        <section class="py-0">
         <div class="auto-container">
            <div class="row clearfix">
                <div class="title-column col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="title-box">
                            <div class="section-color-layer"></div>
                            <h2 style="font-size:30px; color:black; font-weight:500" class="my-4">How to Choose the Right Expert Assignment Writer</h2>
                            <p>Looking for the right expert to help with your assignments? It can be tricky, but picking the right online assignment expert can make all the difference in getting the results you want. Here's a straightforward guide to help you choose wisely:
                            </p>
                            <h3>Focus on Their Expertise </h3>
                            <p> The most important thing to check is whether the writer knows your subject inside and out. You want someone who understands the key concepts and theories of your field, ensuring your assignment is accurate and insightful. For instance, if you're working on an engineering project, it's best to find a writer with a background in engineering. The same goes for any other subject—whether it's literature, math, or business. Make sure they have the right qualifications and experience for your specific topic!
                            </p>
                            <h3>Look for Quality Work</h3>
                            <p> A great assignment isn't just about fancy words or complicated sentences—it's about clarity and structure. The writer should present ideas in a way that's easy to follow and backed up with solid research. Pay attention to their attention to detail, making sure they follow your institution's guidelines for things like formatting (APA, MLA, etc.), word count, and overall structure. Every part of the assignment should have a purpose, and quality is all about making sure everything fits together smoothly.</p>
                            <h3>Ensure They Meet Deadlines</h3>
                            <p>Time management is key when you're juggling multiple assignments. Look for expert assignment writers who are not only good at what they do but also reliable when it comes to deadlines. You need someone who can deliver on time, giving you enough breathing room to review the work and make any changes if needed. Communication here is vital—they should keep you updated on the progress so you're never left wondering how things are going.</p>
                             <h3>Choose a Writer Who Personalizes Their Work</h3>
                             <p>No two assignments are alike, and that's why a personalized approach is essential. A good writer will take the time to understand your unique needs, tailoring their work to your academic level and the specific requirements of your institution. Whether you're an undergrad or a grad student, they should adjust their writing style to match what's expected, ensuring that your paper feels like it's written just for you.</p>
                             <h3>Have a Clear Discussion</h3>
                             <p>Before any work begins, have an open conversation about your expectations for the assignment writer service. Talk about the topic, format, deadline, and any other specific instructions. This will prevent any confusion down the road and helps build a good relationship with your writer. A strong writer is always ready to listen, answer questions, and make any necessary changes based on your feedback.</p>
                            </div>
                    </div>
                </div>
            </div>
          </div>
        </section>
        <!-- Expert Academic Assignment Writing Services -->
          <section class="py-0">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="title-column col-lg-12 col-md-12 col-sm-12 ">
                        <div class="inner-box">
                            <div class="title-box">
                                <div class="section-color-layer"></div>
                                <h2 style="font-weight:500; color:black; font-size:30px;" class="my-4">Expert Academic Assignment Writing Services</h2>
                                   <p>Finding the right assignment writer for your specific needs can sometimes be a challenge, especially if you're studying engineering or social sciences. But with BCW, you don't have to worry. Assignment in Need makes sure you're connected directly with an online assignment expert, allowing for clear communication and ensuring your project is handled exactly the way you want.</p>
                                    <p>Guaranteed Privacy and 24/7 Support
                                        <ul>
                                            <li><b>Your Privacy Matters:</b> We take your privacy seriously. When you choose our assignment writer service, all of your personal information remains safe and confidential, giving you peace of mind while you focus on your studies.
                                             </li>
                                            <li><b>Always Here to Help:</b>  Got a question or need assistance? Our customer support team is available 24/7 to provide answers and guidance whenever you need it. We're here to make your experience smooth and hassle-free.</li>
                                        </ul>
                                    </p>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
          </section>

          <!-- Expert Assignment Writing Help Teams for All Types of University Assignments -->
          <section class="py-0">
            <div class="auto-container">
                <div class="row clearfix">
                  <div class="title-column col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="title-box">
                            <div class="section-color-layer"></div>
                            <h2 style="font-weight:500; color:black; font-size:30px;" class="my-4">Expert Assignment Writing Help Teams for All Types of University Assignments</h2>
                               <p>Different universities have different academic standards, and it's important to choose assignment expert writers that understand the specific requirements of your institution. Assignment in Need's expert assignment writing teams are familiar with the academic standards of universities around the world, including those in the UAE, UK, US, Australia, and more.</p>
                               <p>At Assignment in Need, we have specialized teams for different types of university assignments. This ensures that your assignment is handled by an online assignment expert who not only understands your subject matter but also the specific academic expectations of your university.</p>
                                <p>For example:
                                    <ul>
                                        <li><b>Business and Management:</b> Our team includes expert assignment writers with MBAs and experience in business management, ensuring that your assignments reflect real-world business practices and theories.</li>
                                        <li><b>Engineering and Technology:</b>Writers with engineering degrees provide precise, technically accurate solutions for engineering assignments.</li>
                                        <li><b>Humanities and Social Sciences: </b>Our team of writers with backgrounds in history, sociology, literature, and other humanities subjects produce insightful and well-researched assignments.</li>
                                    </ul>
                                </p>
                                <p>Each team of assignment helper at Assignment in Need is dedicated to delivering assignments that are not only high in quality but also tailored to meet the unique requirements of your academic program. We understand that university assignments often come with specific guidelines, and we ensure that every assignment we deliver adheres to these standards.</p>
                            </div>
                    </div>
                  </div>
                </div>
            </div>
          </section>

          <!-- Conclusion -->
           <section class="py-0">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="title-column col-lg-12 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="title-box">
                                <div class="section-color-layer"></div>
                                <h2 style="font-weight:500; color:black; font-size:30px;" class="my-4">Conclusion</h2>
                                <p>Don't let academic hurdles stand in your way! Take control of your education with the support of Assignment in Need's assignment writer service. Visit our website for more information about our services and to explore all the ways we can help and get to know our team of expert assignment writers. We're here to guide you toward success and help you achieve your academic dreams. Start your journey toward a brighter future with Assignment in Need today!</p>
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
                            <h2 style="font-weight:500; font-size:30px; color:black;" class="my-4">Frequently asked questions</h2>
                        </div>
                        <ul class="accordion-box">
                            <li class="accordion block">
                                <div class="acc-btn">1.  What are expert assignment writers? <div class="icon fa fa-angle-down"></div></div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                            <p> Expert assignment writers are professionals with advanced knowledge in specific academic fields. They often hold degrees from reputable institutions and possess extensive experience in writing academic papers. These writers specialize in creating high-quality assignments tailored to meet the specific requirements of students, ensuring accuracy, proper formatting, and adherence to academic standards.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">2.  Can Your Assignment Writer Write On Any Topic? <div class="icon fa fa-angle-down"></div></div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                            <p>Yes! Assignment in Need's assignment writers are equipped to handle a wide variety of topics across multiple disciplines. Whether it's a complex technical subject or a more general topic, our expert writers are trained to conduct thorough research and deliver well-structured assignments that meet your academic needs. No matter the topic, you can rely on our writers to provide accurate and engaging content.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn ">3.  Which is the best Expert assignment writing service? <div class="icon fa fa-angle-down"></div></div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                            <p>The best expert assignment writing service is one that combines expertise, reliability, and affordability. Look for services that employ qualified writers, offer timely delivery, and have positive reviews from students. A good assignment writing service should also provide plagiarism-free work, meet deadlines, and offer customer support to address any concerns. Companies like Assignment in Need is known for their commitment to delivering high-quality academic assistance.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block"> 
                                <div class="acc-btn">4.  How Do Assignment Experts Help To Write Assignments For University Students? <div class="icon fa fa-angle-down"></div></div>
                                  <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                            <p>Assignment experts help university students by offering customized guidance and support. They assist in structuring the assignment, conducting in-depth research, and ensuring that the content is aligned with the academic standards required by the institution. These experts also help with proofreading and editing, ensuring that the final product is polished and free from errors. By using expert help from Assignment in Need, students can improve their grades and gain a better understanding of the subject matter.
                                            </p>
                                        </div>
                                    </div>
                                  </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">5. What subjects do expert assignment writers cover?<div class="icon fa fa-angle-down"></div></div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                            <p>Expert assignment writers at Assignment in Need cover a wide range of subjects, including but not limited to:
                                              <ul>
                                                <li>1. Business and Management</li>
                                                <li>2. Engineering</li>
                                                <li>3. Law</li>
                                                <li>3. Medicine and Health Sciences</li>
                                                <li>4. Computer Science</li>
                                                <li>5. Humanities and Social Sciences</li>
                                                <li>6. Economics and Finance</li>
                                                <li>7. Literature</li>
                                                <li>8. Marketing</li>
                                              </ul>
                                            </p>
                                            <p>These writers are skilled in various academic areas, allowing them to provide assistance on almost any subject that students may require.</p>
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