@extends('default')


@section('content')

<!-- Content -->
<div class="page-content">
     <!-- inner page banner -->
     <div class="dlab-bnr-inr overlay-black-middle" style="background-image:url('{{ asset('/theme/assets/images/banner/bnr3.jpg') }}');">
         <div class="container">
             <div class="dlab-bnr-inr-entry">
                 <h1 class="text-white">Register </h1>
         </div>
         </div>
     </div>
     <!-- inner page banner END -->
     <!-- Breadcrumb row -->
     <div class="breadcrumb-row">
         <div class="container">
             <ul class="list-inline">
                 <li><a href="javascript:void(0);">Home</a></li>
                 <li>Register</li>
             </ul>
         </div>
     </div>

     <!-- Breadcrumb row END -->
    <div class="section-full p-t50 bg-white content-inner">
         <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="p-a30 bg-gray clearfix m-b30 ">
                        <h2>Register</h2>
                        <div class="dzFormMsg">
                            @include('include.messages')
                        </div>
                        <form action="{{ route('customer.register.attempt') }}" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="g_recaptcha_response" id="captcha_response">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input name="f_name" type="text" value="{{ old('f_name') }}" class="form-control" placeholder="Enter first name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-group"> 
                                            <input name="l_name" type="text" value="{{ old('l_name') }}" class="form-control" placeholder="Enter last name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input name="phone" type="text" value="{{ old('phone') }}" class="form-control" placeholder="Phone">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input name="nic" type="text" value="{{ old('nic') }}" class="form-control" placeholder="CNIC">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input name="email" type="email" value="{{ old('email') }}" class="form-control" placeholder="Email">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input name="password" type="password" class="form-control" placeholder="Password">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div id="captcha"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" class="site-button" value="Submit">
                                </div>
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

@section('js')

<script type="text/javascript">

    console.log(captcha_site_key);

    var onloadCallback = function() {
        grecaptcha.render('captcha', {
          'sitekey' : captcha_site_key,
          'callback' : verifyCallback,
        });
    };

    verifyCallback = function(response) {

        $('#captcha_response').val(response);
        console.log(response);
    }
    
</script>

@endsection