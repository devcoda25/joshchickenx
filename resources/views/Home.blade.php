@extends('components.layout')

@section('content')

    <div class="container-xxl py-5 bg-dark hero-header mb-5">
        <div class="container my-2 py-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="display-3 text-white animated slideInLeft">Enjoy Our<br>Delicious Meals</h1>
                    <p class="text-white animated slideInLeft mb-4 pb-2">Enjoy our delicious meals, prepared with simple ingredients and designed to delight your taste buds. Whether you're looking for a quick and easy dinner or a comforting meal to unwind after a long day, we have a variety of options for you</p>
                    <a href="https://wa.me/c/256708978299" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">ORDER NOW</a>
                </div>
                <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                    <img class="img-fluid" src="{{ asset('assets/img/DE.png')}}" alt="hero-image">
                </div>
            </div>
        </div>
    </div>
</div>

@include('components.serve')

<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s"       src="{{asset('assets/imgx/luzan.jpg')}}">
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="{{asset('assets/imgx/rice.jpg')}}" style="margin-top: 25%;">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="{{asset('assets/imgx/four.jpg')}}">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="{{asset('assets/imgx/pilau.jpg')}}">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h5 class="section-title ff-secondary text-start text-primary fw-normal">About Us</h5>
                <h1 class="mb-4">Welcome to <i class="fa fa-utensils text-primary me-2"></i>Josh Chicken and Lusaniya</h1>
                
                <p class="mb-4">This restaurant is a cozy and welcoming place where people can gather to enjoy a delicious meal. The aroma of crispy, perfectly seasoned chicken fills the air, enticing passersby to step inside. The menu offers a variety of chicken dishes, from classic fried chicken to grilled or baked options, all made with high-quality ingredients and expertly prepared by skilled chefs. Customers can also enjoy a side of crispy, golden chips, perfectly seasoned and cooked to perfection. The restaurant takes pride in using fresh, never frozen, chicken and locally sourced potatoes for their chips. The friendly staff, comfortable atmosphere, and delicious food make this chicken restaurant a popular destination for families, friends, and anyone looking for a satisfying meal.</p>
                <div class="row g-4 mb-4">
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                            <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">4</h1>
                            <div class="ps-4">
                                <p class="mb-0">Years of</p>
                                <h6 class="text-uppercase mb-0">Experience</h6>
                            </div>
                        </div>
                    </div>
               
                </div>
                <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


@include('components.items')





@include('components.team')




@endsection
