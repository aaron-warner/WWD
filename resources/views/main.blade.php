<!DOCTYPE html>
<html lang="en">

@include('partials/_head')

<body>

	@if (!Request::is('/'))
    	<a href="javascript:" id="return-to-top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
    @endif

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