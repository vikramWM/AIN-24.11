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
					<!-- <li><a href="/">Home</a></li>
					<li>Chemistry Assignment</li> -->
				</ul>
            </div>
            <div class="row clearfix">
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<h1 class="text-center">My Assignment Help from Expert Writers at Assignment in Need!

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

    <!-- Assignment Helper -->
       <section class="py-0">
         <div class="auto-container">
            <div class="row clearfix">
                <div class="title-column col-lg-12 col-md-12 col-sm-12">
                     <div class="inner-column">
                        <div class="title-box">
                            <div class="section-color-layer"></div>
                            <h2 style="font-weight:500; font-size:30px; color:black;" class="my-4">Online My Assignment Help Services By Assignment in Need </h2>
                               <p>
                               Every student in school or college knows the pressure of completing assignments within tight deadlines. How can you keep your grades up while managing the workload? Assignment in Needs my assignment services make this easier by reducing your academic burden and helping you focus on what matters most.</p>
                              
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
          
    <!-- Benefits of Using an Assignment Helper -->
             <section class="py-0">
                <div class="auto-container">
                    <div class="row clearfix">
                       <div class="title-column col-lg-12 col-md-12 col-sm-12 ">
                        <div class="inner-column">
                            <div class="title-box">
                                <div class="text">
                                  <div class="section-color-layer"></div>
                                  <h2 style="font-size:30px; color:black; font-weight:500;" class="my-4">Why do Students Turn to My Assignment Help Services Online?</h2>
                                  <p>At Assignment in Need, we understand the challenges students face across the world, from tight deadlines to complex topics. Over the years, we’ve become a trusted platform offering my assignment help across 100+ subjects. Here’s why students turn to us:
 
                                    <ul> 
                                   <li><b>1.To Avoid Plagiarism</b> 
                                   <p>Plagiarism is a common struggle for students. That’s why many seek <a href="https://www.assignnmentinneed.com/expert-assignment-writing-help"><b>professional assignment help</b></a> websites to create 100% original work that meets their instructor’s standards. Our experts deliver plagiarism-free assignments and even provide free plagiarism reports for peace of mind.</p></li>  
                                   <li><b>2. To Meet Tight Deadlines</b>
                                   <p>Tackling my assignments under time pressure can be overwhelming, especially when unfamiliar topics and referencing challenges come into play. With our help, students submit their work on time, every time.
                                   </p> </li>
                                   <li><b>3. For Personalized Guidance</b> 
                                    <p>When students feel stuck, they often need more than just a completed assignment—they need guidance. Our <a href="https://www.assignnmentinneed.com/assignment-writing-help-services"><b>assignment writing help services</b></a> include one-on-one mentoring tailored to individual needs, making challenging tasks easier to tackle.</p>
                                    </li>
                                    <li><b>4. To Access Reference Samples </b> 
                                    <p>Many students also use Assignment in Need’s assignment help to get high-quality reference materials. These samples serve as excellent study aids and help students better understand tough topics for independent research.</p>
                                    </li>
                                    <li><b>5. To Achieve Better Grades</b> 
                                      <p>Every student wants to impress their professors and secure good grades with my assignments. When achieving this feels out of reach, our services provide the support needed to turn things around and achieve academic success.</p>
                                      </li>
                                </ul>
                                </p>
                                  </div>
                            </div>
                        </div>
                       </div>
                    </div>
                </div>
             </section>


             <!-- How to Find the Best Assignment Help Online -->
             
                
                     	 
		  <section class="py-0" >
       <div class="auto-container">
        <div class="sec-title-three my-2 ">
		<h2 style="font-size:30px; color:black; font-weight:500;" class="my-4">How Do We Help Students with Their Write My Assignment For Me?</h2>
                                 
         </div>
         <div class="row clearfix">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="inner-box">
		<p>Assignment in Need is one of the most reliable <a href="https://www.assignnmentinneed.com/assignment-helper"><b>assignment helper</b></a> websites. Since 2019, we have proudly assisted students from around the world in excelling in their academics. Our services are tailored to meet each student’s unique requirements, ensuring personalized solutions for assignments in any subject.</p>                      
        <p>As the leading online academic assistance provider, Assignment in Need connects you with experts who have in-depth knowledge of their respective fields. This guarantees that your assignments are crafted to the highest standards.</p>        
       <p>
