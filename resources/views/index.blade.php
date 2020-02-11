@extends('layouts_frontend._main')
@section('content')

<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>



    <div class="hero-slide owl-carousel site-blocks-cover">
        <div class="intro-section" style="background-image: url('../assets_frontend/images/hero_1.jpg');">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 ml-auto text-right" data-aos="fade-up">
                        <h1>Explore, Discover The Ocean</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, in distinctio
                            nostrum laborum sed quisquam voluptate facilis non.</p>
                        <p><a href="{{route('package_list')}}" class="btn btn-primary py-3 px-5">Read More</a></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="intro-section" style="background-image: url('../assets_frontend/images/hero_2.jpg');">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 mx-auto text-center" data-aos="fade-up">
                        <h1>Enjoy The Ocean With Your Family</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, in distinctio
                            nostrum laborum sed quisquam voluptate facilis non.</p>
                        <p><a href="{{route('package_list')}}" class="btn btn-primary py-3 px-5">Read More</a></p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- END slider -->

    {{-- <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="../assets_frontend/images/hero_2.jpg" alt="Image" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <span class="text-serif text-primary">About Us</span>
                    <h3 class="heading-92913 text-black">Welcome To Our Website</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, illum, quasi. Odit velit
                        deserunt eligendi unde, enim. Enim fugiat.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium eius ullam impedit
                        architecto debitis facilis!</p>
                    <p><a href="#" class="btn btn-primary py-3 px-4">Learn More</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="service-29283">
                        <span class="wrap-icon-39293">
                            <span class="flaticon-yacht"></span>
                        </span>
                        <h3>Luxuries Yacht</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus ipsa, ad
                            ratione quos distinctio unde.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-29283">
                        <span class="wrap-icon-39293">
                            <span class="flaticon-shield"></span>
                        </span>
                        <h3>30 Years of Experience</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus ipsa, ad
                            ratione quos distinctio unde.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-29283">
                        <span class="wrap-icon-39293">
                            <span class="flaticon-captain"></span>
                        </span>
                        <h3>Good Captain</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus ipsa, ad
                            ratione quos distinctio unde.</p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- <div class="site-section bg-image overlay" style="background-image: url('../assets_frontend/images/hero_1.jpg');">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="counter-39392">
                        <h3>349</h3>
                        <span>Number of Yacht</span>
                    </div>
                </div>
                <div class="col">
                    <div class="counter-39392">
                        <h3>7000+</h3>
                        <span>Customers Satisfied</span>
                    </div>
                </div>
                <div class="col">
                    <div class="counter-39392">
                        <h3>120</h3>
                        <span>Number of Staffs</span>
                    </div>
                </div>
                <div class="col">
                    <div class="counter-39392">
                        <h3>493</h3>
                        <span>Sea Destinations</span>
                    </div>
                </div>
                <div class="col">
                    <div class="counter-39392">
                        <h3>230</h3>
                        <span>Professional Sailors</span>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="site-section bg-light" id="site1">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center">
                    {{-- <span class="text-serif text-primary">Destination</span> --}}
                    <h2 class="text-black text-center">3D 2N Package</h2>
                    <h3 class="heading-92913 text-center">a package that suitable for family</h3>
                </div>
            </div>
            <div class="row">
                <a href="{{route('detail_package')}}">
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="service-39381">
                            <a href="{{route('detail_package')}}"><img src="../assets_frontend/images/hero_1.jpg"
                                    alt="Image" class="img-fluid" style="border-radius: 8px">
                                <div class="img-package">
                                    <h3>Tour</h3>
                                    <p>Bali - Lombok</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </a>
                <a href="{{route('detail_package')}}">
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="service-39381">
                            <a href="{{route('detail_package')}}"><img src="../assets_frontend/images/hero_2.jpg"
                                    alt="Image" class="img-fluid" style="border-radius: 8px">
                                <div class="img-package">
                                    <h3>Tour</h3>
                                    <p>Bali - Lombok</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </a><a href="{{route('detail_package')}}">
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="service-39381">
                            <a href="{{route('detail_package')}}"><img src="../assets_frontend/images/hero_1.jpg"
                                    alt="Image" class="img-fluid" style="border-radius: 8px">
                                <div class="img-package">
                                    <h3>Tour</h3>
                                    <p>Bali - Lombok</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </div>

    <div class="site-section bg-light" id="site2">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center">
                    {{-- <span class="text-serif text-primary">Destination</span> --}}
                    <h2 class="text-black text-center">4D 3N Package</h2>
                    <h3 class="heading-92913 text-center">a package that suitable for family</h3>
                </div>
            </div>
            <div class="row">
                <a href="{{route('detail_package')}}">
                    <div class="col-md-6 col-lg-4 mb-4 p-4">
                        <div class="service-39381">
                            <a href="{{route('detail_package')}}"><img src="../assets_frontend/images/hero_1.jpg"
                                    alt="Image" class="img-fluid" style="border-radius: 8px">
                                <div class="img-package">
                                    <h3>Tour</h3>
                                    <p>Bali - Lombok</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </a>
                <a href="{{route('detail_package')}}">
                    <div class="col-md-6 col-lg-4 mb-4 p-4">
                        <div class="service-39381">
                            <a href="{{route('detail_package')}}"><img src="../assets_frontend/images/hero_2.jpg"
                                    alt="Image" class="img-fluid" style="border-radius: 8px">
                                <div class="img-package">
                                    <h3>Tour</h3>
                                    <p>Bali - Lombok</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </a>
                <a href="{{route('detail_package')}}">
                    <div class="col-md-6 col-lg-4 mb-4 p-4">
                        <div class="service-39381">
                            <a href="{{route('detail_package')}}"><img src="../assets_frontend/images/hero_1.jpg"
                                    alt="Image" class="img-fluid" style="border-radius: 8px">
                                <div class="img-package">
                                    <h3>Tour</h3>
                                    <p>Bali - Lombok</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </a>
                <a href="{{route('detail_package')}}">
                    <div class="col-md-6 col-lg-4 mb-4 p-4">
                        <div class="service-39381">
                            <a href="{{route('detail_package')}}"><img src="../assets_frontend/images/hero_2.jpg"
                                    alt="Image" class="img-fluid" style="border-radius: 8px">
                                <div class="img-package">
                                    <h3>Tour</h3>
                                    <p>Bali - Lombok</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </a>
                <a href="{{route('detail_package')}}">
                    <div class="col-md-6 col-lg-4 mb-4 p-4">
                        <div class="service-39381">
                            <a href="{{route('detail_package')}}"><img src="../assets_frontend/images/hero_1.jpg"
                                    alt="Image" class="img-fluid" style="border-radius: 8px">
                                <div class="img-package">
                                    <h3>Tour</h3>
                                    <p>Bali - Lombok</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </a>
                <a href="{{route('detail_package')}}">
                    <div class="col-md-6 col-lg-4 mb-4 p-4">
                        <div class="service-39381">
                            <a href="{{route('detail_package')}}"><img src="../assets_frontend/images/hero_1.jpg"
                                    alt="Image" class="img-fluid" style="border-radius: 8px">
                                <div class="img-package">
                                    <h3>Tour</h3>
                                    <p>Bali - Lombok</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </div>

    <div class="site-section bg-light" id="site3">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center">
                    {{-- <span class="text-serif text-primary">Destination</span> --}}
                    <h2 class="text-black text-center">Special Package</h2>
                    <h3 class="heading-92913 text-center">a package that suitable for family</h3>
                </div>
            </div>
            <div class="row">
                <a href="{{route('detail_package')}}">
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="service-39381">
                            <a href="{{route('detail_package')}}"><img src="../assets_frontend/images/hero_1.jpg"
                                    alt="Image" class="img-fluid" style="border-radius: 8px">
                                <div class="img-package">
                                    <h3>Tour</h3>
                                    <p>Bali - Lombok</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    {{-- 
    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <p><img src="../assets_frontend/images/hero_1.jpg" alt="Image" class="img-fluid"></p>
                </div>
                <div class="col-md-5">
                    <span class="text-serif text-primary">Book Now</span>
                    <h3 class="heading-92913 text-black">Book A Yacht</h3>
                    <form action="#" class="row">
                        <div class="form-group col-md-6">
                            <label for="input-1">Full Name:</label>
                            <input type="text" class="form-control" id="input-1">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="input-2">Number of People:</label>
                            <input type="text" class="form-control" id="input-2">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="input-3">Date From:</label>
                            <input type="text" class="form-control datepicker" id="input-3">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="input-4">Date To:</label>
                            <input type="text" class="form-control datepicker" id="input-4">
                        </div>

                        <div class="form-group col-md-12">
                            <label for="input-5">Yacht You're Interested in:</label>
                            <select name="" id="input-5" class="form-control">
                                <option value="">Motor Yacht</option>
                                <option value="">Hi-Speed Yacht</option>
                                <option value="">Premium Yacht</option>
                                <option value="">Presidential Yacht</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="input-6">Email Address</label>
                            <input type="text" class="form-control" id="input-6">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="input-7">Phone Number</label>
                            <input type="text" class="form-control" id="input-7">
                        </div>



                        <div class="form-group col-md-12">
                            <label for="input-8">Notes</label>
                            <textarea name="" id="input-8" cols="30" rows="5" class="form-control"></textarea>
                        </div>

                        <div class="form-group col-md-12">
                            <input type="submit" class="btn btn-primary py-3 px-5" value="Book Now">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="site-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center">
                    <span class="text-serif text-primary">Team</span>
                    <h3 class="heading-92913 text-black text-center">Our Team</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-lg-0">
                    <div class="person">
                        <figure>
                            <img src="../assets_frontend/images/person_1.jpg" alt="Image" class="img-fluid">
                            <div class="social">
                                <a href="#"><span class="icon-facebook"></span></a>
                                <a href="#"><span class="icon-twitter"></span></a>
                                <a href="#"><span class="icon-linkedin"></span></a>
                            </div>
                        </figure>
                        <div class="person-contents">
                            <h3>Craig Daniel</h3>
                            <span class="position">Engineer</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-lg-0">
                    <div class="person">
                        <figure>
                            <img src="../assets_frontend/images/person_2.jpg" alt="Image" class="img-fluid">
                            <div class="social">
                                <a href="#"><span class="icon-facebook"></span></a>
                                <a href="#"><span class="icon-twitter"></span></a>
                                <a href="#"><span class="icon-linkedin"></span></a>
                            </div>
                        </figure>
                        <div class="person-contents">
                            <h3>Craig Daniel</h3>
                            <span class="position">Engineer</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-lg-0">
                    <div class="person">
                        <figure>
                            <img src="../assets_frontend/images/person_3.jpg" alt="Image" class="img-fluid">
                            <div class="social">
                                <a href="#"><span class="icon-facebook"></span></a>
                                <a href="#"><span class="icon-twitter"></span></a>
                                <a href="#"><span class="icon-linkedin"></span></a>
                            </div>
                        </figure>
                        <div class="person-contents">
                            <h3>Craig Daniel</h3>
                            <span class="position">Engineer</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-lg-0">
                    <div class="person">
                        <figure>
                            <img src="../assets_frontend/images/person_4.jpg" alt="Image" class="img-fluid">
                            <div class="social">
                                <a href="#"><span class="icon-facebook"></span></a>
                                <a href="#"><span class="icon-twitter"></span></a>
                                <a href="#"><span class="icon-linkedin"></span></a>
                            </div>
                        </figure>
                        <div class="person-contents">
                            <h3>Craig Daniel</h3>
                            <span class="position">Engineer</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center">
                    <span class="text-serif text-primary">Testimonial</span>
                    <h3 class="heading-92913 text-black text-center">What Customer Saying...</h3>
                </div>
            </div>
            <div class="row">
                <div class="mb-4 mb-lg-0 col-md-6 col-lg-4">
                    <div class="testimony-39291">
                        <blockquote>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem laborum cumque
                                commodi, unde doloribus.</p>
                        </blockquote>
                        <div class="d-flex vcard align-items-center">
                            <div class="pic mr-3">
                                <img src="../assets_frontend/images/person_3_sq.jpg" alt="Image" class="img-fluid">
                            </div>
                            <div class="text">
                                <strong class="d-block">John Doe</strong>
                                <span>CEO and Co-Founder</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-4 mb-lg-0 col-md-6 col-lg-4">
                    <div class="testimony-39291">
                        <blockquote>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem laborum cumque
                                commodi, unde doloribus.</p>
                        </blockquote>
                        <div class="d-flex vcard align-items-center">
                            <div class="pic mr-3">
                                <img src="../assets_frontend/images/person_4_sq.jpg" alt="Image" class="img-fluid">
                            </div>
                            <div class="text">
                                <strong class="d-block">John Doe</strong>
                                <span>CEO and Co-Founder</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-4 mb-lg-0 col-md-6 col-lg-4">
                    <div class="testimony-39291">
                        <blockquote>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem laborum cumque
                                commodi, unde doloribus.</p>
                        </blockquote>
                        <div class="d-flex vcard align-items-center">
                            <div class="pic mr-3">
                                <img src="../assets_frontend/images/person_3_sq.jpg" alt="Image" class="img-fluid">
                            </div>
                            <div class="text">
                                <strong class="d-block">John Doe</strong>
                                <span>CEO and Co-Founder</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="site-section bg-image overlay " style="background-image: url('../assets_frontend/images/hero_2.jpg');">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-md-7 text-center">
                    {{-- <h2 class="text-white">Get In Touch With Us</h2> --}}
                    <p class="lead text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <p class="mb-0 text-black" style="font-weight: 800">John Doe</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-8 blog-content custom-blog">
                <p class="custom-cv">Why CV Silah Lombok <br> Tour and Travel</p>
            </div>
            {{-- <div class="col-md-4 sidebar">
                <div class="sidebar-box">
                    <form action="#" class="search-form">
                        <div class="form-group">
                            <span class="icon fa fa-search"></span>
                            <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                        </div>
                    </form>
                </div>
                <div class="sidebar-box">
                    <div class="categories">
                        <h3 class="text-black">Categories</h3>
                        <li><a href="#">Creatives <span>(12)</span></a></li>
                        <li><a href="#">News <span>(22)</span></a></li>
                        <li><a href="#">Design <span>(37)</span></a></li>
                        <li><a href="#">HTML <span>(42)</span></a></li>
                        <li><a href="#">Web Development <span>(14)</span></a></li>
                    </div>
                </div>
                <div class="sidebar-box">
                    <img src="../assets_frontend/images/person_4_sq.jpg" alt="Image placeholder" class="img-fluid mb-4">
                    <h3 class="text-black">About The Author</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus
                        voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur
                        similique, inventore eos fugit cupiditate numquam!</p>
                    <p><a href="#" class="btn btn-primary btn-sm px-5 rounded-0">Read More</a></p>
                </div>

                <div class="sidebar-box">
                    <h3 class="text-black">Paragraph</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus
                        voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur
                        similique, inventore eos fugit cupiditate numquam!</p>
                </div>
            </div> --}}
        </div>
    </div>
</div>
@endsection