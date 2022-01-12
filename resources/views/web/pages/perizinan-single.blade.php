@extends('web.layouts.app')
@php
    //dd($perizinan_single);
@endphp
@section('title', ucfirst(($perizinan_single[0]->nama)))


@section('content')

	    <!-- Blog Section Start -->
    <div class="blog-section section mt-4">
        <div class="container">
            
            <!-- Feature Post Row Start -->
            <div class="row">
                
                <div class="col-lg-8 col-12 mb-50">
                    @foreach($perizinan_single as $p_s)   
                    @php
                       // dd($p_s);
                    @endphp
                    <!-- Single Blog Start -->
                    <div class="single-blog mb-50">
                        <div class="blog-wrap">

                            <!-- Title -->
                            <h3 class="title">{{ucfirst($p_s->nama)}}</h3>
                            <!-- Content -->
                            <div class="content" style="width: 500px; max-width: 500px">

                                {!!html_entity_decode($p_s->deskripsi)!!}
                               

                            </div>
                            <div class="tags-social float-left">

                                <a href="{{ url('_perizinan/sop/' . $p_s->sop) }}" class="btn btn-sm btn-info" target="_blank">Unduh SOP</a>
                                <a href="{{ url('_perizinan/formulir/' . $p_s->formulir) }}" class="btn btn-sm btn-info" target="_blank">Unduh Formulir</a>
                                
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

                            <!-- Sidebar Block Wrapper -->
                            <div class="sidebar-block-wrapper">

                                <!-- Sidebar Block Head Start -->
                                <div class="head feature-head">

                                    <!-- Title -->
                                    <h4 class="title">Izin Lain</h4>

                                </div><!-- Sidebar Block Head End -->

                                <!-- Sidebar Block Body Start -->
                                <div class="body">

                                    <div class="content">
                                    <h5 class="title font-weight-bold"><a href="post-details.html">Fish Fry With green vegetables.</a></h5>
                                </div>


                                </div><!-- Sidebar Block Body End -->

                            </div>
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

                        
                    </div>
                </div><!-- Sidebar End -->
                
            </div><!-- Feature Post Row End -->
            
        </div>
    </div><!-- Blog Section End -->

@endsection