    <!-- 5. Popular Section Start -->
    <div class="popular-section section pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col">
                    
                    <!-- Popular Post Slider Start -->
                    <div class="popular-post-slider">

                        
                        @foreach($popular as $p)
                        @php
                           //dd($popular);
                        @endphp
                        <!-- Post Start -->
                        <div class="post post-small post-list post-dark popular-post">
                            <div class="post-wrap">

                                <!-- Image -->
                                <a class="image" href="{{ $p->data_kategori[0]['slug_kategori'] . '/' . $p->slug }}"><img src="{{ asset('images/' . $p->penulis . '/article-images/thumbnail/125'.$p->thumbnail) }}" alt="post"></a>

                                <!-- Content -->
                                <div class="content fix">

                                    <!-- Title -->
                                    <h4 class="title"><a href="{{ $p->data_kategori[0]['slug_kategori'] . '/' . $p->slug }}">@php
                                            echo (strlen($p->judul) > 40) ? substr($p->judul, 0, 40) . '...' : $p->judul;
                                        @endphp</a></h4>

                                    <!-- Description -->
                                    <p style="font-size: 13px">
                                        @php
                                            echo (strlen($p->deskripsi) > 40) ? substr($p->deskripsi, 0, 40) . '...' : $p->deskripsi;
                                        @endphp
                                    </p>

                                    <!-- Read More -->
                                    <a href="{{ $p->data_kategori[0]['slug_kategori'] . '/' . $p->slug }}" class="read-more">Selengkapnya...</a>

                                </div>
                                
                            </div>
                        </div><!-- Post Start -->

                        @endforeach
                        

                    </div><!-- Popular Post Slider End -->
                    
                </div>
            </div>
        </div>
    </div><!-- Popular Section End -->