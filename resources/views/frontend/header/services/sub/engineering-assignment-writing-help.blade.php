
 
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
                 /* new code */
 
.education {
  --bg-color: #ffd861;
  --bg-color-light: #ffeeba;
  --text-color-hover: #4C5656;
  --box-shadow-color: rgba(255, 215, 97, 0.48);
}

.credentialing {
  --bg-color: #B8F9D3;
  --bg-color-light: #e2fced;
  --text-color-hover: #4C5656;
  --box-shadow-color: rgba(184, 249, 211, 0.48);
}

.wallet {
  --bg-color: #CEB2FC;
  --bg-color-light: #F0E7FF;
  --text-color-hover: #fff;
  --box-shadow-color: rgba(206, 178, 252, 0.48);
}

.human-resources {
  --bg-color: #DCE9FF;
  --bg-color-light: #f1f7ff;
  --text-color-hover: #4C5656;
  --box-shadow-color: rgba(220, 233, 255, 0.48);
}

.card {
   margin:5px;
   padding:30px;
  width: 300px;
  height: 300px;
  background: #fff;
  border-top-right-radius: 50px;
  border-bottom-left-radius: 50px;
  overflow: hidden;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  position: relative;
  box-shadow: 0 14px 26px rgba(0,0,0,0.04);
  transition: all 0.3s ease-out;
  text-decoration: none;
}

.card:hover {
  transform: translateY(-5px) scale(1.005) translateZ(0);
  box-shadow: 0 24px 36px rgba(0,0,0,0.11),
    0 24px 46px var(--box-shadow-color);
}

.card:hover .overlay {
  transform: scale(4) translateZ(0);
}

.card:hover .circle {
  border-color: var(--bg-color-light);
  background: var(--bg-color);
}

 

.card:hover p {
  color: var(--text-color-hover);
}

