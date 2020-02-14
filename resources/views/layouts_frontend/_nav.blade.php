<nav class="navbar navbar-expand-lg navbar-light bg-transparent custom-sticky" style="z-index: 100000000;width:100%">
    <a class="navbar-brand" href="{{route('index')}}">Silah Lombok</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav mr-auto">
        </ul>
        <ul class="navbar-nav" style="position: relative; right: 100px">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('index')}}">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Package
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{route('package_list')}}">Package List</a>
                    <a class="dropdown-item" href="{{route('detail_package')}}">Detail Package</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Blog<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact<span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </div>
</nav>
