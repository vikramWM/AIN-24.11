<style>
    @media screen and (max-width: 1023px) {
        .logo-box {
            width: 100%;
            text-align: center;
            padding: 15px 0;
			
        }
		.main-header.header-style-three .header-lower .logo-box {
			background-color:transparent;
			
		}
        .logo {
            display: inline-block;
        }
		
    }
	.main-header.header-style-three .header-lower .logo-box {
    	position: relative;
	}

	.top-bar {
    width: 100%;
	background: rgb(0,127,193);
background: linear-gradient(281deg, rgba(0,127,193,0.5718662464985995) 11%, rgba(71,199,204,1) 53%, rgba(0,127,193,1) 100%);
	padding: 10px 0;
    color: white;
    font-family: Arial, sans-serif;
    position: relative;
}

.content-wrapper {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 80%;
    margin: 0 auto;
    flex-wrap: wrap;
}

.contact-item {
    display: flex;
    align-items: center;
    font-size: 16px;
}

.contact-item a {
    color: white;
	font-size: 20px;
    text-decoration: none;
    margin-right: 10px;
}

.contact-item i {
    margin-right: 5px;
}

.offer-section {
    display: flex;
    align-items: center;
    justify-content: flex-end;
}

.offers {
    background-color: red;
    padding: 5px 10px;
    margin-right: 15px;
    border-radius: 10%;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
    transition: all 0.3s ease-in-out;
    animation: rotateAnimation 1s infinite ease-in-out; /* Adjusted for smooth rotation */
}

@keyframes rotateAnimation {
    0% {
        transform: rotate(0deg); /* Starting position */
    }
    50% {
        transform: rotate(15deg); /* Rotate clockwise to 90 degrees */
    }
    100% {
        transform: rotate(0deg); /* Return back to 0 degrees */
    }
}




.offer:hover, .order:hover {
    box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;
}

.divider {
    color: white;
    margin: 0 10px;
}

/* Responsive layout */
@media (max-width: 768px) {
    .content-wrapper {
        flex-direction: column;
        align-items: center;
    }

    .contact-item {
        display: none; /* Hide contact information on mobile */
    }

    .offer-section {
        display: flex;
        justify-content: center;
        width: 100%;
    }

    .offer-section > div {
        display: inline; /* Show offer in one line */
    }

    .divider {
        display: none;
    }
}

