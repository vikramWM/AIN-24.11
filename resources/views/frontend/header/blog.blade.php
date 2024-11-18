@extends('frontend-layouts.app')

@section('content')
	<style>
		.banner-section-three .content-column .inner-column {
			padding-top: 0px;
		}
	</style>
	<section class="banner-section-three">
		<div class="pattern-layer-two" style="background-image: url(images/background/pattern-21.png)"></div>
		<div class="auto-container" style="margin-top: 100px;">
			<!-- Page Breadcrumb -->
			<div style="text-align: center;">
            <ul class="page-breadcrumb">
				<li><a href="/">Home</a></li>
                <li>Blog</li>
			</ul>
            </div>
            <div class="row clearfix">
				
				<!-- Content Column -->
				<div class="content-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="pattern-layer-one" style="background-image: url(images/main-slider/pattern-1.png)"></div>
						<div class="icon-layer" style="background-image: url(images/icons/icon-2.png)"></div>
						<div class="icon-layer-two" style="background-image: url(images/icons/icon-5.png)"></div>
						<section class="event-section-two pt-0 mt-0" style="background-image:url(images2/background/pattern-18.png)">
							<div class="icon-layer-one" style="background-image:url(images2/icons/icon-24.png)"></div>
							<div class="icon-layer-two" style="background-image:url(images2/icons/icon-25.png)"></div>
							<div class="auto-container">
							
								<!-- Sec Title Two -->
								<!-- <div class="sec-title-two centered">
									<div class="title">Our Event</div>
									<h2>Join Our Upcoming Event</h2>
								</div> -->
								<!-- End Sec Title Two -->
								
								<div class="inner-container">
									<div class="row clearfix">
										@foreach ($blogs as $blog)
											<div class="event-block col-lg-4 col-md-6 col-sm-12">
												<div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms">
													<ul class="post-meta">
														<li><span class="icon flaticon-map"></span>Blog</li>
														<li><span class="icon flaticon-timetable"></span>{{ $blog->created_at->format('F j, Y') }}</li>
													</ul>
													<h4><a href="{{ url('/blog', $blog->slug) }}" >{{ substr(strip_tags($blog->tittle), 0, 30) }}....</a></h4>
													<div class="text">{!! substr(strip_tags($blog->content), 0, 100) !!}...</div>
													<div class="image" style="height:151px">
														<a href="{{ url('/blog', $blog->slug) }}" ><img src="{{ asset($blog->images) }}" alt=""></a>
													</div>
												</div>
											</div>
										@endforeach

										
									</div>
									<div class="">
										{{ $blogs->links('pagination::bootstrap-4')}}
									</div>
								</div>
							</div>
						</section>
					</div>
				</div>
				
				
				
			</div>
		</div>
	</section>
@endsection