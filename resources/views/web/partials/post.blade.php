<!-- 6. Post Section Start -->
<div class="post-section section mt-50">
    <div class="container">
        
        <!-- Feature Post Row Start -->
        <div class="row">
            
            <div class="col-lg-8 col-12 mb-50">
                
                <!-- Post Block Wrapper Start -->
                <div class="post-block-wrapper">
                    
                    
                    <!-- Post Block Body Start -->
                    <div class="body pb-0">
                        
                        <!-- Tab Content Start-->
                        <div class="tab-content">
                            
                            <!-- Tab Pane Start-->
                            <div class="tab-pane fade show active" id="feature-cat-1">
                                
                                <div class="row">
                                    @foreach($main_artikel as $ma)
                                   @php
                                    
                                   @endphp
                                    @if($ma->is_pinned=='tidak')
                                    <!-- Post Wrapper Start -->
                                    <div class="col-md-6 col-12 mb-20">
                                        <!-- Post Start -->
                                        <div class="post feature-post post-separator-border">
                                            <!-- START DISINI -->
                                            <div class="post-wrap">
                                                <!-- Image -->
                                                <a class="image" href="{{ $ma->data_kategori[0]['slug_kategori'].'/'.$ma->slug}}"><img src="{{ asset('images/' . $ma->penulis . '/article-images/thumbnail/371'.$ma->thumbnail) }}" alt="post"></a>
                                                <!-- Content -->
                                                <div class="content">
                                                    <!-- Title -->
                                                    <h4 class="title"><a href="{{ $ma->data_kategori[0]['slug_kategori'].'/'.$ma->slug}}">{{ ucfirst($ma->judul) }}</a></h4>
                                                    <!-- Meta -->
                                                    <div class="meta fix">
                                                        <a href="#" class="meta-item author"><i class="fa fa-user"></i>{{ucfirst($ma->nama)}}</a>
                                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>{{ date("d/m/Y", strtotime($ma->created_at)) }}</span>
                                                        <a href="#" class="meta-item comment"><i class="fa fa-eye"></i>({{ $ma->accessed }})</a>
                                                    </div>
                                                    <!-- Description -->
                                                    
                                                    <p style="font-size: 13px">@php
                                                        echo (strlen($ma->deskripsi) > 150) ? substr($ma->deskripsi, 0, 150) . '...' : $ma->deskripsi;
                                                    @endphp</p>
                                                </div>
                                                
                                            </div>

                                            <!-- END DISINI -->
                                            </div><!-- Post End -->
                                            
                                        </div>
                                        @endif
                                        @endforeach
                                        
                                        <!-- Post Wrapper End -->
                                    </div>
                                    <div class="row mb-2">
                                        <div class="w-60 mx-auto pagination">{{$main_artikel->links()}}</div>
                                        
                                    </div>
                                    
                                    </div><!-- Tab Pane End-->
                                    
                                    
                                    </div><!-- Tab Content End-->
                                    
                                    </div><!-- Post Block Body End -->
                                    
                                    </div><!-- Post Block Wrapper End -->
                                        
                                    
                                </div>
                                
                                
                                <!---------------------------------------------------------------------------------------->
                                <!-- Sidebar Start -->
                                <div class="col-lg-4 col-12 mb-50">
                                    <div class="row">
                                        
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
                                            </div>


                                            
                                            
                                        </div>
                                        </div><!-- Sidebar End -->
                                        
                                        </div><!-- Feature Post Row End -->
                                        
                                    </div>
                                    </div><!-- Post Section End -->
                                </div>
                            </div>
                        </div>