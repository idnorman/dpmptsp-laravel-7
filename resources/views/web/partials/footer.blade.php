
    
    <!-- 8. Footer Top Section Start -->
    <div class="footer-top-section section bg-dark">
        <div class="container-fluid">
            <div class="row">
                
                <!-- Footer Widget Start -->
                <div class="footer-widget col-xl-8 col-md-8 col-12 mb-60">
                    @foreach($about as $a)
                    <!-- Title -->
                    <h4 class="widget-title">{{$a->nama_short}}</h4>
                    
                    <div class="content fix">
                        <p>{{$a->deskripsi}}</p>
                        
                        <!-- Footer Contact -->
                        <ol class="footer-contact">
                            <li><i class="fa fa-home"></i>{{$a->alamat}}</li>
                            <li><i class="fa fa-envelope-open"></i>{{$a->telepon}}</li>    
                        </ol>
                        
                        <!-- Footer Social -->
                        <div class="footer-social">
                            <a href="{{$a->facebook}}" class="facebook" target="_blank" ><i class="fa fa-facebook"></i></a>
                            <a href="https://api.whatsapp.com/send?phone={{$a->whatsapp}}&text=" style="background: #25D366;" target="_blank"><i class="fa fa-whatsapp"></i></a>
                            <a href="{{$a->instagram}}" style="background: #E1306C" target="_blank"><i class="fa fa-instagram"></i></a>
                            <a href="{{$a->youtube}}" style="background: #FF0000" target="_blank"><i class="fa fa-youtube"></i></a>
                        </div>
                        

                    </div>
                    @endforeach 
                </div><!-- Footer Widget End -->
                
                <!-- Footer Widget Start -->
                <div class="footer-widget col-xl-4 col-md-4 col-12 mb-60">
                    
                    <!-- Title -->
                    <h4 class="widget-title">Kategori</h4>
                    
                    
                    <!-- Footer Widget Post Start -->
                    <div class="footer-widget-post">
                        <div class="post-wrap">
                            
                            
                            <!-- Content -->
                            <div class="content">

                                
                                

                                @foreach($kategori_menu as $km)
                                    <li class="title"><a href="{{ url($km->slug) }}">{{ucfirst($km->nama)}}</a></li>
                                    
                                 
                                    
                                @endforeach
                            </div>
                            
                        </div>
                    </div><!-- Footer Widget Post End -->
                    
                </div><!-- Footer Widget End -->
                
                
                
            </div>
        </div>
    </div><!-- Footer Top Section End -->
    
    <!-- Footer Bottom Section Start -->
    <div class="footer-bottom-section section bg-dark">
        <div class="container">
            <div class="row">
                
                <!-- Copyright Start -->
                <div class="copyright text-center col">
                    <p>Copyright © {{date("Y")}} All Rights Reserved.</p>
                </div><!-- Copyright End -->
                
            </div>
        </div>
    </div><!-- Footer Bottom Section End -->
