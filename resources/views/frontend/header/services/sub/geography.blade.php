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
      /*Get The Best Geography Assignment Help To Simplify Your Studies */
	</style>
	<section class="banner-section-three header-section" >
		<div class="auto-container" style="margin-top: 100px;">
			<div style="text-align: center;">
				<ul class="page-breadcrumb">
					<li><a href="/">Home</a></li>
					<li>Geography</li>
				</ul>
            </div>
            <div class="row clearfix">
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<h1 class="text-center">Get The Best Geography Assignment Help To Simplify Your Studies
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

    <!--Assignment Writing Help In  Geography -->
	<section class=" py-0">
		<div class="auto-container ">
			<div class="row clearfix">
				<div class="title-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title-box">
							<div class="section-color-layer"></div>
							<h2 style="font-weight:500; font-size: 30px;; color:black" class="  my-4">Assignment Writing Help In  Geography</h2>
                           <p>  In an ever-changing subject like geography where you study the effects and cause of various geography phenomena with the help of data analysis, collection, data prediction, and data modeling, students often end up needing geography assignment help. And no one can blame them, geography is a complex subject that keeps on evolving.
                           </p>
							 <p> And because geography is a complex subject, there's also a high demand and need for geography assignments help. And we at Assignment in Need are here to match those demands. If you want great grades without any hassle then our expert geography assignment writers are here for you. With Assignment in Need you get the best assignment writing service at an affordable rate
                             </p>
                             <p><b>So why wait?</b>Get assignment assistance from a reliable service Today!
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
	<!--Why Choose Our Geography Assignment Help? -->
	<section class=" py-0">
		<div class="auto-container ">
			<div class="row clearfix">
				<div class="title-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title-box">
							<div class="section-color-layer"></div>
							<h2 style="font-weight:500; font-size: 30px;; color:black" class="my-4">Why Choose Our Geography Assignment Help?</h2>
                            
                    <p >So why choose us? Besides providing excellent geography assignment help service around the world, especially in places like London, Canada, UK, Spain and many more, there are more than one compelling reason to choose us, some of these include:</p>
                    <p><b>Affordable Prices: </b> We have affordable prices because we understand that most college students live with a tight budget and have a part-time job to support them. We believe money should not be a reason for you to not get the assignment help you need and deserve</p> 
                    <p><b>24/7 Customer Support: </b> If you have any last minute enquiry or need any help any time of the day, then you can contact our customer support that is available 24*7. As per your convenience, you can contact us through email, live chat, or phone.</p>
                    <p><b>Free Revisions: </b> We'll make the necessary changes if our work doesn't meet your expectations.</p>
                    <p><b>Experienced Writers: </b> Since different papers have their own style and format, students can find them confusing to work on. We have a team of experienced writers whose skills are not just limited to geography assignments, with them you can get help in any type of paper including research papers, essays, dissertations, coursework, and theses.</p>
                    <p><b>Secure Payment: </b> At Assignment in Need you'll get secure payments to keep your transactions safe and protected by the latest technologies, from any online theft and privacy issues.</p>
                    <p><b>Timely Delivery: </b> For students meeting a deadline can be very tough and we understand that. This is the reason why we at Assignment in Need complete your orders well before the due date which gives you time to review our work.</p>
                    <p><b>Simple Order Process: </b> Just provide your personal details (contact info, full name, university name) and assignment requirements (topic , deadline date, word count, type of assignment,  citation style ). That's it!</p>
                
                           
                            </div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
    <!--Subjects We Cover for Geography Assignment Help -->
	<section class=" py-0">
		<div class="auto-container ">
			<div class="row clearfix">
				<div class="title-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title-box">
							<div class="section-color-layer"></div>
							<h2 style="font-weight:500; font-size: 30px;; color:black" class="my-4">Subjects We Cover for Geography Assignment Help</h2>
                            <p>As a broad subject geography explores the relationship between Earth's surface and human culture. Check out some of these geography branches where you can get high-quality geography homework help online:</p>
                     <p><b>Physical Geography Assignment: </b> This area focuses on the natural environment, studying things like climate, soil, landforms, and oceans. Our team of geography experts can help you understand these physical patterns and processes for your geography assignments.</p>
                     <p><b>Environmental Geography Assignments: </b> This branch looks at how the environment interacts with human societies. Our geography writers can assist you in exploring these relationships in our geography assignment help service which can help in understanding the impact of human activities on the environment.</p>
                     <p><b>Human Geography Assignments: </b> This field studies how human activities are influenced by the Earth's surface. It includes topics like culture,  economics, society, and politics. Our experts are here to provide geography assignment help for you to achieve top grades, If you're struggling with any topic in this area,</p>
                     <p>And these are not all, you can get help with various other geography branches and other subjects, you can also check out our <b>economics research paper writing help</b> .</p>
          
                           
							 
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

    <!--How Our Geography Assignment Help Works-->
    <section class=" py-0">
		<div class="auto-container ">
			<div class="row clearfix">
				<div class="title-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title-box">
							<div class="section-color-layer"></div>
							<h2 style="font-weight:500; font-size: 30px;; color:black" class="  my-4">How Our Geography Assignment Help Works</h2>
                            <p>At Assignment in Need, we've made getting law assignment help easy. Just follow these simple steps:</p>
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
                            <li>1. Our experienced writers will craft custom solutions based on your needs.</li>
                           <li>2. Each assignment undergoes thorough checks to ensure accuracy and adherence to your instructions.</li>
                   
                            </ul>
                        </p>
                            <h3>Review and Revision Services</h3>
                            <p>
                            <ul>
                            <li>1. Receive your completed assignment and review it.</li>
                            <li>2. Request revisions if needed to ensure your satisfaction with the final product.</li>
                   
                            </ul>
                        </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
       
    <!--Tips From Experts Providing Geography Assignment Help Online -->
    <section class=" py-0">
		<div class="auto-container ">
			<div class="row clearfix">
				<div class="title-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title-box">
							<div class="section-color-layer"></div>
							<h2 style="font-weight:500; font-size: 30px;; color:black" class="my-4">Tips From Experts Providing Geography Assignment Help Online</h2>
                            <p>With the right tips you can do well even in tough geography assignments. Here are some tips from our expert geography assignment help service experts:</p>
                            
                            <h3>Understand the Assignment Requirements:</h3>
                            <p><ul>
                            <li>1. Make sure you know what the assignment is asking for so read the instructions carefully.</li>
                            <li>2. Understand the main topics and questions you need to cover.</li>
                   
                            </ul></p>
                            
                            <h3>Research Thoroughly</h3>
                            <p><ul>
                            <li>1. You can use reliable sources like academic journals, books, and reputable websites for your research.</li>
                            <li>2. You can enhance your geography assignments by taking detailed notes and organizing them by theme or topic to make reference easy.</li>
                   
                            </ul></p>

                            <h3>Create an Outline</h3>
                            <p><ul>
                            <li>1. Highlight important geographical concepts and theories.</li>
                            <li>2. Include an introduction, main body sections, and a conclusion.</li>
                      
                            </ul></p>

                            <h3>Focus on Key Concepts</h3>
                            <p><ul>
                            <li>1. Before you start writing plan the structure of your assignment</li>
                            <li>2. Use real-world examples to show your understanding.</li>
                    
                            </ul></p>

                            <h3>Cite Your Sources</h3>
                            <p><ul>
                            <li>1. Properly reference all sources to avoid plagiarism.</li>
                            <li>2. Use the required citation style as specified in your assignment guidelines.</li>
                      
                            </ul></p>

                            <h3>Proofread and Edit</h3>
                            <p><ul>
                            <li>1. Review your work for any grammatical or spelling errors.</li>
                            <li>2. Ensure your arguments are coherent and your information is accurate.</li>
                   
                            </ul></p>

							  
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

     
        
     <!--Conclusion -->
     <!-- <section class="py-0">
		<div class="auto-container ">
			<div class="row clearfix">
				<div class="title-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title-box">
							<div class="section-color-layer"></div>
							<h2 style="font-weight:500; font-size: 30px;; color:black" class="my-4">Conclusion</h2>
                            <p>
                    Geography is a tough and ever-changing subject, which is why many students need help with their assignments. At Assignment in Need, we provide expert geography assignment help to make things easier and help you get great grades. 
                            </p>
                <p>
                    Our service offers affordable prices, 24/7 support, free revisions, experienced writers, secure payments, and on-time delivery. Whether you need help with physical, environmental, or human geography assignments, our team is here for you. 
                </p>
                <p>
                    Don't let geography assignments stress you out. Get reliable and professional help today and succeed with Assignment in Need's geography assignment help service.
                </p>
							  
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->

	    <!-- new code of conclusion -->
  
        <section class="case-study-section mt-5 conclsn">
    	     <div class="auto-container">
		      <div class="row clearfix">

			<!-- Content Column -->
			<div class="content-column col-lg-5 col-md-12 col-sm-12   ">
				<div class="inner-column ">
					<h2 style="font-weight:500; font-size: 30px;; color:black" class="py-4">Conclusion </h2>
					<div class="text">
						
						<p>Geography is a tough and ever-changing subject, which is why many students need help with their assignments. At Assignment in Need, we provide expert geography assignment help to make things easier and help you get great grades. </p>
						<p>Our service offers affordable prices, 24/7 support, free revisions, experienced writers, secure payments, and on-time delivery. Whether you need help with physical, environmental, or human geography assignments, our team is here for you. </p>
						<p>Don't let geography assignments stress you out. Get reliable and professional help today and succeed with Assignment in Need's geography assignment help service. </p>
						 
					</div>
					<!-- <a href="courses-single.html" class="theme-btn btn-style-seven"><span class="txt">Read Case
							Study</span></a> -->
				</div>
			</div>

			<!-- Image Column -->
			<div class="image-column col-lg-7 col-md-12 col-sm-12">
				<div class="inner-column">
					<div class="icon-layer-three" style="background-image:url(images2/icons/icon-12.png)"></div>
					<div class="icon-layer-four" style="background-image:url(images2/icons/icon-3.png)"></div>
					<div class="icon-layer-six" style="background-image:url(images2/icons/icon-2.png)"></div>
					<div class="image titlt" data-tilt="" data-tilt-max="4"
						style="will-change: transform; transform: perspective(300px) rotateX(0deg) rotateY(0deg);">
						<img src="images2/resource/case.png" alt="">
					</div>
				</div>
			 </div>

		  </div>
	    </div>
  </section>
	     <!-- end new code of conclusion -->

       	 <!-- FAQs Question  section for canada -->
	     <section class="faq-section ">
			        <div class="auto-container">
			    	<div class="row clearfix">
					<div class="column col-lg-12 col-md-12 col-sm-12">
                        
                        <div class="title-box">
						<h2 style="font-weight:500; font-size: 30px;; color:black" class="  my-4">Frequently asked questions</h2>
					</div>
                        <ul class="accordion-box">
							<li class="accordion block ">
								<div class="acc-btn">1. How can I place an order for geography assignment help?
                                <div class="icon fa fa-angle-down"></div></div>
								<div class="acc-content">
									<div class="content">
										<div class="text">
											<p>Placing an order is easy! Just fill out our online form with your assignment details, get a quote, make a secure payment, and we’ll assign your task to a qualified law expert.</p>
										</div>
									</div>
								</div>
							</li>
							<li class="accordion block active-block">
								<div class="acc-btn active">2. What types of geography assignments do you help with?                        
                                    <div class="icon fa fa-angle-down"></div></div>
								<div class="acc-content current">
									<div class="content">
										<div class="text">
											<p>We help with all kinds of geography assignments, including:</p>
                                           
                                            <ul class="text text-left" style="text-align: justify; list-style-type: disc; padding-left: 20px;">
                                                <li>&#9702 Physical Geography: Topics like climate, landforms, oceans, and soil.</li>
                                                <li>&#9702 Environmental Geography: How human societies interact with the environment.</li>
                                                <li>&#9702 Human Geography: How the Earth's surface affects human activities, like culture, economics, society, and politics.</li>
                                                <li> &#9702 Geospatial Analysis: Using GIS and other tools to analyze spatial data.</li>
                                                <li>&#9702 Fieldwork Reports: Writing and analyzing data collected from fieldwork.</li>
                                                <li>&#9702 Research Papers and Essays: In-depth research on various geographical topics.</li>
                                            </ul>
										</div>
									</div>
								</div>
							</li>
							<li class="accordion block">
								<div class="acc-btn">3. Who will be working on my geography assignment?<div class="icon fa fa-angle-down"></div></div>
								<div class="acc-content">
									<div class="content">
										<div class="text">
											<p>Your assignment will be handled by one of our expert geography writers. Our team has experienced professionals with advanced degrees in geography, so you can be sure your assignment is in good hands.
                                            </p>
										</div>
									</div>
								</div>
							</li>
							<li class="accordion block">
								<div class="acc-btn">4. Do you provide plagiarism-free geography assignments?<div class="icon fa fa-angle-down"></div></div>
								<div class="acc-content">
									<div class="content">
										<div class="text">
											<p>Absolutely! We guarantee that all our assignments are plagiarism-free. Each assignment is written from scratch based on your specific requirements. We also use advanced plagiarism detection tools to ensure your work is 100% original.</p>
										</div>
									</div>
								</div>
							</li>
                            <li class="accordion block">
								<div class="acc-btn">
                                    5. How do I communicate with the writer working on my geography assignment?
                                    <div class="icon fa fa-angle-down">

                                    </div>
                                </div>
								<div class="acc-content">
									<div class="content">
										<div class="text">
											<p>You can easily chat with your writer through our secure messaging system. This way, you can ask questions, share additional information, and get updates on your assignment's progress. We make sure communication is smooth and easy so that your needs are always met. </p>
										</div>
									</div>
								</div>
							</li>

                           

                           
						</ul>
					</div>
					
					
				 
			</div>
 </section>
      
@endsection