With over a decade of experience in writing in college and my assignment for university, our team confidently handles tasks of any complexity. We deliver 100% original, high-quality solutions, meticulously prepared according to your guidelines to ensure complete quality compliance.
</p>
    </div>             
    </div>
    </div>
     </div>

 
  </div>
</section>

		 
            <!-- Our Assignment Helpers: Your Path to Academic Success -->
          <section class="py-0">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="title-column col-lg-12 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="title-box">
                                <div class="section-color-layer"></div>
                                <h2 style="font-size:30px; color:black; font-weight:500;" class="my-4">Why Choose Assignment in Need For My Assignment Help for the Best Results?</h2>
                                <p>At Assignment in Need, we pride ourselves on our 99% client satisfaction rate and a stellar user rating of 4.9/5. Our assignment helper website has an experienced team of writers that has helped countless students through tight deadlines, offering top-notch assignments that lighten their academic load. Here’s what sets us apart:
                                <ul> 
                                   <li><b>1. Unmatched Quality</b> 
                                   <p>Our expert writers treat every assignment as if it were their own. They aim to deliver high-quality work to help you achieve the best grades and succeed in your academic journey. </li>  
                                   <li><b>2. Plagiarism-Free Work</b>
                                   <p>Each assignment is written from scratch to ensure originality. We guarantee that no part of your assignment will be plagiarized and provide plagiarism-free reports for transparency.
                                   </p> </li>
                                   <li><b>3. 24/7 Support</b> 
                                    <p>We understand that students across the globe may need help at any time. Our my assignment help is available round the clock to answer your queries and address your concerns efficiently.</p>
                                    </li>
                                    <li><b>4. On-Time Delivery </b> 
                                    <p>Timely submissions are critical, and we never compromise on deadlines. Whether your assignment is urgent or planned, we ensure it reaches you on or before the due date.
                                    </p>
                                    </li>
                                    <li><b>5. Affordable Prices </b> 
                                      <p>We offer budget-friendly “my assignment help services” because we understand the financial constraints students often face. Our pricing is designed to be reasonable without compromising quality.</p>
                                      </li>
                                      <li><b>6. Expert Writers</b> 
                                      <p>Our team comprises highly skilled writers with extensive academic expertise. They are here to guide you, share their knowledge, and ensure your assignments meet the highest standards.</p>
                                      </li>
                                </ul>
                               </p>

                             </div>
                        </div>
                    </div>
                </div>
            </div>
          </section>

          <!-- Get The Best Assignment Writing Services Online -->
            <section class="py-0">
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="title-column col-lg-12 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <div class="title-box">
                                    <div class="section-color-layer"></div>
                                    <h2 style="font-size:30px; color:black; font-weight:500;" class="my-4">Get Affordable Assignment Writing Assistance at Assignment In Need</h2>
                                    <p>At Assignment in Need, we aim to make assignment help accessible to all. With rates starting at just £7.99 per page, we ensure high-quality solutions at prices well below the market average. We prioritize affordability, so students with limited budgets can still access top-tier academic support.</p>
                                     </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- We Deliver All Types of Assignment Writing Help for Every Need -->
            <section class="py-0">
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="title-column col-lg-12 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <div class="title-box">
                                    <div class="section-color-layer"></div>
                                    <h2 style="font-size:30px;color:black; font-weight:500;" class="my-4">What Obstacles Do Students Face When Writing Their Assignments?</h2>
                                     <p>Assignments are an essential part of academic life. While many students see them as a burden, assignments are designed to add value by enhancing skills and knowledge. Beyond gaining subject-specific insights, assignments also offer opportunities for personal and academic growth. Here’s how they contribute to a student’s development and our assignment help can benefit you:</p>
                                     <ul> 
                                   <li><b>1. Learning and Understanding</b> 
                                   <p>Assignments allow students to dive deeper into topics covered in class. This process helps them better understand complex concepts and ideas. Writing my assignments requires interpreting and organizing information, which actively reinforces learning and strengthens comprehension. </li>  
                                   <li><b>2. Critical Thinking and Problem-Solving</b>
                                   <p>Working on assignments encourages students to think analytically and develop a problem-solving mindset. From gathering raw data to analyzing and organizing it, students must critically evaluate information, prioritize what’s important, and form logical arguments.
                                   </p> </li>
                                   <li><b>3. Applying Knowledge to Real-Life Situations </b> 
                                    <p>Many assignments focus on real-world scenarios, giving students the chance to apply classroom learning to practical problems. This bridges the gap between theoretical knowledge and its practical application, enhancing their understanding of how concepts work outside the classroom.</p>
                                    </li>
                                    <li><b>4. Time Management</b> 
                                    <p>Assignments are always time-bound, teaching students how to prioritize tasks and meet deadlines. This helps improve planning and organizational skills, which are crucial for academic and professional success. Mastering time management through assignments builds discipline and efficiency in everyday life.
                                    </p>
                                    </li>
                                    <li><b>5. Communication and Presentation Skills </b> 
                                      <p>My assignments often come in various formats, such as <a href="https://www.assignnmentinneed.com/essay-writing-help-services"><b>essays</b></a>, reports, or presentations. Completing them helps students improve their ability to express ideas clearly, develop structured arguments, and present information effectively. These skills are valuable not only in academics but also in professional settings.                                      </p>
                                      </li>
                                    
                                </ul> 
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Expert Help Across A Wide Range Of Subjects -->

            <section class="py-0">
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="title-column col-lg-12 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <div class="title-box">
                                    <div class="section-color-layer"></div>
                                    <h2 style="font-size:30px; color:black; font-weight:500;" class="my-4">Access Professional Writers with Expertise and Academic Knowledge</h2>
                                     <p>Assignment in Need ensures that your assignments are handled by verified experts with in-depth knowledge. Here’s how we guarantee quality:
                                    </p>
                                    <ul>
                                        <li>Verification:We verify the credentials and identity of every expert.</li>
                                        <li>Skill Testing: Experts undergo rigorous testing to prove their knowledge and ability in their field.</li>
                                        <li>Quality Analysis: We use AI-driven systems and client feedback to ensure consistent performance.</li>
                                        <li>Educational Background: Our experts are graduates from top universities, ensuring they are well-qualified to handle complex academic tasks.  </li>
                                        <li>Effective Communication: You can interact directly with experts to clarify doubts, provide instructions, and monitor progress. </li>
                                      
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            
           

		  <section class="py-0">
			<div class="auto-container">
				<div class="row clearfix">
					<div class="title-column col-lg-12 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="title-box">
								<div class="section-color-layer"></div>
								<h2 style="font-weight:500; font-size: 30px;; color:black" class="my-4">How Can You Secure Top Grades with Our My Assignment Help?</h2>
								<p>Earning top grades requires dedication and effort, but many students find themselves overwhelmed by academic pressure and demanding deadlines. With rising competition, completing assignments effectively becomes a daunting task that cannot be avoided due to their impact on academic success. So, what’s the solution? My assignment help! Here's how Assignment in Need can ease your burden and boost your grades: here are some reasons to get Assignment in Need for assignment help</p>
							   <ul>
                                <li><b>Expert Guidance</b> 
                                   <p>Our assignment help websites connect students with highly qualified professionals. Our experts provide tailored assistance, ensuring assignments meet your specific requirements and are delivered on time. </li>  
                                   <li><b>In-Depth Research</b>
                                   <p>Our professional my assignment helpsus  possess extensive knowledge and conduct thorough research to create high-quality, well-researched content. This saves students valuable time while delivering assignments that stand out.
                                   </p> </li>
                                   <li><b>Proper Referencing</b> 
                                    <p>With us, your assignments are formatted and referenced accurately, following popular citation styles like APA, Harvard, or MLA. This adds an authentic and professional touch to your work.
									</p>
                                    </li>
                                    </ul>
                            </div>
						</div>
					</div>
				</div>
			</div>
		  </section>
		 

          <section class="py-0">
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="title-column col-lg-12 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <div class="title-box">
                                    <div class="section-color-layer"></div>
                                    <h2 style="font-size:30px;color:black; font-weight:500;" class="my-4">Which Assignment Help Service Is Right for You?
                                    </h2>
                                     <p>Selecting the <a href="https://www.assignnmentinneed.com/best-online-assignment-writing-service"><b>best assignment writing help</b></a> can significantly impact your academic success. With countless options available online, it's essential to choose a reliable provider. Here are the key factors to consider:</p>
                                     <ul> 
                                   <li><b>1. Check Customer Recommendations</b> 
                                   <p>Begin by reviewing feedback from previous customers. Look for testimonials and comments left by students who have used my assignment services. Positive reviews and a long-standing business history indicate reliability and quality. </li>  
                                   <li><b>2.  Compare Pricing Options</b>
                                   <p>Before deciding, evaluate the pricing structure of different assignment help websites. Prices can vary based on factors such as assignment complexity, required deadline, and subject matter. Opt for a service that offers fair rates without compromising on quality. Reach out to customer support if necessary to clarify pricing details.
                                   </p> </li>
                                   <li><b>3.Assess Service Suitability </b> 
                                    <p>Ensure the service caters to your specific academic needs. For instance, if you require help with a specialized subject or format, confirm that the provider has expertise in that area. A trustworthy service will clearly outline the types of assignments they handle.
                                    </p>
                                    </li>
                                    <li><b>4.  Look for Experienced Providers
                                    </b> 
                                    <p>Experience matters when it comes to delivering quality work. Established my assignment services providers with a track record of assisting students globally are more likely to meet your expectations. Inexperienced services may risk delays or substandard work.

                                    </p>
                                    </li>
                                    <li><b>5.  Verify Writer Qualifications </b> 
                                      <p>Always check the credentials of the writers. A well-qualified writer will understand your academic requirements and deliver assignments that align with institutional standards. Look for writers with proven expertise in the relevant subject area and excellent writing skills.
                                      </p>
                                      </li>
                                    
                                </ul> 
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

			<section class="py-0">
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="title-column col-lg-12 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <div class="title-box">
                                    <div class="section-color-layer"></div>
                                    <h2 style="font-size:30px; color:black; font-weight:500;" class="my-4">Who Will Handle My Assignment?</h2>
                                    <p>When you place an order on our assignment help websites, you have the advantage of selecting a writer who perfectly matches your academic needs. Assignment in Need provides detailed profiles for each writer, allowing you to review their qualifications, areas of expertise, years of experience, success rates, and client feedback. This transparency ensures you have complete confidence in your chosen expert.</p>
                                     <p>Additionally, you can directly communicate with your selected writer to address any concerns or provide specific instructions about your assignment. Whether you need clarification on their approach, adjustments to the content, or updates on progress, this direct interaction helps ensure the final output aligns with your expectations.</p>     
								    <p>Our my assignment writers are specialists in their respective fields, holding advanced degrees and vast experience in <a href="https://www.assignnmentinneed.com/academic-assignment-writing-help-service"><b>academic writing help</b></a>. From essays and research papers to technical reports and case studies, they are equipped to handle assignments across various disciplines. Rest assured, your work will be in capable hands, delivered with professionalism and academic rigour.
									</p>
									</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>  
			<!-- new section -->
      
			<section class="py-0">
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="title-column col-lg-12 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <div class="title-box">
                                    <div class="section-color-layer"></div>
                                    <h2 style="font-size:30px; color:black; font-weight:500;" class="my-4">How Quickly Can You Complete My Assignment Help?</h2>
                                    <p>One of the most frequent concerns students have is: "<a href="https://www.assignnmentinneed.com/do-my-assignment-for-me"><b>Can I find someone to do my assignment for me</b></a>?" With us, the answer is a resounding yes!</p>
                                     <p>Assignment in Need understands that deadlines are critical in academics. That’s why we offer flexible timelines to suit your needs. Whether you require your assignment completed in three hours, 24 hours, or a few days, our platform ensures quick turnaround without compromising quality.
									 </p>     
								    <p>For urgent assignments, our team prioritizes efficiency, leveraging their expertise to deliver high-quality content even under tight deadlines. However, our my assignment services also encourage students to plan ahead for more complex tasks, as this allows for in-depth research and refinement, ensuring the best results.
									</p>
									<p>No matter your timeline, Assignment in Need’s expert services are designed to accommodate your requirements, helping you meet submission deadlines with confidence and ease. So, when you're pressed for time, remember that our dedicated writers are ready to assist, delivering reliable and prompt academic support tailored to your schedule.</p>
									</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>  



            <!-- end new section -->
			<section class="py-4" style="background-color:#BFECFF;"  >
	            <div class="auto-container">
                    <div class="row clearfix">

			<!-- Content Column -->
			  <div class="content-column col-lg-6 col-md-12 col-sm-12">
				 <div class="inner-column">
					<h2 class="py-3" style="font-weight:500; font-size: 30px; color:black">Get Online My Assignment Help Services By Assignment in Need Worldwide</h2>
					  <div class="text">
						 <p>We’re on a mission to make learning seamless and stress-free for students worldwide. From the UK, Canada, Australia, Spain, Malaysia, UAE and more—we’re everywhere, helping students excel. With over 30000+ happy customers and a track record of delivering thousands of top-notch assignments, we’ve proven to be the partner you can trust.</p>
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


                  <!-- FAQs Question  section for Expert Assignment Writing Help -->
 
	        
		<section class="faq-section bg-light">
	    	<div class="auto-container">
			<div class="row ">
				<div class="titel-column col-lg-12 col-md-12 col-sm-12">
				    <div class="title-box text-center">
						<h2 style="font-weight:500; font-size: 30px;; color:black" class="my-4"><b>Frequently Asked Questions For My Assignment Help</b></h2> 
					 </div>
					<div class="row"> 
					 		 
				<div class="column col-lg-6 col-md-6 col-sm-12 ">
					 
					<ul class="accordion-box ">
					       <li class="accordion block">
                                <div class="acc-btn bg-white border " style="font-weight:500; font-size: 20px;; color:black">1. What services do you offer under "My Assignment Help"?<div class="icon fa fa-angle-down"></div></div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                           <p>Under "My Assignment Help," Assignment in Need provides a comprehensive range of services, including writing, editing, and proofreading assignments across various academic disciplines. Whether you need essays, research papers, case studies, or dissertations, our team ensures high-quality, customized assistance tailored to your requirements.
										   </p>
										</div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn bg-white border " style="font-weight:500; font-size: 20px;; color:black">2. Are your assignment services available for urgent tasks?
								<div class="icon fa fa-angle-down"></div></div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                           <p>Yes, our assignment services cater to urgent deadlines. We have a team of skilled writers equipped to handle tight schedules without compromising quality. You can rely on us for quick and efficient assistance, even for last-minute tasks.
										   </p>
										</div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn bg-white border " style="font-weight:500; font-size: 20px;; color:black">3. Can I choose a specific writer for my assignment?
								<div class="icon fa fa-angle-down"></div></div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                           <p>Assignment in Need allows clients to select a specific writer based on their expertise, previous work, or recommendations. This feature helps build trust and ensures that your assignment aligns perfectly with your expectations.
											   </p>
										</div>
                                    </div>
                                </div>
                            </li>
						 
                  	</ul>
					
				</div>
			
				<div class="column col-lg-6 col-md-6 col-sm-12">
					 
					<ul class="accordion-box">
					 
						
					<li class="accordion block"> 
                                <div class="acc-btn bg-white border " style="font-weight:500; font-size: 20px;; color:black">4. Are your assignment writing services plagiarism-free?
								<div class="icon fa fa-angle-down"></div></div>
                                  <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                             <p>Yes, we guarantee 100% plagiarism-free work. Our assignments are crafted from scratch, thoroughly researched, and passed through advanced plagiarism detection tools to ensure originality and authenticity.</p>
                                        </div>
                                    </div>
                                  </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn bg-white border " style="font-weight:500; font-size: 20px;; color:black">5. Do you offer help with specific subjects and academic levels?
								<div class="icon fa fa-angle-down"></div></div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                            <p>Assignment in Need provides assistance across a wide range of subjects and cater to all academic levels, from high school to postgraduate studies. Our team comprises experts from various fields, ensuring specialized and accurate support for your assignments.</p>
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