@extends('default')


@section('content')


<div class="page-content">

     <div class="dlab-bnr-inr overlay-black-middle" style="background-image:url('{{ asset('/theme/assets/images/banner/bnr3.jpg') }}');">
         <div class="container">
             <div class="dlab-bnr-inr-entry">
                 <h1 class="text-white">Login </h1>
         </div>
         </div>
     </div>

     <div class="breadcrumb-row">
         <div class="container">
             <ul class="list-inline">
                 <li><a href="javascript:void(0);">Home</a></li>
                 <li>Login</li>
             </ul>
         </div>
     </div>

     <div class="section-full p-t50 bg-white content-inner">
         <div class="container">
            
            <div class="col-xs-12 col-sm-4 col-md-4 col-sm-offset-4 col-md-offset-4">
                @include('include.messages')
               <div class="car-dl-info m-b30">
                  <div class="price">
                     <h2 class="m-t0 m-b5">Login</h2>
                  </div>         
                  <form id="login" action="{{ route('customer.login_attempt') }}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                     <div class="form-group">
                        <input type="text" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email">
                     </div>   
                     <div class="form-group">
                        <input type="password" name="password" value="{{ old('password') }}" class="form-control" placeholder="Password">
                     </div>
                     <div class="clearfix">
                        <button type="submit" id="btn_login" class="btn-primary site-button btn-block">Login</button>
                     </div>
                  </form>
               </div>
            </div>

         </div>
         </div>
     </div>
</div>

@endsection

@section('js')

<script type="text/javascript">

    $('#login').submit(function() {
        $('#btn_login').prop('disabled', true);
    });
    
</script>

@endsection