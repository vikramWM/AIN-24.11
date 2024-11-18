@extends('frontend-layouts.app')

@section('content')
<style>
    /* Custom CSS for increasing the font size of <p> tags */
     h4 {
        color: #20c997; /* You can adjust the font size as needed */
    }
     h3 {
        color: black; /* You can adjust the font size as needed */
    }
	.feature-block-four {
			/* Add other styles here */
			padding: 20px; /* Example padding */
		}

		.inner-box {
			box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Shadow effect */
			padding: 20px; /* Example padding */
			border-radius: 10px; /* Rounded corners */
		}
		.inner-box p {
			font-size: 16px; /* Adjust the font size as needed */
			color: #000000; /* Black color */
		}
</style>
<!--  Banner Section -->


<section class="banner-section-three">
		<div class="pattern-layer-two" style="background-image: url(images/background/pattern-21.png)"></div>
		<div class="auto-container" style="margin-top: 100px;">
			<!-- Page Breadcrumb -->
			<div style="text-align: center;">
				<ul class="page-breadcrumb">
					<li><a href="/">Home</a></li>
					<li>Refund Policy</li>
				</ul>
            </div>
			
            <div class="row clearfix">
				
				<!-- Content Column -->
				<div class="content-column col-lg-8 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="pattern-layer-one" style="background-image: url(images/main-slider/pattern-1.png)"></div>
						<div class="icon-layer" style="background-image: url(images/icons/icon-2.png)"></div>
						<div class="icon-layer-two" style="background-image: url(images/icons/icon-5.png)"></div>
						<h2>We Resolve All Refund Requests as Per the Given Terms and Conditions:</h2>
                        
					</div>
				</div>
				
				<!-- Images Column -->
				<div class="image-column col-lg-4 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="icon-layer-three" style="background-image: url(images/icons/icon-3.png)"></div>
						<div class="icon-layer-four" style="background-image: url(images/icons/icon-2.png)"></div>
						<div class="icon-layer-five" style="background-image: url(images/icons/icon-4.png)"></div>
						<div class="image">
							<img src="images/resource/page-title-5.jpg" alt="" />
						</div>
						<div class="image-two">
							<img src="images/resource/page-title-4.jpg" alt="" />
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
<!-- End  Banner Section -->
<section class="relationship-section pt-0 pb-0 mt-0 mb-0">
		<div class="auto-container">
			
			<div class="row clearfix">
							
							<!-- Feature Block Four -->
							<div class="feature-block-four col-lg-12 col-md-12 col-sm-12">
								<div class="inner-box wow fadeInUp animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
									
									
									<h3>Expert's Unavailability:</h3>
									<p>
										When this case happens where an expert is not available for you help and you paid the full amount for assignment then you can order the new assignment of same price. Between this period, the full amount paid by you then you will get 10GBP additional bonus.</p>
								</div>
							</div>
							
							<!-- Feature Block Four -->
							<div class="feature-block-four col-lg-12 col-md-12 col-sm-12">
								<div class="inner-box wow fadeInUp animated" data-wow-delay="150ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 150ms; animation-name: fadeInUp;">

								
									<h3>When the Deadline is Missed:</h3>
									<p>
										When you give work to us then you will get an assigned writer. If your assigned writer is unable to help you complete your assignment at a given time then you can make a complaint regarding refund, which will be solved by our customer support team. If your information is not correct regarding the assignment and lack of information provided by you then we will be unable to do full or partial refund request. <br>

										In case you do not get help for your assignment within the given deadline by us because of our expert's inability then you will get 100% refund of your order. The amount can be used for the new assignment or can be transferred to your account. However, we will take straight action against the writer for the delay. The decision of our customer support team will be authentic and will be taken after analyzing the whole problem.</p>
								</div>
							</div>
							
							<!-- Feature Block Four -->
							<div class="feature-block-four col-lg-12 col-md-12 col-sm-12">
								<div class="inner-box wow fadeInUp animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
									

									<h3>Failed Grades on Work:</h3>
									<p>
										If you get a fail grade in your assignment then you will have to submit the feedback report within 60 days of your assignment received then you will able to get your refund. In this case, we will check your feedback report and investigate if the cause is due to the low writing quality or any other reason. We firmly suggest our clients take the feedback on the work from the tutor before going for the final submission in order to improve the grades. If any mistake is found in the writer's work, then we will process a 50-100% refund in your account. The final decision will be taken by our customer support team. Please note that any refund request will be valid only between 60 days of receiving your assignment</p>
								</div>
							</div>
							
							<!-- Feature Block Four -->
						
						
				
				
				
			</div>
		</div>
	</section>

@endsection