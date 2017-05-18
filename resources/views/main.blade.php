<!DOCTYPE html>
<html lang="en">

@include('partials/_head')

<body>

    <a href="javascript:" id="return-to-top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>

    @include('partials/_nav')

    @include('partials/_header')

    <div class="nav-controls-container">
        <span id="menu-btn" onclick="openNav()"><i class="fa fa-bars" aria-hidden="true"></i></span>
    </div>

    <div class="container-fluid content">

    	@include('partials/_messages')

        @yield('content')

    </div>
    <!-- end of .container -->

    @include('partials/_footer')

    @include('partials/_javascript')

    @yield('scripts')

</body>

</html>