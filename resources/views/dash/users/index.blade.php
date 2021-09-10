@extends('layouts.dash')

@section('title',  __('dash/min.users'))
@section('breadcrumb-items')
<li class="breadcrumb-item active">{{ __('dash/min.users') }}</li>
@endsection

@section('content')



<livewire:t-switch  :controller="$controller" />




  

      
@endsection

