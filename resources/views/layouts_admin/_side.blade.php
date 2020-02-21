<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Master</li>

                <li>
                    <a href="{{ route('user') }}" class=" waves-effect">
                        <div class="d-inline-block icons-sm mr-1"><i class="uim uim-schedule"></i></div>
                        <span>User</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <div class="d-inline-block icons-sm mr-1"><i class="uim uim-comment-message"></i></div>
                        <span>Category</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('category_package')}}">Package Category</a></li>
                        <li><a href="{{route('category_tour')}}">Tour Category</a></li>
                    </ul>
                </li>

                <li class="menu-title">Main</li>

                <li>
                    <a href="{{route('package_list')}}" class=" waves-effect">
                        <div class="d-inline-block icons-sm mr-1"><i class="uim uim-schedule"></i></div>
                        <span>Package List</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('package_detail')}}" class=" waves-effect">
                        <div class="d-inline-block icons-sm mr-1"><i class="uim uim-schedule"></i></div>
                        <span>Detail Package</span>
                    </a>
                </li>


            </ul>

        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
