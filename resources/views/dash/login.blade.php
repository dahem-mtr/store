@extends('layouts.dash',['disable_sidebar_and_header' => true])

@section('title',  __('dash/auth.login') )
<!-- @section('breadcrumb-items')
<li class="breadcrumb-item active">{{ __('dash/components/header.blank_page') }}</li>
@endsection -->

@push('css')
    
@endpush

@section('content')
  <div class="row justify-content-center">
        <div class="col-ms-6">
          <div class="card-group">
            <div class="card p-4">
              <div class="card-body">
                <h4>{{ __('dash/auth.login')}}</h4>
                <form method="POST" action="{{ route('authenticate') }}">
                  @csrf
                <div class="input-group mb-3">
                  <div class="input-group-prepend"><span class="input-group-text">
                      <svg class="c-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                      </svg></span></div>
                  <input class="form-control" type="text" placeholder="{{ __('dash/auth.username')}}" name="email" value="{{ old('email') }}">
                </div>
                <div class="input-group mb-4">
                  <div class="input-group-prepend"><span class="input-group-text">
                      <svg class="c-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                      </svg></span></div>
                  <input class="form-control" type="password" placeholder="{{ __('dash/auth.password')}}" name="password" value="{{ old('password') }}">
                </div>
                <div class="row">
                  <div class="col-6">
                    <button class="btn btn-primary px-4" type="submit">{{ __('dash/auth.log')}}</button>
                  </div>
                  <div class="col-6 text-right">
                    <button class="btn btn-link px-0" type="button">{{ __('dash/auth.forgot_password')}}</button>
                  </div>
                </div>
                </form>
              </div>
            </div>
            
            </div>
          </div>
        </div>
      </div>
  
@endsection

@push('scripts')
    
@endpush
