@extends('layouts_frontend._main')

{{-- begin extra style --}}
@section('extra_style')
<style>
    .custom-style-table tr:nth-child(2n){
        background: var(--primary);
    }
</style>
@endsection
{{-- end extra style --}}

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



<div class="intro-section site-blocks-cover innerpage"
    style="background-image: url('../assets_frontend/images/hero_1.jpg');">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center">
            <div class="col-lg-8 mt-5" data-aos="fade-up">
                <h1>Sasak - Trawangan - City Tour</h1>
            </div>
        </div>
    </div>
</div>



<section class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 blog-content">
                <h2 class="text-black">Sasak - Trawangan - City Tour</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos laudantium quae, nesciunt aliquid voluptate impedit explicabo, laboriosam, eius voluptatem eos exercitationem neque doloribus dignissimos odit rem iure totam voluptatibus rerum accusamus. Ipsum, cumque illum nulla eos quaerat, earum vero nostrum debitis laboriosam exercitationem rem dolore, pariatur molestiae voluptate doloremque reprehenderit!</p>

                {{-- Begin table --}}
                <table style="width: 100%" class="custom-style-table">
                    {{-- Table head --}}
                    <tr class="text-black">
                        <th>
                            Person
                        </th>
                        <th>
                            2 - 4
                        </th>
                        <th>
                            5 - 10
                        </th>
                        <th>
                            11 - 15
                        </th>
                        <th>
                            16 - 22
                        </th>
                    </tr>
                    {{-- End table head --}}

                    {{-- Begin hotel 5 --}}
                    <tr>
                        <td class="text-black">
                            Hotel*****
                        </td>
                        <td>
                            3.350.000
                        </td>
                        <td>
                            3.275.000
                        </td>
                        <td>
                            3.150.000
                        </td>
                        <td>
                            2.950.000
                        </td>
                    </tr>
                    {{-- End hotel 5 --}}

                    {{-- begin hotel 4 --}}
                    <tr>
                        <td class="text-black">
                            Hotel****
                        </td>
                        <td>
                            2.950.000
                        </td>
                        <td>
                            2.255.000
                        </td>
                        <td>
                            2.650.000
                        </td>
                        <td>
                            2.550.000
                        </td>
                    </tr>
                    {{-- End hotel 4 --}}

                    {{-- begin hotel 3 --}}
                    <tr>
                        <td class="text-black">
                            Hotel***
                        </td>
                        <td>
                            2.950.000
                        </td>
                        <td>
                            2.255.000
                        </td>
                        <td>
                            2.650.000
                        </td>
                        <td>
                            2.550.000
                        </td>
                    </tr>
                    {{-- End hotel 3 --}}

                    {{-- begin hotel 2 --}}
                    <tr>
                        <td class="text-black">
                            Hotel**
                        </td>
                        <td>
                            2.950.000
                        </td>
                        <td>
                            2.255.000
                        </td>
                        <td>
                            2.650.000
                        </td>
                        <td>
                            2.550.000
                        </td>
                    </tr>
                    {{-- End hotel 2 --}}

                    {{-- begin hotel 1 --}}
                    <tr>
                        <td class="text-black">
                            Hotel*
                        </td>
                        <td>
                            2.950.000
                        </td>
                        <td>
                            2.255.000
                        </td>
                        <td>
                            2.650.000
                        </td>
                        <td>
                            2.550.000
                        </td>
                    </tr>
                    {{-- End hotel 1 --}}

                </table>
                {{-- End table --}}
            </div>
            <div class="col-md-4 sidebar">
                {{-- <div class="sidebar-box">
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
                </div> --}}
            </div>
        </div>
    </div>
</section>
</div>
@endsection