@extends('web.layouts.app')
@section('title', ucfirst($artikel[0]['data_kategori'][0]['nama_kategori']))
@section('content')


<!-- Blog Section Start -->
<div class="blog-section section mt-4">
	<div class="container">

		<!-- Feature Post Row Start -->
		<div class="row">
			
			<div class="col-lg-8 col-12 mb-50">
				<!-- Single Blog Start -->
				<div class="single-blog mb-50">
					<div class="blog-wrap">
						<!-- Title -->
						<h3 class="title">{{ucfirst($artikel[0]['data_kategori'][0]['nama_kategori'])}}:</h3>
						<div class="content">
							

							<div class="row">
                                    @foreach($artikel as $a)
                                    @if($a->is_pinned=='tidak')
                                    <!-- Post Wrapper Start -->
                                    <div class="col-md-6 col-12 mb-20">
                                        <!-- Post Start -->
                                        <div class="post feature-post post-separator-border">
                                            <div class="post-wrap">
                                                <!-- Image -->
                                                <a class="image" href="{{ $a->data_kategori[0]['slug_kategori'].'/'.$a->slug}}"><img src="{{ asset('images/' . $a->penulis . '/article-images/thumbnail/371'.$a->thumbnail) }}" alt="post"></a>
                                                <!-- Content -->
                                                <div class="content">
                                                    <!-- Title -->
                                                    <h4 class="title"><a href="{{ $a->data_kategori[0]['slug_kategori'].'/'.$a->slug}}">{{ ucfirst($a->judul) }}</a></h4>
                                                    <!-- Meta -->
                                                    <div class="meta fix">
                                                        <a href="#" class="meta-item author"><i class="fa fa-user"></i>{{ucfirst($a->nama)}}</a>
                                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>{{ date("d/m/Y", strtotime($a->created_at)) }}</span>
                                                        <a href="#" class="meta-item comment"><i class="fa fa-comments"></i>({{ $a->accessed }})</a>
                                                    </div>
                                                    <!-- Description -->
                                                    
                                                    <p style="font-size: 13px">@php
                                                        echo (strlen($a->deskripsi) > 120) ? substr($a->deskripsi, 0, 120) . '...' : $a->deskripsi;
                                                    @endphp</p>
                                                </div>
                                                
                                            </div>
                                            </div><!-- Post End -->
                                            
                                        </div>
                                        @endif
                                        @endforeach
                                        
                                        <!-- Post Wrapper End -->
                                    </div>


						</div>
						<div class="tags-social float-left">
							
							<div class="blog-social float-right">
								<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
								<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
								<a href="#" class="dribbble"><i class="fa fa-dribbble"></i></a>
								<a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
							</div>
						</div>
					</div>
					</div><!-- Single Blog End -->
					
				</div>
				
				<!-- Sidebar Start -->
				<div class="col-lg-4 col-12 mb-50">
					<div class="row">
						
						<!-- Single Sidebar -->
						<div class="single-sidebar col-lg-12 col-md-12 col-12">

                            <!-- Sidebar Block Wrapper -->
                            <div class="sidebar-block-wrapper">

                                <!-- Sidebar Block Head Start -->
                                <div class="head feature-head">

                                    <!-- Title -->
                                    <h4 class="title">Informasi Penting</h4>

                                </div><!-- Sidebar Block Head End -->

                                <!-- Sidebar Block Body Start -->
                                <div class="body">
                                    @foreach($pinned_artikel as $pa)

                                    <div class="content">
                                    <h5 class="title font-weight-bold"><a href="{{ $pa[0]->slug_kategori.'/'.$pa[0]->slug}}">{{ ucfirst($pa[0]->judul) }}</a></h5>
                                    </div>
                                    <hr>
                                    
                                    @endforeach
                                </div><!-- Sidebar Block Body End -->

                               

                            </div>

                        </div>
								<!-- Single Sidebar -->
								<div class="single-sidebar col-lg-12 col-md-6 col-12">
									<!-- Sidebar Banner -->
									<a href="#" class="sidebar-banner"><img src="{{ asset('web/img/banner/sidebar-banner-1.jpg') }}" alt="Sidebar Banner"></a>
								</div>
								<!-- Single Sidebar -->
								<div class="single-sidebar col-lg-12 col-md-6 col-12">
									<!-- Sidebar Banner -->
									<a href="#" class="sidebar-banner"><img src="{{ asset('web/img/banner/sidebar-banner-2.jpg') }}" alt="Sidebar Banner"></a>
								</div>
								<!-- Single Sidebar -->
								<div class="single-sidebar col-lg-12 col-md-6 col-12">
									<div class="sidebar-subscribe">
										<h4>Subscribe To <br>Our <span>Update</span> News</h4>
										<p>Adipiscing elit. Fusce sed mauris arcu. Praesent ut augue imperdiet, semper lorem id.</p>
										<!-- Newsletter Form -->
										<form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="subscribe-form validate" target="_blank" novalidate>
											<div id="mc_embed_signup_scroll">
												<label for="mce-EMAIL" class="d-none">Subscribe to our mailing list</label>
												<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Your email address" required>
												<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
												<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
												<button type="submit" name="subscribe" id="mc-embedded-subscribe" class="button">submit</button>
											</div>
										</form>
									</div>
								</div>
								
							</div>
							</div><!-- Sidebar End -->
							
							</div><!-- Feature Post Row End -->
							
						</div>
						</div><!-- Blog Section End -->
						@endsection