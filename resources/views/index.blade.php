@extends('default')


@section('content')

    <!--== Slider Area Start ==-->
    <section id="slider-area">
        <!--== slide Item One ==-->
        <div class="single-slide-item overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="book-a-car">
                            <form action="index.html">
                                <!--== Pick Up Location ==-->
                                <div class="pickup-location book-item">
                                    <h4>CHOOSE CAR TYPE:</h4>
                                    <select class="custom-select">
                                        <option selected>Select</option>
                                        @if(isset($vendors))
                                            @foreach($vendors as $vendor)
                                                <option value="{{ $vendor->id }}">{{ $vendor->name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                                <!--== Pick Up Location ==-->

                                <!--== Pick Up Date ==-->
                                 <div class="pickup-location book-item">
                                    <h4>COMPANY:</h4>
                                    <select class="custom-select">
                                      <option selected>Select</option>
                                      @if (isset($vehicleTypes))
                                        @foreach($vehicleTypes as $vehicleType)
                                            <option value="{{ $vehicleType->id }}">{{ $vehicleType->name }}</option>
                                        @endforeach
                                      @endif
                                    </select>
                                </div>
                                <!--== Pick Up Location ==-->

                                <!--== Car Choose ==-->
                                <div class="choose-car-type book-item">
                                    <h4>CHOOSE RENTAL SERVICE TYPE:</h4>
                                    <select class="custom-select">
                                      <option selected>Select</option>
                                      <option value="per-hour">PER HOUR</option>
                                      <option value="per-day">PER DAY</option>
                                    </select>
                                </div>
                                <!--== Car Choose ==-->

                                <div class="book-button text-center">
                                    <button class="book-now-btn">Book Now</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-7 text-right">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <div class="slider-right-text">
                                    <h1>{{ $generalInformation->title }}</h1>
                                    <p>{{ $generalInformation->title_description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--== slide Item One ==-->
    </section>
    <!--== Slider Area End ==-->

    <!--== About Us Area Start ==-->
    <section id="about-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>About us</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>{{ $generalInformation->about_description  }}</p>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="row">
                <!-- About Content Start -->
                <div class="col-lg-6">
                    <div class="display-table">
                        <div class="display-table-cell">
                            <div class="about-content">
                                <p>REDPANDA Rent a Car has designed their services to facilitate their valued customers to perfection. Our wide range of series of services enables clients to choose driver and the car as per their need and comfort. Our drivers are highly qualified & professional serving you in customer friendly environment</p>

                                <p>At REDPANDA Rent a Car, our main idea is to simplify travelling for you and we are here to make it happen with easiness and affordable services.</p>
                                <div class="about-btn">
                                    <a href="javascript:void(0)">Book a Car</a>
                                    <a href="javascript:void(0)">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- About Content End -->

                <!-- About Video Start -->
                <div class="col-lg-6">
                    <div class="about-video">
                        <iframe src="https://player.vimeo.com/video/121982328?title=0&byline=0&portrait=0"></iframe>
                    </div>
                </div>
                <!-- About Video End -->
            </div>
        </div>
    </section>
    <!--== About Us Area End ==-->

    <!--== About Us Area End ==-->
    <section id="about-area-2" class="section-padding" style="    background: #f1f1f3;">
        <div class="container">

            <div class="row">   

                <div class="col-lg-6">
                    <a href="https://stsrentacar.pk/types.html?type=per_hour">
                        <img src="https://stsrentacar.pk/assets/web_assets/img/perhour.png" width="100%" alt="renta a car per hour">
                    </a>
                </div>
                <div class="col-lg-6">
                    <a href="https://stsrentacar.pk/types.html?type=per_day">
                        <img src="https://stsrentacar.pk/assets/web_assets/img/perday.png" width="100%" alt="rent a car per day">
                    </a>
                </div>

            </div>
        </div>
    </section>
     <!--== About Us Area End ==-->

    <!--== Partner Area Start ==-->
    <div id="service-area" class="section-padding">
        <div class="container-fluid">
            
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="partner-content-wrap">
                        @if(isset($vehicleTypes))
                            @foreach($vehicleTypes as $vehicleType)
                                <div class="single-partner">
                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <img src="{{ asset('storage/vendors/'.$vehicleType->logo)  }}" style="height: 100px !important;" alt="{{ $vehicleType->name }}">
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif                    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== Partner Area End ==-->

    
    <!--== Mobile App Area Start ==-->
    <div id="mobileapp-video-bg"></div>
    <section id="mobile-app-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="mobile-app-content">
                        <h2>Book a car with leading Rent a car service </h2>
                        <p>Easy &amp; Fast - Book a car in 60 seconds</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Mobile App Area End ==-->

@endsection