.card:active {
  transform: scale(1) translateZ(0);
  box-shadow: 0 15px 24px rgba(0,0,0,0.11),
    0 15px 24px var(--box-shadow-color);
}

  
				 /* end new code */


      /* Get 24*7 Help With Assignment Online at Assignment in Need! */
	</style>
	<section class="banner-section-three header-section" >
		<div class="auto-container" style="margin-top: 100px;">
			<div style="text-align: center;">
				<ul class="page-breadcrumb">
					<li><a href="/">Home</a></li>
					<li>Engineering Assignment Online</li>
				</ul>
            </div>
            <div class="row clearfix">
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<h1 class="text-center">Get Engineering Assignment Help Now At 40% OFF! </h1>
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
    <!-- Engineering Assignment Help -->
       <section class="py-0">
         <div class="auto-container">
            <div class="row clearfix">
                <div class="title-column col-lg-12 col-md-12 col-sm-12">
                     <div class="inner-column">
                        <div class="title-box">
                            <div class="section-color-layer"></div>
                            <h2 style="font-weight:500; font-size:30px; color:black;" class="my-4">Engineering Assignment Help</h2>
                             <p>We're always amazed by the incredible things engineers create. And rightly so because these achievements are a product of years of hard work and learning especially through writing and research. 
                             </p>
                             <p>But let's be honest, many engineering students need engineering assignment help because they find writing assignments pretty tough.</p>
                             <p>One reason is that balancing assignments can be really challenging. This gets even more challenging when you're already busy with other studies and activities. Engineering papers can feel very overwhelming especially with so many topics to handle.</p>
                             <p>Most students often find services that aren't very clear or don't offer enough support when they look for an engineering assignment helper. If you're feeling frustrated and stuck with your engineering assignments then we at Assignment in Need might be just what you need to get back on track.
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

    <!-- Best Engineering Assignment Writing Help Services in UK -->
         <section class="py-0">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="title-column col-lg-12 col-md-12 col-sm-12 ">
                        <div class="inner-conlumn">
                            <div class="title-box">
                                <div class="section-color-layer"></div>
                                <h2 style="font-size:30px; color:black; font-weight:500;" class="my-4">Best Engineering Assignment Writing Help Services in UK</h2>
                                <p>Need help with your civil engineering assignment and other engineering assignments? but don't know where to begin? Don't worry our UK-based engineering assignment help is here for you! </p>
                                <p>We offer all the features you need to succeed. Before we talk about all the benefits we provide, we want you to know that our services are built on trust, so you can rely on us with confidence. Here's how our online engineering assignment help can benefit you:
                                  <ul>
                                    <li>1. We guarantee that you get plagiarism-free work and all your assignments will be original and free from any plagiarism.</li>
                                    <li>2. Our team will polish your assignment by proofreading and editing for free to make sure it's clear and well-written.</li>
                                    <li>3. Our assignments are crafted to meet all requirements which reduces the chance of rejection.</li>
                                    <li>4. We make sure that your assignment is free from any errors.</li>
                                    <li>5. We prioritize safety and keep your assignment and personal information safe and secure.</li>
                                    <li>6. Our services offer affordable prices to fit your budget.</li>
                                    <li>7. We want you to get help when you need it. That is why we offer fast assistance.</li>
                                    <li>8. With us you get a variety of referencing styles like Vancouver, APA, Oxford, Harvard, MLA, Chicago, and more.</li>
                                  </ul>
                                </p>
                                 <p>You can access our online Engineering Assignment help at any time with 24/7 support at Assignment in Need.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </section>

         <!-- Engineering Assignment Writers for All Types of Subjects -->

            <!-- <section class="py-0">
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="title-column col-lg-12 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <div class="title-box">
                                    <h2 style="font-size:30px; color:black; font-weight:500;" class="my-4">Engineering Assignment Writers for All Types of Subjects</h2>
                                     <p>Engineering is a broad field with many branches, and our engineering assignment helper has deep knowledge in all of them. We've been helping students with their engineering assignments for years. Here's a quick look at how we can help:</p>
                                 
                                     <p><b>Computer Science Engineering: </b> Computers are everywhere, and with their growing importance in fields like IT, banking, and healthcare, the demand for computer science engineers is higher than ever. Our writers, who have degrees in computer science engineering, are ready to help you with any assignment in this field.</p>
                                     <p><b>Mechanical Engineering: </b> This branch is all about using physics and engineering math to design and build machinery. Mechanical engineers work in industries like metal, steel, and automotive. Our mechanical engineering assignment helps you to dive deeper into key topics like materials science, structural analysis, and thermodynamics.</p>
                                     <p><b>Electronics & Communication Engineering: </b> In this field, you'll learn about power electronics, semiconductor devices, and integrated circuits. It's a field with fantastic job opportunities, and our expert writers are here to provide engineering homework help in electronics and communication engineering. </p>
                                     <p><b>Automation & Robotics Engineering: </b>  If you're fascinated by robots and automation, this is the branch for you. From robotic sensors to artificial intelligence, our engineering assignment writers are here to help you succeed.
                                     </p>
                                     <p><b>Civil Engineering: </b> Look around, and you'll see the work of civil engineers everywhere—from roads to buildings to bridges. Our experienced civil engineering writers are ready to help you tackle any assignment challenges you face.</p>
                                     <p><b>Electrical Engineering: </b>  This branch covers the application of electricity and electronics. Electrical engineers work in areas like renewable energy and power generation. If you want to excel in electrical engineering but need help with your assignments, we're here to support you.</p>
                                     <p><b>Aeronautical Engineering: </b>  This exciting field is all about designing and testing aircraft. With the demand for aeronautical engineers on the rise, our knowledgeable writers can help you with any related assignment.
                                     </p>
                                     <p><b>Chemical Engineering: </b>  From studying polymers to pharmaceuticals, chemical engineering covers a lot. Our experts have helped many students with their chemical engineering assignments, freeing up their time to focus on learning.</p>
                                     <p><b>Biotechnology Engineering: </b> Biotechnology is a growing field with lots of job potential in areas like healthcare and agriculture. Our skilled engineering assignment helper can assist you with assignments in this exciting sector.</p>
                                    <p>This is not it, you can also get help from our expert writers in other engineering fields like agricultural engineering, aerospace engineering, marine engineering, and metallurgical engineering. You can achieve academic success with our engineering help available around the world.
                                    </p>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
			 <!-- new code -->
			 <section class="news-section-four py-0">
	 
             	<div class="auto-container">
	 
		<div class="row clearfix ">
 
			<!-- Blocks Column -->
			<div class="blocks-column col-lg-12 col-md-12 col-sm-12 py-4 ">
			<div class="title-box">
				 
				 <h2 style="font-weight:500; font-size: 30px;; color:black" class="my-4" >Engineering Assignment Writers for All Types of Subjects</h2>
				 <p>Engineering is a broad field with many branches, and our engineering assignment helper has deep knowledge in all of them. We've been helping students with their engineering assignments for years. Here's a quick look at how we can help:</p>
		
			 </div>
		 
				<div class="inner-column">
					<div class="row clearfix">
						<!-- Column -->
						<div class="column col-lg-4 col-md-4 col-sm-12 border py-4">
							<!-- News Block Four -->
							<div >
							<div class="inner-box wow fadeInUp animated" >
									<div class="text">
									<p><b>Computer Science Engineering: </b> Computers are everywhere, and with their growing importance in fields like IT, banking, and healthcare, the demand for computer science engineers is higher than ever. Our writers, who have degrees in computer science engineering, are ready to help you with any assignment in this field.</p>
									</div>
								 
								</div>
							</div>
						</div>
						<!-- Column -->
						<div class="column col-lg-4 col-md-4 col-sm-12 border py-4">
							<!-- News Block Four -->
							<div  >
							<div class="inner-box wow fadeInUp animated" >
									<div class="text">
									<p><b>Mechanical Engineering: </b> This branch is all about using physics and engineering math to design and build machinery. Mechanical engineers work in industries like metal, steel, and automotive. Our mechanical engineering assignment helps you to dive deeper into key topics like materials science, structural analysis, and thermodynamics.</p>
									</div>
									 
								</div>
							</div>
						</div>
						<div class="column col-lg-4 col-md-4 col-sm-12 border py-4">
							<!-- News Block Four -->
							<div  >
							<div class="inner-box wow fadeInUp animated" >
									<div class="text">
									<p><b>Electronics & Communication Engineering: </b> In this field, you'll learn about power electronics, semiconductor devices, and integrated circuits. It's a field with fantastic job opportunities, and our expert writers are here to provide engineering homework help in electronics and communication engineering. </p>
                                  
									</div>
								 
								</div>
							</div>
						</div>
						<div class="column col-lg-4 col-md-4 col-sm-12 border py-4">
							<!-- News Block Four -->
							<div  >
							<div class="inner-box wow fadeInUp animated" >
									<div class="text">
									<p><b>Automation & Robotics Engineering:</b>If you're fascinated by robots and automation, this is the branch for you. From robotic sensors to artificial intelligence, our engineering assignment writers are here to help you succeed.
                                     </p>
                                   
									</div>
								 
								</div>
							</div>
						</div>
						<div class="column col-lg-4 col-md-4 col-sm-12 border py-4">
							<!-- News Block Four -->
							<div  >
								<div class="inner-box wow fadeInUp animated" >
									 
									<div class="text">
									<p><b>Civil Engineering: </b> Look around, and you'll see the work of civil engineers everywhere—from roads to buildings to bridges. Our experienced civil engineering writers are ready to help you tackle any assignment challenges you face.</p>
                                  
									</div>
						 
								</div>
							</div>
						</div>
						<div class="column col-lg-4 col-md-4 col-sm-12 border py-4">
							<!-- News Block Four -->
							<div  >
							<div class="inner-box wow fadeInUp animated" >
									<div class="text">
									<p><b>Electrical Engineering: </b>  This branch covers the application of electricity and electronics. Electrical engineers work in areas like renewable energy and power generation. If you want to excel in electrical engineering but need help with your assignments, we're here to support you.</p>
                               
									</div>
								 
								</div>
							</div>
						</div>
						<div class="column col-lg-4 col-md-4 col-sm-12 border py-4">
							<!-- News Block Four -->
							<div  >
							<div class="inner-box wow fadeInUp animated" >
									<div class="text">
									<p><b>Aeronautical Engineering: </b>  This exciting field is all about designing and testing aircraft. With the demand for aeronautical engineers on the rise, our knowledgeable writers can help you with any related assignment.
                                     </p>
                                  
									</div>
								 
								</div>
							</div>
						</div>
						<div class="column col-lg-4 col-md-4 col-sm-12 border py-4">
							<!-- News Block Four -->
							<div  >
							<div class="inner-box wow fadeInUp animated" >
									<div class="text">
									<p><b>Chemical Engineering: </b>  From studying polymers to pharmaceuticals, chemical engineering covers a lot. Our experts have helped many students with their chemical engineering assignments, freeing up their time to focus on learning.</p>
                                
									</div>
									 
								</div>
							</div>
						</div>
						<div class="column col-lg-4 col-md-4 col-sm-12 border py-4">
							<!-- News Block Four -->
							<div  >
							<div class="inner-box wow fadeInUp animated" >
									<div class="text">
									<p><b>Biotechnology Engineering: </b> Biotechnology is a growing field with lots of job potential in areas like healthcare and agriculture. Our skilled engineering assignment helper can assist you with assignments in this exciting sector.</p>
                                
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

            <!-- Why UK Students Need Customized Engineering Assignment Writing Services Online -->
              <section class="py-0">
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="title-column col-lg-12 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <div class="title-box">
                                    <div class="section-color-layer"></div>
                                    <h2 style="font-size:30px; color:black; font-weight:500;" class="my-4">Why UK Students Need Customized Engineering Assignment Writing Services Online</h2>
                                    <p>Well nobody likes assignments but whether you like it or not, you still have to submit them to get good grades. Getting your assignment done on time can get even more difficult if you have to juggle it with your part time jobs and other academic necessities. </p>
                                    <p>If you are a student studying in the UK who also faces such problems then you can try getting customized engineering assignment writing services online. These online services are perfect for the times when you don't want to compromise on any aspect of your life while maintaining good grades. If you are still on edge, check out some of the reasons why you should get engineering assignment writing help in the UK.</p>
                                     <h3>Expert Help</h3>
                                     <p>Many writing services in the UK have expert writers who know exactly how to handle tough and lengthy assignments. They're experienced, so they can easily meet the different requirements given to students and cover a wide range of topics effectively.</p>
                                     <h3>Save Time</h3>
                                     <p>As a student, managing your time can be really challenging. Many students also work while studying, and others have additional responsibilities, like married students with children who are determined to continue their education. For all these students, getting guidance from a service like this can save valuable time.</p>
                                      <h3>Proofreading and Editing</h3>
                                      <p>If you prefer to write your assignment yourself but want a professional to proofread and edit it, you can easily get online Engineering Assignment help. Just reach out to these services, discuss your work, and they'll connect you with expert editors who will polish your essay.</p>
                                      <h3>Affordable Services</h3>
                                      <p>Worried about the cost? Don't be! Many services offer quality assistance at affordable prices. It's all about finding the right service that's both budget-friendly and effective.</p>
                                         <h3>Assistance with Completing Your Assignment</h3>
                                         <p>Sometimes, you might start an assignment but get stuck and not know how to move forward. Assignment help companies can step in and help you finish your work if you're having trouble completing it.</p>
                                        <p>There are plenty of writing companies out there ready to help students complete and submit their assignments on time. Keep in mind, these services are meant for reference purposes, so you can use the papers they provide as a guide to write your own assignment.</p>
                                        </div>
                            </div>
                        </div>
                    </div>
                </div>
              </section>

              <!-- Personalized Engineering Assignment Support Services -->
            <section class="py-0">
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="title-column col-lg-12 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <div class="title-box">
                                    <div class="section-color-layer"></div>
                                    <h2 style="font-size:30px; color:black; font-weight:500;" class="my-4">Personalized Engineering Assignment Support Services</h2>
                                    <p>At Assignment in Need, our expert engineering assignment helper are always here to make engineering assignments a little less daunting for students all over the world. It doesn't matter where you live, be it the UK or Canada, you can get expert assistance from our expert writer around the clock.</p>
                                   <p>Our skilled writers are always ready to take on your engineering assignments and explain complex concepts in a way that's easy for you to understand. Engineering might be tough, but with our support, it can also be exciting and rewarding.</p>
                                   <p>There is a reason why students from across the world reach out to us. So why do they do that? well because they're aiming for top grades and future success. Even with talent and a strong academic background, getting our help can give you the edge you need to stand out. We're committed to helping you excel academically, so you can impress interviewers and land great jobs. Our goal isn't just to help you with one assignment—it's to support you in building a successful career. We put a lot of care and effort into your assignments to make sure they're not just good, but truly exceptional.
                                   </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Benefits Of Choosing Engineering Assignment in Need -->
           <!-- <section class="py-0">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="title-column col-lg-12 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="title-box">
                                <div class="section-color-layer"></div>
                                 <h2 style="font-size:30px; color:black; font-weight:500;" class="my-4">Benefits Of Choosing Engineering Assignment in Need</h2>
                                 <p>Still on edge about choosing Assignment in Need? Below we have listed some of the top reasons why students across the world choose us for their assignment writing needs:</p>
                              
								 <h3>Expert Guidance</h3>
                                 <p>Tap into a network of professionals who are experts in various academic fields, including engineering to help you with your assignments.</p>
                                  <h3>Personalized Assistance</h3>
                                  <p>Every student has a different assignment need so it is only fair to get assignment help that is tailored to your unique learning needs and goals.</p>
                                  <h3>24/7 Availability</h3>
                                  <p>Academic emergencies can come anytime of the day. That is why we're here whenever you need us, so you can get engineering assignment help around the clock.</p>
                                   <h3>High-Quality Content</h3>
                                   <p>Your assignments can make and break your grades that is whey we provide top-notch engineering support that meets high academic standards.</p>
                                   <h3>Affordable Prices</h3>
                                   <p>We believe money should not be the reason why you don't get the assignment help you need. Our services are competitively priced, making expert help accessible to all students.</p>
                                    <h3>Free Unlimited Modifications</h3>
                                    <p>Once we submit your assignment, you can get free revisions until your assignment is just the way you want it.</p>
                             
								</div>
                        </div>
                    </div>
                </div>
            </div>
           </section> -->
                  <!-- new code -->
		<section class="py-0">
			<div class="auto-container">
			<h2 style="font-size:30px; color:black; font-weight:500;" class="my-4">Benefits Of Choosing Engineering Assignment in Need</h2>
                                 <p>Still on edge about choosing Assignment in Need? Below we have listed some of the top reasons why students across the world choose us for their assignment writing needs:</p>
                              
				<div class="row clearfix">
                 <div class="col-lg-4 col-md-6 col-sm-12"> 
					<div   class="card education">
                      
                         <div class="circle">
						 <h3>Expert Guidance</h3>
                         </div>
						 
						 <p>Tap into a network of professionals who are experts in various academic fields, including engineering to help you with your assignments.</p>
                      
						 
						         
                         </div>
                    </div>
                 <div class="col-lg-4 col-md-6 col-sm-12"> 
                  <div class="card credentialing ">
                     
                       <div class="circle">
					   <h3>Personalized Assistance</h3>
                             </div>
							 <p>Every student has a different assignment need so it is only fair to get assignment help that is tailored to your unique learning needs and goals.</p>
                             
                             </div>
                           </div>


                     <div class="col-lg-4 col-md-6 col-sm-12"> 
                       <div   class="card human-resources ">
                       
                            <div class="circle">
							<h3>24/7 Availability</h3>
                                   </div>
								   <p>Academic emergencies can come anytime of the day. That is why we're here whenever you need us, so you can get engineering assignment help around the clock.</p>
                               
                                </div>
                    </div>


                    <div class="col-lg-4 col-md-6 col-sm-12"> 
                        <div class="card  education ">
                   
                               <div class="circle">
							   <h3>High-Quality Content</h3>
                                </div>
								<p>Your assignments can make and break your grades that is whey we provide top-notch engineering support that meets high academic standards.</p>
                               
                        </div>
                   </div>

				   <div class="col-lg-4 col-md-6 col-sm-12"> 
                        <div class="card credentialing ">
                         
                               <div class="circle">
							   <h3>Affordable Prices</h3>
                                </div>
								<p>We believe money should not be the reason why you don't get the assignment help you need. Our services are competitively priced, making expert help accessible to all students.</p>
                               
                        </div>
                   </div>
				   <div class="col-lg-4 col-md-6 col-sm-12"> 
                        <div class="card human-resources ">
                             <div class="circle">
							   <h3>Free Unlimited Modifications</h3>
                                </div>
								<p>Once we submit your assignment, you can get free revisions until your assignment is just the way you want it.</p>
                             
                        </div>
                   </div>
				  

                 </div>
                </div>
		</section>	
				  <!-- end new code -->

           <!-- The Best Civil Engineering Assignment Help Is Just a Few Clicks Away -->
              <section class="py-0">
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="title-column col-lg-12 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <div class="title-box">
                                    <h2 style="font-weight:500; color:black; font-size:30px;" class="my-4">The Best Civil Engineering Assignment Help Is Just a Few Clicks Away</h2>
                                    <p>Civil engineering is all about building and developing structures, and it's one of the oldest engineering fields out there. It covers a wide range of areas, like structural engineering, agricultural engineering, control engineering, and more. With so much to learn, it’s no wonder that students sometimes need a bit of extra help. That's where we come in. If you're feeling stuck with your civil engineering assignments, our expert writers are here to help you out. At Assignment in Need, we're always ready to support you in achieving your academic goals with our civil engineering assignment help.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </section>

              
		  <!-- Frequently asked questions -->
                   <section class="faq-section">
                    <div class="auto-container">
                        <div class="row clearfix">
                            <div class="column col-lg-12 col-md-12 sm-12">
                               <div class="title-box">
                                <h2 style="font-size:30px; color:black; font-weight:500;">Frequently asked questions</h2>
                               </div>
                               <ul class="accordion-box">
                                <li class="accordion block">
                                 <div class="acc-btn">1. Can you help me with engineering coursework?<div class="icon fa fa-angle-down"></div></div>
                                 <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                            <p>Absolutely! We specialize in helping students with all types of engineering coursework. Whether you're struggling with a tough project, need help understanding complex concepts, or just want to ensure your work is top-notch, we're here to assist you. Our expert writers have extensive experience in various branches of engineering, so you can be confident that your coursework will be handled with care and precision.</p>
                                        </div>
                                    </div>
                                 </div>
                                </li>
                                <li class="accordion block">
                                    <div class="acc-btn">2. Is your service pocket-friendly? <div class="icon fa fa-angle-down"></div></div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">
                                                <p>Yes, our services are designed to be budget-friendly for students. We understand that managing expenses while studying can be challenging, so we offer competitive pricing to ensure you get the help you need without breaking the bank. Quality help doesn’t have to come with a hefty price tag!
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion block">
                                    <div class="acc-btn">3. What are the prices for engineering assignment writing services? <div class="icon fa fa-angle-down"></div></div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">
                                                <p>The cost of our engineering assignment writing services varies depending on factors like the complexity of the assignment, the deadline, and the length of the work. We offer a range of pricing options to fit different budgets. You can contact us for a detailed quote tailored to your specific needs.</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion block">
                                    <div class="acc-btn">4. What is the best website for engineering assignment help? <div class="icon fa fa-angle-down"></div></div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">
                                                <p>There are many great websites for engineering assignment help, but we believe our service stands out because of our commitment to quality, affordability, and personalized support. Our team of expert writers is dedicated to helping you achieve the best results, making us a top choice for students seeking engineering assignment help.</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion block">
                                    <div class="acc-btn">5. Can someone write my assignment for me? <div class="icon fa fa-angle-down"></div></div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">
                                                <p>Yes, we can! If you're feeling overwhelmed or simply need assistance, our experienced writers are ready to take on your assignment. We’ll work closely with you to understand your requirements and deliver a well-written, high-quality assignment that meets your academic standards.</p>
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