@media (min-width: 769px) {
    .content-wrapper {
        flex-direction: row;
        justify-content: space-between;
    }
}
</style>
<style>
	
	.navbar-collapse .navigation > li > ul > li > ul {
		max-height: 300px;
		overflow-y: auto;
		overflow-x: hidden;
		scrollbar-width: thin; 
		scrollbar-color: #00c6ff #f1f1f1; 
	}

	
	.navbar-collapse .navigation > li > ul > li > ul::-webkit-scrollbar {
		width: 12px; 
		height: 30px; 
	}

	
	.navbar-collapse .navigation > li > ul > li > ul::-webkit-scrollbar-track {
		background: #f9f9f9;
		border-radius: 10px;
		box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1); 
	}

	
	.navbar-collapse .navigation > li > ul > li > ul::-webkit-scrollbar-thumb {
		background: linear-gradient(180deg, #4facfe, #00f2fe); 
		border-radius: 15px; 
		min-height: 30px; 
		box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3); 
		transition: background 0.3s ease, box-shadow 0.3s ease; 
	}

	
	.navbar-collapse .navigation > li > ul > li > ul::-webkit-scrollbar-thumb:hover {
		background: linear-gradient(180deg, #00f2fe, #4facfe); 
		box-shadow: 0 4px 15px rgba(0, 0, 0, 0.4); 
	}

	
	.navbar-collapse .navigation > li > ul > li > ul {
		scrollbar-width: thin;
		scrollbar-color: #4facfe #f9f9f9; 
	}
	
	
	.navbar-collapse .navigation > li:nth-child(5) > ul {
		max-height: 300px;
		overflow-y: auto;
		overflow-x: hidden;
		scrollbar-width: thin; 
		scrollbar-color: #00c6ff #f1f1f1; 
	}

	
	.navbar-collapse .navigation > li:nth-child(5) > ul::-webkit-scrollbar {
		width: 12px; 
		height: 30px; 
	}

	
	.navbar-collapse .navigation > li:nth-child(5) > ul::-webkit-scrollbar-track {
		background: #f9f9f9;
		border-radius: 10px;
		box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1); 
	}

	
	.navbar-collapse .navigation > li:nth-child(5) > ul::-webkit-scrollbar-thumb {
		background: linear-gradient(180deg, #4facfe, #00f2fe); 
		border-radius: 15px; 
		min-height: 30px; 
		box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3); 
		transition: background 0.3s ease, box-shadow 0.3s ease; 
	}

	
	.navbar-collapse .navigation > li:nth-child(5) > ul::-webkit-scrollbar-thumb:hover {
		background: linear-gradient(180deg, #00f2fe, #4facfe); 
		box-shadow: 0 4px 15px rgba(0, 0, 0, 0.4); 
	}

</style>

<header class="main-header header-style-three fixed-header" >
<div class="top-bar">
    <div class="content-wrapper">
        <div class="contact-item">
            <a href="https://wa.me/1234567890" target="_blank" class="contact-link">
                <i class="fa fa-whatsapp"></i>
                <span class="contact-text">+44 7435256433</span>
            </a>
            <span class="divider">|</span>
            <a href="mailto:order@assignnmentinneed.com" target="_blank" class="contact-link">
                <i class="fa fa-envelope"></i>
                <span class="contact-text">order@assignnmentinneed.com</span>
            </a>
        </div>

        <div class="offer-section">
            <div class="offers"> <a href="Offers" style="color: white;">Offer</a> </div>
            <div style="font-size:20px; font-weight:700;"><a href="/upload-your-assignment" style=" color:white">40% Off On Your Every Order</a></div>
          
        </div>
    </div>
</div>


        <!-- Header Lower -->
        <div class="header-lower">
			<div class="lower-inner">
				<div class="outer-container">
					<div class="inner-container clearfix">
						
						<div class="pull-left logo-box p-0">
							<div class="logo"><a href="/"><img src="assets/media/layout/assignment_logo.webp" alt="" title="" width="80px" ></a></div>
						</div>
						
						
						<div class="pull-right nav-outer clearfix">
							<!-- Mobile Navigation Toggler -->
							<div class="mobile-nav-toggler"><span class="icon flaticon-menu-2"></span></div>
							<!-- Main Menu -->
							<nav class="main-menu show navbar-expand-md">
								<div class="navbar-header">
									<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
								
								<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
									<ul class="navigation clearfix">
										<li><a href="/">Home</a>
											
										<li class="dropdown"><a >Company</a>
											<ul>
												<!-- <li><a href="about">About Us</a></li> -->
												<li><a href="what-we-are">What We Are</a></li>
												<li><a href="why-choose-us">Why Choose Us</a></li>
												<li><a href="benefits-of-assignments">Benefits</a></li>
											</ul>
										</li>
										
										<li class="current dropdown">
											<a >Country</a>
											<ul>
												<li class="dropdown">
													<a >UK</a>
													<ul>
													    <li><a href="uk">UK</a></li>
														<li><a href="/uk/london">London</a></li>
														<li><a href="uk/birmingham/assignment-help">Birmingham</a></li>
														<li><a href="uk/manchester/assignment-help">Manchester</a></li>
													</ul>
												</li>
												<li class="dropdown">
													<a >Australia</a>
													<ul>
														<li><a href="au">Australia</a></li>
														<li><a href="au/sydney/assignment-help">Sydney</a></li>
														<li><a href="au/melbourne/assignment-help">Melbourne</a></li>
													</ul>
												</li>
												
												<li class="dropdown">
													<a >Spain</a>
													<ul>
														<li><a href="es">Spain</a></li>
														<li><a href="es/barcelona/assignment-help">Barcelona</a></li>
													</ul>
												</li>
												<li><a href="my">Malaysia</a></li>
												<li><a href="ae">UAE</a></li>
                                                <li><a href="canada">Canada</a></li>

											</ul>
										</li>
										<li class="current dropdown">
											<a >Services</a>
											<ul>
												
                                                <li class="dropdown"><a href="assignment-writing-uk">Assignment Writing</a>
        											<ul>
        												<li><a href="assignment-writing-help-services">Assignment Writing</a></li>
        												<li><a href="cheap-assignment-writing-help">Cheap Assignment Writing help</a></li>
        												<li><a href="help-with-assignment-online">Help With Assignment Online</a></li>
        												<li><a href="expert-assignment-writing-help">Expert Assignment Writers</a></li>
        												<li><a href="assignment-helper">Assignment Helper</a></li>
        												<li><a href="pay-for-assignment-help">Pay For Assignment Help</a></li>
														<li><a href="best-online-assignment-writing-service">Best Online Assignment Writing Service</a></li>
        												<li><a href="do-my-assignment-for-me">Do my Assignment for me</a></li> 
														<li><a href="my-assignment-help">My Assignment Help</a></li>
														<li><a href="instant-assignment-help">Instant Assignment Help</a></li>
														<li><a href="top-assignment-writing-help-service">Top Assignment Writing Help Service</a></li>
        												
                                             </ul>
        										</li>												
        										<li><a href="dissertation-writing-help-services">Dissertation Writing</a></li>
												<li><a href="essay-writing-help-services">Essay Writing</a></li>
												<li><a href="academic-assignment-writing-help-service">Academic Assignment Writing Help Service</a></li>
												<li><a href="research-paper-writing-services">Research Paper Writing</a></li>
												<li><a href="homework-writing-help-services">Homework Writing</a></li>
												<li><a href="coursework-writing-help">Coursework Writing</a></li>
											</ul>
										</li>
										<li class="dropdown"><a >Subjects</a>
											<ul>
												<li><a href="math-assignment-help">Math Assignment</a></li>
												<li><a href="chemistry-assignment-writing-help">Chemistry Assignment</a></li>
												<li><a href="economic-assignment-writing-help">Economic Assignment</a></li>
												<li><a href="english-assignment-writing-help">English Assignment</a></li>
												<li><a href="history-assignment-writing-help">History Assignment</a></li>
												<li><a href="geography-assignment-writing-help">Geography Assignment</a></li>
												<li><a href="law-assignment-writing-help">Law Assignment</a></li>
												<li><a href="linguistic-assignment-writing-help">Linguistic Assignment</a></li>
												<li><a href="nursing-assignment-writing-help">Nursing Assignment</a></li>
												<li><a href="physics-assignment-writing-help">Physics Assignment</a></li>
												<li><a href="sociology-assignment-writing-help">Sociology Assignment</a></li>
												<li><a href="philosophy-assignment-writing-help">Philosophy Assignment</a></li>
												<li><a href="statistics-assignment-writing-help">Statistics Assignment</a></li>
												<li><a href="accounting-assignment-writing-help">Accounting Assignment</a></li>
												<li><a href="marketing-assignment-writing-help">Marketing Assignment</a></li>
												<li><a href="computer-science-assignment-writing-help">Computer Science Assignment</a></li>
												<li><a href="engineering-assignment-writing-help">Engineering Assignment</a></li>
												<li><a href="finance-assignment-writing-help">Finance Assignment</a></li>
												<li><a href="programming-assignment-writing-help">Programming Assignment</a></li>
											</ul>
										</li>
										<li><a href="samples">Samples</a></li>
										<li><a href="upload-your-assignment">Order Now</a></li>
										<li><a href="pricing">Pricing</a></li>
										<li><a href="blog">Blog</a></li>
											
										
										<li><a href="contact-us">Contact </a></li>
									 </ul>
								</div>
							</nav>
							<!-- Main Menu End-->
							
							
								<!-- Login Box -->
								<!-- <ul class="login-box">
									<li><a  class="login">Login</a></li>
									<li><a  class="register">Sign Up</a></li>
								</ul> -->
								<!-- Outer Box -->
								<div class="outer-box">
									<!-- Search Btn -->
									<!-- <div class="search-box-btn search-box-outer"><span class="icon fa fa-search"></span></div> -->
									<!-- Cart Box -->
									<div class="cart-box">
										<div class="dropdown">
											<button class="cart-box-btn dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class='fas fa-user-alt' style='font-size:26px'></i></button>
											<div class="dropdown-menu pull-right cart-panel" aria-labelledby="dropdownMenu2" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 25px, 0px); top: 0px; left: 0px; will-change: transform;">

												<ul class="btns-boxed">
												@if(Auth::user())
												<div class="cart-product">
													<div class="inner">
														<div class="cross-icon"><span class="icon fa fa-remove"></span></div>
														<?php if (Auth::user()->photo) { ?>
															<div  class="image"><img style="border-radius: 20px;" src="<?php echo asset(Auth::user()->photo); ?> " alt="" /></div>
														<?php } else {?>
															<div  class="image"><imgstyle="border-radius: 20px;" src="assets/media/avatars/blank.png" alt="" /></div>
														<?php } ?>
														<h3><a href="shop-single.html"><?php echo Auth::user()->name; ?></a></h3>
														<div class="quantity-text"><?php echo Auth::user()->email; ?></div>
														<div class="quantity-text"><?php echo Auth::user()->mobile; ?></div>
														<!-- <div class="price">$99.00</div> -->
													</div>
											
													<ul class="btns-boxed">
														<li><a href="/myProfile">View Profile</a></li>
														<li>
														<a href="{{ route('logout') }}" 
															onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
															>Sign Out</a>
															<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
																@csrf
															</form>
														</li>

														<li class="mt-2"><a href="/MyOrders">My Orders</a></li>

													</ul>
												@else
													<li><a href="register">SignUp</a></li>
													<li><a href="login">LogIn</a></li>
												</ul>
												@endif

											</div>
										</div>
									</div>
								</div>
								
							</div>
						
						
					</div>
				</div>
			</div>
        </div>
        <!--End Header Upper-->
        
        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-multiply"></span></div>
            
            <nav class="menu-box mCustomScrollbar _mCS_1 mCS_no_scrollbar"><div id="mCSB_1" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" tabindex="0" style="max-height: 1013px;"><div id="mCSB_1_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">
                <div class="nav-logo" style="height: 50px; text-align: center;"><a href="/"><img src="assets/media/layout/assignment_logo.webp" alt="" title="" class="mCS_img_loaded" width="60px"></a></div>
                <div class="menu-outer">
					<!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
				
								<div class="navbar-header">
									<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
								
								<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
									
								</div>
							</div>
            </div><div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: none;"><div class="mCSB_draggerContainer"><div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; height: 0px; top: 0px;" oncontextmenu="return false;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></nav>
        </div><!-- End Mobile Menu -->
    
    </header>