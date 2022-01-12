@extends('web.layouts.app')

@section('title', ucfirst(($artikel->judul)))
@php
    $id_kategori = array();

@endphp


@section('content')

	    <!-- Page Banner Section Start -->
<!--     <div class="page-banner-section section mt-30 mb-30">
        <div class="container">
            <div class="row row-1">
               
                
                <div class="col-12">
                    <div class="page-banner" style="background-image: url({{asset('web/img/bg/page-banner-fashion.jpg') }})">
                        <h2>Blog Details</h2>
                        <ol class="page-breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">blog details</li>
                        </ol>
                    </div>
                </div>
                
            </div>
        </div>
    </div> -->
    <!-- Page Banner Section End -->
	    <!-- Blog Section Start -->
    <div class="blog-section section mt-4">
        <div class="container">
            
            <!-- Feature Post Row Start -->
            <div class="row">
                
                <div class="col-lg-8 col-12 mb-50">
                    @foreach(array($artikel) as $a)   

                    @php

                        $date = strtotime($a->created_at);
                        $date = date("d/m/Y", $date);

                    @endphp            
                    <!-- Single Blog Start -->
                    <div class="single-blog mb-50">
                        <div class="blog-wrap">

                            <!-- Meta -->
                            <div class="meta fix">
                                @foreach (array($kategori) as $key => $k)
                                @if((strpos($a->kategori,(string)$k->id)))
                                    @php
                                        $id_kategori[$key]['id'] = $k->id;
                                        $id_kategori[$key]['slug'] = $k->slug;
                                    @endphp
                                    <a href="{{ url($k->slug)}}" class="meta-item category">{{ucfirst($k->nama)}}</a>
                                @endif
                                @endforeach
                                <!-- <a href="#" class="meta-item author"><img src="{{ asset('web/img/post/post-author-1.jpg') }}" alt="post author">{{ ucfirst($penulis['nama'])}}</a> -->
                                <a class="meta-item author">{{ ucfirst($penulis['nama'])}}</a>
                                <span class="meta-item date"><i class="fa fa-clock-o"></i>{{ $date}}</span>
                                
                                <span class="meta-item view"><i class="fa fa-eye"></i>{{$a->accessed}}</span>
                            </div>

                            <!-- Title -->
                            <h3 class="title">{{ucfirst($a->judul)}}</h3>

                            <!-- Image -->
                            @if($a->thumbnail != null)
                            <div class="image"><img src="{{ asset('images/' . $a->penulis . '/article-images/thumbnail/730'.$a->thumbnail) }}" alt="post"></div>
                            @endif
                            <!-- Content -->
                            <div class="content">

                                {!!html_entity_decode($a->subjek)!!}

                            </div>

                            <div class="tags-social float-left">

                                <!-- <div class="tags float-left">
                                    <i class="fa fa-tags"></i>
                                    <a href="#">Lifestyle,</a>
                                    <a href="#">Woman,</a>
                                    <a href="#">Cool</a>
                                </div> -->

                                <div class="blog-social float-right">
                                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="dribbble"><i class="fa fa-dribbble"></i></a>
                                    <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                                </div>

                            </div>

                        </div>
                    </div><!-- Single Blog End -->
                    @endforeach                
                    <!-- Previous & Next Post Start -->
                    <!-- <div class="post-nav mb-50">
                        <a href="#" class="prev-post"><span>previous post</span>he 10 Best Beauty Looks: Week of September 11, 2017.</a>
                        <a href="#" class="next-post"><span>next post</span>The top 7 collections of New York fashion week.</a>
                    </div> -->
                    <!-- Previous & Next Post End -->
                        
                    <!-- Post Author Start -->
                    <!-- <div class="post-author fix mb-50">

                        <div class="image float-left"><img src="{{ asset('web/img/post/post-author-1.jpg') }}" alt="post-author"></div>

                        <div class="content fix">
                            <h5><a href="#">Alex bin do</a></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris efficitur is fringillas. Sed cursus mi, ut auctor tellus  Curabitur susvenenatis.</p>
                            <div class="social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>

                    </div> -->
                    <!-- Post Author End -->
                    
                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper mb-50">
                        
                        <!-- Post Block Head Start -->
                        <div class="head">
                            
                            <!-- Title -->
                            <h4 class="title">Baca juga</h4>
                            
                        </div><!-- Post Block Head End -->
                        
                        <!-- Post Block Body Start -->
                        <div class="body">
                            
                            <div class="two-column-post-carousel column-post-carousel post-block-carousel row">

                                @foreach($all_artikel as $aa)
                                    @if($aa->id!=$artikel->id && $aa->is_publish=='ya' && $aa->is_pinned=='tidak' && (strpos($aa->kategori,(string)$id_kategori[0]['id'])))

                                    <div class="col-md-6 col-12">
                                   
                                    <!-- Overlay Post Start -->
                                    <div class="post post-overlay hero-post">
                                        <div class="post-wrap">

                                            <!-- Image -->
                                            <div class="image"><img src="{{ asset('images/' . $aa->penulis . '/article-images/thumbnail/319'.$aa->thumbnail) }}" alt="post"></div>

                                            <!-- Category -->
                                            <a href="{{url($id_kategori[0]['slug'])}}" class="category gadgets">{{ucfirst($id_kategori[0]['slug'])}}</a>

                                            <!-- Content -->
                                            <div class="content">

                                                <!-- Title -->
                                                <h4 class="title"><a href="{{$aa->slug}}">{{ucfirst($aa->judul)}}</a></h4>

                                                <!-- Meta -->
                                                <div class="meta fix">
                                                    <span class="meta-item date"><i class="fa fa-clock-o"></i>{{ date("d/m/Y", strtotime($aa->created_at)) }}</span>
                                                </div>

                                            </div>

                                        </div>
                                    </div><!-- Overlay Post End -->
                               
                                    </div>
                                    @endif

                                @endforeach

                                                            
                                
                            </div>
                            
                        </div><!-- Post Block Body End -->
                        
                    </div><!-- Post Block Wrapper End -->
                    

                    
                </div>
                
                <!-- Sidebar Start -->
                <div class="col-lg-4 col-12 mb-50">
                    <div class="row">
                       
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
                                    @foreach($all_artikel as $aa)
                                    @if($aa->is_pinned=='ya' AND $aa->is_publish=='ya')
                                    <div class="content">
                                    <h5 class="title font-weight-bold"><a href="{{ url($aa->data_kategori[0]['slug_kategori'].'/'.$aa->slug)}}">{{ ucfirst($aa->judul) }}</a></h5>
                                    </div>
                                    <hr>
                                    @endif
                                    @endforeach
                                </div><!-- Sidebar Block Body End -->

                               

                            </div>

                        </div>

                        <div class="single-sidebar col-lg-12 col-md-6 col-12">
                                        @foreach($widget as $w)
                                        @if($w->jenis=='widget')
                                        <!-- Single Sidebar -->
                                            <!-- Sidebar Block Wrapper -->
                                            <div class="sidebar-block-wrapper mb-5">
                                                <!-- Sidebar Block Head Start -->
                                                <div class="head feature-head">
                                                    <!-- Title -->
                                                    <h4 class="title">{{$w->nama}}</h4>
                                                    </div><!-- Sidebar Block Head End -->
                                                    <!-- Sidebar Block Body Start -->
                                                    
                                                    <div class="body">
                                                        @php
                                                            echo $w->kode;
                                                        @endphp                                                        
                                                    </div>
                                                    </div><!-- Sidebar Block Body End -->
                                                

                                                @elseif($w->jenis=='banner' AND ($w->id!='1' AND $w->id!='2'))
                                                <div class="sidebar-block-wrapper mb-5">
                                                <!-- Sidebar Block Head Start -->
                                                <div class="head feature-head">
                                                    <!-- Title -->
                                                    <h4 class="title">{{$w->nama}}</h4>
                                                    </div><!-- Sidebar Block Head End -->
                                                    <!-- Sidebar Block Body Start -->
                                                    
                                                    <div class="body">
                                                        
                                                        <a href="#" class="sidebar-banner"><img src="{{ asset('_widget/banner') . '/' . $w->gambar }}"></a>
                                                    </div>
                                                    </div>

                                      
                                            @endif
                                        @endforeach
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