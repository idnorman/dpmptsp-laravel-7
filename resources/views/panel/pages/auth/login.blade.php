@extends('panel.layouts.auth')

@section('content')
	            <div class="card card-primary">
              <div class="card-header d-flex justify-content-center"><h4>Login</h4></div>

              <div class="card-body">
                <form method="POST" action="" class="needs-validation" novalidate="">
                  @csrf

                    @if (Session::has('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ Session::get('error') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span class="small" aria-hidden="true">×</span>
                            </button>
                        </div>
                    @endif
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input id="username" type="text" class="form-control" name="username" tabindex="1"  autofocus required>
                    
                    @if ($errors->has('username'))
                    <span class="error text-danger small">{{ $errors->first('username') }}</span>
                    @endif    
                    
                    <div class="invalid-feedback">
                      Username tidak boleh kosong
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                    	<label for="password" class="control-label">Password</label>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                    @if ($errors->has('password'))
                      <span class="error text-danger small">{{ $errors->first('password') }}</span>
                    @endif    
                    <div class="invalid-feedback">
                      Password tidak boleh kosong
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>
              

              </div>
            </div>
@endsection