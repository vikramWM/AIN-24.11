@extends('frontend-layouts.app')

@section('content')

<style>
	.subject-container {
		background-color: #fff;
		box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;

		padding: 20px;
		border-radius: 10px;
	}

	.subject-image {
		border-radius: 50%;
		max-width: 100%;
		height: auto;
	}

	.subject-list-box {
		background: rgb(0, 127, 193);
		background: linear-gradient(281deg, rgba(0, 127, 193, 0.5718662464985995) 11%, rgba(71, 199, 204, 1) 60%, rgba(0, 127, 193, 1) 100%);
		box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
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
					<li>Assignment In Need Canada</li>
				</ul>
            </div>
            <div class="row clearfix">
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<h1>Get The Best Assignment Writing Services Help For Canadian Student</h1>
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

	<section class=" pt-3 pb-3">
		<div class="auto-container ">
			<div class="row clearfix">
				<div class="title-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title-box">
							<div class="section-color-layer"></div>
							<h2 style="font-weight:500; font-size: 30px;; color:black" class="  my-4">Assignment Writing Help Services In Canada</h2>
							<p>There's no doubt Canadian universities provide excellent education. But the biggest issue most students face is assignments, this eventually leads them to find online <a href="https://www.assignnmentinneed.com/assignment-writing-help-services"> <b>assignment help Canada</b> </a>. While it can be really easy for students who stay organized to submit their assignments on time, it can no doubt be really difficult for students who indulge themselves in other activities or part-time jobs.	</p>
							<p>If you are one of those students then our assignment help services in Canada are the perfect fit for you. Don't worry about the cost if you are looking for <a href="https://www.assignnmentinneed.com/homework-writing-help-services"><b> homework help canada</b></a>. We at Assignment in Need offer affordable assignments and homework help that is well-researched and well-written.Talk to our experts today to get high-quality homework help canada, assignment help canada, and <a href="https://www.assignnmentinneed.com/essay-writing-help-services"><b>essay help in canada</b></a> at budget-friendly prices.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
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
	<section class=" pt-3 pb-3">
		<div class="auto-container card">
			<div class="row clearfix">
				<div class="title-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title-box">
							<div class="section-color-layer"></div>
							<h2 style="font-weight:500; font-size: 30px;; color:black" class="  my-4">Assignment Help in Canada Online for All Canadian University</h2>
							<p>It can be really hard to complete any assignment no matter how small if you don't understand the concepts. It can be equally hard to find someone who can help you understand your assignment requirements especially if it is a last minute assignment help in canada. 
							</p>
						<p>That's where we come in. Our assignment help Canada service is here to help you understand crucial concepts before you start working on your assignment, that too at an affordable price. No  matter where you live or which university you go to, our assignment help services in Canada are available to all. Check out some of the few university assignments we cater to:
							<ul>
								<li>1. University of Toronto </li>
								<li>2. University of Montreal</li>
								<li>3. Athabasca University</li>
								<li>4. University of Western Ontario</li>
								<li>5. York University</li>
								<li>6. University of Calgary</li>
								<li>7. University of Alberta</li>
								<li>8. Concordia University of Edmonton</li>
								<li>9. University of Victoria</li>
								<li>10. University of Waterloo</li>
						    	</ul>
						</p>
						 
					 
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Subjects Covered By Our Homework Writing Service Canada -->
	<section class=" py-0">
		<div class="auto-container  ">
			<div class="row clearfix ">
				<div class="title-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title-boxcard">
							<div class="section-color-layer"></div>
							<h2 style="font-weight:500; font-size: 30px;; color:black" class="  my-4">Subjects Covered By Our Assignment Writing Service Canada</h2>
							<p>Do you have pending assignments in multiple subjects which have led to staying up all night? It is completely normal to spend most of your time perfecting one subject assignment that you barely have any time left for completing other assignments. Since you can't ignore any subject, you can choose our last minute assignment help in Canada for situations like these:</p>
							<p>One of the main reasons why we are one of the best assignment help services is because we provide Canadian homework help in over 50+ academic subjects for all study levels. </p>
							<p><b>We provide assignment help canada services in wide range of subjects including:</b></p>
							<!-- <div class="row ">
								<div class="col-12 col-md-3"><p>Math Assignments</p></div>
								<div class="col-12 col-md-3"><p>Geography Assignments</p></div>
								<div class="col-12 col-md-3"><p>Sociology Assignments</p></div>
								<div class="col-12 col-md-3"><p>Chemistry Assignments</p></div>
								<div class="col-12 col-md-3"><p>Philosophy Assignments</p></div>

			                    <div class="col-12 col-md-3"><p>Economic Assignments</p></div>
								<div class="col-12 col-md-3"><p>Linguistic Assignments</p></div>
								<div class="col-12 col-md-3"><p>Statistics Assignments</p></div>
								<div class="col-12 col-md-3"><p>English Assignments</p></div>
								<div class="col-12 col-md-3"><p> Nursing Assignments</p></div>

								<div class="col-12 col-md-3"><p> Accounting Assignments</p></div>
								<div class="col-12 col-md-3"><p> History Assignments</p></div>
								<div class="col-12 col-md-3"><p> Physics Assignments</p></div>
								<div class="col-12 col-md-3"><p> Marketing Assignments</p></div>
								<div class="col-12 col-md-3"><p> Computer Assignments</p></div>

								<div class="col-12 col-md-3"><p> Engineering Assignments</p></div>
								<div class="col-12 col-md-3"><p> Finance Assignments</p></div>
								<div class="col-12 col-md-3"><p> Programming Assignments</p></div>
								<div class="col-12 col-md-3"><p> Business Assignments</p></div>
								<div class="col-12 col-md-3"><p> MBA Assignments</p></div>
							</div> -->
                            <!-- newcode -->
					<!-- <div class="container ">
				            	 <div class="row  ">
						            <div class="col-12 col-md-3 bg-light  mb-2 card">
									
					         	<p class=" fs-5  text-align: justify;">
					               	<ul>
								<li>1. Math Assignments </li>
								<li>2. Geography Assignments</li>
								<li>3. Sociology Assignments</li>
								<li>4. Chemistry Assignments </li>
								<li>5. Philosophy Assignments </li>
								 
						           </ul>
					            </p>
					 
						       </div>
						               <div class="col-12 col-md-3 bg-light  mb-2 card ">
						              <p class="  fs-5  text-align: justify;">
						              <ul>
									       <li>6. Economic Assignments </li>
									       <li>7. Linguistic Assignments </li>
								           <li>8. Statistics Assignments </li>
								           <li>9. English Assignments </li>
								           <li>10. Nursing Assignments  </li>
								           
								          
					     	               </ul>
					                         </p>
						                   </div>
								   <div class="col-12 col-md-3 bg-light  mb-2 card">
									
									         <p class=" fs-5  text-align: justify;">
										  <ul>
										   <li>11. Accounting Assignments </li>
										   <li>12. History Assignments </li>
										   <li>13. Physics Assignments </li>
								           <li>14. Marketing Assignments </li>
								           <li>15. Computer Assignments </li>
								           
									      </ul>
								         </p>
						
								  </div>
								   
								  <div class="col-12 col-md-3 bg-light  mb-2 card">
									
									<p class=" fs-5  text-align: justify;">
								 <ul>
								           <li>16. Engineering Assignments </li>
								           <li>17. Finance Assignments </li>
										   <li>18. Programming Assignments</li>
										   <li>19. Business Assignments</li>
										   <li>20. MBA Assignments</li>
								 </ul>
								</p>
			   
						 </div>
					                           </div>
				                                  </div>

				   </div> -->
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
									<li><i class="fas fa-caret-right"></i><a class="text-white" href="philosophy-assignment-writing-help"><b>Philosophy Assignment</b></a></li>
									<li><i class="fas fa-caret-right"></i><a class="text-white" href="sociology-assignment-writing-help"><b>Sociology Assignment </b></a></li>
									<li><i class="fas fa-caret-right"></i><a class="text-white" href="nursing-assignment-writing-help"><b>Nursing Assignment</b></a></li>
									<li><i class="fas fa-caret-right"></i><a class="text-white" href="marketing-assignment-writing-help"><b>Marketing Assignment</b></a></li>
									<li><i class="fas fa-caret-right"></i><a class="text-white" href="finance-assignment-writing-help"><b>Finance Assignment</b></a></li>
									<li><i class="fas fa-caret-right"></i><a class="text-white" href="statistics-assignment-writing-help"><b>Statistics Assignment</b></a></li>
								</ul>
							</div>
							<div class="col-md-4">
								<ul class="subject-list">
									<li><i class="fas fa-caret-right"></i><a class="text-white" href="accounting-assignment-writing-help"><b>Accounting Assignment</b></a></li>
									<li><i class="fas fa-caret-right"></i><a class="text-white" href="math-assignment-help"><b>Mathematics Assignment</b></a></li>
									<li><i class="fas fa-caret-right"></i><a class="text-white" href="english-assignment-writing-help"><b>English Assignment</b></a></li>
									<li><i class="fas fa-caret-right"></i><a class="text-white" href="linguistic-assignment-writing-help"><b>Linguistic Assignment</b></a></li>
									<li><i class="fas fa-caret-right"></i><a class="text-white" href="physics-assignment-writing-help"><b>Physics Assignment</b></a></li>
								    <li><i class="fas fa-caret-right"></i><a class="text-white" href="computer-science-assignment-writing-help"><b>Science Assignment</b></a></li>
								</ul>
							</div>
							<div class="col-md-4">
								<ul class="subject-list">
									<li><i class="fas fa-caret-right"></i><a class="text-white" href="history-assignment-writing-help"><b>History Assignment</b></a></li>
									<li><i class="fas fa-caret-right"></i><a class="text-white" href="economic-assignment-writing-help"><b>Economics Assignment</b></a></li>
									 
								    <li><i class="fas fa-caret-right"></i><a class="text-white" href="geography-assignment-writing-help"><b>Geography Assignment</b></a></li>
									<li><i class="fas fa-caret-right"></i><a class="text-white" href="law-assignment-writing-help"><b>Law Assignment</b></a></li>
									<li><i class="fas fa-caret-right"></i><a class="text-white" href="chemistry-assignment-writing-help"><b>Chemistry Assignment</b></a> </li>
									<li><i class="fas fa-caret-right"></i><a class="text-white" href="programming-assignment-writing-help"><b>Programming Help</b></a></li>
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

							<!-- endnewcode -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
     

	<!-- Why Choose Our Homework Writing Service Canada? -->

    <section class=" py-0">
		<div class="auto-container ">
			<div class="row clearfix">
				<div class="title-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title-box">
							<div class="section-color-layer"></div>
							<h2 style="font-weight:500; font-size: 30px;; color:black" class="  my-4">Why Choose Our Homework Writing Service Canada?
							</h2>
							<p>Do you also think “I want someone to do my homework canada?” but don't know who to choose? 
							</p>
							
							 
							<p>Most students who consider using our homework service for the first time often ask why they should choose our homework help canada services?
							</p>

						 
							<p>Because we offer services that are specifically tailored to meet your needs. What makes us stand out is our services, our quality of work, and our approach. Here are some compelling reasons why you should choose Assignment in Need for your homework writing needs in Canada.
							</p>

                             
						
                            <h3>Free revisions</h3>
                            <p>If you are not satisfied with the homework or need to add more content then you have a seven day window for absolutely free revision requests. As long as your request aligns with your original request, we'll make corrections at no extra cost.
							</p>

                            <h3>Privacy Protection</h3>
                            <p> With Assignment in Need, you also don't have to worry about your privacy being compromised. We have dedicated encryption systems in place for all your transactions that protect your personal and financial information.</p>
                           
							
						   <h3>Customizable Orders </h3>
						   <p>If you have any specific assignment needs then our ordering process allows you to tailor various aspects of your assignments that meet your needs.</p>
						   <p>If you are ready to start your homework journey, simply click on order now and our team of experts will be at your service in no time.
						   </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Having Assignment Writing Trouble? Let Our Canadian Assignment Writing Experts Handle Them -->

	<section class=" py-0">
		<div class="auto-container ">
			<div class="row clearfix">
				<div class="title-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title-box">
							<div class="section-color-layer"></div>
							<h2 style="font-weight:500; font-size: 30px;; color:black" class="  my-4"> Having Assignment Writing Trouble? Let Our Canadian Assignment Writing Experts Handle Them</h2>
							<p>If you are having trouble finding good assignment help services in canada or are just overwhelmed with the amount of work left. You can choose our affordable Canadian assignment writing experts for last minute assignment help in canada: Here’s what they bring to the table:</p>
							<ul>
								<li> 
                                <p> <b>1. Thorough Research:</b> Our Canada assignment helps experts use a wide range of sources to provide top-quality work.</p>
                                </li>

                                <li>
                                <p> <b>2. Original Work:</b> Our Canada assignment helps experts make sure each assignment is completely original, unique, and is plagiarism free. 
								</p>
                                </li>
								
                                <li>
                                <p><b>3. Customized Assignments:</b> When you ask one of our assignment helpers for assistance, they make sure to adjust their approach to fit your specific instructions. This ensures that the work they deliver meets your academic requirements and expectations effectively.
								</p>
                                </li>

                                <li>
                                <p><b>4. Accurate Referencing:</b> Our experts provide accurate references and citations for you to check the originality of your work..</p>
                                </li>

                                <li>
                                <p><b>5. Support from Assignment Makers in Canada:</b> Our assignment help services support students at all academic levels. We have skilled assignment maker Canada who can assist with a wide range of assignments, whether they're simple tasks or complex <a href="https://www.assignnmentinneed.com/research-paper-writing-services"><b>research papers writing help.</b></a>  
								</p>
								 
                                </li>
							</ul>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Help for all Types of Assignment Writing Services Canada -->

	<section class=" py-0">
		<div class="auto-container ">
			<div class="row clearfix">
				<div class="title-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title-box">
							<div class="section-color-layer"></div>
							<h2 style="font-weight:500; font-size: 30px;; color:black" class="  my-4">Help for all Types of Assignment Writing Services Canada

							</h2>
							<p>Our team of experts offers assistance that is specifically tailored to meet your needs for your academic success. All you have to say is <b>“do my assignment Canada”</b>. Check out some of our  <b>online assignment help</b> Canada:

							</p>
							
							 <h3>Homework Writing Help</h3>
							<p>Need help tackling your homework? Our dedicated team provides comprehensive support to help you manage and excel in your studies. From quick assignments to complex tasks, we've got you covered.
							</p>

						      <h3>Essay Help in Canada </h3>
							<p>Writing essays doesn't have to be stressful. Our experienced writers provide essay writing help services in Canada where they craft compelling essays that meet academic standards and reflect your unique perspective. 
							</p>

                             
						
                            <h3>Research Paper Writing Help</h3>
                            <p>Research papers require meticulous attention to detail. Our skilled writers conduct thorough research and deliver well-structured papers that demonstrate your understanding of the topic.
							</p>

                            <h3>Dissertation Help Canada</h3>
                            <p>Embarking on your dissertation journey? Our professional dissertation help services offer comprehensive support from topic selection to final submission.</p>
                            
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Last Minute Assignment Writing Help For Canada -->

	<section class=" py-0">
		<div class="auto-container ">
			<div class="row clearfix">
				<div class="title-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title-box">
							<div class="section-color-layer"></div>
							<h2 style="font-weight:500; font-size: 30px;; color:black" class="  my-4">Last Minute Assignment Writing Help For Canada


							</h2>
							<p>Modern technologies are a blessing and a curse, while you get the benefits of binge worthy shows, they also make you forget about assignments. This leads students to find <b> last minute assignment help in canada.</b> </p>
							 
							<p>We at Assignment in Need are a trusted assignment help services in canada that provides last minute assignment help in canada. You can rely on their last-minute online assignment help Canada to ease your workload and meet your deadlines.
							</p>

						        
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Cheap Assignment Writing Help for Canadian Students -->
	<section class=" py-0">
		<div class="auto-container ">
			<div class="row clearfix">
				<div class="title-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title-box">
							<div class="section-color-layer"></div>
							<h2 style="font-weight:500; font-size: 30px;; color:black" class="  my-4">Cheap Assignment Writing Help for Canadian Students</h2>
							<p>If you are someone who is working part-time to finance their education, you can save money by using our cheap assignment writing help. We offer high-quality assignment help Canada online at the lowest prices. 
							</p>
						 
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Top Professional Essay Writing Service for Canada -->

	<section class=" py-0">
		<div class="auto-container ">
			<div class="row clearfix">
				<div class="title-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title-box">
							<div class="section-color-layer"></div>
							<h2 style="font-weight:500; font-size: 30px;; color:black" class="  my-4">Top Professional Essay Writing Service for Canada
							</h2>
							<p>Looking for essay help in Canada but worried about security? At Assignment in Need, we believe trust is crucial in our relationship with you. We only ask for necessary information to protect your privacy and complete your order safely. 
							</p>
							<p>With us all your interactions are secure whether its essay details with a writer or contacting customer service. Your data security is our priority.
							</p>
							<p>Our essay help in Canada is based on how hard they are, their complexity, how many pages you need, and when you need them done. We believe planning ahead saves money, especially with longer deadlines. </p>
						 
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Best Dissertation Writing Services in Canada -->

	<section class=" py-0">
		<div class="auto-container ">
			<div class="row clearfix">
				<div class="title-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title-box">
							<div class="section-color-layer"></div>
							<h2 style="font-weight:500; font-size: 30px;; color:black" class="  my-4">Best Dissertation Writing Services in Canada</h2>
		 
							<p> Looking for the best <a href="https://www.assignnmentinneed.com/dissertation-writing-help-services"><b>dissertation help canada</b></a>? At Assignment in Need, your security is our priority. We only ask for what's necessary to protect your privacy and complete your order safely.
							</p>
							 <p>With us, all your interactions are secure, whether you're sharing details with a writer or contacting customer service. Our services are tailored based on your dissertation's complexity, page count, and deadline. With our dissertation help canada you can also avail great offers like:
							 </p>
							 <ul>
								<li>1. Up to 40% off based on your requirements!</li>
								<li>2. Receive 1 assignment FREE of cost when you order 5 assignments!</li>
								<li>3. Refer 4 friends and get a group project absolutely FREE!</li>
							</ul>
							<p>For more details on these offers, visit <a href="https://www.assignnmentinneed.com/Offers"> <b>Assignment in Need Offers.</b></a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	  
        <!-- FAQs Question  section for Dissertation Writing Help Services -->
 
	        
<section class="faq-section bg-light">
	    	<div class="auto-container">
			<div class="row ">
				<div class="titel-column col-lg-12 col-md-12 col-sm-12">
				    <div class="title-box text-center">
						<h2 style="font-weight:500; font-size: 30px;; color:black" class="my-4"><b>Frequently Asked Questions For Assignment Writing Help in the Canada  </b></h2>
					 </div>
					<div class="row"> 
					 		 
				<div class="column col-lg-6 col-md-6 col-sm-12 ">
					 
					<ul class="accordion-box ">
						<li class="accordion block ">
							<div class="acc-btn bg-white border " style="font-weight:500; font-size: 20px;; color:black" >1. How can I find a specialized assignment writer for my course in Canada?<div class="icon fa fa-angle-down"></div></div>
							<div class="acc-content" style="display: none;">
								<div class="content">
									<div class="text">
									 <P>To find a specialized assignment writer in Canada, look for services that offer writers with expertise in your specific subject or course. Check their qualifications and previous work to ensure they are well-versed in your academic field. </P>
									</div>
								</div>
							</div>
						</li>
						<li class="accordion block ">
							<div class="acc-btn  bg-white  border" style="font-weight:500; font-size: 20px;; color:black">2. What types of essays can you help with for Canadian students?<div class="icon fa fa-angle-down"></div></div>
							<div class="acc-content"  >
								<div class="content">
									<div class="text">
									<P>We can help with various types of essays, including argumentative, descriptive, analytical, and reflective essays. Just specify the type and any particular requirements to get tailored assistance.</P> 
										</div>
								</div>
							</div>
						</li>
						
						<li class="accordion block">
							<div class="acc-btn bg-white  border" style="font-weight:500; font-size: 20px;; color:black" >3. How can I get help with homework in specific subjects?<div class="icon fa fa-angle-down"></div></div>
							<div class="acc-content" style="">
								<div class="content">
									<div class="text">
										 <P>To get help with homework in specific subjects, specify the subject and topic when placing your request. Our team will assign a writer with expertise in that area to provide targeted assistance.</P>
										</div>
								</div>
							</div>
						</li>

						<li class="accordion block">
							<div class="acc-btn bg-white  border" style="font-weight:500; font-size: 20px;; color:black" >4. What should I do if I need help with homework at the last minute?<div class="icon fa fa-angle-down"></div></div>
							<div class="acc-content" style="">
								<div class="content">
									<div class="text">
									 <p>For last-minute homework help, contact us immediately with your request. We offer expedited services to handle urgent deadlines and ensure that your homework is completed on time.</p>
									</div>
								</div>
							</div>
						</li>
						 
					 
					
					</ul>
					
				</div>
			
				<div class="column col-lg-6 col-md-6 col-sm-12">
					 
					<ul class="accordion-box">
					<li class="accordion block">
							<div class="acc-btn bg-white  border" style="font-weight:500; font-size: 20px;; color:black">5. What types of assignments can you handle for Canadian students?<div class="icon fa fa-angle-down"></div></div>
							<div class="acc-content" style="">
								<div class="content">
									<div class="text">
										 <P>We handle a variety of assignments, including research papers, case studies, term papers, and essays. Our team is equipped to tackle assignments across different subjects and academic levels, ensuring customized support for each request.</P>
										</div>
								</div>
							</div>
						</li>
						 
						<li class="accordion block">
							<div class="acc-btn bg-white  border" style="font-weight:500; font-size: 20px;; color:black">6. How do you ensure that the assignment meets my specific guidelines?<div class="icon fa fa-angle-down"></div></div>
							<div class="acc-content" style="">
								<div class="content">
									<div class="text">
										 <P>We ensure that your assignment meets your specific guidelines by closely reviewing the instructions you provide. Our writers follow these guidelines meticulously and communicate with you if any clarifications are needed to meet your expectations</P>
										</div>
								</div>
							</div>
						</li>
							 
						<li class="accordion block">
							<div class="acc-btn bg-white  border" style="font-weight:500; font-size: 20px;; color:black">7. What if I need help with an assignment in a subject not listed on your site?<div class="icon fa fa-angle-down"></div></div>
							<div class="acc-content" style="">
								<div class="content">
									<div class="text">
										 <P>If you need help with a subject not listed, contact us directly. We have a network of experts across various disciplines and can often accommodate requests for less common subjects by matching you with a qualified writer.</P>
										</div>
								</div>
							</div>
						</li>
						<li class="accordion block">
							<div class="acc-btn bg-white  border" style="font-weight:500; font-size: 20px;; color:black">8. How do you handle urgent assignments that require immediate attention?<div class="icon fa fa-angle-down"></div></div>
							<div class="acc-content" style="">
								<div class="content">
									<div class="text">
										 <P>For urgent assignments, we prioritize them to ensure timely completion. You can select expedited services, and our team will work swiftly to meet your tight deadlines while maintaining high quality.</P>
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