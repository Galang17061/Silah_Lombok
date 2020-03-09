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

    
    </div>
    
    

      <div class="intro-section" style="background-image: url('../assets_frontend/images/hero_2.jpg');">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-7 mx-auto text-center" data-aos="fade-up">
              <h1>Our package</h1>
            </div>
          </div>
        </div>
      </div>

    
    <div class="site-section">
        <div class="container">
            <div class="row">
                @foreach($data as $element)
                <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
                    <div class="blog-entry">
                    <a href="{{route('package_detail',['id'=>$element->dp_id])}}" class="img-link">
                        <img src="{{asset('../storage/app/'.$element->d_package_image[0]->dpi_image)}}" alt="Image" class="img-fluid">
                    </a>
                    <div class="blog-entry-contents">
                        <h3><a href="#">{{$element->dp_title}}</a></h3>
                    </div>
                    </div>
                </div>
                @endforeach
                
            </div>

            <div class="row text-center mt-5">
                <div class="col-12">
                    <a href="#" class="p-3 d-inline-block">1</a>
            </div>
        </div>
    </div>
  </div>
  

@endsection