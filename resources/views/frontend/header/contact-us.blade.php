@extends('frontend-layouts.app')

@section('content')
<style>
	@media screen and (max-width: 768px) {
		#testimonial-video {
			width: 100%; /* Set the width to 100% when div goes to col-12 */
			height: auto; /* Set the height to auto to maintain aspect ratio */
		}
		
	}

	.testimonial-block-four .video {
		margin-top: 15px;
	}

	.testimonial-block-four .video video {
		width: 80%;
		height: 250px;
		border-radius: 15px;
	}
</style>
<style>
	.featured-section .feature-block:nth-child(2n + 1) {
		margin-top: 0px;
	}

	.text {
		color: #0c0d24;
		line-height: 1.8em;
		font-size: 16px;
	}

	.text-black {
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
	.header-section {
		background: rgb(255, 255, 255);
		background: linear-gradient(170deg, rgba(255, 255, 255, 1) 6%, rgba(135, 166, 219, 0.4009978991596639) 72%, rgba(135, 166, 219, 0.5690651260504201) 91%, rgba(126, 137, 221, 0.865983893557423) 100%);
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
		color: black;
		text-align: justify;
	}

	.place-order {
		background: #d7f0fd;
		color: black;
		padding: 10px 20px;
		border-radius: 5%;
		margin: 10px;
	}

	.place-now {
		background: #77bfe5;
		color: black;
		padding: 20px 80px;
		border-radius: 3%;
		margin: 10px;
		font-weight: 500;
		font-size: 20px;
	}

	.place-order:hover {
		background: #7e89dd;
		color: white;

	}

	.place-now:hover {
		box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
		color: white;
		transition: box-shadow 0.4s ease-in-out, color 0.3s ease-in-out;
		/* Smooth transition */

	}

	.order-now {
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

	.banner-stats-title {
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
		padding: 0 10px;
		/* Adjust the space between elements */
	}

	.banner-stats-text {
		font-size: 1em;
		margin-top: 5px;
	}

	ul {
		font-size: 17px;
		color: black;
	}

	h3 {
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

	.current_offer {
		font-weight: bold;
		font-size: 35px;
	}

	.offer-container {
		background: rgb(221, 245, 245);
		background: -moz-linear-gradient(275deg, rgba(221, 245, 245, 1) 0%, rgba(175, 214, 232, 0.23012955182072825) 10%, rgba(155, 205, 231, 0.43461134453781514) 68%, rgba(110, 186, 231, 1) 100%);
		background: -webkit-linear-gradient(275deg, rgba(221, 245, 245, 1) 0%, rgba(175, 214, 232, 0.23012955182072825) 10%, rgba(155, 205, 231, 0.43461134453781514) 68%, rgba(110, 186, 231, 1) 100%);
		background: linear-gradient(275deg, rgba(221, 245, 245, 1) 0%, rgba(175, 214, 232, 0.23012955182072825) 10%, rgba(155, 205, 231, 0.43461134453781514) 68%, rgba(110, 186, 231, 1) 100%);
		filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#ddf5f5", endColorstr="#6ebae7", GradientType=1);
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

	.offer-badge-offer:hover {

		box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
		transition: box-shadow 0.4s ease-in-out, color 0.3s ease-in-out;
		/* Smooth transition */
	}

	.testimonial-section-three .owl-carousel .owl-stage-outer {
		padding: 0px 0px 0px;
	}

	.feature-section-three .blocks-column .feature-block-five:nth-child(2n + 0) {
		transform: translateY(0px);
	}

	.news-section-two .blocks-column .column:nth-child(1) .news-block-four {
		margin-top: 0;

	}

	.bg-gradient-1.rounded-box {
		padding: 20px;
		background-color: white;
		border-radius: 20px;
	}

	/* Style the list items with more space and consistent padding */
	.custom-list li {
		margin-bottom: 15px;
		/* Increase space between list items */
		padding-left: 10px;
		color: white
	}

	/* Style the image with rounded corners */
	.rounded-image {
		border-radius: 20px;
	}

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
</style>
<section class="banner-section-three header-section">
	<div class="auto-container" style="margin-top: 100px;">
		<div style="text-align: center;">
			<ul class="page-breadcrumb">
				<!-- <li><a href="/">Home</a></li>
					<li>Assignment In Need Australia</li> -->
			</ul>
		</div>
		<div class="row clearfix">
			<div class="info-column col-lg-6 col-md-12 col-sm-12" >
					<div class="inner-column" >
    					<div class="title-box">
                            <div class="section-color-layer"></div>
                            <h2 style="font-weight:500; font-size: 30px; color:black" class="my-4">Get In Touch</h2>
                            
                            <h3 style="font-weight:500; font-size: 20px; color:black" class="my-4">United Kingdom <img src="data:image/png;base64,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" alt="UK Flag" width="25"></h3>
                            <p><b>Address:</b> Society barn the street, Assington,</br> Sudbury, CO105 LW</p>
                            <p><b>Phone:</b> +44 2037695831</p>
                        
                            <h3 style="font-weight:500; font-size: 20px; color:black" class="my-4">India <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAN0AAACUCAMAAAAgTdyMAAAAz1BMVEUTiAj/mTP///8Qcgf/nDQTiwjPgCv/khj/yZ73+vZVolQAgwDNzc0AAEwAAFEAAFgAAEjn5+4AAET29vgAAEDv7/Tg4OjY2OPQ0NvGxtObm7S1tcePj6yjo7rBwdC6usqrbCbPexXPpYCsrMF3d5ldXYM3N2NqapF/f6BISHc9PWwjI1gAADhHh0UQYAkAADIfH2ZQUHk0NGoLC1oaGlVjY4JFRW0SElQyMm5TU3VVVYSRkacuLk+IiJhiYnV6epCjo7BCQlsVFV8AACc7O12EBAoBAAAFQUlEQVR4nO2a63LjJhSA3ZPu9rYgyYiLhEC7K3R1dpvYceLYde1N8/7PVHC2fYKiGVy+RDNK9AO+4cCBIy0+vr9ePi7e/3i9vLd2P1wr0S5col24RLtwiXbhEu3CJdqFS7QLl2gXLtEuXKJduES7cIl24RLtwiXahUu0C5doFy7RLlyiXbhEu3CJduES7cIl2oXL1dt9+ul6+bT4/PP18nnxAa6XD9EuWKLdfwUtmrIqJSeztTiXHRV9epsvl+7397uSzWM4j10mxxwhhPF0P2F7s0yNmMNvFru6RSh5MfUwFVyvD+c2wWgzMP8Nz2FnHlB+l29pRjLgkAFjj2ma4q7w3rJ/OzqmSaKAEJD2r8ZeGighPU7y0nPT/u1oa6dbS9xCKe1VAXAbkoTTXYrRwfPk827Xo+VQC6AagNUAA0BplTQhWq7RU+O3cd92Q4oMpfZGMyBWrbfDR0C4KUfZHX7gXlv3bFfkybIHbh14A8RQGEEooCoDEBxGhBOfrXu2IxNeG2FTgh2rsoBSkx0camhsQGr3r+en9OCxec92DX65zCxS1sANyDLbgRFsT0C5BRRYizufac+rHd3ilSC1XUWIkWCU6Hln1bY1HJR7rEnzhH2mBa92GidLG3nKjh/ZS/JHsZddcSwnOB7ceNrhO6a4zfx1wKcdOaTYrR8gek3oTpbtQY+y+pOfjiRTPbs8QYnHLYtPO7tLaYE5PXroC7GWh6HoZdUcj+LcXuaj3Zzdph5znlc7lJaQ8aYUbpC2elC1No2uzs3zIQMiVMMz2KXG34bFpx3Pk5S7ASrHsWFybAqzepoqYQzn1Xosmc3yPMUj9dYDn3Z1nrx+7zkz37Za2kmW4NXA5PNr9f1B8YA3/pYVn3bNMqGUcVEUhdZ1OVQ7nCQJMlVlQ7SudSE4IwolYdqp5Utm7Yq6KathUI1KHKjVWh2soaytHa0RDtPOjt2/qVqYtclaG5nJspLTffWPEelDtdN58pddLoHyqusGXhi53uAXI3tdm25SblGBIce7MFcVluMeMlaUQ01BPhtZ6qqvtKr71h7P66oUjGY2UsO0o5ulAibcnoSfjD6eGiWqRsn2rPuTC8fM5rskrcLMd6RPd5c5Rape0PNWnJTey3LLVpIU+7fDg16mtbcO+N1FyxTb3Qqw3s6+8wnu1Knu9Hno6WiN5GAj8rRM1sJfB7zaiZ07ARXa3qojyG2216+szb5xaicekIZBidHJY+XI7+l1QB2jrveyBDIycco60nPRAh3cySAj582T9Ni+Xzv9gE+upK6tglLQKFd5KKDSQJQNSCInNHps3nfVqEcbdwqyA5WVFCpOJpANsJLY9YTBGiW514K074rfyq0rrqxXFEAMgA1KmwFqt5Iw2GNkvLbu205jPInMnuakGz4Ac6ln0tpeVCF07y+TO7zXoq3C9GyosBp1dqm0N/aWsazdJujRb7F2hrckJcJoS1xWb94u6sIyyzYYdx5T3YUZ3nA1K4zWYu2mHwGX+zhUVZNi9OixGvbGHO/vihahNL0vaHMglB4Ek5s0RU+D3znnmOXda1a+LJNk2m5wpczt4/Yuwflez/BqeaavAmiJblNXVXE/aX47zeE25xcdvBofu27VdY9t4z8m35j1axySccHmMnPEb43Cxdr9cr18WHz59Xr5srj57Xq5Wdy8W1wr76JdsES7cIl24RLtwiXahUu0C5doFy7RLlyiXbhEu3CJduES7cIl2oVLtAuXaBcu0S5col24RLtwiXbhEu3CJdqFS7QLl/+B3fVys/h6c718/Ru/liqZ3KRmoQAAAABJRU5ErkJggg==" alt="UK Flag" width="25"></h3>
                            <p><b>Address:</b> 410, Ashoka Palace, Shobhagpura,</br> Udaipur (Raj.), 313001</p>
                            <p><b>Phone:</b> +91 7976940309</p>
                        
                            <h3 style="font-weight:500; font-size: 20px; color:black" class="my-4">Email</h3>
                            <p>order@assignmentinneed.com</p>
                        </div>

					</div>
				</div>

			<div class="image-column col-lg-6 col-md-12 col-sm-12">
				<div class="inner-column mr-0 pb-0 pl-0"
					style="background-color: white; border-radius: 10px;box-shadow: 10px;box-shadow: 0 1rem 1rem 0 rgba(0, 0, 0, .08)">
					@if ($errors->any())
						<div id="errorAlert" class="alert alert-danger mt-5">
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						<script>
							setTimeout(function () {
								document.getElementById('errorAlert').style.display = 'none';
							}, 10000); // Hide the error message after 10 seconds (10000 milliseconds)
						</script>
					@endif
					<div class="offer-badge"><img src="assets/media/avatars/offer.png" alt=""></div>
					<form id="orderForm" action="/neworder-fromhome" method="POST" enctype="multipart/form-data">
						<div class="form-header text-center p-2">
							<h2 class="order-now">Leave Message</h2>
						</div>
						@csrf
						<div class="contact-form p-4">
						
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label for="">Name</label>
											<input type="text" name="user_name" class="form-control input-color"
												placeholder="Your Full Name*" required=""
												style="background-color:#f1f1f1; height: 45px;">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label for="">Email</label>

											<input type="email" name="email" class="form-control"
												placeholder="Your Email Address*" required=""
												style="background-color:#f1f1f1; height: 45px;">
										</div>
									</div>
								</div>
								<input type="hidden" name="countrycode" id="country_c">
								<div class="row">
									<div class="col-md-12" style="width:100%">
										<div class="form-group">
											<label for="">Number</label>
											<input type="tel" name="mobile" class="form-control" placeholder="Phone*"
												id="phone_number" style="background-color:#f1f1f1;height: 45px;" />
										</div>
									</div>
								
									<div class="col-md-12">
										<div class="form-group">
											<label for="enterTopic">Message</label>
                                            <textarea class="form-control" name="message" placeholder="Comment"  style="background-color:#f1f1f1;"></textarea>										
                                    </div>
								
								</div>
						
							<div class="col-md-12 text-center">
								<button class=" place-order" type="submit">Meesage</button>
							</div>
						</div>
					</form>
				</div>
			</div>
</section>
@endsection