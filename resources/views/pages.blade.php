@extends('default')

@section('css')

<style>
    .dlab-bnr-inr, .overlay-black-middle{
        background-image: '{{ asset('/theme/assets/images/background/bg4.jpg') }}'
    }
</style>

@endsection

@section('content')

<!-- Content -->
<div class="page-content">
    <!-- inner page banner -->
    <div class="dlab-bnr-inr overlay-black-middle" style="background-image:url('{{ asset('/theme/assets/images/background/bg4.jpg') }}');">
        <div class="container">
            <div class="dlab-bnr-inr-entry">
                <h1 class="text-white">@if(isset($page)){{ $page->name }}@else{{ 'Page Title' }}@endif</h1>
            </div>
        </div>
    </div>
    <!-- inner page banner END -->
    <!-- Breadcrumb row -->
    <div class="breadcrumb-row">
        <div class="container">
            <ul class="list-inline">
                <li><a href="{{ route('site.index') }}">Home</a></li>
                <li>@if(isset($page)){{ $page->name }}@else{{ 'Page Title' }}@endif</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb row END -->
    <div class="section-full content-inner bg-white">
        <div class="container">
            <div class="section-head text-center head-1">
      
      <h3 class="h3 text-uppercase">@if(isset($page)){{ $page->name }}@else{{ 'Page Title' }}@endif</h3>
      <div class="dlab-separator bg-gray-dark"></div>
      
    </div>
            <!-- blog start -->
            <div class="blog-post blog-single">
        
                <div class="dlab-post-text">                   
                    <p>@if(isset($page)){{ strip_tags($page->description) }}@endif</p>
                </div>

                <div class="dlab-post-text">
                    <p>@php if(isset($page)){ echo htmlspecialchars_decode($page->summery,ENT_NOQUOTES); } @endphp</p>
                </div>
                
            </div>
           
            <!-- blog END -->
        </div>
    </div>
</div>
<!-- Content END-->

@endsection