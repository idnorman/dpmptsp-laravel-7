       <!-- 1. Header Top Start -->
   <!--  <div class="header-top section">
        <div class="container">
            <div class="row"> -->
               
                <!-- Header Top Links Start -->
                <!-- <div class="header-top-links col-md-9 col-6">
                    <ul class="header-links">
                        <li class="disabled block d-none d-md-block"><a href="#"><i class="fa fa-clock-o"></i> Sunday, March 25, 2017</a></li>
                        <li class="d-none d-md-block"><a href="#"><i class="fa fa-mixcloud"></i> <span class="weather-degrees">20 <span class="unit">c</span> </span> <span class="weather-location">- Sydney</span></a></li>
                        <li><a href="#"><i class="fa fa-user-circle-o"></i>Sign Up</a></li>
                        <li><a href="contact-us.html"><i class="fa fa-headphones"></i>Contact</a></li>
                        <li><a href="blog.html">Blog</a></li>
                    </ul> 
                </div> -->
                <!-- Header Top Links End -->
                
                <!-- Header Top Social Start -->
                <!-- <div class="header-top-social col-md-3 col-6">
                    
                    
                    <div class="header-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                        <a href="#"><i class="fa fa-vimeo"></i></a>
                    </div>
                    
                </div> -->
                <!-- Header Top Social End -->
                
            <!-- </div>
        </div>
    </div> -->
    <!-- Header Top Endddd -->
    
    <!-- Header Start -->
    <div class="header-section section">
        <div class="container">
            <div class="row align-items-center">
               
                <!-- Header Logo -->
                <div class="header-logo col-md-4 d-none d-md-block">
                    <a href="{{ url('') }}" class="logo"><img src="{{ asset('web/img/logo.png') }}" alt="Logo"></a>
                </div>

                
                <!-- Header Banner -->
                @if($widget[0]->gambar != null)
                <div class="header-banner col-md-8 col-12">
                    <div class="banner"><a href="#"><img src="{{ asset('_widget/banner/' . $widget[0]->gambar) }}" alt="Header Banner"></a></div>
                </div>
                @endif
                @if($widget[0]->kode != null)
                <div class="header-banner col-md-8 col-12">
                    <div class="banner"><a href="#"><img src="{{ asset('_widget/banner/' . $widget[0]->nama) }}" alt="Header Banner"></a></div>
                </div>
                @endif
                
            </div>
        </div>
    </div><!-- Header End -->
    