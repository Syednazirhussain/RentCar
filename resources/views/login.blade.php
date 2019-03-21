@extends('default')


@section('content')

<!-- Content -->
<div class="page-content">
     <!-- inner page banner -->
     <div class="dlab-bnr-inr overlay-black-middle" style="background-image:url('{{ asset('/theme/assets/images/banner/bnr3.jpg') }}');">
         <div class="container">
             <div class="dlab-bnr-inr-entry">
                 <h1 class="text-white">Login </h1>
         </div>
         </div>
     </div>
     <!-- inner page banner END -->
     <!-- Breadcrumb row -->
     <div class="breadcrumb-row">
         <div class="container">
             <ul class="list-inline">
                 <li><a href="javascript:void(0);">Home</a></li>
                 <li>Login</li>
             </ul>
         </div>
     </div>
     <!-- Breadcrumb row END -->
     <div class="section-full p-t50 bg-white content-inner">
         <div class="container">
            
            <!-- Side bar END -->
            <div class="col-xs-12 col-sm-4 col-md-4 col-sm-offset-4 col-md-offset-4">
               <div class="car-dl-info m-b30">
                  <div class="price">
                     <h2 class="m-t0 m-b5">Login</h2>
                  </div>         
                  <form>
                     <div class="form-group">
                        <input name="email" class="form-control" placeholder="Email">
                     </div>   
                     <div class="form-group">
                        <input name="password" class="form-control" placeholder="Password">
                     </div>
                     <div class="clearfix">
                        <button type="submit" class="btn-primary site-button btn-block">Login</button>
                     </div>
                  </form>
               </div>
            </div>

         </div>
         </div>
     </div>
</div>
<!-- Content END-->

@endsection