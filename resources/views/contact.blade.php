@extends('default')


@section('content')

    <!-- Content -->
    <div class="page-content">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle" style="background-image:url('{{ asset('/theme/assets/images/background/bg4.jpg') }}');">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Contact Us</h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="javascript:void(0)">Home</a></li>
                    <li>Contact us</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <div class="section-full content-inner bg-white contact-style-1">
          <div class="container">
              <div class="row">
                <div class="col-md-3 col-sm-6 m-b30">
                  <div class="icon-bx-wraper bx-style-1 p-a30 center">
                    <div class="icon-xl text-primary m-b20"> <a href="javascript:void(0)" class="icon-cell"><i class="fa fa-map-marker"></i></a> </div>
                    <div class="icon-content">
                      <h5 class="dlab-tilte text-uppercase">Address</h5>
                      <p>@if(isset($generalInformation)){{ $generalInformation->address }}@endif</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6 m-b30">
                  <div class="icon-bx-wraper bx-style-1 p-a30 center">
                    <div class="icon-xl text-primary m-b20"> <a href="javascript:void(0)" class="icon-cell"><i class="fa fa-envelope"></i></a> </div>
                    <div class="icon-content">
                      <h5 class="dlab-tilte text-uppercase">Email</h5>
                      <p>@if(isset($generalInformation)){{ $generalInformation->email }}@endif</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6 m-b30">
                  <div class="icon-bx-wraper bx-style-1 p-a30 center">
                    <div class="icon-xl text-primary m-b20"> <a href="javascript:void(0)" class="icon-cell"><i class="fa fa-phone"></i></a> </div>
                    <div class="icon-content">
                      <h5 class="dlab-tilte text-uppercase">Phone</h5>
                      <p>@if(isset($generalInformation)){{ $generalInformation->contact }}@endif</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6 m-b30">
                  <div class="icon-bx-wraper bx-style-1 p-a30 center">
                    <div class="icon-xl text-primary m-b20"> <a href="javascript:void(0)" class="icon-cell"><i class="fa fa-fax"></i></a> </div>
                    <div class="icon-content">
                      <h5 class="dlab-tilte text-uppercase">Helpline</h5>
                      <p>@if(isset($generalInformation)){{ $generalInformation->helpline }}@endif</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                    <div class="p-a30 bg-gray clearfix m-b30 ">
                    @include('include.messages')
                  <h2>Send Message Us</h2>
                  <div class="dzFormMsg">
                  </div>
                  <form action="{{ route('site.contact.request') }}" method="POST">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <div class="row">
                          <div class="col-md-6">
                              <div class="form-group">
                                  <div class="input-group">
                                      <input name="name" type="text" class="form-control" placeholder="Your Name" value="{{old('name')}}">
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <div class="input-group"> 
                                      <input name="email" type="email" class="form-control"  placeholder="Your Email Id" value="{{old('email')}}">
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <div class="input-group">
                                      <input name="phone" type="text" class="form-control" placeholder="Phone" value="{{old('phone')}}">
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <div class="input-group">
                                      <input name="subject" type="text" class="form-control" placeholder="Subject" value="{{old('subject')}}">
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group">
                                  <div class="input-group">
                                      <textarea name="messages" rows="4" class="form-control" placeholder="Your Message..." style="resize: none;">{{old('messages')}}</textarea>
                                  </div>
                              </div>
                          </div>

                          <div class="col-md-12">
                              <input type="submit" value="Submit" class="site-button" />
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


@section('js')

<script>
  
  console.log(captcha_site_key);


</script>

@endsection