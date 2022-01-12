    <!-- 4. Hero Section Start -->
    <div class="hero-section section mt-30 mb-30">
        <div class="container">
            <div class="row">
                @if($widget[1]->gambar != null)
                <div class="col-lg-12">
                    <div class="row text-center mb-4">
                        <div class="banner col-12"><a href="#"><img src="{{ asset('_widget/banner/' . $widget[1]->gambar) }}" alt="Hero Banner" class="hero-banner"></a></div>
                    </div>
                    
                </div>
                @endif                
                <div class="col-lg-8">
                    <div class="row row-1">
                    <div class="order-lg-2 col-lg-12 col-12">
                            
                            <!-- Hero Post Slider Start -->
                            <div class="post-carousel-1">

                                @foreach($artikel as $a)

                                @php
                                    
                                    //dd($a->data_kategori[0]['id_kategori']);
                                    //dd($a->slug);

                                @endphp
                                @if($a->is_featured == 'ya')
                                <!-- Overlay Post Start -->
                                <div class="post post-large post-overlay hero-post">
                                    <div class="post-wrap">

                                        <!-- Image -->
                                      <!--   <div class="image"><img src="{{ asset('web/img/post/post-3.jpg') }}" alt="post"></div> -->
                                        
                                        <div class="image"><img src="{{ asset('images/' . $a->penulis . '/article-images/thumbnail/584'.$a->thumbnail) }}" alt="post"></div>

                                        
                                       

                                        <!-- Category -->
                                        <a href="{{ $a->data_kategori[0]['slug_kategori']}}" class="category politic">{{ $a->data_kategori[0]['nama_kategori']}}</a>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Title -->
                                            <h2 class="title"><a href="{{ $a->data_kategori[0]['slug_kategori'].'/'.$a->slug}}">{{$a->judul}}</a></h2>

                                            <!-- Meta -->
                                            <div class="meta fix">
                                                <span class="meta-item date"><i class="fa fa-clock-o"></i>{{ $a->created_at }}</span>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div><!-- Overlay Post End -->
                                @endif
                                @endforeach
                                
                            </div><!-- Hero Post Slider End -->
                            
                    </div>
                    </div>
                </div>
                <div class="col-lg-4">
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
                                    @foreach($all_artikel as $aa)
                                    @if($aa->is_pinned=='ya' AND $aa->is_publish=='ya')
                                    <div class="content">
                                    <h5 class="title font-weight-bold"><a href="{{ $aa->data_kategori[0]['slug_kategori'].'/'.$aa->slug}}">{{ ucfirst($aa->judul) }}</a></h5>
                                    </div>
                                    <hr>
                                    @endif
                                    @endforeach
                                </div><!-- Sidebar Block Body End -->

                               

                            </div>

                        </div>
                </div>
                </div>
            </div>
        </div>
    </div><!-- Hero Section End -->