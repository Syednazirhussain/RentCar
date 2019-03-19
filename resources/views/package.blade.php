@extends('default')

@section('css')

<style>
    .content-inner-2 {
        background-image: '{{ asset('/theme/assets/images/background/about-us.jpg') }}'
    }
</style>

@endsection

@section('content')

<div class="page-content">
   <!-- inner page banner -->
   <div class="dlab-bnr-inr overlay-black-middle" style="background-image:url('{{ asset('/theme/assets/images/background/bg4.jpg') }}');">
      <div class="container">
         <div class="dlab-bnr-inr-entry">
            <h1 class="text-white">New Car Search Result List</h1>
         </div>
      </div>
   </div>
   <!-- inner page banner END -->
   <!-- Breadcrumb row -->
   <div class="breadcrumb-row">
      <div class="container">
         <ul class="list-inline">
            <li><a href="javascript:void(0)">Home</a></li>
            <li>New Car Search Result List</li>
         </ul>
      </div>
   </div>
   <!-- Breadcrumb row END -->
   <div class="section-full content-inner bg-white">
      <div class="container">
         <div class="row">
            <!-- Side bar start -->
            <div class="col-sm-4 col-md-4 col-lg-3">
               <aside  class="side-bar">
                  <div class="widget recent-posts-entry">
                     <h4 class="widget-title">Advanced Search</h4>
                     <div class="dlab-accordion advanced-search toggle" id="accordion1">
                        <div class="panel">
                           <div class="acod-head">
                              <h5 class="acod-title"> 
                                 <a data-toggle="collapse" href="#city" class="collapsed">
                                 City
                                 </a> 
                              </h5>
                           </div>
                           <div id="city" class="acod-body collapse in">
                              <div class="acod-content">
                                 <div class="input-group">
                                    <select class="form-control">
                                       <option>Your City</option>
                                       <option>Bath</option>
                                       <option>Birmingham</option>
                                       <option>Carlisle</option>
                                       <option>Derby</option>
                                       <option>Exeter</option>
                                       <option>Manchester</option>
                                       <option>Bath</option>
                                       <option>Birmingham</option>
                                       <option>Carlisle</option>
                                       <option>Derby</option>
                                       <option>Exeter</option>
                                       <option>Manchester</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="panel">
                           <div class="acod-head">
                              <h5 class="acod-title">
                                 <a data-toggle="collapse" href="#price-range">
                                 Price Range
                                 </a> 
                              </h5>
                           </div>
                           <div id="price-range" class="acod-body collapse in">
                              <div class="acod-content">
                                 <div class="price-slide range-slider m-b30">
                                    <div class="price">
                                       <label for="amount">Price Range</label>
                                       <input type="text" id="amount" class="amount" readonly="" value="$200 - $5000" />
                                       <div id="slider-range"></div>
                                    </div>
                                 </div>
                                 <div class="price-slide-2 range-slider">
                                    <div class="price">
                                       <label for="amount-2">Price Range</label>
                                       <input type="text" id="amount-2" class="amount" readonly="" value="$200 - $5000" />
                                       <div id="slider-range-2"></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="panel">
                           <div class="acod-head">
                              <h5 class="acod-title"> 
                                 <a data-toggle="collapse"  href="#brand" class="collapsed" >
                                 Brand
                                 </a>
                              </h5>
                           </div>
                           <div id="brand" class="acod-body collapse in">
                              <div class="acod-content">
                                 <input type="search" id="container-search" value="" class="form-control" placeholder="Search...">
                                 <div class="product-brand" id="searchable-area">
                                    <div class="search-content">
                                       <input id="brand1" type="checkbox">
                                       <label for="brand1" class="search-content-area">Carrera </label>
                                    </div>
                                    <div class="search-content">
                                       <input id="brand2" type="checkbox">
                                       <label for="brand2" class="search-content-area">Boxster  </label>
                                    </div>
                                    <div class="search-content">
                                       <input id="brand3" type="checkbox">
                                       <label for="brand3"  class="search-content-area">3-Series </label>
                                    </div>
                                    <div class="search-content">
                                       <input id="brand4" type="checkbox">
                                       <label for="brand4"  class="search-content-area">Cayenne </label>
                                    </div>
                                    <div class="search-content">
                                       <input id="brand5" type="checkbox">
                                       <label for="brand5"  class="search-content-area">F-type</label>
                                    </div>
                                    <div class="search-content">
                                       <input id="brand6" type="checkbox">
                                       <label for="brand6"  class="search-content-area">GT-R </label>
                                    </div>
                                    <div class="search-content">
                                       <input id="brand7" type="checkbox">
                                       <label for="brand7"  class="search-content-area">GTS </label>
                                    </div>
                                    <div class="search-content">
                                       <input id="brand8" type="checkbox">
                                       <label for="brand8"  class="search-content-area">M6 </label>
                                    </div>
                                    <div class="search-content">
                                       <input id="brand9" type="checkbox">
                                       <label for="brand9"  class="search-content-area">Macan </label>
                                    </div>
                                    <div class="search-content">
                                       <input id="brand10" type="checkbox">
                                       <label for="brand10"  class="search-content-area">Mazda6 </label>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="panel">
                           <div class="acod-head">
                              <h5 class="acod-title"> 
                                 <a data-toggle="collapse"  href="#fuel-type" class="collapsed" >
                                 Fuel Type
                                 </a>
                              </h5>
                           </div>
                           <div id="fuel-type" class="acod-body collapse">
                              <div class="acod-content">
                                 <div class="product-brand">
                                    <div class="search-content">
                                       <input id="fuel1" type="checkbox">
                                       <label for="fuel1"  class="search-content-area">Diesel </label>
                                    </div>
                                    <div class="search-content">
                                       <input id="fuel2" type="checkbox">
                                       <label for="fuel2"  class="search-content-area">Petrol  </label>
                                    </div>
                                    <div class="search-content">
                                       <input id="fuel3" type="checkbox">
                                       <label for="fuel3"  class="search-content-area">CNG </label>
                                    </div>
                                    <div class="search-content">
                                       <input id="fuel4" type="checkbox">
                                       <label for="fuel4"  class="search-content-area">LPG </label>
                                    </div>
                                    <div class="search-content">
                                       <input id="fuel5" type="checkbox">
                                       <label for="fuel5"  class="search-content-area">Electric </label>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="panel">
                           <div class="acod-head">
                              <h5 class="acod-title"> 
                                 <a data-toggle="collapse"  href="#mileage" class="collapsed" >
                                 Mileage
                                 </a>
                              </h5>
                           </div>
                           <div id="mileage" class="acod-body collapse">
                              <div class="acod-content">
                                 <div class="product-brand">
                                    <div class="search-content">
                                       <input id="mileage1" type="checkbox">
                                       <label for="mileage1"  class="search-content-area">15 Kmpl and above </label>
                                    </div>
                                    <div class="search-content">
                                       <input id="mileage2" type="checkbox">
                                       <label for="mileage2"  class="search-content-area">25 Kmpl and above </label>
                                    </div>
                                    <div class="search-content">
                                       <input id="mileage3" type="checkbox">
                                       <label for="mileage3"  class="search-content-area">35 Kmpl and above </label>
                                    </div>
                                    <div class="search-content">
                                       <input id="mileage4" type="checkbox">
                                       <label for="mileage4"  class="search-content-area">50 Kmpl and above </label>
                                    </div>
                                    <div class="search-content">
                                       <input id="mileage5" type="checkbox">
                                       <label for="mileage5"  class="search-content-area">80 Kmpl and above </label>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="panel">
                           <div class="acod-head">
                              <h5 class="acod-title"> 
                                 <a data-toggle="collapse"  href="#vehicle-type" class="collapsed" >
                                 Vehicle Type
                                 </a>
                              </h5>
                           </div>
                           <div id="vehicle-type" class="acod-body collapse in">
                              <div class="acod-content">
                                 <div class="vehicle-type clearfix">
                                    <div class="btn-group " data-toggle="buttons">
                                       <div class="btn btn-primary">
                                          <input type="checkbox" checked>
                                          <i class="flaticon-car"></i>
                                          <h5>MUV</h5>
                                          <span>8</span>
                                       </div>
                                       <div class="btn btn-primary">
                                          <input type="checkbox" >
                                          <i class="flaticon-car-1"></i>
                                          <h5>Coupe</h5>
                                          <span>8</span>
                                       </div>
                                       <div class="btn btn-primary">
                                          <input type="checkbox" >
                                          <i class="flaticon-pickup-truck"></i>
                                          <h5>Pickup</h5>
                                          <span>8</span>
                                       </div>
                                       <div class="btn btn-primary">
                                          <input type="checkbox" >
                                          <i class="flaticon-car-2"></i>
                                          <h5>MUV</h5>
                                          <span>8</span>
                                       </div>
                                       <div class="btn btn-primary">
                                          <input type="checkbox" >
                                          <i class="flaticon-jeep"></i>
                                          <h5>Jeep</h5>
                                          <span>8</span>
                                       </div>
                                       <div class="btn btn-primary">
                                          <input type="checkbox" >
                                          <i class="flaticon-van"></i>
                                          <h5>Jeep</h5>
                                          <span>8</span>
                                       </div>
                                       <div class="btn btn-primary">
                                          <input type="checkbox" >
                                          <i class="flaticon-van-1"></i>
                                          <h5>Truck</h5>
                                          <span>8</span>
                                       </div>
                                       <div class="btn btn-primary">
                                          <input type="checkbox" >
                                          <i class="flaticon-police-car"></i>
                                          <h5>Luxury</h5>
                                          <span>8</span>
                                       </div>
                                       <div class="btn btn-primary">
                                          <input type="checkbox" >
                                          <i class="flaticon-taxi"></i>
                                          <h5>Texi</h5>
                                          <span>8</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="panel">
                           <div class="acod-head">
                              <h5 class="acod-title"> 
                                 <a data-toggle="collapse"  href="#transmission" class="collapsed" >
                                 Transmission
                                 </a>
                              </h5>
                           </div>
                           <div id="transmission" class="acod-body collapse in">
                              <div class="acod-content">
                                 <div class="vehicle-type clearfix transmission">
                                    <div class="btn-group " data-toggle="buttons">
                                       <div class="btn btn-primary">
                                          <input type="checkbox" checked>
                                          <h5>Automatic</h5>
                                          <span>278</span>
                                       </div>
                                       <div class="btn btn-primary">
                                          <input type="checkbox" >
                                          <h5>Manual</h5>
                                          <span>536</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="panel">
                           <div class="acod-head">
                              <h5 class="acod-title"> 
                                 <a data-toggle="collapse"  href="#seating-capacity" class="collapsed" >
                                 Seating Capacity
                                 </a>
                              </h5>
                           </div>
                           <div id="seating-capacity" class="acod-body collapse">
                              <div class="acod-content">
                                 <div class="product-brand">
                                    <div class="search-content">
                                       <input id="seating1" type="checkbox">
                                       <label for="seating1"  class="search-content-area">2 Seater</label>
                                    </div>
                                    <div class="search-content">
                                       <input id="seating2" type="checkbox">
                                       <label for="seating2"  class="search-content-area">3 Seater </label>
                                    </div>
                                    <div class="search-content">
                                       <input id="seating3" type="checkbox">
                                       <label for="seating3"  class="search-content-area">4 Seater </label>
                                    </div>
                                    <div class="search-content">
                                       <input id="seating4" type="checkbox">
                                       <label for="seating4"  class="search-content-area">5 Seater </label>
                                    </div>
                                    <div class="search-content">
                                       <input id="seating5" type="checkbox">
                                       <label for="seating5"  class="search-content-area">6 Seater </label>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="panel">
                           <div class="acod-head">
                              <h5 class="acod-title"> 
                                 <a data-toggle="collapse"  href="#engine-displacement" class="collapsed" >
                                 Engine Displacement
                                 </a>
                              </h5>
                           </div>
                           <div id="engine-displacement" class="acod-body collapse">
                              <div class="acod-content">
                                 <div class="product-brand">
                                    <div class="search-content">
                                       <input id="engine1" type="checkbox">
                                       <label for="engine1"  class="search-content-area">Under 800cc</label>
                                    </div>
                                    <div class="search-content">
                                       <input id="engine2" type="checkbox">
                                       <label for="engine2"  class="search-content-area">800cc to 1000cc </label>
                                    </div>
                                    <div class="search-content">
                                       <input id="engine3" type="checkbox">
                                       <label for="engine3"  class="search-content-area">1000cc to 1500cc </label>
                                    </div>
                                    <div class="search-content">
                                       <input id="engine4" type="checkbox">
                                       <label for="engine4"  class="search-content-area">2000cc to 3000cc</label>
                                    </div>
                                    <div class="search-content">
                                       <input id="engine5" type="checkbox">
                                       <label for="engine5"  class="search-content-area">3000cc to 4000cc </label>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="panel">
                           <div class="acod-head">
                              <h5 class="acod-title"> 
                                 <a data-toggle="collapse"  href="#features" class="collapsed" >
                                 Features
                                 </a>
                              </h5>
                           </div>
                           <div id="features" class="acod-body collapse">
                              <div class="acod-content">
                                 <div class="product-brand">
                                    <div class="search-content">
                                       <input id="features1" type="checkbox">
                                       <label for="features1"  class="search-content-area">Power Steering</label>
                                    </div>
                                    <div class="search-content">
                                       <input id="features2" type="checkbox">
                                       <label for="features2"  class="search-content-area">Parking Sensors </label>
                                    </div>
                                    <div class="search-content">
                                       <input id="features3" type="checkbox">
                                       <label for="features3"  class="search-content-area">Airbags </label>
                                    </div>
                                    <div class="search-content">
                                       <input id="features4" type="checkbox">
                                       <label for="features4"  class="search-content-area">Cruise Control</label>
                                    </div>
                                    <div class="search-content">
                                       <input id="features5" type="checkbox">
                                       <label for="features5"  class="search-content-area">Keyless entry </label>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </aside>
            </div>
            <!-- Side bar END -->
            <!-- left part start -->
            <div class="col-sm-8 col-md-8 col-lg-9">
               <div class="row">
                  <div class="p-lr15 clearfix ">
                     <div class="filter-bar clearfix m-b30 p-lr15">
                        <select class="pull-left max-w200">
                           <option>Sort by </option>
                           <option>Price: Lowest first</option>
                           <option>Price: Highest first </option>
                           <option>Product Name: A to Z </option>
                           <option>Product Name: Z to A </option>
                           <option>In stock</option>
                        </select>
                        <ul class="nav theme-tabs pull-right">
                           <li class="active">
                              <a href="javascript:void(0)"><i class="fa fa-list"></i></a>
                           </li>
                           <li>
                              <a href="new-car-search-result-column.html"><i class="fa fa-th"></i></a>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <!-- blog grid  -->
                  <div class="dlab-blog-grid-3">
                     <div class="col-md-12">
                        <div class="blog-post blog-md clearfix date-style-2 list-view m-b30">
                           <div class="dlab-post-media dlab-img-effect zoom-slow"> 
                              <a href="javascript:void(0)"><img src="{{ asset('/theme/assets/images/blog/grid/pic1.jpg') }}" alt=""></a> 
                           </div>
                           <div class="dlab-post-info">
                              <div class="dlab-post-title ">
                                 <h3 class="post-title"><a href="car-details-overview.html">GTA 5 Lowriders DLC</a></h3>
                              </div>
                              <div class="dlab-post-text">
                                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy..</p>
                              </div>
                              <div class="dlab-post-readmore">
                                 <h2 class="m-a0 pull-left m-r15 open-sans">$ 2.41 Lakh</h2>
                                 <a href="javascript:void(0)" title="READ MORE" rel="bookmark" class="site-button" data-toggle="modal" data-target="#car-details">DETAILS</a> 
                              </div>
                              <div class="dlab-post-tags">
                                 <div class="post-tags"> 
                                    <a href="javascript:void(0)">23.9 kmpl</a> 
                                    <a href="javascript:void(0)">624 cc</a> 
                                    <a href="javascript:void(0)">4 Seats</a> 
                                    <a href="javascript:void(0)">Manual</a> 
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="blog-post blog-md clearfix date-style-2 list-view m-b30">
                           <div class="dlab-post-media dlab-img-effect zoom-slow"> 
                              <a href="javascript:void(0)"><img src="{{ asset('/theme/assets/images/blog/grid/pic2.jpg') }}" alt=""></a> 
                           </div>
                           <div class="dlab-post-info">
                              <div class="dlab-post-title ">
                                 <h3 class="post-title"><a href="car-details-overview.html">GTA 5 Lowriders DLC</a></h3>
                              </div>
                              <div class="dlab-post-text">
                                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy..</p>
                              </div>
                              <div class="dlab-post-readmore">
                                 <h2 class="m-a0 pull-left m-r15 open-sans">$ 2.41 Lakh</h2>
                                 <a href="javascript:void(0)" title="READ MORE" rel="bookmark" class="site-button" data-toggle="modal" data-target="#car-details">DETAILS</a> 
                              </div>
                              <div class="dlab-post-tags">
                                 <div class="post-tags"> 
                                    <a href="javascript:void(0)">23.9 kmpl</a> 
                                    <a href="javascript:void(0)">624 cc</a> 
                                    <a href="javascript:void(0)">4 Seats</a> 
                                    <a href="javascript:void(0)">Manual</a> 
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="blog-post blog-md clearfix date-style-2 list-view m-b30">
                           <div class="dlab-post-media dlab-img-effect zoom-slow"> 
                              <a href="javascript:void(0)"><img src="{{ asset('/theme/assets/images/blog/grid/pic3.jpg') }}" alt=""></a> 
                           </div>
                           <div class="dlab-post-info">
                              <div class="dlab-post-title ">
                                 <h3 class="post-title"><a href="car-details-overview.html">GTA 5 Lowriders DLC</a></h3>
                              </div>
                              <div class="dlab-post-text">
                                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy..</p>
                              </div>
                              <div class="dlab-post-readmore">
                                 <h2 class="m-a0 pull-left m-r15 open-sans">$ 2.41 Lakh</h2>
                                 <a href="javascript:void(0)" title="READ MORE" rel="bookmark" class="site-button" data-toggle="modal" data-target="#car-details">DETAILS</a> 
                              </div>
                              <div class="dlab-post-tags">
                                 <div class="post-tags"> 
                                    <a href="javascript:void(0)">23.9 kmpl</a> 
                                    <a href="javascript:void(0)">624 cc</a> 
                                    <a href="javascript:void(0)">4 Seats</a> 
                                    <a href="javascript:void(0)">Manual</a> 
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="blog-post blog-md clearfix date-style-2 list-view m-b30">
                           <div class="dlab-post-media dlab-img-effect zoom-slow"> 
                              <a href="javascript:void(0)"><img src="{{ asset('/theme/assets/images/blog/grid/pic4.jpg') }}" alt=""></a> 
                           </div>
                           <div class="dlab-post-info">
                              <div class="dlab-post-title ">
                                 <h3 class="post-title"><a href="car-details-overview.html">GTA 5 Lowriders DLC</a></h3>
                              </div>
                              <div class="dlab-post-text">
                                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy..</p>
                              </div>
                              <div class="dlab-post-readmore">
                                 <h2 class="m-a0 pull-left m-r15 open-sans">$ 2.41 Lakh</h2>
                                 <a href="javascript:void(0)" title="READ MORE" rel="bookmark" class="site-button" data-toggle="modal" data-target="#car-details">DETAILS</a> 
                              </div>
                              <div class="dlab-post-tags">
                                 <div class="post-tags"> 
                                    <a href="javascript:void(0)">23.9 kmpl</a> 
                                    <a href="javascript:void(0)">624 cc</a> 
                                    <a href="javascript:void(0)">4 Seats</a> 
                                    <a href="javascript:void(0)">Manual</a> 
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="blog-post blog-md clearfix date-style-2 list-view m-b30">
                           <div class="dlab-post-media dlab-img-effect zoom-slow"> 
                              <a href="javascript:void(0)"><img src="{{ asset('/theme/assets/images/blog/grid/pic2.jpg') }}" alt=""></a> 
                           </div>
                           <div class="dlab-post-info">
                              <div class="dlab-post-title ">
                                 <h3 class="post-title"><a href="car-details-overview.html">GTA 5 Lowriders DLC</a></h3>
                              </div>
                              <div class="dlab-post-text">
                                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy..</p>
                              </div>
                              <div class="dlab-post-readmore">
                                 <h2 class="m-a0 pull-left m-r15 open-sans">$ 2.41 Lakh</h2>
                                 <a href="javascript:void(0)" title="READ MORE" rel="bookmark" class="site-button" data-toggle="modal" data-target="#car-details">DETAILS</a> 
                              </div>
                              <div class="dlab-post-tags">
                                 <div class="post-tags"> 
                                    <a href="javascript:void(0)">23.9 kmpl</a> 
                                    <a href="javascript:void(0)">624 cc</a> 
                                    <a href="javascript:void(0)">4 Seats</a> 
                                    <a href="javascript:void(0)">Manual</a> 
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="blog-post blog-md clearfix date-style-2 list-view m-b30">
                           <div class="dlab-post-media dlab-img-effect zoom-slow"> 
                              <a href="javascript:void(0)"><img src="{{ asset('/theme/assets/images/blog/grid/pic3.jpg') }}" alt=""></a> 
                           </div>
                           <div class="dlab-post-info">
                              <div class="dlab-post-title ">
                                 <h3 class="post-title"><a href="car-details-overview.html">GTA 5 Lowriders DLC</a></h3>
                              </div>
                              <div class="dlab-post-text">
                                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy..</p>
                              </div>
                              <div class="dlab-post-readmore">
                                 <h2 class="m-a0 pull-left m-r15 open-sans">$ 2.41 Lakh</h2>
                                 <a href="javascript:void(0)" title="READ MORE" rel="bookmark" class="site-button" data-toggle="modal" data-target="#car-details">DETAILS</a> 
                              </div>
                              <div class="dlab-post-tags">
                                 <div class="post-tags"> 
                                    <a href="javascript:void(0)">23.9 kmpl</a> 
                                    <a href="javascript:void(0)">624 cc</a> 
                                    <a href="javascript:void(0)">4 Seats</a> 
                                    <a href="javascript:void(0)">Manual</a> 
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="modal fade car-details" id="car-details" tabindex="-1" role="dialog" >
                        <div class="modal-dialog" role="document">
                           <div class="modal-content">
                              <div style="background-image: url(images/background/bg3.jpg); background-size: 100% auto; background-position: center center;">
                                 <div class="modal-header" >
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h4 class="modal-title" id="myModalLabel">Variants Matching Your Search Criteria</h4>
                                 </div>
                              </div>
                              <div class="modal-body">
                                 <div class="table-responsive">
                                    <table class="table table-striped m-b0">
                                       <thead>
                                          <tr>
                                             <th>Brand Name</th>
                                             <th>Price</th>
                                             <th>Kmpl</th>
                                             <th>CC Engine</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr>
                                             <td>Acura Rsx</td>
                                             <td>2.36 Lakh</td>
                                             <td>23.9 kmpl</td>
                                             <td>624 cc</td>
                                          </tr>
                                          <tr>
                                             <td>Lexus GS 450h</td>
                                             <td>2.36 Lakh</td>
                                             <td>23.9 kmpl</td>
                                             <td>624 cc</td>
                                          </tr>
                                          <tr>
                                             <td>GTA 5 Lowriders</td>
                                             <td>2.36 Lakh</td>
                                             <td>23.9 kmpl</td>
                                             <td>624 cc</td>
                                          </tr>
                                          <tr>
                                             <td>Toyota avalon</td>
                                             <td>2.36 Lakh</td>
                                             <td>23.9 kmpl</td>
                                             <td>624 cc</td>
                                          </tr>
                                          <tr>
                                             <td>Lexus</td>
                                             <td>2.36 Lakh</td>
                                             <td>23.9 kmpl</td>
                                             <td>624 cc</td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                              <div class="modal-footer">
                                 <button type="button" class="site-button-secondry" data-dismiss="modal">Close</button>
                                 <button type="button" class="btn-primary site-button">View Full Details</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- blog grid END -->
                  <!-- Pagination  -->
                  <div class="pagination-bx col-lg-12 clearfix ">
                     <ul class="pagination">
                        <li class="previous"><a href="javascript:void(0)"><i class="fa fa-angle-double-left"></i></a></li>
                        <li class="active"><a href="javascript:void(0)">1</a></li>
                        <li><a href="javascript:void(0)">2</a></li>
                        <li><a href="javascript:void(0)">3</a></li>
                        <li class="next"><a href="javascript:void(0)"><i class="fa fa-angle-double-right"></i></a></li>
                     </ul>
                  </div>
                  <!-- Pagination END -->
               </div>
            </div>
            <!-- left part END -->
         </div>
      </div>
   </div>
</div>


@endsection