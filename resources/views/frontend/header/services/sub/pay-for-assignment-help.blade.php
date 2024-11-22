
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
					<li>Pay For Assignment Online</li>
				</ul>
            </div>
            <div class="row clearfix">
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<h1 class="text-center">Pay For Assignment Help and Get The Best Assignment Writing Service Today!

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
    <!-- pay someone to do my assignment -->
       <section class="py-0">
         <div class="auto-container">
            <div class="row clearfix">
                <div class="title-column col-lg-12 col-md-12 col-sm-12">
                     <div class="inner-column">
                        <div class="title-box">
                            <div class="section-color-layer"></div>
                            <h2 style="font-weight:500; font-size:30px; color:black;" class="my-4">pay someone to do my assignment</h2>
                            <p>Let's be honest - we've all had those moments where we'd rather do anything than work on a looming assignment. When the deadline is right around the corner, many students find themselves asking, “Can I pay someone to do assignment?” It's not that they don't care about their grades; it's just that life gets busy, and sometimes, writing an assignment feels impossible to tackle alone. That's where professional assignment help comes in.</p>
                            <p>At Assignment in Need, we understand the pressure of deadlines and the desire for high-quality work. Our team of skilled writers, with advanced degrees from top universities, is here to provide personalized, high-quality assignments that impress professors. So, if you're looking to pay for assignment help, you've come to the right place. We ensure that every piece of work we deliver is carefully crafted to meet your academic needs, letting you focus on other important things.</p>
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

    <!-- Pay for Assignment Writing Service -->
        <section class="py-0">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="title-column col-lg-12 col-md-12 col-sm-12">
                         <div class="inner-bolumn">
                            <div class="title-box">
                                <div class="section-color-layer"></div>
                                <h2 style="font-size:30px; color:black; font-weight:500;" class="my-4">Pay for Assignment Writing Service</h2>
                                <p>Here's why you should pay someone to do assignment:</p>
                                <p><b>Lots of students do it: </b> You might be surprised to learn that many top students and even your friends pay for assignments. It's a common practice, and with Assignment in Need's expert support, you'll see how much easier it can make your academic life.</p>
                                <p><b>More time for yourself: </b>  When you pay for assignment help at Assignment in Need, you free up a few extra hours in your day. While we handle the research and writing, you can focus on other tasks or simply catch your breath.</p>
                                <p><b>Boost your inspiration: </b>  Our work is top-notch and custom-made, so not only will you get a great assignment, but it might also spark new ideas for other projects.</p>
                                <p><b>Time is more valuable than money: </b>  Think of it this way - spending a little money to save a lot of time is always a good investment. Whether you've got an important event to attend or just need to relax, we'll help make it happen.</p>
                                <p><b>Our writers are experts:</b>  Worried about getting subpar work? Don't be. Our writers are specialists in their fields and know exactly how to deliver high-quality papers that meet your professor's expectations.</p>
                                <p>So, instead of stressing out over your assignments, pay someone to do my assignment while you enjoy some peace of mind. At Assignment in Need, we make sure you get the best results without the hassle!</p>
                            </div>
                         </div>
                    </div>
                </div>
            </div>
        </section>

		<!-- You Can Securely Pay for Best Assignment Writing Help Services -->
         <section class="py-0">
			<div class="auto-container">
				<div class="row clearfix">
					<div class="title-column col-lg-12 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="title-box">
								<div class="section-color-layer"></div>
								<h2 style="font-size:30px; color:black; font-weight:500;" class="my-4">You Can Securely Pay for Best Assignment Writing Help Services</h2>
								<p>When you need help with academic assignments, it's common to look for online services where you can pay someone to do assignment. Students face many different topics throughout the year, and tackling everything from research papers to lab reports can be overwhelming. Sometimes, the challenge lies in understanding the material or in knowing how to structure the paper properly.</p>
							    <p>This is where cheap assignment writing help comes in handy. Many students turn to Assignment in Need's experts who have both experience and a knack for writing, especially when they struggle with subjects like math, science, or even literature. Whether your assignment requires in-depth research or a more creative, subjective approach, having a skilled writer by your side can make a big difference. At Assignment in Need, we specialize in offering this type of tailored support, ensuring you get exactly what you need when you pay to do my assignment.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		 </section>

		 <!-- How to Choose the Right Service When Paying for Assignment Help -->
         <section class="py-0">
			<div class="auto-container">
				<div class="row clearfix">
					<div class="title-column col-lg-12 col-md-12 col-sm-12">
						<div class="inner-box">
							<div class="section-color-layer"></div>
							<h2 style="font-size:30px; color:black; font-weight:500;" class="my-4">How to Choose the Right Service When Paying for Assignment Help
							</h2>
							<p>When you're juggling assignments, finding a service where you can pay someone to do my assignment, that's both affordable and high-quality is key. The good news is that many options won't drain your wallet while still delivering great results. By exploring different services and keeping an eye out for deals, you can find the help you need at a price you can afford.</p>
					        <h3>Affordable Plans That Fit Your Budget</h3>
                            <p>Lots of assignment help services offer various pricing plans to match different budgets, which makes it easy for you to pay for assignment help. Whether you need just the basics—like writing and editing—or something more elaborate, such as research and personal consultations, there's likely an option that fits your needs without costing a fortune. Choosing the right plan can help you get the support you need without overspending.</p>
							
							<h3>Spotting Discounts and Special Deals</h3>
                              <p>To make things even more affordable, many services provide discounts and special offers so you don't have to pay someone to do assignment at higher prices, especially for new customers or bulk orders. Look for seasonal sales, referral bonuses, and student discounts. These can significantly lower the cost and make it easier to manage your expenses while still getting quality help.</p>

							<h3>Getting the Most for Your Money</h3>
							<p>When investing in assignment help, it's important to get good value. A great service will offer more than just a well-written paper. Look for perks like free revisions, plagiarism checks, and 24/7 customer support. These added benefits ensure that you're satisfied with your assignment and have support whenever you need it.
							</p>

						</div>
					</div>
				</div>
			</div>
		 </section>

         <!-- How the Payment Process Works -->

         <section class="py-0">
			<div class="auto-container">
				<div class="row clearfix">
					<div class="title-column col-lg-12 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="title-box">
								<div class="section-color-layer"></div>
								<h2 style="font-size:30px; color:black; font-weight:500;" class="py-4">How the Payment Process Works</h2>
							     <p>Ordering and paying for Assignment in Need's cheap assignment writing help. Here's a quick rundown:
                                  <ul>
								    <li><b>1.  Pick Your Service: </b> Decide what type of help you need and customize your order. </li>
                                    <li><b>2.  Provide Details: </b> Enter your assignment details, including any special instructions and deadlines.</li>
                                    <li><b>3.  Choose a Payment Method: </b>   Select how you'd like to pay from the available options.</li>
                                    <li><b>4.  Confirm and Pay: </b> Double-check your order and payment info, then pay for assignment help.</li>
                                    <li><b>5.  Get Confirmation:</b>  After you pay someone to do assignment, you'll receive a confirmation, and we'll start working on your assignment.</li>
								  </ul>
                                 </p>
								 <h3>Safe and Easy Payment</h3>
								 <p>Assignment in Need prioritizes your security during the payment process. Our site uses reliable payment methods to keep your information safe when you pay to do my assignment, and we offer a money-back guarantee if anything goes wrong. Our friendly customer support team is available around the clock to assist with any questions or issues you might have.
								 </p>
								 <p>With our affordable pricing, quality guarantees, and secure payment options, you can get the help you need without any fuss. Enjoy top-quality assistance at a price that makes sense for you!
								 </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		 </section>

		 <!-- Get Started with Our Assignment Help Services -->
         <section class="py-0">
			<div class="auto-container">
				<div class="row clearfix">
					<div class="title-column col-lg-12 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="title-box">
								<div class="section-color-layer"></div>
								<h2 style="font-size:30px; color:black; font-weight:500;" class="my-4">Get Started with Our Assignment Help Services</h2>
								<p>Ready to pay someone to do assignment? It's a breeze to start working with Assignment in Need! Follow these simple steps, and you'll be on your way to stress-free, high-quality academic support.
								</p>
								<h3>Sign Up and Make a Payment
								</h3>
								<p>The first thing you'll need to do is create an account. It's quick and easy—just provide your email and set up a password. Once you're in, you can go ahead and choose your preferred payment method. We offer several secure options, so you can pay to do my assignment without any hassle.
								</p>
								<h3>Submit Your Assignment Details
								</h3>
								<p>After you pay for assignment help, it's time to share the details of your assignment. Just fill in the order form, including things like the subject, word count, deadline, and any special instructions. The more information you provide, the better we can personalize the work to your specific needs. Our experienced writers will then get to work, making sure your assignment is tailored just for you.
								</p>
								<h3>Review Your Completed Work</h3>
								<p>Once your assignment is done, we'll send it to you within the agreed timeframe. Take a moment to go through it and see if it meets your expectations. If you feel any adjustments are needed, don't worry—you can request revisions. We're committed to making sure you're fully satisfied with the final result.
								</p>
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
					<div class="title-column col-lg-12 col-md-12 col-sm-12 ">
						<div class="inner-column">
							<div class="title-box">
								<div class="section-color-layer"></div>
								<h2 style="font-weight:500; color:black; font-size:30px;" class="my-4">Conclusion</h2>
								<p>Finding reliable assignment help can be tricky especially when you have to pay someone to do my assignment, and we understand that you want to be confident in who you trust. That's why Assignment in Need is dedicated to providing top-notch service, backed by a team of expert writers who know exactly how to deliver quality work that gets you great grades. Plus, our friendly customer support team is available around the clock. Whether it's day or night, just reach out and pay for assignments and we'll be ready to assist!</p>
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
					<h2 class="py-3" style="font-weight:500; font-size: 30px; color:black">Assignment in Need Offer Students for Pay Assignment Help For Me Worldwide</h2>
					<div class="text">
						 <p>At Assignment in Need, dedicated support helps students in Canada, Australia, UAE, UK, Spain, and Malaysia with assignment tasks that lighten academic pressure. Skilled writers provide customised assistance across many subjects, making sure your paper matches all your specific needs. We delivered 45000+ assignments worldwide and got a 4.5 rating . Choosing our assignment help means you’re not just paying for a paper—you gain extra time for other important things. If you're looking to pay for assignment help, our straightforward, secure, and efficient process ensures you get the best value. With reasonable prices and flexible options for any budget, let us handle the hard work, so you can achieve success without feeling stressed.</p>
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
						<h2 style="font-weight:500; font-size: 30px;; color:black" class="my-4"><b>Frequently Asked Questions For Assignment Helper</b></h2> 
					 </div>
					<div class="row"> 
					 		 
				<div class="column col-lg-6 col-md-6 col-sm-12 ">
					 
					<ul class="accordion-box ">
					       <li class="accordion block">
                                <div class="acc-btn bg-white border " style="font-weight:500; font-size: 20px;; color:black">1. How do I know if an assignment help service is reliable?<div class="icon fa fa-angle-down"></div></div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                         <P>To determine if an assignment help service is reliable, look for a few key things: at Assignment in need you can check out our customer reviews, see if we have a clear track record of delivering on time. We also offer guarantees like free revisions or a refund policy.</P>
										</div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn bg-white border " style="font-weight:500; font-size: 20px;; color:black">2. Can I request revisions if I'm not satisfied with the assignment?<div class="icon fa fa-angle-down"></div></div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                          <P>Absolutely! Most assignment help services, including Assignment in Need, offer free revisions to ensure you're happy with the final product. If something doesn't meet your expectations, just let us know, and we'll make the necessary changes until it's exactly what you need.</P>
										</div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn bg-white border " style="font-weight:500; font-size: 20px;; color:black">3. How can I ensure the assignment meets academic standards?<div class="icon fa fa-angle-down"></div></div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                          <P>To ensure your assignment meets academic standards, make sure to provide detailed instructions when placing your order. The more specific you are about your requirements, the better we can tailor the work to match your expectations. Assignment in Need's expert writers are familiar with various academic formats and styles, so they'll make sure your assignment is well-researched, properly cited, and meets the required guidelines.</P>
										</div>
                                    </div>
                                </div>
                            </li>
						 
                  	</ul>
					
				</div>
			
				<div class="column col-lg-6 col-md-6 col-sm-12">
					 
					<ul class="accordion-box">
					 
						
					<li class="accordion block"> 
                                <div class="acc-btn bg-white border " style="font-weight:500; font-size: 20px;; color:black">4. Are the services confidential when I pay for assignment help? <div class="icon fa fa-angle-down"></div></div>
                                  <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                          <P>Yes, confidentiality is a top priority! Assignment in Need understands the importance of privacy, and all your personal information, as well as payment details, are kept completely secure. When you pay for assignment help, you can rest assured that your data is protected, and your identity remains confidential.</P>
											</div>
                                    </div>
                                  </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn bg-white border " style="font-weight:500; font-size: 20px;; color:black">5. Can I get urgent assignment help if I pay for it?<div class="icon fa fa-angle-down"></div></div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                           <P>Definitely! If you need urgent assignment help, Assignment in Need offers fast-tracked services designed to meet tight deadlines. Just let us know how quickly you need the work done, and we'll prioritize your assignment to ensure it's completed on time, without compromising on quality.</P>
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