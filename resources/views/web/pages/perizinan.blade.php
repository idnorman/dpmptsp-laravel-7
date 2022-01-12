@extends('web.layouts.app')
@section('title', 'Perizinan')
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
						<h3 class="title">Perizinan</h3>
						<div class="content">
							<table id="user" class="table table-sm">
								<thead>
									<tr>
										<th scope="col">#</th>
										<th scope="col">Nama</th>
										<th scope="col">SOP</th>
										<th scope="col">Formulir</th>
										<th scope="col">Selengkapnya</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($perizinan as $p)
									<tr>
										<th scope="row">{{ $loop->iteration }}</th>
										<td class="font-weight-bold">
											
												<a href="{{'perizinan/' . $p->id}}">
												{{ ucfirst($p->nama) }}
											
										</td>
										<td><a href="{{ url('_perizinan/sop/' . $p->sop) }}" class="btn btn-sm btn-info" target="_blank">Unduh</a></td>
										<td>
											<a href="{{ url('_perizinan/formulir/' . $p->formulir) }}" class="btn btn-sm btn-info" target="_blank">Unduh</a>
											
										</td>
										<td class="font-weight-bold text-info">
											<a href="{{ 'perizinan/' . $p->id }}" class="btn btn-sm btn-info" target="_blank">Lihat</a>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
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
						</div><!-- Blog Section End -->
						@endsection