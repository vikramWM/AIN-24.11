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

	  /* endcode */
	</style>
       <!-- title -->
	<section class="banner-section-three header-section" >
		<div class="auto-container" style="margin-top: 100px;">
			<div style="text-align: center;">
				<ul class="page-breadcrumb">
					<li><a href="/">Home</a></li>
					<li>Assignment In Need Barcelona</li>
				</ul>
            </div>
            <div class="row clearfix">
				 <!-- new change -->
				<div class="content-column col-lg-6 col-md-12 col-sm-12 ">
					<div class="inner-column">
						<h1 style="text-align: center;">Assignment Help in Barcelona @ 40% Discount
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
    <!-- Our Procedure -->
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
			<div class="sec-title py-2 text-center" >
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

     <!-- Assignment Writing Help In barcelona -->
	<section class=" py-0">
		<div class="auto-container ">
			<div class="row clearfix">
				<div class="title-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title-box">
							<div class="section-color-layer"></div>
							<h2 style="font-weight:500; font-size: 30px;; color:black" class="  my-4">Assignment Writing Help In Barcelona</h2>
                            
							  <p>Barcelona offers a multitude of attractions, including delightful cuisine, stunning beaches, successful football teams, and a laid back atmosphere that permeates the city. However, what truly makes Barcelona an exceptional destination for students is its renowned universities. Barcelona is home to some of the world's top ranking universities, adding to its appeal as a prime study location. Reports claim that education holds great significance in Spanish culture, fostering a remarkably high level of learning across the country. 
							  </p>
							 <p>According to research conducted in Spain, the city is highly sought after by international students due to the presence of these esteemed educational institutions. Barcelona boasts a remarkable standard of education, making it an enticing choice for students looking to pursue their studies. With a plethora of world class universities, the city attracts a diverse range of international students.
								</p>
							 <p>However, navigating the academic landscape in a foreign country can be challenging. That's where Assignment In Need Barcelona steps in to offer specialized assignment help services tailored to the needs of international students. Let's embark on a journey to discover how our assistance can enhance your academic experience in Barcelona. </p>
							
							   <h3> Embracing the Barcelona Advantage</h3>
							   <p>Barcelona's prestigious universities and high quality education system make it an ideal destination for international students seeking to further their studies. At Assignment In Need Barcelona, we recognize the opportunities and challenges that come with studying in this vibrant city. Our mission is to provide comprehensive assignment help that complements your academic journey, helping you make the most of your time in Barcelona.</p>
				             <p>Acculturation may seem quite overwhelming especially in a place like Barcelona, from adjusting to a new culture to learning Spanish. Even though this seems a lot that too when your key focus is supposed t be on your studies. In order to save you from the hassle of navigating your studies in a new language altogether the best assignment writing help in Barcelona is here to aid you with all your academic requirements. So explore, embrace and soak in all the Barcelona goodness
				                 </p>

							   <h3>Unleashing Your Potential with Expert Assistance</h3>
							   <p>Our team of experienced writers at Assignment In Need Barcelona is dedicated to unlocking your academic potential. We offer a wide range of assignment writing help services, including essays, research papers, case studies, and more. Our experts possess deep knowledge across various disciplines, ensuring that your assignments are meticulously crafted to meet the highest standards of quality.</p>
							    

							   <h3> Personalized Support for Academic Success</h3>
							   <p>We understand that every student has unique requirements and faces different academic challenges. That's why our assignment help services are tailored to your specific needs. Whether you need assistance with structuring your assignments, refining your writing style, or conducting research, our experts are here to provide personalized support and guidance.</p>
							   

							   <h3> Navigating Barcelona's Academic Landscape</h3>
							   <p>Barcelona hosts a diverse range of academic programs and disciplines. From humanities and social sciences to engineering and business, our assignment help services cover a wide spectrum of subjects. Regardless of your field of study, our experts possess the necessary expertise to deliver exceptional results and help you succeed academically.</p>
							    
 
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
       
	<!-- What Makes Our Assignment Writing Help Services Different From Others in Barcelona, Spain? -->
   <section class="py-0">
	<div class="auto-container">
		<div class="row clearfix">
			<div class="title-column col-lg-12 col-md-12 col-sm-12">
				<div class="inner-column">
					<div class="title-box">
						<div class="section-color-layer"></div>
						<h2 style="font-weight:500; font-size:30px; color:black" class="py-4">What Makes Our Assignment Writing Help Services Different From Others in Barcelona, Spain?</h2>
						<p>When it comes to academic success, finding the right assignment help services barcelona can make all the difference. The best assignment help barcelona offer more than just well-written papers; they genuinely care about your progress. It's not just about avoiding plagiarism—it's about providing tailored support that aligns with academic standards and helps you excel. A top-tier service offers a broad network of subject experts, ensuring you get the precise help you need for any topic.</p>
						<p>If you want to “pay someone to write your essay barcelona” Assignment in Need is a prime example of excellence in the world of online coursework help barcelona. We focus on delivering superior quality, from selecting our talented writers to ensuring that every assignment meets rigorous quality checks. Our barcelona assignment writers are not only experts in their fields but also dedicated to crafting insightful and well-researched assignments that meet academic expectations. We guarantee that every piece is uniquely created for you and thoroughly screened for plagiarism, maintaining the highest standards of integrity.
						</p>
						<p>What really sets Assignment in Need apart is our personalized approach. Whenever you buy assignment online barcelona from us, we recognize that each student has unique needs, and we strive to provide support that's tailored just for you. Our platform allows direct communication with your writer, making sure your specific instructions are followed to the letter, and that the final product meets your expectations. We're always here for you with 24/7 customer service, free revisions, and a commitment to your satisfaction.</p>
					    <p>Assignment in Need's assignment writing service barcelona is a top choice for students aiming to improve their academic standing. With a combination of expert writing, personalized service, and a strong commitment to quality and integrity, Assignment in Need offers everything you need to achieve your academic goals. Trust Assignment in Need's best assignment help barcelona with your personal statement writing needs, and take a step closer to success with a team that's dedicated to helping you shine.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
   </section>

   <!-- List of Universities in Spain Where We Provide Expert Assignment Help -->
    <section class="py-0">
		<div class="auto-container">
			<div class="row clearfix">
				<div class="title-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title-box">
							<div class="section-color-layer"></div>
							<h2 style="font-weight:500; font-size:30px; color:black" class="py-4">List of Universities in Spain Where We Provide Expert Assignment Help</h2>
							<div class="subject-container card bg-light">
		 
          <div class="row justify-content-center align-items-center">
	 
	      <div class="col-lg-12">
	        <div class="subject-list-box">
		    <div class="row">
			  <div class="col-md-4">
				  <ul class="subject-list">
					  <li><i class="fas fa-book-open"></i>Pompeu Fabra University </li>
					  <li><i class="fas fa-book-open"></i>Autonomous University of Barcelona   </li>
					  <li><i class="fas fa-book-open"></i>University of Barcelona</li>
					  <li><i class="fas fa-book-open"></i>University of Navarra</li>
					  <li><i class="fas fa-book-open"></i>University of Valencia</li>
					  <li><i class="fas fa-book-open"></i>EU Business School</li>
				   
				  </ul>
			 </div>
			  <div class="col-md-4">
				  <ul class="subject-list">
				     <li><i class="fas fa-book-open"></i>Autonomous University of Madrid </li>
					  <li><i class="fas fa-book-open"></i>University of Zaragoza</li>
					   <li><i class="fas fa-book-open"></i>University of Seville</li>
					
					  <li><i class="fas fa-book-open"></i>Universitat politècnica de catalunya</li>
					  <li><i class="fas fa-book-open"></i>Rovira i virgili university</li>
					  <li><i class="fas fa-book-open"></i>University of Castilla-La Mancha: Ciudad Real Campus</li>
					   
					   
				  </ul>
			  </div>
			  <div class="col-md-4">
				  <ul class="subject-list">
				      <li><i class="fas fa-book-open"></i>IQS - Ramon Llull University</li>
					  <li><i class="fas fa-book-open"></i>The University of Valencia </li>
					    <li><i class="fas fa-book-open"></i>CEU Cardinal Herrera University</li>
					  <li><i class="fas fa-book-open"></i>IE Business School</li>
					  <li><i class="fas fa-book-open"></i>University of Salamanca</li>
					  <li><i class="fas fa-book-open"></i>UCAM Universidad Católica San Antonio de Murcia</li>
					
				  </ul>
			  </div>
		    </div>
	        </div>
         </div>
           
          </div>
                         </div>

			 
						</div>
						<p>Students at prestigious universities in Spain often turn to Assignment in Need due to their heavy workload and ask us to “write my assignment barcelona.” Many also face language challenges as international students. When time is running out or when students feel uncertain about how to produce high-quality assignments, that’s where we step in. Assignment in Need’s assignment writing service barcelona is committed to connecting students with top experts who can provide the best assignment assistance.</p>
           <p>In a short span, we've expanded our services to reach students across every region of Spain, ensuring that help is always within reach.
		   </p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- How Our Professional Assignment writing Help Transforms Spanish Academic Success -->
        <section class="py-0">
			<div class="auto-container">
				<div class="row clearfix">
					<div class="title-column col-lg-12 col-md-12 col-sm-12 ">
						<div class="title-column">
							<div class="title-box">
								<div class="section-color-layer"></div>
								<h2 style="font-weight:500; font-size:30px; color:black" class="py-4">How Our Professional Assignment writing Help Transforms Spanish Academic Success</h2>
								 <p>Our online assignment helper in barcelona are available around the clock, no matter where you are. If you're hesitant about using our services to buy assignment online barcelona, take a moment to read the testimonials from our past clients. Once you're confident, you can choose our assignment writing help with peace of mind.</p>
					             <p>Our team consists of specialists who are highly knowledgeable and experienced in their specific disciplines. Assignment in Need offers comprehensive writing assistance, from dissertation help services barcelona, essay writing help barcelona to homework writing help barcelona, covering everything from es  says and dissertations to other academic needs. Whenever you require immediate help, we’re here to deliver. Our experts are committed to providing top-notch assignments on time, every time.</p>
								 <p>We’re proud to offer a reliable and student-focused service, staffed by qualified professionals. We’ve made our pricing student-friendly, allowing you to get quality assignments without spending a fortune. With just one click, you’ll be connected to thousands of academic writing experts on our platform.</p>
								 
					 
								</div>
						</div>
					</div>
				</div>
			</div>
		</section>
       
		<!-- Best Academic Subject Topics and Papers We Assist For Assignment Writing Help -->
       <section class="py-0">
		     <div class="auto-container">
			 <div class="row clearfix">
				<div class="title-column col-lg-12 col-md-12 col-sm-12">
                 <div class="inner-column">
					<div class="title-box">
						<div class="section-color-layer"></div>
						<h2 style="font-weight:500; font-size:30px; color:black;" class="py-4">Best Academic Subject Topics and Papers We Assist For Assignment Writing Help</h2>
	                    <p>Are you finding it challenging to get the help with assignments barcelona you need in a particular subject? Or maybe you're thinking, “I wish I could pay someone to write my assignment barcelona” With Assignment in Need, you don't have to worry about the subject—our experts are ready to assist in any field.</p>
		                 <p><b>Engineering:</b> Struggling with concepts like CAD or Aerospace Engineering? Our online homework experts can break down complex topics into easy-to-understand content.
						 </p>
						 <p><b>English: </b> Whether it's analyzing literary works or mastering literary devices, we've got your English homework covered, including writing, editing, and proofreading.</p>
						 <p><b>Geography: </b> Need help with assignments barcelona with a Geography assignment or exam prep? Our specialists know how to craft work that stands out with accurate examples, diagrams, and insights.</p>
						 <p><b>Law: </b> From Business Law to Constitutional Law, our team can assist with legal assignments, whether you need a custom essay or just some expert guidance.</p>
						 <p><b>Management: </b> If project management, supply chain, or operations homework is causing you stress, our experts are here to help you complete your assignments smoothly.</p>
					       <p>And that's not all! We also provide assignment writing help services in Spain and various assignment writing service barcelona in subjects like Nursing, Sports, Music, Sociology, Statistics, Graphic Design, and many more. Check out our full range of homework assistance services and get the help you need today.</p>
						        <!-- new code  -->
	                  <div class="subject-container card bg-light">
		 
	            	 <div class="row justify-content-center align-items-center">
	 
	                   <div class="col-lg-12">
	                     <div class="subject-list-box">
		            <div class="row">
			              <div class="col-md-4">
				       <ul class="subject-list">
					  <li><i class="fas fa-book-open"></i> Database homework writing </li>
					  <li><i class="fas fa-book-open"></i> Medical Science homework writing  </li>
					  <li><i class="fas fa-book-open"></i>Nursing homework writing </li>
					  <li><i class="fas fa-book-open"></i>Marketing homework writing  </li>
					  <li><i class="fas fa-book-open"></i>Finance homework writing</li>
					  <li><i class="fas fa-book-open"></i>Statistics homework writing</li>
					 
				   
			        	  </ul>
			             </div>
			          <div class="col-md-4">
				     <ul class="subject-list">
				     <li><i class="fas fa-book-open"></i>Accounting homework writing</li>
					  <li><i class="fas fa-book-open"></i>Mathematics homework writing</li>
					  <li><i class="fas fa-book-open"></i>Psychology homework writing</li>
					  <li><i class="fas fa-book-open"></i>Media homework writing</li>
					  <li><i class="fas fa-book-open"></i>English homework writing</li>
					  <li><i class="fas fa-book-open"></i>Agriculture homework writing</li>
					  <li><i class="fas fa-book-open"></i>Health homework writing</li>
					   
				  </ul>
			            </div>
			           <div class="col-md-4">
				     <ul class="subject-list">
			    	  
					  <li><i class="fas fa-book-open"></i>Science homework writing</li>
					  <li><i class="fas fa-book-open"></i>Econometrics homework writing</li>
					  <li><i class="fas fa-book-open"></i>Social Science homework writing</li>
					  <li><i class="fas fa-book-open"></i>Business homework writing</li>
					  <li><i class="fas fa-book-open"></i>Economics homework writing</li>
					  <li><i class="fas fa-book-open"></i>Programming homework writing</li>
					  <li><i class="fas fa-book-open"></i>Arts and Humanities homework writing</li>
					   
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


 
	<!-- The Assignment In Need Advantage: -->
	<section class=" py-0">
		<div class="auto-container ">
			<div class="row clearfix">
				<div class="title-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title-box">
							<div class="section-color-layer"></div>
							<h2 style="font-weight:500; font-size: 30px;; color:black" class="  my-4">The Assignment In Need Advantage:</h2>
							<p>	<strong> Timely Delivery:</strong> We understand the importance of meeting deadlines. Our dedicated team works diligently to ensure that your assignments are delivered promptly, allowing you sufficient time for review and submission.</p>
								<p>	<strong>Confidentiality and Privacy:</strong> Your privacy is of utmost importance to us. We maintain strict confidentiality and ensure that your personal information remains secure throughout the process.</p>
							</p>
							
							</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Our Barcelona Homework Writing Help Support For Student -->
	 <section class="py-0">
		<div class="auto-container">
			<div class="row clearfix">
				<div class="title-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title-box">
							<div class="section-color-layer"></div>
							<h2 style="font-weight:500; font-size:30px; color:black;" class="py-4">Our Barcelona Homework Writing Help Support For Student</h2>
							<p>If you're searching for top-notch homework writing help Barcelona, then look no further. Assignment in Need's services stand out due to several key features:</p>
						    <p><b>Tailored Homework: </b> Students in Barcelona universities demand homework that is flawless, authentic, and entirely original, increasing their chances of scoring top marks. With our assignment help services Barcelona, you receive custom-crafted papers that are 100% free from plagiarism.
							</p>
							<p><b>Plagiarism-Free Assurance: </b>  We run your homework through advanced tools like Turnitin to ensure they are completely original. For added peace of mind, we provide a Turnitin report alongside your completed homework when you use our homework writing help barcelona.</p>
							<p><b>Expert Team of Professionals: </b> Our team consists of over 3,000 experienced professionals, including writers, professors, and researchers, all selected through a rigorous process. These experts are well-equipped to produce high-quality papers tailored to your academic needs.</p>
							<p><b>Extensive Subject Coverage: </b> Unlike services that focus on a limited range of topics, our homework writing help Barcelona spans more than 100 subjects. From MBA and marketing to nursing and law, our versatile experts can assist you with any homework type, following APA, MLA, or Chicago referencing styles.</p>
							<p><b>Timely Delivery: </b> We understand the importance of meeting deadlines, so our primary goal is to deliver your homework promptly, in PDF format, well before your specified deadline.</p>

							<p><b>Free Assignment Samples: </b> We provide access to well-researched, professionally crafted homework samples on our website at no cost. These samples help students understand the proper format, style, and citation methods required for their homework.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	 </section>
	 <!-- Why Our Research Paper Help Stands Out in Barcelona -->
	  <section class="py-0">
		<div class="auto-container">
			<div class="row clearfix">
				<div class="title-column col-lg-12 col-md-12 col-sm-12 ">
					<div class="inner-column">
						<div class="title-box">
							<div class="section-color-layer"></div>
							<h2 style="font-weight:500; font-size:30px; color:black;" class="py-4">Why Our Research Paper Help Stands Out in Barcelona</h2>
	                      <p>We know how daunting research papers can be if you are studying in Barcelona, especially when grades are on the line. If you've ever thought, “I want to pay someone to do my assignment Barcelona,” we're here to help. At Assignment in Need, we combine affordability with quality, offering competitive rates, discounts, sign-up bonuses, and even cashback through our app for Barcelona students.</p>
			           <p>When you're overwhelmed with academic work, our service is a game-changer. Here's what sets us apart:
						<ul>
							<li><b>Adherence to Your Guidelines: </b> We stick closely to the instructions you provide.</li>
							<li><b>100% Original and Error-Free: </b> Every paper is meticulously checked to ensure originality and accuracy.
							</li>
							<li><b>Comprehensive Quality Checks: </b> We rigorously review every paper before it reaches you.
							</li>
							<li><b>Zero Plagiarism: </b>  work will always be unique and free from plagiarism.</li>
						</ul>
					   </p>
					   <p>We also prioritize your privacy which makes us the best assignment services in barcelona. Our IT team employs top-level security measures to protect your data, ensuring it's never shared with third parties. Our experienced MPhil and PhD writers follow your instructions to deliver exceptional results on time.</p>
					   <p>Looking for affordable research paper writing in Barcelona? Place an order today and let our experts use their knowledge to craft a paper that stands out.</p>
					</div>
					</div>
				</div>
			</div>
		</div>
	  </section>

	  <!-- Cheap Essay Writing Services for Spanish Learners -->
    <section class="py-0">
      <div class="auto-container">
		<div class="row clearfix">
			<div class="title-column col-lg-12 col-md-12 col-sm-12">
				<div class="inner-column">
					<div class="title-box">
						<div class="section-color-layer"></div>
						<h2 style="font-weight:500; font-size:30px; color:black" class="py-4">Cheap Essay Writing Services for Spanish Learners</h2>
						<p>Want to pay someone to write your essay barcelona? Finding budget-friendly essay writing help Barcelona that doesn't compromise on quality can be tough, but it's essential for managing your studies. At Assignment in Need, we offer affordable essay writing help Barcelona that caters to every budget without sacrificing excellence.</p>
                        <p>Why choose our cheap assignment help barcelona as a Spanish learner?
                        </p>
						<p><b>Budget-Friendly Pricing: </b> We understand students are often on a tight budget, so we offer competitive prices starting as low as $10.80 per page. Our pricing is transparent, with no hidden fees.
						</p>
						<p><b>High-Quality Essays: </b> Despite being affordable, our services don't compromise on quality. Our skilled writers produce well-researched, original papers that meet high academic standards.</p>
						<p><b>Flexible Options: </b> Whether you need a quick turnaround or more time for a complex project, we offer flexible options that fit your timeline and budget. Choose the level of assistance that's right for you.
						</p>
						<p><b>Transparent Pricing: </b> Our easy-to-use price calculator allows you to estimate your costs upfront, helping you budget confidently for your essay needs.</p>
						<p><b>Comprehensive Support: </b> From essays and research papers to theses and dissertations, we cover a wide range of essay writing help barcelona. Whatever you need, we're here to guide you every step of the way.
						</p>
					</div>
				</div>
			</div>
		</div>
	  </div>
	</section>
	<!-- Top Quality Dissertation Assistance for Students in Barcelona, Spain -->
     <section class="py-0">
		<div class="auto-container">
			<div class="row clearfix">
				<div class="title-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title-box">
							<div class="section-color-layer"></div>
							<h2 style="font-weight:500; font-size:30px; color:black" class="py-4">Top Quality Dissertation Assistance for Students in Barcelona, Spain
							</h2>
							<p>When you opt for our dissertation help barcelona, we're confident you'll keep coming back. At Assignment In Need, we guarantee top-notch work at a budget-friendly price, delivered promptly. Our expert writers specialize in crafting high-quality English dissertations, backed by years of experience.</p>
							<p>Our team isn't just highly qualified—they're passionate about their subjects. They dive deep into research, pulling data from a variety of sources, including online databases, academic articles, and journals. Their dedication ensures that your dissertation is thorough and compelling, setting you up for top grades.
							</p>
							<p>We know that deadlines can sneak up on you, especially if you start your work late. But don't worry—Assignment In Need' dissertation help services Barcelona is here to save the day. We're equipped to deliver exceptional dissertations quickly, and we can even help you pick the perfect topic if you're unsure where to start.
							</p>
							<p>We're also recognized for our comprehensive service, which includes meticulous proofreading and paraphrasing to make your dissertation truly stand out. Here's our approach to handling your dissertation:
                             <ul>
								<li><b>Analyze the Question: </b> We start by thoroughly understanding the question to identify the key focus areas.
								</li>
								<li><b>Identify Core Issues: </b> We pinpoint the main issues that need to be addressed in your dissertation.
								</li>
								<li><b>Gather Credible Sources: </b> Our team searches for reliable and relevant information to support your work.
								</li>
								<li><b>Assess Evidence: </b> We critically evaluate the evidence and different perspectives on the topic.
								</li>
								<li><b>Draw Conclusions: </b> We summarize the findings and draw well-supported conclusions.</li>
								<li><b>Present Results: </b> Your dissertation is presented clearly, effectively, and with a critical edge.
								</li>
							 </ul>
                            </p>
							<p>With Assignment In Need's dissertation help Barcelona, you'll receive dependable support and a meticulously crafted dissertation that meets your academic requirements.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	 </section>
         
	 <!-- Hire the Best Academic Writers in Barcelona -->
      <section class="py-0">
		<div class="auto-container">
			<div class="row clearfix">
				<div class="title-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title-box">
							<div class="section-color-layer"></div>
							<h2 style="font-weight:500; font-size:30px; color:black" class="py-4">Hire the Best Academic Writers in Barcelona
							</h2>
						   <p>When it comes to assignment help services Barcelona or tackling any coursework, Assignment in Need is unmatched. Our reputation is built on delivering success stories for students from top universities. Whether you’re facing a tight deadline or struggling with a tough academic topic, our assignment writing service barcelona is here to help. If late nights and stress aren't leading to the grades you want, our expert writing service is your answer. Opt for our paid assignment service, and we'll provide you with a tailor-made solution that guarantees excellence.</p>
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
							<h2 style="font-weight:500; font-size:30px; color:black" class="py-4">Conclusion</h2>
							<p>Assignment In Need Barcelona is your trusted companion in navigating the academic landscape of this vibrant city. If you want to pay for assignment barcelona, our specialized assignment help services for international students are designed to support your academic journey, enhance your learning experience, and empower you to achieve academic excellence. Barcelona's rich cultural heritage and educational opportunities await, let us guide you on the path to success. Embrace the Barcelona advantage and partner with Assignment In Need Barcelona today.</p>
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
						<h2 style="font-weight:500; font-size: 30px;; color:black" class="my-4"><b>Frequently Asked Questions For   Assignment Writing Help in the Barcelona, Spain</b></h2>
					 </div>
					<div class="row"> 
					 		 
				<div class="column col-lg-6 col-md-6 col-sm-12 ">
					 
					<ul class="accordion-box ">
						<li class="accordion block ">
							<div class="acc-btn bg-white border " style="font-weight:500; font-size: 20px;; color:black" >1. How can I get top-quality assignment help in Barcelona?<div class="icon fa fa-angle-down"></div></div>
							<div class="acc-content" style="display: none;">
								<div class="content">
									<div class="text">
									 <P>To get top-quality assignment help in Barcelona, choose a service with experienced writers who understand local academic standards. Look for a service with a proven track record, reviews, and a commitment to delivering assignments on time</P>
									</div>
								</div>
							</div>
						</li>
						<li class="accordion block ">
							<div class="acc-btn  bg-white  border" style="font-weight:500; font-size: 20px;; color:black">2. What types of assignments can you help with in Barcelona?<div class="icon fa fa-angle-down"></div></div>
							<div class="acc-content"  >
								<div class="content">
									<div class="text">
									<P>We assist Barcelona students with a wide range of assignments, including essays, research papers, case studies, dissertations, and lab reports. Our team is skilled in various subjects to meet your specific needs</P> 
										</div>
								</div>
							</div>
						</li>
						
						<li class="accordion block">
							<div class="acc-btn bg-white  border" style="font-weight:500; font-size: 20px;; color:black" >3. Are there any special considerations for assignments in Barcelona?<div class="icon fa fa-angle-down"></div></div>
							<div class="acc-content" style="">
								<div class="content">
									<div class="text">
										 <P>Yes, assignments in Barcelona may require adherence to specific formatting styles and academic guidelines set by local universities. Providing detailed instructions and guidelines helps us tailor the work to meet these requirements.</P>
										</div>
								</div>
							</div>
						</li>

						<li class="accordion block">
							<div class="acc-btn bg-white  border" style="font-weight:500; font-size: 20px;; color:black" >4. How do I get a reliable assignment writer in Barcelona?<div class="icon fa fa-angle-down"></div></div>
							<div class="acc-content" style="">
								<div class="content">
									<div class="text">
									 <p>To get a reliable assignment writer in Barcelona, select a service with vetted professionals who have expertise in your subject area. Check their qualifications, experience, and previous client feedback to ensure they can meet your needs.</p>
									</div>
								</div>
							</div>
						</li>
						<li class="accordion block">
							<div class="acc-btn bg-white  border" style="font-weight:500; font-size: 20px;; color:black">5. What should I do if I need urgent assignment help in Barcelona?<div class="icon fa fa-angle-down"></div></div>
							<div class="acc-content" style="">
								<div class="content">
									<div class="text">
										 <P>If you need urgent assignment help in Barcelona, contact us as soon as possible. We offer expedited services to handle tight deadlines and ensure that your assignment is completed on time without sacrificing quality.</P>
										</div>
								</div>
							</div>
						</li>
					 
					
					</ul>
					
				</div>
			
				<div class="column col-lg-6 col-md-6 col-sm-12">
					 
					<ul class="accordion-box">
					  
						 
						<li class="accordion block">
							<div class="acc-btn bg-white  border" style="font-weight:500; font-size: 20px;; color:black">6. How can I ensure my homework is completed correctly?<div class="icon fa fa-angle-down"></div></div>
							<div class="acc-content" style="">
								<div class="content">
									<div class="text">
										 <P>To ensure your homework is completed correctly, provide clear instructions and guidelines when placing your order. Our experienced writers will follow these details closely to deliver accurate and high-quality work.</P>
										</div>
								</div>
							</div>
						</li>
							 
						<li class="accordion block">
							<div class="acc-btn bg-white  border" style="font-weight:500; font-size: 20px;; color:black">7. What is the process for getting help with a research paper in Barcelona?<div class="icon fa fa-angle-down"></div></div>
							<div class="acc-content" style="">
								<div class="content">
									<div class="text">
										 <P>For help with a research paper in Barcelona, submit your topic, research requirements, and deadlines through our platform. We will assign a writer with expertise in your field to conduct thorough research and craft a well-structured paper.</P>
										</div>
								</div>
							</div>
						</li>
						<li class="accordion block">
							<div class="acc-btn bg-white  border" style="font-weight:500; font-size: 20px;; color:black">8. How do you ensure originality in essays and research papers?<div class="icon fa fa-angle-down"></div></div>
							<div class="acc-content" style="">
								<div class="content">
									<div class="text">
										 <P>We ensure originality by writing all essays and research papers from scratch and using advanced plagiarism detection tools. Each piece of work is checked to meet academic standards and ensure it is unique.</P>
										</div>
								</div>
							</div>
						</li>
						<li class="accordion block">
							<div class="acc-btn bg-white  border" style="font-weight:500; font-size: 20px;; color:black">9. What are the benefits of using your homework and assignment help service in Barcelona?<div class="icon fa fa-angle-down"></div></div>
							<div class="acc-content" style="">
								<div class="content">
									<div class="text">
										 <P>The benefits include access to expert writers, high-quality work tailored to your needs, timely delivery, and support throughout the process. We aim to help you achieve academic success with minimal stress.</P>
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
	<link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/css/intlTelInput.min.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/intlTelInput.min.js"></script>
	<script>
		var phone_number = window.intlTelInput(document.querySelector("#phone_number"), {
		separateDialCode: true,
		preferredCountries:["gb"],
		hiddenInput: "full",
		utilsScript: "//cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/utils.js"
		});
	</script>
	<script>
		$(document).ready(function(){
			var county_code = $(".iti__selected-dial-code").text();
			$("#country_c").val(county_code);
		});
		
		
		$('.iti__selected-flag').on('DOMSubtreeModified', function(){
			var county_code = $(".iti__selected-dial-code").text();
				$("#country_c").val(county_code);
		});
	</script>
	<script>
		document.getElementById('orderForm').addEventListener('submit', function (event) {
			var files = document.getElementById('file-upload').files;
			var totalSize = 0;
			for (var i = 0; i < files.length; i++) {
				totalSize += files[i].size;
			}
			// Check if total size exceeds the limit (50 MB)
			if (totalSize > (50 * 1024 * 1024)) {
				// Prevent form submission
				event.preventDefault();
				// Clear selected files
				document.getElementById('file-upload').value = '';
				// Show SweetAlert popup
				Swal.fire({
					icon: 'error',
					title: 'File Size Exceeded',
					html: 'Total file size should not exceed 50 MB.<br><br><button id="chooseFileAgain" class="btn btn-primary">Choose File Again</button>',
					confirmButtonColor: '#3085d6',
					showCancelButton: false,
					showConfirmButton: false
				});
				// Add event listener for the "Choose File Again" button
				document.getElementById('chooseFileAgain').addEventListener('click', function() {
					// Clear selected files
					document.getElementById('file-upload').value = '';
					// Close the SweetAlert popup
					Swal.close();
				});
			}
		});
	</script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection