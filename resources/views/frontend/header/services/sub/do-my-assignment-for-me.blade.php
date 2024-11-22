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
					<li>Do My Assignment</li>
				</ul>
            </div>
            <div class="row clearfix">
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<h1 class="text-center">Do My Assignment |Reliable Support for Overwhelmed Students!
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

    <!--Do My Assignment Writing Help For Me Online -->
	<section class=" py-0">
		<div class="auto-container ">
			<div class="row clearfix">
				<div class="title-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title-box">
							<div class="section-color-layer"></div>
							<h2 style="font-weight:500; font-size: 30px;; color:black" class="  my-4">Do My Assignment Writing Help For Me Online
                            </h2>
                            <p>If you're a student thinking, "How am I going to do my assignment?" or "Who can help me out and do my assignment for me?" ordering a paper and asking someone to "do my assignment for me online" could be just what you need. Getting help from professional writers online is a smart way to save time and avoid all that stress. Plus, with expert assistance, improving your grades becomes much easier!</p>
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

    <!-- Do My Assignment for Me: Boost Your Grades with Expert Help -->
   <section >
    <div class="auto-container">
        <div class="row clearfix">
            <div class="title-column col-lg-12 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="title-box">
                        <div class="section-color-layer"></div>
                        <h2 style="font-weight:500; font-size: 30px;; color:black" class="  my-4">Do My Assignment for Me: Boost Your Grades with Expert Help</h2>
                        <p>When students ask for "do my homework for me", they aren't just looking for someone to "do my assignment for them". They're looking for experts who can really take their assignments to the next level. By working with professional writers, you'll have access to people who know their stuff, can turn out top-notch papers, and help me do my assignment, no matter the subject.</p>
                        <p>One of the biggest perks of using do my assignment writing help services is the chance to boost your grades. Well-written, thoroughly researched papers stand out and can make a real difference in your academic success. And it's not just asking someone to do my assignment writing -it's also a great way to learn how to approach your own projects better in the future.</p>
                        <p>Another great benefit is the feedback and revision process. Many services offer the option to tweak the paper after it's done, which means you can make sure it's exactly how you want it. This back-and-forth also helps you improve your writing and research skills, making you a stronger student overall.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
   </section>

       <!-- How Our Experts Can Do My Assignment Online and Enhance Your Homework -->
     <section>
       <div class="auto-container">
        <div class="row clearfix">
            <div class="title-column col-lg-12 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="title-box">
                        <div class="section-color-layer"></div>
                        <h2 style="font-weight:500; font-size: 30px;; color:black" class="my-4">How Our Experts Can Do My Assignment Online and Enhance Your Homework</h2>
                        <p>Getting do my assignment help online is easier than ever. Wondering how it works when you Pay someone to do my assignment? Here's a simple breakdown:</p>
                         <p><b>Understanding What You Need:</b>At Assignment in Need we make sure we fully understand the assignment. Our writers read your do my assignment for me instructions carefully, so they know what your teacher expects, from the format to the style and everything in between.</p>
                         <p><b>Researching the Topic:</b>Once we've got the "help me do my homework" request and instructions down, our writers dig into research, finding reliable information to support the paper. Quality research is key to a good assignment.</p>
                         <p><b>Writing the Paper:</b>After gathering all the info, we start writing. We make sure the paper is easy to follow, well-organized, and hits all the points needed. Whether it's a report, essay, or something else, we adapt to your needs.</p>
                         <p><b>Citations:</b>Our writers are pros at using the right citation styles, whether it's APA, MLA, or Chicago. They'll make sure your work is properly referenced and plagiarism-free.</p>
                         <p><b>Proofreading and Editing:</b>Once the paper is done, it goes through a final check to catch any errors and polish it up. We want it to be perfect when you get it!</p>
                         <p><b>On-Time Delivery:</b> We know how important deadlines are, so we make sure you get your paper on time, with plenty of room to ask for changes if needed.</p>
                    </div>
                </div>
            </div>
        </div>
       </div>
     </section>

     <!-- Tips for Do My Assignment Writing Help in the Right Way -->

     <section>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="title-column col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="title-box">
                            <div class="section-color-layer"></div>
                            <h2 style="font-weight:500; font-size: 30px;; color:black" class="  my-4">Tips for Do My Assignment Writing Help in the Right Way</h2>
                            <p>If you're thinking of using an assignment service and asking them to "do my assignment for me online", here are some quick tips to get the best "help me do my homework" results:</p>
                           <p><b>Be Clear About What You Want:</b>The more details you give upfront-like word count, format, or specific instructions—the better the final product will be.</p>
                           <p><b>Pick a Trusted Service:</b>Not all services are equal, so take some time to find one with great reviews and experienced writers</p>
                           <p><b>Stay in Touch with Your Writer:</b>If you can, communicate directly with your writer. Share any extra details or changes you need to make sure everything's just right</p>
                           <p><b>Review the Paper:</b>When you get your assignment, read through it carefully. If something needs tweaking, don't hesitate to ask for revisions and "do my assignment writing."</p>
                           <p><b>Use It as a Learning Tool:</b> Your completed assignment isn't just a finished product—it can also be a guide for future work. Study how the paper is structured and learn from it!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section>


     <!-- Need Help? Ask Us to Do My Assignment for Me -->
        <section>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="title-column col-lg-12 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="title-box">
                                <div class="section-color-layer"></div>
                                <h2 style="font-weight:500; font-size: 30px;; color:black" class="  my-4">Need Help? Ask Us to Do My Assignment for Me</h2>
                                <p>Feeling stuck with your assignments? No worries! Assignment in Need's team of skilled writers is ready to help you out. Just ask us, "Can you help me do my assignment?" and we'll take care of everything from there!</p>
                                <p>Whether you're in high school, college, or working on a graduate degree, we've got a variety of do my assignment help services designed to meet your needs. We at Assignment in Need are all about quality work, delivering on time, and making sure you're happy with the results. With our do my assignment writing help services, you can focus on learning and reaching your academic goals without the stress!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Get Your Assignment Done in 3 Simple Steps: Do My Assignment Online -->

       <section>
        <div class="auto container">
            <div class="row clearfix">
                <div class="title-column col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="title-box">
                            <div class="section-color-layer"></div>
                            <h2 style="font-weight:500; font-size: 30px;; color:black" class="  my-4">Get Your Assignment Done in 3 Simple Steps: Do My Assignment Online</h2>
                            <p>Getting professional help for your assignments and asking experts to "do my homework for me" has never been this simple. We know students often deal with tight deadlines and heavy workloads, so we've made the do my assignment process quick and hassle-free. Here's how our "do my assignment writing" works:  </p>
                           <p><b>Place Your Order:</b> Visit our website and fill out the easy order form. Give us the details about your assignment and ask us to "do my assignment for me online" -what kind of work it is (essay, research paper, etc.), the topic, word count, and when it's due. Don't forget to include any specific instructions or preferences!</p>
                           <p><b>We Get to Work:</b>Once you've placed your order and asked us to "do my homework for me", we'll match you with an expert writer who specializes in your subject. They'll dig into the research, carefully craft your assignment, and follow all the guidelines you provided.</p>
                           <p><b>Get Your Paper:</b>You'll receive a polished, well-written assignment that's ready to submit! Plus, we deliver everything on time so you don't have to worry about missing any deadlines.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       </section>

       <!-- What We Offer in Our Do My Assignment Service -->

       <section>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="title-column col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="title-box">
                            <div class="section-color-layer"></div>
                            <h2 style="font-weight:500; font-size: 30px;; color:black" class="  my-4">What We Offer in Our Do My Assignment Service</h2>
                            <p>We pride ourselves on providing comprehensive support to students through our "do my assignment writing help services". Here's a closer look at what you can expect when you choose us for your academic needs and ask us to “help me do my homework”:</p>
                              <h3>Affordable Pricing</h3>
                              <p>Understanding that students often work with tight budgets, we offer competitive and transparent pricing. Our do my assignment rates are designed to be student-friendly, ensuring you receive quality assistance without breaking the bank. We believe that every student deserves access to academic support, which is why we strive to keep our services affordable while maintaining high standards of quality. Additionally, we provide a clear breakdown of costs upfront, so you know exactly what you're paying for when you get our "do my assignment help."</p>
                              <h3>Unlimited Revisions</h3>
                              <p>Your satisfaction is our priority. That's why we provide unlimited revisions on your completed assignments when you choose us for "help me do my assignment". If you feel that certain aspects need tweaking or adjustments, simply let us know, and we'll work to ensure the final product meets your expectations. This policy allows you to refine the content until it's just right, giving you confidence that your assignment is polished and ready for submission. We value your input and want you to be completely satisfied with the final result.</p>
                              <h3>Wide Range of Subjects</h3>
                              <p>No matter the subject, we have experts ready to assist you. Our team covers a vast array of disciplines, from humanities and social sciences to STEM fields. This diverse expertise allows us to cater to the needs of students from different academic backgrounds, ensuring that you receive specialized help tailored to your assignment. Whether you need assistance with literature, history, mathematics, or engineering, we have qualified professionals who can provide in-depth knowledge and support in your area of study.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       </section>

       <!-- Types Of Assignments We Help With in Do My Assignment Help Services -->

       <section>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="title-column col-lg-12 col-md-12 col-sm-12 ">
                    <div class="inner-column">
                        <div class="title-box">
                            <div class="section-color-layer"></div>
                            <h2 style="font-weight:500; font-size: 30px;; color:black" class="  my-4">Types Of Assignments We Help With in Do My Assignment Help Services</h2>
                               <p>At Assignment in Need, we know that every student faces different types of assignments throughout their academic journey. That's why we offer a variety of  "do my assignment for me" services tailored to your specific needs. Whether it's essays, coursework, or research papers, we've got you covered!</p>
                               <h3>Do My Essay Writing Help</h3>
                               <p>Struggling to get your essay just right? Assignment in Need's expert writers are here to assist you with any type of essay, from argumentative to descriptive. We'll help you craft an essay that is well-structured, insightful, and engaging—delivering top results that reflect your ideas and meet academic standards.</p>
                               <h3>Do My Coursework Writing Help</h3>
                               <p>Coursework can quickly become overwhelming, especially when deadlines pile up. Our Do My Coursework Writing Help service is designed to assist with all types of coursework, from lab reports to essays, ensuring that your assignments are completed on time and according to your course's requirements.</p>
                               <h3>Do My Proofreading and Editing Writing Help</h3>
                               <p>Got your assignment done but want to make sure it's flawless? Our proofreading and editing experts will review your work to eliminate errors and improve readability. From grammar and punctuation to sentence structure and flow, we at Assignment in Need make sure your assignment is polished and ready for submission.</p>
                               <h3>Do My Homework Help</h3>
                               <p>Homework piling up? Assignment in Need's help me do my homework service is here! Our do my homework for me service provides fast, reliable assistance across a range of subjects. Whether you need help with math problems or writing assignments, we'll ensure you meet deadlines and fully understand the material.</p>
                               <h3>Do My Research Paper Writing Help</h3>
                               <p>Research papers require a deep understanding of the subject, along with strong analytical skills. If you're feeling stuck, our Do My Research Paper Writing Help service can guide you through the process—from finding credible sources to crafting strong arguments. We'll help you create a well-researched paper that meets academic expectations.</p>
                               <h3>Do My Plagiarism-Free Assignment Online for Me</h3>
                               <p>Worried about plagiarism? With our do my assignment writing service, you don't have to be! Every assignment we deliver is 100% original and written from scratch. We understand the importance of submitting unique work, and we use advanced plagiarism-checking tools to ensure your assignments are free from copied content. Trust Assignment in Need to deliver high-quality, custom-written assignments that are completely plagiarism-free.</p>
                     
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
					<h2 class="py-3" style="font-weight:500; font-size: 30px; color:black">Do My Assignment for Me- Get Assignment Help World Wide For Students</h2>
					<div class="text">
						 <p>At Assignment in Need, We provide expert do my assignment for me services for students in the UAE, UK, Spain, Malaysia, Canada, and Australia Our 3,000+ PhD Experts always help students worldwide. Looking for assistance with essays, research projects, or other academic assignments? Our team of experienced writers is ready to assist you in achieving success. Facing challenges is common for students, so we offer timely support customised to your needs. Wherever students are, accessing the help needed to improve grades is simple with Assignment in Need. With over 45,000 assignments delivered, they handle the hard work so students can focus on their studies and future goals. Trust them to deliver quality, plagiarism-free assignments every time.</p>
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
						<h2 style="font-weight:500; font-size: 30px;; color:black" class="my-4"><b>Frequently Asked Questions For Best Online Assignment Writing Service</b></h2> 
					 </div>
					<div class="row"> 
					 		 
				<div class="column col-lg-6 col-md-6 col-sm-12 ">
					 
					<ul class="accordion-box ">
					       <li class="accordion block">
                                <div class="acc-btn bg-white border " style="font-weight:500; font-size: 20px;; color:black">1. How do I improve my academic writing skills?<div class="icon fa fa-angle-down"></div></div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                        <P>Improving your academic writing skills involves practice and a willingness to learn. Start by reading academic papers in your field to understand the structure and style. Focus on expanding your vocabulary and practicing clear, concise writing. Regularly seeking feedback from peers or instructors can also help identify areas for improvement. Additionally, consider utilizing online resources, workshops, or writing centers at your institution for guidance and support.</P>
									</div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn bg-white border " style="font-weight:500; font-size: 20px;; color:black">2. What should I do if I don't understand the assignment requirements?<div class="icon fa fa-angle-down"></div></div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                          <P>If you're unclear about the assignment requirements, don't hesitate to seek clarification. Start by re-reading the assignment prompt carefully to identify any key points or questions. If you're still unsure, reach out to your instructor or teaching assistant for guidance. Forming a study group with classmates can also be beneficial, as discussing the assignment with others may help you gain different perspectives and insights.</P>
										</div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn bg-white border " style="font-weight:500; font-size: 20px;; color:black">3. Is it ethical to use academic writing services?<div class="icon fa fa-angle-down"></div></div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                          <P>Using academic writing services can be ethical, provided that you utilize them responsibly. These services can offer valuable support, such as helping you understand complex topics or providing guidance on writing techniques. However, it's essential to use the work as a learning tool rather than submitting it as your own. Always adhere to your institution's policies on academic integrity and ensure you give proper credit when using any external resources.</P>
										</div>
                                    </div>
                                </div>
                            </li>
						 
                  	</ul>
					
				</div>
			
				<div class="column col-lg-6 col-md-6 col-sm-12">
					 
					<ul class="accordion-box">
					 
						
					<li class="accordion block"> 
                                <div class="acc-btn bg-white border " style="font-weight:500; font-size: 20px;; color:black">4. How can I avoid plagiarism in my assignments?<div class="icon fa fa-angle-down"></div></div>
                                  <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                          <P>To avoid plagiarism, always ensure you properly cite any sources you reference or use in your assignments. Familiarize yourself with the citation style required by your institution, such as APA, MLA, or Chicago. Additionally, paraphrasing ideas in your own words and summarizing information can help you integrate sources without copying directly. Finally, consider using plagiarism detection tools to check your work before submission, ensuring all sources are appropriately credited.</P>
										</div>
                                    </div>
                                  </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn bg-white border " style="font-weight:500; font-size: 20px;; color:black">5. What are some effective time management strategies for students?<div class="icon fa fa-angle-down"></div></div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                          <P>Effective time management strategies for students include creating a detailed schedule that outlines your tasks, deadlines, and study sessions. Break larger assignments into smaller, manageable tasks and set specific goals for each study period. Prioritize your tasks based on deadlines and importance, and avoid multitasking to enhance focus and productivity. Utilizing tools such as planners or digital apps can help you stay organized, while setting aside regular breaks can boost your overall efficiency and reduce burnout.</P>
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